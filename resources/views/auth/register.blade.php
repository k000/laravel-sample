@extends('layouts.myapp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">新規ユーザー登録</div>

                <div class="panel-body">
                  @if(Session::has('message'))
                      <div class="alert alert-info">{{Session::get('message')}}</div>
                  @endif
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">ニックネーム</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">メールアドレス</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">パスワード</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">パスワード(確認)</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <!-- start -->

                        <div class="form-group{{ $errors->has('proud') ? ' has-error' : '' }}">
                            <label for="proud" class="col-md-4 control-label">得意な分野</label>

                            <div class="col-md-6">
                                <input id="proud" type="text" class="form-control" name="proud" value="{{ old('proud') }}" required autofocus>

                                @if ($errors->has('proud'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('proud') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-4 control-label">メッセージ</label>

                            <div class="col-md-6">
                                <textarea rows="5" cols="4" id="message" type="text" class="form-control" name="message" value="{{ old('message') }}" required autofocus></textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>



                        <label for="message" class="col-md-4 control-label"></label>


                        <div class="col-md-6">
                            <label for="rule_agree">
                                <input type="checkbox" id="rule_agreement" name="rule_agreement" value="false"> 利用規約に同意しました<span class="required">※必須</span><br>
                            </label>
                                @if($errors->has('rule_agreement'))
                                    <div class="error">
                                        <p style="text-align: left; color: red;">{{ $errors->first('rule_agreement') }}</p>
                                    </div>
                                @endif
                        </div>


                        <!-- end -->

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    登録する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
