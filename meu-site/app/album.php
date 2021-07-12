<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $table = 'albuns';
    public $timestamps = false;
    protected $fillable = ['nome', 'id'];
}
