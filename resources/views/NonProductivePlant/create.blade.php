@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add new Non - Productive Plant </h1>
    <form action="/nonProductivePlant/storeNonProductivePlant" method="POST" >
        @csrf
        <label for="name">Plant Name :</label>
        <input type="text" name="name" ><br>
        <label for="price">Plant Current Price  : </label>
        <input type="number" name="price">
        <input type="submit" value="INSERT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/nonProductivePlant/seeNonProductivePlant" method="GET">
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