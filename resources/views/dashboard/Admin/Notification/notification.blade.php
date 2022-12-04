@extends('dashboard.master')

@push('css')

<style>
    .avatar-icon {
    border-radius: 50px;
    width: 2.5rem;
    position: absolute;
    top: 0.9625rem;
    height: 2.5rem;
    padding: 0.625rem 0.8125rem;
}
</style>

@endpush

@section('content')
<div class="content-body">
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-capitalize">
                            <div class="card-title mb-5">
                                <h1>
                                    you'r notification's <i class="fa fa-bell" aria-hidden="true"></i>
                                </h1>
                            </div>
                            <div class="notification-body">
                                <ul>
                                    <li>
                                        <a href="javascript:void()">
                                            <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                            <div class="notification-content">
                                                <h6 class="notification-heading">Events to Join</h6>
                                                <span class="notification-text">After two days</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-capitalize">
                                keyword's table <i class="fa fa-table" aria-hidden="true"></i>
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-inverse">
                                    <thead class="thead-inverse text-capitalize">
                                        <tr>
                                            <th>keyword name</th>
                                            <th>keyword ratting</th>
                                            <th>action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($keywords as $keyword)
                                            <tr>
                                                <td>{{ $keyword->keyword_name }}</td>
                                                <td>{{ $keyword->keyword_ratting }}</td>
                                                <td>
                                                    <a class="DeleteUserBtn" href="{{ route('admin.keyword.management.destroy', $keyword->id) }}">
                                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                </table>
                                {{ $keywords->links() }}
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection


@push('js')
{{-- <script type="text/javascript">
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

    function getFileName(input) {
        let fileName = input.files[0].name;

        $("#fileInputLabel").text(fileName);
    }

    $(document).ready(function () {

        $("#SelectAllCheckbox").click(function (e) {

            $(".checkAll").prop("checked", true);
        });

        $("#formDeleteButton").click(function (e) {
            e.preventDefault();

            let checkbox = $(".form-check-input");

            if (!checkbox.is(":checked")) {
                swal.fire({
                    title: 'Warning',
                    text: "No checkbox has been checked!",
                    icon: 'warning',
                });
            }

        });
    });
</script> --}}
@endpush
