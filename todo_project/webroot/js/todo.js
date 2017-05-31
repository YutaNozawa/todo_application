/**
 * Created by hagez on 2017/05/30.
 */
$(function() {
    'use strict'

    $('#todos').on('click', '.update_todo', function() {
        //update_todoの親要素、liのデータ属性のdata-idを取得
        var id = $(this).parents('li').data('id');

        //ajaxを処理
        //_ajax.phpを読み込む、idを渡す。処理の種類（後々ajax.phpに記載する予定)
        $.post('_ajax.php', {
            id: id,
            mode: 'update'
            //処理が終わった後の処理
        }, function(res) {
            if (res.state === 1) {
                $('#todo_' + id).find('.todo_title').addClass('done')
            } else {
                $('#todo_' + id).find('.todo_title').removeClass('done');
            }
        })
    });
}