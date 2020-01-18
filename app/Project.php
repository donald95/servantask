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
     * Get the tasks for the project.
     */
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
