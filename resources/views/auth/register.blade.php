@extends('layouts.master-without-nav')

@section('title')
Register
@endsection

@section('body')

<body style="background-image: url('/assets/images/intascareforyou_login_image.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
    @endsection

    @section('content')

    <div class="home-btn d-none d-sm-block">
        <!--<a href="{{url('index')}}" class="text-dark"><i class="fas fa-home h2"></i></a>-->
    </div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row d-flex align-items-center" style="align-content: center;justify-content: center;display: flex;">
                                
                                <center><div class="col-9 align-self-end mob_imiage_part">
                                    <!-- <img src="assets/images/profile-img.png" alt="" class="img-fluid"> -->
                                    <img src="../assets/images/intas-xenith.png" alt="" class="img-fluid">
                                </div></center>

                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="p-0">
                                <form method="POST" class="form-horizontal mt-4" action="{{ route('register') }}">
                                    @csrf
									<div class="col-12">
                                    <div class="text-primary p-2" style="align-content: center;
										justify-content: center;
										display: flex;">
                                        <!-- <h5 class="text-primary">Welcome Back !</h5> -->
                                        <h5>Sign up</h5>
                                    </div>
                                </div>
									<div class="form-group">
                                        <label for="useremail">Salutation</label>
											<select class="form-control @error('salutation') is-invalid @enderror" id="salutation" name="salutation" required>
												<option value="">-Select Salutation-</option>
												<option value="Dr.">Dr.</option>
												<option value="Mr.">Mr.</option>
												<option value="Ms.">Ms.</option>
											</select>
                                        @error('salutation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
									<div class="form-group">
                                        <label for="username">Full Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            value="{{old('name')}}" required name="name" id="username"
                                            placeholder="Enter full name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="useremail">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            value="{{old('email')}}" id="useremail" name="email" required
                                            placeholder="Enter email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
									<div class="form-group">
                                        <label for="mobile">Mobile</label>
                                        <input type="number" class="form-control @error('mobile') is-invalid @enderror"
                                            value="{{old('mobile')}}"  maxlength="10" id="mobile" name="mobile" required
                                            placeholder="Enter mobile">
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
									<div class="form-group">
                                        <label for="country">Country</label>
											<select class="form-control @error('country') is-invalid @enderror" id="country" name="country" required>
												<option value="">-Select country-</option>
												<option value="India">India</option>
												<option value="Nepal">Nepal</option>
												<option value="Others">Others</option>
											</select>
                                        @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="state">State</label>
											<select class="form-control @error('state') is-invalid @enderror" id="state" name="state" required>
												<option value="">-Select State-</option>
												<option value="Andaman and Nicobar">Andaman and Nicobar</option>
												<option value="Andhra Pradesh">Andhra Pradesh</option>
												<option value="Arunachal Pradesh">Arunachal Pradesh</option>
												<option value="Assam">Assam</option>
												<option value="Bihar">Bihar</option>
												<option value="Chandigarh">Chandigarh</option>
												<option value="Chhattisgarh">Chhattisgarh</option>
												<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
												<option value="Daman & Diu">Daman & Diu</option>
												<option value="Delhi">Delhi</option>
												<option value="Goa">Goa</option>
												<option value="Gujarat">Gujarat</option>
												<option value="Haryana">Haryana</option>
												<option value="Himachal Pradesh">Himachal Pradesh</option>
												<option value="Jammu & Kashmir">Jammu & Kashmir</option>
												<option value="Jharkhand">Jharkhand</option>
												<option value="Karnataka">Karnataka</option>
												<option value="Kerala">Kerala</option>
												<option value="Lakshadweep">Lakshadweep</option>
												<option value="Madhya Pradesh">Madhya Pradesh</option>
												<option value="Maharashtra">Maharashtra</option>
												<option value="Manipur">Manipur</option>
												<option value="Meghalaya">Meghalaya</option>
												<option value="Mizoram">Mizoram</option>
												<option value="Nagaland">Nagaland</option>
												<option value="Odisha">Odisha</option>
												<option value="Puducherry">Puducherry</option>
												<option value="Punjab">Punjab</option>
												<option value="Rajasthan">Rajasthan</option>
												<option value="Sikkim">Sikkim</option>
												<option value="Tamil Nadu">Tamil Nadu</option>
												<option value="Telangana">Telangana</option>
												<option value="Tripura">Tripura</option>
												<option value="Uttar Pradesh">Uttar Pradesh</option>
												<option value="Uttarakhand">Uttarakhand</option>
												<option value="West Bengal">West Bengal</option>
												<option value="Out of India">Out of India</option>
											</select>
                                        @error('state')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
									<div class="form-group">
                                        <label for="city">Location/City</label>
                                        <input type="text" class="form-control @error('city') is-invalid @enderror"
                                            value="{{old('city')}}" id="city" name="city" required
                                            placeholder="Enter Location or City">
                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required id="userpassword" placeholder="Enter password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Confirm Password</label>
                                        <input id="password-confirm" type="password" name="password_confirmation"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required placeholder="Enter password">
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-primary btn-block waves-effect waves-light"
                                            type="submit">Register</button>
                                    </div>

                                    <!--<div class="mt-4 text-center">
                                        <h5 class="font-size-14 mb-3">Sign up with</h5>

                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript::void()"
                                                    class="social-list-item bg-primary text-white border-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()"
                                                    class="social-list-item bg-info text-white border-info">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()"
                                                    class="social-list-item bg-danger text-white border-danger">
                                                    <i class="mdi mdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>-->

                                    <div class="mt-2 text-center">
                                        <p class="mb-0">By registering you agree to the intas <a href="#"
                                                class="text-primary">Terms of Use</a></p>
                                    </div>
									<div class="mt-2 text-center">
											<p>Already have an account ? <a href="{{url('login')}}" class="font-weight-medium text-primary">
													Login </a> </p>
										</div>
                                </form>

                            </div>
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <p>© <script>
                            document.write(new Date().getFullYear())
                            </script> intas. Crafted with <i class="mdi mdi-heart text-danger"></i> by INTAS</p>
                    </div>


                </div>
            </div>
        </div>
    </div>

    @endsection