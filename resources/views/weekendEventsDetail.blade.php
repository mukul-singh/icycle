<div class="col-12 col-sm-9 col-md-8 center bg-white nopad lgrey row mar-t-m50 row-nomar">
    <div class="col-12 col-sm-6 col-md-6 pad-30 row row-nomar">
        <div class="col-12 mar-b20">
            <div>TRAIL</div>
            <b>{{$event->trail}}</b>
        </div>
        <div class="col-6 mar-b20">
            <div>Level</div>
            <b>{{$event->level}}</b>
        </div>
        <div class="col-6 mar-b20">
            <div>Type</div>
            <b>{{$event->type}}</b>
        </div>
        <div class="col-6 mar-b20">
            <div>Transit Distance</div>
            <b>{{$event->transit_distance}} Kms</b>
        </div>
        <div class="col-6 mar-b20">
            <div>Cycling Distance</div>
            <b>{{$event->cycling_distance}} Kms</b>
        </div>
        <div class="col-12 mar-b20">
            <div>Cost per person</div>
            <b>Rs. {{$event->cost}}/-</b>
        </div>
        <div class="col-6 mar-b20">
            <button class="btn compact bg-gradient">BOOK NOW</button>
        </div>
        <div class="col-6 mar-b20">
            <button class="btn compact">WISHLIST</button>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-6 nopad">
        <img src="{{BASE_URL}}images/uploads/weekend-events/banner/{{$event->banner}}" class="full-w">
    </div>
    <div class="col-12 col-sm-6 col-md-6">
    </div>
    <div class="col-12 col-sm-6 col-md-6 mentor">
        <table>
            <tr>
                <td>
                    <img src="{{BASE_URL}}images/uploads/weekend-events/mentor/{{$event->mentor_img}}" class="img-fluid avatar">
                </td>
                <td>
                    MENTOR INFORMATION<br/>
                    Name: {{$event->mentor_name}}<br/>
                    Email: {{$event->mentor_email}}<br/>
                    Mobile: {{$event->mentor_mobile}}<br/>
                    Exp: {{$event->mentor_exp}}
                </td>
            </tr>
        </table>
    </div>
    <div class="col-12"></div>
    <div class="col-12 col-sm-8 col-md-8 pad-30 pad-r0 thin text-justify">
        <p class="pad-30"><?=nl2br($event->description);?></p>
    </div>
    <div class="col-12 col-sm-4 col-md-4">
        <br/><br/><br/>
         <?php foreach($event->infoPoints as $info) {?>
        <div class="mar-b20 pad-l15">
            {{$info->key}}<br/><b>{{$info->value}}</b>
        </div>
        <?php } ?>
    </div>
    <div class="col-12 mar-b20">
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <?php for($i = 0; $i < count($event->gallery); $i++) {?>
                <div class="carousel-item col-md-2 {{($i == 0) ? 'active':''}}">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="{{BASE_URL}}images/uploads/weekend-events/gallery/{{$event->gallery[$i]->image}}">
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-12 mar-b20"></div>
</div>