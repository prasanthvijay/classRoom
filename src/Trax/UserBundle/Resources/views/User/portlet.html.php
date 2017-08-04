<?php 	$view->extend('::headernew.html.php'); ?>
			
<div id="base">
			
	<div id="content">
			<section>
			
		<div class="section-body">
			<div class="container">
				<h2 class="text-light text-center">Module's &amp; Category<br><small class="text-primary">Check out our module List</small></h2>		
				
				<!-- BEGIN PRICING CARDS 1 --><div class="row">	
					<?php 

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$link= explode( '/', $actual_link );
 $link1=$link[0]."/".$link[1]."/".$link[2]."/".$link[3]."/".$link[4];


for($i=0;$i<count($ModuleCategoryList);$i++){ 
				$ModuleList = $em->createQuery("SELECT j.filepath,j.modulename,j.filetype,j.filename FROM TraxAdminBundle:TblModulefiles j where j.modulecategory='".$ModuleCategoryList[$i]['cateid']."'")->getArrayResult();

	 ?>						
					<div class="col-md-3">
						<div class="card card-type-pricing text-center" >
							<div class="card-body style-gray" data-toggle="collapse" data-target="#demo<?php echo $i; ?>">
								<h2 class="text-light"><?php echo substr($ModuleCategoryList[$i]['modulecategory'], 0, 15); ?></h2>
								<div class="price">
									<span class="text-lg">#</span><h2><span class="text-xxxl"><?php echo count($ModuleList); ?></span></h2> <span></span>
<p class="opacity-50"><em>Module's</em></p>
								</div>
								<br>
								</div><!--end .card-body -->
								<div class="card-body no-padding" id="demo<?php echo $i; ?>" class="collapse">
									<ul class="list-unstyled" >
									<?php for($j=0;$j<count($ModuleList);$j++){ 

	
									$path=explode('/',$ModuleList[$j]['filepath']);
	 $locationnew=$link1."/".$path[6]."/".$path[7]."/".$path[8]."/story.html"?>
		
									<?php $Location = $path[7]; ?>

									<li><?php if($ModuleList[$j]['filetype']!="Story") { ?><a href="javascript:void(0);" onclick='openFilefunction("<?php echo $Location;?>");'><?php echo $ModuleList[$j]['modulename']." ". $ModuleList[$j]['filetype']; ?></a>
<?php } else { ?>
<a href="<?php echo $locationnew; ?>" target="_blank"><?php echo $ModuleList[$j]['modulename']." ". $ModuleList[$j]['filetype']; ?></a>
<?php } ?>	
</li>
									<?php } ?>	
									</ul>
								</div>
							
						</div>
						
							
			</div>	<?php } ?>				

			</div>
	</section>
				
		</div>
<script>
function openFilefunction(module){

	window.location.assign("http://www.dotcue.in/michelin_files/loadfile.php?type=getfileinfo&path="+module); 
}
</script>
