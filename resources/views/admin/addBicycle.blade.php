<div class="container-fluid row row-nomar">
	<div class="col-12 col-sm-6 col-md-6">
		<table class="table">
			<tr>
				<td>Name</td>
				<td>
					<input type="text" class="form-control" id="name" value="<?=isset($bicycle) ? $bicycle->name : '';?>">
				</td>
			</tr>
			<tr>
				<td>Weekend Price</td>
				<td>
					<input type="number" class="form-control" id="weekend_price" value="<?=isset($bicycle) ? $bicycle->weekend_price : '';?>">
				</td>
			</tr>
			<tr>
				<td>Weekday Price</td>
				<td>
					<input type="number" class="form-control" id="weekday_price" value="<?=isset($bicycle) ? $bicycle->weekday_price : '';?>">
				</td>
			</tr>
			<tr>
				<td>Specs</td>
				<td>
					<textarea class="form-control" rows="15" placeholder="Enter bicycle specs separated by new line" id="specs"><?=isset($bicycle) ? $bicycle->specs : '';?></textarea>
				</td>
			</tr>
		</table>
	</div>
	<div class="col-12 col-sm-6 col-md-6" id="gallery-images">
		<h4 class="pad-l15 mar-b20">
			Photos
			<button class="btn compact btn-success pad-5-10" title="Add a photo" onclick="addMorePhotos()">+</button>
		</h4>
		<div class="col-12 row mar-b15">
			<?php if(isset($bicycle)) {
				foreach($bicycle->images as $image) { ?>
				<div class="col-3 pad-r0 mar-b15">
					<button class="btn-xs btn-danger rounded absolute" onclick="deleteBicycleImage({{$bicycle->id}}, {{$image->id}}, this)">Delete</button>
					<img src="{{BASE_URL}}images/uploads/bicycles/{{$image->image}}" class="img-fluid rounded">
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
	<div class="col-12 mar-b20"></div>
	<button class="btn btn-success mar-b20" onclick="saveBicycle(this, <?=(isset($bicycle) ? $bicycle->id : '0');?>)">Save</button>
</div>