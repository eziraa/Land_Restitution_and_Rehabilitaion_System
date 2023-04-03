
@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>SELCECT THE PROJECT YOU WANT </h1>
    <form action="/Notification/findNotification" method="POST" >
        @csrf
        @method('POST')
        <input type="hidden" name ="reason" value="{{$reason}}">       
        <label for="project">Project Name : </label> <br>
        <table>@foreach($ProReqToLand as $temp)
            <tr>
                <td>
                {{$temp->project}} </td>
                <td> <input type="radio" name="project" value="{{$temp->project}} "> 
                </td>
            </tr>@endforeach
        </table>
       
        <input type="submit" value="SELECT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/Notification/seeNotification" method="GET">
     @csrf
     @method('GET')
     <!-- <button id="btn" ></button> -->
 </form>
 @endif
</div>
</div>
@endsection
