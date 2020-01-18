<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'date_start',
        'date_end',
        'date_end_real'
    ];

    public function parent()
    {
        return  $this->belongsTo('App\Task');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task', 'parent_id');
    }
}
