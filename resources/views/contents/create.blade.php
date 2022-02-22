@extends('layouts.app')

@section('title','問題を投稿する')

@include('layouts.navbar')

@section('content')

@include('layouts.error_list')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mt-3">
                <div class="card-body pt-0">
                    <h5 class="h2 card-title text-center mt-3">問題を投稿する</h5>
                    <div class="card-text mt-3">
                        <form action="{{ route('quizzes.store') }}" method="POST">
                            @csrf
                            <p class="p-1 mb-0 font-weight-bold">試験科目</p>
                            
                            @foreach($large_categories as $largeCategory)
                            <div class="form-check-inline mb-0">
                                <input type="checkbox" class="form-check-input" id="exam-subjects{{ $largeCategory->id }}" name="exam-subjects" value="{{ $largeCategory->id }}" @if(old('exam-subjects') == $loop->iteration) checked @endif>
                                <label class="form-check-label" for="exam-subjects{{ $largeCategory->id }}">{{ $largeCategory->name }}</label>
                            </div>
                            @endforeach

                            {{-- 順次 Linuc201 Linuc102 に応じて分野名もそれに対応したものを用意する --}}

                            <div class="form-group">
                                <label for="subject-field" class="p-1 mt-0 mb-0 font-weight-bold">分野</label>
                                <select class="form-control" id="subject-field" name="subject-field">
                                    <option selected value="">選択してください</option>
                                    @foreach($small_categories as $small)
                                    <option value="{{ $small->id }}" @if(old('subject-field') == $small->id) selected @endif>{{ $small->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="problem-statement" class="font-weight-bold">問題文</label>
                                <textarea class="form-control" id="problem-statement" name="problem-statement" rows="4" placeholder="100文字以内で入力してください">{{ old('problem-statement') }}</textarea>
                            </div>

                            <p class=" p-1 mb-0 font-weight-bold">選択肢 <span class=" pl-0 pb-0 mb-1 badge badge-danger align-middle">※選択肢は1つ以上は入力してください</span> </p>
                            @for($i = 0; $i < 4; $i++)
                            <div class="form-group">
                                <input type="text" class="form-control" id="{{ 'choice'.($i + 1)  }}" name="{{ 'choice'.($i + 1) }}" value="{{ old('choice'.($i + 1)) }}"  placeholder="{{'選択肢'.($i + 1)}}">
                            </div>
                            @endfor

                            <p class=" p-1 mb-0 font-weight-bold">解答  <span class=" pl-0 pb-0 mb-1 badge badge-danger align-middle">※1つは必ずチェックしてください</span> </p>
                            @for($i = 0; $i < 4; $i++)
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="{{ 'answer'.($i + 1) }}" name="answers[]" value="{{ 'choice'.($i + 1) }}"  @if($i === 0) checked  @endif>
                                <label class="form-check-label" for="{{ 'answer'.($i + 1) }}">{{ '選択肢'.($i + 1) }}</label>
                            </div>
                            @endfor

                            <button type="submit" class="btn btn-primary btn-block mt-4">投稿する</button>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection