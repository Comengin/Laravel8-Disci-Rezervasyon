@foreach($children as $subcategory)
    <ul class="list-lnk">
        @if(count($subcategory->children))
            <li style="color: #1000af;font-family: 'Arial Black'"> {{$subcategory->title}}</li>
            <ul>
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
            <li><a href="{{route('categoryservices',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
