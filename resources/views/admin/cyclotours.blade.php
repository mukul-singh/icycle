<div class="container-fluid row row-nomar">
	<h2 class="mar-b20">
		Cyclotours
		<a href="{{BASE_URL}}adminme/cyclotours/new">
			<button class="btn compact btn-success">Add new</button>
		</a>
	</h2>
	<table class="table table-hover">
		<tr>
			<th>Sr no.</th>
			<th>Cyclotour</th>
			<th>Actions</th>
		</tr>
		<?php foreach($tours as $i => $tour) {?>
		<tr>
			<td>{{($i+1)}}</td>
			<td>{{$tour->name}}</td>
			<td>
				<a href="{{BASE_URL}}adminme/cyclotours/update/{{$tour->id}}">
					<button class="btn btn-primary compact">Edit</button>
				</a>
			</td>
		</tr>
	<?php } ?>
	</table>
</div>