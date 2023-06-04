<?php
    $img=$item_temp["img"]??asset("img/no-image-available.png");
    if($img == ""){
        $img=asset("img/no-image-available.png");
    }
    ?>
{{--{{dd($parent)}}--}}
    <div class="card">
        <div class="img">
            <img src="{{$img}}" alt="">
        </div>
        <div class="text">
            <a href="{{route("profile.category_sub", ["parent_id"=>$item_temp["id"]])}}">{{$item_temp["name"]??null}}</a>
        </div>
    </div>
