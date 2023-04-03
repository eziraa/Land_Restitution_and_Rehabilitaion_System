@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add new Crop </h1>
    <form action="/crop/storeCrop" method="POST" >
        @csrf
        <label for="name">Crop Name :</label>
        <input type="text" name="name" ><br>
        <label for="price">Crop Current Price  : </label>
        <input type="number" name="price">
        <input type="submit" value="Add Crop ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/crop/seeCrop" method="GET">
     @csrf
     @method('GET')
     <button id="bttn" >See Crops</button>
 </form>
 @endif
 <div class="mssg">{{$mssg}}
    <div class="msg">{{$msg}}</div>
 </div>
</div>
</div>
@endsection