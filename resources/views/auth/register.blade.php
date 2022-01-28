@extends('layouts.app')

@section('title','ユーザ登録')

@include('layouts.navbar')

@section('content')

<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <h2 class="h3 card-title text-center mt-2">ユーザ登録</h2>

            @include('layouts.error_list')

            <div class="card-text">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">ユーザ名</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required placeholder="ユーザ名を入力してください">
                        <small id="name" class="form-text text-muted text-left">英数字3~16文字(登録後の変更はできません)</small>
                    </div>
                    <div class="form-group">
                        <label for="password">パスワード</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" required placeholder="パスワードを入力してください">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">パスワード(確認)</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>

                    <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ユーザ登録</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
