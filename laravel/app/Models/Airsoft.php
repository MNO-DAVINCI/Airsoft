<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Airsoft extends Model
{
    public $timestamps = false;
    protected $table = 'airsofts';
    protected $fillable = ['name'];
}
