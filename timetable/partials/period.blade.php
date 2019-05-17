<div class="md-form{{ $errors->has('year') ? ' has-error' : '' }}">
    <i class="fa fa-calendar prefix grey-text"></i>
    <input type="text" name="year" id="year" value="{{ $timetable->academic->year }}" disabled
           class="form-control">
    <input type="text" name="year" value="{{ $timetable->academic->id }}" hidden
           class="form-control">
    <label for="year">Year</label>
</div>

<div class="md-form{{ $errors->has('grade') ? ' has-error' : '' }}">
    <i class="fa fa-graduation-cap prefix grey-text"></i>
    <input type="text" name="grade" id="grade" value="{{ $timetable->classRoom->grade->name }}" disabled
           class="form-control">
    <label for="grade">Grade</label>
</div>

<div class="md-form">
    <i class="fa fa-pencil prefix grey-text"></i>
    <input type="text" id="class" value="{{ $timetable->classRoom->name }}" class="form-control" disabled>
    <input type="text" name="class" value="{{ $timetable->classRoom->id }}" class="form-control" hidden>
    <label for="class">Class</label>
</div>

<div class="md-form">
    <i class="fa fa-id-card prefix grey-text"></i>
    <input type="text" name="period" id="period" value="{{ $period }}" disabled class="form-control">
    <input type="text" name="period" value="{{ $period }}" hidden class="form-control">
    <label for="period">Period</label>
</div>

<div class="md-form">
    <i class="fa fa-pencil prefix grey-text"></i>
    <select class="mdb-select" id="teacher" name="teacher">
        @foreach($teachers as $teacher)
            <option value="{{$teacher['self']->teacher_id}}">{{$teacher['self']->teacher->full_name}}</option>
        @endforeach
    </select>
    <label for="teacher">Teacher</label>
</div>

<div class="md-form">
    <i class="fa fa-pencil prefix grey-text"></i>
    <select class="mdb-select" id="subject" name="subject" disabled>
    </select>
    <label for="subject">Subject</label>
</div>

@include('common.partials.form-errors')
<div class="text-right">
    <button type="submit" class="btn btn-success">Save</button>
</div>

@section('custom-scripts')
    <script>
        function updateSelect(selector) {
            selector.material_select();
        }

        function disableSelect(selector) {
            selector.prop('disabled', true);
            updateSelect(selector);
        }

        function enableSelect(selector) {
            selector.prop('disabled', false);
            updateSelect(selector);
        }

        $(document).ready(function () {
            var class_selector = $('#subject');
            disableSelect(class_selector);
            $('#teacher').on('change', function () {
                enableSelect(class_selector);
                var data = {!! json_encode($teachers) !!};
                class_selector.empty();
                Object.values(data[this.value]['subjects']).forEach(function (subject) {
                    class_selector.append($('<option></option>').attr('value', subject.id).text(subject.name));
                });
                updateSelect(class_selector);
            });
            $('#teacher').trigger('change');
        });
    </script>
@endsection