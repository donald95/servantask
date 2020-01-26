<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'date_start',
        'date_end',
        'date_end_real'
    ];

    /**
     * Get the tasks from project.
     */
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    /**
     * Get the user that owns the project.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
