<?php
 
namespace AjayJoshi\PolymorphicHistory\Traits;


use AjayJoshi\PolymorphicHistory\Model\ModelHistory;

trait ModelHistoryTrait
{
    /**
     * Users can have many Userhistories.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function modelActivity()
    {
        return $this->morphMany(ModelHistory::class, 'historiable')->orderBy("created_at", "DESC");
    }

    /**
     * Creates a new ModelHistory entry and returns it
     *
     * @param $obj
     * @param $action
     * @return ModelHistory
     */

    public function log($obj, $action,$body = NULL,$remark = NULL,$user = NULL)
    {
        $actions = config('polymorphic-history.actions');
        
        $ModelHistory = new ModelHistory();
        
        $ModelHistory->body = $body;
        $ModelHistory->remark = $remark;       
       
        $ModelHistory->historiable_id =  $obj->id;
        $ModelHistory->historiable_type = get_class($obj);
        
        $ModelHistory->user_id = $user ? $user->id : auth()->user()->id; //set auth user default

        $ModelHistory->action = $actions::getKeyForValue($action);
        $ModelHistory->action_id = $action;
        
        $ModelHistory->save();

        return $ModelHistory;
    }
    
}
