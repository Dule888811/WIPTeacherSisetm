<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Question  extends Model
{
    protected $fillable = [
        'name','expression','test_id','answer_id',
    ];

    public function Answers()
    {
        $this->hasMany('App\Answer');
    }

    public function Tests()
    {
        $this->belongsTo('App\Test');
    }
}
