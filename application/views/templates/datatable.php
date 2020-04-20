<?php if ($rows): ?>
<table class="table table-striped">
	<thead class="thead-dark">
		<tr>
		<?php foreach ($rows[0] as $column => $value) {
			echo "<th>$column</th>";
		}?>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($rows as $row): ?>
		<tr>
		<?php foreach ($row as $value) {
			echo "<td>$value</td>";
		}?>
			<td>
				<a href="#"><i class="fas fa-binoculars"></i></a>
			</td>
			<td>
				<a href="#"><i class="fas fa-edit"></i></a>
			</td>
			<td>
				<a href="#"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php endif; ?>