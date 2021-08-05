<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faixa extends Model
{
    protected $fillable = ['numero'];
    public $timestamps = false;

    public function volume () {

        return $this->belongsTo(Volume::class);
    }
}
