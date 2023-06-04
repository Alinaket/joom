<link rel="stylesheet" href="{{asset("css/recet.css")}}">
<link rel="stylesheet" href="{{asset("css/category.css")}}">
<link rel="stylesheet" href="{{asset("css/fonts.css")}}">
@extends("layouts.app_head")
@section("content")
<div class="background">
{{--    <p class="permanent">Каталог товарів <span><i class="fa-solid fa-xmark"></i></span></p>--}}
{{--    <div class="all_category"><span><i class="fa-solid fa-chevron-left"></i></span>Всі категорії</div>--}}
    <div class="all_category"><span><i class="fa-solid fa-chevron-left"></i></span>Всі категорії</div>
{{--    <a href="{{asset(".joom")}}">Всі категорії</a>--}}
    <ol class="cat0">
        @foreach($category as $item)
            <li>
                @include("profile.test_category" )
                <ol  class="cat1">
                    @foreach($item["data"] as $item1)
                        <li>
                            @include("profile.test_category", ["item_temp"=>$item1])
                            <ol class="cat2">
                                @foreach($item1["data"] as $item2)
                                    <li>
                                        @include("profile.test_category", ["item_temp"=>$item2])
                                        <ol class="cat3">
                                            @foreach($item2["data"] as $item3)
                                                <li>
                                                    @include("profile.test_category", ["item_temp"=>$item3])
                                                    <ol class="cat4">
                                                        @foreach($item3["data"] as $item4)
                                                            <li>
                                                                @include("profile.test_category", ["item_temp"=>$item4])
                                                            </li>
                                                        @endforeach
                                                    </ol>
                                                </li>
                                            @endforeach
                                        </ol>
                                    </li>
                                @endforeach
                            </ol>
                        </li>
                    @endforeach
                </ol>
            </li>
        @endforeach
    </ol>
</div>
       <?php
//           dd($item["name"])
        ?>
@stop
<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>

