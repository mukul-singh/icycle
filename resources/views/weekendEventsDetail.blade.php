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
        <img src="{{BASE_URL}}images/uploads/weekend-events/banner/{{$event->banner}}.png" class="full-w">
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
        <?php for($i = 0; $i < 8; $i++) {?>
        <div class="mar-b20 pad-l15">
            Event Start Point<br/><b>Swimming Pool</b>
        </div>
        <?php } ?>
    </div>
    <div class="col-12">
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-md-2  active">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 1" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=1" alt="slide 1">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-2 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 3" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=2" alt="slide 2">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-2 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 4" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=3" alt="slide 3">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-2 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 5" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=4" alt="slide 4">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-2 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 6" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=5" alt="slide 5">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-2 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 7" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6" alt="slide 6">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-2 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 8" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=7" alt="slide 7">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-2  ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 2" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=8" alt="slide 8">
                            </a>
                        </div>
                    </div>
                </div>
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
</div>