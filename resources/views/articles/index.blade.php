@extends ('layout')

@section ('content')

<body>
    <section class="hero is-info">
        <div class="hero-body">
            <p class="title">
                All your blogs
            </p>
            <p class="subtitle">
                Do what you want!!
            </p>
        </div>
    </section>
    @foreach($articles as $article)
    <section class="section">
        <div class="container">
            <div class="columns is-centered is-mobile">
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <div class="content">
                            <p>
                                <strong>{{$article-> title }}</strong>
                            <br>
                            {{ $article-> body }}
                            <br>
                            <div class="buttons are-small">
                                <button class="button"><a href = "/article/{{$article->id}}/edit" style="text-decoration: none;" ><p>Edit</p></a></button>
                            </div>
                            </p>
                            </div>
                        </div>
                        <div class="media-right">
                            <form method="POST" action="/article/{{ $article->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="delete" type="submit"></button>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    @endforeach
</body>

@endsection
