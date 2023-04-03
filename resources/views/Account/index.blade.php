@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Account Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <!-- <div class="sub-title">
                            Main Course
                        </div> -->
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Account ID </td>
                                    <td>Account Number</td>
                                    <td>Land Owner ID</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($Accounts as $Account)
                                <tr id="row">
                                    <td id="column">{{$Account->id}}</td>
                                    <td id="column"> {{$Account->account}};</td>
                                    <td id="column"> {{$Account->land_owner_id}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/Account/deleteAccount/{{$Account->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/Account/showAccount/{{$Account->id}}" method="GET">
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
