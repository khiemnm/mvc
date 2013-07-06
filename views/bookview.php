<html>
<head>
	<title>Book View</title>
</head>
<body>
    <table>
		<tr>
			<td>
				<a href='index.php?book=<?echo $bookView["title"]?>'>
				<?echo $bookView["title"]?></a>
			</td>
			<td><?echo $bookView["description"]?></td>
			<td><?echo $bookView["price"]?></td>
		</tr>
	</table>
</body>
</html>
