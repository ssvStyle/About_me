
		<div id="colorlib-main">
			<section class="ftco-section-2">
				<div class="photograhy">
					<div class="row no-gutters">
                        <?php foreach ($data['imgList'] as $key => $img) { ?>
                            <div class="col-md-3">
                                <a href="photography.php?img=<?php echo $key ?>" class="photography-entry img d-flex justify-content-center align-items-center" style="background-image: url(images/gallery/<?php echo $img; ?>);">
                                </a>
                            </div>
                        <?php } ?>
					</div>
				</div>
			</section>
	    

