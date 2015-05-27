$(function(){
    "use strict";
    var subscribe = {
        init: function() {
            this.onSubscribe();
        },
        onSubscribe: function() {
            var $onSubscr = $('#subscribe');

            $onSubscr.on('click', function() {
                var $el = $(this),
                    $post_id = $('#postId').val();
                //$el.hide();
                $.ajax({
                    type:"POST",
                    ajaxurl : postsubscribe.ajax_url,
                    data:'post_id='+$post_id,
                    action: 'subscribeOn'
                });
                return false;
            });
        }
    };
    $(function() {
        subscribe.init();
    });
});
