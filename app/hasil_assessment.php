<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hasil_assessment extends Model
{
    protected $fillable = ['korban', 'infrastruktur', 'lokasi', 'petugas'];
}
