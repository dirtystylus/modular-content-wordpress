<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package modularcontent
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <?php
    $time = time () ;  //This line gets the current time off the server  
    $year= date("Y",$time); 
    ?>
		<h1>&copy; <?php echo $year;?> Modular Content in WordPress</h1>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
