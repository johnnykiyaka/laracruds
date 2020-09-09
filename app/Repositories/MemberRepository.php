<?php

namespace App\Repositories;

use App\Models\Member;
use App\Repositories\BaseRepository;

/**
 * Class MemberRepository
 * @package App\Repositories
 * @version September 4, 2020, 10:09 pm UTC
*/

class MemberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'type',
        'gender'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Member::class;
    }
}
