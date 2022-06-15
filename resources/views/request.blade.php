<!-- <p style=" font-size: small;">In our team of volunteers, we deal with a very sensitive category, so after your application has been reviewed and accepted, be ready for the week-long intensive training.</p> -->
<!-- <div>
    <p style=" font-size: small;">In our team of volunteers, we deal with a very sensitive category, so after your application has been reviewed and accepted, be ready for the week-long intensive training.</p>
    <p style=" font-size: small;">In the service section you would like to volunteer for, there are five services that you can choose from:</p>
    <ul style=" font-size: small;">
        <li>Cleaning: In this section, we will help the elderly in cleaning the house and the environment in which they live and practice their daily routine</li>
        <li>Transportation: In this section, we will help the elderly to reach the places they need to reach, such as: participating in community activities, visiting the doctor, visiting family and friends, etc.</li>
        <li>Providing needs: in this section, we will help the elderly in providing the necessities in their daily lives, such as: bringing groceries, buying clothes and tools, and any other needs they need</li>
        <li>Personal Hygiene: In this section, We make sure that the elderly are taken care of in terms of personal hygiene and we help with that</li>
        <li>Personal check: In this section, we visit the elderly, conduct activities for them, check on them, and make sure that they engage with the community around them.</li>
    </ul>
    </div>
  </div>
</div>
</div> -->


<style>


body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-img-left {
  width: 45%;
  /* Link to your background image using in the property below! */
  background: scroll center url({{asset('img/req.png')}});
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
@section('title','Request')

@section('contant')

 <!-- Page Header Start -->
 <div class="page-header"style="background-color: #008E89; padding: 90px 0 40px 0;"  >
        <div class="container" >
            <div class="row">
                <div class="col-12">
                   
                </div>
                <div class="col-12">
                    <a style="color:#008E89;">Apply</a>
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
    <h4 style="margin-left: -20px; font-weight: bold;">Join Anas community</h4><br>
    <div>

    
    <p>If you need its services for the elderly, do not hesitate to apply.</p>
    <p >Our services:</p>
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
            <h5 class="card-title text-center mb-5 fw-light fs-5">{{ __('Apply For Our Service') }}</h5>
            <form method="post" action="{{url('request')}}">
                        @csrf
                        <div class="row mb-6">
                            <div class="col-md-12">
                            <label for="name" class="col-md-12 col-form-label text-md-end">Name</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="form-control">
                            </div>
                        </div>
                        <div class="row mb-6">
                            <div class="col-md-12">
                                <label for="age" class="col-md-12 col-form-label text-md-end">Age</label>
                                <input id="age" type="number" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus class="form-control">
                            </div>
                        </div>

                        <div class="row mb-6">
                            <div class="col-md-12">
                                <label for="phone_num" class="col-md-12 col-form-label text-md-end">Phone Number</label>
                                <input id="phone_num" type="text" name="phone_num" value="{{ old('phone_num') }}" required autocomplete="age" autofocus class="form-control">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-md-12">
                            <label for="guardian_id_pic" class="col-md-12 col-form-label text-md-end">Elder  Picture</label>
                            
                            <input type="file" name="img" placeholder="Image" class="form-control">
                        </div>
                    </div>


                        <div class="row mb-6"> 
                            <div class="col-md-12">
                                <label for="Gender" class="col-md-12 col-form-label text-md-end">Service(What Service elder needed)</label>
                                    <select  name="needed_services" id="floatingSelect" aria-label="Floating label select example" class="form-control">
                                        <option selected value="" ></option>
                                        <option value="Cleaning">Cleaning</option>
                                        <option value="Transportation">Transportation</option>
                                        <option value="Provide_needs">Provide_needs</option>
                                        <option value="Personal_hygiene">Personal hygiene</option> 
                                        <option value="Personal_check">Personal_check</option>
                                      </select>
                                </div>
                            </div>



                           <div class="row mb-6">
                            <div class="col-md-12">
                                <label for="time_needed" class="col-md-12 col-form-label text-md-end">Time needed services</label>
                                <input id="time_needed" type="datetime-local" name="time_needed" value="{{ old('time_needed') }}" required autocomplete="password" autofocus class="form-control">
                            </div>
                        </div>

                        <div class="row mb-6"> 
                        <div class="col-md-12">
                            <label for="Gender" class="col-md-12 col-form-label text-md-end">Gender</label>
                                <select  name="gender" id="floatingSelect" aria-label="Floating label select example" class="form-control">
                                    <option selected value="" ></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                  </select>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <div class="col-md-12">
                            <label for="location" class="col-md-12 col-form-label text-md-end">Location</label>
                                <input id="location" type="text" name="location" value="{{ old('location') }}" required autocomplete="name" autofocus class="form-control">
                            </div>
                        </div>


                        <div class="row mb-6">
                            <div class="col-md-12">
                            <label for="guardian_name" class="col-md-12 col-form-label text-md-end">Guardian Name</label>
                                <input id="guardian_name" type="text" name="guardian_name" value="{{ old('guardian_name') }}" required autocomplete="name" autofocus class="form-control">
                            </div>
                        </div>

                        <div class="row mb-6">
                            <div class="col-md-12">
                            <label for="guardian_number" class="col-md-12 col-form-label text-md-end">Guardian Number</label>
                                <input id="guardian_number" type="text" name="guardian_number" value="{{ old('guardian_number') }}" required autocomplete="name" autofocus class="form-control">
                            </div>
                        </div>

                        <div class="row mb-6">
                            <div class="col-md-12">
                            <label for="guardian_relation" class="col-md-12 col-form-label text-md-end">guardianrelation</label>
                                <input id="guardian_relation" type="text" name="guardian_relation" value="{{ old('guardian_relation') }}" required autocomplete="name" autofocus class="form-control">
                            </div>
                        </div>

                      
             

                        <div class="row mb-3">
                            <div class="col-md-12">
                            <label for="guardian_id_pic" class="col-md-12 col-form-label text-md-end">Guardian id Picture</label>
                            
                            <input type="file" name="guardian_id_pic" placeholder="Image" class="form-control">
                        </div>
                    </div>

                
                   

    

                    

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-12">
                                <button type="submit" class="btn btn-primary">SUBMIT
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
