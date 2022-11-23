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
                            <form action="{{ route('admin.restaurant.management.store') }}" class="add_keywords_form"
                                enctype="multipart/form-data"
                                method="POST">
                                <x-error/>
                                <x-alert/>
                                @csrf

                                <div class="form-title">
                                    <h3>add restaurant post</h3>
                                </div>

                                <div class="form-group">
                                    <label for="RestaurantName">restaurant name</label>
                                    <input type="text" name="restaurant_name" id="RestaurantName" class="form-control" required placeholder="Enter name" aria-describedby="helpId">
                                </div>

                                <div class="form-group">
                                    <label for="RestaurantImages">restaurant images</label>
                                    <input type="file" multiple name="restaurant_images[]" id="RestaurantImages" class="form-control" aria-describedby="helpId">
                                    <div id="preview_images"></div>
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
                                            <th>restaurant title</th>
                                            <th>restaurant decription</th>
                                            <th>restaurant images</th>
                                            <th>action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($restaurants as $restaurant)
                                            <tr>
                                                <td>{{ $restaurant->title }}</td>
                                                <td>{{ $restaurant->description }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn text-capitalize" data-toggle="modal" data-target="#modelId">
                                                      preview images <i class="fa fa-camera" aria-hidden="true"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-capitalize" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">restaurant images</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                                                                        @php($count = 0)
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#carouselId" data-slide-to="{{ $count }}" class="active"></li>
                                                                            @foreach (json_decode($restaurant->images) as $key => $images)
                                                                                @if ($key > 0)
                                                                                    <li data-target="#carouselId" data-slide-to="{{ $key }}"></li>
                                                                                @endif
                                                                            @endforeach
                                                                        </ol>


                                                                        @php($imgs = json_decode($restaurant->images))

                                                                        <div class="carousel-inner" role="listbox">
                                                                            <div class="carousel-item active">
                                                                                <img class="w-100" height="350" src="{{ asset('storage/Restaurant/images/'. $imgs[0]) }}" alt="First slide">
                                                                            </div>
                                                                            @foreach (json_decode($restaurant->images) as $key => $images)
                                                                                @if ($key > 0 )
                                                                                    <div class="carousel-item">
                                                                                        <img class="w-100" height="350" src="{{ asset('storage/Restaurant/images/'. $images) }}" alt="restaurant_images" srcset="">
                                                                                    </div>
                                                                                @endif
                                                                            @endforeach
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only text-dark">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="DeleteUserBtn" href="{{ route('admin.restaurant.management.destroy', $restaurant->id) }}">
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

        // function displayImages(input) {

        //     if (input.files && input.files[0]) {

        //         for (let index = 0; index < input.files.length; index++) {

        //             let imageTag = document.createElement("img");

        //             var reader = new FileReader();

        //             reader.onload = function (e) {
        //                 let previewImg = $("#preview_images").append(imageTag);

        //                 imageTag.attr('src', e.target.result);
        //             };

        //         }

        //         reader.readAsDataURL(input.files[0]);
        //     }

        // }

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
