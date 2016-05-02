<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    //
    protected $table = 'discount';
    protected $primaryKey = 'did';
    protected $fillable = array('iname', 'dtype', 'ipersentage', 'iprice', 'imgpath', 'sdate', 'edate', 'itid' );
}
