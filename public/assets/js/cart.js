$(function(){
    function add_to_cart(product, variation = "", type = "", qty = 1)
    {
        if(qty < 1 || qty > 10)
        {
            toastr.error('Quantity will be between 1 to 10');
        }

        else{
            $.ajax({
                url: "/cart",
                method: "POST",
                data: {product, variation, qty},
                dataType: "JSON",
                success: function(res)
                {
                    if(res.success)
                    {
                        if(type != "")
                        {   
                            // location.href = "/cart";
                        }   
                        $(document).find('span.cart-qty').text(`${res.total} Items`);
                        $(document).find('span#cart_item_total').text(`${res.total}`);
                        toastr.success(res.msg);
                    }
                    else{
                        toastr.error(res.msg);
                    }
                }
            });
        }
    }

    function remove_item(item, record = "", type = "")
    {
        $.ajax({
            url: "/cart/"+item,
            method: "DELETE",
            success: function(res){
                if(res.success)
                {
                    if(res.total)
                    {
                        $(document).find('span.cart-qty').text(`${res.total} Items`);
                        $(document).find('span#cart_item_total').text(`${res.total}`);
                        
                    }
                    else {
                        $(document).find('span.cart-qty').text(`0 Items`);
                        $(document).find('span#cart_item_total').text(`0`);
                    }

                    record.remove();
                    $('table.cart-total').load(location.href+' table.cart-total');
                    if(type != "")
                    {
                        // $('span.sub_total').load(location.href+' span.sub_total');
                        location.reload();
                    }

                    toastr.success(res.msg);
                }
                else{
                    toastr.error(res.msg);
                }
            }


        });
    }    
    
    function remove_all()
    {
        $.ajax({
            url: "/clear-all",
            method: "GET",
            success: function(res){
                if(res.success)
                {
                    if(res.total)
                    {
                        $(document).find('span.cart-qty').text(`${res.total} Items`);
                        $(document).find('span#cart_item_total').text(`${res.total}`);
                        
                    }
                    else {
                        $(document).find('span.cart-qty').text(`0 Items`);
                        $(document).find('span#cart_item_total').text(`0`);
                    }
                    $('table.cart').load(location.href+' table.cart');
                    $('table.cart-total').load(location.href+' table.cart-total');

                    toastr.success(res.msg);
                }
                else{
                    toastr.error(res.msg);
                }
            }


        });
    }

    function update_qty(item, qty, size = "")
    {
        if(qty < 1 || qty > 10)
        {
            toastr.error('Quantity will be between 1 to 10');
        }

        else {
            $.ajax({
                url: "/cart/"+item,
                method: "PUT",
                data: {qty, size},
                success: function(res){
                    if(res.success)
                    {
                        $('table.cart').load(location.href+' table.cart');
                        $('table.cart-total').load(location.href+' table.cart-total');
                        toastr.success(res.msg);
                    }
                    else{
                        toastr.error(res.msg);
                    }
                }
    
    
            });
        }

    }

    $(".quick-buy-button, .add-to-cart-button").click(function(){
            let product = $(document).find("input[name='product_id']").val();
            let type = $(document).find("input[name='type']").val();
            let variation = $(document).find("input.variation:checked").val();
            let qty = $(document).find("input.qty-input").val();
            if(type == 'variable' && isNaN(variation))
            {
            $(document).find('p.size-validation').text('Product size is required!');
            toastr.error('Product size is required!');
            }
            else{
                add_to_cart(product, variation, "quick", qty);
            }
    }); 

    $(document).on('click', 'input.product-box-add-to-cart-button', function(){
        let product = $(this).attr('data-product');
        add_to_cart(product, "", "quick");
    });
   

    $(document).on('change', "input.variation", function(){
        $(document).find('p.size-validation').text('');
    });

    $(document).on('click', '#btnDeleteItem', function(){
        if(confirm('Are you sure?'))
        {
            let item = $(this).closest('tr').find('input[name="item_id"]').val();
            let record = $(this).closest('tr');
            remove_item(item, record);
        }
    });    
    
    $(document).on('click', 'span#removeItem', function(){
        if(confirm('Are you sure?'))
        {
            let item = $(this).closest('div').find('input[name="item_id"]').val();
            let record = $(this).closest('div').closest('div.cart-item');
            remove_item(item, record, "reload");
        }
    });
    
    $(document).on('blur', 'input.qty-input', function(){
        let qty = $(this).val();
        let item = $(this).closest('tr').find('input[name="item_id"]').val();
        let size = $(this).closest('tr').find('input[name="size"]').val();
        update_qty(item, qty, size);
    });
    

    $(document).on('click', 'button#clearCart', function(){
        if(confirm('Are you sure?'))
        {
            remove_all();
        }
        
    });

    
});