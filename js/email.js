var setupEmail,switchEmail;String.prototype.rotate=function(e){var r,t,i,o,a;for(o="",this.toLowerCase(),t=0,i=this.length;i>t;t++)r=this[t],a=(r.charCodeAt(0)-97+e)%26+97,o+=String.fromCharCode(a);return o},String.prototype.reverse=function(){return this.split("").reverse().join("")},switchEmail=function(e){return"mailto:"+e.replace("mailto:","").reverse()},(setupEmail=function(){var e,r,t,i,o;return i="@",o=".",r="nnebafgbpxqvyy",e=r.rotate(13)+i+"me"+o+"com",e=e.reverse(),t='<a href="mailto:'+e+' " class="borked-email email">'+e+"</a>",$("#email-holder").html(t),$(".borked-email").on("mouseover",function(e){return e.target.href=switchEmail(e.target.href)}),$(".borked-email").on("mouseout",function(e){return e.target.href=switchEmail(e.target.href)})})();