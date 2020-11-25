<ul>
@foreach ($blogs as $item)
<li><a href="/blog/{{$item->title}}">{{$item->title}}</a></li>        
@endforeach
</ul>