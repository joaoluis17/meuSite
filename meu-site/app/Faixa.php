<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faixa extends Model
{
    public $timestamps = false;
    protected $fillable = ['numero'];

    public function volume () {

        return $this->belongsTo(Volume::class);
    }
}
