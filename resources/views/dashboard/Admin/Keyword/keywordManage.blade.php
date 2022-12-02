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
                                method="POST">
                                <x-error/>
                                <x-alert/>
                                @csrf

                                <div class="form-title">
                                    <h3>add keyword</h3>
                                </div>

                                <div class="form-group">
                                    <label for="Keyword">key name</label>
                                    <input type="text" name="keyword_name" id="Keyword" class="form-control" required placeholder="Enter keyword name" aria-describedby="helpId">
                                </div>


                                <div class="form-group">
                                    <label for="Ratting">key ratting</label>
                                    <input type="number" name="keyword_ratting" id="Ratting" min="1" max="5" class="form-control" required placeholder="Enter keyword ratting" aria-describedby="helpId">
                                </div>

                                <div class="form-group">
                                    <label for="file">Or Upload CSV</label>
                                    <input type="file" class="form-control" accept=".xls,.xlsx">
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
