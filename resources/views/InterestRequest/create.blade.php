@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Interest Request</h1>
    <form action="/InterestRequest/storeInterestRequest" method="POST" >
        @csrf
        @method('POST')
        <label for="land_owner_id"> Land Owner ID: </label>
        <input type="text" name="land_owner_id"> 
        <label for="name"> Interest Name  : </label>
        <input type="text" name="name">
        <label for="responsibility">Requested  By  : </label>
        <input type="text" name="responsibility">
        <input type="submit" value="SUBMIT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/InterestRequest/seeInterestRequest" method="GET">
     @csrf
     @method('GET')
     <button id="bttn" >See Crops</button>
 </form>
 @endif
 <div class="mssg">{{session('mssg')}}</div>
</div>
</div>
@endsection