@extends('layouts.default')

@section('pageCss')
    <style>
        .CCIS, .CoEd, .CE {
            visibility: hidden;
        }
    </style>
@endsection
@section('content')

<!--NAVIGATIONAL STRUCTURES -->
<!-- NAV BAR HEADER -->
<nav>
    <div class="navbar-fixed ">
        <nav>
          <div class="nav-wrapper red darken-4">
              <button class="btn-flat sidenav-trigger" data-target="slide-out"><i class="material-icons white-text">menu</i></button>
                <a href="#!" class="brand-logo white-text"><i class="material-icons" title="PupStats">insert_chart</i> PupStats</a>
                <ul class="right hide-on-med-and-down">
                </ul>
          </div>
        </nav>
    </div> 
</nav>

<!-- SIDEBAR NAVIGATION -->
<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
            <div class="background">
                <img src="images/office.jpg">
            </div>
            <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
            <a href="#name"><span class="white-text name">John Doe</span></a>
            <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div>
    </li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>
<!-- END OF NAVIGATIONAL STRUCTURES -->

<div style="height: 30px;"></div>

<!--MAIN DASHBOARD-->
<div>
    <div class="row">
        <div class="col s4">
            <!--FILTER TAB-->
            <div class="card josh">
                <!--CARD DASHBOARD-->
                <div class="card-content row">
                    <div class="col s12">
                        <span class="card-title"><i class="material-icons">filter_list</i>&nbsp Filter Selection TAB</span>

                        <!--COLLEGES-->
                        <div class="input-field col s11">
                            <select id="collegeFilter" name="college">
                                <option value="ALL" selected>All Colleges</option>
                                <option url= {{ route('filter.college.CCIS', $CCIS) }} value="Computer and Information Sciences">College of Computer and Information Sciences</option>
                                <option url= {{ route('filter.college.CoEd', $CoEd) }} value="Education">College of Education</option>
                                <option url= {{ route('filter.college.CE', $CE) }} value="Engineering">College of Engineering</option>
                            </select>
                            <label>College</label>
                        </div>

                        <!--DEPARTMENTS-->
                        <div class="input-field col s11">
                            <select id="departmentFilter" name="department">
                                <option value="ALL" selected>All Departments</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Business Teacher Education">Business Teacher Education</option>
                                <option value="Library and Information Science">Library and Information Science</option>
                                <option value="Elementary Education">Elementary Education</option>
                                <option value="Secondary Education major in English">Secondary Education Major in English</option>
                                <option value="Secondary Education major in Filipino">Secondary Education Major in Filipino</option>
                                <option value="Secondary Education major in Mathematics">Secondary Education Major in Mathematics</option>
                                <option value="Secondary Education major in Social Studies">Secondary Education Major in Social Studies</option>
                                <div class="hide">
                                    <option value="Computer Engineering">Computer Engineering</option>
                                    <option value="Civil Engineering">Civil Engineering</option>
                                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                                    <option value="Electrical Engineering">Electrical Engineering</option>
                                    <option value="Electronics Engineering">Electronics Engineering</option>
                                    <option value="Industrial Engineering">Industrial Engineering</option>
                                    <option value="Architecture">Architecture</option>
                                </div>
                            </select>
                            <label>Department</label>
                        </div>

                        <div class="input-field col s5">
                            <select  id="yearFilter" name="year">
                                <option selected>All Levels</option>
                                <option value="1">First Year</option>
                                <option value="2">Second Year</option>
                                <option value="3">Third Year</option>
                                <option value="4">Fourth Year</option>
                                <option value="5">Fifth Year</option>
                            </select>
                            <label>Year Level</label>
                        </div>

                        <div class="input-field col s1">&nbsp</div>

                        <div class="input-field col s5">
                            <select id="sectionFilter" name="section">
                                <option value="" selected>All Sections</option>
                                <option value="1">Section 1</option>
                                <option value="2">Section 2</option>
                                <option value="3">Section 3</option>
                                <option value="4">Section 4</option>
                                <option value="5">Section 5</option>
                            </select>
                            <label>Section</label>
                        </div>

                        <div class="input-field col s6">
                            <input id="icon_prefix" name="age" type="text" class="validate">
                            <label for="icon_prefix">Age</label>
                        </div>

                        <div class="input-field col s5">
                            <select id="genderFilter" name="gender">
                                <option value="" selected>All Genders</option>
                                <option value="1">Female</option>
                                <option value="2">Male</option>
                            </select>
                            <label>Gender</label>
                        </div>

                        <div class="input-field col s3">
                            <select id="yearFilter" name="bday_year">
                                <option selected disabled>Year</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                            </select>
                            <label>Birth Year</label>
                        </div>

                        <div class="input-field col s5">
                            <select id="monthFilter" name="bday_month">
                                <option selected disabled>Month</option>
                                <option data-target="1" value="January">January</option>
                                <option data-target="2" value="February">February</option>
                                <option data-target="3" value="March">March</option>
                                <option data-target="4" value="April">April</option>
                                <option data-target="5" value="May">May</option>
                                <option data-target="6" value="June">June</option>
                                <option data-target="7" value="July">July</option>
                                <option data-target="8" value="August">August</option>
                                <option data-target="9" value="September">September</option>
                                <option data-target="10" value="October">October</option>
                                <option data-target="11" value="November">November</option>
                                <option data-target="12" value="December">December</option>
                            </select>
                            <label>Month</label>
                        </div>

                        <div class="input-field col s3">
                            <select id="dayFilter" name="bday_day">
                                <option selected disabled>Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <label>Day</label>
                        </div>
                        <!--ADD STUDENT BUTTON-->
                        <a href="#modal1" class="modal-trigger btn-floating btn-medium waves-effect waves-light red"><i class="material-icons">add</i></a>

                        <!--EXCEL FILE UPLOAD STRUCTURE -->
                        <form action="{{ route('CEimport') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="file" name="file" class="">
                            <input type="submit" value="Submit Excel" class="btn btn-primary btn-sm">
                        </form>

                        <div class="col s6"  ><br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                        @if ( Session::has('success') )
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <strong>{{ Session::get('success') }}</strong>
                                        </div>
                                        @endif
                                                 
                                        @if ( Session::has('error') )
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <strong>{{ Session::get('error') }}</strong>
                                        </div>
                                        @endif
                                                        
                                        @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                            <div>
                                                @foreach ($errors->all() as $error)
                                                <p>{{ $error }}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endif
                                        {{-- <form action="{{ route('CollegesController.CEsearch') }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="submit" class=" pull-right btn btn-primary ml-3 mr-5" value="Search">
                                            <input class="pull-right ml-5" type="text" placeholder="Search for Name" name="data">
                                        </form> --}}                      
                                    </div>
                                </div>       
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <!--CHART CARD-->
        <div class="col s8">
            <div class="card josh">
                <div class="card-content row">
                    <div class="col s7">&nbsp</div>
                        <div class="input-field col s5">
                            <select id="mySelect" onchange="toggleChart();">
                                <option value="bar" selected>Default: Bar</option>
                                <option value="line">Line</option>
                                <option value="radar">Radar</option>
                                <option value="doughnut">Doughnut</option>
                                <option value="pie">Pie</option>
                                <option value="polarArea">Polar Area</option>
                            </select>
                            <label>Chart Type</label>
                        </div>
                    <canvas id="barChart" height="150%"></canvas>
                </div>
            </div>
        </div>
        <!--NAME TABLE CARD-->
        <div class="col s12">
            <div class="card">
                <div class="card-content row">
                    <!--NAME TABLE-->
                        <table class="responsive-table striped">
                            <tr>
                                <th class="mr-5 ml-5"><a href="#" class="">Name</a></th>
                                <th class="mr-5 ml-5"><a href="#" class="">Birthday</a></th>
                                <th class="mr-5 ml-5"><a href="#" class="">Age</a></th>
                                <th class="mr-5 ml-5"><a href="#" class="">Gender</a></th>
                                <th class="mr-5 ml-5"><a href="#" class="">Address</a></th>
                                <th class="mr-5 ml-5"><a href="#" class="">Department</a></th>
                                <th class="mr-5 ml-5"><a href="#" class="">Year</a></th>
                                <th class="mr-5 ml-5"><a href="#" class="">Section</a></th>
                                <th class="mr-5 ml-5"><a href="#" class="">ACTION</a></th>
                            </tr>
                            @foreach($datas as $data)  
                            <tr>
                                <td class="mr-5 ml-5">{{ $data->last_name }}, {{ $data->first_name }} {{ $data->middle_initial }}.</td>
                                <td class="mr-5 ml-5">{{ $data->bday_month }} {{ $data->bday_day }}, {{ $data->bday_year }}</td>
                                <td class="mr-5 ml-5">{{ $data->age }}</td>
                                <td class="mr-5 ml-5">{{ $data->gender }}</td>
                                <td class="mr-5 ml-5">{{ $data->address }}</td>
                                <td class="mr-5 ml-5">{{ $data->department }}</td>
                                <td class="mr-5 ml-5">{{ $data->year }}</td>
                                <td class="mr-5 ml-5">Section {{ $data->section }}</td>
                                <td class="mr-5 ml-5">
                                    {{--<a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="{{ route('CollegesController.CoEdshow',$data->id) }}"><i class="material-icons">open_in_new</i></a>--}}
                                    <!-- Modal Trigger -->
                                    <a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="#modal1"><i class="material-icons">open_in_new</i></a>
                                    <a class="btn btn-floating btn-small tooltipped" data-position="bottom" data-tooltip="Edit" href="{{ route('CollegesController.CoEdedit',$data->id) }}"><i class="material-icons">edit</i></a>
                                    <a class="btn btn-floating btn-small red tooltipped" data-position="bottom" data-tooltip="Delete" href = "{{ route('CollegesController.CoEddelete',$data->id) }}"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            @endforeach
                            @foreach($shows as $data)  
                            <tr>
                                <td class="mr-5 ml-5">{{ $data->last_name }}, {{ $data->first_name }} {{ $data->middle_initial }}.</td>
                                <td class="mr-5 ml-5">{{ $data->bday_month }} {{ $data->bday_day }}, {{ $data->bday_year }}</td>
                                <td class="mr-5 ml-5">{{ $data->age }}</td>
                                <td class="mr-5 ml-5">{{ $data->gender }}</td>
                                <td class="mr-5 ml-5">{{ $data->address }}</td>
                                <td class="mr-5 ml-5">{{ $data->department }}</td>
                                <td class="mr-5 ml-5">{{ $data->year }}</td>
                                <td class="mr-5 ml-5">Section {{ $data->section }}</td>
                                <td class="mr-5 ml-5">
                                    {{--<a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="{{ route('CollegesController.CoEdshow',$data->id) }}"><i class="material-icons">open_in_new</i></a>--}}
                                    <!-- Modal Trigger -->
                                    <a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="#modal1"><i class="material-icons">open_in_new</i></a>
                                    <a class="btn btn-floating btn-small tooltipped" data-position="bottom" data-tooltip="Edit" href="{{ route('CollegesController.CoEdedit',$data->id) }}"><i class="material-icons">edit</i></a>
                                    <a class="btn btn-floating btn-small red tooltipped" data-position="bottom" data-tooltip="Delete" href = "{{ route('CollegesController.CoEddelete',$data->id) }}"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            @endforeach
                            @foreach($outputs as $data)  
                            <tr>
                                <td class="mr-5 ml-5">{{ $data->last_name }}, {{ $data->first_name }} {{ $data->middle_initial }}.</td>
                                <td class="mr-5 ml-5">{{ $data->bday_month }} {{ $data->bday_day }}, {{ $data->bday_year }}</td>
                                <td class="mr-5 ml-5">{{ $data->age }}</td>
                                <td class="mr-5 ml-5">{{ $data->gender }}</td>
                                <td class="mr-5 ml-5">{{ $data->address }}</td>
                                <td class="mr-5 ml-5">{{ $data->department }}</td>
                                <td class="mr-5 ml-5">{{ $data->year }}</td>
                                <td class="mr-5 ml-5">Section {{ $data->section }}</td>
                                <td class="mr-5 ml-5">
                                    {{--<a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="{{ route('CollegesController.CoEdshow',$data->id) }}"><i class="material-icons">open_in_new</i></a>--}}
                                    <!-- Modal Trigger -->
                                    <a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="#modal1"><i class="material-icons">open_in_new</i></a>
                                    <a class="btn btn-floating btn-small tooltipped" data-position="bottom" data-tooltip="Edit" href="{{ route('CollegesController.CoEdedit',$data->id) }}"><i class="material-icons">edit</i></a>
                                    <a class="btn btn-floating btn-small red tooltipped" data-position="bottom" data-tooltip="Delete" href = "{{ route('CollegesController.CoEddelete',$data->id) }}"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>

    </div>
</div>

<input type="hidden" name="numberOfCCIS" value="{{ $totalCCIS }}">
<input type="hidden" name="numberOfCoEd" value="{{ $totalCoEd }}">
<input type="hidden" name="numberOfCE" value="{{ $totalCE }}">

<div id="modal1" class="modal">
    <div class="modal-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Fill the student Information below</h2>
                    </div>
                    <div class="pull-right mr-5">
                        <a class="btn btn-primary" href="{{ route('CollegesController.index') }}"> Back</a>
                    </div>
                </div>
            </div>
        
            {{ Form::open(array('route' => 'CollegesController.addStudent', ))}}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="mr-4">Name:</strong>
                        <input type="text" name="last_name" placeholder="Last Name">
                        <input type="text" name="first_name" placeholder="First Name">
                        <input type="text" name="middle_initial" placeholder="Middle Inital">
                    </div>
                </div>
                <br>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Birthday:&nbsp;</strong>
                        <input type="hidden" id="date_sorter" name="date_sorter" value="">
                        {{-- {{ Form::date('birthday', null, array('class' => 'ml-4')) }} --}}
                        <select name="bday_month" id="bday">
                                <option selected disabled>Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            <select name="bday_day" id="">
                                <option selected disabled>Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <select name="bday_year" id="">
                                <option selected disabled>Year</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                            </select>
                    </div>
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong class="mr-4">Age: &nbsp;&nbsp;</strong>
                         {{ Form::number('age', null, array('placeholder' => 'Age', 'class' => 'ml-4')) }}
                    </div>
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                        <strong class="mr-4">Gender:</strong>
                        <select class="ml-2" name="gender" id="">
                            <option selected disabled>Select your gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                         {{-- {{ Form::text('gender', null, array('placeholder' => 'Male or Female', 'class' => 'form-control')) }} --}}
                    </div>
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong class="mr-4">Address:</strong>&nbsp;
                         {{ Form::text('address', null, array('placeholder' => 'Address','class' => '')) }}
                    </div>
                </div> 
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                        <input type="hidden" name="model" value="">
                        <strong>College:</strong>
                        <select name="college" id="college">
                            <option selected disabled> Select your College First</option>
                            <option value="Computer and Information Science">College of Computer and Information Science</option>
                            <option value="Education">College of Education</option>
                            <option value="Engineering">College of Engineering</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Department:</strong>
                        <select disabled hidden name="department" id="CCIS">
                            <option selected disabled> College of Computer and Information Sciences</option>
                            <option id="cs" value="Computer Science">Computer Science</option>
                            <option id="it" value="Information Technology">Information Technology</option>
                        </select>
                        <select disabled hidden name="department" id="CoEd">
                            <option disabled selected>College of Education</option>
                            <option id="bte" value="Business Teacher Educationg">Business Teacher Education</option>
                            <option id="lis" value="Library and Information Science">Library and Information Science</option>
                            <option id="ee" value="Elementary Education">Elementary Education</option>
                            <option id="seme" value="Secondary Education major in English">Secondary Education major in English</option>
                            <option id="semf" value="Secondary Education major in Filipino">Secondary Education major in Filipino</option>
                            <option id="semm" value="Secondary Education major in Mathematics">Secondary Education major in Mathematics</option>
                            <option id="semss" value="Secondary Education major in Social Studies">Secondary Education major in Social Studies</option>
                        </select>
                        <select disabled hidden name="department" id="CE">
                            <option disabled selected>College of Engineering</option>
                            <option id="ce" value="Civil Engineering">Civil Engineering</option>
                            <option id="coe" value="Computer Engineering">Computer Engineering</option>
                            <option id="electri" value="Electrical Engineering">Electrical Engineering</option>
                            <option id="electro" value="Electronics Engineering">Electronics Engineering</option>
                            <option id="ie" value="Industrial Engineering">Industrial Engineering</option>
                            <option id="me" value="Mechanical Engineering">Mechanical Engineering</option>
                        </select>
                        {{-- {{ Form::text('department', null, array('placeholder' => 'Department','class' => 'form-control')) }} --}}
                    </div>
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="mr-5">Year:</strong>&nbsp;&nbsp;
                        <select name="year">
                            <option selected disabled>Select your Year&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</option>
                            <option value="4">4th Year</option>
                            <option value="3">3rd Year</option>
                            <option value="2">2nd Year</option>
                            <option value="1">1st Year</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong class="mr-4">Section:</strong>&nbsp;&nbsp;
                        <select name="section" id="">
                            <option selected disabled>Select your Section &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="1">Section 1</option>
                            <option value="2">Section 2</option>
                            <option value="3">Section 3</option>
                            <option value="4">Section 4</option>
                            <option value="5">Section 5</option>
                        </select>
                        {{-- {{ Form::number('section', null, array('placeholder' => 'Section','class' => 'form-control')) }} --}}
                    </div>
                </div>
                <br>
                <div class="text-center">
                    <div class="ml-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        
            <div>
                <h4>Errors will be shown below:</h4>
                @if(count($errors))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach( $errors->all() as $error )
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var elems = document.querySelectorAll('select');
                    var instances = M.FormSelect.init(elems, {
                        
                    });
                });
        </script>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>

<!-- END OF MAIN CONTAINER -->

@endsection


@section('pageJs')
    
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, {

        });
    })
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, {

        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.materialboxed');
        var instances = M.Materialbox.init(elems, {  

        });
    });
</script>
<!--sidenav INIT-->
<script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, {
            draggable: 'true'
            });
        });

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.tooltipped');
        var instances = M.Tooltip.init(elems, {
            enterDelay: 250
        });
    });
</script>
<script>
    var totalCCIS = $("input[name='numberOfCCIS']").val();
    var totalCoEd = $("input[name='numberOfCoEd']").val();
    var totalCE = $("input[name='numberOfCE']").val();
    // console.log(totalCCIS);
    var canvas = document.getElementById("barChart");
    var ctx = canvas.getContext('2d');
    // We are only changing the chart type, so let's make that a global variable along with the chart object:
    var chartType = document.getElementById("mySelect").value;;
    var myBarChart;

    // Global Options:
    Chart.defaults.global.defaultFontColor = 'black';
    Chart.defaults.global.defaultFontSize = 16;

    var data = {
        labels: ["CE", "COED", "CCIS"],
        datasets: [{
            label: ' Number of students in this College',
            data: [totalCE, totalCoEd, totalCCIS],
            backgroundColor: [
                '#b71c1c',
                '#0288d1',
                '#311b92',
                '#ffff00',
                '#1b5e20',
                '#ff9800'
            ],
            borderColor: [
                '#b71c1c',
                '#0288d1',
                '#311b92',
                '#ffff00',
                '#1b5e20',
                '#ff9800'
            ],
            borderWidth: 1
        }]
    };

// Notice the scaleLabel at the same level as Ticks
    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        title: {
            fontSize: 18,
            display: true,
            text: 'Students from all Colleges in PUP',
            position: 'bottom'
        },
        animation: {
            duration: 2000,
            easing: 'easeInOutBounce'
        }
    };


    // We add an init function down here after the chart options are declared.

    init();

    function init() {
    // Chart declaration:
        myBarChart = new Chart(ctx, {
            type: chartType,
            data: data,
            options: options
        });
    }

    function toggleChart() {
    //destroy chart:
    myBarChart.destroy();
    //change chart type: 
    this.chartType = document.getElementById("mySelect").value;
    //restart chart:
    init();
    }
</script>

<script>
    $(document).ready(function(){

        // $("#college option:selected").attr('disabled','disabled')
        //                 .siblings().removeAttr('disabled');
        $("#collegeFilter").on('change', function(){
            window.location.href = $('option:selected', this).attr('url')
          });
        
        $("#college").on('change', function(){
            var college = $(this).val();
            // console.log(college);
            // console.log($(this));
            switch (college) {
                
                case 'Computer and Information Science' :
                    $("#CCIS").prop('disabled', false);
                    $("#CCIS").removeAttr('hidden', true);
                    break;
                
                case 'Education':
                    $("input[name='model'").val("CollegeOfEducations");

                    // $('#bte').prop("disabled", false);
                    // $('#lis').prop("disabled", false);
                    // $('#ee').prop("disabled", false);
                    // $('#seme').prop("disabled", false);
                    // $('#semf').prop("disabled", false);
                    // $('#semss').prop("disabled", false);
                    // $('#semm').prop("disabled", false);
                    break;

                case 'Engineering':
                    $("input[name='model'").val("CollegeOfEngineerings");
                    // $('#ce').prop("disabled", false);
                    // $('#coe').prop("disabled", false);
                    // $('#electri').prop("disabled", false);
                    // $('#electro').prop("disabled", false);
                    // $('#ie').prop("disabled", false);
                    // $('#me').prop("disabled", false);
                    break;
                default :
                break;
            }
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#bday').on('change', function(){
            var dropdown = $("select[name='bday_month']")[1]['selectedIndex'];
            // var dropdown = document.getElementById('bday');
            console.log(dropdown);
            $("input:hidden#date_sorter").val(dropdown);
        })
    });
</script>
@endsection