<?php
	namespace App\Model\Table;

	use Cake\ORM\Table;

	class PeopleTable extends Table {
		public function initialize(array $config) {
			parent::initialize($config);

			$this->setTable('people');
			$this->setDisplayField('mail');
			$this->setPrimaryKey('id');
		}
	}
?>