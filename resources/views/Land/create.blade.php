@extends('layouts.app')
@section('content')

<div class="left-margin">
    <div class ="wrapper create-pizza">
        <h1>Add new Land info</h1>
            <form action="/land/storeLand" method="POST" >
                @csrf
                <label for="type">Land Type :</label>
                <input type="text" name="type" ><br>
                <label for="use">Land Use : </label>
                <input type="text" name="use">
                <label for="area">Land Area : </label><br>
                <input type="number" name="area" id="zone">
                <label for="landOwner_id">Land Owner ID : </label>
                <input type="number" name="landOwner_id" id="wereda">
                <label for="sub_kebele">Sub-Kebele : </label>
                <input type="text" name="sub_kebele" id="subKebele">
                <input type="submit" value="Add Land ">       
            </form>
        @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

        <form action="/land/seeLand" method="GET">
            @csrf
            @method('GET')
            <button id="btn" >See Land</button>
        </form>
        @endif
        <div class="mssg">{{$mssg}}
         <div class="msg">{{$msg}}</div>
    </div>
</div>
@endsection