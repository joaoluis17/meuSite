<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
    protected $fillable = ['numero'];
    public $timestamps = false;

    public function album () {

        return $this->belongsTo(Album::class);
    }

    public function faixa () {

        return $this->hasMany(  Faixa::class);
    }

}
