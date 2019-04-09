<div class="container-fluid row row-nomar">
	<div class="col-12 col-sm-8 col-md-8">
		<h2 class="mar-b20">
			Weekedn Events
			<a href="{{BASE_URL}}adminme/events/weekend-events/new">
				<button class="btn compact btn-success">Add new</button>
			</a>
		</h2>
		<table class="table table-hover">
			<tr>
				<th>Sr no.</th>
				<th>Event Name</th>
				<th>Actions</th>
			</tr>
			<?php foreach($events as $i => $event) {?>
			<tr>
				<td>{{($i+1)}}</td>
				<td>
					<a href="{{BASE_URL}}weekend-events/{{urlencode($event->trail)}}/{{substr($event->date, 0, 10)}}" target="_blank">
						{{$event->trail}}
					</a>
				</td>
				<td>
					<a href="{{BASE_URL}}adminme/events/weekend-events/update/{{$event->id}}">
						<button class="btn btn-primary compact">Edit</button>
					</a>
				</td>
			</tr>
		<?php } ?>
		</table>
	</div>
</div>