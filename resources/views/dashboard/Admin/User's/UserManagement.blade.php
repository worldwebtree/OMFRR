@extends('dashboard.master')

@push('css')

@endpush

@section('content')
<div class="content-body">
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>name</th>
                                <th>age</th>
                                <th>gender</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">behram</td>
                                    <td>22</td>
                                    <td>male</td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection


@push('js')

@endpush
