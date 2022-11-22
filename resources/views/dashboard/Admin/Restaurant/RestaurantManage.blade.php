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
                                    Restaurant Management <i class="fa fa-home" aria-hidden="true"></i>
                                </h1>
                            </div>
                            <form action="{{ route('admin.keyword.management.store') }}" class="add_keywords_form"
                                enctype="multipart/form-data"
                                method="POST">
                                <x-error/>
                                <x-alert/>
                                @csrf

                                <div class="form-title">
                                    <h3>add restaurant</h3>
                                </div>

                                <div class="form-group">
                                    <label for="RestaurantName">restaurant name</label>
                                    <input type="text" name="restaurant_name" id="RestaurantName" class="form-control" required placeholder="Enter name" aria-describedby="helpId">
                                </div>

                                <div class="form-group">
                                    <label for="RestaurantImages">restaurant images</label>
                                    <input type="file" multiple name="restaurant_images[]" id="RestaurantImages" class="form-control" aria-describedby="helpId">
                                    <span id="show_images"></span>
                                </div>

                                <div class="form-group">
                                    <label for="RestaurantDescription">restaurant description</label>
                                    <textarea name="restaurant_description" id="editor" cols="30" rows="10" class="form-control"></textarea>
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
                                restaurant's table <i class="fa fa-table" aria-hidden="true"></i>
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
                                            @foreach ($restaurants as $restaurant)
                                            <tr>
                                                <td>{{ $restaurant->title }}</td>
                                                <td>{{ $restaurant->description }}</td>
                                                <td>{{ $restaurant->images }}</td>
                                                <td>
                                                    <a class="DeleteUserBtn" href="{{ route('admin.keyword.management.destroy', $restaurant->id) }}">
                                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                    </a>
                                                </td>
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

        $(document).ready(function () {
            $("#RestaurantImages").change(function (e) {

                if ($(this).files && $(this).files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        let images = $('#show_images').add('img');

                        images.attr('src', e.target.result);
                    }

                    reader.readAsDataURL($(this).files[0]);
                }

            });
        });

    // $(document).ready(function () {
    //     $(".DeleteUserBtn").click(function (e) {
    //         e.preventDefault();

    //         // get the specified anchor href value
    //         let url = $(this).attr('href');

    //         swal.fire({
    //             title: 'Are you sure?',
    //             text: "You won't be able to revert this!",
    //             icon: 'warning',
    //             showCancelButton: true,
    //             confirmButtonText: 'Yes, delete it!',
    //             confirmButtonColor: '#28a745',
    //             cancelButtonText: 'No, cancel!',
    //             cancelButtonColor: '#d33',
    //             reverseButtons: true
    //         }).then((result) => {
    //             if (result.isConfirmed) {

    //                 // redirect to the specified anchor href
    //                 document.location.href = url;

    //             } else if (
    //                 /* Read more about handling dismissals below */
    //                 result.dismiss === Swal.DismissReason.cancel
    //             ) {
    //                 swal.fire(
    //                 'Cancelled',
    //                 "User and it's data has not been deleted :)",
    //                 'error'
    //                 )
    //             }
    //         })
    //     });
    // });
</script>
@endpush
