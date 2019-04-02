<div class="container-fluid row row-nomar">
	<table class="table">
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