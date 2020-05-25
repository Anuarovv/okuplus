<?php

namespace App\Repositories;

use App\Models\CourseUser;
use App\Repositories\BaseRepository;

/**
 * Class CourseUserRepository
 * @package App\Repositories
 * @version April 19, 2020, 8:36 am UTC
*/

class CourseUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'user_account_id',
        'paid_date',
        'expiry_date',
        'plan',
        'paid_amount',
        'status'
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
        return CourseUser::class;
    }
}
