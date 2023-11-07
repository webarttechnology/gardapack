

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

