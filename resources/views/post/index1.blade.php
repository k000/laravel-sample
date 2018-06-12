<!-- post一覧page -->
@extends('../layouts/myapp')


@section('content')


    <!-- 記事詳細画面　-->
<h2>投稿一覧</h2>

<table class="table table-striped">
  <thead>
    <tr>
      <th>タイトル</th>
      <th>投稿者</th>
      <th>カテゴリー</th>
      <th>投稿日時</th>
  </tr>
  </thead>
  <tbody>

    @foreach($posts as $post)
      <tr>
        <td><a href="{{ action('PostController@detail',['id' => $post->id ]) }}">{{$post->title}}</a></td>
        <td>{{$post->user_name}}</td>
        <td>{{$post->category_id}}</td>
        <td>{{$post->created_at}}</td>
      </tr>
    @endforeach

  </tbody>
</table>

{{ $posts->links() }}




@endsection
