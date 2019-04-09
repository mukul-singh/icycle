<div class="container-fluid row row-nomar">
	<div class="col-12 col-sm-6 col-md-6 nopad">
		<table class="table v-align-m">
			<tr>
				<td>Title</td>
				<td>
					<input type="text" class="form-control" id="title" value="<?=isset($event) ? $event->title : '';?>">
				</td>
			</tr>
			<tr>
				<td>Description</td>
				<td>
					<textarea class="form-control" id="description" rows="5"><?=isset($event) ? $event->description : '';?></textarea>
				</td>
			</tr>
			<tr>
				<td>Website URL</td>
				<td>
					<input type="text" class="form-control" id="url" value="<?=isset($event) ? $event->url : '';?>">
				</td>
			</tr>
			<tr>
				<td>Event Image</td>
				<td>
					<input type="file" id="banner" class="form-control">
				</td>
			</tr>
		</table>
		<button class="btn btn-success mar-b20" onclick="saveAnnualEvent(this, <?=(isset($event) ? $event->id : '0');?>)">Save</button>
	</div>
</div>