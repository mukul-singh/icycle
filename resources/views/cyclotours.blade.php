<div class="col-12 col-sm-9 col-md-9 center bg-white pad-60-30 lgrey row mar-t-m50 row-nomar">
	<div class="col-12 text-center mar-b20">
		CHOOSE HUB LOCATION
		<div class="col-12 mar-b15"></div>
		<select class="center mar-b20">
			<?php foreach ($tours as $tour) { ?>
			<option value="{{$tour->id}}">{{$tour->name}}</option>
			<?php } ?>
		</select>
		<div class="col-12 mar-b20"></div>
		<b class="ft-16">For Bookings: Call +918861102597</b>
	</div>
	<div class="col-12"><br/><br/></div>
	<div class="col-12 col-sm-6 col-md-6 pad-30">
		<div class="ft-20 bold mar-b20">ONE-TIME RENTAL</div>
		<table class="table ft-13">
			<tr>
				<th class="pad-l0">DURATION</th>
				<th>COST (RS)</th>
			</tr>
			<tr>
				<td class="pad-l0">0 - 1hr</td>
				<td>{{$tours[0]->rental_cost_1}}</td>
			</tr>
			<tr>
				<td class="pad-l0">0 - 2hrs</td>
				<td>{{$tours[0]->rental_cost_2}}</td>
			</tr>
			<tr>
				<td class="pad-l0">0 - 3hrs</td>
				<td>{{$tours[0]->rental_cost_3}}</td>
			</tr>
			<tr>
				<td class="pad-l0">0 - 4hrs</td>
				<td>{{$tours[0]->rental_cost_4}}</td>
			</tr>
			<tr>
				<td class="pad-l0">5+ hrs - Full day<br/>(6AM - 6PM)</td>
				<td>{{$tours[0]->rental_cost_5}}</td>
			</tr>
		</table>
		<div class="col-12 mar-b20"></div>
		<div class="ft-13 mar-b20">
			* Pre-book online and avail 10% discount on rental cost.
		</div>
		<button class="btn bg-gradient compact">PREBOOK NOW</button>
	</div>
	<div class="col-12 col-sm-6 col-md-6 pad-30">
		TERMS & CONDITIONS<br/><br/>
		<p class="ft-13">
			Overtime calculated per 20 minutes slab.<br/><br/>
			Rs.50/- extra for each 20 minutes slab, exceeding the 'booked duration'.<br/><br/>
			20 minutes slab does not apply to the full-day rental option.<br/><br/>
			'Booked Duration' while registering will be considered. It cannot be changed to different slab later.
		</p>
	</div>
	<div class="col-12 pad-30">
		<div class="ft-20 bold mar-b20">MEMBERSHIP OPTIONS</div>
		<table class="table ft-13">
			<tr>
				<th class="pad-l0">Category</th>
				<th>Validity (Days)</th>
				<th>Total Time (Hours)</th>
				<th>No of Bikes</th>
				<th>Cost (Rs)</th>
			</tr>
			<tr>
				<td class="pad-l0">A</td>
				<td>45</td>
				<td>30</td>
				<td>{{$tours[0]->member_A_bike}}</td>
				<td>{{$tours[0]->member_A_cost}}</td>
			</tr>
			<tr>
				<td class="pad-l0">B</td>
				<td>90</td>
				<td>60</td>
				<td>{{$tours[0]->member_B_bike}}</td>
				<td>{{$tours[0]->member_B_cost}}</td>
			</tr>
			<tr>
				<td class="pad-l0">C</td>
				<td>180</td>
				<td>150</td>
				<td>{{$tours[0]->member_C_bike}}</td>
				<td>{{$tours[0]->member_C_cost}}</td>
			</tr>
			<tr>
				<td class="pad-l0">D</td>
				<td>365</td>
				<td>320</td>
				<td>{{$tours[0]->member_D_bike}}</td>
				<td>{{$tours[0]->member_D_cost}}</td>
			</tr>
		</table>
	</div>
	<div class="col-12 col-sm-6 col-md-6 pad-30">
		TERMS & CONDITIONS<br/><br/>
		<p class="ft-13">
			ONLY ONE bike per membership for CAT-A and CAT-B<br/><br/>
			CAT-C : Maximum of TWO bikes per membership at a time. Total hours shared by TWO bikes.<br/><br/>
			CAT-D  : Maximum of FOUR bikes per membership at a time. Total hours shared by FOUR bikes.
		</p>
	</div>
	<div class="col-12 col-sm-6 col-md-6 pad-30">
		<br/><br/>
		<p class="ft-13">
			Additional Time: Rs.50/- per hour, per bike. Valid during membership period only.<br/><br/>
			To confirm bike availability, please pre-book at www.ICYCLE.in or call +918861102597<br/><br/>
			Member should be present in person to avail membership.
		</p>
	</div>
</div>