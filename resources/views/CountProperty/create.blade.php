@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Property Counting  </h1>
    <form action="/CountProperty/storeCountProperty" method="POST" >
        @csrf
        @method('POST')
        <label for="land_owner_id"> Land Owner ID: </label>
        <input type="text" name="land_owner_id"> 
        <label for="check"> Check Counting: </label>
        Counted <input type="radio" name="check" value="Counted">
        Uncounted  <input type="radio" name="check" value="Uncounted">
        <label for="`representative_id`"> Representative ID : </label>
        <input type="text" name="representative_id">
        <label for="responsibility">Counted By : </label>
        <input type="text" name="responsibility">
        <label for="project">Project Name  : </label>
        <input type="text" name="project">
        <input type="submit" value="SUBMIT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/CountProperty/seeCountProperty" method="GET">
     @csrf
     @method('GET')
     <button id="bttn" >See Counted Crop</button>
 </form>
 @endif
 <!-- <div class="mssg">{{$mssg}}
            <div class="msg">{{$msg}}</div> -->

</div>
</div>
@endsection