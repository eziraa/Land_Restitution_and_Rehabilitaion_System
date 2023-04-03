@extends('layouts.app')
@section('content')

<div class="left-margin">
    <div class ="wrapper create-pizza">
        <h1>Payment To land Owner</h1>
            <form action="/ProPaysToLandOwner/storeProPaysToLandOwner" method="POST" >
                @csrf
                <label for="land_owner_id">LandOwner ID</label>:</label>
                <input type="number" name="land_owner_id" ><br>
                <label for="project">Project Name: </label>
                <input type="text" name="project">
                <label for="amount">Amount  : </label><br>
                <input type="number" name="amount">
                <input type="submit" value="PAY ">       
            </form>
        @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

        <form action="/ProPaysToLandOwner/seeProPaysToLandOwner" method="GET">
            @csrf
            @method('GET')
            <button id="bttn" >See Land</button>
        </form>
        @endif
        <div class="mssg">{{session('mssg')}}</div>
    </div>
</div>
@endsection