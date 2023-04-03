@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>MinuteDocument Board</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Owner ID </td>
                                    <td>Project Name </td>
                                    <td>Document Reason</td>
                                    <td>Check Presence</td>
                                    <td>Discussion Date</td>
                                    <td>Held By</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($MinuteDocuments as $MinuteDocument)
                                <tr id="row">
                                    <td id="column">{{$MinuteDocument->land_owner_id}}</td>
                                    <td id="column"> {{$MinuteDocument->project}};</td>
                                    <td id="column"> {{$MinuteDocument->type}}</td>
                                    <td id="column"> {{$MinuteDocument->created_at}}</td>
                                    <td id="column"> {{$MinuteDocument->check}}</td>
                                    <td id="column"> {{$MinuteDocument->responsibility}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/MinuteDocument/deleteMinuteDocument/{{$MinuteDocument->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/MinuteDocument/showMinuteDocument/{{$MinuteDocument->id}}" method="GET">
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
                                    
                    <div class="mssg">{{session('mssg')}}
                        <div class="msg">{{session('msg')}}</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

