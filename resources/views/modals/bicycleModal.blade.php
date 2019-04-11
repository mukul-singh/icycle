<div class="col-12 pad-30 lgrey ft-13 row">
    <div class="col-12 col-sm-5 col-md-5 text-center">
        <div id="bicycle-carousel-detail" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <?php foreach ($bicycle->images as $key => $image) {?>
                <li data-target="#bicycle-carousel-detail" data-slide-to="{{$key}}" {{$key == 0 ? 'class="active"' : ''}}></li>
                 <?php } ?>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <?php foreach ($bicycle->images as $key => $image) {?>
                <div class="carousel-item{{$key == 0 ? ' active' : ''}}">
                    <img src="{{BASE_URL}}images/uploads/bicycles/{{$image->image}}" class="img-fluid">
                </div>
                <?php } ?>
            </div>
            <?php if(count($bicycle->images) > 1) {?>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#bicycle-carousel-detail" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#bicycle-carousel-detail" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
            <?php } ?>
        </div>
    </div>
    <div class="col-12 col-sm-7 col-md-7">
        <h3 class="ft-24 bold">{{$bicycle->name}}</h3>
        <ul class="list-unstyled ft-13">
            <li class="line-ht-20">{{@$bicycle->specs[0]}}</li>
            <li class="line-ht-20">{{@$bicycle->specs[1]}}</li>
            <li class="line-ht-20">{{@$bicycle->specs[2]}}</li>
            <li class="line-ht-20">{{@$bicycle->specs[3]}}</li>
        </ul>
        <hr class="dark"/>
        <div class="row">
            <div class="col-6">
                Weekdays<br/>
                <div class="ft-24 mar-b15 bold">Rs.{{$bicycle->weekday_price}}/-</div><br/>
                <button class="btn compact full-w bg-gradient">HIRE NOW</button>
            </div>
        </div>
    </div>
</div>