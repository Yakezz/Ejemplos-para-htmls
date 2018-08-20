<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Story's forum</title>
	<link rel="stylesheet" type="text/css" href="hispachancodeclaro.css">
	<link rel="stylesheet" type="text/css" href="img_global.css">
	<link rel="stylesheet" type="text/css" href="hispachan.css">
</head>
<body>
	<div class="navbar barra" align="center" style="font-size: 120%; line-height: 140%;">
		<a title="Inicio" href="Main.php" target="_top">Leer otras historias</a>
	</div>
<center><h1>Nueva historia</h1></center>

<form name="postform" id="postform" action="Validate.php" enctype="multipart/form-data">
<table class="postform">
<tbody>
<tr>
<td class="postblock">
Título
</td>
<td>

	<input name="subject" size="34" accesskey="s" onchange="if($(this).val().length > 20) 
		{
	 		$('.postform').addClass('invalid').addClass('invalid-title') 
		}

		else 
			{
	 		$('.postform').removeClass('invalid').removeClass('invalid-title') 
		}"

	type="text">&nbsp;<input type="submit" class="enviar" onclick="this.value = 'Wait...'" value="Enviar" accesskey="z">

</td>
</tr>

<tr>
<td class="postblock">
Historia
</td>
<td>

        <textarea name="message" accesskey="m" rows="30" cols="160"></textarea>

</td>
</tr>
</form>

</body>
</html>