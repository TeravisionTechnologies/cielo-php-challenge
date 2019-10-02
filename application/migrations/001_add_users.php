<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '120',
            ),
            'date_of_birth' => array(
                'type' => 'DATE',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '120',
            ),
            'favorite_color' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}