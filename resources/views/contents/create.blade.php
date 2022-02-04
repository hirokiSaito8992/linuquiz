@extends('layouts.app')

@section('title','問題を投稿する')

@include('layouts.navbar')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mt-3">
                <div class="card-body pt-0">
                    @include('layouts.error_list')
                    <h5 class="h2 card-title text-center mt-3">問題を投稿する</h5>
                    <div class="card-text mt-3">
                        <form action="{{ route('quizzes.store') }}" method="POST">
                            @csrf
                            <p class="p-1 mb-0 font-weight-bold">試験科目</p>
                            {{-- 順次 Linuc201 Linuc102 等の項目を増やす予定 --}}

                            <div class="form-check-inline mb-0">
                                <input type="checkbox" class="form-check-input" id="exam-subjects" name="exam-subjects" value="4">
                                <label class="form-check-label" for="exam-subjects2">Linuc202</label>
                            </div>

                            {{-- 順次 Linuc201 Linuc102 に応じて分野名もそれに対応したものを用意する --}}

                            <div class="form-group">
                                <label for="subject-field" class="p-1 mt-0 mb-0 font-weight-bold">分野</label>
                                <select class="form-control" id="subject-field" name="subject-field" required>
                                    <option selected value="">何か選択してください</option>
                                    @foreach($small_categories as $small)
                                    <option value="{{ $small->id }}">{{ $small->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="problem-statement" class="font-weight-bold">問題文</label>
                                <textarea class="form-control" id="problem-statement" name="problem-statement" value="{{ old('problem-statement') }}" rows="4" placeholder="100文字以内で入力してください" required></textarea>
                            </div>

                            <p class=" p-1 mb-0 font-weight-bold">選択肢 <span class=" pl-0 pb-0 mb-1 badge badge-danger align-middle">※選択肢1は必ず入力してください</span> </p>
                            @for($i = 0; $i < 4; $i++)
                            <div class="form-group">
                                <input type="text" class="form-control" id="{{ 'choice'.($i + 1)  }}" name="{{ 'choice'.($i + 1) }}" value="{{ old('choice'.($i + 1)) }}"  @if ($i === 0) required  @endif  placeholder="{{'選択肢'.($i + 1)}}">
                            </div>
                            @endfor

                            <p class=" p-1 mb-0 font-weight-bold">解答  <span class=" pl-0 pb-0 mb-1 badge badge-danger align-middle">※1つは必ずチェックしてください</span> </p>
                            @for($i = 0; $i < 4; $i++)
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="{{ 'answer'.($i + 1) }}" name="answers[]" value="{{ 'choice'.($i + 1) }}"  @if($i === 0) checked  @endif>
                                <label class="form-check-label" for="{{ 'answer'.($i + 1) }}">{{ '選択肢'.($i + 1) }}</label>
                            </div>
                            @endfor

                            <div class="form-group">
                                <label for="description" class="font-weight-bold">解説</label>
                                <textarea class="form-control" id="description" name="description"  value="{{ old('description') }}" rows="4" placeholder="100文字以内で入力してください"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-block ">投稿する</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection