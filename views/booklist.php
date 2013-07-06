<html>
<head>
	<title>Book List</title>
</head>
<body>
    <table>
        <tr>
			<td>Title</td>
			<td>Decscription</td>
			<td>Price</td>
		</tr>
		<?php 
			foreach ($listBooks as $book)
		    {
		?>
		<tr>
			<td>
				<a href='/mvc/book/view/<?echo $book["id"]?>.html'>
				<?echo $book["title"]?></a>
			</td>
			<td><?echo $book["description"]?></td>
			<td><?echo $book["price"]?></td>
		</tr>
		<?}?>
	</table>
</body>
</html>
