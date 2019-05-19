<?php

namespace App\Repositories;

use App\Models\quizquestion;
use App\Repositories\BaseRepository;

/**
 * Class quizquestionRepository
 * @package App\Repositories
 * @version April 8, 2019, 5:32 pm UTC
*/

class quizquestionRepository extends BaseRepository
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
        'correct_answer'
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
        return quizquestion::class;
    }
}
