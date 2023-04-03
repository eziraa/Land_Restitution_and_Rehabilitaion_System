@extends('layouts.app')
@section('content')

<div class="left-margin">
    <div class ="wrapper create-pizza">
        <h1>Add Crops that are grown on the land</h1>
        <form action="/landGivesCrop/storeLandGivesCrop" method="POST" >
                @csrf
                <label for="name">Crop Name :</label>
                <input type="text" name="name" ><br>
                <label for="this">The Current Year Amount in Quintal per Hectar : </label>
                <input type="number" name="this">
                <label for="last">The last Year Amount in Quintal per Hectar : </label>
                <input type="number" name="last">
                <label for="two">The Two years Year Amount in Quintal per Hectar : </label>
                <input type="number" name="two">
                <input type="hidden" name="land_id" value="{{$id}}">
                <input type="submit" value="INSERT  ">       
            </form>
            <form action=" /CountProperty/count/{{$id}}" method="GET">
                        @csrf
                        @method('GET')
                        <input type="hidden" name = 'id' value="{{$id}}">
                        <button id="bttn" >Finish  </button>
            </form>
        @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

        <form action="/landGivesCrop/seeLandGivesCrop" method="GET">
            @csrf
            @method('GET')
            <button id="btn" >See Prev</button>
        </form>
        @endif
        <div class="mssg">{{$mssg}}
            <div class="msg">{{$msg}}</div>

    </div>
</div>
@endsection