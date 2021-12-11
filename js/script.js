$(document).ready(function(){
    
    var type = "";
    var sku = "";
    var name = "";
    var price = "";
    var size = "";
    var height = "";
    var width = "";
    var length = "";
    var weight = "";
    var product_spec = "";

    $("#productType").on("change", function() {
        $("#DVD").hide();
        $("#Furniture").hide();
        $("#Book").hide();
        $("#" + $(this).val()).show();
        type = $(this).val();
    });

    $("#save").click(function(){

        sku = $("#sku").val();
        name = $("#name").val();
        price = Number($("#price").val());
        size =  Number($("#size").val());
        height = Number($("#height").val());
        width = Number($("#width").val());
        length = Number($("#length").val());
        weight = Number($("#weight").val());
        
        if(size != ""){
            product_spec = size;
        }else if(weight != ""){
            product_spec = weight;
        }else if(height != "" && width != "" && length != ""){
            product_spec = height + "x" + width + "x" + length;
        }

        $.ajax({
            url: "controllers/save.php",
            data: {
                type: type,
                sku: sku,
                name: name,
                price: price,
                product_spec: product_spec
            },
            type: "POST",
            success:function(data){
                if(data != "1"){
                    alert(data);
                }else{
                    $(location).prop("href", "index.php");
                }   
            }
        });
    });

    $("#cancel_btn").click(function(){
        $("#sku").val("");
        $("#name").val("");
        $("#price").val("");
        $("#productType").val("");
        $("#size").val("");
        $("#height").val("");
        $("#width").val("");
        $("#length").val("");
        $("#weight").val("");
        $(location).prop("href", "index.php");
    });

});
