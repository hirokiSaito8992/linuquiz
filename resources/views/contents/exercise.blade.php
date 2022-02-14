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
                    <form id="{{ 'questionNum'.($index + 1) }}">
                        @csrf
                        @foreach($value->choices_ans as $k1 => $v1)
                            <div class="form-check mb-2">
                                {{-- <input type="hidden" name="{{ 'question_id'.($v1->question_id) }}" value="{{ $v1->question_id }}"> --}}
                                <input class="form-check-input" type="checkbox"  data-questionid={{ $v1->question_id }} name="{{ 'questionans' . $v1->question_id . '[]' }}" value="{{ $v1->correct_answer }}" id="{{ 'answers'.($k1 + 1) }}">
                                <label class="form-check-label" for="{{ 'answers'.$v1->id }}">
                                    {{$v1->choise}}
                                </label>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
            @endforeach
            <button class="btn btn-primary">演習を終了する</button>
        </div>
    </div>
</div>

<script>
    'use strict';

    $(function(){

        const forms = document.forms;
        const formsNum = forms.length - 1;//formタグの個数( -1 はログアウトボタンなので除外するため)

        let tmp = [];
        let tmp2 = [];

        //formタグからdataset.questionidを配列として抽出する
        for (let i = 1, len = forms.length; i < len; i++) {
            for(let j = 1, len2 = forms[i].elements.length; j < len2; j++) {
                tmp.push(forms[i].elements[j].dataset.questionid);
                }
        }

        tmp2 = tmp.concat();
        tmp2 = $.unique(tmp2);
    
        let ansItems = new Map();//回答と問題IDを格納する連想配列
        
        //formタグは問題量によって変化するため、ループさせる
        for(let i = 1; i <= formsNum; i++){
                $('#questionNum' + i).find('input[id^="answers"]').on('change',function(){ //特定のformタグでcheckboxのinputタグが変更された場合
                let quesItems =[];//ユーザ回答を格納する配列
                const questionId = 'questionid' + $(this).data('questionid');//問題IDを格納する
                
                //特定の問題が1つでもチェックされているかを確認するフラグ
                let checkFlag = $('#questionNum' + i).find('input[id^="answers"]').prop('checked');
                
                if(checkFlag){
                    $('input[name^="questionans"]:checked').each(function(){//チェックボックスが操作された場合のループ処理
                        if(tmp2[i-1] == $(this).data('questionid')){
                            let ques_tmp = [];
                            quesItems.push($(this).val());//チェックボックスの値を格納していく
                            ques_tmp = quesItems.concat();
                            ansItems.set(questionId,ques_tmp);
                            }
                    });
                }else{//各問題でチェックが入っていない場合は、Mapオブジェクトの要素から削除する
                    ansItems.delete(questionId);
                }
                console.log(ansItems);
            });
        }
    });
</script>

@endsection


