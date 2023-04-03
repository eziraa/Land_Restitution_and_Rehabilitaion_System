@extends('layouts.app')
@section('content')

<div class="left-margin">
    <div class ="wrapper create-pizza">
        <h1>Add  Building Material of House ID {{$house_id}} </h1>
            <form action="/BLDGMaterialBuildsHouse/storeBLDGMaterialBuildsHouse" method="POST" >
                @csrf
                <label for="name"> BLDGMaterialBuildsHouse Name </label>
                <input type="text" name="name" ><br>
                <label for="quantity">Quantity: </label>
                <input type="number" name="quantity">
                <input type="hidden" name="land_id" value= "{{$land_id}}">
                <!-- <label for="house_id">House ID: </label> -->
                <input type="hidden" name="house_id" value= "{{$house_id}}">
                <input type="submit" value="INSERT ">       
            </form>
            <form action="/house/addHouse" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="id" value= "{{$land_id}}">
            <button id="bttn" >finish</button>
        </form>
        @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
        <form action="/BLDGMaterialBuildsHouse/seeBLDGMaterialBuildsHouse" method="GET">
            @csrf
            @method('GET')
            <button id="bttn" >See Prev</button>
        </form>
        @endif
        <div class="mssg">{{$mssg}}
        <div class="msg">{{$msg}}</div>

        </div>
    </div>
</div>
@endsection