@extends('dashboard.master')

@section('title', 'Profile')

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

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

                            <div class="form-group">
                                <label for="Name">name</label>
                                <input type="text" name="name" id="Name" value="{{ auth()->user()->name }}" class="form-control" placeholder="Enter name" aria-describedby="helpId">
                                </div>

                            <div class="form-group">
                                <label for="Email">email</label>
                                <input type="email" name="email" disabled id="Email" value="{{ auth()->user()->email }}" class="form-control" placeholder="Enter email" aria-describedby="helpId">
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
    <!-- #/ container -->
</div>
@endsection


@push('js')
{{--  --}}
@endpush
