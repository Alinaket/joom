<ol>
    @foreach($category as $item)
    <li>
        <ol>
            @foreach($item as $item_element)
                <li>{{$item_element}}

                </li>
            @endforeach
        </ol>
    </li>
    @endforeach
</ol>
