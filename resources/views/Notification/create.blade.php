@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>SELCECT THE TYPE OF NOTIFICATION </h1>
    <form action="/Notification/seeNotification" method="POST" >
        @csrf
        @method('POST')
        <label for="reason">Reason</label> <br>
        To Count Proprty <input type="radio" name="reason" value="Counting"> <br>
        To Discussion &nbsp;&nbsp; &nbsp;  <input type="radio" name="reason" value="Discussion"> <br>
        <input type="submit" value="SELECT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/Notification/seeNotification" method="GET">
     @csrf
     @method('GET')
     <!-- <button id="bttn" >See Crops</button> -->
 </form>
 @endif
 </div>
</div>
</div>
@endsection

