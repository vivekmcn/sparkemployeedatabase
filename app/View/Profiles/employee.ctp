<div id="tabs2">  <img src="<?php echo Router::url('/',true)?>app/webroot/img/loading.gif"  style=" position:absolute; left:20%"/></div>
<div id="wrap" class="hideAll">
<!--1st Coloume-->
<div class="frst-col">
<div class="logo">  <a href="#"> <img src="<?php echo  Router::url('/',true)?>app/webroot/img/logo.png" /></a> </div>

  <div class="title">
  <div class="tlleft"> <img src="<?php echo  Router::url('/',true)?>app/webroot/files/Avatars/<?php echo $employee['Employee']['image']?>"/> </div>
  <div class="tlright"> 
  <h1  id="stuff"><?php echo $employee['Employee']['fname']." ".$employee['Employee']['lname']?></h1>
      <h2> <?php echo $employee['Employeeposition']['position_name']?> </h2>
  <h3><?php echo $employee['Employeequalification']['qualification_name']?> </h3>
  
  <?php echo "<h3>";$fl=0; foreach($certifications as $certification) {
        $fl++;
        echo $certification['Certification']['certification_name'];
        if($fl==2){
            $fl=0;
            echo "</h3><h3>";
        }
        else{
            echo ", ";
        }
  }
  if($fl==1){
      echo "</h3>";
  }
  ?>
  
  </div>
  </div>
  
    <div class="tech">
    <h1> Technical  Proficiency</h1>
    <table width="100%" border="0" cellspacing="1">
    <?php
    foreach($skills as $key => $val){
        echo "<tr><td>".$key."</td><td>";
        foreach($val as $skillval){
            echo $skillval.", ";
        }
        echo "</td></tr>";
    }
    ?>
  
</table>

    
    </div>
    
      
  


</div>


<!--2nd Coloume-->
    <div class="secnd-col">
    
    
				
			
    
    <div class="sec-cnt">
    <h1> Prjoect Details</h1>
    <div id="scrollbar1">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport">
		<div class="overview">
             
             
             
              
        
        
        <!--project section	-->
                <div class="sec-prjct"> 
                
          
          <?php foreach($projects as $project) { 
              ?>
          <div class="prjct-outer">
          <div class="prjct-outer-top">          <h1> <em> </em><?php echo $project['Project']['title'] ?>  </h1>    </div>     
           
          <p>
          <?php echo  $project['Project']['description'] ?></p>
          
        
        <div class="cl-effect-20 ">
			<a href="<?php echo  $project['Project']['url'] ?>"><span class="prjct-lnk" data-hover="Live Demo">Live Demo</span></a>
				</div>
          
          </div>
          
          <?}?>
<!--          <div class="prjct-outer">
          <div class="prjct-outer-top">          <h1> <em> </em>Stringwire (NBC)  </h1>    </div>     
           
          <p>
          We are building an application that receives multiple concurrent live video streams from iOS and Android to a server, and allows an editor to concatenate parts of these incoming streams into a real-time switched video output (like a manually generated real-time playlist made up of multiple live videos). This final switched stream is then re-encoded back out for live viewing and storing</p>
          
        
        <div class="cl-effect-20 ">
			<a href="#"><span class="prjct-lnk" data-hover="Live Demo">Live Demo</span></a>
				</div>
          
          </div>
          
          
          <div class="prjct-outer">
          <div class="prjct-outer-top">          <h1> <em> </em>Stringwire (NBC)  </h1>    </div>     
           
          <p>
          We are building an application that receives multiple concurrent live video streams from iOS and Android to a server, and allows an editor to concatenate parts of these incoming streams into a real-time switched video output (like a manually generated real-time playlist made up of multiple live videos). This final switched stream is then re-encoded back out for live viewing and storing</p>
          
        
        <div class="cl-effect-20 ">
			<a href="#"><span class="prjct-lnk" data-hover="Live Demo">Live Demo</span></a>
				</div>
          
          </div>
          
          
          <div class="prjct-outer">
          <div class="prjct-outer-top">          <h1> <em> </em>Stringwire (NBC)  </h1>    </div>     
           
          <p>
          We are building an application that receives multiple concurrent live video streams from iOS and Android to a server, and allows an editor to concatenate parts of these incoming streams into a real-time switched video output (like a manually generated real-time playlist made up of multiple live videos). This final switched stream is then re-encoded back out for live viewing and storing</p>
          
        
        <div class="cl-effect-20 ">
			<a href="#"><span class="prjct-lnk" data-hover="Live Demo">Live Demo</span></a>
				</div>
          
          </div>
          -->
          
          
          
          
          
          
          
          
          
         
          
          
         
                
                
                
                
                </div>
        
        </div>
				
				
				
				                 
			</div>
		</div>
	</div>
    
        
    </div>


</div>


<link rel="stylesheet" href="<?php echo Router::url('/',true)?>app/webroot/css/website.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="<?php echo Router::url('/',true)?>app/webroot/js/jquery.tinyscrollbar.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#scrollbar1').tinyscrollbar();	
		});
	</script>
    <script type="text/javascript">
    $(window).ready(function () {
        $("#wrap").addClass("hideAll");
    });
	$(window).load(function () {
        $("#tabs2").remove();
        $("#wrap").removeClass("hideAll");
    });
</script>

		<script src="<?php echo Router::url('/',true)?>app/webroot/js/jquery.airport-1.1.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			// <![CDATA[	
			$(document).ready(function(){				
				$('#stuff').airport(['<?php echo $employee['Employee']['fname']." ".$employee['Employee']['lname'];?>']);
			});	
			// ]]>
		</script>

<style>
    #header{
        display: none;
    }
    #footer{
        display:none;
    }
</style>
<?php echo $this->Html->css('component');?>
            <script src="<?php echo Router::url('/',true)?>app/webroot/js/modernizr.custom.js"></script>
