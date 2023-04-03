@extends('layouts.app')
@section('content')


<div class ="content" >
    <div class="left-margin">
        <div class="wrapper pizza-details">
            <h2 id="title"> Food ordered list </h2><br>
            <div  id="table">
                    @foreach($order as $order)   
                    <table>
                        <ul>
                            <li>
                                <tr>
                                    <td>
                                        {{$order->customerName}}
                                    </td>
                                    <td>
                                        <div id="btn">
                                        <a href="/foods/details/{{$order->id}}">See more ...</a>
                                        </div>
                                    </td>
                                </tr>
                            </Li>
                        </ul>
                        
                    </table>
                    
                    @endforeach
            </div>
           
        </div>
</div>

@endsection