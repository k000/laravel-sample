@extends('layouts.myapp')

@section('content')

  @if (Auth::check())

    @if ($postid == $userid)

      <div class="alert alert-danger" role="alert">
          <P>ユーザーの登録情報を削除します。宜しければメールアドレスとパスワードを入力してください。<br />
            削除するとログインができなくなります</P>
      </div>

            <div class="form-area">
                <form action="#" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                  <div class="form-group">
                    <label for="comment" class="controll-label">メールアドレス</label>
                      <input id="email" type="email" class="form-control" name="email"
                       required autofocus>
                  </div>

                  <div class="form-group">
                    <label for="comment" class="controll-label">パスワード</label>
                      <input id="password" type="password" class="form-control" name="password" required>
                  </div>

                  <input type="hidden" name="id" value="#">


                  <!-- submit -->
                  <div class="form-group">
                    <div class="col-sm-offset-0">
                      <button type="submit" class="btn btn-danger">
                        削除する
                      </button>
                    </div>
                  </div>

              </form>

            </div>


    @else
      <p>不正なアクセスです</P>
    @endif

  @else

  <P>不正なアクセスです</P>

  @endif


@endsection
