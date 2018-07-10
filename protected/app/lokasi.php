<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    protected $table = "t_lokasi";
    protected $fillable = [
      'id','nama','lokasi','flag_aktif'
    ];
}
