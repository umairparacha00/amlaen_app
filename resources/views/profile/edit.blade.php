@extends ('layouts.userdash')
@section('style')
    <style type="text/css">
        .nav.nav-tabs {
            border: none;
            margin-bottom: 1rem;
            border-radius: 0;
        }

        .nav.nav-tabs,
        .nav.nav-tabs .nav-item {
            position: relative;
        }

        .nav.nav-tabs .nav-item .nav-link {
            color: #626262;
            font-size: .95rem;
            border: none;
            min-width: auto;
            font-weight: 450;
            padding: .61rem .635rem;
            border-radius: 0;
        }

        .nav.nav-tabs .nav-item .nav-link.active {
            border: none;
            position: relative;
            color: #7367F0;
            -webkit-transition: all .2s ease;
            transition: all .2s ease;
            background-color: transparent;
        }

        .nav.nav-tabs .nav-item .nav-link.active:after {
            content: attr(data-before);
            height: 2px;
            width: 100%;
            left: 0;
            position: absolute;
            bottom: 0;
            top: 100%;
            background: -webkit-linear-gradient(60deg, #7367F0, rgba(115, 103, 240, .5)) !important;
            background: linear-gradient(30deg, #7367F0, rgba(115, 103, 240, .5)) !important;
            box-shadow: 0 0 8px 0 rgba(115, 103, 240, .5) !important;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
            -webkit-transition: all .2s linear;
            transition: all .2s linear;
        }

        .btn-primary {
            border-color: #FF9F43 !important;
            background-color: #FF9F43 !important;
            color: #FFF;
        }

        .btn-primary:hover {
            box-shadow: 0 0 15px #FF9F43;
            border-width: 0;
            transition: all 0.2s;
            color: #fff;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            color: #464646;
            margin-bottom: 0.5em;
            padding-left: .2em;
        }

        #documents form .form-group label {
            font-size: 1.5rem;
            color: #464646;
        }

        #documents form .form-group label.btn-bs-file {
            font-size: 14px;
            color: #fff;
        }

        .btn-bs-file {
            border-color: #4839EB !important;
            background-color: #7367F0 !important;
        }

        .btn-bs-file input[type=file] {
            position: absolute;
            top: -9999999;
            filter: alpha(opacity=0);
            opacity: 0;
            width: 0;
            height: 0;
            outline: none;
            cursor: pointer;
        }

        .clip {
            background: url({{ asset('assets/images/clip_24.webp') }}) no-repeat;
            padding-left: 26px;
        }
    </style>
@endsection
@section ('content')
    <div class="scrollbar-container">
    </div>
    <section class="users-edit">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" role="tablist" id="tabMenu">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center active" id="information-tab" data-toggle="tab"
                               href="#information" aria-controls="information" role="tab" aria-selected="false">
                                <i class="fal fa-address-card mr-2"></i><span
                                        class="d-none d-sm-block">Profile Details</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" id="document-tab" data-toggle="tab"
                               href="#documents" aria-controls="document" role="tab" aria-selected="false">
                                <i class="fal fa-file-alt mr-2"></i><span class="d-none d-sm-block">Documents</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="information" aria-labelledby="information-tab" role="tabpanel">
                            <!-- users edit media object start -->
                            <div class="media mb-4 d-flex align-items-center">
                                <a class="mr-3" href="#">
                                    <img src="@if(current_user()->user_file !== null){{ asset('storage/user/profile/'.current_user()->user_file) }}@else{{ asset('assets/images/avatars/blank-profile.png') }}@endif"
                                         alt="users avatar"
                                         class="users-avatar-shadow rounded" height="90" width="90">
                                </a>
                                <div class="media-body mt-50">
                                    <h4 class="media-heading">{{ current_user()->name }}</h4>
                                </div>
                            </div>
                            <!-- users edit media object ends -->
                            <!-- users edit Info form start -->
                            <form method="POST" action="{{ '/profile/' . current_user()->id }}">
                                @csrf
                                    @method('PATCH')
                                <div class="row mt-1">
                                    <div class="col-12 col-sm-6">
                                        <h3 class="mb-4"><i class="fal fa-address-card"></i>
                                            Personal Information</h3>
                                        <div class="form-group">
                                            <div class="forms-control">
                                                <label>CNIC/DR/Passport</label>
                                                <input type="text"
                                                       class="form-control"
                                                       name="cnic"
                                                       placeholder="33***-*******-*"
                                                       required
                                                       value="@if(current_user()->cnic !== null){{ current_user()->cnic }}@else{{ old('cnic') }}@endif"
                                                @if(current_user()->cnic !== null){{'disabled'}}@else @endif/>
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="forms-control">
                                                <label>Birth date</label>
                                                <input type="date"
                                                       class="form-control"
                                                       name="date_of_birth"
                                                       placeholder="Birth date"
                                                       required
                                                       value="@if(current_user()->date_of_birth !== null){{ current_user()->date_of_birth }}@else{{ old('date_of_birth') }} @endif"
                                                @if(current_user()->date_of_birth){{'disabled'}}@else @endif
                                                >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="forms-control">
                                                <label>Mobile</label>
                                                <input type="text"
                                                       class="form-control"
                                                       name="phone"
                                                       placeholder="Mobile number here..."
                                                       required
                                                       value="@if(current_user()->phone){{ 0 . current_user()->phone }}@else{{ old('phone') }} @endif"
                                                >
                                                <div class="help-block"></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Select Gender</label>
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="vs-radio-con">
                                                            <input class="custom-checkbox"
                                                                   type="radio"
                                                                   name="gender"
                                                                   @if(current_user()->gender !== null)
                                                                   @if(current_user()->gender === 'male'){{'checked'}}@else @endif
                                                                   @if(current_user()->gender === 'female') {{ 'disabled' }}
                                                                   @elseif (current_user()->gender === 'other') {{ 'disabled' }}
                                                                   @else
                                                                   @endif
                                                                   @endif

                                                                   value="male">
                                                            Male
                                                        </div>
                                                    </fieldset>
                                                </li>
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="vs-radio-con">
                                                            <input type="radio"
                                                                   name="gender"
                                                                   @if(current_user()->gender !== null)
                                                                   @if(current_user()->gender === 'female'){{'checked'}}@else @endif
                                                                   @if(current_user()->gender === 'male' ) {{ 'disabled' }}
                                                                   @elseif (current_user()->gender === 'other' ) {{ 'disabled' }}
                                                                   @else
                                                                   @endif
                                                                   @endif

                                                                   value="female">
                                                            Female
                                                        </div>
                                                    </fieldset>
                                                </li>
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="vs-radio-con">
                                                            <input type="radio"
                                                                   name="gender"
                                                                   @if(current_user()->gender !== null)
                                                                   @if(current_user()->gender === 'other'){{'checked'}}@else @endif
                                                                   @if(current_user()->gender === 'male') {{ 'disabled' }}
                                                                   @elseif (current_user()->gender === 'female') {{ 'disabled' }}
                                                                   @else
                                                                   @endif
                                                                   @endif

                                                                   value="other">
                                                            Other
                                                        </div>
                                                    </fieldset>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <h3 class="mb-4 mt-2 mt-sm-0"><i class="fal fa-map-marker-alt mr-2"></i>Address
                                        </h3>
                                        <div class="form-group">
                                            <div class="forms-control">
                                                <label>Address Line 1</label>
                                                <input type="text"
                                                       class="form-control"
                                                       name="address"
                                                       placeholder="Address Line 1"
                                                       required
                                                       value="@if(current_user()->address !== null){{ current_user()->address }}@else{{ old('address') }} @endif"
                                                >
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="forms-control">
                                                <label>Postal code</label>
                                                <input type="text"
                                                       class="form-control"
                                                       name="postalcode"
                                                       placeholder="Postal code"
                                                       required
                                                       value="@if(current_user()->postalcode !== null){{ current_user()->postalcode }}@else{{ old('postalcode') }} @endif"
                                                >
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="forms-control">
                                                <label>Country</label>
                                                <input type="text"
                                                       class="form-control"
                                                       name="country"
                                                       placeholder="Country"
                                                       required
                                                       value="@if(current_user()->country !== null){{ current_user()->country }}@else{{ old('country') }} @endif"
                                                >
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="forms-control">
                                                <label>State</label>
                                                <input type="text"
                                                       class="form-control"
                                                       name="state"
                                                       placeholder="State"
                                                       required
                                                       value="@if(current_user()->state !== null){{ current_user()->state }}@else{{ old('state') }} @endif"
                                                >
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="forms-control">
                                                <label>City</label>
                                                <input type="text"
                                                       class="form-control"
                                                       name="city"
                                                       placeholder="City"
                                                       required
                                                       value="@if(current_user()->city !== null){{ current_user()->city }}@else{{ old('city') }} @endif"
                                                >
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit" class="btn btn-primary  mb-
                                        1982-3 mr-sm-2">Update
                                        </button>
                                        <a href="{{ route('profile') }}" class="btn btn-danger mb-sm-1">Back
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <!-- users edit Info form ends -->
                        </div>
                        <div class="tab-pane" id="documents" aria-labelledby="documents-tab" role="tabpanel">
                            <!-- users edit document form start -->
                            <div class="row">
                                <div class="col-12">
                                    <form action="{{ '/profile/'. current_user()->id .'/files' }}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                            @if(current_user()->user_file !== NULL)
                                                    <div class="alert alert-success">Profile pic uploaded.</div>
                                                @else
                                            @endif
                                        <div class="form-group" id="ct2">
                                            <label class="mb-2 font-size-xlg"
                                                   for="u-cnic">Profile Pic
                                            </label>
                                            <br>
                                            <label class="btn-bs-file btn btn-lg btn-info">
                                                Choose File
                                                <input type="file"
                                                       id="u-pic"
                                                       name="user_file"
                                                       class="form-control"
                                                >
                                            </label>
                                        </div>
                                        @if(current_user()->cnic_file !== null)
                                            @if('approved' === current_user()->cnic_file_status)
                                                <div class="alert alert-success">Your CNIC document is approved.</div>
                                            @elseif ('rejected' === current_user()->cnic_file_status)
                                                <div class="alert alert-danger">Your document is rejected. Upload it
                                                    again.
                                                </div>
                                            @elseif(current_user()->cnic_file  && 'pending' === current_user()->cnic_file_status)
                                                <div class="alert alert-info">Your document is submitted for approval.
                                                </div>
                                            @else
                                            @endif
                                        @endif

                                        <div class="form-group" id="ct">
                                            <label class="mb-2 font-size-xlg"
                                                   for="u-cnic">CNIC</label>
                                            <br>
                                            <label class="btn-bs-file btn btn-lg btn-info">
                                                Choose File
                                                <input type="file" id="u-cnic" name="cnic_file" class="form-control">
                                            </label>
                                        </div>
                                        @if(current_user()->bank_file !== null)
                                            @if('approved' === current_user()->bank_file_status)
                                                <div class="alert alert-success">Your document is approved.</div>
                                            @elseif ('rejected' === current_user()->bank_file_status)
                                                <div class="alert alert-danger">Your document is rejected. Upload it
                                                    again.
                                                </div>
                                            @elseif(current_user()->bank_file  && 'pending' === current_user()->bank_file_status)
                                                <div class="alert alert-info">Your document is submitted for approval.
                                                </div>
                                            @else
                                            @endif
                                        @endif
                                        <div class="form-group" id="ct1">
                                            <label class="mb-2 font-size-xlg" for="u-bill">Recent Bank statement</label>
                                            <br>
                                            <label class="btn-bs-file btn btn-lg btn-info">
                                                Choose File
                                                <input type="file" id="u-bill" name="bank_file" class="form-control">
                                            </label>
                                        </div>
                                        <div class="d-flex flex-sm-row flex-column">
                                            <button type="submit" class="btn btn-primary mr-2">Update
                                            </button>
                                            <a href="{{ route('profile') }}" class="btn btn-danger">Back
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- users edit document form ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section ('page-script')
    <script>
        //redirect to specific tab
        $(document).ready(function () {
            $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
        });
        $(document).ready(function () {
            $('#u-pic').change(function (e) {
                var fileName = e.target.files[0].name;
                var myElement = document.getElementById('clip3');
                if (myElement) {
                    myElement.remove();
                    var clipDiv = document.createElement('div');
                    clipDiv.id = 'clip3';
                    clipDiv.classList.add('clip3');
                    document.getElementById("ct2").appendChild(clipDiv);
                    document.getElementById('clip3').innerHTML +=
                        "<strong>Attached</strong>" + " " + fileName;
                } else {
                    var clipDiv = document.createElement('div');
                    clipDiv.id = 'clip3';
                    clipDiv.classList.add('clip3');
                    document.getElementById("ct2").appendChild(clipDiv);
                    document.getElementById("clip3").innerHTML +=
                        "<strong>Attached</strong>" + " " + fileName;
                }
            });
        });
        $(document).ready(function () {
            $('#u-cnic').change(function (e) {
                var fileName = e.target.files[0].name;
                var myElement = document.getElementById('clip');
                if (myElement) {
                    myElement.remove();
                    var clipDiv = document.createElement('div');
                    clipDiv.id = 'clip';
                    clipDiv.classList.add('clip');
                    document.getElementById("ct").appendChild(clipDiv);
                    document.getElementById('clip').innerHTML +=
                        "<strong>Attached</strong>" + " " + fileName;
                } else {
                    var clipDiv = document.createElement('div');
                    clipDiv.id = 'clip';
                    clipDiv.classList.add('clip');
                    document.getElementById("ct").appendChild(clipDiv);
                    document.getElementById("clip").innerHTML +=
                        "<strong>Attached</strong>" + " " + fileName;
                }
            });
        });
        $(document).ready(function () {
            $('#u-bill').change(function (e) {
                var fileName = e.target.files[0].name;
                var myElement = document.getElementById('clip1');
                if (myElement) {
                    myElement.remove();
                    var clipDiv = document.createElement('div');
                    clipDiv.id = 'clip1';
                    clipDiv.classList.add('clip');
                    document.getElementById("ct1").appendChild(clipDiv);
                    document.getElementById('clip1').innerHTML +=
                        "<strong>Attached</strong>" + " " + fileName;
                } else {
                    var clipDiv = document.createElement('div');
                    clipDiv.id = 'clip1';
                    clipDiv.classList.add('clip');
                    document.getElementById("ct1").appendChild(clipDiv);
                    document.getElementById("clip1").innerHTML +=
                        "<strong>Attached</strong>" + " " + fileName;
                }
            });
        });
    </script>
@endsection