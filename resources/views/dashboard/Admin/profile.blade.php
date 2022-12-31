@extends('dashboard.master')

@section('title')
Profile
@endsection

@push('css')
<style>
    .avatar_text > span {
        width: 20rem;
        height: 10rem;
        border-bottom: 2px solid #324cdd;
    }
</style>
@endpush

@section('content')
<div class="content-body">
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            @php
                                if (empty(auth()->user()->avatar) || auth()->user()->avarar = null) {
                                    $src = asset('frontend/images/avatar/user_icon-removebg-preview.png');

                                    }elseif (!empty(auth()->user()->avatar) || auth()->user()->avarar != null) {
                                    $src = asset('storage/profile_img/'.auth()->user()->avatar);
                                }
                            @endphp
                            <div class="d-flex flex-column align-items-center mb-4">
                                <img class="mr-3 rounded-circle" src="{{ $src }}" width="80" height="80" alt="">
                                <div class="media-body mt-2">

                                    @php($name = explode(" ", auth()->user()->name))

                                    <h3 class="mb-0">{{ $name[0] }}</h3>
                                    <p class="text-muted mb-0">{{ $name[1] ?? "" }}</p>
                                </div>
                            </div>

                            <ul class="card-profile__info">
                                <li><strong class="text-dark mr-4">Email</strong> <span>{{ auth()->user()->email }}</span></li><br>
                                <li><strong class="text-dark mr-4">Gender</strong> <span>{{ auth()->user()->gender }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">

                    <div class="card">
                        <div class="card-body text-capitalize">
                            <div class="card-title">
                                <h1>update profile</h1>
                            </div>
                            <form action="{{ route('admin.profile.update') }}" class="update_profile_form"
                                method="POST" enctype="multipart/form-data">
                                <x-error/>
                                <x-alert/>

                                @method('PUT')
                                @csrf
                                <div class="form-group mt-5 d-flex align-items-baseline">
                                    <label for="Avatar" class="avatar-animation">
                                        <a class="btn btn-primary text-white">
                                            Avatar
                                            <i class="fa fa-camera fa-1x" aria-hidden="true"></i>
                                        </a>
                                        <input type="file" name="avatar" id="Avatar" class="form-control d-none">
                                    </label>
                                    <div class="avatar_text ml-3">
                                        <span class="avatar_text_area" id="avararTextArea">
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Name">name</label>
                                    <input type="text" name="name" id="Name" value="{{ auth()->user()->name }}" class="form-control" placeholder="Enter name" aria-describedby="helpId">
                                    </div>

                                <div class="form-group">
                                    <label for="Email">email</label>
                                    <input type="email" name="email" disabled id="Email" value="{{ auth()->user()->email }}" class="form-control" placeholder="Enter email" aria-describedby="helpId">
                                </div>

                                <div class="form-group">
                                    <label for="gender">gender</label>
                                    <select name="gender" class="form-control" id="gender">
                                        <option selected value="{{ auth()->user()->gender }}">{{ auth()->user()->gender }}</option>
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                        <option value="custom">custom</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary w-100">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-capitalize">
                            <div class="card-title">
                                <h1>password reset</h1>
                            </div>
                            <form action="{{ route('admin.password.reset') }}" class="password_reset_form" method="POST">
                                @method('PUT')

                                <x-error/>
                                <x-alert/>
                                @csrf
                                <div class="form-group">
                                    <label for="New_Password">old password</label>
                                    <div class="input-group">
                                        <input type="password" name="old_password" id="Password" required class="form-control" placeholder="Enter old password" data-toggle="password">
                                        <div class="input-group-append">
                                          <span class="input-group-text">
                                            <i class="fa fa-eye"></i>
                                          </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="New_Password">new password</label>
                                    <div class="input-group">
                                        <input type="password" name="new_password" id="New_Password" required class="form-control" placeholder="Enter new password" data-toggle="password">
                                        <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-eye"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Confirm_Password">confirm password</label>
                                    <input type="password" name="new_password_confirmation" id="Confirm_Password" required class="form-control" placeholder="Re-enter new password" aria-describedby="helpId">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary w-100">Reset</button>
                                </div>
                            </form>
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
<script src="{{ asset('frontend/js/plugins-init/bootstrap-show-password.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#Avatar').change(function (e) {
            let fileName = e.target.files[0].name;
            $("#avararTextArea").text(fileName);
        });
    });
</script>
@endpush
