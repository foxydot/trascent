jQuery(document).ready(function(a){function c(){regexp=RegExp("&lt;!--:"+b+"--&gt;(.*?)&lt;!--:--&gt;","i");a(".item-title").each(function(){void 0==a(this).data("qt-value")&&a(this).data("qt-value",a(this).html());if(matches=a(this).data("qt-value").match(regexp))a(this).html(matches[1]),a(this).closest("li").find(".link-to-original a").text(matches[1])});regexp=RegExp("<\!--:"+b+"--\>(.*?)<\!--:--\>","i");a("input.edit-menu-item-title").each(function(){void 0==a(this).data("qt-value")&&a(this).data("qt-value",
a(this).val());(matches=a(this).data("qt-value").match(regexp))&&a(this).val(matches[1])});a("label.menu-item-title").each(function(){var d=a(this).contents().get(1);void 0==a(this).data("qt-value")&&a(this).data("qt-value",d.nodeValue);if(matches=a(this).data("qt-value").match(regexp))d.nodeValue=" "+matches[1]})}function e(){a("input.edit-menu-item-title").each(function(){a(this).val(a(this).data("qt-value"))})}var f=wpNavMenu.addMenuItemToBottom;wpNavMenu.addMenuItemToBottom=function(a,b){f(a,
b);c()};var g=wpNavMenu.addMenuItemToTop;wpNavMenu.addMenuItemToTop=function(a,b){g(a,b);c()};var b=a("#qt-languages :radio:checked").val();c();a("#qt-languages :radio").change(function(){b=a("#qt-languages :radio:checked").val();c()});a(".submit-add-to-menu").click(function(){b=a("#qt-languages :radio:checked").val();c()});a("input.edit-menu-item-title").live("change",function(){regexp=RegExp("(<\!--:"+b+"--\>)(.*?)(<\!--:--\>)","i");regexp.test(a(this).data("qt-value"))?a(this).data("qt-value",
a(this).data("qt-value").replace(regexp,"$1"+a(this).val()+"$3")):a(this).data("qt-value",a(this).val())});a(".menu-save").click(function(){e()});window.onbeforeunload=function(){e()}});