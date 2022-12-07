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
                                    Add Category <i class="fa fa-home" aria-hidden="true"></i>
                                </h1>
                            </div>
                            <form action="#" class="add_restaurant_category_form"
                                enctype="multipart/form-data"
                                method="POST">
                                <x-error/>
                                <x-alert/>
                                @csrf

                                <div class="form-title">
                                    <h3>add restaurant category</h3>
                                </div>

                                <div class="form-group">
                                    <label for="CategoryName">category name</label>
                                    <input type="text" name="category_name" id="CategoryName" class="form-control" required placeholder="Enter category name" aria-describedby="helpId">
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
                                restaurant's category table <i class="fa fa-table" aria-hidden="true"></i>
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-inverse">
                                    <thead class="thead-inverse text-capitalize">
                                        <tr>
                                            <th>category name</th>
                                            <th>action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($restaurants as $restaurant) --}}
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <a class="DeleteUserBtn" href="#">
                                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            {{-- @endforeach --}}
                                        </tbody>
                                </table>
                                {{-- {{ $restaurants->links() }} --}}
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
