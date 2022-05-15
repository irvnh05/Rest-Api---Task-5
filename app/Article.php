<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'title',
        'content',
        'image',
        'users_id',
        'categories_id',

    ];

    protected $hidden = [

    ];

    // public function details(){
    //     return $this->hasMany( TransactionDetail::class, 'transactions_id', 'id' );
    // }

    public function user(){
        return $this->belongsTo( User::class, 'users_id','id' );
    }

    public function category(){
        return $this->belongsTo( Category::class, 'categories_id','id' );
    }

}
