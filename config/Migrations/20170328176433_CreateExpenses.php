<?php
use Migrations\AbstractMigration;

class CreateExpenses extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('expenses');
        $table->addColumn('expenses_types_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('amount', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('paid', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('description', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
	    $table->addForeignKey('expenses_types_id', 'expenses_types', 'id', [
		    'delete'=> 'NO_ACTION',
		    'update'=> 'CASCADE'
	    ]);
	    $table->addForeignKey('user_id', 'users', 'id', [
		    'delete'=> 'NO_ACTION',
		    'update'=> 'CASCADE'
	    ]);
        $table->create();
    }
}
