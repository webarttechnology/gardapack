function colorChange(product_id){
    let color =$('#color').val();
    $hostname = "http://127.0.0.1:8000/";

  if(color != "Select"){
      $.ajax({
          type: "GET",
          url: '../gallery/image/fetch/'+product_id+'/'+color,
          success: function(response) {
              // Handle the response from the server
              if(response['image'] != "null"){
                 $('#main_img').attr('src', $hostname+'admin/product/gallery/'+response['image']);
              }
            }
          });
  }else{
    alert('Enter color');
  }
}

/**
 * 
*/

function variationChange(prod_id){
      let variation = $('#variation').val();
      
      if(variation != "Select"){
        $.ajax({
            type: "GET",
            url: '../product/variation/fetch/'+variation,
            success: function(response) {
                   $('#total_price').html('$'+response['variation']);
              }
            });
    }
}

/**
 * clear section
*/

function clearSection(){
     document.getElementById('variation').value = "Select";
     document.getElementById('color').value = "Select";
}

/**
 * product compare
*/

