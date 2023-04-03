@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Priritize Land Owner</h1>
    <form action="/PrioritizedLandOwner/storePrioritizedLandOwner" method="POST" >
        @csrf
        @method('POST')
        <label for="land_owner_id"> Land Owner ID: </label>
        <input type="text" name="land_owner_id"> 
        <label for="area"> Compensated City Land Area : </label>
        <input type="number" name="area">
        <input type="hidden" name="responsibility" value="Rabalilitator">
        <input type="submit" value="SUBMIT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/PrioritizedLandOwner/seePrioritizedLandOwner" method="GET">
     @csrf
     @method('GET')
     <button id="bttn" >See Prev</button>
 </form>
 @endif
 <div class="mssg">{{$mssg}}
    <div class="msg">{{$msg}}</div>
</div>
</div>
</div>
@endsection