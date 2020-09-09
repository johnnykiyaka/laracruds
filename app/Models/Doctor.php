<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Doctor
 * @package App\Models
 * @version September 4, 2020, 5:50 am UTC
 *
 * @property string $title
 * @property string $name
 */
class Doctor extends Model
{
    use SoftDeletes;

    public $table = 'doctors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    
}
