<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration
{
	public function up()
	{
			$this->dbforge->add_field(array(
					'id_usuario' => array(
							'type' => 'INT',
							'constraint' => 5,
							'unsigned' => TRUE,
							'auto_increment' => TRUE
					),
					'usuario' => array(
							'type' => 'VARCHAR',
							'constraint' => '100',
					),
					'password' => array(
						'type' => 'VARCHAR',
						'constraint' => '100'
					),
					'role' => array(
						'type' => 'VARCHAR',
						'constraint' => '100'
					),
			));
			$this->dbforge->add_key('id_usuario', TRUE);
			$this->dbforge->create_table('usuarios');
	}

	public function down()
	{
			$this->dbforge->drop_table('usuarios');
	}
}
