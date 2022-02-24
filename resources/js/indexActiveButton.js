'use strict';

const examCheckBox = document.querySelectorAll('input[name="smallcategories[]"]');  //分野選択チェックボックスを取得
const checkIncorrect = document.getElementById('randomExercise');   //間違った問題を出題するチェックボックスを取得
const record = document.getElementById('DisplayedNum'); //表示件数を取得

//ランダム出題のチェックボックスをクリックしたときに発火するイベント
checkIncorrect.addEventListener('click',()=>{
    for(let i = 0; i < examCheckBox.length; i++){
        examCheckBox[i].disabled = false; //分野チェックボックスは初期で有効化にしている
        record.disabled = false;//件数を初期では有効化にしている

        //ランダム出題をチェックしたら分岐する
        checkIncorrect.checked ? (examCheckBox[i].disabled = true , record.disabled = true) : ''; 
    }
});

examCheckBox.forEach(check => check.onchange = checkValue); //配列をひとつずつ展開して、値が変化したら発火するイベント

//分野チェックボックスを1つ以上チェックすると、ランダム出題チェックを無効化する
function checkValue(event){
    let checked = document.querySelectorAll('input[name="smallcategories[]"]:checked');
    checkIncorrect.disabled = false;
    checked.length > 0 ? checkIncorrect.disabled = true : '';
}

