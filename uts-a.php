<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style18 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style20 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12; }
.style21 {font-size: 12}
.style25 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #FFFF00;
}
.style26 {font-size: 12px}
.style28 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #FFFFFF; }
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="uts-b.php">
  <p>&nbsp;</p>
  <table width="500" border="2">
    <tr bgcolor="#003399">
      <td height="37" colspan="2" align="center"><span class="style25">PERUSAHAAN RENTAL MOBIL  </span></td>
    </tr>
    <tr>
      <td bgcolor="#996633"><span class="style28">Nama Penyewa </span></td>
      <td bgcolor="#FFFFCC"><span class="style20">
        <label>
        <input name="nama" type="text" id="nama" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td width="142" bgcolor="#996633"><span class="style28">Jenis Kendaraan </span></td>
      <td width="348" bgcolor="#FFFFCC"><span class="style20">
        <select name="jenis" id="jenis">
          <option>-Pilih Jenis-</option>
          <option>Bus</option>
          <option>Mini Bus</option>
          <option>Family Car</option>
          <option>Sedan</option>
        </select>
      </span></td>
    </tr>
    <tr>
      <td bgcolor="#996633"><span class="style28">Merk Kendaraan </span></td>
      <td bgcolor="#FFFFCC"><span class="style20">
        <label>
        <select name="merk" id="merk">
          <option>-Pilih Merk-</option>
          <option>Avanza</option>
          <option>Xenia</option>
          <option>L 300</option>
          <option>Grand Livina</option>
          <option>Peugeot 306/405</option>
          <option>Panther</option>
          <option>Civic Genio</option>
          <option>Zebra MB</option>
        </select>
        </label>
      </span></td>
    </tr>
    <tr>
      <td bgcolor="#996633"><span class="style28">Harga  sewa /hari </span></td>
      <td bgcolor="#FFFFCC"><span class="style20">
        <label>
        <select name="harga" id="harga">
          <option>-Pilih Harga-</option>
          <option>250000</option>
          <option>500000</option>
          <option>750000</option>
          <option>1000000</option>
          <option>1500000</option>
        </select>
        </label>
      </span></td>
    </tr>

    <tr>
      <td bgcolor="#996633"><span class="style28">Lama Sewa </span></td>
      <td bgcolor="#FFFFCC"><span class="style20">
        <label>
        <input name="lama" type="text" id="lama" size="3" maxlength="3" />
        <span class="style26">hari</span></label>
      </span></td>
    </tr>
    <tr>
      <td bgcolor="#996633"><span class="style28">Pajak</span></td>
      <td bgcolor="#FFFFCC"><span class="style20">
        <label>
        <select name="pajak" id="pajak">
          <option value="0">0</option>
          <option value="0.1">10%</option>
          <option value="0.2">20%</option>
        </select>
        </label>
      </span></td>
    </tr>
    <tr>
      <td bgcolor="#996633"><span class="style28">Biaya Sopir </span></td>
      <td bgcolor="#FFFFCC"><span class="style20">
        <label>
        <select name="sopir" id="sopir">
          <option>0</option>
          <option>100000</option>
          <option>250000</option>
          <option>500000</option>
        </select>
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#003399"><span class="style20">
        <label>
        <input type="submit" name="Submit" value="Proses" />
        </label>
        <label>
        <input type="reset" name="Submit2" value="Batal" />
          </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><span class="style18">Nama : [Tulis nama &amp; Nim] </span></td>
    </tr>
  </table>
</form>
</body>
</html>
