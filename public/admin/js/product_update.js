var line_no = 1;

function addRows() {
    var html = $("#variations").html();
    $(html).removeAttr('id');
    $(html).show();
    $("#existing_var").append("<div class='row'>"+ html +"</div>");
}

function removeRows(button) {
    // Traverse up the DOM to find the parent row and remove it
    $(button).closest('.row').remove();
}

/**
 * product status
*/

function product_status(){
    let ps = document.getElementById('stock_status').value;
    
    if(ps == "In Stock"){
        document.getElementById('stock_div_1').style.display = "none";
        document.getElementById('stock_div_2').style.display = "block";
    }
    else{
        document.getElementById('stock_div_1').style.display = "none";
        document.getElementById('stock_div_2').style.display = "none";
    }
}

/**
 * Get sub category details 
*/

function subCategoryDetails(){
    let selected_category = document.getElementById('categories').value;

      $.ajax({
         method: 'GET',
         url: '/../../admin/sub-categories/fetch/'+selected_category,
         dataType: 'json',
         success: function (data) {
             let total_sub_category = data.length;

             // If the category has sub category it will reflect back..

             if(total_sub_category > 0){
                 document.getElementById('sub_cat_div').style.display = "block"; 
                 $("#subcategories").empty();

                 for (var i = 0; i < total_sub_category; i++) {  
                     // var opt = new Option(data[i].name);
                     // $("#subcategories").append(opt);

                     var html = "<option value="+data[i].id+">"+data[i].name+"</option>";
                     $("#subcategories").append(html);
                 }  
             }
             else{
                 document.getElementById('sub_cat_div').style.display = "none";
             }
         },
         error: function (data) {
             console.log(data);
         }
     });
}

function QtyAdd(){
    let qty = document.getElementById("qty_checkbox");
    var removedVariations = [];
    
    if(qty.checked){
        $('#existing_var').show();
        if( $("#existing_var").html().trim() === "" ) {
            addRows();
        }
    }else{
        $('#existing_var').hide();
    }
}