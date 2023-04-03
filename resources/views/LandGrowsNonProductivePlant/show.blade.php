@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2> Land with thier Non Productive Plant Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Plant Name : </td>
                                    <td id="column">{{$landGrowsnonProductivePlant->name}}</td>
                                    <td id="column">
                                      <!-- @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab') -->
                                    <form action="/nonProductivePlant/showNonProductivePlant/{{$landGrowsnonProductivePlant->name}}" method="get">
                                        @csrf
                                        @method('get')
                                        <button id="btn" >See Plant</button>
                                    </form>
                                    <!-- @endif -->
                                    </td>
                            </tr>
                            <tr>
                                <td>Quantity : </td>
                                <td id="column"> {{$landGrowsnonProductivePlant->Quantity}};</td>
                            </tr>
                            <tr id="row">
                                    <td>Preservation Expense : </td>
                                    <td id="column">{{$landGrowsnonProductivePlant->preservation}}</td>
                            </tr>
                            <tr>
                                <td>High Level Price : </td>
                                <td id="column"> {{$landGrowsnonProductivePlant->growth}};</td>
                            </tr><tr id="row">
                                    <td>Land ID : </td>
                                    <td id="column">{{$landGrowsnonProductivePlant->land_id}}</td>
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/land/showLand/{{$landGrowsnonProductivePlant->land_id}}" method="get">
                                        @csrf
                                        @method('get')
                                        <button id="btn" >See Land</button>
                                    </form>
                                    @endif
                                    </td>
                            </tr>
                                <tr id="row">
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/landGrowsnonProductivePlant/deleteLandGrowsNonProductivePlant/{{$landGrowsnonProductivePlant->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >Update</button>
                                    </form> 
                                    @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                      
                    </div>
                  
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
