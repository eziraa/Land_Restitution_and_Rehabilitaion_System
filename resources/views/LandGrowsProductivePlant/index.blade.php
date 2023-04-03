@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="title">
                    <h2>Land with their Productive Plant  Information</h2>
                </div>
                <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td>Plant Name </td>
                                    <td>Low level Quantity</td>
                                    <td>Medium level Quantity</td>
                                    <td>High level Quantity </td>
                                    <td>Land ID </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($landGrowsProductivePlants as $landGrowsProductivePlant)
                                <tr id="row">
                                    <td id="column">{{$landGrowsProductivePlant->name}}</td>
                                    <td id="column"> ${{$landGrowsProductivePlant->LQuantity}}</td>
                                    <td id="column"> ${{$landGrowsProductivePlant->MQuanity}}</td>
                                    <td id="column"> ${{$landGrowsProductivePlant->HQuanity}}</td>
                                    <td id="column"> {{$landGrowsProductivePlant->land_id}}</td>
                                    <td id="column">
                                    @if(Auth::user()!=null &&Auth::user()->name =='Ezira Tigab')
                                    <form action="/landGrowsProductivePlant/deleteLandGrowsProductivePlant/{{$landGrowsProductivePlant->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="btn" >Remove</button>
                                    </form>
                                    </td>
                                    <td id="column"><form action="/landGrowsProductivePlant/showLandGrowsProductivePlant/{{$landGrowsProductivePlant->id}}" method="GET">
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
