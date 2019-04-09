<div class="container-fluid row row-nomar">
	<h2 class="mar-b20">
		Impact Stories
		<a href="{{BASE_URL}}adminme/impact-stories/new">
			<button class="btn compact btn-success">Add new</button>
		</a>
	</h2>
	<table class="table table-hover">
		<tr>
			<th>Sr no.</th>
			<th>Story</th>
			<th>Actions</th>
		</tr>
		<?php foreach($stories as $i => $story) {?>
		<tr>
			<td>{{($i+1)}}</td>
			<td>
				{{$story->title}}
			</td>
			<td>
				<a href="{{BASE_URL}}adminme/impact-stories/update/{{$story->id}}">
					<button class="btn btn-primary compact">Edit</button>
				</a>
			</td>
		</tr>
	<?php } ?>
	</table>
</div>