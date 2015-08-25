<!doctype html>
<html>
	 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="css/bootstrap.min.css" />
    	<link rel="stylesheet" href="css/jquery.fullPage.css" />
        <link rel="stylesheet" href="css/main.css" />
    </head>    

    <body>
    	<div class="">
    		
	    	<header>  
            <div class="top">  	
	    	  <img src="img/accenture.png" class="logo" /> 	
            </div>
            <div class="bottom">
	    		<ul class="menus">
	    			<li>
                        <a>HOME</a>                                     
                    </li>
	    			<li><a>AWARDEE <span class="caret"></span></a>
                        <ul class="tago child-menu">
                            <li>Option 1</li>
                            <li>Option 2</li>
                        </ul>   
                    </li> 
	    			<li><a>CAREER COUNSELOR  <span class="caret"></span></a>
                        <ul class="tago child-menu">
                            <li>Option 1</li>
                            <li>Option 2</li>
                            <li>Option 3</li>
                        </ul>   
                    </li> 
	    			<li><a>PAYROLL FILES  <span class="caret"></span></a>
                        <ul class="tago child-menu">
                            <li>Option 1</li>
                            <li>Option 2</li>
                            <li>Option 3</li>
                            <li>Option 4</li>
                        </ul>  
                    </li> 
	    			<li><a>AWARDEE ADDRESS  <span class="caret"></span></a>
                        <ul class="tago child-menu">
                            <li>Option 1</li>
                            <li>Option 2</li>
                            <li>Option 3</li>
                        </ul>  
                    </li> 
	    		</ul>   
            </div>	
	    	</header>
	  		<div id="fullpage">
			   
                <div class="section" style="background-color:#444444">1</div>
			    <div class="section" style="background-color:#777777">2</div>
			    <div class="section" style="background-color:#aaaaaa">3</div>
			    <div class="section" style="background-color:#bbbbbb">4</div>
			    <div class="section" style="background-color:#cccccc">5</div>
			    <div class="section" style="background-color:#444444">
			    	<div class="col-md-12" style="text-align:center">
                        <nav class="social">
                            <a href="#"><img src="img/fb.svg"></a>
                            <a href="#"><img src="img/gmail.svg"></a>
                            <a href="#"><img src="img/twitter.svg"></a> 
                        </nav>
                    </div>                    
			    </div>
			</div>
	    	
    	</div>
    	<script src="js/jquery_2x.min.js" ></script>
    	<script src="js/jquery.fullPage.min.js"></script>
    	<script>
			$(function() {
				$('#fullpage').fullpage();
			});
    	</script>
    </body>
</html>
