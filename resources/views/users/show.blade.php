@extends('layouts.app')

@section('title','マイページ')

@include('layouts.navbar')

@section('content')
@include('layouts.error_list')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card my-5">
                <div class="card-body text-left mx-5">
                    <h3 class="mt-2">{{ $users->name }}さんが投稿した問題</h3>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
