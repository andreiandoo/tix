<?php

?>

<section class="">
    <div class="container py-12 mx-auto">
        <div class="flex flex-col items-center justify-center gap-4 text-center">
            <h3 class="">Total ticketing flexibility</h3>
            <div class="">Your event page is looking awesome – but before you go live, you'll need to set up your tickets just right for your event. At Ticket Tailor, we're known for giving you the flexibility and features you need to make it happen.</div>
        </div>
    </div>

    <div class="container py-12 mx-auto">
        <div class="grid grid-cols-3 gap-8">
            // get random 9 features from the features folder and display them in the grid
            <?php
            $features = glob( get_template_directory() . '/bits/features/*.php' );
            shuffle( $features );
            $selected_features = array_slice( $features, 0, 9 );
            foreach ( $selected_features as $feature ) {
                include $feature;
            }
            ?>
        </div>
        <div class="flex items-center justify-center mt-12">
            <a href="#" class="px-6 py-3 text-white bg-blue-600 rounded hover:bg-blue-700">See all features</a>
        </div>
    </div>
</section>