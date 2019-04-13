<?php echo $this->session->flashdata('hasil'); ?>
<h2 align="left"><strong>Data Pelanggan</strong></h2>
<p><a href="https://auliamaya10.000webhostapp.com/client/client/index.php/pelanggan/create">Tambah Data</a></p>
<table width="847" border="1" cellpadding="3">
    <tr>
    <td width="96"><div align="center"><strong>id Pelanggan</strong></div></td>
    <td width="248"><div align="center"><strong>Nama</strong></div></td>
    <td width="241"><div align="center"><strong>Alamat</strong></div></td>
	<td width="241"><div align="center"><strong>No HP</strong></div></td>
    <td width="121"><div align="center"><strong>Action</strong></div></td>
  </tr>
<?php
    foreach ($pelanggan as $m){
        echo "<tr>
                 <td><div align='center'>$m->id_pel</div></td>
                 <td>$m->nama_pel</td>
                 <td><div align='center'>$m->alamat_pel</td>
                 <td>$m->no_hp</td>
                 <td><div align='center'>".anchor('pelanggan/edit/'.$m->id_pel,'Edit')."
                     ".anchor('pelanggan/delete/'.$m->id_pel,'Delete')."
                     </div></td>
              </tr>";
     }
?>
</table>