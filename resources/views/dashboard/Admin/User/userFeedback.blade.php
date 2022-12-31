@extends('dashboard.master')

@section('title')
Users Feedback Management
@endsection

@push('css')

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
                                            <th>action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($feedbacks as $feedback)
                                                <tr>
                                                    <td>{{ $feedback->user->name }}</td>
                                                    <td>{{ $feedback->post_restaurant->title }}</td>
                                                    <td>{{ $feedback->feedback }}</td>
                                                    <td>{{ $feedback->category }}</td>
                                                    <td>
                                                        <a class="DeleteUserBtn" href="{{ route("admin.users.feedback.destroy", $feedback->id) }}">
                                                            <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                </table>
                                {{ $feedbacks->links() }}
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
    $(document).ready(function () {
        $(".DeleteUserBtn").click(function (e) {
            e.preventDefault();

            // get the specified anchor href value
            let url = $(this).attr('href');

            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                confirmButtonColor: '#28a745',
                cancelButtonText: 'No, cancel!',
                cancelButtonColor: '#d33',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {

                    // redirect to the specified anchor href
                    document.location.href = url;

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swal.fire(
                    'Cancelled',
                    "User and it's data has not been deleted :)",
                    'error'
                    )
                }
            })
        });
    });
</script>
@endpush
