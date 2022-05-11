$(document).ready(function(){
    $('.addToCartBtn').click(function(e){
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.product_id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url:"/add-to-cart",
            data:{
                'product_id':product_id,
            },
            success: function(response){
                alert(response.status);
            },
        });
    });

    $('.increment-btn').click(function(e){
        e.preventDefault();

        var inc_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value, 10)
        value = isNaN(value) ? 0 : value;
        if(value < 10){
            value++;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });

    $('.decrement-btn').click(function(e){
        e.preventDefault();

        var dec_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(dec_value, 10)
        value = isNaN(value) ? 0 : value;
        if(value < 10){
            value--;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });
});

    
