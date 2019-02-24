<body>
	<div class="homepage-splash">
        <div class="tint">
            <div class="nav">
                <div class="logo col-12 col-md-4 col-sm-4 nopad">
                    <img src="assets/images/icons/nav.png" onclick="openNav()" class="visible-xs xs-nav-menu" width="20">
                    <a href="{{BASE_URL}}"><img src="{{BASE_URL}}images/logo.png" class="mar-l15" height="50"></a>
                </div>
                <div class="col-md-8 col-sm-8 nopad hidden-xs">
                    <ul class="list-unstyled list-inline nav-links float-right nomar">
                        <li class="list-inline-item"><a href="{{BASE_URL}}services">SERVICES</a></li>
                        <li class="list-inline-item"><a href="{{BASE_URL}}stories">IMPACE STORIES</a></li>
                        <li class="list-inline-item"><a href="{{BASE_URL}}icycle-store">ICYCLE STORE</a></li>
                        <li class="list-inline-item"><a href="{{BASE_URL}}bicycle">BICYCLE SOS</a></li>
                        <li class="list-inline-item"><a href="{{BASE_URL}}about">ABOUT</a></li>
                        <li class="list-inline-item"><a href="{{BASE_URL}}contact">CONTACT</a></li>
                        <li class="list-inline-item"><a href="{{BASE_URL}}login">LOGIN/REGISTER</a></li>
                    </ul>
                </div>
                <div id="mySidenav" class="sidenav">
                    <img src="assets/images/icons/close-cancel.svg" width="12" class="float-right" onclick="closeNav()">
                    <ul class="list-unstyled list-inline">
                        <li class="mar-b15"><a href="{{BASE_URL}}services">SERVICES</a></li>
                        <li class="mar-b15"><a href="{{BASE_URL}}stories">IMPACE STORIES</a></li>
                        <li class="mar-b15"><a href="{{BASE_URL}}icycle-store">ICYCLE STORE</a></li>
                        <li class="mar-b15"><a href="{{BASE_URL}}bicycle">BICYCLE SOS</a></li>
                        <li class="mar-b15"><a href="{{BASE_URL}}about">ABOUT</a></li>
                        <li class="mar-b15"><a href="{{BASE_URL}}contact">CONTACT</a></li>
                        <li class="mar-b15"><a href="{{BASE_URL}}login">LOGIN/REGISTER</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 banner nopad">
                <div class="col-12 col-sm-10 col-md-10 center nopad">
                    <div class="col-12 col-sm-8 col-md-8 quote nopad mar-b15">Rediscover Cycling. Recreate yourself.</div>
                    <div class="row col-12 col-sm-8 col-md-8">
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
                <div class="col-12 col-sm-10 col-md-10 row nopad center">
            	<?php for($i = 1; $i <= 5; $i++) {?>
                	<div class="col-5 col-sm-2 col-md-2 banner-links">
                		<img src="{{BASE_URL}}images/hire-cycle.png" class="img-fluid mar-b15">
                		<table>
                			<tr>
                				<td class="ft-16 bold">HIRE A BICYCLE</td>
                				<td><img src="{{BASE_URL}}images/icons/right.png" width="14"></td>
                			</tr>
                		</table>
                	</div>
                	<?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section bg-green-1">
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
            <div class="col-7">
                <h3 class="ft-16 bold">YUVRAJ METRANI</h3>
                <p class="ft-16">
                    Riding uphill, on a warm October afternoon at a slow and steady pace, 
                    I kept telling myself "stay calm, you have a long way to go". 
                    I had to preserve my energy for the final 3 kilometers to the peak. 
                    I was one of the 45 cyclists riding on the 4th day of Great Malnad Challenge - 2014. 
                    We had started off from Madikeri and had cycled to Chikmagalur covering 260km off road trails in 3 days on MTB.
                </p>
            </div>
            <div class="col-4 nopad">
                <img src="{{BASE_URL}}images/testimonial-pic.png" class="img-fluid">
            </div>
        </div>
        <br/><br/><br/>
        <div class="col-12 col-sm-9 col-md-9 center row bg-white pad-30">
            <div class="col-12 col-sm-6 col-md-6 row nomar nopad">
                <?php for($i = 0; $i < 4; $i++) {?>
                <div class="col-6 col-sm-3 col-md-3 pad-r0">
                    <img src="{{BASE_URL}}images/sponser.png" class="img-fluid">
                </div>
                <?php } ?>
            </div>
            <div class="col-12 col-sm-6 col-md-6 row nomar nopad">
                <?php for($i = 0; $i < 4; $i++) {?>
                <div class="col-6 col-sm-3 col-md-3 pad-r0">
                    <img src="{{BASE_URL}}images/sponser.png" class="img-fluid">
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="section bg-green-2">
        <center><img src="{{BASE_URL}}images/icons/stories.png" width="50" class="mar-b15"></center>
        <div class="text-center ft-16 bold">IMPACT STORIES</div>
        <br/><br/>
        <div class="col-12 col-sm-9 col-md-9 center nopad row">
            <div class="row">
                <?php for($i = 0; $i < 3; $i++) {?>
                <div class="col-12 col-sm-4 col-md-4">
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
