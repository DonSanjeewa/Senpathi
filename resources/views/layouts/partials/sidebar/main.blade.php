<div id="slide-out" class="side-nav sn-bg-4 fixed mdb-sidenav">
    <ul class="custom-scrollbar list-unstyled" style="max-height:100vh;">
        <!-- Logo -->
        <li>
            <div class="logo-wrapper waves-light">
                <a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png"
                                 class="img-fluid flex-center"></a>
            </div>
        </li>
        <!--/. Logo -->
        <!--Social-->
        <li>
            <ul class="social">
                <li><a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                <li><a href="#" class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                <li><a href="#" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                <li><a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
            </ul>
        </li>
        <!--/Social-->

        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <li><a class="collapsible-header waves-effect arrow-r">
                        <i class="fa fa-user fa-lg" aria-hidden="true"></i> Academic Staff
                        <i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('academic.teachers.index')}}" class="waves-effect"><i class="fa fa-user-o"></i>Teachers List</a>
                            </li>
                            <li><a href="#" class="waves-effect"><i class="fa fa-pencil"></i>Customized Teacher List</a>
                            </li>
                            <li><a href="{{route('academic.salary-requests.index')}}" class="waves-effect"><i class="fa fa-address-book-o"></i>View Salary Sheet
                                    Requests</a>
                            </li>
                            <li><a href="#" class="waves-effect"><i class="fa fa-user-plus"></i>Create Teacher</a>
                            </li>
                            <li><a href="#" class="waves-effect"><i class="fa fa-check"></i>Approve Teacher</a>
                            </li>
                            <li><a href="#" class="waves-effect"><i class="fa fa-suitcase"></i>Staff Full Report</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r">
                        <i class="fa fa-external-link-square fa-lg" aria-hidden="true"></i> Leaves
                        <i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('leaves.pending')}}" class="waves-effect"><i class="fa fa-hourglass-start"></i>Pending Leaves</a>
                            </li>
                            <li><a href="{{route('leaves.apply')}}" class="waves-effect"><i class="fa fa-check-circle"></i>Apply Leave</a>
                            </li>
                            <li><a href="{{route('leaves.all')}}" class="waves-effect"><i class="fa fa-briefcase"></i>All Leaves</a>
                            </li>
                            <li><a href="{{route('leaves.report')}}" class="waves-effect"><i class="fa fa-line-chart"></i>Leaves Report</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r">
                        <i class="fa fa-eye fa-lg" aria-hidden="true"></i> Attendance
                        <i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect"><i class="fa fa-male"></i>Teacher Attendance</a>
                            </li>
                            <li><a href="#" class="waves-effect"><i class="fa fa-graduation-cap"></i>Student Attendance</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r">
                        <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Timetable Management
                        <i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('timetables.index')}}" class="waves-effect"><i class="fa fa-table"></i>All Timetables</a>
                            </li>
                            <li><a href="{{route('timetables.create')}}" class="waves-effect"><i class="fa fa-plus-square"></i>Create Timetable</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r">
                        <i class="fa fa-graduation-cap fa-lg" aria-hidden="true" style="margin-left: -3px;"></i> Student
                        Management
                        <i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect"><i class="fa fa-list"></i>Student List</a>
                            </li>
                            <li><a href="#" class="waves-effect"><i class="fa fa-plus-square"></i>Create Student</a>
                            </li>
                            <li><a href="#" class="waves-effect"><i class="fa fa-line-chart"></i>Student Report</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r">
                        <i class="fa fa-calendar-o fa-lg" aria-hidden="true"></i> Event Management
                        <i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('events.index')}}" class="waves-effect"><i class="fa fa-calendar-o"></i>View All events</a>
                            </li>
                            <li><a href="{{route('events.create')}}" class="waves-effect"><i class="fa fa-plus-square"></i>Add Event Type</a>
                            </li>
                            <li><a href="#" class="waves-effect"><i class="fa fa-check-square"></i>Check events</a>
                            </li>
                            <li><a href="#" class="waves-effect"><i class="fa fa-calendar"></i>Event Calendar</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg mask-strong"></div>
</div>