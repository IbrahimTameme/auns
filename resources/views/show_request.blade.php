@extends('layouts.master')
@section('title', 'Reqeust order')
@section('contant')



<style>


button:hover, a:hover {
  opacity: 0.7;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #008E89;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

img {
    vertical-align: middle;
    border-style: none;
    margin: 20px

}


.btn
{
    margin: 8%;
    background-color: #008E89;
}

    </style>

<div class="page-header"style="background-image: url('https://www.nehhc.com/wp-content/uploads/2016/11/ThinkstockPhotos-578806154.jpg%27'); padding: 90px 0 40px 0;"  >
    <div class="container" >
        <div class="row">
            <div class="col-12">
               
            </div>
            <div class="col-12">
                <h1 class="page_title">Requests Page</h1>
            </div>
        </div>
</div>
</div>



<div class="container ">
  <div class="row d-flex justify-content-around ">  
  @foreach($view2 as $data) 
  
  <div class="card  mt-5 ">
        

        <div class="mt-5 ">
            <div>
                <div style="width: 50%" aria-valuepnow="50" aria-valuemin="0" aria-valuemax="100"><img src="/img/{{$data->img}}" width="300px" height="270px"></div>
            </div>
            
            <div class="mt-3"style="padding-left: 8px; padding-right: 4px;"> Name :{{$data->name}}</div>
            <div class="mt-3"style="padding-left: 8px; padding-right: 4px;"> Age :{{$data->age}}</div>
            <div class="mt-3"style="padding-left: 8px; padding-right: 4px;">Gender :{{$data->gender}}</div>
            <div class="mt-3"style="padding-left: 8px; padding-right: 4px;">Location :{{$data->location}}</div>
            <div class="mt-3"style="padding-left: 8px; padding-right: 4px;">Phone :{{$data->phone_num}}</div>
            <div class="mt-3"style="padding-left: 8px; padding-right: 4px;">Needed Services :{{$data->needed_services}}</div>
            <div class="mt-3"style="padding-left: 8px; padding-right: 4px;">Time Needed :{{$data->time_needed}}</div>

        </div>
        <a href="accept_request/id/{{Auth::user()->id}}/{{$data->elder_id}}" class="btn  btn-lg active" role="button" aria-pressed="true">Accept</a>
        </div>



@endforeach
</div>
</div>
</div>

@endsection