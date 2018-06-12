<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;

            }



            .full-height {
                height: 5vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            button a{
              color:#000;
            }
            button a:hover{
              text-decoration: none;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .toparea{
              width:100%;
              display: block;
            }
            .contentarea{
              width: 100%;
              display: block;
            }

            img {
                 -webkit-filter: brightness(30%);
                 -moz-filter: brightness(30%);
                 -o-filter: brightness(30%);
                 -ms-filter: brightness(30%);
                 filter: brightness(30%);
                 width:100%;
            }
            .col-xs-12 {
              padding:0;
            }

            .col-sm-12{
              padding:0;
            }

            .navbar{
              margin:0;
            }

            .top-container{
              position: relative;
            }

            .top-container .top-con{
              font-size:32px;
              position: absolute;
              color:#F2F2F2;
              text-shadow:2px 4px 8px #000000;
              top:0;
              padding-left: 43px;
            }

            .top-container .top-con .topbtn{
              position: relative;
              top:0
              text-align: left;
            }




            .blackarea{
              background:#424242;
              color:#fff;
              padding:200px 250px;
              font-size:26px;
            }
            .whitearea{
              background:#D8D8D8;
              color:#000;
              padding:200px 250px;
              font-size:26px;
            }


            footer{
              color:#fff;
             padding:30px 0;
             min-height: 100px;
             width:100%;
             background:#1C1C1C;
             bottom: 0;
             margin-bottom: 0;
            }
            footer ul{
              list-style: none;
            }
            footer a{
              text-decoration: none;
              color:#fff;
            }


            /* 画面サイズ中 */
            @media screen and (max-width: 910px) {
                img{
                  height: 300px;
                }
                .top-container .top-con{
                  font-size:24px;
                  position: absolute;
                  font-weight: bold;
                  top:0;
                  left:0;
                }
                .top-container .top-con h1,h2{
                  font-size:17px;
                  text-shadow:none;
                  font-weight: bold;
                  top:0;
                  left:0;
                }

                .blackarea{
                  font-size:18px;
                  padding:150px 50px;
                }
                .whitearea{
                  font-size:18px;
                  padding:150px 50px;
                }

              .title {
                  font-size: 44px;
              }

            }
            /* 画面サイズ小 */
            @media screen and (max-width: 480px) {

              .top-container .top-con{
                font-size:15px;

                position: absolute;
                text-shadow:none;
                font-weight: bold;
                top:0;
                left:0;
              }
              .top-container .top-con h1,h2{
                font-size:17px;

                text-shadow:none;
                font-weight: bold;
                top:0;
                left:0;
              }

              .blackarea{
                font-size:18px;
                padding:100px 50px;
              }
              .whitearea{
                font-size:18px;
                padding:100px 50px;
              }
              .title {
                  font-size: 24px;
              }




            }


        </style>
    </head>
    <body>

      <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
              <div class="navbar-header">

                  <!-- Collapsed Hamburger -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                      <span class="sr-only">Toggle Navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

                  <!-- Branding Image -->
                  <a class="navbar-brand" href="{{ url('/') }}">
                      title
                  </a>
              </div>

              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav">
                      &nbsp;
                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-right">
                      <!-- ログインユーザーじゃない場合 -->
                      @if (Auth::guest())
                          <li><a href="{{ route('login') }}">ログイン</a></li>
                          <li><a href="{{ route('register') }}">新規ユーザー登録</a></li>
                          <li><a href="{{ action('PostController@index') }}">投稿一覧</a></li>
                      <!-- ログインユーザーの場合　-->
                      @else
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">
                                  <li>
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          ログアウト
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                                  <li>
                                    <a href="{{ action('HomeController@index') }}">ユーザートップ</a>
                                    <a href="{{ action('PostController@new') }}">新規投稿</a>
                                    <a href="{{ action('PostController@index') }}">投稿一覧</a>
                                  </li>
                              </ul>
                          </li>
                      @endif
                  </ul>
              </div>
          </div>
      </nav>


      <!-- top image -->
      <div class="top-container">
        <div class="col-xs-12 col-sm-12">
          <img alt="GeekGrayトップページ" src="{{ asset('/img/topimg.jpg') }}" >

          <div class="top-con">
            <h1>title</h1>
            <h2>tttt</h2>

            <div class="topbtn">
              <button type="button" class="btn btn-info btn-lg" style="opacity:0.5;"><a href="{{ action('PostController@index') }}">投稿一覧を見る</a></button>
            </div>

          </div>

        </div>



      </div>



      <div class="whitearea">
              <div class="title m-b-md text-center">
                  利用規約
              </div>

                <P>
                  ttttt
                </P>



                <div class="title m-b-md text-center">
                    <button type="button" class="btn btn-active btn-lg"><a href="{{ route('register') }}">新規ユーザー登録</a></button>
                </div>


      </div>


        <div class="blackarea">
          <div class="title m-b-md text-center">
              Know the facts
          </div>
            <P>
              ttttt

            </P>
        </div>


        <footer>
             <div class="container">
               <div class="col-xs-6 col-sm-6 headerNavBtn">
                    <P class="text-center">利用規約</p>
                    Copyright © 2018 title. All Rights Reserved.
              </div>

              <div class="col-xs-6 col-sm-6 headerNavBtn">

              </div>

             </div>
        </footer>









<script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
