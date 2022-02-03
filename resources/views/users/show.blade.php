@extends('layouts.app')

@section('title','マイページ')

@include('layouts.navbar')

@section('content')
@include('layouts.error_list')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card my-5">
                <div class="card-body text-left mx-5">
                    <h3 class="mt-2">{{ $users->name }}さんが投稿した問題</h3>
                </div>
                <div class="card-body">
                    <div class="card-columns">
                        {{-- リレーションで問題テーブルを取得している --}}
                        @foreach($users->questions as $question)
                        <div class="card">
                            <div class="text-center">
                                <div class="card-header">
                                    Question.{{ $question->id }}
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{$question->name}}
                                    </p>
                                    <button class="btn btn-outline-info btn-sm">編集する</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
