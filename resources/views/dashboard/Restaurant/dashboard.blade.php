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
            <div class="col-lg-12 col-sm-6">
                <div class="card gradient-1">
                    restaurant
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('js')
{{--  --}}
@endpush
