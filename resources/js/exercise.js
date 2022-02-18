
'use strict';

let ansItems = new Map();//回答と問題IDを格納する連想配列
let ansResult;

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

    //formタグは問題量によって変化するため、ループさせる
    for(let i = 1; i <= formsNum; i++){
            $(`#questionNum${i}`).find('input[id^="answers"]').on('change',function(){ //特定のformタグでcheckboxのinputタグが変更された場合
            let quesItems =[];//ユーザ回答を格納する配列
            const questionId = 'questionid' + $(this).data('questionid');//問題IDを格納する
            let checkFlag = $(`#questionNum${i}`).find('input[type="checkbox"]:checked').length;//対象の問題でチェックされているか判定するフラグ

            if(checkFlag > 0){// チェックされている場合
                $(`#questionNum${i} input[name^="questionans"]:checked`).each(function(){//チェックボックスが操作された場合のループ処理
                    if(tmp2[i-1] == $(this).data('questionid')){
                        let ques_tmp = [];
                        quesItems.push($(this).val());//チェックボックスの値を格納していく
                        ques_tmp = quesItems.concat();
                        ansItems.set(questionId,ques_tmp);
                        }
                });
            }else{
                ansItems.set(questionId,[]);
            }

            let ansTmp = ansItems.entries(ansItems);
        
            ansTmp = Array.from(ansTmp);
            ansTmp = ansTmp.map(([k,v]) => ({[k]:v}));
            ansResult = ansTmp.reduce((l,r) => Object.assign(l,r), {});
            
        });
    }

    //ボタンを押下したタイミングで、解答を送信するフォームを作成して送信する
    $('#endExercise').on('click',function(){

        //Laravelの使用上CSRF対策でcsrfトークンをPOST通信の際に送る必要がある
        const csrf = document.getElementById('csrf-token').content;

        $('<form/>', {action: "/quizzes/exercise/result" , method: "post"})
        .append($('<input/>',{type: "hidden", name: "_token", value: csrf}))
        .append($('<input/>',{type: "hidden", name: "select_answer", value: JSON.stringify(ansResult)}))
        .appendTo(document.body)
        .submit();

    });
});