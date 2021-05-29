@extends ('layout')

@section ('content')

<body>
    <section class="hero is-info">
        <div class="hero-body">
          <p class="title">
            Edit a blog
          </p>
          <p class="subtitle">
            When I have a funciton to edit blogs, and twitter dont XD
          </p>
        </div>
    </section>
    <section class="section">
      <div class="container ">
        <div class="columns is-centered is-vcentered is-mobile"0>
            <form method="POST" action="/article/{{$article->id}}" class="box">

            @method('PUT')
            @csrf
            
            <div class="card-content">
              <div class="content block">
            
              <div class="field">
              <label class="label">Title</label>
                <div class="field-body">
                  <p class="control is-expanded">
                    <input name="title" class="input" type="text" placeholder="Title here..." value="{{$article->title}}">
                    @if ($errors->has('title'))
                      <span class="help is-danger">{{ $errors->first('title') }}</span>
                    @endif
                  </p>
                </div>
              </div>

              <div class="field">
                <label class="label">Excerpt</label>
                  <div class="field-body">
                    <p class="control is-expanded">
                      <input name="excerpt" class="input" type="text" placeholder="Excerpt here..." value="{{$article->title}}">
                      @if ($errors->has('title'))
                        <span class="help is-danger">{{ $errors->first('excerpt') }}</span>
                      @endif
                    </p>
                  </div>
                </div>

                <div class="field">
                    <label class="label">Main content</label>
                      <div class="field-body">
                        <p class="control is-expanded">
                          <textarea name="body" class="textarea" placeholder="Enter text here..." >{{$article->body}}</textarea>
                          @if ($errors->has('body'))
                            <span class="help is-danger">{{ $errors->first('body') }}</span>
                          @endif
                        </p>
                    </div>
                </div>
              
              <div class="field is-grouped">
                <div class="control">
                  <button type="submit" class="button is-warning">Submit</button>
                </div>
                <div class="control">
                  <a type="button" href="/article" class="button is-light">Cancel</a>
                </div>
              </div>
              
            </div>
            </form>
        </div>
      </div>
    </section>
</body>

@endsection
