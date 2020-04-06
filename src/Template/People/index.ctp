<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?= $this->Html->charset() ?>
</head>
<body>
	<p>This is People table records.</p>
	<!-- <table>
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>mail</th>
				<th>age</th>
			</tr>
		</thead>
		<?php foreach($data->toArray() as $obj): ?>
			<tr>
				<td>
					<?= h($obj->id) ?>
				</td>
				<td>
					<?= h($obj->name) ?>
				</td>
				<td>
					<?= h($obj->mail) ?>
				</td>
				<td>
					<?= h($obj->age) ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table> -->
	<pre>
		<?php print_r($data->toArray()); ?>
	</pre>
</body>
</html>