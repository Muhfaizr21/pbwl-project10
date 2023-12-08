<h2>Sekolah</h2>

<a href="<?php echo URL; ?>/sekolah/input" class="btn">Input Sekolah</a>

<table>
      <tr>
            <th>NO</th>
            <th>Nama Sekolah</th>
            <th>Alamat</th>
            <th>Jumlah Guru</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama_sekolah']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><?php echo $row['jumlah_guru']; ?></td>
                  <td><a href="<?php echo URL; ?>/sekolah/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/sekolah/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
        <?php $no++;
        } ?>
</table>