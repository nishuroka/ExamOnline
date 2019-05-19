<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreategradeRequest;
use App\Http\Requests\UpdategradeRequest;
use App\Repositories\gradeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class gradeController extends AppBaseController
{
    /** @var  gradeRepository */
    private $gradeRepository;

    public function __construct(gradeRepository $gradeRepo)
    {
        $this->gradeRepository = $gradeRepo;
    }

    /**
     * Display a listing of the grade.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $grades = $this->gradeRepository->paginate(10);

        return view('grades.index')
            ->with('grades', $grades);
    }

    /**
     * Show the form for creating a new grade.
     *
     * @return Response
     */
    public function create()
    {
        return view('grades.create');
    }

    /**
     * Store a newly created grade in storage.
     *
     * @param CreategradeRequest $request
     *
     * @return Response
     */
    public function store(CreategradeRequest $request)
    {
        $input = $request->all();

        $grade = $this->gradeRepository->create($input);

        Flash::success('Grade saved successfully.');

        return redirect(route('grades.index'));
    }

    /**
     * Display the specified grade.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $grade = $this->gradeRepository->find($id);

        if (empty($grade)) {
            Flash::error('Grade not found');

            return redirect(route('grades.index'));
        }

        return view('grades.show')->with('grade', $grade);
    }

    /**
     * Show the form for editing the specified grade.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $grade = $this->gradeRepository->find($id);

        if (empty($grade)) {
            Flash::error('Grade not found');

            return redirect(route('grades.index'));
        }

        return view('grades.edit')->with('grade', $grade);
    }

    /**
     * Update the specified grade in storage.
     *
     * @param int $id
     * @param UpdategradeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdategradeRequest $request)
    {
        $grade = $this->gradeRepository->find($id);

        if (empty($grade)) {
            Flash::error('Grade not found');

            return redirect(route('grades.index'));
        }

        $grade = $this->gradeRepository->update($request->all(), $id);

        Flash::success('Grade updated successfully.');

        return redirect(route('grades.index'));
    }

    /**
     * Remove the specified grade from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $grade = $this->gradeRepository->find($id);

        if (empty($grade)) {
            Flash::error('Grade not found');

            return redirect(route('grades.index'));
        }

        $this->gradeRepository->delete($id);

        Flash::success('Grade deleted successfully.');

        return redirect(route('grades.index'));
    }
}
