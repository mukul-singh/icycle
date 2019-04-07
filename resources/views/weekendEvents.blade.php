<div class="col-12 col-sm-10 col-md-9 center bg-dark-grey pad-30 lgrey row mar-t-m50 row-nomar">
	<div class="col-3 col-sm-3 col-md-3 nopad">
		<b class="font-20">SEARCH & FILTER</b><br/><br/>
		<div class="bg-white pad-20 mar-b20">
			<label class="mar-b10">SEARCH BY</label>
			<input type="text" class="form-control" placeholder="Event Name">
		</div>
		<div class="bg-white pad-20 mar-b20">
			<label class="mar-b10">FILTER</label>
			<select class="form-control">
				<option disabled selected="">Level</option>
				<option>1</option>
			</select>
			<br/><br/>
			<label class="mar-b10">EVENT DATES</label>
			<select class="form-control mar-b15">
				<option disabled selected="">Year</option>
				<option>1</option>
			</select>
			<select class="form-control">
				<option disabled selected="">Month</option>
				<option>1</option>
			</select>
		</div>
	</div>
	<div class="col-9 col-sm-9 col-md-9 pad-r0">
		<b class="font-20 pad-l15">UPCOMING EVENTS</b><br/><br/>
		<div class="col-12 nopad row row-nomar">
			<?php foreach($events as $event) {?>
			<div class="col-12 col-sm-6 col-md-6 we-outer mar-b15 pad-r0 rounded">
				<div class="we-banner">
					<a href="{{BASE_URL}}weekend-events/{{urlencode($event->trail)}}/{{substr($event->date, 0, 10)}}">
						<img src="{{BASE_URL}}images/uploads/weekend-events/banner/{{$event->banner}}" class="full-w rounded">
					</a>
				</div>
				<div class="pad-25 row row-nomar bg-white">
					<span class="trip-fav">
						<img src="{{BASE_URL}}images/icons/heart-icon.png">
					</span>
					<small class="color-green">{{substr($event->date, 8, 2)." ".strtoupper($months[(int)substr($event->date, 5, 2)])." ".substr($event->date, 0, 4)}}</small>
					<div class="col-12"></div>
					<b class="ft-24 trail">
						<a href="{{BASE_URL}}weekend-events/{{urlencode($event->trail)}}/{{substr($event->date, 0, 10)}}">
							{{$event->trail}}
						</a>
					</b>
					<div class="col-12"></div>
					<div class="col-8 nopad">
						Level<br/><b>{{@["","Beginner", "Medium", "Advance"][$event->level]}}</b>
					</div>
					<div class="col-4 nopad">
						Cost<br/><b>Rs.{{$event->cost}}/-</b>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>