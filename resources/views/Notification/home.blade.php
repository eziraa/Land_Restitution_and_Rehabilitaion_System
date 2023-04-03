@extends('layouts.app')
@section('content')

<div class="left-margin">
<div class ="wrapper create-pizza">
    <h1>Welcome to Our System</h1>
    <h2>The notifier home page</h2>
              
    <div class="main">
                    <div class="section">
                        <div class="item-list">
                            <table class="table">
                            <tr id="row">
                                    <td> <form action=" ProReqToLand/seeProReqToLand" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button id="btn" >See request </button>
                                     </form></td>
                            </tr>
                            <tr>
                                   <td><form action=" land/search" method="GET">
                                        @csrf
                                        @method('GET')
                                    <button id="btn" >SEARCH LAND</button>
                                    </form></td>
                            </tr>
                            <tr id="row">
                                    <td> <form action=" Notification/Notification" method="GET">
                                            @csrf
                                            @method('GET')
                                        <button id="btn" >Make Notification</button>
                                        </form>
                                    </td>
                            </tr>
                            <tr>
                                <td><form action="Notification/seeNotification" method="GET"> 
                                    @csrf
                                    @method('GET')
                                    <button id="btn" >SEE Notification</button>
                                </form>
                            </td>
                            </tr>
                            </table>
                        </div>
                      
                    </div>
                  
                    
                </div>
                </div>
</div>
</div>
@endsection