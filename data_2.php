<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<?php
	      $nm = $_POST["nama"];
		  $lhr = $_POST["lahir"];
		  $skrg = $_POST["sekarang"];
		  $umur = $skrg - $lhr;
?>
<table width="364" border="1" align="center" bgcolor="#9999CC">
  <tr>
    <th colspan="2" bgcolor="#330099" scope="col"><span class="style1">Menghitung Usia </span></th>
  </tr>
  <tr>
    <td width="170">Nama Anda </td>
    <td width="178"><?php echo "$nm" ?></td>
  </tr>
  <tr>
    <td>Usia Anda </td>
    <td><?php echo "$umur" ?></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#330099"><div align="center"><span class="style1">Terima Kasih sudah mencoba program ini </span></div></td>
  </tr>
</table>
</body>
</html>
