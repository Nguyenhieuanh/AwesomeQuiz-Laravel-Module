<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = "answers";

    protected $fillable = [
        "answer_content"
    ];

    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }
}
