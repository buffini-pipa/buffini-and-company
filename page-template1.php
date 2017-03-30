<?php 
/* 
  Template Name: Events Template 1
*/
?>
<?php get_header(); ?>
<?php
//$paragraph = get_field( "paragraph" );
$title = get_field( "title" );
$sub_title = get_field( "sub-title" );
?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1>
        <?php the_title(); ?>
      </h1>
      <p>
        <?php the_content(); ?>
      </p>
      <?php endwhile; else : ?>
      <p>
        <?php _e( 'Sorry, page found.', 'treehouse-portfolio' ); ?>
      </p>
      <?php endif; ?>
    </div>
  </div>
</section>
<div class="row">
  <?php 
 /*if( have_rows('element') ):

							while ( have_rows('element') ) : the_row();
						
								$addelement = get_sub_field('add_element');
								$menu_items = $addelement['menu_items'];
								$title2 = $addelement['title'];
								$second_to_title = $addelement['second-to-title'];
								$paragraphthis = $addelement['paragraphthis'];
								switch ($menu_items) {
									case "title":
										$ans1 = $title2;
										$title2 = $ans1['title'];
										$title_font_size = $ans1['title_font_size'];
										$title_alignment = $ans1['title_alignment'];
										$ansxx = "<h1 class='" . $title_alignment . "'>" . $title2 . "</h1>";

									break;
									case "subtitle":
										$ansxx = $second_to_title;
									break;
									case "paragraph":
										$ansxx = $paragraphthis;
									break;
									default:
										$ansxx = "nada";
								}
								echo ($ansxx); 
								
								echo "<br><br>";
								the_sub_field('test_field2');
						
							endwhile; else :
						
							// no rows found
						
						endif;*/
					?>
                    
	
      <?php				
        $total_width = 0;
        if( have_rows('column') ) : while( have_rows('column') ) : the_row(); 
            $width = get_sub_field('column_width');
            $last = get_sub_field('last_column');
			//$body = get_sub_field('column_body');

		  // if( have_rows('column_body') ): while ( have_rows('column_body') ) : the_row();
						
						
						
						
		//endwhile; endif;
						
		//   }

            $total_width += $width;
			
			  		   

        if ($total_width > 12) {
            $total_width = $width;
     ?>

</div>
<div class="row">
  <?php
        }
  ?>
  <div class="small-12 medium-<?php echo $width ?> columns">
  
  <?php
  
  if( have_rows('column_body') ): while ( have_rows('column_body') ) : the_row();
								/*$addelement = get_sub_field('add_element');
								$menu_items = $addelement['menu_items'];
								$second_to_title = $addelement['second-to-title'];
								$paragraphthis = $addelement['paragraphthis'];*/
								$menu_items = get_sub_field('menu_items');
								$title2 = get_sub_field('title1');
								$second_to_title = get_sub_field('subtitle');
								$paragraphthis = get_sub_field('paragraph');

								switch ($menu_items) {
									case "title":
										$ans1 = $title2;
										$title2 = $ans1['title2'];
										$title_font_size = $ans1['title_font_size'];
										$title_alignment = $ans1['title_alignment'];
										$ans = "<h1 class='" . $title_alignment . "'>" . $title2 . "</h1>";

									break;
									case "subtitle":
										$ans = $second_to_title;
									break;
									case "paragraph":
										$ans = $paragraphthis;
									break;
									default:
										$ans = "nada";
								}
								echo ($ans);
								//$ans = $ans;
						 endwhile; endif;
  
  ?>


  </div>
  <?php
        if ($last == '1') {
            $total_width = 0;
            ?>
</div>
<div class="row">
  <?php
        } 
		endwhile; endif;
    ?>
</div>

<?php get_footer(); ?>
