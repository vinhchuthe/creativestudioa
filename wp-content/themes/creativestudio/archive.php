<?php
get_header(); ?>

<?php
if ( is_tag() ) :
	get_template_part( 'template-archive/archive', 'tag' );
	?> <!--If Tag Archive-->

<?php elseif ( is_author() ):
	get_template_part( 'template-archive/archive', 'author' );
	?>

<?php else : ; ?>
<?php endif; ?>



<div id="bttop"></div>
<?php
get_footer();
?>
<script>
    if (windowsize > 769) {
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#bttop').fadeIn();
            } else {
                $('#bttop').fadeOut();
            }
        });

        $('#bttop').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
        });
    }
</script>



