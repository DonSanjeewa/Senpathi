@extends('layouts.extended')

@section('content')
<div clas="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header gold white-text"><i class="fa fa-warning ml-2"></i> <b>NEED YOUR ATTENTION</b></h5>
                <div class="card-body">
                    <div id="big_stats" class="cf">
                        <div class="stat"> <i class="fa fa-bed"></i> <span class="value">{{ $leaveCount }}</span>
                            <br>Leaves
                        </div>
                        <!-- .stat -->

                        <div class="stat"> <i class="fa fa-calendar"></i>
                            <span class="value">{{ $eventsCount}}</span>
                            <br>Events
                        </div>
                        <!-- .stat -->

                        <div class="stat"> <i class="fa fa-users"></i> <span class="value">{{ $teachersCount}}</span>
                            <br>Teachers
                        </div>
                        <!-- .stat -->

                        <!-- <div class="stat"> <i class="fa fa-envelope"></i> <span class="value">1</span>
                            <br>Messages
                        </div> -->
                        <!-- .stat -->
                    </div>
                </div>
            </div>
        </div>

        @if($role == 'Teacher')   
        <div class="col-md-6">
        <h5 class="card-header gold white-text"><i class="fa fa-warning ml-2"></i> <b>LEAVE PROFILE</b></h5>
            <div class="card-body">
                <div id="big_stats" class="cf">
                    <div class="stat"> <i class="fa fa-calendar"></i> <span class="value">{{ $casualLeaves }}/20</span>
                        <br>Casual Leaves
                    </div>
                    <!-- .stat -->

                    <div class="stat"> <i class="fa fa-bed"></i>
                        <span class="value">{{ $medicalLeaves }}/21</span>
                        <br>Medical Leaves
                    </div>
                    <!-- .stat -->

                    <div class="stat"> <i class="fa fa-calendar"></i> <span class="value">{{ $maternityLeaves }}/84</span>
                        <br>Maternity Leaves
                    </div>
                    <!-- .stat -->
                </div>
            </div>
        </div>

        @else
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header gold white-text"><i class="fa fa-newspaper-o ml-2"></i> <b>RECENT NEWS</b>
                </h5>
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <p class="card-text">No content</p>
                </div>
            </div>
        </div>
        @endif
        
    </div>
</div>
<br>
<div class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header gold white-text"><i class="fa fa-calendar ml-2"></i> <b>UPCOMING EVENTS</b>
                </h5>

                @if(count($upCommingEvents) > 0 )
                <div class="content-scroller">
                    @foreach($upCommingEvents as $upCommingEvent)
                    <div class="card-body">
                        <!--Title-->
                        <a>
                            <h4 class="card-title">{{$upCommingEvent->name}}</h4>
                        </a>



                        <!--Text-->
                        <p class="card-text">{{$upCommingEvent->description}}</p>

                        <a class="card-meta">
                                    <span>
                                        <i class="fa fa-location-arrow"></i> {{$upCommingEvent->location}}</span>
                        </a>
                        <p class="card-meta float-right">{{$upCommingEvent->starts_at}}</p>
                    </div>
                    <hr>
                    @endforeach
                </div>

                @else
                <div>      
                        <div class="card">       
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <p class="card-text">No Any Event to show</p>
                            </div>
                        </div>
                </div>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header gold white-text"><i class="fa fa-arrows-h ml-2"></i> <b>ACTIVITY FEED</b></h5>
                <div class="card-body content-scroller">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="col-sm-2">
                                <div class="thumbnail">
                                    <img class="img-responsive user-photo" src="img/man.png">
                                </div>
                            </div>                        </div>
                        <div class="col-md-10">
                            <div class="card">
                                <h5 class="card-header gold white-text"> <b>Admin</b></h5>
                                <div class="card-body">
                                    <p class="card-text">Content Under construction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- <div class="row">
                        <div class="col-md-2">
                            <div class="col-sm-2">
                                <div class="thumbnail">
                                    <img class="img-responsive user-photo" src="img/man.png">
                                </div>
                            </div>                        </div>
                        <div class="col-md-10">
                            <div class="card">
                                <h5 class="card-header gold white-text"> <b>Admin</b></h5>
                                <div class="card-body">
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
