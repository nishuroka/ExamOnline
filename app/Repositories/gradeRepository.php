<?php

namespace App\Repositories;

use App\Models\grade;
use App\Repositories\BaseRepository;

/**
 * Class gradeRepository
 * @package App\Repositories
 * @version April 8, 2019, 10:30 am UTC
*/

class gradeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'class'
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
        return grade::class;
    }
}
