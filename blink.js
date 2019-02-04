function blinking_header()
{
if(!document.getElementById('blink').style.background)
	{
	document.getElementById('blink').style.background="red";
	}
	if(document.getElementById('blink').style.background=="red")
	{
	document.getElementById('blink').style.background="blue";
	}
	else if(document.getElementById('blink').style.background=="blue")
	{
	document.getElementById('blink').style.background="green";
	}
	else if(document.getElementById('blink').style.background=="green")
	{
	document.getElementById('blink').style.background="orange";
	}
else
	{
	document.getElementById('blink').style.background="red";
	}
timer=setTimeout("blinking_header()",1000);
}
function stopTimer()
{ clearTimeout(timer);
}