!function(){var tlog=window.tlog||[],body=document.getElementsByTagName("body")[0],pageId=body.getAttribute("data-page-id")||"",dataInfo=body.getAttribute("data-info")||"",domain=document.domain.split(".").slice(-2).join(".")+(location.port?":"+location.port:""),__tlogPreSet=window.__tlogPreSet||{},cookie={get:function(name){var i,c,ret,nameEQ=name+"=",ca=document.cookie.split(";");for(i=0;i<ca.length;i++){for(c=ca[i];" "==c.charAt(0);)c=c.substring(1,c.length);if(0==c.indexOf(nameEQ)){try{ret=decodeURIComponent(c.substring(nameEQ.length,c.length))}catch(e){ret=unescape(c.substring(nameEQ.length,c.length))}return ret}}return null},set:function(name,value,days,path,domain,secure){var expires,date;"number"==typeof days?(date=new Date,date.setTime(date.getTime()+1e3*days),expires=date.toGMTString()):expires="string"==typeof days?days:!1,document.cookie=name+"="+encodeURIComponent(value)+(expires?";expires="+expires:"")+(path?";path="+path:"")+(domain?";domain="+domain:"")+(secure?";secure":"")}};tlog={pug:function(){var param,url,hash,i,name,val,reg,omatch;if(arguments&&"object"==typeof arguments[0]){param=arguments[0],url=arguments[1]||window.location.href,url=url.split("#"),hash=url[1]||"",url=url[0];for(i in param)param.hasOwnProperty(i)&&(name=i,val=param[i],reg=new RegExp("([\\?&#])(("+name+"=)([^&#]+))(&?)","i"),omatch=url.match(reg),0!==val&&!val&&omatch&&(omatch[5]&&omatch[2]?url=url.replace(omatch[2]+"&",""):omatch[1]&&omatch[2]?url=url.replace(omatch[0],""):""),0!==val&&!val||omatch||(url+=url.indexOf("?")>-1?"&"+name+"="+val:"?"+name+"="+val),((0===val||val)&&0===omatch||omatch&&val!=omatch[4])&&(url=url.replace(omatch[2],omatch[3]+val)));return hash&&(url+="#"+hash),arguments[1]||window.location.href==url?url:void(window.location.href=url)}},gup:function(name,url){var reg=new RegExp("[?&#]"+name+"=([^&#]+)","i"),ret=reg.exec(url);return ret?decodeURIComponent(ret[1]):""},stacks:"[object Array]"===Object.prototype.toString.call(tlog)?tlog:[],start:+new Date,cache:{url:encodeURIComponent(window.location.href),refer:encodeURIComponent(window.document.referrer),resolution:window.screen?window.screen.width+"X"+window.screen.height:"0X0"},src:"//statistic."+domain+"/statisticPlatform/tLog?page_id="+pageId+(dataInfo?"&data_info="+dataInfo:""),timer:"",mscid:{},domain:domain,path:"/",defaultcode:"00000000",getTime:function(){return+new Date},load:function(source){var src=this.pug({t:this.getTime()},source),image=new Image;image.src=src},uid:function(){return(+new Date+Math.random()).toFixed(2)},toToday:function(){var date=new Date;return date.setHours(0,0,0,0),864e5-(this.getTime()-date.getTime())},getTlog:function(){return cookie.get("__tlog")||""},update:function(){var tmp,n_imscid,n_mscid,sessionId,if_mscid,il_mscid,ef_mscid,el_mscid,__tlog=this.getTlog(),url=window.location.href;return __tlog?(tmp=__tlog.split("|"),n_imscid=this.gup("imscid",url),n_mscid=this.gup("mscid",url),sessionId=tmp[0],if_mscid=tmp[1],il_mscid=tmp[2],ef_mscid=tmp[3],el_mscid=tmp[4],n_imscid&&il_mscid!==n_imscid&&(il_mscid=n_imscid),n_mscid&&ef_mscid!==n_mscid&&(el_mscid=n_mscid),cookie.set("__tlog",[sessionId,if_mscid,il_mscid,ef_mscid,el_mscid].join("|"),this.timer,this.path,this.domain),this.mscid={sessionId:sessionId,if_mscid:if_mscid,il_mscid:il_mscid,ef_mscid:ef_mscid,el_mscid:el_mscid},void 0):void this.defaultSet("update")},defaultSet:function(update){var sessionId=this.uid(),url=window.location.href,defaultcode=this.defaultcode,if_mscid=update?this.gup("imscid",url)||defaultcode:defaultcode,il_mscid=if_mscid,ef_mscid=update?this.gup("mscid",url)||this.defaultcode:defaultcode,el_mscid=ef_mscid;cookie.set("__tlog",[sessionId,if_mscid,il_mscid,ef_mscid,el_mscid].join("|"),this.timer,this.path,this.domain),this.mscid={sessionId:sessionId,if_mscid:if_mscid,il_mscid:il_mscid,ef_mscid:ef_mscid,el_mscid:el_mscid}},push:function(){var user_id,user_kind,__session_seq,__uv_seq,param,type,id,src,obj;if(arguments.length){switch(this.getTlog()||this.defaultSet("update"),this.isnew?(this.src=this.pug({isnew:1},this.src),delete this.isnew):this.src=this.pug({isnew:""},this.src),user_id=cookie.get("user_id")||0,user_kind=cookie.get("user_kind")||9,__session_seq=cookie.get("__session_seq")||0,__uv_seq=cookie.get("__uv_seq")||0,param=arguments[0].split(":"),type=param[0],id=param[1],src=this.pug(this.cache,this.src),obj={},src=this.pug(this.mscid,src),type){case"p":__session_seq=__session_seq-0+1,__uv_seq=__uv_seq-0+1,cookie.set("__session_seq",__session_seq,this.timer,this.path,this.domain),cookie.set("__uv_seq",__uv_seq,Math.round(this.toToday()/1e3),this.path,this.domain),obj={type:"p"};break;case"c":obj={c_id:id,type:"c"};break;case"s":obj={s_id:id,type:"s"};break;default:obj={v_stay_time:this.getTime()-this.start,type:"v"}}src=this.pug(obj,src),src=this.pug({user_id:user_id,user_kind:user_kind,session_seq:__session_seq,uv_seq:__uv_seq},src),this.load(src)}},init:function(){var arr,i,l,__uuid=cookie.get("__uuid"),__nnn_bad_na_=cookie.get("__nnn_bad_na_");for(__nnn_bad_na_&&(this.src=this.pug({__nnn_bad_na_:__nnn_bad_na_},this.src)),this.src=this.pug(__tlogPreSet,this.src),__uuid||(__uuid=this.uid(),cookie.set("__uuid",__uuid,63072e4,this.path,this.domain),this.isnew=1),this.cache.uuid=__uuid,this.update(),window.onbeforeunload=function(){tlog.push("v")},arr=this.stacks,this.push("p"),i=0,l=arr.length;l>i;i++)this.push(arr[i])}},tlog.init(),window.tlog=tlog}();var Stat;this.Stat||(Stat=function(){function generateUUID(length){var i,id=(new Date).getTime().toString();for(i=0;length>i;i++)id+=Math.floor(10*Math.random());return id}function isDefined(property){return"undefined"!=typeof property}function addEventListener(element,eventType,eventHandler,useCapture){return element.addEventListener?(element.addEventListener(eventType,eventHandler,useCapture),!0):element.attachEvent?element.attachEvent("on"+eventType,eventHandler):void(element["on"+eventType]=eventHandler)}function beforeUnloadHandler(){var _active,stat,_hack=!0;try{window.attachEvent&&!window.opera&&(_active=window.document.activeElement,0===(_active.href||"").indexOf("javascript:")&&(_hack=!1))}catch(err){}if(_hack&&isDefined(expireDateTime))try{stay_time=Date.parse(new Date)-load_time,stat=Stat.getTracker("//statistic.liepin.com/statVisit.do",1),stat.trackPageView()}catch(err){}}function loadHandler(){if(!hasLoaded){hasLoaded=!0;for(var i=0;i<registeredOnLoadHandlers.length;i++)registeredOnLoadHandlers[i]()}return!0}function addReadyListener(){documentAlias.addEventListener?addEventListener(documentAlias,"DOMContentLoaded",function(){documentAlias.removeEventListener("DOMContentLoaded",arguments.callee,!1),loadHandler()}):documentAlias.attachEvent&&(documentAlias.attachEvent("onreadystatechange",function(){"complete"===documentAlias.readyState&&(documentAlias.detachEvent("onreadystatechange",arguments.callee),loadHandler())}),documentAlias.documentElement.doScroll&&windowAlias==windowAlias.top&&!function(){if(!hasLoaded){try{documentAlias.documentElement.doScroll("left")}catch(error){return void setTimeout(arguments.callee,0)}loadHandler()}}()),addEventListener(windowAlias,"load",loadHandler,!1)}function Tracker(trackerUrl,siteId){function setCookie(cookieName,value,daysToExpire,path,domain,secure){var expiryDate;daysToExpire&&(expiryDate=new Date,expiryDate.setTime(expiryDate.getTime()+864e5*daysToExpire)),documentAlias.cookie=cookieName+"="+escapeWrapper(value)+(daysToExpire?";expires="+expiryDate.toGMTString():"")+";path="+(path?path:"/")+(domain?";domain="+domain:"")+(secure?";secure":"")}function getCookie(cookieName){var cookiePattern=new RegExp("(^|;)[ ]*"+cookieName+"=([^;]*)"),cookieMatch=cookiePattern.exec(documentAlias.cookie);return cookieMatch?unescapeWrapper(cookieMatch[2]):0}function getImage(url,delay){var now=new Date,tick="lt_stats_"+Math.floor(2147483648*Math.random()).toString(36),image=new Image;expireDateTime=now.getTime()+delay,window[tick]=image,image.onload=image.onerror=image.onabort=function(){image.onload=image.onerror=image.onabort=null,image=window[tick]=null},image.src=url}function getReferrer(){var referrer="";try{referrer=top.document.referrer}catch(e){if(parent)try{referrer=parent.document.referrer}catch(e2){referrer=""}}return""===referrer&&(referrer=documentAlias.referrer),referrer}function hasCookies(){var testCookieName="_testCookie";return isDefined(navigatorAlias.cookieEnabled)?navigatorAlias.cookieEnabled?"1":"0":(setCookie(testCookieName,"1"),"1"==getCookie(testCookieName)?"1":"0")}function getRequest(){var i,now,request;return now=new Date,request="site="+configTrackerSiteId+"&userId="+userId+"&userKind="+userKind+"&url="+escapeWrapper(isDefined(configCustomUrl)?configCustomUrl:documentAlias.location.href)+"&resolution="+screenAlias.width+"x"+screenAlias.height+"&h="+now.getHours()+"&m="+now.getMinutes()+"&s="+now.getSeconds()+"&cookie="+browserHasCookies+"&ref="+escapeWrapper(pageReferrer)+"&puuid="+uuid+"&stay_time="+stay_time+"&rand="+Math.random(),request=configTrackerUrl+"?"+request}function logPageView(){var request=getRequest();return isDefined(configCustomData)&&(request+="&data="+escapeWrapper(stringify(configCustomData))),getImage(request,configTrackerPause),!1}var userId,userKind,configTrackerUrl=trackerUrl||"",configTrackerSiteId=siteId||"",configCustomUrl,configTrackerPause=200,configCustomData,browserHasCookies="0",pageReferrer,escapeWrapper=windowAlias.encodeURIComponent||escape,unescapeWrapper=windowAlias.decodeURIComponent||unescape,stringify=function(value){function quote(string){return escapable.lastIndex=0,escapable.test(string)?'"'+string.replace(escapable,function(a){var c=meta[a];return"string"==typeof c?c:"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+string+'"'}function f(n){return 10>n?"0"+n:n}function str(key,holder){var i,k,v,partial,value=holder[key];if(null===value)return"null";switch(value&&"object"==typeof value&&"function"==typeof value.toJSON&&(value=value.toJSON(key)),typeof value){case"string":return quote(value);case"number":return isFinite(value)?String(value):"null";case"boolean":case"null":return String(value);case"object":if(partial=[],value instanceof Array){for(i=0;i<value.length;i++)partial[i]=str(i,value)||"null";return v=0===partial.length?"[]":"["+partial.join(",")+"]"}if(value instanceof Date)return quote(value.getUTCFullYear()+"-"+f(value.getUTCMonth()+1)+"-"+f(value.getUTCDate())+"T"+f(value.getUTCHours())+":"+f(value.getUTCMinutes())+":"+f(value.getUTCSeconds())+"Z");for(k in value)v=str(k,value),v&&(partial[partial.length]=quote(k)+":"+v);return v=0===partial.length?"{}":"{"+partial.join(",")+"}"}}var escapable=new RegExp('[\\"\x00--­؀-؄܏឴឵‌-‏\u2028- ⁠-⁯\ufeff￰-￿]',"g"),meta={"\b":"\\b","	":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"};return str("",{"":value})};return pageReferrer=getReferrer(),userId=getCookie("user_id"),userKind=getCookie("user_kind"),browserHasCookies=hasCookies(),{trackPageView:function(){logPageView()}}}var expireDateTime,documentAlias,navigatorAlias,screenAlias,windowAlias,hostnameAlias,hasLoaded,registeredOnLoadHandlers,load_time=Date.parse(new Date),stay_time=0;return uuid=generateUUID(10),documentAlias=document,navigatorAlias=navigator,screenAlias=screen,windowAlias=window,hostnameAlias=windowAlias.location.hostname,hasLoaded=!1,registeredOnLoadHandlers=[],addEventListener(windowAlias,"beforeunload",beforeUnloadHandler,!1),addReadyListener(),{getTracker:function(StatUrl,siteId){return new Tracker(StatUrl,siteId)}}}()),function(){try{var stat=Stat.getTracker("//statistic.liepin.com/statVisit.do",1);stat.trackPageView()}catch(err){}}();