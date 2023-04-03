@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Form to make request </h1>
    <form action="/ProReqToLand/storeProReqToLand" method="POST" >
        @csrf
        @method('POST')
        <label for="urgency">Urgency :</label>
        Urgent <input type="radio" name="urgency" value ="Urgent">
        Not Urgent <input type="radio" name="urgency" value ="Not Urgent">
        <label for="recover"> Land Recoverability : </label>
        Recoverable <input type="radio" name="recover" value ="Racoverable">
        Non Recoverable <input type="radio" name="recover" value ="Non Racoverable">
        <label for="area">Requested Area : </label>
        <input type="number" name="area">
        <label for="duration">Project Duration : </label>
        <input type="number" name="duration">
        <label for="sub_kebele"> Sub kebele: </label>
        <input type="text" name="sub_kebele"> 
        <!-- <label for="reponsibility">Responsed By : </label> -->
        <input type="hidden" name="responsibility" value="Notifier">
        <label for="project">Project Name : </label>
        <input type="text" name="project">
        <label for="goverment">Project Type : </label>
        <input type="text" name="goverment">
        <input type="submit" value="SUBMIT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/ProReqToLand/seeProReqToLand" method="GET">
     @csrf
     @method('GET')
     <button id="btn" >See Prev</button>
 </form>
 @endif
</div>
</div>
@endsection