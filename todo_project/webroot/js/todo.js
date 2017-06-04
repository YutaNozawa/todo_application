$(function() {
    // update
    $('#todos').on('click', '.update_todo', function() {
        // idを取得
        var id = $(this).parents('li').data('id');
        var mode = 'mode';

        // ajax処理
        $.ajax({
            url: "/todo_application/todo_project/todo/index",
            type: "post",
            data: {
                id : id,
                mode: mode
            },
            success : function(res) {
                if (res.state === '1') {
                    $('#todo_' + id).find('.todo_title').addClass('done');
                } else {
                    $('#todo_' + id).find('.todo_title').removeClass('done');
                }
            },
            error: function() {
                alert('通信失敗');
            }
        });
    });

});