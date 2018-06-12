@extends('../layouts/myapp')
@section('title',"manko")

@section('content')

    <h2>{{$post->title}}</h2>

    <P>投稿者：<a href="{{ action('UsersController@detail',['id' => $post->user_id]) }}">{{ $name }}</a>さん/カテゴリー:<a href="{{ action('PostController@category',['id' => $post->category_id]) }}">{{ $post->category_id }}</a>/投稿日時：{{$post->created_at}}</P>


    <hr>
      {!! nl2br(e($post->post)) !!}
    <hr>

    <!-- コメントエリア -->
      @if (count($comments) == 0)

        <h4>コメントがありません</h4>

      @else

        <h4>コメント一覧</h4>

      @endif



      @foreach ($comments as $comment)


      <div class="comment-area">
        <small>コメント投稿者<a href="{{ action('UsersController@detail',['id' => $comment->user_id]) }}">{{$comment->name}}</a>さん：{{$comment->created_at}}</small>
        <P>{!! nl2br(e($comment->comment)) !!} </P>
      </div>


      @endforeach




      <!--コメントフォーム-->
      @if (Auth::check())



    @if (count($errors) > 0)
        <!-- Form Error List -->
        <div class="alert alert-danger">
            <strong>入力内容に誤りがあります</strong>

            <br><br>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="form-area">
        <form action="{{ url('posts/'.$post->id ) }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="comment" class="controll-label">コメントする(1000文字以内)</label>
              <textarea type="text" name="comment" id="comment" cols="6" rows="14" class="form-control"></textarea>
          </div>


          <input type="hidden" name="postid" value="{{$post->id}}">


          <!-- submit -->
          <div class="form-group">
            <div class="col-sm-offset-1">
              <button type="submit" class="btn btn-default">
                投稿する
              </button>
            </div>
          </div>

      </form>

    </div>

      @else

      <P>コメントするにはログインしてください</P>


      @endif





@endsection
