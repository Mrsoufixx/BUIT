<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Borrower;
use App\Models\Item;
use Carbon\Carbon;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = [
        'issue_id', 'borrowernumber', 'itemnumber'
    ];

    protected $connection="mysql2";

    protected $table="issues";

    protected $appends = ['date'];

    public function borrower(){
        return $this->belongsTo(Borrower::class,'borrowernumber','borrowernumber');
    }


    public function item(){
        return $this->belongsTo(Item::class,'itemnumber','itemnumber');
    }

    
}
