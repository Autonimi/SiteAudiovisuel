(function($) {



$( document ).ready(function() {
    console.log("single-produit.js linked");
    let plus;
    let moins;
    let input;

$('#plus').click(function(e){
    console.log("plus");
    plus=parseInt($('#nombreProduit').val())+1;
    $('#nombreProduit').val(plus);
});

$('#minus').click(function(e){
    console.log("moins");
    input=parseInt($('#nombreProduit').val());
    if(input!==1){
        moins=parseInt($('#nombreProduit').val())-1;
        $('#nombreProduit').val(moins);
    }
});
    

})

})(jQuery);