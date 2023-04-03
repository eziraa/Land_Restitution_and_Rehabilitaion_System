
@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Form to Notify Land Owner </h1>
    <form action="/Notification/storeNotification" method="POST" >
        @csrf
        @method('POST')
        <!-- <label for="reason">Reason</label> -->
        <input type="hidden" name="reason" value="{{$reason}}"> <br>
        <label for="received">Received Or Not : </label> <br>
        @foreach ($ProReqToLand as $proReqToLan)
       
        @foreach($landOwner as $temp1)
        @if($temp1->id == $proReqToLan->landOwner_id)
           {{$temp1->Name}}
        @endif
        @endforeach
        <pre>
                 Received <input type="radio" name="{{$proReqToLan->landOwner_id}}" value="Received">
                 Not Received <input type="radio" name="{{$proReqToLan->landOwner_id}}" value="Not Recieved">
        </pre>
        @endforeach
        <input type="hidden" name="project" value="{{$project}}">
        <input type="hidden" name="responsibility" value=" Notifier">
        <input type="submit" value="SUBMIT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/Notification/seeNotification" method="GET">
     @csrf
     @method('GET')
     <button id="btn" >See Notification</button>
 </form>
 @endif
</div>
</div>
@endsection 