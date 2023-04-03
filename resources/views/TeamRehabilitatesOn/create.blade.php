@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Property Counting  </h1>
    <form action="/TeamRehabilitatesOn/storeTeamRehabilitatesOn" method="POST" >
        @csrf
        @method('POST')
        <label for="land_owner_id"> Land Owner ID: </label>
        <input type="text" name="land_owner_id"> 
        <label for="team">Team Name </label>
        <input type="text" name="team" value="Counted">
        <label for="expert"> Expert Adivce : </label>
        <input type="text-area" name="expert">
        <label for="responsibility">Managed By : </label>
        <input type="text" name="responsibility">
        <label for="budget">Governmental Budget Support : </label>
        <input type="number" name="budget">
        <input type="submit" value="SUBMIT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/TeamRehabilitatesOn/seeTeamRehabilitatesOn" method="GET">
     @csrf
     @method('GET')
     <button id="bttn" >See Grouped Land Owner</button>
 </form>
 @endif
 <div class="mssg">{{session('mssg')}}</div>
</div>
</div>
@endsection