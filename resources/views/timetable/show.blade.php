@extends('layouts.extended')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header blue white-text">Manage Timetable</h5>
                <div class="card-body">
                    <table id="timetable" class="table table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for ($i = 1; $i < 10; $i++)
                            @if($i == 5)
                                <tr>
                                    <td colspan="5"></td>
                                </tr>
                            @else
                                <tr>
                                    @for ($j = 1; $j < 6; $j++)
                                        <td class="period">
                                        @if(isset($data[$i.$j]))
                                            <!--Card Dark-->
                                                <div class="card card-dark">
                                                    <!--Card image-->
                                                    <div class="view overlay hm-white-slight">
                                                        <a>
                                                            <div class="mask"></div>
                                                        </a>
                                                    </div>
                                                    <!--/.Card image-->
                                                    <!--Card content-->
                                                    <div class="card-body">
                                                        <!--Edit button-->
                                                        <a class="activator" href="{{route('academic.timetables.edit', [
                                                    'year' => $year,
                                                    'class' => $class,
                                                    'period' => $i.$j
                                                    ])}}"><i class="fa fa-pencil white-text"></i></a>
                                                        <!--Title-->
                                                        <h6 class="card-title">{{$data[$i.$j]->subject->name}}</h6>
                                                        <hr>
                                                        <!--Text-->
                                                        <p class="card-text white-text">{{$data[$i.$j]->teacher->full_name}}</p>
                                                        <a href="{{route('academic.timetables.remove', [
                                                        'year' => $year,
                                                        'class' => $class,
                                                        'period' => $i.$j
                                                    ])}}" class="d-flex flex-row-reverse"><i
                                                                    class="fa fa-trash white-text"></i></a>
                                                        </a>
                                                    </div>
                                                    <!--/.Card content-->
                                                </div>
                                                <!--/.Card Dark-->
                                            @else
                                                <a href="{{route('academic.timetables.edit', [
                                                    'year' => $year,
                                                    'class' => $class,
                                                    'period' => $i.$j
                                                    ])}}">
                                                    <i class="fa fa-calendar-plus-o fa-3x" aria-hidden="true"></i>
                                                </a>

                                            @endif
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
