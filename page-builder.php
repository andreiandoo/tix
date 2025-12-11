<?php
/* 
Template Name: Page builder
*/
get_header();
?>

<?php 
    include('components/builder-header.php');
?>

<div class="flex-grow">
    <div class="relative h-full bg-transparent">

    <?php if ( have_rows( 'builder' ) ):
        while ( have_rows( 'builder' ) ) : the_row();
            if ( get_row_layout() == 'images_slider' ) :
                include('builder/section_images-slider.php');
                
            elseif ( get_row_layout() == 'two_col_text' ) :
                include('builder/section_two-texts.php');
                
            elseif ( get_row_layout() == 'contact_section' ) :
                include('builder/section_contact.php');
                
            elseif ( get_row_layout() == 'faq_section' ) :
                include('builder/section_faqs.php');
                
            elseif ( get_row_layout() == 'text_media' ) :
                include('builder/section_text-media.php');
                
            elseif ( get_row_layout() == 'reasons_section' ) :
                include('builder/section_reasons.php');
                
            elseif ( get_row_layout() == 'values_section' ) :
                include('builder/section_values.php');
            
            elseif ( get_row_layout() == 'certifications' ) :
                include('builder/section_certifications.php');
            
            elseif ( get_row_layout() == 'testimonials' ) :
                include('builder/section_testimonials.php');
            
            elseif ( get_row_layout() == 'home_categories' ) :
                include('builder/home_categories.php');
            
            elseif ( get_row_layout() == 'products_slider' ) :
                include('builder/section_products-slider.php');
            
            elseif ( get_row_layout() == 'home_intro_articles' ) :
                include('builder/home_intro-articles.php');
            
            elseif ( get_row_layout() == 'home_latest_article' ) :
                include('builder/home_latest-article.php');
        
            elseif ( get_row_layout() == 'signature_text' ) :
                include('builder/section_signature-text.php');
        
            elseif ( get_row_layout() == 'single_text_block' ) :
                include('builder/section_text-block.php');
            
            endif;
        endwhile;
    else:
        //
    endif; ?>
    
    </div>
</div>

<?php 
    include('components/builder-footer.php');
?>

<?php
get_footer();
?>