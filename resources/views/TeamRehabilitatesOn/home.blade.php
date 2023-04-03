
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                    <form action="/TeamRehabilitatesOn/TeamRehabilitatesOn" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btttn" >Group Land Owner</button>
                    </form>
                    <form action="/TeamRehabilitatesOn/seeTeamRehabilitatesOn" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btttn" >See Grouped Land Owner</button>
                    </form>
                    
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
