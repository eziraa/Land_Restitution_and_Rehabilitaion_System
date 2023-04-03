
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <form action="/Priority/Priority" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btttn" > Fill Priority </button>
                    </form>
                    
                    <form action="/Priority/seePriority" method="GET">
                        @csrf
                        @method('GET')
                        <button id="btttn" >See Priority</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
