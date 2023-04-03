
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <table>
                    <tr>
                        <td>
                            <form action=" /Employee/homeEmployee" method="GET">
                            @csrf
                            @method('GET')
                            <button id="btttn" > Employee </button>
                        </form>
                        </td>
                        <td>
                            <form action=" /RPRDirectorate/homeRPRDirectorate" method="GET">
                                @csrf
                                @method('GET')
                                <button id="btttn" > RPR Directorate  </button>
                            </form>
                        </td>
                        <td>
                            <form action=" /responsibility/homeResponsibility" method="GET">
                                @csrf
                                @method('GET')
                                <button id="btttn" > Responsibility</button>
                             </form>
                        </td>
                    </tr>
                </table>
             
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
