@extends('layouts.app')
@section('content')

<div class="left-margin">
    <div class ="wrapper create-pizza">
        <h1>Add new Building Material</h1>
            <form action="/BLDGMaterial/storeBLDGMaterial" method="POST" >
                @csrf
                <label for="name"> BLDGMaterial Name : </label>
                <input type="text" name="name" ><br>
                <label for="price">Current Material Price: </label>
                <input type="number" name="price">
                <input type="submit" value="INSERT ">       
            </form>
        @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

        <form action="/BLDGMaterial/seeBLDGMaterial" method="GET">
            @csrf
            @method('GET')
            <button id="btn" >See Prev</button>
        </form>
        @endif
      
 <div class="mssg">{{session('mssg')}}
   <div class="msg">{{session('msg')}}</div>
</div>
   </div>
</div>
@endsection