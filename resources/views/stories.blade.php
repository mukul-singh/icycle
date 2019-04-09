<div class="col-12 col-sm-9 col-md-8 center bg-white pad-60-30 lgrey ft-13 mar-t-m50">
    <center><img src="{{BASE_URL}}images/icons/stories.png" class="mar-b20"></center>
    <p class="col-12 col-sm-11 col-md-11 center text-center">
        The main target audience for ICYCLE events are the employees from the Corporate
        fraternity. The growing popularity of cycling in the cities is due to the
        interest shown in cycling by these working professionals.
    </p>
    <br/>
    <center><button class="btn bg-gradient">SUBMIT YOUR STORY</button></center>
    <br/><br/><br/>
    <div class="col-12 col-sm-9 col-md-9 pad-l0 row center">
        <div class="col-12 col-sm-6 col-md-6 pad-r0">
            <label class="small bold">SEARCH A STORY</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-12 col-sm-3 col-md-3 pad-r0">
            <label class="small bold">FILTER BY YEAR</label>
            <select class="form-control">
                <option>Select</option>
            </select>
        </div>
        <div class="col-12 col-sm-3 col-md-3 pad-r0">
            <label class="small bold">FILTER BY MONTH</label>
            <select class="form-control">
                <option>Select</option>
            </select>
        </div>
    </div>
</div>
<br/>
<div class="text-center ft-13">
    SHOWING 1-12 OF 213<span class="pad-10">|</span>Next<span class="pad-10">|</span>Previous
</div>
<br/><br/><br/>
<div class="col-12 col-sm-9 col-md-8 center pad-l0 xs-pad-20">
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
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>
