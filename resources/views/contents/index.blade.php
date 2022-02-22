@extends('layouts.app')

@section('title','メニュー')

@section('content')

@include('layouts.navbar')

@include('layouts.error_list')

<div class="container">
    <div class="card mt-4 text-center">
        <h2 class="card-title mt-3">Linuc 202試験</h2>
        <div class="card-body">
            <form action="{{ route('quizzes.exercise') }}" method="POST">
                @csrf
                @foreach($small_category as $category)       
                    @if($loop->first)
                        <input type="hidden" name="exam-subject" value="{{ $category->large_categories_id }}">
                    @endif
                    @if($category->large_categories_id === 4)
                    <div class="form-group form-check">    
                        <input type="checkbox" class="form-check-input" id="smallcategory{{$category->id}}" name="smallcategories[]" value="{{$loop->iteration}}">
                        <label class="form-check-label" for="smallcategory{{$category->id}}">{{ $category->name }}</label>
                    </div>
                    @endif
                @endforeach
                <button type="submit" class="btn btn-primary rounded-pill">問題スタート</button>
            </form>
        </div>
    </div>
</div>


@endsection