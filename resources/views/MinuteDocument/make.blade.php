@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Make Minute Document </h1>
    <form action="/MinuteDocument/storeMinuteDocument" method="POST" >
        @csrf
        @method('POST')
        
        <!-- <label for="land_owner_id"> Land Owner ID: </label>
        <input type="text" name="land_owner_id" value=""> -->
        <br>
       
        <table cell-spacing="12px">
        @foreach($notification as $temp1)
           
            @foreach($landOwner as $temp)
                @if($temp->id == $temp1->land_owner_id)
                <tr cell-spacing="12px">
                    <td>
                    {{$temp->Name}}:
                    </td>
                    <td> &nbsp; &nbsp; Present <input type="radio" name="{{$temp->id}}" value="Present"></td>
                    <td> &nbsp; &nbsp;Absent <input type="radio" name="{{$temp->id}}" value="Absent"> </td>
                </tr>
                @endif
            @endforeach
       
        <!-- <label for="responsibility">Held By : </label> -->
        <input type="hidden" name="reason" value="{{$reason}}">
        <!-- <label for="project">Project Name  : </label> -->
        <input type="hidden" name="project" value="{{$temp1->project}}"> <br>
        @endforeach
        </table> 
       
        <input type="submit" value="INSERT ">       
    </form>
    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')

 <form action="/MinuteDocument/seeMinuteDocument" method="GET">
     @csrf
     @method('GET')
     <button id="btn" >See Prev</button>
 </form>
 @endif
</div>
</div>
@endsection
