<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anglian_Learning
 */

?>

<div class="col-12 col-md-2 newslettercontainer">
	<div class="col-12 newseventimage">
		<?php 
		$download = get_field('pdf_upload'); ?>
		<a href="<?php echo $download['url']; ?>" target="_blank">
			<div class="newseventimagecontainer newsletter" style="background-image:url(<?php echo $download['icon']; ?>);"></div>
		</a>
	</div>
	<div class="col-12 newseventtext" onclick="window.open( '<?php echo $download['url']; ?>',  '_blank')" >
		<h4><a href="<?php echo $download['url']; ?>" target="_blank"><?php the_title(); ?></a></h4>
	</div>
</div>
