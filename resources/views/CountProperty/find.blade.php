
@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Select you want count  </h1>
    <!-- <form action="/Count/storeNotification" method="POST" >
        @csrf
        @method('POST')
        <label for="received">Land Owners with thier Land </label> <br> -->
        <table>
            <tr>
                <td>Land Owner Name </td>
                <td>Land ID</td>
                <td>Action</td>
            </tr>
        @foreach ($project as $temp)
            <tr>
            @foreach($landOwner as $temp1)
            @if($temp1->id == $temp->land_owner_id)
                <td>{{$temp1->Name}}</td>
                @foreach($land as $temp2)
                @if($temp1->id == $temp2->landOwner_id)
                <td>Land ID {{$temp2->id}}</td>
                <td>
                <form action=" /CountProperty/count/{{$temp2->id}}" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btn" >Count</button>
                    </form>
                </td>
                @endif
                @endforeach
            @endif
            @endforeach
                
            </tr>
         @endforeach
        </table>
        <!-- <label for="reason">Reason</label> -->
<!--        
       
       
        <pre>
                 Received <input type="radio" name="{{$temp->land_owner_id}}" value="Received">
                 Not Received <input type="radio" name="{{$temp->land_owner_id}}" value="Not Recieved">
        </pre>
        
        <input type="hidden" name="project" value="{{$project}}">
        <input type="hidden" name="responsibility" value=" Notifier">
        <input type="submit" value="SUBMIT ">       
    </form> -->
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