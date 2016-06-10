<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<SPAN ID="copytext" STYLE="height:150;width:162;background-color:pink">
This text will be copied onto the clipboard when you click the button below. Try it!
</SPAN>
<TEXTAREA ID="holdtext" STYLE="display:none;">
</TEXTAREA>
<BUTTON onClick="ClipBoard();">Copy to Clipboard</BUTTON>



</body>
<SCRIPT LANGUAGE="JavaScript">

function ClipBoard() 
{
var holdtext =  document.getElementById('copytext').innerHTML;
  Copied = holdtext.createTextRange();
  Copied.execCommand("Copy");

}

</SCRIPT>
</html>