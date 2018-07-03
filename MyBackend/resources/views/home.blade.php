<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<p> 
	<ul>
		<!-- <?php foreach($tasks as $task) : ?>
          <li> <?= $task; ?></li>
		<?php endforeach; ?> -->
	
	@foreach($tasks as $task)
          <li> {{ $task}}</li>
		@endforeach;


	


   
	</ul>


</p>
</body>
</html>

