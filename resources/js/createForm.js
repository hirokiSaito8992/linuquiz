'use strict';

const { result } = require("lodash");

$(function(){

    //試験科目について、一つを選んだら、その分野をAjaxで結果を取得してBladeに展開する
    //試験科目については、一つのみしか選択できないように、制限する
    //ラジオボタンで、１科目を選択するように制限する

    let selectExam; //セレクトボックスで選択されたものを格納する
    let selectExamLargeCateId;

    //選択するチェックボックスを1つに制限する処理
    $('input[id^="exam-subjects"]').on('click',function(){

            if($(this).prop('checked')){
                selectExam = $(this).prop('id');
                selectExamLargeCateId = $(this).data('id'); //data-idの中身を取得
            }

            //分野のデータを非同期で取得する
            $.ajax({
                type: 'GET',
                url: `/quizzes/getlargecate/${selectExamLargeCateId}`,//LargeCategoryIdを送信する必要がある
                dataType: 'json',
                cache: false,
                timeout: 1000
            }).done(function(results){
                let options = [];
                $('select#subjectField option').remove();//分野のセレクトの中身を一旦削除する
                $('select#subjectField').append('<option>選択してください</option>');
                
                $.each(results,function(i,value){ //取得結果をもとに、HTMLに挿入するoptionタグを作成する(配列)
                    options.push(`<option value="${value.id}">${value.name}<option>`);
                });
                $('select#subjectField').append(options); //HTMLに挿入する

                $('select#subjectField option').each(function(i,val){//無駄な空白列を削除する
                    $(val).html() == '' ? $(val).remove() : '';
                });
            }).fail(function(res){
                console.log(res);
            });
    });
});