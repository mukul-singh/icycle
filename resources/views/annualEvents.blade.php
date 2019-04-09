<div class="col-12 col-sm-9 col-md-8 center bg-white nopad lgrey row mar-t-m50 row-nomar">
    <div id="annual-event" class="carousel slide" data-ride="carousel">
        <!-- The slideshow -->
        <div class="carousel-inner">
            <?php foreach($events as $key => $event) {?>
            <div class="carousel-item{{($key == 0) ? ' active' : ''}}">
                <div class="col-12 row row-nomar nopad">
                    <div class="col-12 col-sm-6 col-md-6 pad-60-30 text-center">
                        <br/><br/>
                        <img src="{{BASE_URL}}images/uploads/annual-events/banners/{{$event->banner}}" class="img-fluid">
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 pad-l0 pad-60-30 xs-pad-20">
                        <br/>
                        <div class="ft-32 mar-b20 bold">{{$event->title}}</div>
                        <p class="text-justify ft-16 line-ht-17">{{$event->description}}</p>
                        <br/>
                        <a href="{{$event->url}}" target="_blank">
                            <button class="btn bg-gradient">VISIT THE WEBSITE</button>
                        </a>
                        <br/><br/><br/>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#annual-event" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#annual-event" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>