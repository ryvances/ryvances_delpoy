// ---------- hozi add to cart ----------
jQuery(document).ready(function($) {
    $('.js-btn-add-to-cart').on('click', function(e) {
        e.preventDefault();
        var $button = $(this);
        var productId = $button.data('product-id');
        
        $.ajax({
            url: wc_add_to_cart_params.wc_ajax_url.toString().replace('%%endpoint%%', 'add_to_cart'),
            type: 'POST',
            data: {
                product_id: productId,
                quantity: 1,
                price: 15,
                product_name: 'Album',
                product_sku: 'woo-album',
                success_message: '"Album" has been added to your cart'
            },
            beforeSend: function() {
                $button.addClass('loading');
            },
            complete: function() {
                $button.removeClass('loading');
            },
            success: function(response) {
                if (response.success) {
                    // Update cart fragments
                    $(document.body).trigger('wc_fragment_refresh');
                    // Show success message
                    alert(response.data.success_message);
                }
            }
        });
    });
});
