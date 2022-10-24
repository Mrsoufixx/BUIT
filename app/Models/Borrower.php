<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    use HasFactory;

    protected $connection="mysql2";

    protected $fillable= ['surname','firstname','cardnumber','email'];

    protected $table="borrowers";

    protected $guarded=['surname','email'];

    public function issue(){
        return $this->hasMany(Issue::class,'itemnumber','itemnumber');
    }
    public function oldissue(){
        return $this->hasMany(OldIssue::class,'itemnumber','itemnumber');
    }
    public function delayissue(){
        return $this->hasMany(DelayIssue::class,'itemnumber','itemnumber');
    }

    // public function getFullnameAttribute(){
    //     return $this->firstname ." ".$this->surname;
    // }

}
