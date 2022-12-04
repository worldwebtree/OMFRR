@extends('dashboard.master')

@push('css')

<style>
    .image-slider-btn:first-child img {
        transition: .2s;
    }
    .image-slider-btn:first-child img:hover {
        transform: scale(1.1);
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
                                    <div class="custom-file">
                                        <input type="file"
                                                onchange="getFileName(this)"
                                                multiple
                                                name="restaurant_images[]"
                                                id="RestaurantImages"
                                                class="custom-file-input"
                                                accept="images/png,jpg"
                                                id="customInput">
                                        <label class="custom-file-label" id="fileInputLabel" for="customInput">Choose file...</label>
                                    </div>
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
                                            <th>preview restaurant images</th>
                                            <th>action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($restaurants as $restaurant)
                                                @php($Image = json_decode($restaurant->images))
                                            <tr>
                                                <td>{{ $restaurant->title }}</td>
                                                <td>{{ $restaurant->description }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn text-capitalize bg-light image-slider-btn" data-toggle="modal" data-target="#modelId">
                                                        <img width="70" height="70" src="{{ asset('storage/Restaurant/images/' . $Image[0]) }}" alt="First Image" srcset="">
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-capitalize" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                                                                        @php($count = 0)
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#carouselId" data-slide-to="{{ $count }}" class="active"></li>
                                                                            @foreach ($Image as $key => $images)
                                                                                @if ($key > 0)
                                                                                    <li data-target="#carouselId" data-slide-to="{{ $key }}"></li>
                                                                                @endif
                                                                            @endforeach
                                                                        </ol>

                                                                        <div class="carousel-inner" role="listbox">
                                                                            <div class="carousel-item active">
                                                                                <img class="w-100" height="350" src="{{ asset('storage/Restaurant/images/'. $Image[0]) }}" alt="First slide">
                                                                            </div>
                                                                            @foreach ($Image as $key => $images)
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
                                {{ $restaurants->links() }}
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

        var names = [];

        for (var i = 0; i < input.files.length; i++) {

            names.push(input.files[i].name);
        }

        var inputLabel = $("#fileInputLabel").text(names);

        $(inputLabel).css("overflow", "hidden");
    }
</script>
@endpush
