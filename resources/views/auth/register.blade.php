<style>


body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-img-left {
  width: 45%;
  /* Link to your background image using in the property below! */
  background: scroll center url({{asset('img/reg.png')}});
  background-repeat: no-repeat;
  background-size: cover;
}



html, body, .container-table {
    height: 100%;
}
.container-table {
    display: table;
}
.vertical-center-row {
    display: table-cell;
    vertical-align: middle;
}


    </style>






@extends('layouts.master')
@section('contant')

 <!-- Page Header Start -->
 <div class="page-header"style="background-image: url('https://www.nehhc.com/wp-content/uploads/2016/11/ThinkstockPhotos-578806154.jpg%27'); padding: 90px 0 40px 0;"  >
        <div class="container" >
            <div class="row">
                <div class="col-12">
                   
                </div>
                <div class="col-12">
                <h1 class="page_title">Register</h1>
                </div>
            </div>
    </div>
    </div>
    <!-- Page Header End -->


<div class="container">
    <div class="row">
      <div class="col-lg-12 col-xl-12 mx-auto">
        <div class="card flex-row my-4 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
          <div class="container container-table">
          <div class="h-100 d-flex align-items-center justify-content-center">
  <div style="padding: 30px; color:#000 ; margin-top: -200px;">
    <h4 style="margin-left: -20px; font-weight: bold;">Join Auns Volunteer Team</h4><br>
    <div>

    <p >In the service section you would like to volunteer for, there are five services that you can choose from:</p>
    <ul >
        <li>Cleaning</li>
        <li>Transportation: We will help the elderly to reach the places they need to reach</li>
        <li>Providing needs: We will help the elderly in providing the necessities in their daily lives</li>
        <li>Personal Hygiene</li>
        <li>Personal check: We make sure that they engage with the community around them </li>
    </ul>
    </div>
  </div>
</div>
</div>

          </div>
          <div class="card-body p-4 p-sm-3"><br>
            <!-- <h5 class="card-title text-center mb-5 fw-light fs-5">{{ __('Register') }}</h5> -->
            <form method="POST" action="{{ route('register') }}" style="padding: 20px;">
                        @csrf

                        <div class="row mb-3">
                            <label for="first name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>
                          
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="lname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
                          
                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('name') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                     

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="back_id_pic" class="col-md-4 col-form-label text-md-end">{{ __('Image Porfile') }}</label>
                        <div class="col-md-6">
                                <input type="file" class="form-control " name="img" id="imgc" value="{{ old('img') }}">

                            </div>
                        </div> 



                        <div class="row mb-3">
                            <label for="floatingSelect" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                          
                            <div class="col-md-6">
                                <select class="form-select form-control  " name="gender" id="floatingSelect" aria-label="Floating label select example" value="{{ old('gender') }}">
                                    <option selected value="" >Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                  </select>
                                
                            </div>
                        </div> 
             
                     <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Age') }}</label>
                          
                            <div class="col-md-6">
                                <input type="date" class="form-control @error('age') is-invalid @enderror" name="age" id="bday" value="{{ old('age') }}">

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 



                        
                     <div class="row mb-3">
                            <label for="front_id_pic" class="col-md-4 col-form-label text-md-end">{{ __('Front Id Picture') }}</label>
                        <div class="col-md-6">
                                <input type="file" class="form-control " name="front_id_pic" id="front_id_pic" value="{{ old('front_id_pic') }}">

                            </div>
                        </div> 


                        <div class="row mb-3">
                            <label for="back_id_pic" class="col-md-4 col-form-label text-md-end">{{ __('Back Id Picture') }}</label>
                        <div class="col-md-6">
                                <input type="file" class="form-control " name="back_id_pic" id="back_id_pic" value="{{ old('back_id_pic') }}">

                            </div>
                        </div> 

                        <div class="row mb-3">
                            <label for="needed_services" class="col-md-4 col-form-label text-md-end">{{ __('Service') }}</label>
                        <div class="col-md-6">
                                  <select class="form-control"  name="needed_services" id="needed_services" aria-label="Floating label select example" required value="{{ old('needed_services') }}">
                                        <option selected value="" ></option>
                                        <option value="Cleaning">Cleaning</option>
                                        <option value="Transportation">Transportation</option>
                                        <option value="Provide_needs">Provide_needs</option>
                                        <option value="Personal_hygiene">Personal_hygiene</option> 
                                        <option value="Personal_check">Personal_check</option>
                                      </select>
                            </div>
                        </div> 


                        <div class="row mb-3">
                            <label for="time" class="col-md-4 col-form-label text-md-end">{{ __('Time From') }}</label>
                        <div class="col-md-6">
                                <input type="datetime-local" class="form-control " name="time" id="time" value="{{ old('time') }}">

                            </div>
                        </div> 




                        <div class="row mb-3">
                            <label for="timeTo" class="col-md-4 col-form-label text-md-end">{{ __('Time To') }}</label>
                        <div class="col-md-6">
                                <input type="datetime-local" class="form-control " name="timeTo" id="timeTo" value="{{ old('timeTo') }}">

                            </div>
                        </div> 


                        <div class="row mb-3">
                            <label for="car" class="col-md-4 col-form-label text-md-end">{{ __('Do you have a car?') }}</label>
                        <div class="col-md-6">
                        <select class="form-select form-control" name="car" id="car" value="{{ old('car') }}">
                                <option selected value="" >Car</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                              </select>

                            </div>
                        </div> 




                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn " style="background-color:#008E89; color:#fff">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
