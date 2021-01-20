$('#iconeUser').on("click",function() {
    $('#divUser').removeClass('d-none');
    $('#divCopropriete').addClass('d-none');
});

$('#iconeCopro').on("click",function() {
    $('#divUser').addClass('d-none');
    $('#divCopropriete').removeClass('d-none');
});