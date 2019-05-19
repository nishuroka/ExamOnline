<?php

namespace App\Repositories;

use App\Models\exam;
use App\Repositories\BaseRepository;

/**
 * Class examRepository
 * @package App\Repositories
 * @version April 8, 2019, 10:37 am UTC
*/

class examRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ask_randomly',
        'exam_code',
        'exam_name',
        'exam_date',
        'start_time',
        'exam_duration',
        'total_marks'
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
        return exam::class;
    }
}
