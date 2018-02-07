<div class="md-form{{ $errors->has('timetable_year') ? ' has-error' : '' }}">
    <i class="fa fa-calendar prefix grey-text"></i>
    <select class="mdb-select" id="timetable_year">
        <option>2017</option>
        <option>2018</option>
    </select>
    <label for="timetable_year">Year</label>
</div>

<div class="md-form{{ $errors->has('timetable_grade') ? ' has-error' : '' }}">
    <i class="fa fa-graduation-cap prefix grey-text"></i>
    <select class="mdb-select" id="timetable_grade">
        @foreach($grades as $grade)
            <option id="{{$grade->id}}">{{$grade->name}}</option>
        @endforeach
    </select>
    <label for="timetable_grade">Grade</label>
</div>

<div class="md-form">
    <i class="fa fa-pencil prefix grey-text"></i>
    <select class="mdb-select" id="timetable_class">
    </select>
    <label for="timetable_class">Class</label>
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
            var class_selector = $('#timetable_class');
            disableSelect(class_selector);
            $('#timetable_grade').on('change', function () {
                enableSelect(class_selector)
                var data = {!! $data !!};
                class_selector.empty();
                data[this.value].forEach(function (value) {
                    class_selector.append($('<option></option>').attr('value', value.id).text(value.name));
                });
                updateSelect(class_selector);
            });
        });
    </script>
@endsection