<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Biblio;

class Item extends Model
{
    use HasFactory;

    protected $connection="mysql2";

    protected $table="items";

    public function biblio(){
        return $this->belongsTo(Biblio::class,'biblionumber','biblionumber');
    }
    public function issue(){
        return $this->hasMany(Issue::class,'biblionumber','biblionumber');
    }
    public function oldissue(){
        return $this->hasMany(OldIssue::class,'biblionumber','biblionumber');
    }
    public function delayissue(){
        return $this->hasMany(DelayIssue::class,'itemnumber','itemnumber');
    }


}
