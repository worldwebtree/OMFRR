@extends('dashboard.master')

@section('title', 'Users Feedback')

@push('css')
{{--  --}}
@endpush

@section('content')
<div class="content-body">
    <!-- row -->
    <x-alert/>
    <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-capitalize">
                                user's feedback <i class="fa fa-users" aria-hidden="true"></i>
                            </h1>
                            <div class="table-responsive">
                                <table class="table table-striped table-inverse">
                                    <thead class="thead-inverse text-capitalize">
                                        <tr>
                                            <th>username</th>
                                            <th>restaurant</th>
                                            <th>feedback</th>
                                            <th>feedback category</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @if (! empty($feedbacks))
                                                @foreach ($feedbacks as $feedback)
                                                    <tr>
                                                        <td>{{ $feedback->user->name }}</td>
                                                        <td>{{ $feedback->post_restaurant->title }}</td>
                                                        <td>{{ $feedback->feedback }}</td>
                                                        <td>{{ $feedback->category }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                </table>
                                {{ empty($feedbacks) ? $feedbacks : $feedbacks->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection


@push('js')
    <script type="text/javascript">
        //
    </script>
@endpush