<h2>Input Sekolah</h2>

<form action="<?php echo URL; ?>/sekolah/save" method="post">
    <table>
        <tr>
            <td>Nama Sekolah</td> <!-- Update the field label -->
            <td><input type="text" name="nama_sekolah" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>Jumlah Guru</td> <!-- Update the field label -->
            <td><input type="text" name="jumlah_guru" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>