<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	table{
		text-align: center;
		border: 1px solid black;
	}
</style>
<body>
	<p>hell</p>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($data as $user): ?>
			<tr>
				<td><?php echo $user->id ?></td>
				<td><?php echo $user->name ?></td>
				<td><?php echo $user->email ?></td>
				<td><?php echo $user->phone ?></td>
				<td><?php echo $user->address ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>