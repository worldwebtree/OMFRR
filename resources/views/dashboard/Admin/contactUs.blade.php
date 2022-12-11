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
                                    contact <i class="fa fa-phone" aria-hidden="true"></i>
                                </h1>
                            </div>
                            <form action="{{ route('admin.contact.store') }}" class="contact_form"
                                method="POST">
                                @csrf

                                <x-error/>
                                <x-alert/>

                                <div class="form-title">
                                    <h3>add contact information</h3>
                                </div>

                                <div class="form-group">
                                    <label for="Phone">phone</label>
                                    <input type="number"
                                      class="form-control" name="phone" id="Phone" aria-describedby="helpId" placeholder="Enter Phone Number">
                                </div>

                                <div class="form-group">
                                    <label for="Email">email</label>
                                    <input type="email"
                                      class="form-control" name="email" id="Email" aria-describedby="helpId" placeholder="Enter Email">
                                </div>

                                <div class="form-group">
                                    <label for="Address">address</label>
                                    <input type="text"
                                      class="form-control" name="address" id="Address" aria-describedby="helpId" placeholder="Enter Address">
                                </div>

                                <div class="form-group">
                                  <label for="CustomerSupportEmail">customer suport email</label>
                                  <input type="email"
                                    class="form-control" name="customer_support_email" id="CustomerSupportEmail" aria-describedby="helpId" placeholder="Enter Email for Customer Support">
                                </div>

                                <div class="form-group">
                                    <label for="SocialLinks">social links</label>
                                    <div class="d-flex">
                                        <input type="text"
                                            class="form-control m-2" name="socialLinks[]" value="https://facebook.com/">
                                        <input type="text"
                                            class="form-control m-2" name="socialLinks[]" value="https://twitter.com/">
                                        <input type="text"
                                            class="form-control m-2" name="socialLinks[]" value="https://instagram.com/">
                                        <input type="text"
                                            class="form-control m-2" name="socialLinks[]" value="https://linkedin.com/">
                                    </div>
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
                                contact table <i class="fa fa-table" aria-hidden="true"></i>
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-inverse">
                                    <thead class="thead-inverse text-capitalize">
                                        <tr>
                                            <th>phone</th>
                                            <th>email</th>
                                            <th>address</th>
                                            <th>customer support email</th>
                                            <th>social links</th>
                                            <th>action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contact as $data)
                                            <tr>
                                                <td>{{ $data->phone }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->address }}</td>
                                                <td>{{ $data->customer_support_email }}</td>
                                                <td>{{ $data->social_links }}</td>
                                                <td>
                                                    <a class="DeleteUserBtn" href="{{ route('admin.contact.destroy', $data->id) }}">
                                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                    </a> |
                                                    <a class="UpdateModelBtn"
                                                        data-toggle="modal"
                                                        data-target="#UpdateContactModel">
                                                        <i class="fa fa-edit text-primary" aria-hidden="true"></i>
                                                    </a>
                                                </td>

                                                <!-- Modal -->
                                                <div class="modal fade" id="UpdateContactModel" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-capitalize">
                                                                <form action="{{ route('admin.contact.update', $data->id) }}" class="contact_update_form"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <x-error/>
                                                                    <x-alert/>

                                                                    <div class="form-title">
                                                                        <h3>update contact information</h3>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Phone">phone</label>
                                                                        <input type="number"
                                                                        class="form-control" value="{{ $data->phone }}" name="phone" id="Phone" aria-describedby="helpId" placeholder="Enter Phone Number">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Email">email</label>
                                                                        <input type="email"
                                                                        class="form-control" value="{{ $data->email }}" name="email" id="Email" aria-describedby="helpId" placeholder="Enter Email">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Address">address</label>
                                                                        <input type="text"
                                                                        class="form-control" value="{{ $data->address }}" name="address" id="Address" aria-describedby="helpId" placeholder="Enter Address">
                                                                    </div>

                                                                    <div class="form-group">
                                                                    <label for="CustomerSupportEmail">customer suport email</label>
                                                                    <input type="email"
                                                                        class="form-control" value="{{ $data->customer_support_email }}" name="customer_support_email" id="CustomerSupportEmail" aria-describedby="helpId" placeholder="Enter Email for Customer Support">
                                                                    </div>

                                                                        <div class="form-group">
                                                                            <label for="SocialLinks">social links</label>
                                                                            @foreach (json_decode($data->social_links) as $link)
                                                                                <input type="text"
                                                                                    class="form-control m-2" value="{{ $link }}" name="socialLinks[]" value="{{ $link }}">
                                                                            @endforeach
                                                                        </div>

                                                                    <div class="form-group">
                                                                        <button type="submit" class="btn btn-primary w-100">update</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
