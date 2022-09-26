<?php

namespace AjayJoshi\PolymorphicHistory\Model;

use Illuminate\Database\Eloquent\Model;

class ModelHistory extends Model {


    
    protected $dates = ['date', 'created_at', 'deleted_at'];

    public function historiable()
    {
        return $this->morphTo();
    }
    public function user(){

        $this->belongsTo(\App\Models\User::class);
    }

    /**
     * returns the entity of the given class
     * or null if the class was not found!
     *
     * @return mixed
     */

    // public function getEntity() {

    //     $class = $this->entity;

    //     if(!class_exists($class)) {
    //         // the class does not exist
    //         return null;
    //     }

    //     // get the object of the respective class!
    //     $object = call_user_func($class . '::findOrFail', $this->entity_id);

    //     return $object;
    // }
}