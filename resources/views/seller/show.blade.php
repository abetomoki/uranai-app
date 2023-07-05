@extends('layouts.app')

@section('content')
    <section class="section container" style="background-color: #eee; border-radius: 10px;">
        <h1 class="title is-2" style="color: #1B7DFF;">{{ $seller->nickname }}</h2>

        <h2 class="title is-3" style="color: #1B7DFF;">特徴</h2>
        <div class="columns">
            <div class="column is-12">
                <div class="content">
                    <ul>
                        @foreach ($features as $feature)
                            <li>{{ $feature->feature }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <h2 class="title is-3" style="color: #1B7DFF;">実績</h2>
        <div class="columns">
            <div class="column is-4">
                <table class="table is-fullwidth is-striped" style="color: #1B7DFF;">
                    <tbody>
                        <tr>
                            <td>フォロワー数</td>
                            <td>{{ $seller->follower_count }}</td>
                        </tr>
                        <tr>
                            <td>販売実績</td>
                            <td>{{ $seller->sales_record }}</td>
                        </tr>
                        <tr>
                            <td>評価</td>
                            <td>☆{{ $seller->rating }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <h2 class="title is-3" style="color: #1B7DFF;">口コミ</h2>
        <div class="columns">
            <div class="column is-10">
            @foreach ($reviews as $review)
                <article class="message is-white">
                    <div class="message-header">
                        ☆{{ $review->rate }}/5
                    </div>
                    <div class="message-body">
                        {{ $review->review }}
                    </div>
                </article>
            @endforeach
        </div>
        </div>


        <h2 class="title is-3" style="color: #1B7DFF;">料金設定</h2>
        <div class="columns">
            <div class="column is-4">
                <table class="table is-fullwidth is-striped" style="color: #1B7DFF;">
                    <thead>
                        <tr>
                            <th style="color: #1B7DFF;">サービス</th>
                            <th style="color: #1B7DFF;">O/X</th>
                            <th style="color: #1B7DFF;">料金</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>恋愛占い</td>
                            <td>O</td>
                            <td>¥5,000</td>
                        </tr>
                        <tr>
                            <td>仕事の占い</td>
                            <td>O</td>
                            <td>¥7,000</td>
                        </tr>
                        <tr>
                            <td>健康占い</td>
                            <td>O</td>
                            <td>¥6,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <h2 class="title is-3" style="color: #1B7DFF;">詳細</h2>
        <div class="columns">
            <div class="column is-12">
                {{ $seller->detail }}
            </div>
        </div>

    </section>

    <section class="section container">
        <h2 class="is-size-3 mb-3" style="color: #1B7DFF;">関連する占い師</h2>
          <div class="columns">
            @foreach ($related_sellers as $related_seller)
              <div class="column is-3">
                <div style="background-color: #fce473">
                    <a href='/seller/show/{{ $related_seller->id }}'>
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="../../icon.png" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="content" >
                                    <h2 style="color: #1B7DFF;">{{ $related_seller->nickname, 40, "..." }}</h2>
                                    <p style="color: #1B7DFF;">{{ Str::limit($related_seller->detail, 120, "...") }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
       </div>
    </section>

@endsection

