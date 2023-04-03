@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Prioritized Land Owner  Board</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Land Owner ID </td>
                                    <td>Compensated City Land Area  </td>
                                    <td> Prioritised By : </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($PrioritizedLandOwners as $PrioritizedLandOwner)
                                <tr id="row">
                                    <td id="column">{{$PrioritizedLandOwner->land_owner_id}}</td>
                                    <td id="column"> {{$PrioritizedLandOwner->area}};</td>
                                    <td id="column"> {{$PrioritizedLandOwner->responsibility}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/PrioritizedLandOwner/deletePrioritizedLandOwner/{{$PrioritizedLandOwner->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/PrioritizedLandOwner/showPrioritizedLandOwner/{{$PrioritizedLandOwner->id}}" method="GET">
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
                                    
                    <div class="mssg">
                        <div class="msg">{{$msg}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
