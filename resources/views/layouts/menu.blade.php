
<li class="nav-item {{ Request::is('grades*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('grades.index') !!}"><i class="nav-icon fas fa-book-reader"></i><span>Grades</span></a>
</li>
<li class="nav-item {{ Request::is('subjects*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('subjects.index') !!}"><i class="nav-icon fas fa-book"></i><span>Subjects</span></a>
</li>
<li class="nav-item {{ Request::is('studentinfos*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('studentinfos.index') !!}"><i class="nav-icon fas fa-users"></i><span>Students</span></a>
</li>
<li class="nav-item {{ Request::is('exams*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('exams.index') !!}"><i class="nav-icon icon-question"></i><span>Exams</span></a>
</li>

<li class="nav-item {{ Request::is('examquestions*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('examquestions.index') !!}"><i class="nav-icon fas fa-graduation-cap"></i><span>Exam Questions</span></a>
</li>

<li class="nav-item {{ Request::is('quizquestions*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('quizquestions.index') !!}"><i class="nav-icon fas fa-puzzle-piece"></i><span>Quiz Questions</span></a>
</li>

<li class="nav-item {{ Request::is('examresults*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! url('examresults') !!}"><i class="nav-icon fas fa-tasks"></i><span>Exam Result</span></a>
</li>

<li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
    <a class="nav-link" href="{!! url('register') !!}"><i class="nav-icon fas fa-users"></i><span>Register Admin</span></a>
</li>

<li class="nav-item {{ Request::is('feed') ? 'active' : '' }}">
    <a class="nav-link" href="{!! url('feed') !!}"><i class="nav-icon fas fa-envelope"></i><span>Feedback</span></a>
</li>
