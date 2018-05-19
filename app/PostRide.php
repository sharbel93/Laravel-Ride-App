<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postRide extends Model
{
    // Table Name
    protected $table = 'postrides';
    //primary Key
    public $primaryKey = 'id';
    public $foreignKey = 'user_id';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');

    }
}
