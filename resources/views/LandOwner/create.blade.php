@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add new Land Owner</h1>
    <form action="/landOwner/storeLandOwner" method="POST" >
        @csrf
        <label for="name">Full Name :</label>
        <input type="text" name="name" id="region"><br>
        <label for="age">Age : </label>
        <input type="text" name="age" id="age">
        <label for="gender">Gender : </label><br>
        Male   <input type="radio" name="gender" value="M">
        Female  <input type="radio" name="gender" value="F">
        <label for="phone_number">Phone Number : </label>
        <input type="text" name="phone_number" id="wereda">
        <label for="sub_kebele">Sub-Kebele : </label>
        <input type="text" name="sub_kebele" id="subKebele">
        <input type="submit" value="Add Land Owner">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/landOwner/seeLandOwner" method="GET">
     @csrf
     @method('GET')
     <button id="btn" >See Prev</button>
 </form>
 @endif
 
 <div class="mssg">{{$mssg}}
    <div class="msg">{{$msg}}</div>
</div>
</div>
</div>
@endsection