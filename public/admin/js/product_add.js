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
                                <div class="col-md-3 col-12">\
                                    <div class="form-group">\
                                        <label>Variation</label>\
                                        <input type="text" name="ropeChain[]" id="ropeChain" class="form-control" placeholder="0.68 Mm Thickness 18 Inch" value=""  />\
                                    </div>\
                                </div>\
                                <div class="col-md-3 col-12">\
                                    <div class="form-group">\
                                        <label>Carat</label>\
                                        <input type="number" name="carat[]" id="carat" class="form-control" placeholder="Ex 14k"  />\
                                    </div>\
                                </div>\
                                <div class="col-md-3 col-12">\
                                    <div class="form-group">\
                                        <label>Size</label>\
                                        <input type="number" name="size[]" id="size" class="form-control" placeholder="Size"   />\
                                    </div>\
                                </div>\
                                <div class="col-md-3 col-12">\
                                    <div class="form-group">\
                                        <label>Amount</label>\
                                        <input type="num" name="amount[]" id="amount1" class="form-control" placeholder="Amount" onkeyup="getdiscountprice(1)"   />  \
                                    </div>\
                                </div>\

                                <div class="col-md-3 col-12 mt-3">\
                                    <div class="form-group">\
                                        <label>Color</label>\
                                        <input type="text" name="gold_color[]" id="gold_color" class="form-control" placeholder="Color"  /> \
                                    </div>\
                                </div>\

                                <div class="col-md-3 col-12 mt-3">\
                                    <div class="form-group">\
                                        <label>Discount%</label>\
                                        <input type="num" name="discount_percentage[]" id="discount_percentage1" class="form-control" placeholder="Discount Percentage" onkeyup="getdiscountprice(1)"   /> \
                                    </div>\
                                </div>\

                                <div class="col-md-3 col-12 mt-3">\
                                    <div class="form-group">\
                                        <label>Final Price</label>\
                                        <input type="num" name="final_price[]" id="final_price1" class="form-control" placeholder="Final Price" /> \
                                        <input type="hidden" name="discount_amt[]" id="discount_amt1" class="form-control" placeholder="Final Price"  /> \
                                    </div>\
                                </div>\

                                <div class="col-md-3 col-12 mt-3">\
                                    <div class="form-group">\
                                        <label>Image</label>\
                                        <input type="file" name="otherimage[]" id="otherimage" class="form-control"/>\
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


// var line_no = 1;

/**
 *
*/

// function addRows(){
//     const variations = document.getElementById("variations");
//     const new_variations = document.getElementById("more_variations");
//     const clone = variations.cloneNode(true);
//     new_variations.appendChild(clone);
// }

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