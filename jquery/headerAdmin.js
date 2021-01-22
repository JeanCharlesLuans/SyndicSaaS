$('#iconeUser').on("click",function() {
    $('#divUsers').removeClass('d-none');
    $('#divCoproprietes').addClass('d-none');
});

$('#iconeCopro').on("click",function() {
    $('#divUsers').addClass('d-none');
    $('#divCoproprietes').removeClass('d-none');
});