<link rel="stylesheet" href="{{asset("css/recet.css")}}">
<link rel="stylesheet" href="{{asset("css/category.css")}}">
<link rel="stylesheet" href="{{asset("css/fonts.css")}}">

<div class="background">
    <p class="permanent">Каталог товарів <span><i class="fa-solid fa-xmark"></i></span></p>
{{--    <div class="all_category"><span><i class="fa-solid fa-chevron-left"></i></span>Всі категорії</div>--}}
    @if($parent)
        {{--    {{dd($parent)}}--}}

        <a class="all_category" href="{{route("profile.category_sub", ["parent_id"=>$parent->parent_id])}}"><span><i class="fa-solid fa-chevron-left"></i></span>Всі категорії</a>
    @endif
    <ol class="cat0">
        @foreach($category as $item)
            <li>
                @include("profile.test_category", ["item_temp"=>$item])
            </li>
        @endforeach
    </ol>
</div>

<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>

