<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatequizquestionRequest;
use App\Http\Requests\UpdatequizquestionRequest;
use App\Repositories\quizquestionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class quizquestionController extends AppBaseController
{
    /** @var  quizquestionRepository */
    private $quizquestionRepository;

    public function __construct(quizquestionRepository $quizquestionRepo)
    {
        $this->quizquestionRepository = $quizquestionRepo;
    }

    /**
     * Display a listing of the quizquestion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $quizquestions = $this->quizquestionRepository->paginate(10);

        return view('quizquestions.index')
            ->with('quizquestions', $quizquestions);
    }

    /**
     * Show the form for creating a new quizquestion.
     *
     * @return Response
     */
    public function create()
    {
        return view('quizquestions.create');
    }

    /**
     * Store a newly created quizquestion in storage.
     *
     * @param CreatequizquestionRequest $request
     *
     * @return Response
     */
    public function store(CreatequizquestionRequest $request)
    {
        $input = $request->all();

        $quizquestion = $this->quizquestionRepository->create($input);

        Flash::success('Quizquestion saved successfully.');

        return redirect(route('quizquestions.index'));
    }

    /**
     * Display the specified quizquestion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $quizquestion = $this->quizquestionRepository->find($id);

        if (empty($quizquestion)) {
            Flash::error('Quizquestion not found');

            return redirect(route('quizquestions.index'));
        }

        return view('quizquestions.show')->with('quizquestion', $quizquestion);
    }

    /**
     * Show the form for editing the specified quizquestion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $quizquestion = $this->quizquestionRepository->find($id);

        if (empty($quizquestion)) {
            Flash::error('Quizquestion not found');

            return redirect(route('quizquestions.index'));
        }

        return view('quizquestions.edit')->with('quizquestion', $quizquestion);
    }

    /**
     * Update the specified quizquestion in storage.
     *
     * @param int $id
     * @param UpdatequizquestionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatequizquestionRequest $request)
    {
        $quizquestion = $this->quizquestionRepository->find($id);

        if (empty($quizquestion)) {
            Flash::error('Quizquestion not found');

            return redirect(route('quizquestions.index'));
        }

        $quizquestion = $this->quizquestionRepository->update($request->all(), $id);

        Flash::success('Quizquestion updated successfully.');

        return redirect(route('quizquestions.index'));
    }

    /**
     * Remove the specified quizquestion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $quizquestion = $this->quizquestionRepository->find($id);

        if (empty($quizquestion)) {
            Flash::error('Quizquestion not found');

            return redirect(route('quizquestions.index'));
        }

        $this->quizquestionRepository->delete($id);

        Flash::success('Quizquestion deleted successfully.');

        return redirect(route('quizquestions.index'));
    }
}
