'use strict';

let selectLink = '';

$(function(){

    $('#linkLinuc101').attr('href','javascript: void(0)'); //aタグのリンク先を無効化する
    $('#linkLinuc102').attr('href','javascript: void(0)');
    $('#linkLinuc201').attr('href','javascript: void(0)');
    $('#linkLinuc202').attr('href','javascript: void(0)');

    //どの項目がクリックされたか判定する 判定には値が格納される(0~)
    //加えてどのセレクタに関数を実行するのかを判定している
    $('a.selectTarget').on('click',function(){

        selectLink = $('a.selectTarget').index(this); //クリックしたアンカータグの行を格納
        let linucNum = 0;
        
        switch(selectLink){
            case 0:
                linucNum = $('#linkLinuc101').data('linuc');
                getParts(linucNum);
            break;
            case 1:
                linucNum = $('#linkLinuc102').data('linuc');
                getParts(linucNum);
            break;
            case 2:
                linucNum = $('#linkLinuc201').data('linuc');
                getParts(linucNum);
            break;
            case 3:
                linucNum = $('#linkLinuc202').data('linuc');
                getParts(linucNum);
            break;
        }   
    });
    
    function getParts(linucNum){ //AjaxでLravel側のブレードを取得してくる
        
        const linucId = linucNum; //対象の試験番号

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: 'GET',
            url: `/quizzes/getindex/${linucId}`,
            dataType: 'html',
            cache: false,
            timeout: 1000
        }).done(function(results){
            //Ajax通信が成功後、サーバからの値を反映させた後にスクリプトを適用させる
            //getScript()でHTMLを反映後に外部スクリプトを適用
            
            const URL = location.href; //現在のURLを取得
            let TargetUrl = URL.replace('quizzes','js/'); //URLは文字列なので、正規表現で文字列を置換

            $('#selectLinuc').html(results);
            $.getScript(`${TargetUrl}indexActiveButton.js`);

        }).fail(function (error){
            $('<div class="text-center"><h1>404 ページが見つかりませんでした</h1></div>'
            ).appendTo('#selectLinuc');
        });
    }
});