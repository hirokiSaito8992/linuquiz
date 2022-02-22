'use strict';

$(function(){
    //まず状態をdisableとしておいて、全てのform要素のチェックボックスに何らかのチェックがあれば変更する
    $('#endExercise').prop('disabled',true);

    const chkBoxCounter = $(".chkBox").length; // formタグの個数をカウント
    let chkFlag = {}; //各問題に回答したかどうかを格納する
    let chkFlagNum = 0; //回答した問題をカウントする

    for(let i = 1; i <= chkBoxCounter; i++){
        
        let questionInput = $(`#questionNum${i}`).find('input[type="checkbox"]');

        questionInput.on('change',function(e){
            e.preventDefault();//チェックを外したときは作動しないようにする

            if($(`#questionNum${i}`).find(".checkflag:checked").length > 0){ //どれか一つでもチェックしていた場合
                chkFlag[`questionNum${i}`] = true; //[formタグの番号 : true]という形でカウンタを格納する
            }else{ //未回答の場合、オブジェクトの中身を削除する
                const delTraget = `questionNum${i}`;
                delete chkFlag[delTraget];
            }
            chkFlagNum = Object.keys(chkFlag).length;

            ((chkFlagNum === chkBoxCounter) ? $('#endExercise').prop('disabled',false) : $('#endExercise').prop('disabled',true));
        });
    }
});
