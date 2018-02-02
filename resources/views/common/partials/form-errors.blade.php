@if ($errors->any())
    <div class="alert d-block bg-danger form-error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    <span class="text-white">{{ $error }}</span>
                </li>
            @endforeach
        </ul>
    </div>
@endif