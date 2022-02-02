@extends('layouts.app')

@section('title','演習')

@include('layouts.navbar')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="mt-3">
                <h3 class="h1 text-center">問題1</h3>
            </div>
            <div class="card mt-4">
                
                <div class="card-body mb-5">
                    <div class="d-flex flex-column text-center">
                        <p class="mb-0">slapd-configのディレクティブについて、正しいものを2つ選べ</p>
                        <p class="d-flex justify-content-end text-muted">Created_By:テストユーザ</p>
                    </div>


                    <form action="" method="POST">
                        {{-- input type:hidden でquestionIDを送信する --}}
                        @csrf
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="1" id="answers">
                            <label class="form-check-label" for="answers">
                                includeするファイルを指定するのはolcIncludeディレクティブである
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="2" id="answers">
                            <label class="form-check-label" for="answers">
                                属性型を定義するのはolcTypesディレクティブである
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="3" id="answers">
                            <label class="form-check-label" for="answers">
                                olcBackendディレクティブで指定できるタイプはbdbとXMLのみである
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="4" id="answers">
                            <label class="form-check-label" for="answers">
                                オブジェクトクラスを定義するのはolcObjectClassesディレクティブである
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


