@extends('layouts.app')

@section('title','メニュー')

@section('content')

@include('layouts.navbar')

@include('layouts.error_list')

<div class="container">
    <div class="row">
        <div class="col-7 mx-auto">
            <div class="card mt-4 text-center">
                <div class="card-body">
                    <a href="#" id="linkLinuc101" class="h3 pr-2 selectTarget" data-linuc="1">Linuc101</a>
                    <a href="#" id="linkLinuc102" class="h3 pr-2 selectTarget" data-linuc="2">Linuc102</a>
                    <a href="#" id="linkLinuc201" class="h3 pr-2 selectTarget" data-linuc="3">Linuc201</a>
                    <a href="#" id="linkLinuc202" class="h3 pr-2 selectTarget" data-linuc="4">Linuc202</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="selectLinuc"></div>

<script src="{{ mix('js/selectExam.js') }}" defer></script>

@endsection