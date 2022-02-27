'use strict';

$(function(){

    //試験科目について、一つを選んだら、ほかは使えないように処理を行う
    //セレクトボックスは、試験科目がチェックされたものに沿って不要なものを削除していく。
    //試験科目がチェックされた(changeイベント)ときのdatasetを取得して、セレクトボックスの内容を決定する

    let ExamNum;
    let selectSubject;
    let checkValue = 0;
    //チェックボックスを制限するイベントを記載
    $(".exam_item input").on('change',(e)=>{
        if($('.exam_item').find('input[id^="exam-subjects"]').is(':checked')){
            checkValue = e.target.id;
            console.log(checkValue);
            
        }
    })



    $('input[id^="exam-subjects"]').on('change',()=>{//試験科目のチェックボックスを何らかチェックをオンオフしたらイベント発火

        ExamNum = $('input[name="exam-subjects"]:checked').val();//チェックしたチェックボックスの値を取得

        ExamNum !== undefined ? selectSubject = $('#subjectField').find('option[class="optionTarget"]').not(`option[data-LargeId=${ExamNum}]`).detach()
                                : selectSubject.prependTo($('#subjectField'));
    });
});