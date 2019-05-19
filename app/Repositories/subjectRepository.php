<?php

namespace App\Repositories;

use App\Models\subject;
use App\Repositories\BaseRepository;

/**
 * Class subjectRepository
 * @package App\Repositories
 * @version April 8, 2019, 10:32 am UTC
*/

class subjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sub_code',
        'subject'
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
        return subject::class;
    }
}
