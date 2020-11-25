<div class="wpem-event-organizer-tabs">
    <div class="wpem-tabs-wrapper">

        <ul class="wpem-tabs-wrap">
           <li class="wpem-tab-link" data-tab="current">
                <?php _e('Current Events', 'wp-event-manager'); ?>
            </li>            
            <li class="wpem-tab-link active" data-tab="upcoming">
                <?php _e('Upcoming Events', 'wp-event-manager'); ?>
            </li>
            <li class="wpem-tab-link" data-tab="past">
                <?php _e('Past Events', 'wp-event-manager'); ?>
            </li>
        </ul>

        <div class="event-organizer-tab-contents wpem-tab-content current">
            
            <!-- upcoming events list start-->
            <div id="upcoming" class="wpem-tab-pane active">  
                <?php if ($upcomingEvents->have_posts()) : ?>    
                    <div id="event-listing-view" class="wpem-main wpem-event-listings event_listings wpem-event-listing-list-view">
                        <?php while ($upcomingEvents->have_posts()) : $upcomingEvents->the_post(); ?>
                            <?php get_event_manager_template_part('content', 'event_listing'); ?>
                        <?php endwhile; ?>
                    </div>
                    <?php if ($upcomingEvents->found_posts > $per_page) : ?>
                        <?php if ($show_pagination == "true") : ?>
                            <?php display_wpem_get_query_pagination($upcomingEvents->max_num_pages, $current_page); ?>
                        <?php endif; ?>
                    <?php endif; ?>      
                    <?php
                else :
                    get_event_manager_template_part('content', 'no-events-found');
                endif;
                ?>
            </div>
            <!-- upcoming events list end-->

            <!-- current events list start-->
            <div id="current" class="wpem-tab-pane">  
                <?php if ($currentEvents->have_posts()) : ?>    
                    <div id="event-listing-view" class="wpem-main wpem-event-listings event_listings wpem-event-listing-list-view">
                        <?php while ($currentEvents->have_posts()) : $currentEvents->the_post(); ?>
                            <?php get_event_manager_template_part('content', 'event_listing'); ?>
                        <?php endwhile; ?>
                    </div>

                    <?php if ($currentEvents->found_posts > $per_page) : ?>
                        <?php if ($show_pagination == "true") : ?>
                            <?php display_wpem_get_query_pagination($currentEvents->max_num_pages, $current_page); ?>
                        <?php endif; ?>
                    <?php endif; ?>      
                    <?php
                else :
                    get_event_manager_template_part('content', 'no-events-found');
                endif;
                ?>
            </div>
            <!-- current events list end-->

            <!-- past event listing- start-->
            <div id="past" class="wpem-tab-pane"> 
                <?php if ($pastEvents->have_posts()) : ?>
                    <div id="event-listing-view" class="wpem-main wpem-event-listings event_listings wpem-event-listing-list-view">        
                        <?php while ($pastEvents->have_posts()) : $pastEvents->the_post(); ?>
                            <?php get_event_manager_template_part('content', 'event_listing'); ?>
                        <?php endwhile; ?>
                    </div>
                    <?php if ($pastEvents->found_posts > $per_page) : ?>
                        <?php if ($show_pagination == "true") : ?>
                            <?php display_wpem_get_query_pagination($pastEvents->max_num_pages, $current_page); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php
                else :
                    get_event_manager_template_part('content', 'no-events-found');
                endif;
                ?>
            </div>
            <!-- past events list end-->

        </div>
        <!-- tab-content end tab-->
    
    </div>

</div>
<!-- end of wpem-tabs-wrapper -->