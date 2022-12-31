@extends('dashboard.master')

@section('title')
About Us
@endsection

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
                                    About <i class="fa fa-question" aria-hidden="true"></i>
                                </h1>
                            </div>
                            <form action="{{ route('admin.about.store') }}" class="about_form"
                                method="POST">
                                @csrf

                                <x-error/>
                                <x-alert/>

                                <div class="form-title">
                                    <h3>Add Website About Description</h3>
                                </div>

                                <div class="form-group">
                                  <textarea type="text"
                                    class="form-control" name="description" id="editor" cols="30" rows="10">
                                  </textarea>
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
                                about us table <i class="fa fa-table" aria-hidden="true"></i>
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-inverse">
                                    <thead class="thead-inverse text-capitalize">
                                        <tr>
                                            <th>description</th>
                                            <th>action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($about as $data)
                                            <tr>
                                                <td>{{ $data->description }}</td>
                                                <td>
                                                    <a class="DeleteUserBtn" href="{{ route('admin.about.destroy', $data->id) }}">
                                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                    </a> |
                                                    <a class="UpdateUserBtn"
                                                        data-toggle="modal"
                                                        data-target="#UpdateAboutModel">
                                                        <i class="fa fa-edit text-primary" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                                <!-- Modal -->
                                                <div class="modal fade" id="UpdateAboutModel" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-capitalize">
                                                                <form action="{{ route('admin.about.update', $data->id) }}" class="about_update_form"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <x-error/>
                                                                    <x-alert/>

                                                                    <div class="form-title">
                                                                        <h3>update about information</h3>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <textarea type="text"
                                                                          class="form-control" name="description" id="secondEditor" cols="30" rows="10">
                                                                          {{ $data->description }}
                                                                        </textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <button type="submit" class="btn btn-primary w-100">Update</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                </table>
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

    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
    } );

    ClassicEditor
        .create( document.querySelector( '#secondEditor' ) )
        .catch( error => {
            console.error( error );
    } );

        // For warning alert message before deleting any records
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
