<div class="container-fluid row row-nomar">
	<div class="col-12 col-sm-6 col-md-6 nopad">
		<table class="table v-align-m">
			<tr>
				<td>Trail</td>
				<td>
					<input type="text" class="form-control" id="trail" value="<?=isset($event) ? $event->trail : '';?>">
				</td>
			</tr>
			<tr>
				<td>Level</td>
				<td>
					<input type="number" class="form-control" id="level" value="<?=isset($event) ? $event->level : '';?>">
				</td>
			</tr>
			<tr>
				<td>Date</td>
				<td>
					<input type="date" class="form-control" id="event-date" value="<?=isset($event) ? substr($event->date, 0, 10) : '';?>">
				</td>
			</tr>
			<tr>
				<td>Type</td>
				<td>
					<input type="text" class="form-control" id="type" value="<?=isset($event) ? $event->type : '';?>">
				</td>
			</tr>
			<tr>
				<td>Transit Distance</td>
				<td>
					<input type="number" class="form-control" id="t-distance" placeholder="Distance in Kms" value="<?=isset($event) ? $event->transit_distance : '';?>">
				</td>
			</tr>
			<tr>
				<td>Cycling Distance</td>
				<td>
					<input type="number" class="form-control" id="c-distance" placeholder="Distance in Kms" value="<?=isset($event) ? $event->cycling_distance : '';?>">
				</td>
			</tr>
			<tr>
				<td>Cost Per Person</td>
				<td>
					<input type="number" class="form-control" id="cost" placeholder="Cost in rupees" value="<?=isset($event) ? $event->cost : '';?>">
				</td>
			</tr>
			<tr>
				<td>Mentor Name</td>
				<td>
					<input type="text" class="form-control" id="mentor-name" value="<?=isset($event) ? $event->mentor_name : '';?>">
				</td>
			</tr>
			<tr>
				<td>Mentor Email</td>
				<td>
					<input type="text" class="form-control" id="mentor-email" value="<?=isset($event) ? $event->mentor_email : '';?>">
				</td>
			</tr>
			<tr>
				<td>Mentor Mobile</td>
				<td>
					<input type="text" class="form-control" id="mentor-mobile" value="<?=isset($event) ? $event->mentor_mobile : '';?>">
				</td>
			</tr>
			<tr>
				<td>Mentor Exp</td>
				<td>
					<input type="text" class="form-control" id="mentor-exp" value="<?=isset($event) ? $event->mentor_exp : '';?>">
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
					<textarea class="form-control" rows="15" id="event-desc"><?=isset($event) ? $event->description : '';?></textarea>
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
		<table class="table bordered" id="detail-points">
			<tr>
				<th>
					Detail Points
					<button class="btn compact btn-success pad-5-10" onclick="addMorePoints()">+</button>
				</th>
				<th></th>
				<th></th>
			</tr>
			<?php if(isset($event)) {
				foreach($event->infoPoints as $point) {?>
				<tr class="point">
					<td>
						<input type="text" class="form-control key" placeholder="Key" value="{{$point->key}}">
					</td>
					<td>
						<input type="text" class="form-control value" placeholder="Value" value="{{$point->value}}">
					</td>
					<td>
						<button class="btn compact btn-danger pad-5-10" onclick="removePoint(this)">&times;</button>
					</td>
				</tr>
			<?php }
			} ?>
			<tr class="point">
				<td>
					<input type="text" class="form-control key" placeholder="Key">
				</td>
				<td>
					<input type="text" class="form-control value" placeholder="Value">
				</td>
				<td>
					<button class="btn compact btn-danger pad-5-10" onclick="removePoint(this)">&times;</button>
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
			<?php if(isset($event)) {
				foreach($event->gallery as $image) { ?>
				<div class="col-3 pad-r0 mar-b15">
					<button class="btn-xs btn-danger rounded absolute" onclick="deleteGalleryImage({{$event->id}}, {{$image->id}}, this)">Delete</button>
					<img src="{{BASE_URL}}images/uploads/weekend-events/gallery/{{$image->image}}" class="img-fluid rounded">
				</div>
			<?php } ?>
				<div class="col-12 mar-b20"></div>
			<?php } ?>
			<div class="col-8">
				<input type="file" class="form-control gallery-img">
			</div>
			<div class="col-4">
				<button class="btn compact btn-danger pad-5-10" onclick="removePhoto(this)">&times;</button>
			</div>
		</div>
	</div>
	<button class="btn btn-success mar-b20" onclick="saveEvent(this, <?=(isset($event) ? $event->id : '0');?>)">Save</button>
</div>