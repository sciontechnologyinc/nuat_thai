<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmassage extends Model
{
    protected $table="bookmassage";
	protected $fillable = [
        'fullname',
        'contactno',
        'noofreservation',
        'datetime',
        'package'
	];

}