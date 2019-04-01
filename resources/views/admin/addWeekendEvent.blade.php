<div class="container-fluid row row-nomar">
	<div class="col-12 col-sm-6 col-md-6 nopad">
		<table class="table v-align-m">
			<tr>
				<td>Trail</td>
				<td>
					<input type="text" class="form-control" id="trail">
				</td>
			</tr>
			<tr>
				<td>Level</td>
				<td>
					<input type="number" class="form-control" id="level">
				</td>
			</tr>
			<tr>
				<td>Date</td>
				<td>
					<input type="date" class="form-control" id="event-date">
				</td>
			</tr>
			<tr>
				<td>Type</td>
				<td>
					<input type="text" class="form-control" id="type">
				</td>
			</tr>
			<tr>
				<td>Transit Distance</td>
				<td>
					<input type="number" class="form-control" id="t-distance" placeholder="Distance in Kms">
				</td>
			</tr>
			<tr>
				<td>Cycling Distance</td>
				<td>
					<input type="number" class="form-control" id="c-distance" placeholder="Distance in Kms">
				</td>
			</tr>
			<tr>
				<td>Cost Per Person</td>
				<td>
					<input type="number" class="form-control" id="cost" placeholder="Cost in rupees">
				</td>
			</tr>
			<tr>
				<td>Mentor Name</td>
				<td>
					<input type="text" class="form-control" id="mentor-name">
				</td>
			</tr>
			<tr>
				<td>Mentor Email</td>
				<td>
					<input type="text" class="form-control" id="mentor-email">
				</td>
			</tr>
			<tr>
				<td>Mentor Mobile</td>
				<td>
					<input type="text" class="form-control" id="mentor-mobile">
				</td>
			</tr>
			<tr>
				<td>Mentor Exp</td>
				<td>
					<input type="text" class="form-control" id="mentor-exp">
				</td>
			</tr>
			<tr>
				<td>Mentor Image</td>
				<td>
					<input type="file" class="form-control" id="mentor-img">
				</td>
			</tr>
			<tr>
				<td>Event Description</td>
				<td>
					<textarea class="form-control" rows="15" id="event-desc"></textarea>
				</td>
			</tr>
			<tr>
				<td>Event Banner</td>
				<td>
					<input type="file" class="form-control" id="event-banner">
				</td>
			</tr>
			<tr>
				<td>Elevation Image</td>
				<td>
					<input type="file" class="form-control" id="elevation-img">
				</td>
			</tr>
		</table>
	</div>
	<div class="col-12 col-sm-6 col-md-6" id="gallery-images">
		<h4 class="pad-l15 mar-b20">
			Gallery
			<button class="btn compact btn-success pad-5-10" title="Add a photo" onclick="addMorePhotos()">+</button>
		</h4>
		<div class="col-12 row mar-b15">
			<div class="col-8">
				<input type="file" class="form-control gallery-img">
			</div>
			<div class="col-4">
				<button class="btn compact btn-danger pad-5-10" onclick="removePhoto(this)">&times;</button>
			</div>
		</div>
	</div>
	<button class="btn btn-success mar-b20" onclick="saveEvent(this)">Save</button>
</div>