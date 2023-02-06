/*
** nopCommerce custom js functions
*/



function OpenWindow(query, w, h, scroll) {
    var l = (screen.width - w) / 2;
    var t = (screen.height - h) / 2;

    winprops = 'resizable=0, height=' + h + ',width=' + w + ',top=' + t + ',left=' + l + 'w';
    if (scroll) winprops += ',scrollbars=1';
    var f = window.open(query, "_blank", winprops);
}

function setLocation(url) {
    window.location.href = url;
}

function displayAjaxLoading(display) {
    if (display) {
        $('.ajax-loading-block-window').show();
    }
    else {
        $('.ajax-loading-block-window').hide('slow');
    }
}

function displayPopupNotification(message, messagetype, modal) {
    //types: success, error, warning
    var container;
    if (messagetype == 'success') {
        //success
        container = $('#dialog-notifications-success');
    }
    else if (messagetype == 'error') {
        //error
        container = $('#dialog-notifications-error');
    }
    else if (messagetype == 'warning') {
        //warning
        container = $('#dialog-notifications-warning');
    }
    else {
        //other
        container = $('#dialog-notifications-success');
    }

    //we do not encode displayed message
    var htmlcode = '';
    if ((typeof message) == 'string') {
        htmlcode = '<p>' + message + '</p>';
    } else {
        for (var i = 0; i < message.length; i++) {
            htmlcode = htmlcode + '<p>' + message[i] + '</p>';
        }
    }

    container.html(htmlcode);

    var isModal = (modal ? true : false);
    container.dialog({
        modal: isModal,
        width: 350
    });
    if (container.selector == "#dialog-notifications-success") {
        setTimeout(function () {
            container.dialog("close");
        }, 3000);
    }
    if (container.selector == "#dialog-notifications-warning") {
        setTimeout(function () {
            container.dialog("close");
        }, 300000);
    }
    if (container.selector == "#dialog-notifications-error") {
        setTimeout(function () {
            container.dialog("close");
        }, 300000);
    }
}
function displayPopupContentFromUrl(url, title, modal, width) {
    var isModal = (modal ? true : false);
    var targetWidth = (width ? width : 550);
    var maxHeight = $(window).height() - 20;

    $('<div></div>').load(url)
        .dialog({
            modal: isModal,
            position: ['center', 20],
            width: targetWidth,
            maxHeight: maxHeight,
            title: title,
            close: function(event, ui) {
                $(this).dialog('destroy').remove();
            }
        });
}

var barNotificationTimeout;
function displayBarNotification(message, messagetype, timeout) {
    clearTimeout(barNotificationTimeout);

    //types: success, error, warning
    var cssclass = 'success';
    if (messagetype == 'success') {
        cssclass = 'success';
    }
    else if (messagetype == 'error') {
        cssclass = 'error';
    }
    else if (messagetype == 'warning') {
        cssclass = 'warning';
    }
    //remove previous CSS classes and notifications
    $('#bar-notification')
        .removeClass('success')
        .removeClass('error')
        .removeClass('warning');
    $('#bar-notification .content').remove();

    //we do not encode displayed message

    //add new notifications
    var htmlcode = '';
    if ((typeof message) == 'string') {
        htmlcode = '<p class="content">' + message + '</p>';
    } else {
        for (var i = 0; i < message.length; i++) {
            htmlcode = htmlcode + '<p class="content">' + message[i] + '</p>';
        }
    }
    $('#bar-notification').append(htmlcode)
        .addClass(cssclass)
        .fadeIn('slow')
        .mouseenter(function ()
            {
                clearTimeout(barNotificationTimeout);
            });

    $('#bar-notification .close').unbind('click').click(function () {
        $('#bar-notification').fadeOut('slow');
    });

    //timeout (if set)
    if (timeout > 0) {
        barNotificationTimeout = setTimeout(function () {
            $('#bar-notification').fadeOut('slow');
        }, timeout);
    }
}

function htmlEncode(value) {
    return $('<div/>').text(value).html();
}

function htmlDecode(value) {
    return $('<div/>').html(value).text();
}


// CSRF (XSRF) security
function addAntiForgeryToken(data) {
    //if the object is undefined, create a new one.
    if (!data) {
        data = {};
    }
    //add token
    var tokenInput = $('input[name=__RequestVerificationToken]');
    if (tokenInput.length) {
        data.__RequestVerificationToken = tokenInput.val();
    }
    return data;
};

$(document).ready(function () {
    var phoneSelector = '';
    var submitSelector = '';

    if ($('#Phone').length > 0) {
        phoneSelector = '#Phone';
    } else if ($('#Address_PhoneNumber').length > 0) {
        phoneSelector = '#Address_PhoneNumber';
    } else if ($('#ShippingNewAddress_PhoneNumber').length > 0) {
        phoneSelector = '#ShippingNewAddress_PhoneNumber';
    }
    else if ($('#ContactPersonPhone').length > 0) {
        phoneSelector = '#ContactPersonPhone';
    }
    else if ($('#DepositorPhoneNumber').length > 0) {
        phoneSelector = '#DepositorPhoneNumber';
    }
    else if ($('#BillingNewAddress_PhoneNumber').length > 0) {
        phoneSelector = '#BillingNewAddress_PhoneNumber';
    }

    else if ($('#ContactNumber').length > 0) {
        phoneSelector = '#ContactNumber';
    }
    else if ($('#ContactNumberProduct').length > 0) {
        phoneSelector = '#ContactNumberProduct';
    }

    

    if ($('#register-button').length > 0) {
        submitSelector = '#register-button';
    } else if ($('.save-customer-info-button').length > 0) {
        submitSelector = '.save-customer-info-button';
    } else if ($('.save-address-button').length > 0) {
        submitSelector = '.save-address-button';
    } else if ($('#confirm-orderBS').length > 0) {
        submitSelector = '#confirm-orderBS';
    }

    if ($(phoneSelector).length > 0) {
        //validate mobile number on key up
        $(phoneSelector).on('keyup', function (event) {
            var telInput = $(phoneSelector),
                errorMsg = $("#error-msg"),
                validMsg = $("#valid-msg");

            // initialise plugin
            telInput.intlTelInput({
                utilsScript: "/lib/intl-tel-input/js/utils.js"
            });

            var reset = function () {
                telInput.removeClass("error");
                errorMsg.addClass("hide");
                validMsg.addClass("hide");
            };
            reset();

            if ($.trim(telInput.val())) {
                if (telInput.intlTelInput("isValidNumber")) {
                    validMsg.removeClass("hide");
                } else {
                    telInput.addClass("error");
                    errorMsg.removeClass("hide");
                }
            }
        });

        //mobile number country code
        $(phoneSelector).intlTelInput({
            allowDropdown: false,
            initialCountry: "bd",
            nationalMode: false,
            separateDialCode: true,
            utilsScript: "/lib/intl-tel-input/js/utils.js"
        });
    }

});