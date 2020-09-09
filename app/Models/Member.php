<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Member
 * @package App\Models
 * @version September 4, 2020, 10:09 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $type
 * @property string $gender
 */
class Member extends Model
{
    use SoftDeletes;

    public $table = 'members';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'password',
        'type',
        'gender'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'type' => 'string',
        'gender' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'gender' => 'required'
    ];

    
}
