<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albuns';
    public $timestamps = false;
    protected $fillable = ['nome', 'id'];

    public function volume () {

        return $this->hasMany(  Volume::class);
    }

}
