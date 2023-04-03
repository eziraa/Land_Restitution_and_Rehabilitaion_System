@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add new Family Member</h1>
    <form action="/familyMember/storeFamilyMember" method="POST" >
        @csrf
        <label for="name">Full Name :</label>
        <input type="text" name="name"><br>
        <label for="age">Age : </label>
        <input type="text" name="age" id="age">
        <label for="gender">Gender : </label><br>
        <input type="text" name="gender" id="zone">
        <label for="relation">Relationship : </label><br>
        <input type="text" name="relation" id="zone">
        <label for="phone_number">Phone Number : </label>
        <input type="text" name="phone_number" id="wereda">
        <label for="landOwner_id">Land Owner ID : </label>
        <input type="text" name="landOwner_id" id="subKebele">
        <input type="submit" value="INSERT">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/familyMember/seeFamilyMember" method="GET">
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