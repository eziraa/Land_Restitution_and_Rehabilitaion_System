@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Add Project Info</h1>
    <form action="/project/storeProject" method="POST" >
        @csrf
        <label for="name">Project Name :</label>
        <input type="text" name="name" ><br>
        <label for="type"> Project Type : </label>
        <input type="text" name="type">
        <input type="submit" value="INSERT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/project/seeProject" method="GET">
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