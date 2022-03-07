@extends('layouts.app')

@section('title','トップ')

@section('content')

<div class="jumbotron" 
style=" 
    height:100vh; background-image: url('{{ asset('images/question-mark01.jpeg') }}');
    background-size:cover;
    "
>
<div class="container">
        <h1 class="display-2 font-weight-bold text-white">LinuQuiz</h1>
        <p class="display-5 text-white">このサイトは、Linux技術者認定試験の問題をシェアするサイトです。</p>
        <a class="btn btn-success btn" href="{{ route('register') }}" role="button">ユーザ登録</a>
        <a class="btn btn-success btn" href="{{ route('login') }}" role="button">ログイン</a>
    </div>
</div>

@endsection