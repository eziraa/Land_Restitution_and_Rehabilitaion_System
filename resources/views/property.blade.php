
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
                        <form action=" /crop/homeCrop" method="GET"> 
                            @csrf
                            @method('GET')
                            <button id="btttn" >Crop</button>
                       </form>
                        </td>
                        <td>
                        <form action=" /land/homeLand" method="GET"> 
                            @csrf
                            @method('GET')
                            <button id="btttn" > Land</button>
                         </form>
                        </td>
                        <td> </form> <form action=" /productivePlant/homeProductivePlant" method="GET">
                            @csrf
                            @method('GET')
                            <button id="btttn" > Productive Plant </button>
                            </form> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <form action=" /landOwner/homeLandOwner" method="GET">
                            @csrf
                            @method('GET')
                            <button id="btttn" > Land Owner </button>
                        </form>
                        </td>
                        <td>
                            <form action=" /nonProductivePlant/homeNonProductivePlant" method="GET">
                                @csrf
                                @method('GET')
                                <button id="btttn" > Non Productive Plant  </button>
                            </form>
                        </td>
                        <td>
                            <form action=" /BLDGMaterial/homeBLDGMaterial" method="GET">
                                @csrf
                                @method('GET')
                                <button id="btttn" >  Building Material</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <form action=" /project/homeProject" method="GET">
                                @csrf
                                @method('GET')
                                <button id="btttn" > Project</button>
                            </form>
                        </td>
                        <td>
                          <form action=" /familyMember/homeFamilyMember" method="GET">
                                @csrf
                                @method('GET')
                                <button id="btttn" > Family Member</button>
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
