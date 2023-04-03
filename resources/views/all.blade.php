
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
                        <form action=" /all/property" method="GET"> 
                            @csrf
                            @method('GET')
                            <button id="btttn" >Manage Property</button>
                       </form>
                        </td>
                        <td>
                        <form action=" /all/rehabilitation" method="GET"> 
                            @csrf
                            @method('GET')
                            <button id="btttn" > Manage rehabilitation</button>
                         </form>
                        </td>
                    </tr>
                    <tr>
                        <td> </form> <form action=" /all/employee" method="GET">
                            @csrf
                            @method('GET')
                            <button id="btttn" >Manage Employee related </button>
                            </form> 
                        </td>
                        <td>
                            <form action=" /all/activities" method="GET">
                            @csrf
                            @method('GET')
                            <button id="btttn" > Manage all activities</button>
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
