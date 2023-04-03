@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add new Team </h1>
    <form action="/Team/storeTeam" method="POST" >
        @csrf
        <label for="team">Team Name   : </label>
        <input type="text" name="team">
        <label for="number"> Number Of Land Owners:</label>
        <input type="number" name="number" ><br>
        <input type="submit" value="INSERT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/Team/seeTeam" method="GET">
     @csrf
     @method('GET')
     <button id="bttn" >See Teams</button>
 </form>
 @endif
 <div class="mssg">{{session('mssg')}}</div>
</div>
</div>
@endsection
