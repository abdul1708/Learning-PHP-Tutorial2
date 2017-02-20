<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style6 {font-family: "Times New Roman", Times, serif; font-weight: bold; }
.style7 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>

<body>

<?php

$nm = $_POST ["nama"];
$jns = $_POST ["jenis"];
$mrk = $_POST ["merk"];
$hrg = $_POST ["harga"];
$lm = $_POST ["lama"];
$pjk = $_POST ["pajak"];
$spr = $_POST ["sopir"];

$b_sw = $lm * $hrg;
	$b_pjk = $b_sw * $pjk;
	$b_spr = $spr * $lm;
	
		$ttl = $b_sw + $b_pjk + $b_spr;
?>

<table width="458" border="1">
  <tr bgcolor="#FF00FF">
    <td colspan="2" bgcolor="#FF0000"><div align="center" class="style6">PERUSAHAAN RENTAL MOBIL </div></td>
  </tr>
  <tr>
    <td width="230" bgcolor="#0000FF"><span class="style6">Nama Penyewa </span></td>
    <td width="212" bordercolor="#FF0000" bgcolor="#FFFFFF"><span class="style7"><?php echo "$nm" ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#0000FF"><span class="style6">Jenis Kendaraan </span></td>
    <td bordercolor="#FF0000" bgcolor="#FFFFFF"><span class="style7"><?php echo "$jns" ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#0000FF"><span class="style6">Merk Kendaraaan </span></td>
    <td bordercolor="#FF0000" bgcolor="#FFFFFF"><span class="style7"><?php echo "$mrk" ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#0000FF"><span class="style6">Harga Sewa/ Hari </span></td>
    <td bordercolor="#FF0000" bgcolor="#FFFFFF"><span class="style7"><?php echo "$hrg" ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#0000FF"><span class="style6">Lama Sewa </span></td>
    <td bordercolor="#FF0000" bgcolor="#FFFFFF"><span class="style7"><?php echo "$lm" ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#0000FF"><span class="style6">Biaya Sewa Mobil </span></td>
    <td bordercolor="#FF0000" bgcolor="#FFFFFF"><span class="style7"><?php echo "$b_sw" ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#0000FF"><span class="style6">Pajak</span></td>
    <td bordercolor="#FF0000" bgcolor="#FFFFFF"><span class="style7"><?php echo "$b_pjk" ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#0000FF"><span class="style6">Biaya Supir </span></td>
    <td bordercolor="#FF0000" bgcolor="#FFFFFF"><span class="style7"><?php echo "$b_spr" ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#FF0000"><span class="style6">Total Biaya </span></td>
    <td bgcolor="#FF0000"><span class="style7"><?php echo "$ttl" ?></span></td>
  </tr>
    <td colspan="2" bgcolor="#FFFFFF"><div align="center">-Back to Form- </div></td>
    </tr>
  <tr bgcolor="#FF00FF">
    <td colspan="2" bgcolor="#FFFFFF"><div align="center" class="style6">Nama : Erfirman Panca Nugraha/ 10310028 </div></td>
  </tr>
</table>
</body>
</html>
