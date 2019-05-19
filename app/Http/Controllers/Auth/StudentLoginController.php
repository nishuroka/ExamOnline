<?php

 

namespace App\Http\Controllers\Auth;

 

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentLoginController extends Controller

{

    /*

    |--------------------------------------------------------------------------

    | Login Controller

    |--------------------------------------------------------------------------

    |

    | This controller handles authenticating users for the application and

    | redirecting them to your home screen. The controller uses a trait

    | to conveniently provide its functionality to your applications.

    |

    */

 

    use AuthenticatesUsers;

 

    protected $guard = 'student';

 

    /**

     * Where to redirect users after login.

     *

     * @var string

     */

    protected $redirectTo = '/home';

 

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('guest')->except('logout');

    }

 

    public function showLoginForm()

    {

        return view('auth.studentLogin');

    }

 

    public function login(Request $request)

    {

        if (auth()->guard('student')->attempt(['email' => $request->email, 'password' => $request->password])) {

            $email = $request->input('email');
            $sub = DB::table('students')->where('email', $email)->value('grade_id');
            $subject = DB::table('subjects')->where('grade_id', $sub)->get();
            $c = count($subject);
            return view('student.student', compact('subject','c'));

        }

 

        return back()->withErrors(['email' => 'Email or password are wrong.']);

    }

    public function getDashboard(Request $request){

            $email = Auth::guard('student')->user()->email;
            $sub = DB::table('students')->where('email', $email)->value('grade_id');
            $subject = DB::table('subjects')->where('grade_id', $sub)->get();
            $c = count($subject);
            
        return view('student.student', compact('subject','c'));

    }

}