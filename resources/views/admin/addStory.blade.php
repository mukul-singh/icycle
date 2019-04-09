<div class="container-fluid row row-nomar">
	<div class="col-12 col-sm-6 col-md-6 nopad">
		<table class="table v-align-m">
			<tr>
				<td>Title</td>
				<td>
					<input type="text" class="form-control" id="title" value="<?=isset($story) ? $story->title : '';?>">
				</td>
			</tr>
			<tr>
				<td>Sub Title</td>
				<td>
					<input type="text" class="form-control" id="sub_title" value="<?=isset($story) ? $story->sub_title : '';?>">
				</td>
			</tr>
			<tr>
				<td>Content</td>
				<td>
					<textarea class="form-control" id="content" rows="5"><?=isset($story) ? $story->content : '';?></textarea>
				</td>
			</tr>
			<tr>
				<td>Date</td>
				<td>
					<input type="date" class="form-control" id="date" value="<?=isset($story) ? substr($story->date, 0, 10) : '';?>">
				</td>
			</tr>
			<tr>
				<td>Story Image</td>
				<td>
					<input type="file" id="banner" class="form-control">
				</td>
			</tr>
		</table>
		<button class="btn btn-success mar-b20" onclick="saveStory(this, <?=(isset($story) ? $story->id : '0');?>)">Save</button>
	</div>
</div>