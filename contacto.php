<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="" content="text/html; charset=windows-1253">
<meta http-equiv="" content="text/html; charset=windows-1253">
</head>

<body>
<?
	if (!$HTTP_POST_VARS){
	?>
<form name="form1" method="post" action="">
  <table width="495" border="0">
    <!--DWLayoutTable-->
    <tr> 
      <td width="10" height="21">&nbsp;</td>
      <td width="465" valign="top" bgcolor="#000066" class="unnamed1"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Apellido 
        y Nombre o Empresa:</font></strong></td>
      <td width="6">&nbsp;</td>
    </tr>
    <tr> 
      <td height="21">&nbsp;</td>
      <td valign="top"><input name="nombre" type="text" id="nombre" size="40" maxlength="100"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="21">&nbsp;</td>
      <td valign="top" bgcolor="#000066" class="unnamed1"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif"><strong>e-mail:</strong></font></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="21">&nbsp;</td>
      <td valign="top"><input name="mail" type="text" id="mail" size="40" maxlength="70"></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="20">&nbsp;</td>
      <td valign="top" bgcolor="#000066" class="unnamed1"><strong><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">mensaje:</font></strong></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="120">&nbsp;</td>
      <td valign="top"><textarea name="mensaje" cols="40" rows="10" id="mensaje"></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td height="21"></td>
      <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td></td>
    </tr>
    <tr> 
      <td height="49"></td>
      <td valign="top"><input type="submit" name="Submit" value="Enviar"> <input type="reset" name="Submit2" value="Restablecer"> 
      </td>
      <td></td>
    </tr>
    <tr> 
      <td height="70"></td>
      <td valign="top" class="unnamed1"><font size="2" face="Arial, Helvetica, sans-serif">Si desea puede enviarnos 
        una carta a nuestro domicilio:<br>
        ALET_AR S.A. &#8226; Carlos Pellegrin 1230 (1602) Florida &#8226; Buenos 
        Aires &#8226; Argentina, o comunicarse a los telefonos Tel / Fax 4760-1400 
        / 4730-1771</font> </td>
      <td></td>
    </tr>
    <tr> 
      <td height="3"><img src="imagenes/spacer.gif" alt="" width="10" height="1"></td>
      <td><img src="imagenes/spacer.gif" alt="" width="465" height="1"></td>
      <td><img src="imagenes/spacer.gif" alt="" width="6" height="1"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<?
	  }else{
	  $cuerpo= $HTTP_POST_VARS["mensaje"]. "\n";
	  $cuerpo.= $HTTP_POST_VARS["nombre"]. "\n";
	  $mail= $HTTP_POST_VARS["mail"];
	  mail("info@juanborzi.com.ar", "consulta recibida en aletar.com.ar",$cuerpo,"FROM:$mail");
	  echo "Gracias por comunicarse con ALET_AR S.A.";
	  } ?>
</body>
</html>
