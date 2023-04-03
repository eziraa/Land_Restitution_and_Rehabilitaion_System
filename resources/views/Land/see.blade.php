@extends('layouts.app')
@section('content')

<div class="left-margin">
    <div class ="wrapper create-pizza">
        <h1>Search Land in Specific Sub Kebele</h1>
            <form action="/land/searchLand" method="POST" >
                @csrf
                <label for="sub_kebele">Sub-Kebele : </label>
                <input type="text" name="sub_kebele" id="subKebele">
                <input type="submit" value="SEARCH">       
            </form>
        @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

        <form action="/land/seeLand" method="GET">
            @csrf
            @method('GET')
            <button id="btn" >See Land</button>
        </form>
        @endif
        <div class="mssg">{{session('mssg')}}</div>
    </div>
</div>
@endsection