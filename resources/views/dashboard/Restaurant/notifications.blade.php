@extends('dashboard.master')

@section('title', 'Notifications')

@push('css')
    <style>
        @media screen and (max-width: 768px) {
            .mark-as-read {
                text-align: right;
            }
        }
    </style>
@endpush

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                    <div class="notification-title mb-5 text-capitalize">
                        <h1>
                            you'r notification's <i class="fas fa-bell" aria-hidden="true"></i>
                        </h1>
                    </div>
                    <div class="notifications">
                        <ul class="notification-ul">
                            @foreach ($notifications as $notification)
                                <li class="notification-li bg-white rounded my-4">
                                    <div class="notification-body">
                                        <div class="d-md-flex align-items-md-center justify-content-md-between p-3">
                                            <div class="notification-content">
                                                <h6 class="notification-heading">
                                                    <strong class="text-primary">{{ $notification->data['title'] }}</strong>
                                                </h6>

                                                <span class="notification-text">
                                                    <strong class="">
                                                        @if (isset($notification->data['name']))
                                                            <strong class="text-primary">{{ $notification->data['name'] }}</strong>
                                                        @endif

                                                    </strong> {{ $notification->data['message'] }}
                                                </span><br>

                                                <span class="notification-text">{{ ($notification->created_at)->format("d-M-Y") }}</span>
                                            </div>

                                            <div class="mark-as-read">
                                                <a href="#markAsRead" class="mark-as-read-btn text-white bg-danger p-2 rounded markAsReadBtn" data-id="{{ $notification->id }}">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
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

        function sendMarkRequest(id = null) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            return $.ajax("{{ route('restaurant.notifications.mark') }}", {
                method: 'POST',
                data: { id }
            });
        }

        $(".mark-as-read-btn").click(function () {

            let request = sendMarkRequest($(this).data('id'));

            request.done(() => {
                $(this).parents('li.notification-li').remove();
            });

        });
    });
</script>
@endpush
