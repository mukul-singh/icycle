<div class="col-12 col-sm-9 col-md-9 center bg-white pad-10 lgrey ft-13 mar-t-m50">
    <div style="background-image:url('../../images/uploads/stories/banners/{{$story->banner}}');">
    	<div class="pad-60-30 text-center impact-story">
    		<br/><br/>
    		<div class="bold small">{{$story->date}}</div>
    		<div class="ft-44 thin xs-ft-32 line-ht-12">{{$story->title}}</div>
    		<div class="bold">{{$story->sub_title}}</div>
    		<br/><br/>
    	</div>
    </div>
    <div class="pad-60-30 xs-pad-20">
    	<div class="pad-20 text-justify">
	    	<p class="pad-60-30 xs-nopad line-ht-20"><?=nl2br($story->content)?></p>
	    </div>
    </div>
</div>
<?php if(count($stories)) {?>
<div class="col-12 text-center">
	<br/><br/><br/>
	<b>RELATED STORIES</b>
	<br/><br/><br/>
</div>
<div class="col-12 col-sm-9 col-md-9 center pad-l0 xs-pad-20">
    <div class="row xs-nomar">
        <?php foreach($stories as $story) {?>
        <div class="col-12 col-sm-4 col-md-4 mar-b15 pad-r0 xs-nopad">
            <div class="bg-white story">
                <img src="{{BASE_URL}}images/uploads/stories/banners/{{$story->banner}}" class="img-fluid story-img">
                <div class="breif">
                    <div class="date">{{$story->date}}</div>
                    <div class="ft-24 mar-b10">{{substr($story->title, 0, 15)}}</div>
                    <p>{{substr($story->content, 0, 55)}}...</p>
                    <a href="{{BASE_URL}}stories/{{urlencode($story->title)}}/{{base64_encode(base64_encode($story->id))}}">
                        <div class="bg-gradient more float-right">
                            <img src="{{BASE_URL}}images/icons/right-white.png">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php } ?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>