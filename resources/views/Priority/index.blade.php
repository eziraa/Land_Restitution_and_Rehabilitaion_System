@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Priority  Board</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Owner ID </td>
                                    <td>City Land Area  </td>
                                    <td>Reason For the land </td>>
                                    <td>Disability</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($Prioritys as $Priority)
                                <tr id="row">
                                    <td id="column">{{$Priority->land_owner_id}}</td>
                                    <td id="column"> {{$Priority->area}};</td>
                                    <td id="column"> {{$Priority->reason}}</td>
                                    <td id="column"> {{$Priority->desability}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/Priority/deletePriority/{{$Priority->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/Priority/showPriority/{{$Priority->id}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See detail</button>
                                    </form> 
                                    @endif
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                      
                    </div>
                  
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
