<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
        'users_id',

    ];

    protected $hidden = [

    ];

    // public function details(){
    //     return $this->hasMany( TransactionDetail::class, 'transactions_id', 'id' );
    // }

    public function user(){
        return $this->belongsTo( User::class, 'users_id','id' );
    }

}
