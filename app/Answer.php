<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'value','question_id'
    ];

   public function Question()
    {
        $this->belongsTo('App\Question');
    }
}
