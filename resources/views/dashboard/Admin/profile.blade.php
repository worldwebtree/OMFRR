@extends('dashboard.master')

@push('css')
<style>
    .avatar-animation:hover {
        border: 5px solid #dfddfd;
        border-radius: 50%;
        cursor: pointer;
        transition: 0.3s ease;
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
                            <div class="media align-items-center mb-4">
                                @php
                                    if (empty(auth()->user()->avatar) || auth()->user()->avarar == null) {
                                        $src = asset('frontend/images/avatar/user_icon-removebg-preview.png');

                                        }elseif (!empty(auth()->user()->avatar) || auth()->user()->avarar !== null) {
                                        $src = public_path('storage/'.auth()->user()->avatar);
                                    }
                                @endphp
                                <img class="mr-3" src="{{ $src }}" width="80" height="80" alt="">
                                <div class="media-body">

                                    @php($name = explode(" ", auth()->user()->name))

                                    <h3 class="mb-0">{{ $name[0] }}</h3>
                                    <p class="text-muted mb-0">{{ $name[1] ?? "" }}</p>
                                </div>
                            </div>

                            <ul class="card-profile__info">
                                <li><strong class="text-dark mr-4">Email</strong> <span>{{ auth()->user()->email }}</span></li>
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
                            <form action="#" method="post">
                                @csrf
                                <div class="form-group text-center">
                                    <label for="Avatar" class="avatar-animation">
                                        <img src="{{ asset('frontend/images/avatar/user_icon-removebg-preview.png') }}" width="100" height="100" alt="" srcset="">
                                        <input type="file" name="avatar" id="Avatar" class="form-control d-none">
                                    </label>
                                </div>
                                <div class="d-flex justify-content-around">
                                    <div class="form-group">
                                        <label for="Name">name</label>
                                        <input type="text" name="name" id="Name" value="{{ auth()->user()->name }}" class="form-control" placeholder="Enter name" aria-describedby="helpId">
                                      </div>

                                      <div class="form-group">
                                          <label for="Email">email</label>
                                          <input type="email" name="email" id="Email" value="{{ auth()->user()->email }}" class="form-control" placeholder="Enter email" aria-describedby="helpId">
                                      </div>
                                </div>

                                <div class="d-flex justify-content-around">
                                    <div class="form-group">
                                        <label for="Password">password</label>
                                        <input type="password" name="password" id="Password" value="{{ auth()->user()->password }}" class="form-control" placeholder="Enter password" aria-describedby="helpId">
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

@endpush
