<div class="container-fluid row row-nomar">
	<div class="col-12 col-sm-6 col-md-6 nopad">
		<table class="table v-align-m">
			<tr>
				<td>Name</td>
				<td>
					<input type="text" class="form-control" id="name" value="<?=isset($tour) ? $tour->name : '';?>">
				</td>
			</tr>
		</table>
		<div class="col-12 mar-b20"></div>
		<h4>One Time Rental</h4>
		<table class="table">
			<tr>
				<th>Duration</th>
				<th>Cost (Rs)</th>
			</tr>
			<tr>
				<td>0 - 1hr</td>
				<td>
					<input type="number" class="form-control" id="cost1" value="<?=isset($tour) ? $tour->rental_cost_1 : '';?>">
				</td>
			</tr>
			<tr>
				<td>0 - 2hrs</td>
				<td>
					<input type="number" class="form-control" id="cost2" value="<?=isset($tour) ? $tour->rental_cost_2 : '';?>">
				</td>
			</tr>
			<tr>
				<td>0 - 3hrs</td>
				<td>
					<input type="number" class="form-control" id="cost3" value="<?=isset($tour) ? $tour->rental_cost_3 : '';?>">
				</td>
			</tr>
			<tr>
				<td>0 - 4hrs</td>
				<td>
					<input type="number" class="form-control" id="cost4" value="<?=isset($tour) ? $tour->rental_cost_4 : '';?>">
				</td>
			</tr>
			<tr>
				<td>5 - Full day</td>
				<td>
					<input type="number" class="form-control" id="cost5" value="<?=isset($tour) ? $tour->rental_cost_5 : '';?>">
				</td>
			</tr>
		</table>
	</div>
	<div class="col-12 mar-b20"></div><br/>
	<h4>Membership options</h4>
	<table class="table">
		<tr>
			<th>Category</th>
			<th>Validity</th>
			<th>Total Time</th>
			<th>Bikes</th>
			<th>Cost (Rs)</th>
		</tr>
		<tr>
			<td>A</td>
			<td>45</td>
			<td>30</td>
			<td>
				<input type="number" class="form-control" id="mbike1" value="<?=isset($tour) ? $tour->member_A_bike : '';?>">
			</td>
			<td>
				<input type="number" class="form-control" id="mcost1" value="<?=isset($tour) ? $tour->member_A_cost : '';?>">
			</td>
		</tr>
		<tr>
			<td>B</td>
			<td>90</td>
			<td>60</td>
			<td>
				<input type="number" class="form-control" id="mbike2" value="<?=isset($tour) ? $tour->member_B_bike : '';?>">
			</td>
			<td>
				<input type="number" class="form-control" id="mcost2" value="<?=isset($tour) ? $tour->member_B_cost : '';?>">
			</td>
		</tr>
		<tr>
		<td>C</td>
			<td>180</td>
			<td>150</td>
			<td>
				<input type="number" class="form-control" id="mbike3" value="<?=isset($tour) ? $tour->member_C_bike : '';?>">
			</td>
			<td>
				<input type="number" class="form-control" id="mcost3" value="<?=isset($tour) ? $tour->member_C_cost : '';?>">
			</td>
		</tr>
		<tr>
			<td>D</td>
			<td>365</td>
			<td>320</td>
			<td>
				<input type="number" class="form-control" id="mbike4" value="<?=isset($tour) ? $tour->member_D_bike : '';?>">
			</td>
			<td>
				<input type="number" class="form-control" id="mcost4" value="<?=isset($tour) ? $tour->member_D_cost : '';?>">
			</td>
		</tr>
	</table>
	<div class="col-12 mar-b20"></div>
	<button class="btn btn-success mar-b20" onclick="saveTour(this, <?=(isset($tour) ? $tour->id : '0');?>)">Save</button>
	<div class="col-12 mar-b20"></div><br/>
</div>