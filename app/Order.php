<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Table Name
    protected $table = 'orders';

    // Primary Key
    public $primaryKey = 'id';
    
    // Timestamps
    public $timestamps = true;

    // relation with city_zone
    public function city_zone(){
        return $this->belongsTo('App\CityZone');
    }

    
    
    
}
