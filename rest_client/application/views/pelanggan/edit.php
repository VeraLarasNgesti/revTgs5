<?php echo form_open('pelanggan/edit');?>
<?php echo form_hidden('id_pel',$pelanggan[0]->id_pel);?>
 
<table>
    <tr><td>id pelanggan</td><td><?php echo form_input('',$pelanggan[0]->id_pel,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama_pel',$pelanggan[0]->nama_pel);?></td></tr>
<tr><td>NO HP</td><td><?php echo form_input('no_hp',$pelanggan[0]->no_hp);?></td></tr>

    <tr><td>ALAMAT</td><td><?php echo form_input('alamat_pel',$pelanggan[0]->alamat_pel);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('pelanggan','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>