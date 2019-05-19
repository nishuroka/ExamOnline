<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesubjectRequest;
use App\Http\Requests\UpdatesubjectRequest;
use App\Repositories\subjectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\grade;
use Flash;
use Response;

class subjectController extends AppBaseController
{
    /** @var  subjectRepository */
    private $subjectRepository;

    public function __construct(subjectRepository $subjectRepo)
    {
        $this->subjectRepository = $subjectRepo;
    }

    /**
     * Display a listing of the subject.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $subjects = $this->subjectRepository->all();

        return view('subjects.index')
            ->with('subjects', $subjects);
    }

    /**
     * Show the form for creating a new subject.
     *
     * @return Response
     */
    public function create()
    {
        $class = grade::all()->sortBy('class')->pluck('class','id');
        return view('subjects.create' , compact('class'));
    }

    /**
     * Store a newly created subject in storage.
     *
     * @param CreatesubjectRequest $request
     *
     * @return Response
     */
    public function store(CreatesubjectRequest $request)
    {
        $input = $request->all();

        $subject = $this->subjectRepository->create($input);

        Flash::success('Subject saved successfully.');

        return redirect(route('subjects.index'));
    }

    /**
     * Display the specified subject.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subject = $this->subjectRepository->find($id);

        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('subjects.index'));
        }

        return view('subjects.show')->with('subject', $subject);
    }

    /**
     * Show the form for editing the specified subject.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subject = $this->subjectRepository->find($id);
        $class = grade::all()->sortBy('class')->pluck('class','id');
        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('subjects.index'));
        }

        return view('subjects.edit',compact('class'))->with('subject', $subject);
    }

    /**
     * Update the specified subject in storage.
     *
     * @param int $id
     * @param UpdatesubjectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesubjectRequest $request)
    {
        $subject = $this->subjectRepository->find($id);

        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('subjects.index'));
        }

        $subject = $this->subjectRepository->update($request->all(), $id);

        Flash::success('Subject updated successfully.');

        return redirect(route('subjects.index'));
    }

    /**
     * Remove the specified subject from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subject = $this->subjectRepository->find($id);

        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('subjects.index'));
        }

        $this->subjectRepository->delete($id);

        Flash::success('Subject deleted successfully.');

        return redirect(route('subjects.index'));
    }
}
