<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jiries extends Model
{
    public $timestamps = true;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $fillable = [
        'course_name',
        'academic_year',
        'exam_session',
        'date_event'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $table = 'jiries';

    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
