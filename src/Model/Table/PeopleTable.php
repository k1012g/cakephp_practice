<?php
	namespace App\Model\Table;

	use Cake\ORM\Query;
	use Cake\ORM\RulesChecker;
	use Cake\ORM\Table;
	use Cake\Validation\Validator;

	class PeopleTable extends Table {
		public function initialize(array $config) {
			parent::initialize($config);

			$this->setTable('people');
			$this->setDisplayField('mail');
			$this->setPrimaryKey('id');
		}

		public function findMe(Query $query, array $options) {
			$me = $options['me'];
			return $query->where(['name like' => '%'.$me.'%'])->orWhere(['mail like' => '%'.$me.'%'])->order(['age' => 'asc']);
		}

		public function findByAge(Query $query, array $options) {
			return $query->order(['age' => 'asc'])->order(['name' => 'asc']);
		}

		public function validationDefault(Validator $validator) {
			$validator
				->integer('id', 'idは整数を入力してください。')
				->allowEmpty('id', 'create');

			$validator
				->scalar('name', 'テキストを入力してください。')
				->requirePresence('name', 'create')
				->notEmpty('name', '名前が入力されていません。');

			$validator
				->scalar('mail', 'テキストを入力してください。')
				->notEmpty('mail', 'メールアドレスが入力されていません。')
				->email('mail', false,  'メールアドレスが正しく入力されていません。');

			$validator
				->integer('age', '整数を入力してください。')
				->requirePresence('age', 'create')
				->notEmpty('age', '年齢が入力されていません。')
				->greaterThan('age', -1, 'ゼロ以上で入力してください。');

			return $validator;
		}
	}
?>