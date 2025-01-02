
<h1 class="text-center mt-5 test">List users</h1>
    <a href="<?= Uri::create('users/create') ?>">Create</a>
	<div class="p-4">
		<table class="table table-bordered text-center">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Image</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $user): ?>
					<tr>
						<td><?= $user->id ?></td>
						<td><?= $user->name ?></td>
						<td><?= $user->email ?></td>
						<td><?= $user->phone ?></td>
						<td><?= $user->address ?></td>
						<td><img src="<?= Uri::base() .$user->avatar ?>" alt="" width="100px" height="100px"></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>