@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Form to fill  LandGrowsProductivePlant table </h1>
    <form action="/landGrowsProductivePlant/storeLandGrowsProductivePlant" method="POST" >
        @csrf
        @method('POST')
        <label for="name">Plant Name :</label>
        <input type="text" name="name" ><br>
        <label for="LQuantity"> Quantity Low Level  : </label>
        <input type="number" name="LQuantity">
        <label for="MQuantity"> Quantity of medium Level : </label>
        <input type="number" name="MQuantity">
        <label for="HQuantity"> Quantity of high Level  : </label>
        <input type="number" name="HQuantity"> 
        <input type="hidden" name = 'land_id' value="{{$id}}">
        <input type="submit" value="INSERT ">       
    </form>
    <form action=" /CountProperty/count/{{$id}}" method="GET">
                        @csrf
                        @method('GET')
                        <input type="hidden" name = 'id' value="{{$id}}">
                        <button id="bttn" >Finish  </button>
            </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/landGrowsProductivePlant/seeLandGrowsProductivePlant" method="GET">
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