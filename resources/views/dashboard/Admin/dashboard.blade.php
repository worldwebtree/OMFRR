@extends('dashboard.master')

@push('css')

@endpush

@section('content')
<div class="content-body">
    <x-alert/>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">Authenticated User's</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ $users }}</h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">Keywords Added</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ $keywords }}</h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-key"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">Restaurants Post's</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ $posts }}</h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-comments"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection


@push('js')

@endpush
