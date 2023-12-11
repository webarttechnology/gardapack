/* Add to wishlist */

function addWishList(product_id, quantity, page="index"){
    if(page == "index"){
        url = 'user/wishlist/add/'+product_id+'/'+quantity;
    }
    if(page == "details"){
        url = '../user/wishlist/add/'+product_id+'/'+quantity
    }
    if(page == "category"){
        url = '../../user/wishlist/add/'+product_id+'/'+quantity;
    }
    
    $.ajax({
        method: 'GET',
        url: url,
        dataType: 'json',
        success: function (data) {
            if(data == "Success"){
                toastr.success("Added Successfully");
                setTimeout(location.reload(), 1500);
            }
            if(data == "Exist"){
                toastr.warning("Already Added");
            }
        },
        error: function (data) {
            console.log(data);
        }
     });
}


/**
 * delete wishlist
*/

function deleteWishList(id){
    let url = './delete/'+id;

    $.ajax({
        method: 'GET',
        url: url,
        dataType: 'json',
        success: function (data) {
            if(data == "Success"){
                toastr.error("Deleted Successfully");
                setTimeout(location.reload(), 1500);
            }
        },
        error: function (data) {
            console.log(data);
        }
     });
}