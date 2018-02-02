<div class="md-form{{ $errors->has('event_name') ? ' has-error' : '' }}">
    <i class="fa fa-calendar prefix grey-text"></i>
    <input name="event_name" type="text" id="event_name" value="{{ old('event_name') }}"
           class="form-control">
    <label for="event_name">Event Name</label>
</div>

<div class="md-form{{ $errors->has('event_location') ? ' has-error' : '' }}">
    <i class="fa fa-map-marker prefix grey-text"></i>
    <input name="event_location" type="text" id="event_location"
           class="form-control"
           value="{{ old('event_location') }}">
    <label for="event_location">Location</label>
</div>
<div class="row">
    <div class="md-form col-lg-4 col-md-6{{ $errors->has('start_date') ? ' has-error' : '' }}">
        <i class="fa fa-calendar-check-o prefix grey-text"></i>
        <input name="start_date" placeholder="Start Date" type="text" id="start_date"
               class="form-control datepicker"
               value="{{ old('start_date') }}">
    </div>

    <div class="md-form col-lg-4 col-md-6{{ $errors->has('start_time') ? ' has-error' : '' }}">
        <i class="fa fa-clock-o prefix grey-text"></i>
        <input name="start_time" placeholder="Start Time" type="text" id="start_time"
               class="form-control timepicker"
               value="{{ old('start_time') }}">
    </div>
</div>

<div class="row">
    <div class="md-form col-lg-4 col-md-6{{ $errors->has('end_date') ? ' has-error' : '' }}">
        <i class="fa fa-calendar-check-o prefix grey-text"></i>
        <input name="end_date" placeholder="End Date" type="text" id="end_date"
               class="form-control datepicker"
               value="{{ old('end_date') }}">
    </div>

    <div class="md-form col-lg-4 col-md-6{{ $errors->has('end_time') ? ' has-error' : '' }}">
        <i class="fa fa-clock-o prefix grey-text"></i>
        <input name="end_time" placeholder="End Time" type="text" id="end_time"
               class="form-control timepicker"
               value="{{ old('end_time') }}">
    </div>
</div>

<div class="md-form">
    <i class="fa fa-pencil prefix grey-text"></i>
    <textarea name="event_description" type="text" id="event_description"
              class="form-control md-textarea {{ $errors->has('event_description') ? ' has-error' : '' }}"></textarea>
    <label for="event_description">Description</label>
</div>

@include('common.partial.form-errors')

<button type="submit" class="btn btn-primary">Submit</button>