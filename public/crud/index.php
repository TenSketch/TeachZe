<?php 
include('header.php');
?>
<title>Doozy</title>
<script type="text/javascript" src="script/form.js"></script>

<style type="text/css">
  #register_form fieldset:not(:first-of-type) {
    display: none;
  }
  
    body {
        background-image: url("bg1.png");
       /*background-image: url("1.jpeg");*/
        background-repeat: no-repeat;
        background-size: 2300px 1200px;
    }
    
    h1{
        font-size:60px;
        font-weight:600px; 
        text-align:center;
        color:#0052cc;
    }
    
    .form-control {
        display: block;
        width: 100%;
        height: 78px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    /* style="padding-top:200px;"*/

</style>
<?php //include('container.php');?>
<body>
<div class="container">
	<!--<h2>Enter Your Name</h2>-->
	<!--<div class="progress">-->
	<!--<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>-->
	<!--</div>--><br /><br /><br /><br />
	<div class="alert alert-success hide"></div>	
	<form id="register_form" novalidate action="multi_form_action.php"  method="post">	
	
	<fieldset class="contentpos">
	    <br />
    	<div class="form-group">
    	    <img src="robo.png" alt="bg" style="margin-top:-100px; margin-left:-600px;">
    	    <img src="welcome.png" alt="bg" style="margin-left:300px;">
    	</div>
    	<input type="button" class="next-form btn btn-info" value="Next" style="margin-top:-700px;margin-left:450px; padding: 13px 36px;"/>
	</fieldset>	
	
	<fieldset class="contentpos">
	    <img src="reg.png" alt="bg" style="margin-top:400px; margin-left:200px;">
	    <input type="button" class="previous-form btn btn-default" value="No" style="margin-top:50px;margin-left:400px; padding: 13px 36px;"/>
	    <input type="button" class="next-form btn btn-info" value="Yes" style="margin-top:50px;margin-left:40px; padding: 13px 36px;"/>
	</fieldset>	
	
	
	
	<fieldset class="contentpos">
	    <!--<img src="back.png" alt="bg" style="margin-top:-900px; margin-left:-600px;">-->
	    <img src="name.png" alt="bg" style="margin-top:400px; margin-left:200px;">
    	<div class="form-group">
    	    <input type="text" class="form-control" required id="first_name" name="first_name" placeholder="">
    	</div><br /><br />
    	<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" align="center" style="padding: 13px 36px;"/>
	    <input type="button" class="next-form btn btn-info" value="Next"  align="center" style="padding: 13px 36px;"/>
	</fieldset>	
	
	<fieldset class="contentpos">
	    <img src="mobile.png" alt="bg" style="margin-top:400px; margin-left:200px;">
    	<div class="form-group">
    	    <input type="text" class="form-control" required id="mobile" name="mobile" placeholder="">
    	</div><br /><br />
    	<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" style="padding: 13px 36px;" />
	    <input type="button" class="next-form btn btn-info" value="Next" style="padding: 13px 36px;" />
	</fieldset>	
	
	<fieldset class="contentpos">
	    <img src="email.png" alt="bg" style="margin-top:400px; margin-left:200px;">
    	<div class="form-group">
    	    <input type="text" class="form-control" required id="email" name="email" placeholder="">
    	</div><br /><br />
    	<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" style="padding: 13px 36px;" />
	    <input type="submit" name="submit" class="submit btn btn-success" value="Submit" style="padding: 13px 36px;" />
	</fieldset>	
	</form>
</div>
</body>
<?php include('../footer.php');?> 