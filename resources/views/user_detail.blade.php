@extends('layouts.myapp')

@section('content')




              <ul style="list-style:none;margin:0;padding:0;">
                  <li style="border-bottom:1px dotted #000; padding:0.5em; background: #f4f4f4;">ユーザー名</li>
                  <li style="padding:0.5em;">{{ $name->name}}</li>
                  <li style="border-bottom:1px dotted #000; padding:0.5em; background: #f4f4f4;">得意分野</li>
                  <li style="padding:0.5em;">{!! nl2br(e($name->proud)) !!}</li>
                  <li style="border-bottom:1px dotted #000; padding:0.5em; background: #f4f4f4;">メッセージ</li>
                  <li style="padding:0.5em;">{!! nl2br(e($name->message)) !!}</li>
              </ul>

              <hr>

                  <table class="table table-striped">
                    <caption><strong>{{ $name->name}}</strong>さんの投稿一覧</caption>
                    <thead>
                      <tr class="info">
                        <th>タイトル</th>
                        <th>カテゴリー</th>
                        <th>投稿日時</th>
                    </tr>
                    </thead>
                    <tbody>

                      @foreach($data as $post)
                        <tr>
                          <td><a href="{{ action('PostController@detail', $post->id) }}">{{$post->title}}</a></td>
                          <td>{{$post->category_id}}</td>
                          <td>{{$post->created_at}}</td>
                        </tr>
                      @endforeach

                    </tbody>
                  </table>


@endsection
