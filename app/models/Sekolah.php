<?php

namespace App\Models;

use App\Core\Model;

class Sekolah extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_sekolah"; // Update the table name
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama_sekolah = $_POST['nama_sekolah']; // Update the variable names
            $alamat = $_POST['alamat'];
            $jumlah_guru = $_POST['jumlah_guru']; // Update the variable names

            $sql = "INSERT INTO tb_sekolah
            SET nama_sekolah=:nama_sekolah, alamat=:alamat, jumlah_guru=:jumlah_guru"; // Update the table name and column names
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama_sekolah", $nama_sekolah);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":jumlah_guru", $jumlah_guru);

            $stmt->execute();
      }  

      public function edit($id)
      {
            $query = "SELECT * FROM tb_sekolah WHERE id=:id"; // Update the table name
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama_sekolah = $_POST['nama_sekolah']; // Update the variable names
            $alamat = $_POST['alamat'];
            $jumlah_guru = $_POST['jumlah_guru']; // Update the variable names
            $id = $_POST['id'];

            $sql = "UPDATE tb_sekolah
                  SET nama_sekolah=:nama_sekolah, alamat=:alamat, jumlah_guru=:jumlah_guru
                  WHERE id=:id"; // Update the table name and column names

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama_sekolah", $nama_sekolah);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":jumlah_guru", $jumlah_guru);
            $stmt->bindParam(":id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
        $sql = "DELETE FROM tb_sekolah WHERE id=:id"; // Update the table name
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->execute();
      }
}