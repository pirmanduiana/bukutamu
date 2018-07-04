<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    protected $table = "t_tamu";
    protected $fillable = [
      'id','nama','email','no_hp','asal'
    ];
}
