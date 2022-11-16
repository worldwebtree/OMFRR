@extends('dashboard.master')

@push('css')

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
                                <img class="mr-3" src="images/avatar/11.png" width="80" height="80" alt="">
                                <div class="media-body">
                                    <h3 class="mb-0">Pikamy Cha</h3>
                                    <p class="text-muted mb-0">Canada</p>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col">
                                    <div class="card card-profile text-center">
                                        <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                        <h3 class="mb-0">263</h3>
                                        <p class="text-muted px-4">Following</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-profile text-center">
                                        <span class="mb-1 text-warning"><i class="icon-user-follow"></i></span>
                                        <h3 class="mb-0">263</h3>
                                        <p class="text-muted">Followers</p>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-danger px-5">Follow Now</button>
                                </div>
                            </div>

                            <h4>About Me</h4>
                            <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>
                            <ul class="card-profile__info">
                                <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>01793931609</span></li>
                                <li><strong class="text-dark mr-4">Email</strong> <span>name@domain.com</span></li>
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
                                <div class="form-group">
                                    <label for="Avatar">avatar</label>
                                    <input type="file" name="avatar" id="Avatar" class="form-control">
                                </div>

                                <div class="form-group">
                                  <label for="Name">name</label>
                                  <input type="text" name="name" id="Name" class="form-control" placeholder="Enter name" aria-describedby="helpId">
                                </div>

                                <div class="form-group">
                                    <label for="Email">email</label>
                                    <input type="email" name="email" id="Email" class="form-control" placeholder="Enter email" aria-describedby="helpId">
                                </div>

                                <div class="form-group">
                                    <label for="Password">password</label>
                                    <input type="password" name="password" id="Password" class="form-control" placeholder="Enter password" aria-describedby="helpId">
                                </div>

                                <div class="form-check">
                                    <label for="">gender</label>

                                    <div class="form-group">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="gender" value="male" id="">
                                            male
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="gender" value="female" id="">
                                            female
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="gender" value="custom" id="">
                                            custom
                                        </label>
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
