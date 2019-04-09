<body class="bg-green-2">
    <div class="tint-bg" bg-img='{{BASE_URL}}images/{{str_replace(" ", "-", strtolower($pageTitle))}}-splash.png'>
        <?= $navbar;?>
        <br/><br/>
        <div class="ft-54 text-center thin xs-ft-32">{{$pageTitle}}</div>
        <?php if(isset($subTitle)) { ?>
        	<div class="ft-20 bold text-center">{{$subTitle}}</div>
        <?php } ?>
        <br/><br/><br/><br/><br/><br/>
    </div>
