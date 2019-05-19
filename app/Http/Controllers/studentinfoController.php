<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestudentinfoRequest;
use App\Http\Requests\UpdatestudentinfoRequest;
use App\Repositories\studentinfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\grade;
use Illuminate\Support\Facades\Hash;
use Flash;
use Response;
use App\Models\Student;

class studentinfoController extends AppBaseController
{
    /** @var  studentinfoRepository */
    private $studentinfoRepository;

    public function __construct(studentinfoRepository $studentinfoRepo)
    {
        $this->studentinfoRepository = $studentinfoRepo;
    }

    /**
     * Display a listing of the studentinfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $studentinfos = $this->studentinfoRepository->paginate(10);

        return view('studentinfos.index')
            ->with('studentinfos', $studentinfos);
    }

    /**
     * Show the form for creating a new studentinfo.
     *
     * @return Response
     */
    public function create()
    {
        $class = grade::all()->sortBy('class')->pluck('class','id');
        return view('studentinfos.create', compact('class'));
    }

    /**
     * Store a newly created studentinfo in storage.
     *
     * @param CreatestudentinfoRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:students',
            'password' => 'required|string|min:6',

        ]);

        $students = Student::create([
            'name'=> $request['name'],
        'email'=> $request['email'],
        'password'=>Hash::make($request['password']),
        'grade_id'=> $request['grade_id']
        ]);

        Flash::success('Studentinfo saved successfully.');

        return redirect(route('studentinfos.index'));
    }

    /**
     * Display the specified studentinfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $studentinfo = $this->studentinfoRepository->find($id);

        if (empty($studentinfo)) {
            Flash::error('Studentinfo not found');

            return redirect(route('studentinfos.index'));
        }

        return view('studentinfos.show')->with('studentinfo', $studentinfo);
    }

    /**
     * Show the form for editing the specified studentinfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $class = grade::all()->sortBy('class')->pluck('class','id');
        $studentinfo = $this->studentinfoRepository->find($id);

        if (empty($studentinfo)) {
            Flash::error('Studentinfo not found');

            return redirect(route('studentinfos.index'));
        }

        return view('studentinfos.edit', compact('class'))->with('studentinfo', $studentinfo);
    }

    /**
     * Update the specified studentinfo in storage.
     *
     * @param int $id
     * @param UpdatestudentinfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatestudentinfoRequest $request)
    {
        $studentinfo = $this->studentinfoRepository->find($id);

        if (empty($studentinfo)) {
            Flash::error('Studentinfo not found');

            return redirect(route('studentinfos.index'));
        }

        $studentinfo = $this->studentinfoRepository->update($request->all(), $id);

        Flash::success('Studentinfo updated successfully.');

        return redirect(route('studentinfos.index'));
    }

    /**
     * Remove the specified studentinfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $studentinfo = $this->studentinfoRepository->find($id);

        if (empty($studentinfo)) {
            Flash::error('Studentinfo not found');

            return redirect(route('studentinfos.index'));
        }

        $this->studentinfoRepository->delete($id);

        Flash::success('Studentinfo deleted successfully.');

        return redirect(route('studentinfos.index'));
    }
}
