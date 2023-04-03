@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Make Estimation</h1>
    <form action="/Estimation/storeEstimation" method="POST" >
        @csrf
        @method('POST')
        <label for="land_owner_id"> Land Owner ID: </label>
        <input type="text" name="land_owner_id"> 
        <label for="check"> Check Estimation: </label>
        Estimated <input type="radio" name="check" value="Estimated">
        Unestimated  <input type="radio" name="check" value="Unestimated">
        <label for="`amount`"> Compensaiton Amount : </label>
        <input type="number" name="amount">
        <label for="responsibility">Estimated By : </label>
        <input type="text" name="responsibility">
        <label for="project">Project Name  : </label>
        <input type="text" name="project">
        <input type="submit" value="INSERT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/Estimation/seeEstimation" method="GET">
     @csrf
     @method('GET')
     <button id="btn" >See Prev</button>
 </form>
 @endif
 <div class="mssg">{{session('mssg')}}</div>
</div>
</div>
@endsection