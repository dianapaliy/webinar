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
                    post_id = $('#postId').val();
                //$el.hide();
                $.ajax({
                    type:"POST",
                    url: admin_url.ajaxurl,
                    data: {
                        action: 'subscribeOn',
                        post_id: post_id
                    },
                    cache: false
                }).done(function(data){ alert(data); });
                return false;
            });
        }
    };
    $(function() {
        subscribe.init();
    });
});
