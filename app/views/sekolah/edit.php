<h2>Edit Sekolah</h2>

<form action="<?php echo URL; ?>/sekolah/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>Nama Sekolah</td> <!-- Update the field label -->
            <td><input type="text" name="nama_sekolah" value="<?php echo $data['row']['nama_sekolah']; ?>" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>Jumlah Guru</td> <!-- Update the field label -->
            <td><input type="text" name="jumlah_guru" value="<?php echo $data['row']['jumlah_guru']; ?>" required></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>