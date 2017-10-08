!function(t,e,n){function r(t,e,n){if(t.addEventListener)return void t.addEventListener(e,n,!1);t.attachEvent("on"+e,n)}function o(t){if("keypress"==t.type){var e=String.fromCharCode(t.which);return t.shiftKey||(e=e.toLowerCase()),e}return g[t.which]?g[t.which]:v[t.which]?v[t.which]:String.fromCharCode(t.which).toLowerCase()}function i(t,e){return t.sort().join(",")===e.sort().join(",")}function c(t){var e=[];return t.shiftKey&&e.push("shift"),t.altKey&&e.push("alt"),t.ctrlKey&&e.push("ctrl"),t.metaKey&&e.push("meta"),e}function l(t){if(t.preventDefault)return void t.preventDefault();t.returnValue=!1}function a(t){if(t.stopPropagation)return void t.stopPropagation();t.cancelBubble=!0}function u(t){return"shift"==t||"ctrl"==t||"alt"==t||"meta"==t}function d(){if(!k){k={};for(var t in g)t>95&&t<112||g.hasOwnProperty(t)&&(k[g[t]]=t)}return k}function s(t,e,n){return n||(n=d()[t]?"keydown":"keypress"),"keypress"==n&&e.length&&(n="keydown"),n}function h(t){return"+"===t?["+"]:(t=t.replace(/\+{2}/g,"+plus"),t.split("+"))}function f(t,e){var n,r,o,i=[];for(n=h(t),o=0;o<n.length;++o)r=n[o],b[r]&&(r=b[r]),e&&"keypress"!=e&&y[r]&&(r=y[r],i.push("shift")),u(r)&&i.push(r);return e=s(r,i,e),{key:r,modifiers:i,action:e}}function p(t,n){return null!==t&&t!==e&&(t===n||p(t.parentNode,n))}function m(t){function n(t){t=t||{};var e=!1,n;for(n in b)t[n]?e=!0:b[n]=0;e||(E=!1)}function d(t,e,n,r,o,c){var l,a,d=[],s=n.type;if(!y._callbacks[t])return[];for("keyup"==s&&u(t)&&(e=[t]),l=0;l<y._callbacks[t].length;++l)if(a=y._callbacks[t][l],(r||!a.seq||b[a.seq]==a.level)&&s==a.action&&("keypress"==s&&!n.metaKey&&!n.ctrlKey||i(e,a.modifiers))){var h=!r&&a.combo==o,f=r&&a.seq==r&&a.level==c;(h||f)&&y._callbacks[t].splice(l,1),d.push(a)}return d}function s(t,e,n,r){y.stopCallback(e,e.target||e.srcElement,n,r)||!1===t(e,n)&&(l(e),a(e))}function h(t){"number"!=typeof t.which&&(t.which=t.keyCode);var e=o(t);if(e)return"keyup"==t.type&&w===e?void(w=!1):void y.handleKey(e,c(t),t)}function p(){clearTimeout(k),k=setTimeout(n,1e3)}function g(t,e,r,i){function c(e){return function(){E=e,++b[t],p()}}function l(e){s(r,e,t),"keyup"!==i&&(w=o(e)),setTimeout(n,10)}b[t]=0;for(var a=0;a<e.length;++a){var u=a+1===e.length,d=u?l:c(i||f(e[a+1]).action);v(e[a],d,i,t,a)}}function v(t,e,n,r,o){y._directMap[t+":"+n]=e,t=t.replace(/\s+/g," ");var i=t.split(" "),c;if(i.length>1)return void g(t,i,e,n);c=f(t,n),y._callbacks[c.key]=y._callbacks[c.key]||[],d(c.key,c.modifiers,{type:c.action},r,t,o),y._callbacks[c.key][r?"unshift":"push"]({callback:e,modifiers:c.modifiers,action:c.action,seq:r,level:o,combo:t})}var y=this;if(t=t||e,!(y instanceof m))return new m(t);y.target=t,y._callbacks={},y._directMap={};var b={},k,w=!1,_=!1,E=!1;y._handleKey=function(t,e,r){var o=d(t,e,r),i,c={},l=0,a=!1;for(i=0;i<o.length;++i)o[i].seq&&(l=Math.max(l,o[i].level));for(i=0;i<o.length;++i)if(o[i].seq){if(o[i].level!=l)continue;a=!0,c[o[i].seq]=1,s(o[i].callback,r,o[i].combo,o[i].seq)}else a||s(o[i].callback,r,o[i].combo);var h="keypress"==r.type&&_;r.type!=E||u(t)||h||n(c),_=a&&"keydown"==r.type},y._bindMultiple=function(t,e,n){for(var r=0;r<t.length;++r)v(t[r],e,n)},r(t,"keypress",h),r(t,"keydown",h),r(t,"keyup",h)}if(t){for(var g={8:"backspace",9:"tab",13:"enter",16:"shift",17:"ctrl",18:"alt",20:"capslock",27:"esc",32:"space",33:"pageup",34:"pagedown",35:"end",36:"home",37:"left",38:"up",39:"right",40:"down",45:"ins",46:"del",91:"meta",93:"meta",224:"meta"},v={106:"*",107:"+",109:"-",110:".",111:"/",186:";",187:"=",188:",",189:"-",190:".",191:"/",192:"`",219:"[",220:"\\",221:"]",222:"'"},y={"~":"`","!":"1","@":"2","#":"3",$:"4","%":"5","^":"6","&":"7","*":"8","(":"9",")":"0",_:"-","+":"=",":":";",'"':"'","<":",",">":".","?":"/","|":"\\"},b={option:"alt",command:"meta",return:"enter",escape:"esc",plus:"+",mod:/Mac|iPod|iPhone|iPad/.test(navigator.platform)?"meta":"ctrl"},k,w=1;w<20;++w)g[111+w]="f"+w;for(w=0;w<=9;++w)g[w+96]=w.toString();m.prototype.bind=function(t,e,n){var r=this;return t=t instanceof Array?t:[t],r._bindMultiple.call(r,t,e,n),r},m.prototype.unbind=function(t,e){var n=this;return n.bind.call(n,t,function(){},e)},m.prototype.trigger=function(t,e){var n=this;return n._directMap[t+":"+e]&&n._directMap[t+":"+e]({},t),n},m.prototype.reset=function(){var t=this;return t._callbacks={},t._directMap={},t},m.prototype.stopCallback=function(t,e){var n=this;return!((" "+e.className+" ").indexOf(" mousetrap ")>-1)&&(!p(e,n.target)&&("INPUT"==e.tagName||"SELECT"==e.tagName||"TEXTAREA"==e.tagName||e.isContentEditable))},m.prototype.handleKey=function(){var t=this;return t._handleKey.apply(t,arguments)},m.addKeycodes=function(t){for(var e in t)t.hasOwnProperty(e)&&(g[e]=t[e]);k=null},m.init=function(){var t=m(e);for(var n in t)"_"!==n.charAt(0)&&(m[n]=function(e){return function(){return t[e].apply(t,arguments)}}(n))},m.init(),t.Mousetrap=m,"undefined"!=typeof module&&module.exports&&(module.exports=m),"function"==typeof define&&define.amd&&define(function(){return m})}}("undefined"!=typeof window?window:null,"undefined"!=typeof window?document:null);var bind_nav,deleteCookie,getCookie,getEmail,setCookie,setupEmail,show_help,switchEmail,switch_language,switch_theme;setCookie=function(t,e,n){var r,o;return n?(r=new Date,r.setTime(r.getTime()+24*n*60*60*1e3),o="; expires="+r.toGMTString()):o="",document.cookie=t+"="+e+o+"; path=/"},getCookie=function(t){var e,n,r,o;for(o=t+"=",n=document.cookie.split(";"),r=0;r<n.length;){for(e=n[r];" "===e.charAt(0);)e=e.substring(1,e.length);if(0===e.indexOf(o))return e.substring(o.length,e.length);r++}return null},deleteCookie=function(t){return setCookie(t,"",-1)},switch_theme=function(t){return null==t&&(t="white"),document.querySelector("#theme").setAttribute("href","/css/"+t+".css"),document.querySelectorAll(".theme-button").forEach(function(t){return function(t){return t.classList.remove("active")}}(this)),document.querySelector("#"+t+"-button").classList.add("active"),deleteCookie("style"),setCookie("style",t,365),!1},switch_language=function(t){var e,n,r,o,i;for(null==t&&(t="EN"),r=["EN","FR"],e=0,o=r.length;e<o;e++)n=r[e],i=document.querySelectorAll(":lang('"+n+"')"),n!==t?(i.forEach(function(t){return function(t){return t.classList.add("hide")}}(this)),i.forEach(function(t){return function(t){return t.classList.remove("show")}}(this))):(i.forEach(function(t){return function(t){return t.classList.remove("hide")}}(this)),i.forEach(function(t){return function(t){return t.classList.add("show")}}(this)));return document.querySelectorAll(".lang-button").forEach(function(t){return function(t){return t.classList.remove("active")}}(this)),document.querySelector("#"+t+"-button").classList.add("active"),deleteCookie("language"),setCookie("language",t,365),!1},String.prototype.rotate=function(t){var e,n,r,o,i,c;for(i="",this.toLowerCase(),o=this,n=0,r=o.length;n<r;n++)e=o[n],e.match(/[a-z]/)?(c=(e.charCodeAt(0)-97+t)%26+97,i+=String.fromCharCode(c)):i+=e;return i},String.prototype.reverse=function(){return this.split("").reverse().join("")},switchEmail=function(t){return"mailto:"+t.replace("mailto:","").reverse()},getEmail=function(t,e){var n,r,o;return r="@",o=".",n=t.rotate(13)+r+e.join(o)},setupEmail=function(t,e){var n,r,o,i;if(r=getEmail(t,e).reverse(),i='<a href="mailto:'+r+' " class="borked-email email">'+r+"</a>",o=document.querySelector(".email-holder"),o&&(o.innerHTML=i),n=document.querySelector(".borked-email"))return n.addEventListener("mouseover",function(t){return t.target.href=switchEmail(t.target.href)}),n.addEventListener("mouseout",function(t){return t.target.href=switchEmail(t.target.href)})},setupEmail("nneba.fgbpxqvyy",["cl","cam","ac","uk"]),show_help=function(){var t;return document.querySelector(".help")?(t=document.querySelector(".help"),t.parentNode.removeChild(t)):document.body.innerHTML+="<div class='help'><div class='help-box'>\n    <h1>Keyboard Shortcuts</h1>\n    <dl>\n        <dt>Go to the Home page</dt>\n            <dd>ctrl-x ctrl-x <br /> ctrl-x ctrl-h</dd>\n        <dt>Go to the CV page</dt>\n            <dd>ctrl-x ctrl-a</dd>\n            <dd>ctrl-x ctrl-b</dd>\n            <dd>ctrl-x ctrl-v</dd>\n        <dt>Go to the Work page</dt>\n            <dd>ctrl-x ctrl-w</dd>\n        <dt>Go to the Contact page</dt>\n            <dd>ctrl-x ctrl-c</dd>\n        <dt>Send me an email</dt>\n            <dd>ctrl-x ctrl-e</dd>\n    </dl><dl>\n        <dt>Toggle the theme</dt>\n            <dd>ctrl-t ctrl-t</dd>\n        <dt>Switch to dark/black theme</dt>\n            <dd>ctrl-t ctrl-d <br /> ctrl-t ctrl-b</dd>\n        <dt>Switch to light/white theme</dt>\n            <dd>ctrl-t ctrl-l <br /> ctrl-t ctrl-w</dd>\n        <br />\n        <dt>Show/hide this help</dt>\n            <dd>?</dd>\n    </dl><dl>\n        <dt>Toggle the language</dt>\n            <dd>ctrl-l ctrl-l</dd>\n        <dt>Switch to English</dt>\n            <dd>ctrl-l ctrl-e</dd>\n        <dt>Switch to French</dt>\n            <dd>ctrl-l ctrl-f</dd>\n        <br />\n    </dl>\n    <a class='close-help' onClick='show_help();'>\n        Close\n    </a>\n</div></div>"},bind_nav=function(t,e){return Mousetrap.bind(t,function(){return window.location.href=e})},bind_nav(["ctrl+x ctrl+h","ctrl+x ctrl+x"],"/"),bind_nav(["ctrl+x ctrl+a","ctrl+x ctrl+b","ctrl+x ctrl+v"],"/cv/"),bind_nav("ctrl+x ctrl+w","/work/"),bind_nav("ctrl+x ctrl+c","/contact/"),bind_nav("ctrl+x ctrl+e","mailto:"+getEmail("nneba.fgbpxqvyy",["cl","cam","ac","uk"])),Mousetrap.bind(["ctrl+t ctrl+d","ctrl+t ctrl+b"],function(){return switch_theme("black")}),Mousetrap.bind(["ctrl+t ctrl+l","ctrl+t ctrl+w"],function(){return switch_theme("white")}),Mousetrap.bind("ctrl+t ctrl+t",function(){return switch_theme("black"===getCookie("style")?"white":"black")}),Mousetrap.bind("ctrl+l ctrl+f",function(){return switch_language("FR")}),Mousetrap.bind("ctrl+l ctrl+e",function(){return switch_language("EN")}),Mousetrap.bind("ctrl+l ctrl+l",function(){return switch_language("EN"===getCookie("language")?"FR":"EN")}),Mousetrap.bind("?",show_help);