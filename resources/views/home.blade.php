@extends('layouts.myapp')

@section('content')



                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <h2>最近の投稿</h2>

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>タイトル</th>
                          <th>投稿日時</th>
                      </tr>
                      </thead>
                      <tbody>


                        @foreach($posts as $post)

                          <tr>
                            <td><a href="posts/{{$post->id}}">{{ $post->title }}</a></td>
                            <td>{{$post->created_at}}</td>

                          </tr>
                          
                        @endforeach

                      </tbody>
                    </table>

                    {{ $posts->links() }}

@endsection
