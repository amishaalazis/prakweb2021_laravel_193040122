@extends('layouts.main')

@section('container')
<article>
<h3>{{ $post["title"] }}</h3>
<h5>{{ $post["author"] }}</h5>
<p>{{ $post["body"] }}</p>
</article>

<a href="/blog">Back to Post</a>
@endsection