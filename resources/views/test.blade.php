@extends ('layout')

@section ('content')

<body>
    <section class="hero is-info">
        <div class="hero-body">
            <p class="title">
                Really dumb blog
            </p>
            <p class="subtitle">
                You just can post whatever you want, dont be offensive.
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
                            </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    @endforeach
</body>

@endsection