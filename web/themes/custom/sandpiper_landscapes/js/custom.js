/**
 * Bootstrap 3 Blog Category Accordion
 * Updated for Bootstrap 3 compatibility with smooth transitions
 */
(function($) {
    'use strict';
    
    $(document).ready(function() {
        console.log('Bootstrap 3 blog accordion initializing...');
        
        // Bootstrap 3 collapse events
        $('#expandableCategories').on('show.bs.collapse', function () {
            console.log('Categories expanding...');
            $('.toggle-text').text('Show Fewer Categories');
            $('.toggle-icon').text('▲');
            $('.spl-category-toggle').addClass('expanded');
            
            // Smooth transition - set max-height to actual content height
            var $this = $(this);
            $this.css('max-height', $this[0].scrollHeight + 'px');
        });
        
        $('#expandableCategories').on('hide.bs.collapse', function () {
            console.log('Categories collapsing...');
            $('.toggle-text').text('View All Blog Categories');
            $('.toggle-icon').text('▼');
            $('.spl-category-toggle').removeClass('expanded');
            
            // Smooth transition - set max-height to 0
            $(this).css('max-height', '0');
        });
        
        // Manual fallback for Bootstrap 3 if events don't fire
        $('.spl-category-toggle').on('click', function(e) {
            const $target = $('#expandableCategories');
            
            // Small delay to let Bootstrap 3 process first
            setTimeout(function() {
                if ($target.hasClass('in')) {
                    $('.toggle-text').text('Show Fewer Categories');
                    $('.toggle-icon').text('▲');
                    $('.spl-category-toggle').addClass('expanded');
                } else {
                    $('.toggle-text').text('View All Blog Categories');
                    $('.toggle-icon').text('▼');
                    $('.spl-category-toggle').removeClass('expanded');
                }
            }, 50);
        });
        
        console.log('Bootstrap 3 blog accordion initialized');
    });
    
})(jQuery);