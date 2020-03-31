@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>主页</h1>
    <p class="lead">
      你现在看到的是<a href="https://learnku.com/courses/laravel-essential-training">zwz weiboapp试验项目主页
</p>
    <p>
      一切，从这里开始
    </p>

    <p>
      <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
    </p>
</div>

@stop
