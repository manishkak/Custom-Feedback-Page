<?php
ob_start();
session_start();
include('./includes/database.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tender Alert Feedback</title>
<style>
body{font-family:Arial, Helvetica, sans-serif;font-size:12px;margin:0 auto}
.key-up{border:1px solid #a2a2a2;background-color:#fff;width:561px;margin:0 auto}
h1{font-size:14px; font-weight:normal}
.ky-mss{color:#888;display:block;font-size:11px;margin-left:129px;margin-top:5px}
.key, .phone{border:1px solid #B7B7B7;border-radius:3px;height:22px;margin:30px 0 0;padding:3px 4px;width:226px;color:#888;font-size:11px}
.up-btn{background-color:#E7680A;border:1px solid #CB5600;border-radius:5px 5px 5px 5px;color:#FFFFFF;display:block;margin:0 0 0 23px;padding:2px;font-size:14px;font-weight:bold;position:relative;top:8px}
.key-up p{line-height:20px}
.f1{float:left}
.f2{float:right}
.p-access{ border: 3px solid #DADADA;margin:1px 0 0 21px;padding:11px 10px 43px;width:406px}
.p-access ul li{line-height:28px;padding-bottom:18px}
.p-access ul{margin:0;padding-top:17px}
.t-alert{margin:0;font-size:12px;color:#000;padding:0}
.t-alert span{color:#0f97de;font-size:22px}
.c{clear:both}
.fsa{border-bottom:1px solid;color:#FF6C00;padding:0 0 0;position:relative;top:37px;left:13px}
form{background: none repeat scroll 0 0 #F8F8F8;padding:20px 10px;width:483px}
form p{margin:0;padding:0 0 23px 4px}
form b{display:inline-block;text-align:right;width:118px}
.t-alert{*margin:-75px 10px 0 0}
.p-access{*margin:17px 0 0 24px}
.enq1{margin:0;padding:20px 0 0 0}
.enq1 li{list-style: none outside none;line-height:28px}
.enq1 li strong{color:red}
.irr{font-size:16px;color:#000;font-weight:bold}
.thanks1{font-size:15px;width:310px;color:#017fc1}
</style>
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'xxxxxxxxxx']);
_gaq.push(['_setDomainName', 'xxxxxxxxxx']);
_gaq.push(['_trackPageview']);
_gaq.push(['_trackEvent']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

function loadxml(arg)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","/ajaxTenders.php?feedback="+arg+"&txtarea="+document.getElementById('txtarea').value+"&txtarea2="+document.getElementById('txtarea1').value+"&txtarea3="+document.getElementById('txtarea2').value+"&txtarea4="+document.getElementById('txtarea3').value+"&emails="+document.getElementById('ei').value,true);
xmlhttp.send();
}

function buttonClick()
{
	var group = document.newfeedbackform.feedback;
	var charVal = document.getElementById("txtarea").value;
	// 	charVal = charVal.replace(/s{2,}/g, ' ');
 	charVal = charVal.replace(/\s+/g,' ');
	document.getElementById("txtarea").value=charVal;
	var charLength = charVal.length;
//  	alert(charLength);
	for (var i=0; i<group.length; i++) 
	{
		if (group[i].checked)
		break;
	}
	
	if (i==group.length)
	{
		alert("Please select atleast one option.");
		return false;
	}
	else if(i==3 && charLength<=30)
	{
		alert("Please enter atleast 30 characters.");
		document.getElementById('txtarea').focus();
		return false;
	}
	else if(i==2 && (document.getElementById("txtarea1").value=='please enter your preferred area...'))
	{
		alert("Please enter your preferred area.");
		document.getElementById('txtarea1').focus();
		return false;
	}
	else if(i==0 || i==1 || i==2 || i==3)
	{
		if(i==0)
		{
		document.getElementById("allbuttons").style.display="none";
		document.getElementById("topline").style.display="none";
		document.getElementById("thanks").style.display="block";
		document.getElementById("txtarea1").value='';	
		document.getElementById("txtarea2").value='';
		loadxml(i+1);
// 		return false;
		setTimeout('Redirect()', 7000);
		}
		else if(i==1)
		{
		document.getElementById("allbuttons").style.display="none";
		document.getElementById("topline").style.display="none";
		document.getElementById("thanks").style.display="block";
		document.getElementById("txtarea1").value='';
		document.getElementById("txtarea3").value='';
		loadxml(i+1);
// 		return false;
		setTimeout('Redirect()', 7000);
		}
		else if(i==2)
		{
		document.getElementById("allbuttons").style.display="none";
		document.getElementById("topline").style.display="none";
		document.getElementById("thanks").style.display="block";
		document.getElementById("txtarea2").value='';
		document.getElementById("txtarea3").value='';
		loadxml(i+1);
// 		return false;
		setTimeout('Redirect()', 7000);
		}
		else if(i==3)
		{
		document.getElementById("allbuttons").style.display="none";
		document.getElementById("topline").style.display="none";
		document.getElementById("thanks").style.display="block";
		document.getElementById("txtarea2").value='';
		document.getElementById("txtarea3").value='';
		document.getElementById("txtarea1").value='';
		loadxml(i+1);
// 		return false;
		setTimeout('Redirect()', 7000);
		}
	}
	
// alert (i);
/*alert (document.getElementById("txtarea1").value);*/
		
}
	
function Redirect()
{
	window.location="http://www.tenders.indiamart.com";
}
	
    function showMe (it,it1,it2,it3) 
    {
        var box = document.getElementById("move");
        var vis = (box.checked) ? "block" : "none";
        document.getElementById(it).style.display = vis;
	if(document.getElementById("move").checked==false)
	{
		document.getElementById("txtarea").value='';
	}
	
	var box1 = document.getElementById("move1");
        var vis1 = (box1.checked) ? "block" : "none";
        document.getElementById(it1).style.display = vis1;
	if(document.getElementById("move1").checked==false)
	{
		document.getElementById("txtarea1").value='';
	}
 	document.getElementById("txtarea1").value='please enter your preferred area...';
	
	var box2 = document.getElementById("move2");
        var vis2 = (box2.checked) ? "block" : "none";
        document.getElementById(it2).style.display = vis2;
	if(document.getElementById("move2").checked==false)
	{
		document.getElementById("txtarea2").value='';
	}
	document.getElementById("txtarea2").value='please enter your preferred keywords...';
	
	var box3 = document.getElementById("move3");
        var vis3 = (box3.checked) ? "block" : "none";
        document.getElementById(it3).style.display = vis3;
	if(document.getElementById("move3").checked==false)
	{
		document.getElementById("txtarea3").value='';
	}
	document.getElementById("txtarea3").value='please enter your preferred products...';
	
    }
</script>
</head>

 <?php
$emails = $HTTP_GET_VARS['emails'];
 ?>

<body>
<div id="myDiv">
</div>
<input type="hidden" value="<?php echo $emails;?>" id="ei">
<div class="key-up">
<div style="border-bottom:3px solid #2e3192; padding:10px 15px; text-align:left"><a href="http://my.indiamart.com/cgi/al.pl?glid={{{title2}}}&utm_source=email&utm_medium=mail&utm_campaign=Biz-profile-06-08-12_IM-Logo&nm={{{first_name}}} {{{last_name}}}&scr={{{title1}}}"><img src="http://my.indiamart.com/mailer/png/indiamart-logo1.png" width="200" height="55" border="0" alt="Indiamart Logo"/></a><p class="f2 t-alert" style="text-align:center">Tender Alert<br /> <span>Feedback</span></p></div>
<div style="padding:15px 26px 29px 29px;display: inline-table;width:561px">
<div id="topline">
<p class="irr">Please select the most appropriate reason for irrelevancy -</p>
</div>

<form name="newfeedbackform" action="" method="post" style="" class="f1 c">
<div id="thanks" style="display:none;text-align:center">
 

<b class="thanks1">Thank you!   Your feedback has been noted.</b><br /><br />

Your alert settings will be reviewed and updated in 3 working days.<br />
<span style="color:#575757;padding-top:7px">(You will now be redirected to http://tenders.indiamart.com)</span>
</div>
<div id="allbuttons">
<!--<span class="ky-mss">Tender-Alerts will be sent to this email-id.</span>-->
<input type="radio" name="feedback" class="f1" value="1" onclick="showMe('div_1','div_2','div_3','div_4')" id="move3"/><p class="f1">Tenders are not related to my product</p><br />
<div id="div_4" class="tool-tip1 c f1" style="display:none;margin-left:25px">
<textarea id="txtarea3" name="txtarea3" onblur="if(this.value=='')this.value='please enter your preferred products...';" onfocus="if(this.value=='please enter your preferred products...')this.value='';"  style="width:434px;height:100px;margin-top: -13px"></textarea>
</div>


<input type="radio" name="feedback" class="f1 c" value="2" onclick="showMe('div_1','div_2','div_3','div_4')" id="move2"/><p class="f1">Tenders are not as per my keywords</p><br />
<div id="div_3" class="tool-tip1 c f1" style="display:none;margin-left:25px">
<textarea id="txtarea2" name="txtarea2" onblur="if(this.value=='')this.value='please enter your preferred keywords...';" onfocus="if(this.value=='please enter your preferred keywords...')this.value='';"  style="width:434px;height:100px;margin-top: -13px"></textarea>
</div>

<input type="radio" name="feedback" class="f1 c" value="3" onclick="showMe('div_1','div_2','div_3','div_4')" id="move1"/><p class="f1">I want Tenders from my local area</p><br />
<div id="div_2" class="tool-tip1 c f1" style="display:none;margin-left:25px">
<textarea id="txtarea1" name="txtarea1" onblur="if(this.value=='')this.value='please enter your preferred area...';" onfocus="if(this.value=='please enter your preferred area...')this.value='';"  style="width:434px;height:100px;margin-top: -13px"></textarea>
</div>

<input type="radio" name="feedback" class="f1 c" value="4" onclick="showMe('div_1','div_2','div_3','div_4')" id="move"/><p class="f1" style="padding-bottom:10px">Others</p>

<div id="div_1" class="tool-tip1 c f1" style="display:none;margin-left:25px">
<textarea id="txtarea" name="txtarea" style="width:434px;height:100px"></textarea>
</div>

<input type="button" onclick="buttonClick()" name="updatekwd" value="Submit feedback &gt;&gt;" class="up-btn c">
</div>
</form>
<ul class="enq1 c">
<li><strong>Have Question?</strong></li>
<li>Call customer help desk - ( 096-9696-9696 )</li>
</ul>
</div>
</div>
</body>
</html>