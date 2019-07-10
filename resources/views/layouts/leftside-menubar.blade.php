<script>
  $(document).ready(function () {
    $('.nav-item.active').removeClass('active');
    $('a[href="' + window.location.href + '"]').closest('li').closest('ul').closest('li').addClass('active');
    $('a[href="' + window.location.href + '"]').closest('li').addClass('active');
  });
</script>
<style>
  .nav-item.active {
    background-color: #fce8e6;
    font-weight: bold;
  }

  .nav-item.active a {
    color: #d93025;
  }

  .nav-link-text {
    padding-left: 10%;
  }

  #side-navbar ul>li>a {
    padding: 8px 15px;
  }
</style>
{{--@if(Auth::user()->role != 'master')
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link" href="{{url('user/'.Auth::user()->student_code)}}"><i class="material-icons">face</i> <span
        class="nav-link-text">Profile</span></a>
  </li>
</ul>
@endif--}}
<ul class="nav flex-column">
  <li class="nav-item active">
    <a class="nav-link" href="{{ url('home') }}"><i class="material-icons"></i> <span class="nav-link-text">Dashboard</span></a>
  </li>
  @if(Auth::user()->role == 'admin')
  <li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="nav-link-text">Attendance</span> <i class="material-icons pull-right"></i></a>
    <ul class="dropdown-menu" style="width: 100%;">
      <li class="nav-item">
        <a class="dropdown-item" href="#"><span class="nav-link-text">Teacher
            Attendance</span></a>
      </li>
      <li class="nav-item">
        <a class="dropdown-item" href="{{url('school/sections?att=1')}}"><span
            class="nav-link-text">Student Attendance</span></a>
      </li>
      <li class="nav-item">
        <a class="dropdown-item" href="#"> <span class="nav-link-text">Staff
            Attendance</span></a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('school/sections?course=1') }}"><span class="nav-link-text">Classes
        &amp; Sections</span></a>
  </li>
  @endif
  @if(Auth::user()->role != 'student')
  <li class="nav-item">
    <a class="nav-link" href="{{url('users/'.Auth::user()->school->code.'/1/0')}}">
      <span class="nav-link-text">Students</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('users/'.Auth::user()->school->code.'/0/1')}}">
      <span class="nav-link-text">Teachers</span></a>
  </li>
  @endif
  @if(Auth::user()->role == 'admin')
  <li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <span class="nav-link-text">Exams</span> </a>
    <ul class="dropdown-menu" style="width: 100%;">
      <!-- Dropdown menu links -->
      <li>
        <a class="dropdown-item" href="{{ url('exams/create') }}"> <span class="nav-link-text">Add
            Examination</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('exams/active') }}">
         <span class="nav-link-text">Active Exams</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('exams') }}"><span class="nav-link-text">Manage
            Examinations</span></a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('grades/all-exams-grade') }}"><span class="nav-link-text">Grades</span></a>
  </li>
  <li class="nav-item" style="border-bottom: 1px solid #dbd8d8;"></li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('academic/routine') }}"><span class="nav-link-text">Class
        Routine</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('academic/syllabus') }}"> <span class="nav-link-text">Syllabus</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('academic/notice') }}"><span class="nav-link-text">Notice</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('academic/event') }}"><span class="nav-link-text">Event</span></a>
  </li>
  <li class="nav-item" style="border-bottom: 1px solid #dbd8d8;"></li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('create-school') }}"><span class="nav-link-text">Academic
        Settings</span></a>
  </li>
  <li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="nav-link-text">Manage GPA</span></a>
    <ul class="dropdown-menu" style="width: 100%;">
      <!-- Dropdown menu links -->
      <li>
        <a class="dropdown-item" href="{{ url('gpa/all-gpa') }}"><span
            class="nav-link-text">All GPA</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('gpa/create-gpa') }}"><span class="nav-link-text">Add
            New GPA</span></a>
      </li>
    </ul>
  </li>
  @endif
  @if(Auth::user()->role == 'admin' || Auth::user()->role == 'accountant')
  <li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="nav-link-text">Fees Generator</span></a>
    <ul class="dropdown-menu" style="width: 100%;">
      <!-- Dropdown menu links -->
      <li>
        <a class="dropdown-item" href="{{ url('fees/all') }}"><span class="nav-link-text">Generate
            Form</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('fees/create') }}"><span class="nav-link-text">Add
            Fee Field</span></a>
      </li>
    </ul>
  </li>
  @endif
  @if(Auth::user()->role == 'admin' || Auth::user()->role == 'accountant')
  <li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="nav-link-text">Manage Accounts</span></a>
    <ul class="dropdown-menu" style="width: 100%;">
      <!-- Dropdown menu links -->
      <li>
        <a class="dropdown-item" href="{{url('users/'.Auth::user()->school->code.'/accountant')}}">
          <span class="nav-link-text">Accountant List</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('accounts/sectors') }}">
          <span class="nav-link-text">Add Account Sector</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('accounts/expense') }}"><span
            class="nav-link-text">Add New Expense</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('accounts/expense-list') }}">
          <span class="nav-link-text">Expense List</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('accounts/income') }}"><span class="nav-link-text">Add
            New Income</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('accounts/income-list') }}">
          <span class="nav-link-text">Income List</span></a>
      </li>
    </ul>
  </li>
  @endif
  @if(Auth::user()->role == 'student')
  <li class="nav-item">
    <a class="nav-link active" href="{{ url('attendances/0/'.Auth::user()->id.'/0') }}">
      <span class="nav-link-text">My Attendance</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('courses/0/'.Auth::user()->section_id) }}">
      <span class="nav-link-text">My Courses</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('grades/'.Auth::user()->id) }}"><span
        class="nav-link-text">My Grade</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('stripe/charge')}}"><span class="nav-link-text">Payment</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('stripe/receipts')}}"><span class="nav-link-text">Receipt</span></a>
  </li>
  @endif
  {{--<div style="text-align:center;">Student</div>--}}
  {{--<div style="text-align:center;">Teacher</div>--}}
  @if(Auth::user()->role == 'admin' || Auth::user()->role == 'librarian')
  <li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="nav-link-text">Manage Library</span></a>
    <ul class="dropdown-menu" style="width: 100%;">
      <!-- Dropdown menu links -->
      <li>
        <a class="dropdown-item" href="{{url('users/'.Auth::user()->school->code.'/librarian')}}">
          <span class="nav-link-text">Librarian List</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ route('library.books.index') }}">
          <span class="nav-link-text">All Books</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('library/issued-books') }}">
          <span class="nav-link-text">All Issued Books</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('library/issue-books') }}"><span
            class="nav-link-text">Issue Book</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ route('library.books.create') }}"><span
            class="nav-link-text">Add New Book</span></a>
      </li>
    </ul>
  </li>
  @endif
  @if(Auth::user()->role == 'teacher')
  <li class="nav-item">
    <a class="nav-link" href="{{ url('courses/'.Auth::user()->id.'/0') }}"><i class="material-icons">import_contacts</i>
      <span class="nav-link-text">My Courses</span></a>
  </li>
  @endif
</ul>
