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

<div class="page-header"style="background-color: #008E89; padding: 90px 0 40px 0;"  >
    <div class="container" >
        <div class="row">
            <div class="col-12">
                <h2>Requests Page</h2>
            </div>
            <div class="col-12">
                <h1 class="page_title">Requests Page</h1>
            </div>
        </div>
</div>
</div>



<div class="container ">
  <div class="row d-flex justify-content-between ">  
  @foreach($view2 as $data) 
  
  <div class="card  mt-5 ">
        

        <div class="mt-5">
            <div>
                <div style="width: 50%" aria-valuepnow="50" aria-valuemin="0" aria-valuemax="100"><img src="img/{{$data->img}}" width="300px"></div>
            </div>
            
            <div class="mt-3"style="text-align:center"> Name :{{$data->name}}</div>
            <div class="mt-3"style="text-align:center"> Age :{{$data->age}}</div>
            <div class="mt-3"style="text-align:center">Gender :{{$data->gender}}</div>
            <div class="mt-3"style="text-align:center">Location :{{$data->location}}</div>
            <div class="mt-3"style="text-align:center">Phone :{{$data->phone_num}}</div>
            <div class="mt-3"style="text-align:center">Needed_Services :{{$data->needed_services}}</div>
            <div class="mt-3"style="text-align:center">Time_Needed :{{$data->time_needed}}</div>

        </div>
        <a href="accept_request/id/{{Auth::user()->id}}/{{$data->elder_id}}" class="btn  btn-lg active" role="button" aria-pressed="true">Accept</a>
        </div>



@endforeach
</div>
</div>
</div>

@endsection