<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biblio extends Model
{
    use HasFactory;

    protected $connection="mysql2";

    protected $table="biblio";

    public function Item(){
        return $this->hasMany(Item::class,'biblionumber','biblionumber');
    }

    // public function issue(){
    //     retutn $this->hasManyThrough(Issue::class,Item:class,'biblio')
    // }


}
