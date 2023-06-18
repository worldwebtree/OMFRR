@extends('dashboard.master')

@section('title', 'Home')

@push('css')
{{--  --}}
@endpush

@section('content')
<div class="content-body">
    <x-alert/>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body text-capitalize">
                        <h3 class="card-title text-white">restaurants</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ $restaurants }}</h2>
                        </div>
                        <span class="float-right display-5 opacity-5">
                            <i class="fas fa-utensils"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body text-capitalize">
                        <h3 class="card-title text-white">feedbacks</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ $feedbacks }}</h2>
                        </div>
                        <span class="float-right display-5 opacity-5">
                            <i class="fas fa-comments"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('js')
{{--  --}}
@endpush
