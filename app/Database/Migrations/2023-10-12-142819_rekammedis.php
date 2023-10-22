<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class rekammedis extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'no_rm' => [
                'type' => 'INT',
                'constraint' => 9,
            ],
            'nama_pasien' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tanggal_pemeriksaan' => [
                'type' => 'DATE',
            ],
            'bb_tb' => [
                'type' => 'DECIMAL',
                'constraint' => '5,2',
            ],
            'indeks_masa_tubuh' => [
                'type' => 'DECIMAL',
                'constraint' => '5,2',
            ],
            'lingkar_lengan_atas' => [
                'type' => 'DECIMAL',
                'constraint' => '5,2',
            ],
            'diagnosa_pasien' => [
                'type' => 'TEXT',
            ],
            'diagnosa_lanjutan' => [
                'type' => 'TEXT',
            ],
            'monitoring_eval' => [
                'type'  => 'TEXT',
            ]
            // Tambahkan kolom lain sesuai kebutuhan
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('rekam_medis');
    }

    public function down()
    {
        $this->forge->dropTable('rekam_medis');
    }
}
