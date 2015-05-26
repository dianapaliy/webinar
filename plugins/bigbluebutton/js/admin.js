$(function(){
    "use strict";
    var admin = {
        init: function() {
            this.changeTable();
        },
        changeTable: function() {
            var $table = $('.meeting-table');
            var $cell = $table.find('td');

            $cell.on('click', function() {
                var $el = $(this);
               if ($el.data('type') === 'title') {
                   $el.find('span').text()
               }
            });
        }
    };
    $(function() {
       admin.init();
    });
});
