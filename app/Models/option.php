<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function question()
    {
        return $this->belongsTo(Question::class, 'question_Id', 'id');
    }
}
