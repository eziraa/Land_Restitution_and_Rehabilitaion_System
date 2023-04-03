@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add new Directorate</h1>
    <form action="/RPRDirectorate/storeRPRDirectorate" method="POST" >
        @csrf
        <label for="name">Directorate Name :</label>
        <input type="text" name="name"><br>
        <label for="email">email : </label>
        <input type="text" name="email" id="age">
        <label for="text">Phone Number : </label><br>
        <input type="text" name="phone" id="age">
        <input type="submit" value="INSERT">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/RPRDirectorate/seeRPRDirectorate" method="GET">
     @csrf
     @method('GET')
     <button id="btn" >See Prev</button>
 </form>
 @endif
</div>
</div>
@endsection