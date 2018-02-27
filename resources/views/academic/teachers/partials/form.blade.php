<!--Accordion wrapper-->
<div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

{{ csrf_field() }}

<!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingOne">
            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true"
               aria-controls="collapseOne">
                <h5 class="mb-0">
                    Personal Details <i class="fa fa-angle-down rotate-icon"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form{{ $errors->has('full_name') ? ' has-error' : '' }}">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="full_name" class="form-control" name="full_name"
                                   value="{{ old("full_name") }}">
                            <label for="full_name">Full Name</label>
                        </div>

                        <div class="md-form{{ $errors->has('name_initials') ? ' has-error' : '' }}">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="name_initials" class="form-control" name="name_initials"
                                   value="{{ old("name_initials") }}">
                            <label for="name_initials">Name With Initials</label>
                        </div>


                        <div class="md-form{{ $errors->has('nic') ? ' has-error' : '' }}">
                            <i class="fa fa-address-card prefix grey-text"></i>
                            <input type="text" id="nic" class="form-control" name="nic" value="{{ old("nic") }}">
                            <label for="nic">NIC</label>
                        </div>

                        <div class="md-form{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <i class="fa fa-calendar prefix grey-text"></i>
                            <input placeholder="Date of Birth" type="text" name="dob" id="dob"
                                   class="form-control datepicker">
                            <label for="dob">Date of Birth</label>
                        </div>

                        <div class="md-form{{ $errors->has('email') ? ' has-error' : '' }}">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="email" id="email" class="form-control" value="{{ old("email") }}" name="email">
                            <label for="email">Email</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <select class="mdb-select{{ $errors->has('gender') ? ' has-error' : '' }}" name="gender"
                                    id="gender">
                                @if(!old("gender"))
                                    <option value="" disabled selected>Select gender</option>
                                @endif
                                @if(old("gender") === "m")
                                    <option value="m" selected>Male</option>
                                    <option value="f">Female</option>
                                @elseif(old("gender") === "f")
                                    <option value="m">Male</option>
                                    <option value="f" selected>Female</option>
                                @else
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                @endif
                            </select>

                            <label for="gender">Gender</label>
                        </div>


                    </div>

                    <div class="col-md-6">

                        <div class="md-form{{ $errors->has('address') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <textarea type="text" id="address" class="md-textarea" style="height: 157px"
                                      name="address">{{ old("address") }}</textarea>
                            <label for="address">Address</label>
                        </div>


                        <div class="md-form{{ $errors->has('contact_mobile') ? ' has-error' : '' }}">
                            <i class="fa fa-mobile-phone prefix grey-text"></i>
                            <input type="text" id="contact_mobile" class="form-control" name="contact_mobile"
                                   value="{{ old("contact_mobile") }}">
                            <label for="contact_mobile">Mobile Number</label>
                        </div>


                        <div class="md-form{{ $errors->has('contact_home') ? ' has-error' : '' }}">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input type="text" id="contact_home" class="form-control" name="contact_home"
                                   value="{{ old("contact_home") }}">
                            <label for="contact_home">Home Number</label>
                        </div>


                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div style="float: right">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseTwo"
                                    data-target-prev="#collapseOne">
                                Next
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingTwo">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo"
               aria-expanded="false" aria-controls="collapseTwo">
                <h5 class="mb-0">
                    Additional Personal Details <i class="fa fa-angle-down rotate-icon"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="civil_status"
                                    class="mdb-select{{ $errors->has('civil_status') ? ' has-error' : '' }}"
                                    name="civil_status">
                                <option value="" disabled selected>Select civil status</option>

                                @if(old("civil_status") === "married")
                                    <option value="married" selected>Married</option>
                                @else
                                    <option value="married">Married</option>
                                @endif

                                @if(old("civil_status") === "single")
                                    <option value="single" selected>Single</option>
                                @else
                                    <option value="single">Single</option>
                                @endif

                                @if(old("civil_status") === "widow")
                                    <option value="widow" selected>Widow</option>
                                @else
                                    <option value="widow">Widow</option>
                                @endif

                                @if(old("civil_status") === "other")
                                    <option value="other" selected>Other</option>
                                @else
                                    <option value="other">Other</option>
                                @endif

                            </select>

                            <label for="civil_status">Civil Status</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="nationality"
                                    class="mdb-select{{ $errors->has('nationality') ? ' has-error' : '' }}"
                                    name="nationality">
                                <option value="" disabled selected>Select nationality</option>

                                @foreach($nationalities as $nationality)

                                    @if(old("nationality") == $nationality->id)
                                        <option value="{{ $nationality->id }}" selected>{{$nationality->name}}</option>
                                    @else
                                        <option value="{{ $nationality->id }}">{{$nationality->name}}</option>
                                    @endif
                                @endforeach

                            </select>
                            <label for="nationality">Nationality</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="religion"
                                    class="mdb-select{{ $errors->has('religion') ? ' has-error' : '' }}"
                                    name="religion">
                                <option value="" disabled selected>Select Religion</option>

                                @foreach($religions as $religion)
                                    @if(old("religion") == $religion->id)
                                        <option value="{{ $religion->id }}" selected>{{$religion->name}}</option>
                                    @else
                                        <option value="{{ $religion->id }}">{{$religion->name}}</option>
                                    @endif
                                @endforeach

                            </select>
                            <label for="nationality">Religion</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div style="float: left">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseOne"
                                    data-target-prev="#collapseTwo">
                                Previous
                            </button>
                        </div>

                        <div style="float: right">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseThree"
                                    data-target-prev="#collapseTwo">
                                Next
                            </button>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingThree">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree"
               aria-expanded="false" aria-controls="collapseThree">
                <h5 class="mb-0">
                    References <i class="fa fa-angle-down rotate-icon"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">

                        <div class="md-form{{ $errors->has('widow_and_orphan_no') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input type="text" id="widow_and_orphan_no" class="form-control" name="widow_and_orphan_no"
                                   value="{{ old("widow_and_orphan_no") }}">
                            <label for="widow_and_orphan_no">Widow & Orphan No</label>
                        </div>

                        <div class="md-form{{ $errors->has('salary_compute_no') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input type="text" id="salary_compute_no" class="form-control" name="salary_compute_no"
                                   value="{{ old("salary_compute_no") }}">
                            <label for="salary_compute_no">Salary Compute No</label>
                        </div>

                        <div class="md-form{{ $errors->has('signature_no') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input type="text" id="signature_no" class="form-control" name="signature_no"
                                   value="{{ old("signature_no") }}">
                            <label for="signature_no">Signature No</label>
                        </div>

                        <div class="md-form{{ $errors->has('gov_reg_no') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input type="text" id="gov_reg_no" class="form-control" name="gov_reg_no"
                                   value="{{ old("gov_reg_no") }}">
                            <label for="gov_reg_no">Government Registration No</label>
                        </div>

                        <div class="md-form{{ $errors->has('personal_file_no') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input type="text" id="personal_file_no" class="form-control" name="personal_file_no"
                                   value="{{ old("personal_file_no") }}">
                            <label for="gov_reg_no">Personal File No</label>
                        </div>


                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div style="float: left">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseTwo"
                                    data-target-prev="#collapseThree">
                                Previous
                            </button>
                        </div>

                        <div style="float: right">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseFour"
                                    data-target-prev="#collapseThree">
                                Next
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingFour">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour"
               aria-expanded="false" aria-controls="collapseFour">
                <h5 class="mb-0">
                    Academic Details <i class="fa fa-angle-down rotate-icon"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">


                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="designation"
                                    class="mdb-select{{ $errors->has('designation') ? ' has-error' : '' }}"
                                    name="designation">
                                <option value="" disabled selected>Select designation</option>
                                @foreach($designations as $designation)
                                    @if(old("designation") == $designation->id)
                                        <option value="{{ $designation->id }}" selected>{{$designation->name}}</option>
                                    @else
                                        <option value="{{ $designation->id }}">{{$designation->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="designation">Designation</label>
                        </div>


                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="section"
                                    class="mdb-select{{ $errors->has('section') ? ' has-error' : '' }}"
                                    name="section">
                                <option value="" disabled selected>Select section</option>
                                @foreach($sections as $section)
                                    @if(old("section") == $section->id)
                                        <option value="{{ $section->id }}" selected>{{$section->name}}</option>
                                    @else
                                        <option value="{{ $section->id }}">{{$section->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            </select>
                            <label for="section">Section</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="medium"
                                    class="mdb-select{{ $errors->has('medium') ? ' has-error' : '' }}"
                                    name="medium">

                                @if(!old("medium"))
                                    <option value="" disabled selected>Select Medium</option>
                                @endif

                                @if(old("medium") == "sinhala")
                                    <option value="sinhala" selected>Sinhala</option>
                                @else
                                    <option value="sinhala">Sinhala</option>
                                @endif

                                @if(old("medium") == "tamil")
                                    <option value="tamil" selected>Tamil</option>
                                @else
                                    <option value="tamil">Tamil</option>
                                @endif

                                @if(old("medium") == "english")
                                    <option value="english" selected>English</option>
                                @else
                                    <option value="english">English</option>
                                @endif

                            </select>
                            <label for="medium">Medium</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="main_subject"
                                    class="mdb-select{{ $errors->has('main_subject') ? ' has-error' : '' }}"
                                    name="main_subject">
                                @if(!old("main_subject"))
                                    <option value="" disabled selected>Select main subject</option>
                                @endif

                                @foreach($subjects as $subject)
                                    @if(old("main_subject") == $subject->id)
                                        <option value="{{ $subject->id }}" selected>{{$subject->name}}</option>
                                    @else
                                        <option value="{{ $subject->id }}">{{$subject->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="main_subject">Main Subject</label>
                        </div>


                    </div>

                    <div class="col-md-6">
                        <div class="md-form{{ $errors->has('joined_at') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input placeholder="Date of Join" type="text" name="joined_at" id="joined_at"
                                   class="form-control datepicker">
                            <label for="joined_at">Date of Join</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div style="float: left">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseThree"
                                    data-target-prev="#collapseFour">
                                Previous
                            </button>
                        </div>

                        <div style="float: right">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseFive"
                                    data-target-prev="#collapseFour">
                                Next
                            </button>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingFive">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive"
               aria-expanded="false" aria-controls="collapseFive">
                <h5 class="mb-0">
                    Appointment Details <i class="fa fa-angle-down rotate-icon"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">


                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="designation"
                                    class="mdb-select{{ $errors->has('service_grade') ? ' has-error' : '' }}"
                                    name="service_grade">
                                <option value="" disabled selected>Select service grade</option>
                                @foreach($serviceGrades as $serviceGrade)
                                    @if(old("service_grade") == $serviceGrade->id)
                                        <option value="{{ $serviceGrade->id }}"
                                                selected>{{$serviceGrade->name}}</option>
                                    @else
                                        <option value="{{ $serviceGrade->id }}">{{$serviceGrade->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="service_grade">Service Grade</label>
                        </div>


                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="nature_of_appointment"
                                    class="mdb-select{{ $errors->has('nature_of_appointment') ? ' has-error' : '' }}"
                                    name="nature_of_appointment">
                                @if(!old("nature_of_appointment"))
                                    <option value="" disabled selected>Select the nature of appointment</option>
                                @endif

                                @if(old("nature_of_appointment") === "graduate")
                                    <option value="graduate" selected>Graduate</option>
                                @else
                                    <option value="graduate">Graduate</option>
                                @endif

                                @if(old("nature_of_appointment") === "noc_diploma")
                                    <option value="noc_diploma" selected>NOC _ Diploma</option>
                                @else
                                    <option value="noc_diploma">NOC _ Diploma</option>
                                @endif


                                @if(old("nature_of_appointment") === "diploma")
                                    <option value="diploma" selected>Diploma</option>
                                @else
                                    <option value="diploma">Diploma</option>
                                @endif

                                @if(old("nature_of_appointment") === "training")
                                    <option value="training" selected>Training</option>
                                @else
                                    <option value="training">Training</option>
                                @endif

                                @if(old("nature_of_appointment") === "other")
                                    <option value="other" selected>Other</option>
                                @else
                                    <option value="other">Other</option>
                                @endif

                            </select>
                            <label for="nature_of_appointment">Nature of Appointment</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="current_role"
                                    class="mdb-select{{ $errors->has('current_role') ? ' has-error' : '' }}"
                                    name="current_role">
                                <option value="" disabled selected>Select current role</option>
                                @foreach($academicRoles as $academicRole)
                                    @if(old("current_role") === $academicRole->id )
                                        <option value="{{ $academicRole->id }}"
                                                selected>{{$academicRole->name}}</option>
                                    @endif
                                    <option value="{{ $academicRole->id }}">{{$academicRole->name}}</option>
                                @endforeach
                            </select>
                            <label for="current_role">Current Role</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="current_type"
                                    class="mdb-select{{ $errors->has('current_type') ? ' has-error' : '' }}"
                                    name="current_type">

                                @if(!old("current_type"))
                                    <option value="" disabled selected>Select current type</option>
                                @endif

                                @if(old("current_type") === "1")
                                    <option value="1" selected>Available</option>
                                @else
                                    <option value="1">Available</option>
                                @endif

                                @if(old("current_type") === "2")
                                    <option value="2" selected>Allocated</option>
                                @else
                                    <option value="2">Allocated</option>
                                @endif

                                @if(old("current_type") === "3")
                                    <option value="3" selected>Retired</option>
                                @else
                                    <option value="3">Retired</option>
                                @endif

                                @if(old("current_type") === "4")
                                    <option value="4" selected>Transferred</option>
                                @else
                                    <option value="4">Transferred</option>
                                @endif

                                @if(old("current_type") === "5")
                                    <option value="5" selected>Temporary</option>
                                @else
                                    <option value="5">Temporary</option>
                                @endif

                            </select>
                            <label for="current_type">Current Type</label>
                        </div>


                    </div>

                    <div class="col-md-6">
                        <div class="md-form{{ $errors->has('salary') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input type="text" id="salary" class="form-control" name="salary"
                                   value="{{ old("salary") }}">
                            <label for="salary">Salary</label>
                        </div>

                        <div class="md-form{{ $errors->has('first_appointment') ? ' has-error' : '' }}">
                            <i class="fa fa-calendar prefix grey-text"></i>
                            <input placeholder="First Appointment" type="text" name="first_appointment"
                                   id="first_appointment"
                                   class="form-control datepicker">
                            <label for="first_appointment">First Appointment</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="fist_appointment_subject"
                                    class="mdb-select{{ $errors->has('fist_appointment_subject') ? ' has-error' : '' }}"
                                    name="fist_appointment_subject">
                                <option value="" disabled selected>Select the first appointment subject</option>
                                @foreach($subjects as $subject)
                                    @if(old("fist_appointment_subject") === $subject->id)
                                        <option value="{{ $subject->id }}" selected>{{$subject->name}}</option>
                                    @else
                                        <option value="{{ $subject->id }}">{{$subject->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="current_type">Fist Appointment Subject</label>
                        </div>


                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div style="float: left">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseFour"
                                    data-target-prev="#collapseFive">
                                Previous
                            </button>
                        </div>

                        <div style="float: right">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseSix"
                                    data-target-prev="#collapseFive">
                                Next
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingSix">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseSix"
               aria-expanded="false" aria-controls="collapseFive">
                <h5 class="mb-0">
                    Previous Experience <i class="fa fa-angle-down rotate-icon"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-12">
                        <button class="btn btn-success add-experience" type="button">Add Experience</button>
                    </div>

                    <div class="experience-placeholder col-md-12">

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div style="float: left">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseFive"
                                    data-target-prev="#collapseSix">
                                Previous
                            </button>
                        </div>

                        <div style="float: right">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseSeven"
                                    data-target-prev="#collapseSix">
                                Next
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingSeven">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseSeven"
               aria-expanded="false" aria-controls="collapseFive">
                <h5 class="mb-0">
                    Qualifications <i class="fa fa-angle-down rotate-icon"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6">

                        <h6>Professional Qualifications</h6>


                        <button class="btn btn-success add-professional-qualification" type="button">Add Qualification
                        </button>


                        <div class="professional-qualifications-placeholder col-md-12">

                        </div>
                    </div>

                    <div class="col-md-6">

                        <h6>Educational Qualification</h6>

                        <button class="btn btn-success add-educational-qualification" type="button">Add Qualification
                        </button>


                        <div class="educational-qualifications-placeholder col-md-12">

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div style="float: left">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseSix"
                                    data-target-prev="#collapseSeven">
                                Previous
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Accordion card -->
</div>

@include("common.partials.form-errors")

<div class="text-right">
    <button class="btn btn-success">Save</button>
</div>

<!--/.Accordion wrapper-->

@section("custom-styles")
    <style>

        .delete-item {
            cursor: pointer;
            font-size: 20px;
        }


    </style>
@endsection


@section("custom-scripts")
    <script>


        $(".toggle").on("click", function (e) {

            e.preventDefault();

            $($(this).attr("data-target-prev")).collapse("hide");
            $($(this).attr("data-target-next")).collapse("show");

        });

        let expCounter = 0;
        let proffesionalExpCounter = 0;
        let educationalExpCounter = 0;


        $('.add-experience').on("click", function (e) {

            e.preventDefault();

            expCounter++;

            $('.experience-placeholder').append(
                `<div class="row" id="experience-${expCounter}">
                            <div class="col-md-4">

                                <div class="md-form ">
                                    <i class="fa fa-phone prefix grey-text"></i>
                                    <input type="text" id="employer[${expCounter}]" class="form-control" name="employer[${expCounter}]">
                                    <label for="employer[${expCounter}]">Employer</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="md-form">
                                    <i class="fa fa-phone prefix grey-text"></i>
                                    <input type="text" id="subject[${expCounter}]" class="form-control" name="subject[${expCounter}]">
                                    <label for="subject[${expCounter}]">Subject</label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="md-form">
                                    <i class="fa fa-phone prefix grey-text"></i>
                                    <input type="text" id="years[${expCounter}]" class="form-control" name="years[${expCounter}]">
                                    <label for="years[${expCounter}]">No of Years</label>
                                </div>
                            </div>

                            <div class="col-md-1">
                                <i class="fa fa-window-close delete-item"  aria-hidden="true" data-target="#experience-${expCounter}"></i>
                            </div>



                </div>`
            );

        });


        $('.add-professional-qualification').on('click', function (e) {
            e.preventDefault();

            proffesionalExpCounter++;

            $('.professional-qualifications-placeholder').append(
                `<div class="row" id="professional-qualification-${proffesionalExpCounter}">
                                <div class="col-md-11">

                                    <div class="md-form">
                                        <i class="fa fa-pencil prefix grey-text"></i>
                                        <textarea type="text" id="professional-qualification[${proffesionalExpCounter}]" class="md-textarea"
                                                  style="height: 100px"
                                                  name="professional-qualification[${proffesionalExpCounter}]"></textarea>
                                        <label for="professional-qualification[${proffesionalExpCounter}]">Qualification</label>
                                    </div>

                                </div>

                             <div class="col-md-1">
                                <i class="fa fa-window-close delete-item"  aria-hidden="true" data-target="#professional-qualification-${proffesionalExpCounter}"></i>
                            </div>

                </div>`
            );

        })

        $('.add-educational-qualification').on('click', function (e) {
            e.preventDefault();

            educationalExpCounter++;

            $('.educational-qualifications-placeholder').append(
                `<div class="row" id="educational-qualification-${educationalExpCounter}">
                                <div class="col-md-11">

                                    <div class="md-form">
                                        <i class="fa fa-pencil prefix grey-text"></i>
                                        <textarea type="text" id="educational-qualification[${educationalExpCounter}]" class="md-textarea"
                                                  style="height: 100px"
                                                  name="educational-qualification[${educationalExpCounter}]"></textarea>
                                        <label for="educational-qualification[${educationalExpCounter}]">Qualification</label>
                                    </div>

                                </div>

                            <div class="col-md-1">
                                <i class="fa fa-window-close delete-item"  aria-hidden="true" data-target="#educational-qualification-${educationalExpCounter}"></i>
                            </div>


                 </div>`
            );

        });

        $(document).on('click', ".delete-item", function (e) {
            e.preventDefault();
            console.log(this);
            $($(this).attr("data-target")).remove();
        })

    </script>
@endsection