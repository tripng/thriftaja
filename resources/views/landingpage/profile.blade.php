@extends('landingpage.index')
@section('content')
    <div class="container">
        <div class="py-4" id="profile">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="font-weight-bold">Profile</h3>
                    <p class="mt-3">Manage your profile information to control, protect and secure your account</p>
                    <hr>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="font-weight-bold">Name</div>
                        </div>
                        <div class="col-md-6">
                            <div id="value_name">{{auth()->user()->name}}</div>
                        </div>
                        <div class="col-md">
                            <button type="button" onclick="runModal('changeName')" id="nameChange" class="text-purple font-weight-bold btn btn-sm" data-toggle="modal" data-target="#changeName">
                                Change
                            </button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="font-weight-bold">Username</div>
                        </div>
                        <div class="col-md-6">
                            <div id="value_username">{{auth()->user()->username}}</div>
                        </div>
                        <div class="col-md">
                            <button type="button" class="text-purple font-weight-bold btn btn-sm" onclick="runModal('changeUsername')" id="usernameChange" data-toggle="modal" data-target="#changeUsername">
                                Change
                            </button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="font-weight-bold">Gender</div>
                        </div>
                        <div class="col-md-6">
                            <div id="value_genre">{{auth()->user()->gender}}</div>
                        </div>
                        <div class="col-md">
                            <button type="button" class="text-purple font-weight-bold btn btn-sm" id="genreChange" data-toggle="modal" data-target="#jenkel">
                                Change
                            </button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="font-weight-bold">Email</div>
                        </div>
                        <div class="col-md-6">
                            <div id="value_email">{{Str::of(auth()->user()->email)->substrReplace('********',2,Str::length(auth()->user()->email)-12)}}</div>
                        </div>
                        <div class="col-md">
                            <button type="button" class="text-purple font-weight-bold btn btn-sm" onclick="runModal('changeEmail')" id="emailChange" data-toggle="modal" data-target="#changeEmail">
                                Change
                            </button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="font-weight-bold">Phone Number</div>
                        </div>
                        <div class="col-md-6">
                            <div id="value_no">
                                @if(auth()->user()->no != 0)
                                {{Str::of(auth()->user()->no)->substrReplace('********',0,10)}}
                                @endif
                            </div>
                        </div>
                        <div class="col-md">
                            <button type="button" class="text-purple font-weight-bold btn btn-sm" onclick="runModal('changeNo')" id="noChange" data-toggle="modal" data-target="#changeNo">
                                Change
                            </button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="font-weight-bold">Address</div>
                        </div>
                        <div class="col-md-6">
                            <div id="value_address">{{auth()->user()->alamat}}</div>
                        </div>
                        <div class="col-md">
                            <button type="button" class="text-purple font-weight-bold btn btn-sm" onclick="runModal('changeAddress')" id="addressChange" data-toggle="modal" data-target="#changeAddress">
                                Change
                            </button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="font-weight-bold">Postcode</div>
                        </div>
                        <div class="col-md-6">
                            <div id="value_postcode">{{auth()->user()->kode_pos}}</div>
                        </div>
                        <div class="col-md">
                            <button type="button" class="text-purple font-weight-bold btn btn-sm" onclick="runModal('changePostcode')" id="postcodeChange" data-toggle="modal" data-target="#changePostcode">
                                Change
                            </button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="font-weight-bold">City</div>
                        </div>
                        <div class="col-md-6">
                            <div id="value_city">{{auth()->user()->kota}}</div>
                        </div>
                        <div class="col-md">
                            <button type="button" class="text-purple font-weight-bold btn btn-sm" onclick="runModal('changeCity')" id="cityChange" data-toggle="modal" data-target="#changeCity">
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
    <div class="modal fade runModal" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-body p-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="text-center text-purple font-weight-bold" id="modal_title">Change Name</h4>
                <p class="text-center mt-4">You can only change your name 1 more times.<br>Make sure it's correct.</p>
                <form action="{{route('setting')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name" id="modal_label">Name</label>
                    <input type="text" class="form-control" id="input_edit_modal" name="input_modal">
                    <input type="hidden" name="id" value="{{auth()->user()->id}}">
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button class="btn btn-secondary rounded-0" style="width: 200px;">Save</button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade runModal" id="jenkel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-body p-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="text-center text-purple font-weight-bold">Change Name</h4>
                <p class="text-center mt-4">You can only change your name 1 more times.<br>Make sure it's correct.</p>
                <form action="{{route('setting')}}" method="post">
                    @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <div class="product__details__option__size d-block">
                        <label for="l">Laki-Laki
                            <input type="radio" value="laki-Laki" id="l" name="gender">
                        </label>
                        <label for="sm">Perempuan
                            <input type="radio" value="perempuan" id="sm" name="gender">
                        </label>
                        <input type="hidden" name="id" value="{{auth()->user()->id}}">
                      </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button class="btn btn-secondary rounded-0" style="width: 200px;">Save</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>

    <script>
        const run_modal = document.querySelector('.runModal');
        const modal_title = document.querySelector('#modal_title');
        const modal_label = document.querySelector('#modal_label');
        const input_edit_modal = document.querySelector('#input_edit_modal');

        function runModal(x){
            if(x == 'changeName'){
                const value_name = document.querySelector('#value_name');
                run_modal.removeAttribute('id');
                run_modal.setAttribute("id",x);
                modal_title.innerHTML = "Edit Nama";
                modal_label.innerHTML = "Nama";
                input_edit_modal.removeAttribute('name');
                input_edit_modal.setAttribute('name','name');
                input_edit_modal.value = value_name.innerHTML;
            }
            else if(x == 'changeUsername'){
                const value_username = document.querySelector('#value_username');
                run_modal.removeAttribute('id');
                run_modal.setAttribute("id",x);
                modal_title.innerHTML = "Edit Username";
                modal_label.innerHTML = "Username";
                input_edit_modal.removeAttribute('name');
                input_edit_modal.setAttribute('name','username');
                input_edit_modal.value = value_username.innerHTML;
            }
            else if(x == 'changeEmail'){
                run_modal.removeAttribute('id');
                run_modal.setAttribute("id",x);
                modal_title.innerHTML = "Edit Email";
                modal_label.innerHTML = "Email";
                input_edit_modal.removeAttribute('name');
                input_edit_modal.setAttribute('name','email');
                input_edit_modal.value = '';
            }
            else if(x == 'changeNo'){
                run_modal.removeAttribute('id');
                run_modal.setAttribute("id",x);
                modal_title.innerHTML = "Edit No Handphone";
                modal_label.innerHTML = "No Handphone";
                input_edit_modal.removeAttribute('name');
                input_edit_modal.value = '';
                input_edit_modal.setAttribute('name','no');
            }
            else if(x == 'changeAddress'){
                const value_address = document.querySelector('#value_address');
                run_modal.removeAttribute('id');
                run_modal.setAttribute("id",x);
                modal_title.innerHTML = "Edit Address";
                modal_label.innerHTML = "Address";
                input_edit_modal.removeAttribute('name');
                input_edit_modal.setAttribute('name','alamat');
                input_edit_modal.value = value_address.innerHTML;
            }
            else if(x == 'changePostcode'){
                const value_postcode = document.querySelector('#value_postcode');
                run_modal.removeAttribute('id');
                run_modal.setAttribute("id",x);
                modal_title.innerHTML = "Edit Postcode";
                modal_label.innerHTML = "Postcode";
                input_edit_modal.removeAttribute('name');
                input_edit_modal.setAttribute('name','postcode');
                input_edit_modal.value = value_postcode.innerHTML;
            }
            else if(x == 'changeCity'){
                const value_city = document.querySelector('#value_city');
                run_modal.removeAttribute('id');
                run_modal.setAttribute("id",x);
                modal_title.innerHTML = "Edit City";
                modal_label.innerHTML = "City";
                input_edit_modal.removeAttribute('name');
                input_edit_modal.setAttribute('name','kota');
                input_edit_modal.value = value_city.innerHTML;
            }
        }

    </script>
@endsection