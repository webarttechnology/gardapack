function addToCart(product_id, type, page="na"){
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
             cartSuccess("Added To Cart Successfully");
            // document.getElementById('cart_msg').innerHTML = "<strong class='text-success'> Added To Cart Successfully</strong>"
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
               cartDelete("Deleted From Cart");
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