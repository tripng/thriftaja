@extends('landingpage.index')
@section('content')
    <div class="container">
        <div class="py-4" id="profile">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="font-weight-bold">Profile</h3>
                    <p class="mt-3">Manage your profile information to control, protect and secure your account</p>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="font-weight-bold">Name</div>
                        </div>
                        <div class="col-md-6">
                            <div>Muhammad Asharul Maali</div>
                        </div>
                        <div class="col-md">
                            <button type="button" class="text-purple font-weight-bold btn btn-sm" data-toggle="modal" data-target="#changeName">
                                Change
                            </button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="font-weight-bold">Email</div>
                        </div>
                        <div class="col-md-6">
                            <div>masharul51@gmail.com</div>
                        </div>
                        <div class="col-md">
                            <button type="button" class="text-purple font-weight-bold btn btn-sm" data-toggle="modal" data-target="#exampleModal">
                                Change
                            </button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="font-weight-bold">Phone Number</div>
                        </div>
                        <div class="col-md-6">
                            <div>085232458764</div>
                        </div>
                        <div class="col-md">
                            <button type="button" class="text-purple font-weight-bold btn btn-sm" data-toggle="modal" data-target="#exampleModal">
                                Change
                            </button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="font-weight-bold">Address</div>
                        </div>
                        <div class="col-md-6">
                            <div>Lorem ipsum dolor sit amet consectetur, adipisicing elit</div>
                        </div>
                        <div class="col-md">
                            <button type="button" class="text-purple font-weight-bold btn btn-sm" data-toggle="modal" data-target="#changeAddress">
                                Change
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <img src="{{ asset('img/instagram/instagram-5.jpg') }}" alt="" class="w-100">
                        </div>
                    </div>
                    <button class="btn bg-purple text-white rounded-0 w-100 mt-4">Choose Photo</button>
                    <p class="mt-4"><small>File size: maximum 10,000,000 bytes (10 Mb).<br>Allowed file extensions: .JPG, .JPEG, .PNG</small></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="changeName" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-body p-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="text-center text-purple font-weight-bold">Change Name</h4>
                <p class="text-center mt-4">You can only change your name 1 more times.<br>Make sure it's correct.</p>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button type="button" class="btn btn-secondary rounded-0" style="width: 200px;">Save</button>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="changeAddress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-body p-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="text-center text-purple font-weight-bold">Change Address</h4>
                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button type="button" class="btn btn-secondary rounded-0" style="width: 200px;">Save</button>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection