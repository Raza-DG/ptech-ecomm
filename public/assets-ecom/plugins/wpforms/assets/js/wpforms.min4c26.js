"use strict";var wpforms=window.wpforms||function(s,f,m){var u={init:function(){m(u.ready),m(f).on("load",function(){"function"==typeof m.ready.then?m.ready.then(u.load):u.load()}),u.bindUIActions(),u.bindOptinMonster()},ready:function(){u.clearUrlQuery(),u.setUserIndentifier(),u.loadValidation(),u.loadDatePicker(),u.loadTimePicker(),u.loadInputMask(),u.loadSmartPhoneField(),u.loadPayments(),u.loadMailcheck(),u.loadChoicesJS(),m(".wpforms-randomize").each(function(){for(var e=m(this),t=e.children();t.length;)e.append(t.splice(Math.floor(Math.random()*t.length),1)[0])}),m(".wpforms-page-button").prop("disabled",!1),m(s).trigger("wpformsReady")},load:function(){},clearUrlQuery:function(){var e=f.location,t=e.search;-1!==t.indexOf("wpforms_form_id=")&&(t=t.replace(/([&?]wpforms_form_id=[0-9]*$|wpforms_form_id=[0-9]*&|[?&]wpforms_form_id=[0-9]*(?=#))/,""),history.replaceState({},null,e.origin+e.pathname+t))},loadValidation:function(){void 0!==m.fn.validate&&(m(".wpforms-input-temp-name").each(function(e,t){var r=Math.floor(9999*Math.random())+1;m(this).attr("name","wpf-temp-"+r)}),m(".wpforms-validate input[type=url]").change(function(){var e=m(this).val();if(!e)return!1;"http://"!==e.substr(0,7)&&"https://"!==e.substr(0,8)&&m(this).val("https://"+e)}),m.validator.messages.required=wpforms_settings.val_required,m.validator.messages.url=wpforms_settings.val_url,m.validator.messages.email=wpforms_settings.val_email,m.validator.messages.number=wpforms_settings.val_number,void 0!==m.fn.payment&&m.validator.addMethod("creditcard",function(e,t){e=m.payment.validateCardNumber(e);return this.optional(t)||e},wpforms_settings.val_creditcard),m.validator.addMethod("extension",function(e,t,r){return r="string"==typeof r?r.replace(/,/g,"|"):"png|jpe?g|gif",this.optional(t)||e.match(new RegExp("\\.("+r+")$","i"))},wpforms_settings.val_fileextension),m.validator.addMethod("maxsize",function(e,t,r){var a,o,i=r,r=this.optional(t);if(r)return r;if(t.files&&t.files.length)for(a=0,o=t.files.length;a<o;a++)if(t.files[a].size>i)return!1;return!0},wpforms_settings.val_filesize),m.validator.methods.email=function(e,t){var r=/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e),e=/^(?!\.)(?!.*?\.\.).*[^.]$/.test(e);return this.optional(t)||r&&e},m.validator.addMethod("restricted-email",function(e,r){var a=this,t=m(r),o=t.closest(".wpforms-field"),i=t.closest(".wpforms-form"),s="pending";return!t.val().length||(this.startRequest(r),m.post({url:wpforms_settings.ajaxurl,type:"post",async:!1,data:{action:"wpforms_restricted_email",form_id:i.data("formid"),field_id:o.data("field-id"),email:t.val()},dataType:"json",success:function(e){var t={};(s=e.success&&e.data)?(a.resetInternals(),a.toHide=a.errorsFor(r),a.showErrors()):(t[r.name]=wpforms_settings.val_email_restricted,a.showErrors(t)),a.stopRequest(r,s)}}),s)},wpforms_settings.val_email_restricted),m.validator.addMethod("confirm",function(e,t,r){return e===m(t).closest(".wpforms-field").find("input:first-child").val()},wpforms_settings.val_confirm),m.validator.addMethod("required-payment",function(e,t){return 0<u.amountSanitize(e)},wpforms_settings.val_requiredpayment),m.validator.addMethod("time12h",function(e,t){return this.optional(t)||/^((0?[1-9]|1[012])(:[0-5]\d){1,2}(\ ?[AP]M))$/i.test(e)},wpforms_settings.val_time12h),m.validator.addMethod("time24h",function(e,t){return this.optional(t)||/^(([0-1]?[0-9])|([2][0-3])):([0-5]?[0-9])(\ ?[AP]M)?$/i.test(e)},wpforms_settings.val_time24h),m.validator.addMethod("time-limit",function(e,t){var r=m(t),a=r.data("min-time"),t=r.data("max-time"),r=r.prop("required");return void 0===a||(!(r||!u.empty(e))||(u.compareTimesGreaterThan(t,a)?u.compareTimesGreaterThan(e,a)&&u.compareTimesGreaterThan(t,e):u.compareTimesGreaterThan(e,a)&&u.compareTimesGreaterThan(e,t)||u.compareTimesGreaterThan(a,e)&&u.compareTimesGreaterThan(t,e)))},function(e,t){var r=m(t),t=r.data("min-time"),r=r.data("max-time"),t=t.replace(/^00:([0-9]{2})pm$/,"12:$1pm"),r=r.replace(/^00:([0-9]{2})pm$/,"12:$1pm");return t=t.replace(/(am|pm)/g," $1").toUpperCase(),r=r.replace(/(am|pm)/g," $1").toUpperCase(),wpforms_settings.val_time_limit.replace("{minTime}",t).replace("{maxTime}",r)}),m.validator.addMethod("check-limit",function(e,t){var r=m(t).closest("ul"),t=r.find('input[type="checkbox"]:checked'),r=parseInt(r.attr("data-choice-limit")||0,10);return 0===r||t.length<=r},function(e,t){t=parseInt(m(t).closest("ul").attr("data-choice-limit")||0,10);return wpforms_settings.val_checklimit.replace("{#}",t)}),void 0!==m.fn.intlTelInput&&m.validator.addMethod("smart-phone-field",function(e,t){return!e.match(/[^\d()\-+\s]/)&&(this.optional(t)||m(t).intlTelInput("isValidNumber"))},wpforms_settings.val_phone),m.validator.addMethod("empty-blanks",function(e,t){return void 0===m.fn.inputmask||!(e.indexOf(t.inputmask.opts.placeholder)+1)},wpforms_settings.val_empty_blanks),m.validator.addMethod("required-positive-number",function(e,t){return 0<u.amountSanitize(e)},wpforms_settings.val_number_positive),m.validator.addMethod("us-phone-field",function(e,t){return!e.match(/[^\d()\-+\s]/)&&(this.optional(t)||10===e.replace(/[^\d]/g,"").length)},wpforms_settings.val_phone),m.validator.addMethod("int-phone-field",function(e,t){return!e.match(/[^\d()\-+\s]/)&&(this.optional(t)||0<e.replace(/[^\d]/g,"").length)},wpforms_settings.val_phone),m.validator.addMethod("password-strength",function(e,t){return WPFormsPasswordField.passwordStrength(e,t)>=Number(m(t).data("password-strength-level"))},wpforms_settings.val_password_strength),m(".wpforms-validate").each(function(){var e=m(this),t=e.data("formid"),t=void 0!==f["wpforms_"+t]&&f["wpforms_"+t].hasOwnProperty("validate")?f["wpforms_"+t].validate:"undefined"!=typeof wpforms_validate?wpforms_validate:{errorClass:"wpforms-error",validClass:"wpforms-valid",ignore:":hidden:not(textarea.wp-editor-area), .wpforms-conditional-hide textarea.wp-editor-area",errorPlacement:function(e,t){u.isLikertScaleField(t)?(t.closest("table").hasClass("single-row")?t.closest(".wpforms-field"):t.closest("tr").find("th")).append(e):u.isWrappedField(t)?t.closest(".wpforms-field").append(e):u.isDateTimeField(t)?u.dateTimeErrorPlacement(t,e):u.isFieldInColumn(t)?t.parent().append(e):e.insertAfter(t)},highlight:function(e,t,r){var a=m(e),o=a.closest(".wpforms-field"),e=a.attr("name");("radio"===a.attr("type")||"checkbox"===a.attr("type")?o.find('input[name="'+e+'"]'):a).addClass(t).removeClass(r),o.addClass("wpforms-has-error")},unhighlight:function(e,t,r){var a=m(e),o=a.closest(".wpforms-field"),e=a.attr("name");("radio"===a.attr("type")||"checkbox"===a.attr("type")?o.find('input[name="'+e+'"]'):a).addClass(r).removeClass(t),o.removeClass("wpforms-has-error")},submitHandler:function(o){function e(){var t=m(o),r=t.find(".wpforms-submit"),e=r.data("alt-text"),a=r.get(0).recaptchaID;if(t.data("token")&&0===m(".wpforms-token",t).length&&m('<input type="hidden" class="wpforms-token" name="wpforms[token]" />').val(t.data("token")).appendTo(t),r.prop("disabled",!0),t.find("#wpforms-field_recaptcha-error").remove(),e&&r.text(e),!u.empty(a)||0===a)return grecaptcha.execute(a).then(null,function(e){e=null===e?"":"<br>"+e,t.find(".wpforms-recaptcha-container").append('<label id="wpforms-field_recaptcha-error" class="wpforms-error"> '+wpforms_settings.val_recaptcha_fail_msg+e+"</label>"),r.prop("disabled",!1)}),!1;m(".wpforms-input-temp-name").removeAttr("name"),u.formSubmit(t)}return"function"==typeof wpformsRecaptchaV3Execute?wpformsRecaptchaV3Execute(e):e()},invalidHandler:function(e,t){void 0!==t.errorList[0]&&u.scrollToError(m(t.errorList[0].element))},onkeyup:function(e,t){m(e).hasClass("wpforms-novalidate-onkeyup")||9===t.which&&""===this.elementValue(e)||-1!==m.inArray(t.keyCode,[16,17,18,20,35,36,37,38,39,40,45,144,225])||(e.name in this.submitted||e.name in this.invalid)&&this.element(e)},onfocusout:function(e){var t=!1;m(e).hasClass("wpforms-novalidate-onkeyup")&&!e.value&&(t=!0),(t=!this.checkable(e)&&(e.name in this.submitted||!this.optional(e))?!0:t)&&this.element(e)},onclick:function(e){var t=!1,r=(e||{}).type,a=m(e);-1<["checkbox","radio"].indexOf(r)&&((a=a.hasClass("wpforms-likert-scale-option")?a.closest("tr"):a.closest(".wpforms-field")).find("label.wpforms-error").remove(),t=!0),t&&this.element(e)}};e.validate(t)}))},isFieldInColumn:function(e){return e.parent().hasClass("wpforms-one-half")||e.parent().hasClass("wpforms-two-fifths")||e.parent().hasClass("wpforms-one-fifth")},isDateTimeField:function(e){return e.hasClass("wpforms-timepicker")||e.hasClass("wpforms-datepicker")||e.is("select")&&e.attr("class").match(/date-month|date-day|date-year/)},isWrappedField:function(e){return"checkbox"===e.attr("type")||"radio"===e.attr("type")||"range"===e.attr("type")||"select"===e.is("select")||e.parent().hasClass("iti")||e.hasClass("wpforms-validation-group-member")||e.hasClass("choicesjs-select")||e.hasClass("wpforms-net-promoter-score-option")},isLikertScaleField:function(e){return e.hasClass("wpforms-likert-scale-option")},dateTimeErrorPlacement:function(e,t){var r=e.closest(".wpforms-field-row-block, .wpforms-field-date-time");r.length?r.find("label.wpforms-error").length||r.append(t):e.closest(".wpforms-field").append(t)},loadDatePicker:function(){void 0!==m.fn.flatpickr&&m(".wpforms-datepicker-wrap").each(function(){var a=m(this),e=a.find("input"),t=a.closest(".wpforms-form").data("formid"),r=a.closest(".wpforms-field").data("field-id"),t=void 0!==f["wpforms_"+t+"_"+r]&&f["wpforms_"+t+"_"+r].hasOwnProperty("datepicker")?f["wpforms_"+t+"_"+r].datepicker:void 0!==f["wpforms_"+t]&&f["wpforms_"+t].hasOwnProperty("datepicker")?f["wpforms_"+t].datepicker:"undefined"!=typeof wpforms_datepicker?wpforms_datepicker:{disableMobile:!0};!t.hasOwnProperty("locale")&&"undefined"!=typeof wpforms_settings&&wpforms_settings.hasOwnProperty("locale")&&(t.locale=wpforms_settings.locale),t.wrap=!0,t.dateFormat=e.data("date-format"),1===e.data("disable-past-dates")&&(t.minDate="today");var o=e.data("limit-days"),i=["sun","mon","tue","wed","thu","fri","sat"];o&&""!==o&&(o=o.split(","),t.disable=[function(e){for(var t in o)if(i.indexOf(o[t])===e.getDay())return!1;return!0}]),t.onChange=function(e,t,r){t=""===t?"none":"block";a.find(".wpforms-datepicker-clear").css("display",t)},a.flatpickr(t)})},loadTimePicker:function(){void 0!==m.fn.timepicker&&m(".wpforms-timepicker").each(function(){var e=m(this),t=e.closest(".wpforms-form").data("formid"),r=e.closest(".wpforms-field").data("field-id"),t=void 0!==f["wpforms_"+t+"_"+r]&&f["wpforms_"+t+"_"+r].hasOwnProperty("timepicker")?f["wpforms_"+t+"_"+r].timepicker:void 0!==f["wpforms_"+t]&&f["wpforms_"+t].hasOwnProperty("timepicker")?f["wpforms_"+t].timepicker:"undefined"!=typeof wpforms_timepicker?wpforms_timepicker:{scrollDefault:"now",forceRoundTime:!0};e.timepicker(t)})},loadInputMask:function(){void 0!==m.fn.inputmask&&m(".wpforms-masked-input").inputmask()},loadSmartPhoneField:function(){var a,e,t;void 0!==m.fn.intlTelInput&&(a={},wpforms_settings.gdpr||(a.geoIpLookup=u.currentIpToCountry),wpforms_settings.gdpr&&(e=this.getFirstBrowserLanguage(),t=-1<e.indexOf("-")?e.split("-").pop():""),t=t&&(f.intlTelInputGlobals.getCountryData().filter(function(e){return e.iso2===t.toLowerCase()}).length?t:""),a.initialCountry=wpforms_settings.gdpr&&t?t:"auto",m(".wpforms-smart-phone-field").each(function(e,t){var r=m(t);a.hiddenInput=r.closest(".wpforms-field-phone").data("field-id"),a.utilsScript=wpforms_settings.wpforms_plugin_url+"pro/assets/js/vendor/jquery.intl-tel-input-utils.js",r.intlTelInput(a),r.attr("name","wpf-temp-"+r.attr("name")),r.addClass("wpforms-input-temp-name"),r.on("blur input",function(){!r.intlTelInput("isValidNumber")&&u.empty(f.WPFormsEditEntry)||r.siblings('input[type="hidden"]').val(r.intlTelInput("getNumber"))})}),m(".wpforms-form").on("wpformsBeforeFormSubmit",function(){m(this).find(".wpforms-smart-phone-field").trigger("input")}))},loadPayments:function(){m(".wpforms-payment-total").each(function(e,t){u.amountTotal(this)}),void 0!==m.fn.payment&&(m(".wpforms-field-credit-card-cardnumber").payment("formatCardNumber"),m(".wpforms-field-credit-card-cardcvc").payment("formatCardCVC"))},loadMailcheck:function(){wpforms_settings.mailcheck_enabled&&void 0!==m.fn.mailcheck&&(0<wpforms_settings.mailcheck_domains.length&&(Mailcheck.defaultDomains=Mailcheck.defaultDomains.concat(wpforms_settings.mailcheck_domains)),0<wpforms_settings.mailcheck_toplevel_domains.length&&(Mailcheck.defaultTopLevelDomains=Mailcheck.defaultTopLevelDomains.concat(wpforms_settings.mailcheck_toplevel_domains)),m(s).on("blur",".wpforms-field-email input",function(){var e=m(this),o=e.attr("id");e.mailcheck({suggested:function(e,t){t.address.match(/^xn--/)&&(t.full=punycode.toUnicode(decodeURI(t.full)),a=t.full.split("@"),t.address=a[0],t.domain=a[1]),t.domain.match(/^xn--/)&&(t.domain=punycode.toUnicode(decodeURI(t.domain)));var r=decodeURI(t.address).replaceAll(/[<>'"()/\\|:;=@%&\s]/gi,"").substr(0,64),a=decodeURI(t.domain).replaceAll(/[<>'"()/\\|:;=@%&+_\s]/gi,"");t='<a href="#" class="mailcheck-suggestion" data-id="'+o+'" title="'+wpforms_settings.val_email_suggestion_title+'">'+r+"@"+a+"</a>",t=wpforms_settings.val_email_suggestion.replace("{suggestion}",t),e.closest(".wpforms-field").find("#"+o+"_suggestion").remove(),e.parent().append('<label class="wpforms-error mailcheck-error" id="'+o+'_suggestion">'+t+"</label>")},empty:function(){m("#"+o+"_suggestion").remove()}})}),m(s).on("click",".wpforms-field-email .mailcheck-suggestion",function(e){var t=m(this),r=t.closest(".wpforms-field"),a=t.data("id");e.preventDefault(),r.find("#"+a).val(t.text()),t.parent().remove()}))},loadChoicesJS:function(){"function"==typeof f.Choices&&m(".wpforms-field-select-style-modern .choicesjs-select, .wpforms-field-payment-select .choicesjs-select").each(function(e,t){var r=f.wpforms_choicesjs_config||{},a=m(t).data("search-enabled");r.searchEnabled=void 0===a||a,r.callbackOnInit=function(){var t=this,r=m(t.passedElement.element),a=m(t.input.element),e=r.data("size-class");r.removeAttr("hidden").addClass(t.config.classNames.input+"--hidden"),e&&m(t.containerOuter.element).addClass(e),r.prop("multiple")&&t.getValue(!0).length&&a.addClass(t.config.classNames.input+"--hidden"),r.on("change",function(){var e;r.prop("multiple")&&(0<t.getValue(!0).length?a.addClass(t.config.classNames.input+"--hidden"):a.removeClass(t.config.classNames.input+"--hidden")),(e=r.closest("form").data("validator"))&&e.element(r)})},r.callbackOnCreateTemplates=function(){var r=m(this.passedElement.element);return{option:function(e){var t=Choices.defaults.templates.option.call(this,e);return void 0!==e.placeholder&&!0===e.placeholder&&t.classList.add("placeholder"),r.hasClass("wpforms-payment-price")&&void 0!==e.customProperties&&null!==e.customProperties&&(t.dataset.amount=e.customProperties),t}}},m(t).data("choicesjs",new Choices(t,r))})},bindUIActions:function(){m(s).on("click",".wpforms-page-button",function(e){e.preventDefault(),u.pagebreakNav(this)}),m(s).on("change input",".wpforms-payment-price",function(){u.amountTotal(this,!0)}),m(s).on("input",".wpforms-payment-user-input",function(){var e=m(this),t=e.val();e.val(t.replace(/[^0-9.,]/g,""))}),m(s).on("focusout",".wpforms-payment-user-input",function(){var e=m(this),t=e.val();if(!t)return t;t=u.amountSanitize(t),t=u.amountFormat(t);e.val(t)}),m(s).on("wpformsProcessConditionals",function(e,t){u.amountTotal(t,!0)}),m(".wpforms-field-rating-item").hover(function(){m(this).parent().find(".wpforms-field-rating-item").removeClass("selected hover"),m(this).prevAll().addBack().addClass("hover")},function(){m(this).parent().find(".wpforms-field-rating-item").removeClass("selected hover"),m(this).parent().find("input:checked").parent().prevAll().addBack().addClass("selected")}),m(s).on("change",".wpforms-field-rating-item input",function(){var e=m(this);e.closest(".wpforms-field-rating-items").find(".wpforms-field-rating-item").removeClass("hover selected"),e.parent().prevAll().addBack().addClass("selected")}),m(function(){m(".wpforms-field-rating-item input:checked").change()}),m(s).on("keypress",".wpforms-image-choices-item label",function(e){var t=m(this);if(t.closest(".wpforms-field").hasClass("wpforms-conditional-hide"))return e.preventDefault(),!1;13===e.which&&m("#"+t.attr("for")).click()}),f.document.documentMode&&m(s).on("click",".wpforms-image-choices-item img",function(){m(this).closest("label").find("input").click()}),m(s).on("change",".wpforms-field-checkbox input, .wpforms-field-radio input, .wpforms-field-payment-multiple input, .wpforms-field-payment-checkbox input, .wpforms-field-gdpr-checkbox input",function(e){var t=m(this);if(t.closest(".wpforms-field").hasClass("wpforms-conditional-hide"))return e.preventDefault(),!1;switch(t.attr("type")){case"radio":t.closest("ul").find("li").removeClass("wpforms-selected").find("input[type=radio]").removeProp("checked"),t.prop("checked",!0).closest("li").addClass("wpforms-selected");break;case"checkbox":t.is(":checked")?(t.closest("li").addClass("wpforms-selected"),t.prop("checked",!0)):(t.closest("li").removeClass("wpforms-selected"),t.prop("checked",!1))}}),m(s).on("change",'.wpforms-field-file-upload input[type=file]:not(".dropzone-input")',function(){var e=m(this),t=e.closest("form.wpforms-form").find('.wpforms-field-file-upload input:not(".dropzone-input")'),a=0,r=Number(wpforms_settings.post_max_size),o='<div class="wpforms-error-container-post_max_size">'+wpforms_settings.val_post_max_size+"</div>",i=e.closest("form.wpforms-form").find(".wpforms-submit-container"),s=i.find("button.wpforms-submit"),e=i.prev();t.each(function(){for(var e=m(this),t=0,r=e[0].files.length;t<r;t++)a+=e[0].files[t].size}),r<a?(a=Number((a/1048576).toFixed(3)),r=Number((r/1048576).toFixed(3)),o=o.replace(/{totalSize}/,a).replace(/{maxSize}/,r),e.hasClass("wpforms-error-container")?(e.find(".wpforms-error-container-post_max_size").remove(),e.append(o)):i.before('<div class="wpforms-error-container">{errorMsg}</span></div>'.replace(/{errorMsg}/,o)),s.prop("disabled",!0)):(e.find(".wpforms-error-container-post_max_size").remove(),s.prop("disabled",!1))}),m(s).on("change input",".wpforms-field-number-slider input[type=range]",function(e){var t=m(e.target).siblings(".wpforms-field-number-slider-hint");t.html(t.data("hint").replace("{value}","<b>"+e.target.value+"</b>"))}),m(s).on("keydown",".wpforms-form input",function(e){var t,r;13!==e.keyCode||0!==(r=(t=m(this)).closest(".wpforms-page")).length&&(["text","tel","number","email","url","radio","checkbox"].indexOf(t.attr("type"))<0||(t.hasClass("wpforms-datepicker")&&t.flatpickr("close"),e.preventDefault(),(r.hasClass("last")?r.closest(".wpforms-form").find(".wpforms-submit"):r.find(".wpforms-page-next")).click()))}),m(s).on("keypress",".wpforms-field-number input",function(e){return/^[-0-9.]+$/.test(String.fromCharCode(e.keyCode||e.which))})},entryPreviewFieldPageChange:function(e,t,r){console.warn("WARNING! Obsolete function called. Function wpforms.entryPreviewFieldPageChange has been deprecated, please use the WPFormsEntryPreview.pageChange function instead!"),WPFormsEntryPreview.pageChange(e,t,r)},entryPreviewFieldUpdate:function(e,t){console.warn("WARNING! Obsolete function called. Function wpforms.entryPreviewFieldUpdate has been deprecated, please use the WPFormsEntryPreview.update function instead!"),WPFormsEntryPreview.update(e,t)},scrollToError:function(e){var t;0!==e.length&&(0===(t=0===(t=e.find(".wpforms-field.wpforms-has-error")).length?e.closest(".wpforms-field"):t).length||void 0!==(e=t.offset())&&u.animateScrollTop(e.top-75,750).done(function(){var e=t.find(".wpforms-error").first();"function"==typeof e.focus&&e.focus()}))},pagebreakNav:function(e){var t=m(e),r=!0,a=t.data("action"),o=t.data("page"),i=o,s=o+1,n=o-1,p=t.closest(".wpforms-form"),l=p.find(".wpforms-page-"+o),c=p.find(".wpforms-submit-container"),d=p.find(".wpforms-page-indicator"),e=p.find(".wpforms-recaptcha-container"),o=!1;u.saveTinyMCE(),o=!1!==f.wpforms_pageScroll&&(u.empty(f.wpform_pageScroll)?0!==d.data("scroll")&&75:f.wpform_pageScroll),"next"===a?(void 0!==m.fn.validate&&(l.find(":input").each(function(e,t){m(t).attr("name")&&(m(t).valid()||(r=!1))}),u.scrollToError(l)),r&&(t.trigger("wpformsBeforePageChange",[i=s,p]),l.hide(),(s=p.find(".wpforms-page-"+s)).show(),s.hasClass("last")&&(e.show(),c.show()),o&&u.animateScrollTop(p.offset().top-o,750),t.trigger("wpformsPageChange",[i,p]))):"prev"===a&&(t.trigger("wpformsBeforePageChange",[i=n,p]),l.hide(),p.find(".wpforms-page-"+n).show(),e.hide(),c.hide(),o&&u.animateScrollTop(p.offset().top-o),t.trigger("wpformsPageChange",[i,p])),d&&(o=d.data("indicator"),t=d.data("indicator-color"),"connector"===o||"circles"===o?(d.find(".wpforms-page-indicator-page").removeClass("active"),d.find(".wpforms-page-indicator-page-"+i).addClass("active"),d.find(".wpforms-page-indicator-page-number").removeAttr("style"),d.find(".active .wpforms-page-indicator-page-number").css("background-color",t),"connector"===o&&(d.find(".wpforms-page-indicator-page-triangle").removeAttr("style"),d.find(".active .wpforms-page-indicator-page-triangle").css("border-top-color",t))):"progress"===o&&(t=d.find(".wpforms-page-indicator-page-title"),o=d.find(".wpforms-page-indicator-page-title-sep"),p=i/p.find(".wpforms-page").length*100,d.find(".wpforms-page-indicator-page-progress").css("width",p+"%"),d.find(".wpforms-page-indicator-steps-current").text(i),t.data("page-"+i+"-title")?(t.css("display","inline").text(t.data("page-"+i+"-title")),o.css("display","inline")):(t.css("display","none"),o.css("display","none"))))},bindOptinMonster:function(){s.addEventListener("om.Campaign.load",function(e){u.ready(),u.optinMonsterRecaptchaReset(e.detail.Campaign.data.id)}),m(s).on("OptinMonsterOnShow",function(e,t,r){u.ready(),u.optinMonsterRecaptchaReset(t.optin)})},optinMonsterRecaptchaReset:function(e){var t,r=m("#om-"+e).find(".wpforms-form"),a=r.find(".wpforms-recaptcha-container"),o=r.find(".g-recaptcha");r.length&&o.length&&(e=o.attr("data-sitekey"),t="recaptcha-"+Date.now(),r=a.hasClass("wpforms-is-hcaptcha")?hcaptcha:grecaptcha,o.remove(),a.prepend('<div class="g-recaptcha" id="'+t+'" data-sitekey="'+e+'"></div>'),r.render(t,{sitekey:e,callback:function(){wpformsRecaptchaCallback(m("#"+t))}}))},amountTotal:function(e,r){r=r||!1;var a=m(e).closest(".wpforms-form"),t=u.getCurrency(),e=u.amountTotalCalc(a),e=u.amountFormat(e),o="left"===t.symbol_pos?t.symbol+" "+e:e+" "+t.symbol;a.find(".wpforms-payment-total").each(function(e,t){"hidden"===m(this).attr("type")||"text"===m(this).attr("type")?(m(this).val(o),"text"===m(this).attr("type")&&r&&a.data("validator")&&m(this).valid()):m(this).text(o)})},amountTotalCalc:function(e){var a=0;return m(".wpforms-payment-price",e).each(function(){var e=0,t=m(this),r=t.attr("type");t.closest(".wpforms-field-payment-single").hasClass("wpforms-conditional-hide")||("text"===r||"hidden"===r?e=t.val():"radio"!==r&&"checkbox"!==r||!t.is(":checked")?t.is("select")&&0<t.find("option:selected").length&&(e=t.find("option:selected").data("amount")):e=t.data("amount"),u.empty(e)||(e=u.amountSanitize(e),a=Number(a)+Number(e)))}),a},amountSanitize:function(e){var t=u.getCurrency();return e=e.toString().replace(/[^0-9.,]/g,""),","===t.decimal_sep?("."===t.thousands_sep&&-1!==e.indexOf(t.thousands_sep)?e=e.replace(new RegExp("\\"+t.thousands_sep,"g"),""):""===t.thousands_sep&&-1!==e.indexOf(".")&&(e=e.replace(/\./g,"")),e=e.replace(t.decimal_sep,".")):","===t.thousands_sep&&-1!==e.indexOf(t.thousands_sep)&&(e=e.replace(new RegExp("\\"+t.thousands_sep,"g"),"")),u.numberFormat(e,t.decimals,".","")},amountFormat:function(e){var t,r=u.getCurrency();return e=String(e),","===r.decimal_sep&&-1!==e.indexOf(r.decimal_sep)&&(t=e.indexOf(r.decimal_sep),e=e.substr(0,t)+"."+e.substr(t+1,e.length-1)),","===r.thousands_sep&&-1!==e.indexOf(r.thousands_sep)&&(e=e.replace(/,/g,"")),u.empty(e)&&(e=0),u.numberFormat(e,r.decimals,r.decimal_sep,r.thousands_sep)},getCurrency:function(){var e={code:"USD",thousands_sep:",",decimals:2,decimal_sep:".",symbol:"$",symbol_pos:"left"};return void 0!==wpforms_settings.currency_code&&(e.code=wpforms_settings.currency_code),void 0!==wpforms_settings.currency_thousands&&(e.thousands_sep=wpforms_settings.currency_thousands),void 0!==wpforms_settings.currency_decimals&&(e.decimals=wpforms_settings.currency_decimals),void 0!==wpforms_settings.currency_decimal&&(e.decimal_sep=wpforms_settings.currency_decimal),void 0!==wpforms_settings.currency_symbol&&(e.symbol=wpforms_settings.currency_symbol),void 0!==wpforms_settings.currency_symbol_pos&&(e.symbol_pos=wpforms_settings.currency_symbol_pos),e},numberFormat:function(e,t,r,a){e=(e+"").replace(/[^0-9+\-Ee.]/g,"");var o,i,s,e=isFinite(+e)?+e:0,t=isFinite(+t)?Math.abs(t):0,a=void 0===a?",":a,r=void 0===r?".":r,e=(t?(o=e,i=t,s=Math.pow(10,i),""+(Math.round(o*s)/s).toFixed(i)):""+Math.round(e)).split(".");return 3<e[0].length&&(e[0]=e[0].replace(/\B(?=(?:\d{3})+(?!\d))/g,a)),(e[1]||"").length<t&&(e[1]=e[1]||"",e[1]+=new Array(t-e[1].length+1).join("0")),e.join(r)},empty:function(e){for(var t,r=[void 0,null,!1,0,"","0"],a=0,o=r.length;a<o;a++)if(e===r[a])return!0;if("object"!=typeof e)return!1;for(t in e)if(e.hasOwnProperty(t))return!1;return!0},setUserIndentifier:function(){if((!f.hasRequiredConsent&&"undefined"!=typeof wpforms_settings&&wpforms_settings.uuid_cookie||f.hasRequiredConsent&&f.hasRequiredConsent())&&!u.getCookie("_wpfuuid")){for(var e,t=new Array(36),r="0123456789abcdef",a=0;a<36;a++)t[a]=r.substr(Math.floor(16*Math.random()),1);t[14]="4",t[19]=r.substr(3&t[19]|8,1),t[8]=t[13]=t[18]=t[23]="-",e=t.join(""),u.createCookie("_wpfuuid",e,3999)}},createCookie:function(e,t,r){var a,o="",i="";wpforms_settings.is_ssl&&(i=";secure"),o=r?"-1"===r?"":((a=new Date).setTime(a.getTime()+24*r*60*60*1e3),";expires="+a.toGMTString()):";expires=Thu, 01 Jan 1970 00:00:01 GMT",s.cookie=e+"="+t+o+";path=/;samesite=strict"+i},getCookie:function(e){for(var t=e+"=",r=s.cookie.split(";"),a=0;a<r.length;a++){for(var o=r[a];" "===o.charAt(0);)o=o.substring(1,o.length);if(0===o.indexOf(t))return o.substring(t.length,o.length)}return null},removeCookie:function(e){u.createCookie(e,"",-1)},getFirstBrowserLanguage:function(){var e,t,r=f.navigator,a=["language","browserLanguage","systemLanguage","userLanguage"];if(Array.isArray(r.languages))for(e=0;e<r.languages.length;e++)if((t=r.languages[e])&&t.length)return t;for(e=0;e<a.length;e++)if((t=r[a[e]])&&t.length)return t;return""},currentIpToCountry:function(r){function t(){m.get("https://ipapi.co/jsonp",function(){},"jsonp").always(function(e){var t=e&&e.country?e.country:"";t||(t=-1<(e=u.getFirstBrowserLanguage()).indexOf("-")?e.split("-").pop():""),r(t)})}m.get("https://geo.wpforms.com/v3/geolocate/json").done(function(e){e&&e.country_iso?r(e.country_iso):t()}).fail(function(e){t()})},formSubmit:function(e){e instanceof jQuery||(e=m(e)),u.saveTinyMCE(),e.trigger("wpformsBeforeFormSubmit"),e.hasClass("wpforms-ajax-form")&&"undefined"!=typeof FormData?u.formSubmitAjax(e):u.formSubmitNormal(e)},formSubmitNormal:function(e){var t,r;e.length&&(r=(t=e.find(".wpforms-submit")).get(0).recaptchaID,u.empty(r)&&0!==r||(t.get(0).recaptchaID=!1),e.get(0).submit())},resetFormRecaptcha:function(e){var t,r;e&&e.length&&("undefined"==typeof hcaptcha&&"undefined"==typeof grecaptcha||(t=e.find(".wpforms-recaptcha-container").hasClass("wpforms-is-hcaptcha")?hcaptcha:grecaptcha,r=e.find(".wpforms-submit").get(0).recaptchaID,u.empty(r)&&0!==r&&(r=e.find(".g-recaptcha").data("recaptcha-id")),u.empty(r)&&0!==r||t.reset(r)))},consoleLogAjaxError:function(e){e?console.error("WPForms AJAX submit error:\n%s",e):console.error("WPForms AJAX submit error")},displayFormAjaxErrors:function(e,t){"string"!=typeof t?(t=t&&"errors"in t?t.errors:null,u.empty(t)||u.empty(t.general)&&u.empty(t.field)?u.consoleLogAjaxError():(u.empty(t.general)||u.displayFormAjaxGeneralErrors(e,t.general),u.empty(t.field)||u.displayFormAjaxFieldErrors(e,t.field))):u.displayFormAjaxGeneralErrors(e,t)},displayFormAjaxGeneralErrors:function(r,e){r&&r.length&&(u.empty(e)||("string"!=typeof e?m.each(e,function(e,t){switch(e){case"header":r.prepend(t);break;case"footer":r.find(".wpforms-submit-container").before(t);break;case"recaptcha":r.find(".wpforms-recaptcha-container").append(t)}}):r.find(".wpforms-submit-container").before('<div class="wpforms-error-container">'+e+"</div>")))},clearFormAjaxGeneralErrors:function(e){e.find(".wpforms-error-container").remove(),e.find("#wpforms-field_recaptcha-error").remove()},displayFormAjaxFieldErrors:function(e,t){e&&e.length&&(u.empty(t)||(e=e.data("validator"))&&(e.showErrors(t),e.focusInvalid()))},formSubmitAjax:function(o){if(!o.length)return m.Deferred().reject();var t,e,i=o.closest(".wpforms-container"),s=o.find(".wpforms-submit-spinner");return i.css("opacity",.6),s.show(),u.clearFormAjaxGeneralErrors(o),(e=new FormData(o.get(0))).append("action","wpforms_submit"),e.append("page_url",f.location.href),e={type:"post",dataType:"json",url:wpforms_settings.ajaxurl,data:e,cache:!1,contentType:!1,processData:!1,success:function(e){if(e){if(!e.data||!e.data.action_required)return e.success?(o.trigger("wpformsAjaxSubmitSuccess",e),e.data?e.data.redirect_url?(o.trigger("wpformsAjaxSubmitBeforeRedirect",e),void(f.location=e.data.redirect_url)):void(e.data.confirmation&&(i.html(e.data.confirmation),t=i.find("div.wpforms-confirmation-scroll"),i.trigger("wpformsAjaxSubmitSuccessConfirmation",e),t.length&&u.animateScrollTop(t.offset().top-100))):void 0):(u.resetFormRecaptcha(o),u.displayFormAjaxErrors(o,e.data),void o.trigger("wpformsAjaxSubmitFailed",e));o.trigger("wpformsAjaxSubmitActionRequired",e)}else u.consoleLogAjaxError()},error:function(e,t,r){u.consoleLogAjaxError(r),o.trigger("wpformsAjaxSubmitError",[e,t,r])},complete:function(e,t){var r,a;e.responseJSON&&e.responseJSON.data&&e.responseJSON.data.action_required||((a=(r=o.find(".wpforms-submit")).data("submit-text"))&&r.text(a),r.prop("disabled",!1),i.css("opacity",""),s.hide(),o.trigger("wpformsAjaxSubmitCompleted",[e,t]))}},o.trigger("wpformsAjaxBeforeSubmit"),m.ajax(e)},animateScrollTop:function(e,t,r){return t=t||1e3,r="function"==typeof r?r:function(){},m("html, body").animate({scrollTop:parseInt(e,10)},{duration:t,complete:r}).promise()},saveTinyMCE:function(){"undefined"!=typeof tinyMCE&&tinyMCE.triggerSave()},isFunction:function(e){return!!(e&&e.constructor&&e.call&&e.apply)},compareTimesGreaterThan:function(e,t){e=e.replace(/(am|pm)/g," $1").toUpperCase(),t=t.replace(/(am|pm)/g," $1").toUpperCase();e=Date.parse("01 Jan 2021 "+e);return Date.parse("01 Jan 2021 "+t)<=e}};return u}(document,window,jQuery);wpforms.init();