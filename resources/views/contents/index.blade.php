@extends('layouts.app')

@section('title','メニュー')

@section('content')

@include('layouts.navbar')

<div class="container">
    <div class="card mt-4 text-center">
        <h2 class="card-title mt-3">Linuc 202試験</h2>
        <div class="card-body">
            <form>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">ネットワーククライアントの管理</label>
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">ドメインネームサーバ</label>
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">HTTPサーバとプロキシサーバ</label>
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">電子メールサービス</label>
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">ファイル共有サービス</label>
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">システムのセキュリティ</label>
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">システムアーキテクチャ</label>
                </div>

                <button type="submit" class="btn btn-primary rounded-pill">問題スタート</button>
            </form>
        </div>
    </div>
</div>


@endsection