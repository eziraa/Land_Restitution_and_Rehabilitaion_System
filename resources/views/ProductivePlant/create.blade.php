@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add new Productive Plant </h1>
    <form action="/productivePlant/storeProductivePlant" method="POST" >
        @csrf
        <label for="name">Plant Name :</label>
        <input type="text" name="name" ><br>
        <label for="Lprice"> Current Price of Low Level : </label>
        <input type="number" name="Lprice">
        <label for="Mprice"> Current Price of medium Level : </label>
        <input type="number" name="Mprice">
        <label for="Hprice"> Current Price of high Level : </label>
        <input type="number" name="Hprice"> 
        <input type="submit" value="INSERT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/productivePlant/seeProductivePlant" method="GET">
     @csrf
     @method('GET')
     <button id="btn" >See Plant</button>
 </form>
 @endif

 <div class="mssg">{{$mssg}}
    <div class="msg">{{$msg}}</div>
                    </div>   
 </div>
</div>
@endsection