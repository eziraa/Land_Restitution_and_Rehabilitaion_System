
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
                            <form action="/Priority/homePriority" method="GET">
                            @csrf
                            @method('GET')
                            <button id="btttn" > Priority </button>
                        </form>
                        </td>
                        <td>
                            <form action="/PrioritizedLandOwner/homePrioritizedLandOwner" method="GET">
                                @csrf
                                @method('GET')
                                <button id="btttn" >  Prioritized LandOwner  </button>
                            </form>
                        </td>
                        <td>
                            <form action=" /Team/homeTeam" method="GET">
                                @csrf
                                @method('GET')
                                <button id="btttn" > Team</button>
                             </form>
                        </td>
                         <td>
                            <form action=" /InterestRequest/homeInterestRequest" method="GET">
                                @csrf
                                @method('GET')
                                <button id="btttn" > Interest Request</button>
                             </form>
                        </td>
                         <td>
                            <form action=" /TeamRehabilitatesOn/homeTeamReahabilitatesOn" method="GET">
                                @csrf
                                @method('GET')
                                <button id="btttn" >Team Group</button>
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
