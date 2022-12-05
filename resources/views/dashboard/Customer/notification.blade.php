@extends('dashboard.master')

@push('css')
<style>
    @media screen and (max-width: 425px) {
        .notification {
            overflow-x: scroll;
        }
        .notification-body {
            display: block !important;
        }
        .markAsReadBtn {
            float: right;
        }
        hr {
            margin-top: 3rem;
        }
        .card .card-body {
            padding: 2rem 1rem;
        }
    }

    .markAsReadBtn:hover {
        background-color: #7571f9 !important;
        transition: .2s ease;
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
                        <div class="card-body">
                            <div class="card-title mb-5 text-capitalize">
                                <h1>
                                    you'r notification's <i class="fa fa-bell" aria-hidden="true"></i>
                                </h1>
                            </div>
                            <div class="card-body notification">
                                <ul>
                                    @foreach ($notifications as $notification)
                                        <li>
                                            <div class="notification-body d-flex align-items-center justify-content-between">
                                                <div class="notification-main d-flex align-items-center p-3">
                                                    <i class="fa fa-bell-o text-white bg-primary p-2 rounded-circle" aria-hidden="true"></i>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading"> <strong class="text-primary">{{ $notification->data['name'] }}</strong> has just registered as a new user.</h6>
                                                        <span class="notification-text">{{ ($notification->created_at)->format("d-m-Y") }}</span>
                                                    </div>
                                                </div>
                                                <a href="#" class="mark-as-read" data-id="{{ $notification->id }}">
                                                    <small class="text-white bg-danger p-2 rounded markAsReadBtn">
                                                        Mark as read
                                                    </small>
                                                </a>
                                            </div>
                                        </li>
                                        <hr>
                                        @if($loop->last)
                                            <a href="#" class="float-right" id="mark-all">
                                                Mark all as read
                                            </a>
                                        @endif
                                    @endforeach
                                </ul>
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
{{-- <script type="text/javascript">
    $(document).ready(function () {

        function sendMarkRequest(id = null) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            return $.ajax("{{ route('admin.notifications.mark') }}", {
                method: 'POST',
                data: { id }
            });
        }

        $(".mark-as-read").click(function () {

            let request = sendMarkRequest($(this).data('id'));

            request.done(() => {
                $(this).parents('div.notification-main').remove();
            });

            $('#mark-all').click(function() {

            let request = sendMarkRequest();

                request.done(() => {
                    $('div.notification-main').remove();
                })
            });

        });
    });
</script> --}}
@endpush
