<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style3 {color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>

<body>
<div align="center">
<?php
	      $pjg = $_POST["panjang"];
		  $lbr = $_POST["lebar"];
		  $jml = $_POST["jumlah"];
		  $hrg = $_POST["harga"];
		  $luas = $pjg * $lbr;
		  $totalluas = $luas * $jml;
		  $total = $hrg * $totalluas;
?>
  <table width="369">
    <tr bgcolor="#0000FF">
      <th colspan="2" scope="col"><span class="style1">MAKELAR JAYA </span></th>
    </tr>
    <tr bgcolor="#FFFF99">
      <td width="152"><div align="left">Jumlah Lantai </td>
      <td width="205"><div align="left"><?php echo "$jml" ?> Lantai </div></td>
    </tr>
    <tr bgcolor="#FFFF99">
      <td><div align="left">Luas/lantai </div></td>
      <td><div align="left"><?php echo "$luas" ?> m2 </div></td>
    </tr>
    <tr bgcolor="#FFFF99">
      <td><div align="left">Total Luas </div></td>
      <td><div align="left"><?php echo "$totalluas" ?> m2 </div></td>
    </tr>
    <tr bgcolor="#FFFF99">
      <td><div align="left">Harga/Meter</div></td>
      <td><div align="left">Rp <?php echo "$hrg" ?></div></td>
    </tr>
    <tr bgcolor="#FF0000">
      <td><span class="style3"> Total Harga </span></td>
      <td><span class="style3">Rp <?php echo "$total" ?></span></td>
    </tr>
  </table>
</div>
</body>
</html>
