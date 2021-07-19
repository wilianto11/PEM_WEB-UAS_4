<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Antrian extends Migration
{
	public function up()
	{
		
		$this->forge->addField([
        'id_antrian'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
        ],
        'tanggal'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
        ],
        'id_loket_pelayanan' => [
                'type'           => 'INT',
                'constraint'     => '11',
        ],
        'keterangan_loket' => [
                'type'           => 'TEXT',
                'null'           => TRUE,
        ],
    ]);
    $this->forge->addKey('id_loket', TRUE);
    $this->forge->createTable('loket');
	}

	public function down()
	{
		//
	}
}
