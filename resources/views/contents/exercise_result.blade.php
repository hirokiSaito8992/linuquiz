@extends('layouts.app')

@section('title','演習結果')

@include('layouts.navbar')

@section('content')

@include('layouts.error_list')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12">
            <div class="card mt-4 mb-5">
                <div class="card-title text-center mt-3 mb-0">
                    <p class="h1">クイズ結果</p>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center pb-0 mb-0">
                        <canvas id="chart" data-correct="{{ $correct }}" data-discorrect="{{ $discorrect }}" style="width:1em; height:0.5em"></canvas>
                    </div>
                    <div class="card-body mt-2 pb-0">
                        <p class="h3 text-primary text-center">正解した問題: {{ $correct }}問/{{ $data_question_total }}問中</p>
                        <p class="h3 text-danger text-center">間違った問題: {{ $discorrect }}問/{{ $data_question_total }}問中</p>
                    </div>
                    <div class="card-body pt-0">
                        <a href="{{ route('quizzes.index') }}" class="d-flex justify-content-center"><button class="btn btn-info btn-lg ">トップに戻る</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ mix('js/chartResult.js') }}"></script>

@endsection