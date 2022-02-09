@extends('layouts.app')

@section('title','メニュー')

@section('content')

@include('layouts.navbar')

<div class="container">
    <div class="card mt-4 text-center">
        <h2 class="card-title mt-3">Linuc 202試験</h2>
        <div class="card-body">
            <form action="{{ route('quizzes.exercise') }}" method="POST">
                @csrf
                <input type="hidden" name="exam-subject" value="4">
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="smallcategory1" name="smallcategories[]" value="1">
                <label class="form-check-label" for="smallcategory1">ネットワーククライアントの管理</label>
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="smallcategory2" name="smallcategories[]" value="2">
                <label class="form-check-label" for="smallcategory2">ドメインネームサーバ</label>
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="smallcategory3" name="smallcategories[]" value="3">
                <label class="form-check-label" for="smallcategory3">HTTPサーバとプロキシサーバ</label>
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="smallcategory4" name="smallcategories[]" value="4">
                <label class="form-check-label" for="smallcategory4">電子メールサービス</label>
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="smallcategory5" name="smallcategories[]" value="5">
                <label class="form-check-label" for="smallcategory5">ファイル共有サービス</label>
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="smallcategory6" name="smallcategories[]" value="6">
                <label class="form-check-label" for="smallcategory6">システムのセキュリティ</label>
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="smallcategory7" name="smallcategories[]" value="7">
                <label class="form-check-label" for="smallcategory7">システムアーキテクチャ</label>
                </div>

                <button type="submit" class="btn btn-primary rounded-pill">問題スタート</button>
            </form>
        </div>
    </div>
</div>


@endsection