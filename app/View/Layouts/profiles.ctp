<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employee Profile</title>

<?php
    echo $this->Html->css('main-style');
    echo $this->Html->css('responsive');
?>
<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>



<!--		<?php echo $this->Html->css('component');?><link rel="stylesheet" type="text/css" href="scripts/button/css/component.css" />-->
            <script src="<?php echo Router::url('/',true)?>app/webroot/js/modernizr.custom.js"></script>
        
        <style type="text/css">
    .hideAll  {
        visibility:hidden;
		height:100%!important;
     }
	 #tabs2{ width:100%;
	 height:100%;
	 background:#FFF;}
	 
	 
</style>
</head>
<body>
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>
</body>
</html>