/*
******jFormsliderv 1.1.0**************
******jFormslider.js******************
******Created by Harish U Warrier*****
******Created on 08-06-2014***********
******Modified on 09-04-2015**********
******jfs@jformslider.com*************
******www.jformslider.com*************
*/
if("undefined"==typeof jQuery){if("undefined"==typeof console)throw new Error("Sorry!!There is no jquery please get jquery");console.error("Sorry!!There is no jquery please get jquery")}var jf_data=Object(),jf_length=Object(),wrsize=!1;!function($){function isInRange(t,i,e,a){arguments.length<=3&&(a=!1);var r=Math.min.apply(Math,[i,e]),n=Math.max.apply(Math,[i,e]);return a?t>=r&&n>=t:t>r&&n>t}$.fn.jFormslider=function(options){function message(t){var i="",e="";switch(t){case"startup":i="%c Congratulations!!!  You are using %cjFormslider "+version,e="color: green","undefined"!=typeof console&&(is_ie()?console.log("Congratulations!!!  You are using jFormslider "+version):console.log(i,e,"font-style:italic;font-size:15px;font-weight:bold;"+e));break;case"nodataid":console_msg("No `data-id` defined Please define a `data-id` in a li to use function `gotoSlide()`","w");break;case"nojquery":console_msg("Sorry!!There is no jquery please get jquery ","e");break;case"no_cs":console_msg("Sorry!! There is no current slide Some Unknown Error Occured.Please try again","w");break;case"no_ns":console_msg(" Sorry!! There is no next slide","w");break;case"no_ps":console_msg("Sorry!! There is no previous slide","w");break;case"unknown":console_msg(" Sorry!! Some Unknown Error Occured.Please try again","e")}}function validate(t,i,e){var a=t.hasAttr("name")?t.attr("name"):t.hasAttr("id")?t.attr("id"):"",r=get_validation(a,$.trim(i),e);switch($.trim(i)){case"required":return is_empty(t.val())?(r=""==r?t.hasAttr("data-msg")?t.attr("data-msg"):"Please Fill This Field":r,insert_error(t,r,e),change_error(t,i,e),!1):(remove_error(t,e),!0);case"number":return isNaN(t.val())?(r=""==r?t.hasAttr("data-nmsg")?t.attr("data-nmsg"):"Please Enter a valid number":r,insert_error(t,r,e),change_error(t,i,e),!1):(remove_error(t,e),!0);case"email":return emailvalid(t.val())?(remove_error(t,e),!0):(r=""==r?t.hasAttr("data-emailmsg")?t.attr("data-emailmsg"):"Please Enter a Valid Email":r,insert_error(t,r,e),change_error(t,i,e),!1);case"match":var n=get_validation(a,["match","matchwith"],e);return n=""==n?t.hasAttr("data-match")?t.attr("data-match"):"":n.matchwith,r=""==r?t.hasAttr("data-mmsg")?t.attr("data-mmsg"):"Fields must match":r,$.trim($(n).val())!=$.trim(t.val())?(insert_error(t,r,e),change_error(t,i,e),!1):(remove_error(t,e),!0);case"minlength":var s=get_validation(a,["minlength","minmessage"],e);if(""!=s){var d=""==s.minlength?t.hasAttr("data-minlength")?t.attr("data-minlength"):"":s.minlength;r=s.minmessage}else{var d=t.hasAttr("data-minlength")?t.attr("data-minlength"):"";r=""}return r=""==r?t.hasAttr("data-lmsg")?t.attr("data-lmsg"):"Length Must be "+d:r,t.val().length<d?(insert_error(t,r,e),change_error(t,i,e),!1):(remove_error(t,e),!0);case"maxlength":var s=get_validation(a,"maxlength",e);s=""==s?t.hasAttr("data-maxlength")?t.attr("data-maxlength"):"":s;var l=t.val().substr(0,s);return t.val(l),t.val().length>d?(insert_error(t,r,e),change_error(t,i,e),!1):(remove_error(t,e),!0)}}function jf_slide(t,i,e){function a(){var t="#"+n.unique_id;if(n.slide_on_url)try{var i=$(t).get_current_slide().attr("data-id");set_url(i)}catch(e){console_msg(e,"e")}}var r="#"+e.unique_id;e.slide_effect?"vertical"==e.movement?t.find('ul[data-ul="'+r+'"]').animate({marginTop:i+"px"},e.speed,a):"horizontal"==e.movement&&t.find('ul[data-ul="'+r+'"]').animate({marginLeft:i+"px"},e.speed,a):("vertical"==e.movement?t.find('ul[data-ul="'+r+'"]').css("margin-top",i+"px"):"horizontal"==e.movement&&t.find('ul[data-ul="'+r+'"]').css("margin-left",i+"px"),a());var n=e}function get_validation(t,i,e){var a="",r=typeof i;return $.each(e.validations,function(e,n){if("array"==r||"object"==r){if(e==t&&n.hasOwnProperty(i[0])&&n.hasOwnProperty(i[1]))return a=Object(),a[i[0]]=n[i[0]],a[i[1]]=n[i[1]],!1}else if(e==t&&n.hasOwnProperty(i))return a=n[i],!1}),a}function is_json_validation(t,i,e){var a=!0;return a=t.hasOwnProperty(e)&&t[e].hasOwnProperty(i)?!0:!1}function create_element(t,i){var e=document.createElement(t);return"object"==typeof i&&$.each(i,function(t,i){"html"!=t?$(e).attr(t,i):$(e).html(i)}),e}function insert_error(t,i,e){var a=$.trim(e.error_position);if("tooltip"==a||"onelement"==a||""==a){if(0==t.next(".jf_error").length){var r=e.error_class,n="";"tooltip"==a&&(r="jf_tooltip",n="<span class='arrow'></span>");var s=create_element(e.error_element,{"class":r+" jf_error",html:i+n});t.after(s),t.addClass(e.input_error_class),t.focus()}}else"inside"==a?$this.get_current_slide().find(".jf_error").html(i).show():$(".jf_error").html(i).show()}function remove_error(t,i){var e=$.trim(i.error_position);"tooltip"==e||"onelement"==e||""==e?0!=t.next(".jf_error").length&&(t.next(".jf_error").remove(),t.removeClass(i.input_error_class)):"inside"==e?$this.get_current_slide().find(".jf_error").html("").hide():$(".jf_error").html("").hide()}function change_error(t,i,e){t.change(function(){validate(t,i,e)});var a=$.trim(e.error_position);"tooltip"==a&&t.blur(function(){remove_error(t,e)})}function emailvalid(t){var i=/\S+@\S+\.\S+/;return i.test(t)}function splitclass(t){return t.split(/\s+/)}function get_width(t){var i=t.responsive_widths,e=$(window).width(),a=Number(t.width);return $.each(i,function(i,r){var n=r.range;isInRange(e,n[0],n[1],!0)&&(a=r.width,-1!=a.search("%")?(a=Number(a.replace("%","")),a=t.width*a/100):-1!=a.search("px")?a=Number(a.replace("px","")):isNaN(a)&&(a=Number(t.width)))}),a}function is_ie(){return window.navigator.userAgent.indexOf("MSIE")>=0||navigator.userAgent.match(/Trident.*rv\:11\./)?!0:!1}function console_msg(t,i){if("undefined"==typeof console)throw new Error(t);"l"==i?console.log(t):"w"==i?console.warn(t):"e"==i&&console.error(t)}function is_empty(t){return""==$.trim(t)?!0:!1}function set_nav(t,i,e){var a=next_button,r=prev_button,n=errorspan,s="";e.next_button||(a=""),e.prev_button||(r=""),(t.hasAttr("no-next")||t.hasAttr("data-no-next"))&&(a=""),(t.hasAttr("no-prev")||t.hasAttr("data-no-prev"))&&(r=""),(t.hasAttr("no-next-prev")||t.hasAttr("data-no-next-prev"))&&(a=r=""),t.find(error_selector).length>=1&&(n=""),0==i&&(r=""),i==lilength-1&&(a="",s=submit_element);var d='<div class="'+e.nav_class+'">'+r+n+a+s+"</div>";t.hasAttr("data-button-placement")||t.hasAttr("button-placement")?($pl=t.hasAttr("data-button-placement")?t.attr("data-button-placement"):"",$pl=t.hasAttr("button-placement")?t.attr("button-placement"):"","top"==$.trim($pl)?t.prepend(d):t.append(d)):"top"==$.trim(e.button_placement)?t.prepend(d):t.append(d)}function set_url(t){window.location.hash=t}function get_url(){return window.location.hash.replace("#","")}var version="1.1.0",$this=$(this),lilength=$this.find("ul>li").length,randomid="jformslider"+(new Date).valueOf(),uniqid=$(this).hasAttr("id")?$(this).attr("id"):randomid,defaults={width:600,height:300,movement:"horizontal",next_button:!0,prev_button:!0,button_placement:"bottom",submit_button:!0,submit_class:"",next_class:"",prev_class:"",nav_class:"",error_class:"error",input_error_class:"",error_element:"p",error_position:"",texts:{next:"next",prev:"prev",submit:"submit"},ajax_repeat:!1,speed:400,validation:!0,validations:Object(),disabletab:!0,all_next:function(){},all_prev:function(){},submit_handler:function(){},slide_on_url:!1,slide_on_key:!1,unique_id:uniqid,slide_effect:!0,responsive_widths:[{range:[0,360],width:"30%"},{range:[361,640],width:"50%"},{range:[641,767],width:"65%"},{range:[768,991],width:"75%"},{range:[992,1199],width:"100%"}]};if(arguments.length>0){var text=$.extend(defaults.texts,options.texts);options=$.extend(defaults,options),options.texts=text}else options=defaults;"auto"!=options.width&&(options.width=get_width(options)),""==$.trim(options.movement)&&(options.movement="horizontal",options.slide_effect=!1),uniqid="#"+options.unique_id;var msgspan='<div class="'+options.error_class+' jf_error" id="'+randomid+'" style="display:none"></div>',next_button='<a class="'+options.next_class+'" data-next="'+uniqid+'" style="float:right">'+options.texts.next+"</a>",prev_button='<a class="'+options.prev_class+'" data-prev="'+uniqid+'" style="float:left">'+options.texts.prev+"</a>",widthpc=100*lilength,heightpc=100*lilength,width="auto"==options.width?"auto":options.width+"px",height="auto"==options.height?"auto":options.height+"px",errorspan="",errorclasses=splitclass($.trim(options.error_class)),error_selector="."+errorclasses.join("."),submit_element="";jf_data[uniqid]=options,options.submit_button&&(submit_element='<button data-submit="'+uniqid+'" type="submit" class="'+options.submit_class+'"  style="float:right">'+options.texts.submit+"</button>"),is_empty(options.error_element)?errorspan="":"inside"==options.error_position?errorspan="<"+options.error_element+' class="'+options.error_class+' jf_error" style="display:none"></'+options.error_element+">":"outside"==options.error_position&&$(this).after(msgspan);var res_length=$(uniqid+" ul>li").length,res_width=width;"auto"==res_width&&(res_width=100/res_length+"%");var res_height=100/res_length,navigation_div='<div class="'+options.nav_class+'">'+prev_button+errorspan+next_button+"</div>",jformslider_style="<style tag='"+uniqid+"'>"+uniqid+" {width:"+width+";height:"+height+"; overflow:hidden;}[data-ul='"+uniqid+"'] {margin:0px;padding:0px;list-style:none;width:"+widthpc+"%;}[data-li='"+uniqid+"'] {display:inline;float:left;width:"+res_width+";}</style>";"vertical"==options.movement&&(jformslider_style="<style tag='"+uniqid+"'>"+uniqid+" {width:"+width+"  ;height:"+height+" ;overflow:hidden;}[data-ul='"+uniqid+"'] {margin:0px;padding:0px;list-style:none;height:"+heightpc+"% ;}[data-li='"+uniqid+"'] {display:inline;float:left;height:"+height+";width:"+width+";}</style>"),"tooltip"==options.error_position&&(jformslider_style+="<style tag='jftooltip'> .jf_tooltip{z-index: 1050;border: 1px solid #000;position: absolute;margin-top: -66px;background-color: #000;color: #FFF;border-radius: 7px;padding: 3px 5px 5px 5px;text-align: center;}.jf_tooltip .arrow{width:0;height: 0;border-left: 8px solid rgba(0,0,0,0);border-right: 8px solid rgba(0,0,0,0);border-top: 8px solid #0E0D0D;position: absolute;margin-top: 26px;margin-left: -84px;}</style>");var w=width.replace("px",""),h=height.replace("px","");if($('style[tag="'+uniqid+'"]').length<=0&&$("head").append(jformslider_style),$(this).addClass("jformslider"),$(this).find("ul:first").attr("data-ul",uniqid),$(this).find('ul[data-ul="'+uniqid+'"]>li').attr("data-li",uniqid),$(this).find('ul[data-ul="'+uniqid+'"] li:first').hasAttr("data-callbefore")){var func=$(this).find('ul[data-ul="'+uniqid+'"] li:first').attr("data-callbefore");is_empty(func)||eval(func)}$(this).css("display",""),$(this).find('ul[data-ul="'+uniqid+'"]>[data-li="'+uniqid+'"]').each(function(t){set_nav($(this),t,jf_data[uniqid])}),$(this).find('ul[data-ul="'+uniqid+'"]>[data-li="'+uniqid+'"][hide]').hide(),$(this).find('ul[data-ul="'+uniqid+'"]>[data-li="'+uniqid+'"]').each(function(){$(this).find("input,select").last().keydown(function(t){return 9==t.which&&options.disabletab?!1:void 0})}),$("body").keydown(function(t){if(9==t.which&&t.shiftKey){if("INPUT"==t.target.nodeName){var i=t.target.id;$(t.target).parents('ul[data-ul="'+uniqid+'"]>[data-li="'+uniqid+'"]').find("input").each(function(e){return $(this).attr("id")==i?($(t.target).parents('ul[data-ul="'+uniqid+'"]>[data-li="'+uniqid+'"]').find("input:eq("+(e-1)+")").focus(),!1):void 0})}return!1}}),options.slide_on_key&&$("body").keydown(function(t){37==t.which||38==t.which?$(uniqid).prevSlide():(39==t.which||40==t.which)&&$(uniqid).nextSlide()}),$.each(options.validations,function(t,i){for(var e=$("[name="+t+"]"),a=["required","email","match","number"],r=["maxlength","minlength"],n=0;n<a.length;n++)i.hasOwnProperty(a[n])&&(e.attr(a[n],""),2==n&&i.hasOwnProperty("matchwith")&&e.attr("data-match",i.matchwith)),i.hasOwnProperty(r[n])&&e.attr("data-"+r[n],i[r[n]])}),$(this).find("[number]").keydown(function(t){var i=[190,96,97,98,99,100,101,102,103,104,105,109,189,8,46,48,49,50,51,52,53,54,55,56,57,9,16];-1==$.inArray(t.keyCode,i)&&options.validation&&t.preventDefault(),t.keyCode>=65&&t.keyCode<=90&&options.validation&&t.preventDefault()}),$(this).find("[data-maxlength]").keydown(function(){var t=$.trim($(this).val()),i=t.length,e=$(this),a=Number($(this).attr("data-maxlength"));i>a&&e.val(t.substr(0,a))}),$("[ajax-url]").each(function(){var t=$(this).hasAttr("ajax-target")&&""!=$(this).attr("ajax-target")?$(this).attr("ajax-target"):"";""==t&&(0!=$(this).find("[data-next],[data-prev]").length?0==$(this).find(".jformslider_ajax_target").length&&$(this).find("[data-next],[data-prev]").parent().before("<div class='jformslider_ajax_target'></div>"):0==$(this).find(".jformslider_ajax_target").length&&$(this).append("<div class='jformslider_ajax_target'></div>"))}),$this.find('ul[data-ul="'+uniqid+'"]>[data-li="'+uniqid+'"]').each(function(t){var i=randomid+t;$(this).hasAttr("data-id")?""==$(this).attr("data-id")&&$(this).attr("data-id",i):$(this).attr("data-id",i)}),jf_length[uniqid]={width:Number($(uniqid+" li:first").width()),height:Number($(uniqid+" li:first").height())};var wrtimeout;if(wrsize||($(window).resize(function(){clearTimeout(wrtimeout),wrtimeout=setTimeout(function(){$.each(jf_data,function(t,i){if("auto"!=jf_data[t].width&&$(t+',[data-li="'+t+'"]').css("width",get_width(i)),"horizontal"==jf_data[t].movement){var e=Number($(t+">ul").css("margin-left").replace("px","")),a=jf_length[t].width,r=e/a,n=Number($(t+" li:first").width()),s=n*r;jf_slide($(t),s,jf_data[t])}jf_length[t]={width:Number($(t+" li:first").width()),height:Number($(t+" li:first").height())}})},500)}),wrsize=!0),$('[data-prev="'+uniqid+'"]').click(function(t){t.preventDefault(),uniqid=$(this).attr("data-prev"),$(uniqid).prevSlide()}),$('[data-next="'+uniqid+'"]').click(function(t){t.preventDefault(),uniqid=$(this).attr("data-next"),$(uniqid).nextSlide()}),$('[data-submit="'+uniqid+'"]').click(function(t){t.preventDefault();var i=($this.get_current_slide(),!1);options.validation?$this.find("input[required],select[required],textarea[required],input[email],input[data-match],input[data-minlength]").each(function(){var t=$(this).parents('ul[data-ul="'+uniqid+'"]>[data-li="'+uniqid+'"]'),e=t.hasAttr("data-id")?t.attr("data-id"):"";return $(this).hasAttr("required")&&!validate($(this),"required",options)&&$('[data-id="'+e+'"]').is(":visible")?($this.gotoSlide(e),$(this).focus(),i=!1,!1):$(this).hasAttr("email")&&!validate($(this),"email",options)&&$('[data-id="'+e+'"]').is(":visible")?($this.gotoSlide(e),$(this).focus(),i=!1,!1):$(this).hasAttr("data-match")&&!validate($(this),"match",jf_data[uniqid])?($(this).focus(),i=!1,!1):$(this).hasAttr("data-minlength")&&!validate($(this),"minlength",jf_data[uniqid])?($(this).focus(),i=!1,!1):void(i=!0)}):i=!0,$this.find("input[required],select[required],textarea[required],input[email],input[data-match],input[data-minlength]").length<=0&&(i=!0),i&&options.submit_handler()}),$.fn.nextSlide=function(){var current_slide=$(this).get_current_slide(),next_slide=$(this).get_next_slide(),slidestart=!1;if($this=$(this),uniqid=$this.find("ul:first").attr("data-ul"),options=jf_data[uniqid],options.validation?current_slide.find("input[required],select[required],textarea[required],input[email],input[data-match],input[data-minlength]").each(function(){return $(this).hasAttr("required")&&!validate($(this),"required",jf_data[uniqid])?($(this).focus(),slidestart=!1,!1):$(this).hasAttr("email")&&!validate($(this),"email",jf_data[uniqid])?($(this).focus(),slidestart=!1,!1):$(this).hasAttr("data-match")&&!validate($(this),"match",jf_data[uniqid])?($(this).focus(),slidestart=!1,!1):$(this).hasAttr("data-minlength")&&!validate($(this),"minlength",jf_data[uniqid])?($(this).focus(),slidestart=!1,!1):void(slidestart=!0)}):slidestart=!0,current_slide.find("input[required],textarea[required],select[required],input[email],input[data-match],input[data-minlength]").length<=0&&(slidestart=!0),slidestart)if(current_slide.hasAttr("data-callafter")){var func=current_slide.attr("data-callafter");if(!eval(func))return slidestart=!1,!1;slidestart=!0}else slidestart=!0;if(next_slide=$(this).get_next_slide(),slidestart)if(next_slide.hasAttr("data-callbefore")){var func=next_slide.attr("data-callbefore");if(!eval(func))return slidestart=!1,!1;slidestart=!0}else slidestart=!0;if(next_slide.hasAttr("ajax-url")&&slidestart&&!next_slide.hasAttr("ajax-done")&&""!=$.trim(next_slide.attr("ajax-url"))&&(slidestart=!1,next_slide.hasAttr("ajax-beforesubmit")&&""!=next_slide.attr("ajax-beforesubmit")&&eval(next_slide.attr("ajax-beforesubmit")),$.ajax({url:next_slide.attr("ajax-url"),data:next_slide.hasAttr("ajax-data")?JSON.parse(next_slide.attr("ajax-data")):{},type:next_slide.hasAttr("ajax-type")?next_slide.attr("ajax-type"):"POST",success:function(data){var target="";target=next_slide.hasAttr("ajax-target")&&""!=next_slide.attr("ajax-target")?next_slide.attr("ajax-target"):target,""!=target?(target.html(data),options.ajax_repeat||next_slide.attr("ajax-done","")):0!=next_slide.find("[data-next],[data-prev]").length?(next_slide.find(".jformslider_ajax_target").html(data),options.ajax_repeat||next_slide.attr("ajax-done","")):(next_slide.append(data),options.ajax_repeat||next_slide.attr("ajax-done","")),slidestart=!0;var px=Number($this.find('ul[data-ul="'+uniqid+'"]').css("margin-left").replace("px",""));px-=Number($(uniqid+" li:first").width()),"vertical"==options.movement&&(px=Number($this.find('ul[data-ul="'+uniqid+'"]').css("margin-top").replace("px","")),px-=Number($(uniqid+" li:first").height())),options.all_next(),jf_slide($this,px,jf_data[uniqid]),next_slide.hasAttr("ajax-success")&&""!=next_slide.attr("ajax-success")&&eval(next_slide.attr("ajax-success"))},error:function(t,i,e){var a=Number($this.find('ul[data-ul="'+uniqid+'"]').css("margin-left").replace("px",""));a-=Number($(uniqid+" li:first").width()),"vertical"==options.movement&&(a=Number($this.find('ul[data-ul="'+uniqid+'"]').css("margin-top").replace("px","")),a-=Number($(uniqid+" li:first").height())),options.all_next(),jf_slide($this,a,jf_data[uniqid]),console.log(t,i,e)}})),slidestart){var px=Number($(this).find('ul[data-ul="'+uniqid+'"]').css("margin-left").replace("px",""));px-=Number($(uniqid+" li:first").width()),"vertical"==options.movement&&(px=Number($(this).find('ul[data-ul="'+uniqid+'"]').css("margin-top").replace("px","")),px-=Number($(uniqid+" li:first").height())),options.all_next(),jf_slide($(this),px,jf_data[uniqid])}},$.fn.prevSlide=function(){var slideback=!0;$this=$(this),uniqid=$this.find("ul:first").attr("data-ul"),options=jf_data[uniqid];var pre_slide=$(this).get_prev_slide();if(pre_slide.hasAttr("data-callprev")){var func=pre_slide.attr("data-callprev");if(!eval(func))return slideback=!1,!1;slideback=!0}else slideback=!0;if(slideback){if("vertical"==options.movement){var px=Number($(this).find('ul[data-ul="'+uniqid+'"]').css("margin-top").replace("px",""));px+=Number($(uniqid+" li:first").height())}else{var px=Number($(this).find('ul[data-ul="'+uniqid+'"]').css("margin-left").replace("px",""));px+=Number($(uniqid+" li:first").width())}options.all_prev(),jf_slide($(this),px,jf_data[uniqid])}},$.fn.gotoSlide=function(slideid){var count=0,found=!1;$this=$(this),uniqid=$this.find("ul:first").attr("data-ul"),options=jf_data[uniqid];var slidethis=$(this);$('[data-id="'+slideid+'"]').show(),$(this).find('ul[data-ul="'+uniqid+'"]>[data-li="'+uniqid+'"]').filter(":visible").each(function(){return count++,$(this).hasAttr("data-id")&&$(this).attr("data-id")==$.trim(slideid)?(found=!0,!1):void 0});var go_to=(count-1)*Number($(uniqid+" li:first").width());"vertical"==options.movement&&(go_to=(count-1)*Number($(uniqid+" li:first").height()));var px="-"+go_to;if($('[data-id="'+slideid+'"]').hasAttr("data-gscallback")&&eval($('[data-id="'+slideid+'"]').attr("data-gscallback")),found){var gslide=$('[data-id="'+slideid+'"]');gslide.hasAttr("ajax-url")&&!gslide.hasAttr("ajax-done")?""!=gslide.attr("ajax-url")&&(gslide.hasAttr("ajax-beforesubmit")&&""!=gslide.attr("ajax-beforesubmit")&&eval(gslide.attr("ajax-beforesubmit")),$.ajax({url:gslide.attr("ajax-url"),data:gslide.hasAttr("ajax-data")?JSON.parse(gslide.attr("ajax-data")):{},type:gslide.hasAttr("ajax-type")?gslide.attr("ajax-type"):"POST",success:function(data){var target=gslide.hasAttr("ajax-target")&&""!=gslide.attr("ajax-target")?gslide.attr("ajax-target"):"";""!=target?(target.html(data),options.ajax_repeat||gslide.attr("ajax-done","")):0!=gslide.find("[data-next],[data-prev]").length?(gslide.find(".jformslider_ajax_target").html(data),options.ajax_repeat||gslide.attr("ajax-done","")):(gslide.append(data),options.ajax_repeat||gslide.attr("ajax-done","")),slidestart=!0;var px=Number($this.find('ul[data-ul="'+uniqid+'"]').css("margin-left").replace("px",""));px-=Number($(uniqid+" li:first").width()),"vertical"==options.movement&&(px=Number($this.find('ul[data-ul="'+uniqid+'"]').css("margin-top").replace("px","")),px-=Number($(uniqid+" li:first").height())),jf_slide(slidethis,px,jf_data[uniqid]),gslide.hasAttr("ajax-success")&&""!=gslide.attr("ajax-success")&&eval(gslide.attr("ajax-success"))},error:function(t,i,e){console.log(t,i,e),jf_slide(slidethis,px,jf_data[uniqid])}})):jf_slide(slidethis,px,jf_data[uniqid])}else message("nodataid")},options.slide_on_url){var id=get_url();""!=id&&$this.gotoSlide(id)}$.fn.get_slide_data=function(t){var i=Object();$this=$(this),uniqid=$this.find("ul:first").attr("data-ul"),options=jf_data[uniqid],arguments.length<=0&&(t="");var e=$this;return""==!$.trim(t)&&(e=$('[data-id="'+t+'"]')),e.find("input,select,textarea").each(function(){if($(this).is(":radio")){if($(this).hasAttr("name")){var t=$(this).attr("name");i[t]=$("[name="+t+"]:checked").val()}}else if($(this).is(":checkbox")){if($(this).hasAttr("name")){var e=$(this).attr("name"),a=Array();$("[name="+e+"]:checked").each(function(){a.push($(this).val())}),i[e]=a}}else $(this).hasAttr("name")?i[$(this).attr("name")]=$(this).val():i[$(this).attr("id")]=$(this).val()}),i},$.fn.get_current_slide=function(){$this=$(this),uniqid=$this.find("ul:first").attr("data-ul"),options=jf_data[uniqid];var t=Number($this.find('ul[data-ul="'+uniqid+'"]').css("margin-left").replace("px","")),i=-t/Number($(uniqid+" li:first").width());"vertical"==options.movement&&(t=Number($this.find('ul[data-ul="'+uniqid+'"]').css("margin-top").replace("px","")),i=-t/Number($(uniqid+" li:first").height()));var e=-1,a="";return $this.find('ul[data-ul="'+uniqid+'"]>[data-li="'+uniqid+'"]').filter(":visible").each(function(){return e++,e==i?(a=$(this),!1):void 0}),""!=a?a:void message("no_cs")},$.fn.get_next_slide=function(){$this=$(this),uniqid=$this.find("ul:first").attr("data-ul"),options=jf_data[uniqid];var t=Number($this.find('ul[data-ul="'+uniqid+'"]').css("margin-left").replace("px","")),i=-t/Number($(uniqid+" li:first").width());if("vertical"==options.movement){t=Number($this.find('ul[data-ul="'+uniqid+'"]').css("margin-top").replace("px",""));var i=-t/Number($(uniqid+" li:first").height())}var e=-2,a="";return $this.find('ul[data-ul="'+uniqid+'"]>[data-li="'+uniqid+'"]').filter(":visible").each(function(){return e++,e==i?(a=$(this),!1):void 0}),""!=a?a:void message("no_ns")},$.fn.get_prev_slide=function(){$this=$(this),uniqid=$this.find("ul:first").attr("data-ul"),options=jf_data[uniqid];var t=Number($this.find('ul[data-ul="'+uniqid+'"]').css("margin-left").replace("px","")),i=-t/Number($(uniqid+" li:first").width());if("vertical"==options.movement){t=Number($this.find('ul[data-ul="'+uniqid+'"]').css("margin-top").replace("px",""));var i=-t/Number($(uniqid+" li:first").height())}var e=0,a="";return $this.find('ul[data-ul="'+uniqid+'"]>[data-li="'+uniqid+'"]').filter(":visible").each(function(){return e++,e==i?(a=$(this),!1):void 0}),""!=a?a:void message("no_ps")},$.fn.get_slide_details=function(){$this=$(this),uniqid=$this.find("ul:first").attr("data-ul"),options=jf_data[uniqid];var t=Number($(uniqid+">ul").css("margin-left").replace("px","")),i=-t/Number($(uniqid+" li:first").width())+1;if("vertical"==options.movement){t=Number($this.find('ul[data-ul="'+uniqid+'"]').css("margin-top").replace("px",""));var i=-t/Number($(uniqid+" li:first").height())+1}var e=1;e=lilength;var a={current:i,total:e};return a},message("startup")},$.fn.hasAttr=function(t){return void 0!==this.attr(t)}}(jQuery);