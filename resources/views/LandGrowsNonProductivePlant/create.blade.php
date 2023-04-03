@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Form to fill  LandGrowsProductivePlant table </h1>
    <form action="/landGrowsNonProductivePlant/storeLandGrowsNonProductivePlant" method="POST" >
        @csrf
        @method('POST')
        <label for="name">Plant Name :</label>
        <input type="text" name="name" ><br>
        <label for="Quantity"> Quantity : </label>
        <input type="number" name="Quantity">
        <label for="growth">Growth Expense  : </label>
        <input type="number" name="growth">
        <label for="preservation"> Preservation Expense : </label>
        <input type="number" name="preservation"> 
        <input type="hidden" name = 'land_id' value="{{$id}}">
        <input type="submit" value="SUBMIT ">       
    </form>
    <form action=" /CountProperty/count/{{$id}}" method="GET">
                        @csrf
                        @method('GET')
                        <input type="hidden" name = 'id' value="{{$id}}">
                        <button id="bttn" >Finish  </button>
            </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/landGrowsNonProductivePlant/seeLandGrowsNonProductivePlant" method="GET">
     @csrf
     @method('GET')
     <button id="bttn" >See Info</button>
 </form>
 @endif
         <div class="mssg">{{$mssg}}
            <div class="msg">{{$msg}}</div>
</div>
</div>
</div>
@endsection