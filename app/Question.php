<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Question  extends Model
{
    protected $fillable = [
        'name','expression','test_id','answer',
    ];

    public function Answers()
    {
        $this->hasOne('App\Answer');
    }

    public function Test()
    {
        $this->belongsTo('App\Test');
    }
}
