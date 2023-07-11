@extends('dashboard.master')

@section('title', 'Restaurant Management')

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
                                restaurant's management <i class="fas fa-users" aria-hidden="true"></i>
                            </h1>
                            <div class="table-responsive">
                                <table class="table table-striped table-inverse">
                                    <thead class="thead-inverse text-capitalize">
                                        <tr>
                                            <th>username</th>
                                            <th>restaurant name</th>
                                            <th>restaurant description</th>
                                            <th>restaurant city</th>
                                            <th>restaurant address</th>
                                            <th>restaurant social links</th>
                                            <th>restaurant category</th>
                                            <th>restaurant availability</th>
                                            <th>restaurant ratting</th>
                                            <th>action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($restaurants as $restaurant)
                                            <tr>
                                                <td>{{ $restaurant->user->name }}</td>
                                                <td>{{ $restaurant->title }}</td>
                                                <td class="restaurantDescriptionText">{!! $restaurant->description !!}</td>
                                                <td>{{ $restaurant->city }}</td>
                                                <td>{{ $restaurant->address }}</td>
                                                <td>
                                                    @foreach (json_decode($restaurant->social_links) as $icons => $links)
                                                        <a href="{{ $links }}">
                                                            <i class="fab fa-{{ $icons }}"></i>
                                                        </a>
                                                    @endforeach
                                                </td>
                                                <td>{{ $restaurant->category }}</td>
                                                <td>
                                                    @if (getAvailability($restaurant) === true)
                                                        <span class="bg-success text-white py-1 px-2 rounded-pill text-capitalize">
                                                            open
                                                        </span>
                                                        @else
                                                        <span class="bg-danger text-white py-1 px-2 rounded-pill text-capitalize">
                                                            closed
                                                        </span>
                                                    @endif
                                                </td>
                                                <td>{{ $restaurant->reviews }}</td>
                                                <td>
                                                    <a class="DeleteUserBtn" href="{{ route('admin.restaurants.destroy', $restaurant->id) }}">
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
