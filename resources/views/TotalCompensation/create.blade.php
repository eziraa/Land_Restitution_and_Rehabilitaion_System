@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Total Compensation</h1>
    <form action="/TotalCompensation/storeTotalCompensation" method="POST" >
        @csrf
        @method('POST')
        @foreach($project as $temp)
        <!-- <label for="land_owner_id"> Land Owner ID: </label>
        <input type="text" name="land_owner_id"> 
        <label for="`amount`"> Conmpensation Amount : </label>
        <input type="number" name="amount">-->
        {{$temp->project}}: 
        <input type="radio" name="project" value="{{$temp->project}}"> <br>
        @endforeach
        <input type="submit" value="INSERT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/TotalCompensation/seeTotalCompensation" method="GET">
     @csrf
     @method('GET')
     <button id="btn" >See Prev</button>
 </form>
 @endif
 <div class="mssg">{{session('mssg')}}</div>
</div>
</div>
@endsection