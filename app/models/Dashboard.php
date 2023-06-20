<?php
namespace App\Models;

use App\Core\Model;

class Golongan extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_golongan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

}
