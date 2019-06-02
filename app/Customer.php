<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = "customer";
    // ['name','gender' , 'email', 'address', 'phone_number', 'note','created_at','updated_at']
    public function bill(){
        return $this->hasMany('App\Bill','id_customer','id');
    }
}
