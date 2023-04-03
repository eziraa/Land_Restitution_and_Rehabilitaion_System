@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Address Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <!-- <div class="sub-title">
                            Main Course
                        </div> -->
                        
                        <div class="item-list">
                            <table class="table">
                                <tr>
                                    <td>Region</td>
                                    <td>Zone</td>
                                    <td>Wereda</td>
                                    <td>Kebele</td>
                                    <td>Sub Kebele</td>
                                </tr>
                                @foreach($addresss as $address)
                                <tr>
                                    <td>{{$address->region}}</td>
                                
                                
                                    <td>{{$address->zone}};</td>
                                
                                
                                    <td>{{$address->wereda}}</td>
                                
                                
                                    <td>{{$address->kebele}};</td>
                                
                                
                                    <td>{{$address->subKebele}}</td>
                                
                                    <td>
                                        <form action="/address/showAddress/{{$address->id}}" method="GET">
                                            @csrf
                                            @method('GET')
                                            <button id="btn" >See detail</button>
                                        </form> 
                                    </td>
                                
                                    <td>@if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/address/deleteAddress/{{$address->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    
                                    @else
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
