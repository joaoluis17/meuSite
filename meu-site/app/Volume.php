<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
    public $timestamps = false;
    protected $fillable = ['numero'];

    public function faixa () {

        return $this->hasMany(  Faixa::class);
    }

    public function album () {

        return $this->belongsTo(Album::class);
    }
}
