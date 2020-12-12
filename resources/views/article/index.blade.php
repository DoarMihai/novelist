@extends(config('novelist.default_theme'))

@section('content')
    @foreach($articles as $article)
        {{ $article->name }}
    @endforeach
@endsection
