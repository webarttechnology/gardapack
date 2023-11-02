var line_no = 1;

function addRows() {
    const variations = document.getElementById("variations");
    const new_variations = document.getElementById("more_variations");
    const clone = variations.cloneNode(true);
    new_variations.appendChild(clone);
}

// function removeRows(){
//     var line_no = document.getElementById("line_no").innerHTML;

//     // var new_variations = document.getElementById("more_variations");
//     // var element = new_variations.lastElementChild;
//     // while (element) {
//     //     new_variations.removeChild(element);
//     //     element = new_variations.lastElementChild;
//     // }
// }


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