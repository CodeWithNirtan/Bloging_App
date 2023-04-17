@extends("mainLayout")
@section("title")
    All Posts
@endsection

@section("CenterContent");

<h1>
    @foreach($posts as $p)

    <h1>{{$p->title}}</h1>
    @endforeach
</h1>
@endsection