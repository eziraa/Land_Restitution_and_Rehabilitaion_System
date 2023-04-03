@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2> Land with thier Productive Plant Full Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Plant Name : </td>
                                    <td id="column">{{$landGrowsProductivePlant->name}}</td>
                                    <td id="column">
                                      <!-- @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab') -->
                                    <form action="/productivePlant/showProductivePlant/{{$landGrowsProductivePlant->name}}" method="get">
                                        @csrf
                                        @method('get')
                                        <button id="btn" >See Plant</button>
                                    </form>
                                    <!-- @endif -->
                                    </td>
                            </tr>
                            <tr>
                                <td>Low level Quantity : </td>
                                <td id="column"> ${{$landGrowsProductivePlant->LQuantity}};</td>
                            </tr>
                            <tr id="row">
                                    <td>Midium Level Quantity : </td>
                                    <td id="column">${{$landGrowsProductivePlant->MQuanity}}</td>
                            </tr>
                            <tr>
                                <td>High Level Quantity : </td>
                                <td id="column"> ${{$landGrowsProductivePlant->HQuanity}};</td>
                            </tr><tr id="row">
                                    <td>Land ID : </td>
                                    <td id="column">{{$landGrowsProductivePlant->land_id}}</td>
                                    <td id="column">
                                      @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/land/showLand/{{$landGrowsProductivePlant->land_id}}" method="get">
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
                                    <form action="/landGrowsProductivePlant/deleteLandGrowsProductivePlant/{{$landGrowsProductivePlant->id}}" method="POST">
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
