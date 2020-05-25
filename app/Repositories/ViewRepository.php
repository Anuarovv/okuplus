<?php

namespace App\Repositories;

use App\Models\View;
use App\Repositories\BaseRepository;

/**
 * Class ViewRepository
 * @package App\Repositories
 * @version April 19, 2020, 8:41 am UTC
*/

class ViewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'user_account_id',
        'category_id',
        'course_id',
        'item_id'
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
        return View::class;
    }
}
