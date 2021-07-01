<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Productos extends Migration
{
        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                            'type'           => 'INT',
                            'constraint'     => 5,
                            'unsigned'       => true,
                            'auto_increment' => true,
                        ],
                        'nombre'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '100',
                        ],
                        'precio'       => [
                            'type'       => 'FLOAT',
                            'constraint' => 5,
                        ],
                            'id_usuario'       => [
                            'type'       => 'INT',
                            'unsigned'       => true,
                            'constraint' => 5,
                        ],
                            'creacion'       => [
                            'type'       => 'timestamp',
                        ],
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('productos');
        }

        public function down()
        {
                $this->forge->dropTable('productos');
        }
}