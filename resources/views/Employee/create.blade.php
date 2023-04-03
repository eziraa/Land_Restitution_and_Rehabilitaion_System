@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add new Employee</h1>
    <form action="/Employee/storeEmployee" method="POST" >
        @csrf
        <label for="name">Full Name :</label>
        <input type="text" name="name" id="region"><br>
        <label for="gender">Gender : </label><br>
        Male   <input type="radio" name="gender" value="M">
        Female  <input type="radio" name="gender" value="F">
        <label for="phone_number">Phone Number : </label>
        <input type="text" name="phone_number" id="">
        <label for="job">Job : </label>
        <input type="text" name="job" id="">
        <label for="email">Email : </label>
        <input type="text" name="email" id="">
        <input type="submit" value="Add Emplyee">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/Employee/seeEmployee" method="GET">
     @csrf
     @method('GET')
     <button id="btn" >See Prev</button>
 </form>
 @endif
 
 <div class="mssg">{{session('mssg')}}
    <div class="msg">{{session('msg')}}</div>
</div>
</div>
</div>
@endsection