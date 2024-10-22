<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooksTable extends Migration
{
    public function up()
    {
        // Membuat tabel 'books'
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'author'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'publisher'   => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'year'        => [
                'type'           => 'INT',
                'constraint'     => 4,
                'null'           => true,
            ],
            'created_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ]
        ]);
        
        // Menambahkan primary key
        $this->forge->addKey('id', true);

        // Membuat tabel 'books'
        $this->forge->createTable('books');
    }

    public function down()
    {
        $this->forge->dropTable('books');
    }
}
