@extends('../layouts/myapp')
@section('title',$title)

@section('content')

  <h2>新規投稿</h2>

  <div class="panel-body">



    {{-- 投稿完了時にフラッシュメッセージを表示 --}}
    @if(Session::has('message'))
    	<div class="bg-info">
    		<p>{{ Session::get('message') }}</p>
    	</div>
    @endif

    <!--エラーの表示-->
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




    <!-- フォーム-->
    <div class="form-area">
    <form action="{{ url('posts/new') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="category_id" class="col-sm-3 controll-label">カテゴリー</label>
          <div class="col-sm-6">
              <select type="text" name="category_id" id="category_id" class="form-control">
                @foreach($select_cat as $index => $name)
                  <option value="{{ $name }}">{{ $name }}</option>
                @endforeach
              </select>
          </div>
        </div>

        <div class="form-group">
          <label for="title" class="col-sm-3 controll-label">※タイトル(60文字以内)</label>
          <div class="col-sm-6">
              <input type="text" name="title" id="title" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <label for="post" class="col-sm-3 controll-label">※本文(7000文字以内)</label>
        </div>

        <div class="form-group">

          <div class="col-sm-12">
           <textarea type="text" name="post" id="post" cols="6" rows="14" class="form-control"></textarea>
          </div>
        </div>



        <input type="hidden" name="username" id="username" value="{{ Auth::user()->name }}">



        <div class="form-group">
          <div class="col-sm-offset-1">
            <button type="submit" class="btn btn-default">
              投稿する
            </button>
          </div>
        </div>

    </form>
   </div>
  </div>

@endsection
