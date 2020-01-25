$(function ($) {
    'use strict';

    var checkbox = $('#switch');
    var iframe = $('iframe');

    if (checkbox.prop('checked')) {
        checkbox.prop('checked', false);
    }

    checkbox.click(function (event) {
        var sender = $(event.target);
        sender.prop('disabled', true);
        iframe.fadeTo('slow', sender.prop('checked'), function () {
            sender.prop('disabled', false);
        });
    });
}(jQuery));
