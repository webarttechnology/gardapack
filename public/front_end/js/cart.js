function addToCart(product_id, type, page="na")
{
    let cart_quantity;
    
    if(type == "multiple"){
        cart_quantity = document.getElementById('cart_quantity').value;
    }
    else{
        cart_quantity = 1;
    }
    
    let message;
    
    if(page == "pc"){
        url = '../../user/cart/add/'+product_id+'/'+cart_quantity;
    }else{
        url = '../user/cart/add/'+product_id+'/'+cart_quantity;
    }

    $.ajax({
     method: 'GET',
     url: url,
     dataType: 'json',
     success: function (data) {
         if(data == "exceed"){
             cartWarning("Sorry! Cart Quantity Exceded");
            //  document.getElementById('cart_msg').innerHTML = "<strong class='text-danger'> Sorry! we don't have that much product in stock </strong>"
         }
         if(data == "Success"){
             toastr.success("Added To Cart Successfully");
             setTimeout(location.reload(), 1500);
            
            // cartSuccess("Added To Cart Successfully");
         }
         
        if(data == "Exist"){
            toastr.warning("Already Added To Cart");
        }
     },
     error: function (data) {
         console.log(data);
     }
  });
}

/**
 * Delete From Cart
*/

function deleteCart(cart_id){
    // window.location = '../../user/cart/delete/'+cart_id;
    
    $.ajax({
        method: 'GET',
        url: '../../user/cart/delete/'+cart_id,
        dataType: 'json',
        success: function (data) {
            if(data == "Success"){
                toastr.error("Deleted From Cart");
                setTimeout(location.reload(), 1500);
                
            //   cartDelete("Deleted From Cart");
            }
        },
        error: function (data) {
            console.log(data);
        }
     });
}

/**
 * cart warning
 */

function cartWarning(msg){
    Swal.fire({
        icon: 'error',
        title: msg,
        showDenyButton: false,
        showCancelButton: false,
        // denyButtonText: `Don't save`,
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            // Swal.fire('Saved!', '', 'success')
        } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info')
        }
    })
}

/**
 * cart warning
 */

function cartSuccess(msg){
    Swal.fire({
        icon: 'success',
        title: msg,
        showDenyButton: false,
        showCancelButton: false,
        // denyButtonText: `Don't save`,
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            location.reload();
            // Swal.fire('Saved!', '', 'success')
        } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info')
        }
    })
}


/**
 * cart Delete
 */

function cartDelete(msg){
    Swal.fire({
        icon: 'error',
        title: msg,
        showDenyButton: false,
        showCancelButton: false,
        // denyButtonText: `Don't save`,
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            location.reload();
            // Swal.fire('Saved!', '', 'success')
        } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info')
        }
    })
}

/**
 * Cart Update
 */

function cartUpdate(cart_id, type){
    let total;
    let quantity = Number(document.getElementById('current_quantity_'+cart_id).innerHTML);

    if(type == "plus"){
         total = (quantity + 1);    
    }
    else{
         if(quantity>1){
            total = (quantity - 1);
         }
         else{
            toastr.error("Min. 1 Product Must Select");
            return false;
         }
    }

    document.getElementById('current_quantity_'+cart_id).innerHTML = total;

    $.ajax({
        method: 'GET',
        url: '../../user/cart/update/'+cart_id+'/'+total,
        dataType: 'json',
        success: function (data) {
            toastr.success("Cart Updated Successfully");
             setTimeout(location.reload(), 1500);
        },
        error: function (data) {
            console.log(data);
        }
     });
}