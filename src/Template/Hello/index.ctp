<!DOCTYPE html>
<html>
<head>
	<!-- <title><?= $title ?></title> -->
	<?= $this->Html->charset() ?>
	<!-- <style>
		h1 {
			font-size: 48pt;
			margin: 0px 0px 10px 0px;
			padding: 0px 20px;
			color: white;
			background: linear-gradient(to right, #aaa, #fff);
		}
		p {
			font-size: 14pt;
			color: #666;
		}
	</style> -->
</head>
<body>
	<ul>
		<?= $this->Html->nestedList(['first line', 'second line', 'third line' => ['one', 'two', 'three']]) ?>
	</ul>
</body>
</html>