@extends('layouts.app')

@section('title','演習')

@include('layouts.navbar')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="mt-3">
                <h3 class="h1 text-center">問題1</h3>
            </div>
            <div class="card mt-4">
                
                <div class="card-body">
                    <div class="d-flex flex-column">
                        <p class="mb-0">slapd-configのディレクティブについて、正しいものを2つ選べ</p>
                        <p class="d-flex justify-content-end text-muted">Created_By:テストユーザ</p>
                    </div>


                    <form action="" method="POST">
                        {{-- input type:hidden でquestionIDを送信する --}}
                        @csrf
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="answers">
                            <label class="form-check-label" for="answers">
                                includeするファイルを指定するのはolcIncludeディレクティブである
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="answers">
                            <label class="form-check-label" for="answers">
                                属性型を定義するのはolcTypesディレクティブである
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="answers">
                            <label class="form-check-label" for="answers">
                                olcBackendディレクティブで指定できるタイプはbdbとXMLのみである
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="answers">
                            <label class="form-check-label" for="answers">
                                オブジェクトクラスを定義するのはolcObjectClassesディレクティブである
                            </label>
                        </div>
                    </form>

                    <div class="d-flex flex-row mt-5">
                            <a href="#" class="btn btn-primary active d-flex justify-content-start" role="button" aria-pressed="true">戻る</a>
                            <a href="#" class="btn btn-success active d-flex justify-content-end" role="button" aria-pressed="true">進む</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


