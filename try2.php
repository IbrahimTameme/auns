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




<link rel="stylesheet" href="">

@extends('layouts.master')
@section('contant')

 <!-- Page Header Start -->
 <div class="page-header"style="background-color: #008E89; padding: 90px 0 40px 0;"  >
        <div class="container" >
            <div class="row">
                <div class="col-12">
                   
                </div>
                <div class="col-12">
                    <a style="color:#008E89;">Register</a>

                </div>
            </div>
    </div>
    </div>
    <!-- Page Header End -->


    <section class="sign-in mt-5">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src='/img/login.png' alt="sing up image"></figure>
                </div>
                <div class="signin-form">
                    <h2 class="form-title">Login</h2>
                    <form method="POST" action="{{url('login')}}">
                        @csrf
                        <div class="form-group">
                            <label for="email"><i class="fa fa-user"></i></label>
                            <input type="email" name="email" id="email" placeholder="email"/><br>
                         </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="fa fa-unlock-alt"></i></label>
                            <input type="password" name="password" id="your_pass" placeholder="Password"/><br>

                        </div>
                        @if (session('message'))
                        <div class="alert alert-danger" role="alert">
                            {{session('message')}}
                        </div>
                    @endif
                        <div class="form-group form-button">
                            <button type="submit" name="login" id="signin" class="btn btn-primary btn-block"> login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
