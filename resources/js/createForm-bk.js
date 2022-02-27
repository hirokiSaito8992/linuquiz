'use strict';


$(function(){
    //セレクトボックスは、試験科目がチェックされたものに沿って不要なものを削除していく。
    //試験科目がチェックされた(changeイベント)ときのdatasetを取得して、セレクトボックスの内容を決定する

    
    const selectAll = $('#subjectField').find('option[class="optionTarget"]').not(':first').detach();
    
    let ExamNum;
    $('input[id^="exam-subjects"]').on('change',()=>{//試験科目のチェックボックスを何らかチェックをオンオフしたらイベント発火
        ExamNum = $('input[name="exam-subjects"]:checked').val();//チェックしたチェックボックスの値を取得
        console.log(ExamNum);

        let selectSubject;
        if(ExamNum !== undefined ){
            selectSubject = $('#subjectField').find('option[class="optionTarget"]').not(`option[data-LargeId=${ExamNum}]`).detach();
        }else{
            selectAll.prependTo('#subjectField');
        }
        
    });
})