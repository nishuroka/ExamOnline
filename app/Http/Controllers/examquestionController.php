<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateexamquestionRequest;
use App\Http\Requests\UpdateexamquestionRequest;
use App\Repositories\examquestionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\exam;
use Flash;
use Response;

class examquestionController extends AppBaseController
{
    /** @var  examquestionRepository */
    private $examquestionRepository;

    public function __construct(examquestionRepository $examquestionRepo)
    {
        $this->examquestionRepository = $examquestionRepo;
    }

    /**
     * Display a listing of the examquestion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $examquestions = $this->examquestionRepository->paginate(15);

        return view('examquestions.index')
            ->with('examquestions', $examquestions);
    }

    /**
     * Show the form for creating a new examquestion.
     *
     * @return Response
     */
    public function create()
    {
        $examquestion = exam::all()->sortBy('exam_code')->pluck('exam_code','id');
        return view('examquestions.create', compact('examquestion'));
    }

    /**
     * Store a newly created examquestion in storage.
     *
     * @param CreateexamquestionRequest $request
     *
     * @return Response
     */
    public function store(CreateexamquestionRequest $request)
    {
        $input = $request->all();

        $examquestion = $this->examquestionRepository->create($input);

        Flash::success('Examquestion saved successfully.');

        return redirect(route('examquestions.index'));
    }

    /**
     * Display the specified examquestion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $examquestion = $this->examquestionRepository->find($id);

        if (empty($examquestion)) {
            Flash::error('Examquestion not found');

            return redirect(route('examquestions.index'));
        }

        return view('examquestions.show')->with('examquestion', $examquestion);
    }

    /**
     * Show the form for editing the specified examquestion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $examquestion = $this->examquestionRepository->find($id);
        $examquestion = exam::all()->sortBy('exam_code')->pluck('exam_code','id');

        if (empty($examquestion)) {
            Flash::error('Examquestion not found');

            return redirect(route('examquestions.index'));
        }

        return view('examquestions.edit', compact('examquestion'))->with('examquestion', $examquestion);
    }

    /**
     * Update the specified examquestion in storage.
     *
     * @param int $id
     * @param UpdateexamquestionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateexamquestionRequest $request)
    {
        $examquestion = $this->examquestionRepository->find($id);

        if (empty($examquestion)) {
            Flash::error('Examquestion not found');

            return redirect(route('examquestions.index'));
        }

        $examquestion = $this->examquestionRepository->update($request->all(), $id);

        Flash::success('Examquestion updated successfully.');

        return redirect(route('examquestions.index'));
    }

    /**
     * Remove the specified examquestion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $examquestion = $this->examquestionRepository->find($id);

        if (empty($examquestion)) {
            Flash::error('Examquestion not found');

            return redirect(route('examquestions.index'));
        }

        $this->examquestionRepository->delete($id);

        Flash::success('Examquestion deleted successfully.');

        return redirect(route('examquestions.index'));
    }
}
