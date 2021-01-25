$('#iconeUser').on("click",function() {
    $('#divUsers').removeClass('d-none');
    $('#divCoproprietes').addClass('d-none');
});

$('#iconeCopro').on("click",function() {
    $('#divUsers').addClass('d-none');
    $('#divCoproprietes').removeClass('d-none');
});

$('.sup').on("click",function() {
    console.log($(this).attr('id'));
    console.log(récupérerID(4,$(this).attr('id')));
});

function récupérerID(tailleID,id){
    return id.substring(tailleID,id.length);
}