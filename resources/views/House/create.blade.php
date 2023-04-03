@extends('layouts.app')
@section('content')

<div class="left-margin">
    <div class ="wrapper create-pizza">
        <h1>Add new House</h1>
            <form action="/house/storeHouse" method="POST" >
                @csrf
                <!-- House ID {{$house_id}} -->
                <label for="numberOf">Number Of Labour to build the House</label>
                <input type="number" name="numberOf" ><br>
                <label for="labourCost">Current Labour Cost: </label>
                <input type="number" name="labourCost">
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

        <form action="/house/seeHouse" method="GET">
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