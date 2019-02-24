<body class="bg-green-2">
    <div class="tint-bg" bg-img="about-splash.png">
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
        <br/><br/>
        <div class="ft-54 text-center thin">{{$pageTitle}}</div>
        <br/><br/><br/><br/><br/><br/>
    </div>
