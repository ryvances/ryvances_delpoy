// Nothing here yet
//js to toggle the search form

jQuery(document).ready(function($) {
    // Toggle tìm kiếm
    $('.js-toggle-search').on('click', function(e) {
        e.preventDefault();
        $('.search-form').toggleClass('active');
    });

    // Các tính năng JavaScript khác
    console.log('JavaScript is working!');
});




