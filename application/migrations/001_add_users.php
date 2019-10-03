<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration
{
    /**
     * up function
     *
     * @return void
     */
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
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

        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('users');
    }

    /**
     * down function
     *
     * @return void
     */
    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
