    function removeRows(button){
        // var row = button.parentNode;
        // var container = row.parentNode;
        // container.removeChild(row);

        // button.parentNode.removeChild(button);
    }

    /**
     * working ........
    */

    function addRows(){
        var container = document.getElementById('more_variations');
        var row = document.createElement('div');
        row.classList.add('row'); 

        // document.getElementById("more_variations").innerHTML 

        row.innerHTML = `<div class="row borderBp" id="more_variations" style="margin-left: 2px; margin-top: 1px; width: 99%"> \
                                <div class="col-md-12 col-12">\
                                    <div class="form-group">\
                                        <label>Variation</label>\
                                        <input type="text" name="ropeChain[]" id="ropeChain" class="form-control" placeholder="0.68 Mm Thickness 18 Inch" value=""  />\
                                    </div>\
                                </div>\
                                <div class="col-md-12 col-12 mt-3">\
                                    <div class="form-group">\
                                        <label>Final Price</label>\
                                        <input type="num" name="final_price[]" id="final_price1" class="form-control" placeholder="Final Price" /> \
                                        <input type="hidden" name="discount_amt[]" id="discount_amt1" class="form-control" placeholder="Final Price"  /> \
                                    </div>\
                                </div>\
                                <div class="col-md-2 col-12 rope-chan mt-3">\
                                <p id="line_no" ></p>\
                                        <span class="btn btn-primary m-b-5 m-t-5" id="addrow" onclick="return addRows();" style="float: left;" ><i class="bx bx-plus" aria-hidden="true"></i></span>\
                                        <!-- <span class="btn btn-primary m-b-5 m-t-5" id="removerow" style="float: right;" onclick="return removeRows(this);"><i class="bx bx-minus" aria-hidden="true"></i></span> --> \
                                </div>\
                            </div>`;
                
                            container.appendChild(row);

    }

/**
 * product status
*/

function product_status(){
    let ps = document.getElementById('stock_status').value;
    
    if(ps == "In Stock"){
        document.getElementById('no_in_stock_div').style.display = "block";
    }
    else{
        document.getElementById('no_in_stock_div').style.display = "none";
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

/**
 * QTY Add js
*/

function QtyAdd(){
    let qty = document.getElementById("qty_checkbox");
    
    if(qty.checked){
        document.getElementById("variations").style.display = "block"; 
    }else{
        document.getElementById("variations").style.display = "none"; 
    }
}