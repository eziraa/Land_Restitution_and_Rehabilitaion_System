
@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Form to Notify Land Owner </h1>
    <form action="/Notification/storeNotification" method="POST" >
        @csrf
        @method('POST')
        <label for="reason">Reason</label>
        <input type="text" name="reason">
        @foreach ($proReqToLand as $proReqToLan)
        <label for="received">Received Or Not : </label>
        {{$proReqToLan->land_owner_id }} Received <input type="radio" name="$proReqToLan->land_owner_id" value="Received">
        Not Received <input type="radio" name="$proReqToLan->land_owner_id" value="Not Recieved">
        <!-- <label for="project">Project Name : </label> -->
        <input type="hidden" name="project" value="{{$proReqToLan->project}}">
        <input type="number" name="land_owner_id"> 
        <input type="hidden" name="responsibility" value="Minute Document Holder">
        <input type="submit" value="SUBMIT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/Notification/seeNotification" method="GET">
     @csrf
     @method('GET')
     <button id="bttn" >See Crops</button>
 </form>
 @endif
 <div class="mssg">{{session('mssg')}}</div>
</div>
</div>
@endsection -->