@if ($errors->any())
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close border-none outline-none" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <ul>
            @foreach ($errors->all( ) as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
