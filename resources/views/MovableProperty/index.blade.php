@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Movable Proprty  Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Property Name </td>
                                    <td>Uprooting Expense</td>
                                    <td> Transportation Expense</td>
                                    <td> Installing </td>
                                    <td>Recovery Expense</td>
                                    <td>Land ID </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($movablePropertys as $movableProperty)
                                <tr id="row">
                                    <td id="column">{{$movableProperty->name}}</td>
                                    <td id="column"> {{$movableProperty->uprooting}};</td>
                                    <td id="column"> {{$movableProperty->transport}}</td>
                                    <td id="column"> {{$movableProperty->installing}}</td>
                                    <td id="column"> {{$movableProperty->recovery}}</td>
                                    <td id="column"> {{$movableProperty->land_id}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/movableProperty/deleteMovableProperty/{{$movableProperty->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/movableProperty/showMovableProperty/{{$movableProperty->id}}" method="GET">
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
