<!DOCTYPE html>
<html>
<head>
<title>View Book</title>
<link href="/css/lib.css" rel="stylesheet">
</head>
<body>
<h1><?php echo e($book{0}{'title'}); ?> </h1>
<p><?php echo e($book{0}{'category'}); ?></p>

<br/><hr/>

  <input type="button" class="book-action big" value="Return" onclick="window.location='<?php echo e(route('books.index')); ?>'">


</body>
</html>