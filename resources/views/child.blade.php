@extends('layouts.app')

@section('content')

    <section class="hero">
        <div class="hero-body">
            <div class="container has-text-centered">
                <img src="top-pc.png">
            </div>
        </div>
    </section>
    {{--
    <section class="section">
        <div class="columns is-centered">
            <div class="column is-8">
                <form action="{{ url('/chatgpt')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="field">
                        <label class="label">AIがあなたの悩みに答えます。</label>
                        <div class="control">
                            <textarea name="text" class="textarea" placeholder="ここにあなたの悩みを入力してください..." rows="3"></textarea>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-info">送信</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    --}}
    <section class="section container">
        <h2 class="is-size-3 mb-3" style="color: #1B7DFF;">占い師一覧</h2>
          <div class="columns">
            @foreach ($sellers as $seller)
              <div class="column is-3">
                <div style="background-color: #fce473">
                    <a href='/seller/show/{{ $seller->id }}'>
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="icon.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="content" >
                                <h2 style="color: #1B7DFF;">{{ $seller->nickname, 40, "..." }}</h2>
                                <p style="color: #1B7DFF;">{{ Str::limit($seller->detail, 120, "...") }}</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            @endforeach
          </div>
       </div>
    </section>
@endsection
