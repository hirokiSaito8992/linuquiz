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
                        @foreach($users->questions as $index => $question)
                        <div class="card">
                            <div class="text-center">
                                <div class="card-header">
                                    Question.{{ $index + 1 }}
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{$question->name}}
                                    </p>
                                    <a href="{{ route('quizzes.edit',$question->id) }}" class="btn btn-outline-info btn-sm px-1" tabindex="-1" role="button" aria-disabled="true"><p class="h6 mb-0">問題を編集する</p></a>
                                    <div>
                                        <form action="{{ route('quizzes.destroy',['question_id' => $question->id]) }}" method="POST" id="delete_{{ $question->id }}">
                                            @csrf
                                            <a href="#" class="btn btn-outline-danger btn-sm px-1" data-id="{{ $question->id }}" onclick="deletePost(this);"><p class="h6 mb-0">問題を削除する</p></a>
                                        </form>
                                    </div>
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

<script>

function deletePost(e){
    'use strict';
    if(confirm('本当に削除してもいいですか?')){
        document.querySelector('#delete_' + e.dataset.id).submit();
    }
}

</script>


@endsection
