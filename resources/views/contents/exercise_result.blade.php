@extends('layouts.app')

@section('title','演習結果')

@include('layouts.navbar')

@section('content')

@include('layouts.error_list')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12">
            <div class="card mt-4 mb-5">
                <div class="card-title text-center">
                    <p class="h1 mt-3">演習結果</p>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                        <canvas id="chart" class="bg-success w-75" data-likes="3" data-dislike="2"></canvas>
                    </div>
                    <div class="card-body my-5">
                        <p class="h3 text-primary text-center">正解した問題: {{ $correct }}問/{{ $data_question_total }}問</p>
                        <p class="h3 text-danger text-center">間違った問題: {{ $discorrect }}問/{{ $data_question_total }}問</p>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('quizzes.index') }}" class="d-flex justify-content-center"><button class="btn btn-info btn-lg ">トップに戻る</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection