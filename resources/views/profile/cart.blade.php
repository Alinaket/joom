@extends("layouts.app_head")
@section("content")
    <style>
        h3, p, span{
            font-family: "Segoe UI Semibold";
            color: #1a202c;
        }
        h3{
            font-size: 30px;
        }
        img{
            width: 100px;
            height: auto;
        }
        li{
            display: grid;
            grid-template-columns: auto 1fr;
        }
    </style>
<h3>Мій кошик</h3>
    <ul>
        @foreach( $cart as $item)
        <li>
            <img src="{{$item->img}}" alt="">
            <div class="text">
                <p>{{$item->name}}</p>
                <span>{{$item->prise}}</span>
            </div>
        </li>
        @endforeach
    </ul>

@stop
