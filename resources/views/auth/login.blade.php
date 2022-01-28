@extends('layouts.app')

@section('title','ログイン')

@include('layouts.navbar')

@section('content')

<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <h2 class="h3 card-title text-center mt-2">ログイン</h2>

            @include('layouts.error_list')

            <div class="card-text">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="username">ユーザ名</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required placeholder="ユーザ名を入力してください">
                        
                    </div>
                    <div class="form-group">
                        <label for="password">パスワード</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" required placeholder="パスワードを入力してください">
                    </div>

                    <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ログイン</button>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
