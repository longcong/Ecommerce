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

    // $('.addToCart').click(function(e){
    //     e.preventDefault();
    //     var id = $(this).closest('.product_data').find('.id').val();

    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });

    //     $.ajax({
    //         method: "POST",
    //         url:"/add-to-cart",
    //         data:{
    //             'id':id,
    //         },
    //         success: function(response){
    //             alert(response.status);
    //         },
    //     });
    // });

    $('.addtoWishlist').click(function(e){
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.product_id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url:"/add-to-wishlist",
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
        if(value < 10 & value > 0){
            value--;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });
    

    $('.delete-cart-item').click(function(e){
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.product_id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        

        $.ajax({
            method: "Post",
            url:"delete-cart-item",
            data:{
                'product_id':product_id,
            },
            success: function(response){
                window.location.reload();
                Swal.fire("", response.status,"success");
            },
        });
    });

    $('.add-cart-in-wishlist').click(function(e){
        e.preventDefault();
        const id = $(this).closest('.product_data').find('.id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url:"/add-cart-in-wishlist",
            data:{
                'id':id,
            },
            success: function(response){
                alert(response.status);
            },
        });
    });

    


    $('.delete-wishlist-item').click(function(e){
        e.preventDefault();
        const id = $(this).closest('.product_data').find('.id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "Post",
            url:"delete-wishlist-item",
            data:{
                'id':id,
            },
            success: function(response){
                window.location.reload();
                Swal.fire("", response.status,"success");
            },
        });
    });

    $('.changeQuantity').click(function(e){
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.product_id').val();
        var qty = $(this).closest('.product_data').find('.qty-input').val();

        data ={
            'product_id':product_id,
            'prod_qty': qty,
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "Post",
            url:"update-cart",
            data: data,
            success: function(response){
                alert(response.status);
                window.location.reload();
            },
        });

    });

    $('.changeQuantity-2').click(function(e){
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.product_id').val();
        var qty = $(this).closest('.product_data').find('.qty-input').val();

        data ={
            'product_id':product_id,
            'prod_qty': qty,
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "Post",
            url:"update-cart2",
            data: data,
            success: function(response){
                alert(response.status);
                window.location.reload();
            },
        });

    });
    
});

    
