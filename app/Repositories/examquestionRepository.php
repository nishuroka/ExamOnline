<?php

namespace App\Repositories;

use App\Models\examquestion;
use App\Repositories\BaseRepository;

/**
 * Class examquestionRepository
 * @package App\Repositories
 * @version April 8, 2019, 5:15 pm UTC
*/

class examquestionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'question',
        'option1',
        'option2',
        'option3',
        'option4',
        'correct_answer',
        'marks'
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
        return examquestion::class;
    }
}
