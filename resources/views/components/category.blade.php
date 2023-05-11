<link rel="stylesheet" href="{{asset("css/category.css")}}">
<link rel="stylesheet" href="{{asset("css/recet.css")}}">
<link rel="stylesheet" href="{{asset("css/fonts.css")}}">
<ol class="cat0">
    @foreach($category as $item)
    <li>
        {{$item["name"]??null}}
    <ol  class="cat1">
        @foreach($item["data"] as $item1)
            <li>
                {{$item1["name"]??null}}
                <ol class="cat2">
                    @foreach($item1["data"] as $item2)
                        <li>
                            {{$item2["name"]??null}}
                            <ol class="cat3">
                                @foreach($item2["data"] as $item3)
                                    <li>
                                        {{$item3["name"]??null}}
                                        <ol class="cat4">
                                            @foreach($item3["data"] as $item4)
                                                <li>
                                                    {{$item4["name"]??null}}
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
{{--       <?php--}}
{{--//           dd($item["name"])--}}
{{--        ?>--}}
