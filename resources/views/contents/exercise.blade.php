@extends('layouts.app')

@section('title','演習')

@include('layouts.navbar')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            
            @foreach($question as $index => $value)
            
            <div class="mt-3">
                <h3 class="h1 text-center">{{ '問題'.($index + 1) }}</h3>
            </div>
            <div class="card mt-4">
                
                <div class="card-body mb-5">
                    <div class="d-flex flex-column text-center">
                        <p class="mb-0">{{ $value->question_name }}</p>
                        <p class="d-flex justify-content-end text-muted">createBy: {{ $value->user_name }}</p>
                    </div>
                    <form action="" method="POST">
                        {{-- input type:hidden でquestionIDを送信する --}}
                        @csrf
                        @foreach($choices as $key => $val)
                            @foreach($val as $k => $v)
                            
                            <div class="form-check mb-2">
                                <input type="hidden" name="choise_answer" value="{{ $v->correct_answer }}">
                                <input class="form-check-input" type="checkbox" value="{{ $v->id }}" id="answers">
                                <label class="form-check-label" for="answers">
                                    {{ $v->choise }}
                                </label>
                            </div>
                            
                            @endforeach
                        @endforeach
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection


