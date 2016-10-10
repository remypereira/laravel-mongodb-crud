<!DOCTYPE html>
<html>
<head>
<title>Book Index</title>
<link href="/css/lib.css" rel="stylesheet">
</head>
<body>
<h1>Welcome to Library</h1>
<h2>Index of Books</h2>
<table>

<th>No</th><th>Book Title</th><th>ISBN</th><th>Author</th><th>Category</th><th>Action</th>
<tbody>
<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $book): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><?php echo e($i+1); ?></td>
			<td><?php echo e($book{'title'}); ?></td>
			<td><?php echo e(isset( $book{'isbn'} ) ?  $book{'isbn'} : ' - '); ?></td>
 			<td><?php echo e($book{'author'}); ?></td>
 			<td><?php echo e($book{'category'}); ?></td>
 			<td><form action="books/<?php echo e($book{'_id'}); ?>" method="POST">
 				<?php echo e(csrf_field()); ?>

 				<input type="button" class="book-action" value="View" onclick="window.location='<?php echo e(route('books.show', ['book' => $book{'_id'}])); ?>'"> &nbsp;
 				<input type="button" class="book-action" value="Edit" onclick="window.location='<?php echo e(route('books.edit', ['book' => $book{'_id'}])); ?>'"> &nbsp;
				<input type="hidden" class="book-action" name="_method" value="DELETE"/>
				<input type="submit" class="book-action" name="del" value="Delete"/>
				</form>
			</td>

		</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</tbody>
</table>
<hr/>

<input type="button" class="book-action big" value="Add a Book" onclick="window.location='<?php echo e(route('books.create')); ?>'">
</body>
</html>