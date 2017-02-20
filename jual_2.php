<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style3 {color: #FFFFFF; font-weight: bold; }
body {
	background-color: #F0F0F0;
	background-image: url(Hydrangeas.jpg);
}
-->
</style>
</head>

<body>
<div align="center">
  <?php
	      $nm = $_POST["nama"];
		  $brg = $_POST["barang"];
		  $hrg = $_POST["harga"];
		  $jml = $_POST["jumlah"];
		  $total = $hrg * $jml;
?>
  
  <table width="369">
    <tr bgcolor="#0000FF">
      <th colspan="2" scope="col"><span class="style1">MOBILE PHONE GALLERY </span></th>
    </tr>
    <tr bgcolor="#FFFF99">
      <td width="152"><div align="left">Nama Pelanggan </div></td>
      <td width="205"><div align="left"><?php echo "$nm" ?></div></td>
    </tr>
    <tr bgcolor="#FFFF99">
      <td><div align="left">Nama Barang </div></td>
      <td><div align="left"><?php echo "$brg" ?></div></td>
    </tr>
    <tr bgcolor="#FFFF99">
      <td><div align="left">Harga Barang </div></td>
      <td><div align="left"><?php echo "$hrg" ?></div></td>
    </tr>
    <tr bgcolor="#FFFF99">
      <td><div align="left">Jumlah Beli </div></td>
      <?php echo "<td><div align='left'>".$jml."</div></td>"; ?>
    </tr>
    <tr bgcolor="#FF0000">
      <td><span class="style3">Jumlah Total Bayar </span></td>
      <?php echo "<td><div align='left'>".$total."</div></td>"; ?>
    </tr>
  </table>
</div>
</body>
</html>
