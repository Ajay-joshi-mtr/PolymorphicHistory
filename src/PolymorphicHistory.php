<?php

namespace AjayJoshi\PolymorphicHistory;

use AjayJoshi\PolymorphicHistory\Model\ModelHistory;

class PolymorphicHistory
{
    
    public function log($obj, $action,$body = NULL,$remark = NULL)
    {
        $actions = config('polymorphic-history.actions');

        $ModelHistory = new ModelHistory();
        
        $ModelHistory->body = $body;
        $ModelHistory->remark = $remark;       
       
        $ModelHistory->historiable_id =  $obj->id;
        $ModelHistory->historiable_type = get_class($obj);

        $ModelHistory->action = $actions::getKeyForValue($action);
        $ModelHistory->action_id = $action;
        
        $ModelHistory->save();

        return $ModelHistory;
    }
    
}
