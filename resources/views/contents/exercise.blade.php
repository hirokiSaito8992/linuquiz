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
            <div class="card mt-4 mb-5">
                <div class="card-body mb-5">
                    <div class="d-flex flex-column text-center">
                        <p class="mb-0">{{ $value->question_name }}</p>
                        <p class="d-flex justify-content-end text-muted">createBy: {{ $value->user_name }}</p>
                    </div>
                    <form id="{{ 'questionNum'.($index + 1) }}" class="chkBox">
                        @csrf
                        @foreach($value->choices_ans as $k1 => $v1)
                            <div class="form-check mb-2">
                                {{-- <input type="hidden" name="{{ 'question_id'.($v1->question_id) }}" value="{{ $v1->question_id }}"> --}}
                                <input id="{{ 'answers'.$v1->id }}" class="form-check-input checkflag" type="checkbox"  data-ansId={{$v1->id}} data-questionid={{ $v1->question_id }} name="{{ 'questionans' . $v1->question_id . '[]' }}" value="{{ $v1->correct_answer }}">
                                <label class="form-check-label" for="{{ 'answers'.$v1->id }}">
                                    {{$v1->choise}}
                                </label>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
            @endforeach
            <button id="endExercise" class="btn btn-primary btn-lg btn-block mb-5">演習を終了する</button>
        </div>
    </div>
</div>

<script src="{{ mix('js/chkButtonActive.js') }}"></script>
<script src="{{ mix('js/exercise.js') }}"></script>

@endsection


