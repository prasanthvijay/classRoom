
<link rel="stylesheet" href="boot/bootstrap.min.css">
  <script src="boot/jquery.min.js"></script>
  <script src="boot/bootstrap.min.js"></script>
<?php 
$type=$_GET['type'];
$path=$_GET['path'];
$extension=$_GET['extension'];
$filetype=$_GET['filetype'];
$filepath=$_GET['filepath'];
$filename=$_GET['filename'];
$sessionname=$_GET['modulename'];
if($type== 'MichelinClassRoom') { 

if($extension == 'odt' || $extension == 'odp' || $extension == 'ods' || $extension == 'pdf') { ?>

<iframe src = "js/ViewerJS/#../../../MichelinClassroom/web/uploadfiles/<?php echo $path; ?>" width='100%' height='100%'></iframe>


<?php } else if($extension == 'jpg'|| $extension == 'png' || $extension == 'gif') {?>
<div class="container">
<div align="center"><h4 class="text-primary"><?php echo ucfirst($sessionname); ?></h4></div>	
<div align="center"><h5 class="text-primary"><?php echo ucfirst($filename); ?></h5></div>
	
<div align="center">
<img src="../../MichelinClassroom/web/uploadfiles/<?php echo $path;?>" class="img-responsive"  >
</div>
</div>
<?php  } else if($extension== 'mp4'|| $extension == 'ogv' || $extension == '3gp') { ?>
<div class="container">
<div align="center"><h4 class="text-primary"><?php echo ucfirst($sessionname); ?></h4></div>	
<div align="center"><h5 class="text-primary"><?php echo ucfirst($filename); ?></h5></div>
<div align="center">
<video id="myVideo" width="100%" height="60%" controls='true'>
<source src="../../MichelinClassroom/web/uploadfiles/<?php echo $path; ?>" type="video/mp4">
<source src="../../MichelinClassroom/web/uploadfiles/<?php echo $path; ?>" type="video/webm">
<source src="../../MichelinClassroom/web/uploadfiles/<?php echo $path; ?>" type="video/ogg">
<source  src="../../MichelinClassroom/web/uploadfiles/<?php echo $path; ?>" type='video/3gpp; codecs="mp4v.20.8, samr"'/>

</video>
</div>
</div>

<?php  } else if($extension== 'mp3') { ?>

<div class="container">
<div align="center"><h4 class="text-primary"><?php echo ucfirst($sessionname); ?></h4></div>	
<div align="center"><h5 class="text-primary"><?php echo ucfirst($filename); ?></h5></div>
<div align="center">
 <audio controls>
  <source src="../../MichelinClassroom/web/uploadfiles/<?php echo $path; ?>"  type="audio/mpeg">
Your browser does not support the audio element.
</audio>
</div>
</div>
<?php }
else{
		echo "<div align='center'><h2 class='text-primary'>Invalid Format</h2></div>";
}

  } ?>

