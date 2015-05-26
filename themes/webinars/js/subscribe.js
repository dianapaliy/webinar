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
                    url:"../wp-admin/admin-ajax.php",
                    data:'post_id='+$post_id
                });
                return false;
            });
        }
    };
    $(function() {
        subscribe.init();
    });
});
