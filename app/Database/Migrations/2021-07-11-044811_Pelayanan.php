<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelayanan extends Migration
{
	public function up()
	{
		$this->forge->addField([
        'id_pelayanan'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
        ],
        'nama_pelayanan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
        ],
        'kode_pelayanan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
        ],
        'keterangan_pelayanan' => [
                'type'           => 'TEXT',
                'null'           => TRUE,
        ],
    ]);
    $this->forge->addKey('id_pelayanan', TRUE);
    $this->forge->createTable('pelayanan');
	}

	public function down()
	{
		//
	}
}
