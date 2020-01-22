<html>
<head>
<title>input details</title>

</head>
<body>

firstname:input id=<"first" type="text" placeholder="enter first name"><br>
lastname:input id=<"last" type="text" placeholder="enter last name"><br>
<input id="btn" type="submit">
<script type="text/javascript">
document.getElementById('btn').onclick=function()
{
	firstname=document.getElementById('first').value;
	lastname=document.getElementById('last').value;
	console.log(firstname+' '+lastname);
}
</script>
</body>
</html>