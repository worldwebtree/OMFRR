@extends('dashboard.master')

@push('css')

@endpush

@section('content')
<div class="content-body">

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body text-capitalize">
                        <h3 class="card-title text-white">your feedback's on restaurants</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ $feedbacks }}</h2>
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
