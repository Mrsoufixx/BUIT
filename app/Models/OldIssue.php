<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OldIssue extends Model
{
    use HasFactory;

    protected $connection="mysql2";

    protected $table="old_issues";

    protected $guarded=[];

    public function borrower(){
        return $this->belongsTo(Borrower::class,'borrowernumber','borrowernumber');
    }

    public function item(){
        return $this->belongsTo(Item::class,'itemnumber','itemnumber');
    }

}

