<div class="md-form{{ $errors->has('year') ? ' has-error' : '' }}">
    <i class="fa fa-calendar prefix grey-text"></i>
    <select class="mdb-select" id="year" name="year">
        @foreach($years as $year)
            <option value="{{$year->id}}">{{$year->year}}</option>
        @endforeach
    </select>
    <label for="year">Year</label>
</div>

<div class="md-form{{ $errors->has('grade') ? ' has-error' : '' }}">
    <i class="fa fa-graduation-cap prefix grey-text"></i>
    <select class="mdb-select" id="grade" name="grade">
        @foreach($grades as $grade)
            <option value="{{$grade->id}}">{{$grade->name}}</option>
        @endforeach
    </select>
    <label for="grade">Grade</label>
</div>

<div class="md-form">
    <i class="fa fa-pencil prefix grey-text"></i>
    <select class="mdb-select" id="class" name="class">
    </select>
    <label for="class">Class</label>
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
            var class_selector = $('#class');
            disableSelect(class_selector);
            $('#grade').on('change', function () {
                enableSelect(class_selector);
                var data = {!! $data !!};
                class_selector.empty();
                data[this.value].forEach(function (value) {
                    class_selector.append($('<option></option>').attr('value', value.id).text(value.name));
                });
                updateSelect(class_selector);
            });
            $('#grade').trigger('change');
        });
    </script>
@endsection