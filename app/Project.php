<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    public $timestamps = true;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $table = 'projects';

    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
