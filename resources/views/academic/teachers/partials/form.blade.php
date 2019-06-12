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
                                   value="{{ ($hasData ? $allRecords->full_name : old('full_name')) }}">
                            <label for="full_name">Full Name</label>
                        </div>

                        <div class="md-form{{ $errors->has('name_initials') ? ' has-error' : '' }}">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="name_initials" class="form-control" name="name_initials"
                                   value="{{ ($hasData ? $allRecords->name_initials : old('name_initials')) }}">
                            <label for="name_initials">Name With Initials</label>
                        </div>


                        <div class="md-form{{ $errors->has('nic') ? ' has-error' : '' }}">
                            <i class="fa fa-address-card prefix grey-text"></i>
                            <input type="text" id="nic" class="form-control" name="nic" value="{{ ($hasData ? $allRecords->nic : old('nic')) }}">
                            <label for="nic">NIC</label>
                        </div>

                        <div class="md-form{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <i class="fa fa-calendar prefix grey-text"></i>
                            <input placeholder="Date of Birth" type="text" name="dob" id="dob"
                                   class="form-control datepicker" value="{{ ($hasData ? $allRecords->dob : old('dob')) }}">
                            <label for="dob">Date of Birth</label>
                        </div>

                        <div class="md-form{{ $errors->has('email') ? ' has-error' : '' }}">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="email" id="email" class="form-control" value="{{ ($hasData ? $allRecords->email : old('email')) }}" name="email">
                            <label for="email">Email</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <select class="mdb-select{{ $errors->has('gender') ? ' has-error' : '' }}" name="gender" id="gender">
                                <option value="" disabled selected>Select gender</option>
                                <option value="m" {{ (($hasData && $allRecords->gender == 'm') ? 'selected' : ((old('gender') == 'm') ? 'selected' : '')) }}>Male</option>
                                <option value="f" {{ (($hasData && $allRecords->gender == 'f') ? 'selected' : ((old('gender') == 'f') ? 'selected' : '')) }}>Female</option>
                            </select>

                            <label for="gender">Gender</label>
                        </div>


                    </div>

                    <div class="col-md-6">

                        <div class="md-form{{ $errors->has('address') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <textarea type="text" id="address" class="md-textarea" style="height: 157px"
                                      name="address">{{ ($hasData ? $allRecords->address : old('address')) }}</textarea>
                            <label for="address">Address</label>
                        </div>


                        <div class="md-form{{ $errors->has('contact_mobile') ? ' has-error' : '' }}">
                            <i class="fa fa-mobile-phone prefix grey-text"></i>
                            <input type="text" id="contact_mobile" class="form-control" name="contact_mobile"
                                   value="{{ ($hasData ? $allRecords->contact_mobile : old('contact_mobile')) }}">
                            <label for="contact_mobile">Mobile Number</label>
                        </div>


                        <div class="md-form{{ $errors->has('contact_home') ? ' has-error' : '' }}">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input type="text" id="contact_home" class="form-control" name="contact_home"
                                   value="{{ ($hasData ? $allRecords->contact_home : old('contact_home')) }}">
                            <label for="contact_home">Home Number</label>
                        </div>


                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div style="float: right">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseTwo" data-target-prev="#collapseOne">
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
                                    class="mdb-select{{ $errors->has('civil_status') ? ' has-error' : '' }}" name="civil_status">
                                <option value="" disabled selected>Select civil status</option>
                                <option value="married" {{ (($hasData && $allRecords->civil_status == 'married') ? 'selected' : ((old('civil_status') == 'married') ? 'selected' : '')) }}>Married</option>
                                <option value="single" {{ (($hasData && $allRecords->civil_status == 'single') ? 'selected' : ((old('civil_status') == 'single') ? 'selected' : '')) }}>Single</option>
                                <option value="widow" {{ (($hasData && $allRecords->civil_status == 'widow') ? 'selected' : ((old('civil_status') == 'widow') ? 'selected' : '')) }}>Widow</option>
                                <option value="other" {{ (($hasData && $allRecords->civil_status == 'other') ? 'selected' : ((old('civil_status') == 'other') ? 'selected' : '')) }}>Other</option>
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
                                    <option value="{{ $nationality->id }}" {{ (($hasData && $allRecords->nationality_id == $nationality->id) ? 'selected' : ((old('nationality') == $nationality->id) ? 'selected' : '')) }}>{{$nationality->name}}</option>
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
                                    <option value="{{ $religion->id }}" {{ (($hasData && $allRecords->religion_id == $religion->id) ? 'selected' : ((old('religion') == $religion->id) ? 'selected' : '')) }}>{{$religion->name}}</option>
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
                                   value="{{ ($hasData ? $allRecords->widow_and_orphan_no : old('widow_and_orphan_no')) }}">
                            <label for="widow_and_orphan_no">Widow & Orphan No</label>
                        </div>

                        <div class="md-form{{ $errors->has('salary_compute_no') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input type="text" id="salary_compute_no" class="form-control" name="salary_compute_no"
                                   value="{{ ($hasData ? $allRecords->salary_compute_no : old('salary_compute_no')) }}">
                            <label for="salary_compute_no">Salary Compute No</label>
                        </div>

                        <div class="md-form{{ $errors->has('signature_no') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input type="text" id="signature_no" class="form-control" name="signature_no"
                                   value="{{ ($hasData ? $allRecords->signature_no : old('signature_no')) }}">
                            <label for="signature_no">Signature No</label>
                        </div>

                        <div class="md-form{{ $errors->has('gov_reg_no') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input type="text" id="gov_reg_no" class="form-control" name="gov_reg_no"
                                   value="{{ ($hasData ? $allRecords->gov_reg_no : old('gov_reg_no')) }}">
                            <label for="gov_reg_no">Government Registration No</label>
                        </div>

                        <div class="md-form{{ $errors->has('personal_file_no') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input type="text" id="personal_file_no" class="form-control" name="personal_file_no"
                                   value="{{ ($hasData ? $allRecords->personal_file_no : old('personal_file_no')) }}">
                            <label for="personal_file_no">Personal File No</label>
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
                                    <option value="{{ $designation->id }}" {{ (($hasData && $allRecords->designation_id == $designation->id) ? 'selected' : ((old('designation') == $designation->id) ? 'selected' : '')) }}>{{$designation->name}}</option>
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
                                    <option value="{{ $section->id }}" {{ (($hasData && $allRecords->section_id == $section->id) ? 'selected' : ((old('section') == $section->id) ? 'selected' : '')) }}>{{$section->name}}</option>
                                @endforeach
                            </select>
                            <label for="section">Section</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="medium"
                                    class="mdb-select{{ $errors->has('medium') ? ' has-error' : '' }}"
                                    name="medium">
                                <option value="" disabled selected>Select Medium</option>
                                <option value="sinhala" {{ (($hasData && $allRecords->medium == 'sinhala') ? 'selected' : ((old('medium') == 'sinhala') ? 'selected' : '')) }}>Sinhala</option>
                                <option value="tamil" {{ (($hasData && $allRecords->medium == 'tamil') ? 'selected' : ((old('medium') == 'tamil') ? 'selected' : '')) }}>Tamil</option>
                                <option value="english" {{ (($hasData && $allRecords->medium == 'english') ? 'selected' : ((old('medium') == 'english') ? 'selected' : '')) }}>>English</option>
                            </select>
                            <label for="medium">Medium</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="main_subject"
                                    class="mdb-select{{ $errors->has('main_subject') ? ' has-error' : '' }}"
                                    name="main_subject">
                                <option value="" disabled selected>Select main subject</option>
                                @foreach($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{$subject->name}}</option>
                                @endforeach
                            </select>
                            <label for="main_subject">Main Subject</label>
                        </div>


                    </div>

                    <div class="col-md-6">
                        <div class="md-form{{ $errors->has('joined_at') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input placeholder="Date of Join" type="text" name="joined_at" id="joined_at"
                                   class="form-control datepicker" value="{{ ($hasData ? $allRecords->joined_at : old('joined_at')) }}">
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
                                    <option value="{{ $serviceGrade->id }}" {{ (($hasData && $allRecords->service_grade_id == $serviceGrade->id) ? 'selected' : ((old('service_grade') == $serviceGrade->id) ? 'selected' : '')) }}>{{$serviceGrade->name}}</option>
                                @endforeach
                            </select>
                            <label for="service_grade">Service Grade</label>
                        </div>


                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="nature_of_appointment"
                                    class="mdb-select{{ $errors->has('nature_of_appointment') ? ' has-error' : '' }}"
                                    name="nature_of_appointment">
                                <option value="" disabled selected>Select the nature of appointment</option>
                                <option value="graduate" {{ (($hasData && $allRecords->nature_of_appointment == 'graduate') ? 'selected' : ((old('nature_of_appointment') == 'graduate') ? 'selected' : '')) }}>Graduate</option>
                                <option value="noc_diploma" {{ (($hasData && $allRecords->nature_of_appointment == 'noc_diploma') ? 'selected' : ((old('nature_of_appointment') == 'noc_diploma') ? 'selected' : '')) }}>NOC _ Diploma</option>
                                <option value="diploma" {{ (($hasData && $allRecords->nature_of_appointment == 'diploma') ? 'selected' : ((old('nature_of_appointment') == 'diploma') ? 'selected' : '')) }}>Diploma</option>
                                <option value="training" {{ (($hasData && $allRecords->nature_of_appointment == 'training') ? 'selected' : ((old('nature_of_appointment') == 'training') ? 'selected' : '')) }}>Training</option>
                                <option value="other" {{ (($hasData && $allRecords->nature_of_appointment == 'other') ? 'selected' : ((old('nature_of_appointment') == 'other') ? 'selected' : '')) }}>Other</option>
                            </select>
                            <label for="nature_of_appointment">Nature of Appointment</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="current_role"
                                    class="mdb-select{{ $errors->has('current_role') ? ' has-error' : '' }}"
                                    name="current_role[]" multiple>
                                <option value="" disabled selected>Select current role</option>
                                @foreach($academicRoles as $academicRole)
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
                                <option value="" disabled selected>Select current type</option>
                                <option value="1" {{ (($hasData && $allRecords->current_type == '1') ? 'selected' : ((old('current_type') == '1') ? 'selected' : '')) }}>Available</option>
                                <option value="2" {{ (($hasData && $allRecords->current_type == '2') ? 'selected' : ((old('current_type') == '2') ? 'selected' : '')) }}>Allocated</option>
                                <option value="3" {{ (($hasData && $allRecords->current_type == '3') ? 'selected' : ((old('current_type') == '3') ? 'selected' : '')) }}>Retired</option>
                                <option value="4" {{ (($hasData && $allRecords->current_type == '4') ? 'selected' : ((old('current_type') == '4') ? 'selected' : '')) }}>Transferred</option>
                                <option value="5" {{ (($hasData && $allRecords->current_type == '5') ? 'selected' : ((old('current_type') == '5') ? 'selected' : '')) }}>Temporary</option>
                            </select>
                            <label for="current_type">Current Type</label>
                        </div>


                    </div>

                    <div class="col-md-6">
                        <div class="md-form{{ $errors->has('salary') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input type="text" id="salary" class="form-control" name="salary"
                                   value="{{ ($hasData ? $allRecords->salary : old('salary')) }}">
                            <label for="salary">Salary</label>
                        </div>

                        <div class="md-form{{ $errors->has('first_appointment') ? ' has-error' : '' }}">
                            <i class="fa fa-calendar prefix grey-text"></i>
                            <input placeholder="First Appointment" type="text" name="first_appointment"
                                   id="first_appointment"
                                   class="form-control datepicker" value="{{ ($hasData ? $allRecords->first_appointment_at : old('first_appointment')) }}">
                            <label for="first_appointment">First Appointment</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select id="fist_appointment_subject"
                                    class="mdb-select{{ $errors->has('fist_appointment_subject') ? ' has-error' : '' }}"
                                    name="fist_appointment_subject">
                                <option value="" disabled selected>Select the first appointment subject</option>
                                @foreach($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{$subject->name}}</option>
                                @endforeach
                            </select>
                            <label for="fist_appointment_subject">Fist Appointment Subject</label>
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
                        @if($hasData && $teacher_experiences != '')
                            Employer: {{ $teacher_experiences->employer }}
                            Subject: {{ $teacher_experiences->subject }}
                            Years of Experience: {{ $teacher_experiences->years }} years
                        @endif
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
                            @if($hasData && $teacher_professional_qualifications != '')
                                Qualification: {{ $teacher_professional_qualifications->qualification }}
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">

                        <h6>Educational Qualification</h6>

                        <button class="btn btn-success add-educational-qualification" type="button">Add Qualification
                        </button>


                        <div class="educational-qualifications-placeholder col-md-12">
                            @if($hasData && $teacher_educational_qualifications != '')
                                Qualification: {{ $teacher_educational_qualifications->qualification }}
                            @endif
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

                        <div style="float: right">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseEight"
                                    data-target-prev="#collapseSeven">
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
        <div class="card-header" role="tab" id="headingEight">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseEight"
               aria-expanded="false" aria-controls="collapseFive">
                <h5 class="mb-0">
                    Access Credentials <i class="fa fa-angle-down rotate-icon"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-6">
                        <div class="md-form{{ $errors->has('fname') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input type="text" id="fname" class="form-control" name="fname"
                                   value="{{ ($hasData ? $allRecords->fname : old('fname')) }}">
                            <label for="fname">First Name</label>
                        </div>

                        <div class="md-form{{ $errors->has('lname') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input type="text" id="lname" class="form-control" name="lname"
                                   value="{{ ($hasData ? $allRecords->lname : old('lname')) }}">
                            <label for="lname">Last Name</label>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="md-form{{ $errors->has('username') ? ' has-error' : '' }}">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <input type="text" id="username" class="form-control" name="username"
                                   value="{{ ($hasData ? $allRecords->username : old('username')) }}">
                            <label for="salary">Username</label>
                        </div>

                        @if(!$hasData)
                            <div class="md-form{{ $errors->has('password') ? ' has-error' : '' }}">
                                <i class="fa fa-pencil prefix grey-text"></i>
                                <input type="password" id="password" class="form-control" name="password"
                                       value="{{ old('password') }}">
                                <label for="salary">Password</label>
                            </div>
                        @endif

                        <div class="md-form">
                            <i class="fa fa-pencil prefix grey-text"></i>
                            <select class="mdb-select{{ $errors->has('role') ? ' has-error' : '' }}" name="role" id="role">
                                <option value="" disabled selected>Role</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <label for="role">Role</label>
                        </div>

                    </div>


                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div style="float: left">
                            <button class="btn btn-info toggle" type="button" data-target-next="#collapseSeven"
                                    data-target-prev="#collapseEight">
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
                                    <i class="fa fa-file prefix grey-text"></i>
                                    <input type="text" id="employer[${expCounter}]" class="form-control" name="employer[${expCounter}]">
                                    <label for="employer[${expCounter}]">School</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="md-form">
                                    <i class="fa fa-file prefix grey-text"></i>
                                    <input type="text" id="subject[${expCounter}]" class="form-control" name="subject[${expCounter}]">
                                    <label for="subject[${expCounter}]">Subject</label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="md-form">
                                    <i class="fa fa-file prefix grey-text"></i>
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