<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model {

    protected $primaryKey = 'ordID';
    protected $table = 'orders';
    protected $fillable = array('ordDate', 'DueDate', 'DLineDate','Quantity','status','delMethod','delCharge','paymentMethod','delID','cusID');
    public $timestamps = false;

}
