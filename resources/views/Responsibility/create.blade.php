@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add Responsibility Info</h1>
    <form action="/responsibility/storeResponsibility" method="POST" >
        @csrf
        <label for="name">Responsibility Name :</label>
        <input type="text" name="name" ><br>
        <input type="submit" value="INSERT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/responsibility/seeResponsibility" method="GET">
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