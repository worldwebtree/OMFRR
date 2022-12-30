@extends('dashboard.master')

@push('css')

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
                                    keyword's management <i class="fa fa-key" aria-hidden="true"></i>
                                </h1>
                            </div>
                            <form action="{{ route('admin.keyword.management.store') }}" class="add_keywords_form"
                                enctype="multipart/form-data"
                                method="POST">
                                @csrf

                                <x-error/>
                                <x-alert/>

                                <div class="form-title">
                                    <h3>Upload keyword file</h3>
                                </div>

                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" onchange="getFileName(this)"
                                            name="Keyword_file"
                                            class="custom-file-input"
                                            accept=".xlsx"
                                            id="customInput">
                                        <label class="custom-file-label" id="fileInputLabel" for="customInput">Choose file...</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary w-100">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-capitalize">
                                keyword's table <i class="fa fa-table" aria-hidden="true"></i>
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-inverse">
                                    <thead class="thead-inverse text-capitalize">
                                        <tr>
                                            <th>keyword name</th>
                                            <th>keyword status</th>
                                            <th>keyword ratting</th>
                                            <th>action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($keywords as $keyword)
                                            <tr>
                                                <td>{{ $keyword->keyword_name }}</td>
                                                <td>{{ $keyword->keyword_status }}</td>
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

    function getFileName(input) {
        let fileName = input.files[0].name;

        $("#fileInputLabel").text(fileName);
    }
</script>
@endpush
