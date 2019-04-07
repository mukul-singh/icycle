<body>
	<div class="homepage-splash">
        <div class="tint">
            <?= $navbar;?>
            <div class="col-12 banner nopad">
                <div class="col-12 col-sm-10 col-md-10 center nopad xs-pad-20">
                    <div class="col-12 col-sm-8 col-md-8 quote nopad mar-b15">Rediscover Cycling. Recreate yourself.</div>
                    <div class="row col-12 col-sm-8 col-md-8 xs-nopad xs-nomar">
                        <div class="col-4 pad-l0">
                            <div class="ft-32 color-gradient"><b>534184</b></div>
                            <div class="ft-16"><b>KMS OF RIDE</b></div>
                        </div>
                        <div class="col-4 pad-l0">
                            <div class="ft-32 color-gradient"><b>555</b></div>
                            <div class="ft-16"><b>EVENTS SO FAR</b></div>
                        </div>
                        <div class="col-4 pad-l0">
                            <div class="ft-32 color-gradient"><b>7389</b></div>
                            <div class="ft-16"><b>RIDERS AND GROWING</b></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mar-b15"></div>
                <div class="col-12 col-sm-10 col-md-10 row nopad center xs-pad-l20">
                    <div class="col-5 col-sm-2 col-md-2 banner-links mar-b20">
                        <img src="{{BASE_URL}}images/hire-cycle.png" class="hidden-xs img-fluid mar-b15">
                        <a href="{{BASE_URL}}hire-a-bicycle">
                            <table>
                                <tr>
                                    <td class="ft-16 bold">HIRE A BICYCLE</td>
                                    <td><img src="{{BASE_URL}}images/icons/right.png" width="14"></td>
                                </tr>
                            </table>
                        </a>
                    </div>
                    <div class="col-5 col-sm-2 col-md-2 banner-links mar-b20">
                        <img src="{{BASE_URL}}images/weekend.png" class="hidden-xs img-fluid mar-b15">
                        <a href="{{BASE_URL}}weekend-events">    
                            <table>
                                <tr>
                                    <td class="ft-16 bold">WEEKEND RIDES</td>
                                    <td><img src="{{BASE_URL}}images/icons/right.png" width="14"></td>
                                </tr>
                            </table>
                        </a>
                    </div>
                    <div class="col-5 col-sm-2 col-md-2 banner-links mar-b20">
                        <img src="{{BASE_URL}}images/annual.png" class="hidden-xs img-fluid mar-b15">
                        <a href="{{BASE_URL}}annual-events">
                            <table>
                                <tr>
                                    <td class="ft-16 bold">ANNUAL EVENTS</td>
                                    <td><img src="{{BASE_URL}}images/icons/right.png" width="14"></td>
                                </tr>
                            </table>
                        </a>
                    </div>
                    <div class="col-5 col-sm-2 col-md-2 banner-links mar-b20">
                        <img src="{{BASE_URL}}images/hub.png" class="hidden-xs img-fluid mar-b15">
                        <a href="{{BASE_URL}}cyclotours">
                            <table>
                                <tr>
                                    <td class="ft-16 bold">CYCLOTOUR HUB</td>
                                    <td><img src="{{BASE_URL}}images/icons/right.png" width="14"></td>
                                </tr>
                            </table>
                        </a>
                    </div>
                    <div class="col-5 col-sm-2 col-md-2 banner-links mar-b20">
                        <img src="{{BASE_URL}}images/corporate.png" class="hidden-xs img-fluid mar-b15">
                        <a href="{{BASE_URL}}corporate-events">
                            <table>
                                <tr>
                                    <td class="ft-16 bold">CORPORATE PROGRAMS</td>
                                    <td><img src="{{BASE_URL}}images/icons/right.png" width="14"></td>
                                </tr>
                            </table>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section bg-green-1 xs-pad-l20 xs-pad-r20">
    	<div class="text-center ft-16 bold">WHO WE ARE</div>
        <br/><br/>
    	<p class="text-align col-12 col-sm-8 col-md-8 center ft-24 thin">
    		We are a Bangalore based startup, catering to growing needs of urban cyclists.
    		Under the brand name ICYCLE, the company offers unique cycling solutions.
    		We are the pioneers in bicycle fleet management with customized support system.
    	</p>
        <br/><br/>
        <div class="col-12 col-sm-9 col-md-9 center row bg-gradient home-testimonial">
            <div class="col-1 pad-l0">
                <img src="{{BASE_URL}}images/icons/testimonial.png" class="img-fluid">
            </div>
            <div class="col-11 col-sm-7 col-md-7">
                <h3 class="ft-16 bold">YUVRAJ METRANI</h3>
                <p class="ft-16">
                    Riding uphill, on a warm October afternoon at a slow and steady pace,
                    I kept telling myself "stay calm, you have a long way to go".
                    I had to preserve my energy for the final 3 kilometers to the peak.
                    I was one of the 45 cyclists riding on the 4th day of Great Malnad Challenge - 2014.
                    We had started off from Madikeri and had cycled to Chikmagalur covering 260km off road trails in 3 days on MTB.
                </p>
            </div>
            <div class="col-sm-4 col-md-4 hidden-xs nopad">
                <img src="{{BASE_URL}}images/testimonial-pic.png" class="img-fluid">
            </div>
        </div>
        <br/><br/><br/>
        <div class="col-12 col-sm-9 col-md-9 center row bg-white pad-30">
            <div class="col-12 col-sm-6 col-md-6 row nomar nopad">
                <?php for($i = 0; $i < 4; $i++) {?>
                <div class="col-6 col-sm-3 col-md-3 pad-r0 xs-mar-b20">
                    <img src="{{BASE_URL}}images/sponser{{$i+1}}.png" class="img-fluid">
                </div>
                <?php } ?>
            </div>
            <div class="col-12 col-sm-6 col-md-6 row nomar nopad">
                <?php for($i = 0; $i < 4; $i++) {?>
                <div class="col-6 col-sm-3 col-md-3 pad-r0 xs-mar-b20">
                    <img src="{{BASE_URL}}images/sponser{{$i+5}}.png" class="img-fluid">
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="section bg-green-2">
        <center><img src="{{BASE_URL}}images/icons/stories.png" width="50" class="mar-b15"></center>
        <div class="text-center ft-16 bold">IMPACT STORIES</div>
        <br/><br/>
        <div class="col-12 col-sm-9 col-md-9 center pad-l0 xs-pad-20">
            <div class="row xs-nomar">
                <?php for($i = 0; $i < 3; $i++) {?>
                <div class="col-12 col-sm-4 col-md-4 pad-r0 xs-nopad xs-mar-b20">
                    <div class="bg-white story">
                        <img src="{{BASE_URL}}images/story1.png" class="img-fluid story-img">
                        <div class="breif">
                            <div class="date">06 DEC 2017</div>
                            <div class="ft-24 mar-b10">Excellent Ride Done Ever</div>
                            <p>
                                The ICYCLE staff were also very supportive and cordial throughout.
                                Thank you for the entire arrangem...
                            </p>
                            <div class="bg-gradient more float-right">
                                <img src="{{BASE_URL}}images/icons/right-white.png">
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    </div>
