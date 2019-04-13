<?php echo form_open('pelanggan/create');?>
<table>
    <tr><td>ID Pel</td><td><?php echo form_input('id_pel');?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama_pel');?></td></tr> 
    <tr><td>ALAMAT</td><td><?php echo form_input('alamat_pel');?></td></tr>
<tr><td>No HP</td><td><?php echo form_input('no_hp');?></td></tr>

    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('pelanggan','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>