_createCookie = function (cookieName, value, minutes) {
    if (minutes) {
        var date = new Date();
        date.setTime(date.getTime() + minutes * 60 * 1000);
        var expires = "; expires = " + date.toGMTString();
    } else {
        var expires = "";
    }

    document.cookie = cookieName + "=" + value + expires + "; path=/";
};

_accessCookie = function (cookieName) {
    var name = cookieName + '=';
    var allCookieArray = document.cookie.split(';');

    for (var i = 0; i < allCookieArray.length; i++) {
        var temp = allCookieArray[i].trim();
        if (temp.indexOf(name) == 0) return temp.substring(name.length, temp.length);
    }

    return '';
};

_deleteCookie = function (cookieName) {
    document.cookie = cookieName + '=; expires = Thu, 01 Jan 1970 00:00:01 GMT; path=/';
};

var minAmtLimit = parseFloat(_accessCookie('minAllowedAmt'));

jQuery(function($){
    /* var lpInstallmentToken = _accessCookie('lpInstallmentToken');
    if (lpInstallmentToken) {
        $('#lpInstallmentSwitch').prop('checked', true);
        $('.lp-toggle-container .payment-type').removeClass('active');
        $('.lp-toggle-container .payment-type.lp-split-payment').addClass('active');
    } */

    $(document).on('change', '#lpInstallmentSwitch', function() {
        if ($(this).closest('.lp-toggle-container').hasClass('payplan-disabled')) {
            console.log('Testt');
            
            $(this).prop('checked', false);
            var parentLabelElem = $(this).closest('.switch');
            parentLabelElem.addClass("disabled-swt");
            // Reset Toggle Animations;
            setTimeout(function() {
                parentLabelElem.removeClass("disabled-swt");
            }, 610);
            // Add popover;
            if ($(".lp-popover").length == 0) {
                $(".lp-toggle-container").after('<div class="lp-popover-bottom lp-popover"><div class="arrow"></div><div class="popover-body">Split the cost over 4 payments when you spend $' + minAmtLimit +' or more</div></div>');
            }
            return false;
        }
        

        if ($(this).prop('checked')) {
            _createCookie('lpInstallmentToken', '1', 120); /* Set cookie for 2 hours */
            $('.lp-toggle-container .payment-type').removeClass('active');
            $('.lp-toggle-container .payment-type.lp-split-payment').addClass('active');
            $('.limepay-installment-offer__shortcode .limepay-installment-price').addClass('active');
        } else {
            _deleteCookie('lpInstallmentToken');
            $('.lp-toggle-container .payment-type').removeClass('active');
            $('.limepay-installment-offer__shortcode .limepay-installment-price').removeClass('active')
            $('.lp-toggle-container .payment-type.lp-one-time').addClass('active');
        }
    });
});