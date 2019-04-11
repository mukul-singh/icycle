<div class="container-fluid row row-nomar">
	<div class="col-12 col-sm-8 col-md-8">
		<h2 class="mar-b20">
			Bicycles
			<a href="{{BASE_URL}}adminme/bicycles/new">
				<button class="btn compact btn-success">Add new</button>
			</a>
		</h2>
		<table class="table table-hover">
			<tr>
				<th>Sr no.</th>
				<th>Bicycle</th>
				<th>Actions</th>
			</tr>
			<?php foreach($bicycles as $i => $bicycle) {?>
			<tr>
				<td>{{($i+1)}}</td>
				<td>
					{{$bicycle->name}}
				</td>
				<td>
					<a href="{{BASE_URL}}adminme/bicycles/update/{{$bicycle->id}}">
						<button class="btn btn-primary compact">Edit</button>
					</a>
				</td>
			</tr>
		<?php } ?>
		</table>
	</div>
</div>