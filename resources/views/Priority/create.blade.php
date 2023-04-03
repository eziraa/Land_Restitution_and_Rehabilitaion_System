@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Interest Request</h1>
    <form action="/Priority/storePriority" method="POST" >
        @csrf
        @method('POST')
        <label for="land_owner_id"> Land Owner ID: </label>
        <input type="text" name="land_owner_id"> 
        <label for="area"> City Land Area : </label>
        <input type="number" name="area">
        <label for="reason">Reason For the land  : </label>
        Gift <input type="radio" name="reason" value="Gift">
        Award  <input type="radio" name="reason" value="Award">
        Legal  <input type="radio" name="reason" value="Legal">
        <label for="desability">Desability : </label>
        Desable  <input type="radio" name="desability" value="Desable">
        Not Desable  <input type="radio" name="desability" value="Not Desable">
        <input type="submit" value="SUBMIT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/Priority/seePriority" method="GET">
     @csrf
     @method('GET')
     <button id="bttn" >See Prev</button>
 </form>
 @endif
 <div class="mssg">{{session('mssg')}}</div>
</div>
</div>
@endsection