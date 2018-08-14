@extends('layouts.default')

@section('pageCss')
    <style>
        th, td {
            text-align: center;
            vertical-align: middle;
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
                <a href="#!" class="brand-logo white-text"><i class="large material-icons" style="font-size: 48px;">insert_chart</i> PupStats</a>
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
                {{-- <img src="images/office.jpg"> --}}
            </div>
            {{-- <a href="#user"><img class="circle" src="images/yuna.jpg"></a> --}}
            <a href="#name"><span class="name"><i class="material-icons">insert_chart</i>&nbsp PUP STATISTICS DASHBOARD</span></a>
            {{--<a href="#email"><span class="email" style="font-size: 10px;" >https://gitlab.com/cristianumali.a99/Project-Fruit-Salad</span></a>--}}
        </div>
        <br>
    </li>
    <li><a href="#!"><i class="material-icons">nature_people</i>Project-Fruit-Salad</a></li>
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
            <div class="card josh z-depth-4">
                <!--CARD DASHBOARD-->
                <div class="card-content row">
                    <div class="col s12">
                        <span class="card-title"><i class="material-icons" style="font-size: 36px;">filter_list</i>&nbsp Filter Selection TAB</span>

                        <!--COLLEGES-->
                        <div class="input-field col s11">
                            <select id="collegeFilter" name="college">
                                <option url= {{ route('CollegesController.index', $CCIS) }} selected>All Colleges</option>
                                <option url= {{ route('filter.college.CCIS', $CCIS) }} selected value="Computer and Information Sciences">College of Computer and Information Sciences</option>
                                <option selected url= {{ route('filter.college.CoEd', $CoEd) }} value="Education">College of Education</option>
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
                                <option value="Computer Engineering">Computer Engineering</option>
                                <option value="Civil Engineering">Civil Engineering</option>
                                <option value="Mechanical Engineering">Mechanical Engineering</option>
                                <option value="Electrical Engineering">Electrical Engineering</option>
                                <option value="Electronics Engineering">Electronics Engineering</option>
                                <option value="Industrial Engineering">Industrial Engineering</option>
                                <option value="Architecture">Architecture</option>
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
                        {{-- <div class="col s6"  ><br>
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
                                    </div>
                                </div>       
                            </div>
                        </div> --}}
                        <!--ADD STUDENT BUTTON-->
                        <div class="col s12"><hr></div>
                        
                        <div class="col s3">
                            <a href="#modal1" data-tooltip="Add Student" class="tooltipped modal-trigger btn-floating btn-large waves-effect waves-light orange accent-3"><i class="material-icons">person_add</i></a>
                        </div>
                        <div class="col s9">
                            
                                <!--EXCEL FILE UPLOAD STRUCTURE -->

                            <!-- Modal Trigger -->
                            <a class="waves-effect waves-light btn-floating btn-large modal-trigger tooltipped" data-tooltip="Import Excel File" href="#modal2"><i class="material-icons">insert_chart</i></a>

                            <!-- Modal Structure -->
                            <div id="modal2" class="modal" style="height: 350px; overflow: hidden;">

                                <div class="modal-content">
                                    <h4 class="center">Import Excel Spreadsheet</h4>
                                    <hr>
                                    <br>
                                    <div class="container">
                                        <div class="input-field">
                                            <select name="import" id="import">
                                                <option selected disabled>Choose a Department</option>
                                                <option value="CE">Import in College of Engineering</option>
                                                <option value="CoEd">Import in College of Education</option>
                                                <option value="CCIS">Import in College of Computer and Information Science</option>
                                            </select>
                                            <label>Import Excel Spreadsheet to?</label>
                                        </div>
                                        <div class="hiddendiv" id="CEimport">
                                                <form action="{{ route('CEimport') }}" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input type="file" name="file" class="">
                                                    <br>
                                                    <div class="center">
                                                        <button type="submit" value="Submit Excel" class=" btn-large orange accent-3"><i class="material-icons">send</i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="hiddendiv" id="CoEdimport">
                                                <form action="{{ route('CoEdimport') }}" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input type="file" name="file" class="">
                                                    <br>
                                                    <div class="center">
                                                        <button type="submit" value="Submit Excel" class=" btn-large orange accent-3"><i class="material-icons">send</i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="hiddendiv" id="CCISimport">
                                                <form action="{{ route('CCISimport') }}" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input type="file" name="file" class="">
                                                    <br>
                                                    <div class="center">
                                                        <button type="submit" value="Submit Excel" class=" btn-large orange accent-3"><i class="material-icons">send</i></button>
                                                    </div>
                                                </form>
                                            </div>
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
            <div class="card josh z-depth-4">
                <div class="card-content row">
                    <div class="col s7">&nbsp</div>
                        <div class="input-field col s5">
                            <select id="mySelect" onchange="toggleChart();">
                                <option value="bar"  selected>Default: Bar</option>
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
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Name</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Birthday</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Age</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Gender</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Address</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Department</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Year</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Year</h6></a></th>
                                <th class="mr-5 ml-5"><a href="#" class="red-text"><h6>Actions</h6></a></th>
                            </tr>
                            
                            @foreach($outputs as $output)  
                            <tr>
                                <td class="mr-5 ml-5">{{ $output->last_name }}, {{ $output->first_name }} {{ $output->middle_initial }}.</td>
                                <td class="mr-5 ml-5">{{ $output->bday_month }} {{ $output->bday_day }}, {{ $output->bday_year }}</td>
                                <td class="mr-5 ml-5">{{ $output->age }}</td>
                                <td class="mr-5 ml-5">{{ $output->gender }}</td>
                                <td class="mr-5 ml-5">{{ $output->address }}</td>
                                <td class="mr-5 ml-5">{{ $output->department }}</td>
                                <td class="mr-5 ml-5">{{ $output->year }}</td>
                                <td class="mr-5 ml-5">Section {{ $output->section }}</td>
                                <td class="mr-5 ml-5">
                                    {{--<a class="btn btn-floating btn-small tooltipped modal-trigger" data-position="bottom" data-tooltip="Show" href="{{ route('CollegesController.CoEdshow',$data->id) }}"><i class="material-icons">open_in_new</i></a>--}}
                                    <!-- Modal Trigger -->
                                    <a class="btn btn-floating btn-small tooltipped modal-trigger light-blue darken-4" data-position="bottom" data-tooltip="View" href="#CCISmodal"><i class="material-icons">zoom_in</i></a>
                                    <a class="btn btn-floating btn-small tooltipped orange" data-position="bottom" data-tooltip="Edit" href="{{ route('CollegesController.CCISedit',$output->id) }}"><i class="material-icons">edit</i></a>
                                    <a class="btn btn-floating btn-small red darken-5 tooltipped" data-position="bottom" data-tooltip="Delete" href = "{{ route('CollegesController.CCISdelete',$output->id) }}"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    <div>
                        {{ $outputs->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<input type="hidden" name="numberOfCCIS" value="{{ $totalCoEd }}">
<input type="hidden" name="numberOfTotal" value="{{ $shows + $datas }}">

<div id="modal1" class="modal">
    <div class="modal-content"  style="overflow: hidden;" >
        <a class="btn btn-primary tooltipped left orange accent-3" data-tooltip="Back" href="{{ route('CollegesController.index') }}"> <i class="material-icons">arrow_back</i></a>
        <div class="form-group container">
            <div class="row">
                <div class="">
                    <br>
                    <h5 class="center">Fill the student Information below</h5>
                </div>
            </div>
        
            {{ Form::open(array('route' => 'CollegesController.addStudent', ))}}
            <div class="">
                <div class="row form-group">
                    <div class="input-field form-group">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="fname" type="text" name="first_name"  required>
                            <label for="fname">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="wobble" type="text" name="middle_initial"  required>
                            <label for="wobble">Middle Initial</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="ayoko" type="text" name="last_name"  required>
                            <label for="ayoko">Last Name</label>
                        </div>
                    </div>
                </div>
                <hr>
                <br>
                 <div>
                    <div class="input-field row form-group">
                        <input type="hidden" id="date_sorter" name="date_sorter" value="">
                        {{-- {{ Form::date('birthday', null, array('class' => 'ml-4')) }} --}}
                        <div class="col s6">
                            <i class="material-icons prefix">perm_contact_calendar</i>
                            <select name="bday_month" id="bday">
                                <option selected disabled>---</option>
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
                            <label>Birth Month</label>
                        </div>
                        <div class="col s2">
                            <select name="bday_day" id="" class="col s2">
                                <option selected disabled>---</option>
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
                            <label>Birth Day</label>
                        </div>
                        <div class="col s4">
                            <select name="bday_year" id="">
                                <option selected disabled>---</option>
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
                            
                    </div>
                </div>
                <div class="row form-group">
                    <div class="input-field col s3">
                        <i class="material-icons prefix">perm_identity</i>
                        {{ Form::number('age', null, array('placeholder' => '---', 'class' => '', 'required')) }}
                        <label>Age</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">wc</i>
                        <select class="ml-2" name="gender" id="">
                            <option selected disabled>---</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label>Gender</label>
                            {{-- {{ Form::text('gender', null, array('placeholder' => 'Male or Female', 'class' => 'form-control')) }} --}}
                    </div>
                </div>
               
  
                <div class="row form-group">
                     <div class="input-field col s12">
                        <i class="material-icons prefix">home</i>
                         {{ Form::text('address', null, array('placeholder' => '---','class' => '', 'required')) }}
                         <label>Address</label>
                    </div>
                </div> 
                <hr>
                <br>
                <div class="row form-group input-field">
                    <div class="col s6">
                        <div class="form-group">
                            <input type="hidden" name="model" value="">
                            <i class="material-icons prefix">school</i>
                            <select name="college" id="college">
                                <option selected disabled>--</option>
                                <option value="Computer and Information Science">College of Computer and Information Science</option>
                                <option value="Education">College of Education</option>
                                <option value="Engineering">College of Engineering</option>
                            </select>
                            <label>College</label>
                        </div>
                    </div>
                    <div class="col s6">
                        <div class="form-group">
                            <div id="primary">
                                <i class="material-icons prefix">business</i>
                                <select name="" id="" disabled>
                                    <option selected>Select a College First</option>
                                </select>
                                <label>Department</label>
                            </div>
                            <div class="hiddendiv" id="CCIS">
                                <i class="material-icons prefix">business</i>
                                <select name="department">
                                    <option selected disabled>--</option>
                                    <option id="cs" value="Computer Science">Computer Science</option>
                                    <option id="it" value="Information Technology">Information Technology</option>
                                </select>
                                <label>Department</label>
                            </div>
                            <div class="hiddendiv" id="CoEd">
                                <i class="material-icons prefix">business</i>
                                <select name="department" id="CoEd">
                                    <option disabled selected>--</option>
                                    <option id="bte" value="Business Teacher Educationg">BTEd</option>
                                    <option id="lis" value="Library and Information Science">LInfoSci</option>
                                    <option id="ee" value="Elementary Education">ElemEd</option>
                                    <option id="seme" value="Secondary Education major in English">SecEd Major in English</option>
                                    <option id="semf" value="Secondary Education major in Filipino">SecEd Major in Filipino</option>
                                    <option id="semm" value="Secondary Education major in Mathematics">SecEd Major in Mathematics</option>
                                    <option id="semss" value="Secondary Education major in Social Studies">SecEd Major in Social Studies</option>
                                </select>
                                <label>Department</label>
                            </div>
                            <div class="hiddendiv" id="CE">
                                <i class="material-icons prefix">business</i>
                                <select class="d-none" name="department">
                                    <option disabled selected>--</option>
                                    <option id="ce" value="Civil Engineering">Civil Engineering</option>
                                    <option id="coe" value="Computer Engineering">Computer Engineering</option>
                                    <option id="electri" value="Electrical Engineering">Electrical Engineering</option>
                                    <option id="electro" value="Electronics Engineering">Electronics Engineering</option>
                                    <option id="ie" value="Industrial Engineering">Industrial Engineering</option>
                                    <option id="me" value="Mechanical Engineering">Mechanical Engineering</option>
                                </select>
                                <label>Department</label>
                            </div>
                            {{-- {{ Form::text('department', null, array('placeholder' => 'Department','class' => 'form-control')) }} --}}
                        </div>
                    </div>
                </div>
                
                <br>
   
                <div class="row input-field">

                    <div class="form-group col s6" id="ui">
                        <select name="year" disabled>
                            <option selected disabled>Select a Course First</option>
                        </select>
                        <label>Year</label>
                    </div>

                    <div class="form-group col s6 hiddendiv" id="yearOne">
                        <select name="year">
                            <option selected disabled>---</option>
                            <option value="4">4th Year</option>
                            <option value="3">3rd Year</option>
                            <option value="2">2nd Year</option>
                            <option value="1">1st Year</option>
                        </select>
                        <label>Year</label>
                    </div>


                    <div class="form-group col s6 hiddendiv" id="ceYear">
                        <select name="year">
                            <option selected disabled>---</option>
                            <option value="5">5th Year</option>
                            <option value="4">4th Year</option>
                            <option value="3">3rd Year</option>
                            <option value="2">2nd Year</option>
                            <option value="1">1st Year</option>
                        </select>
                        <label>Year</label>
                    </div>
                    <div class="form-group col s6">
                        <select name="section" id="">
                            <option selected disabled>---</option>
                            <option value="5">Section 5</option>
                            <option value="4">Section 4</option>
                            <option value="3">Section 3</option>
                            <option value="2">Section 2</option>
                            <option value="1">Section 1</option>
                        </select>
                        <label>Section</label>
                        {{-- {{ Form::number('section', null, array('placeholder' => 'Section','class' => 'form-control')) }} --}}
                    </div>
                </div>
                <br>
                <div class="center">
                    <button type="submit" class="btn btn-large hoverable waves-effect waves-light orange accent-3 tooltipped" data-tooltip="Create Student"><i class="material-icons left">send</i>Submit</button>
                </div>
                <br>
            </div>
            {{ Form::close() }}
        
            <div class="container left">
                <h6 class="left">Errors will be shown below:</h6>
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
    var total = $("input[name='numberOfTotal']").val();
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
        labels: ["Education", "Other Colleges"],
        datasets: [{
            label: ' Number of Students',
            data: [totalCCIS, total],
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
            text: 'CHART - TITLE',
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
                    $("input[name='model'").val("CollegeOfComputerAndInformationSciences");
                    $("#primary").addClass('hiddendiv', true);
                    $("#CCIS").removeClass('hiddendiv', true);
                    $("#CoEd").addClass('hiddendiv', true);
                    $("#CE").addClass('hiddendiv', true);
                    $("#yearOne").removeClass('hiddendiv', true);
                    $("#ceYear").addClass('hiddendiv', true);
                    $("#ui").addClass('hiddendiv', true);
                    break;
                
                case 'Education':
                    $("input[name='model'").val("CollegeOfEducations");
                    $("#primary").addClass('hiddendiv', true);
                    $("#CoEd").removeClass('hiddendiv', true);
                    $("#CE").addClass('hiddendiv', true);
                    $("#CCIS").addClass('hiddendiv', true);
                    $("#yearOne").removeClass('hiddendiv', true);
                    $("#ceYear").addClass('hiddendiv', true);
                    $("#ui").addClass('hiddendiv', true);
                    break;

                case 'Engineering':
                    $("input[name='model'").val("CollegeOfEngineerings");
                    $("#primary").addClass('hiddendiv', true);
                    $("#CoEd").addClass('hiddendiv', true);
                    $("#CCIS").addClass('hiddendiv', true);
                    $("#CE").removeClass('hiddendiv', true);
                    $("#yearOne").addClass('hiddendiv', true);
                    $("#ceYear").removeClass('hiddendiv', true);
                    $("#ui").addClass('hiddendiv', true);
                    break;
                default :
                break;
            }
        });

        $('#bday').on('change', function(){
            var dropdown = $("select[name='bday_month']")[1]['selectedIndex'];
            // var dropdown = document.getElementById('bday');
            // console.log(dropdown);
            $("input:hidden#date_sorter").val(dropdown);
        })

        $('#import').on('change', function(){
            var collegeImport = $("select[name='import']").val();
            // console.log(collegeImport);

            switch (collegeImport) {
                case 'CCIS' :
                    console.log('ccis');
                    $("#CCISimport").removeClass('hiddendiv', true);
                    $("#CoEdimport").addClass('hiddendiv', true);
                    $("#CEimport").addClass('hiddendiv', true);
                   
                    break;
                
                case 'CoEd':
                console.log('coed');
                    $("#CoEdimport").removeClass('hiddendiv', true);
                    $("#CEimport").addClass('hiddendiv', true);
                    $("#CCISimport").addClass('hiddendiv', true);
                    
                    break;

                case 'CE':
                console.log("ce");
                    $("#CoEdimport").addClass('hiddendiv', true);
                    $("#CCISimport").addClass('hiddendiv', true);
                    $("#CEimport").removeClass('hiddendiv', true);
                    
                    break;
                default :
                break;
            }
        })
    });
</script>
@endsection