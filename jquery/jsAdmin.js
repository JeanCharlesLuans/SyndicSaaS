$('#iconeUser').on("click",function() {
    $('#divUsers').removeClass('d-none');
    $('#divCoproprietes').addClass('d-none');
});

$('#iconeCopro').on("click",function() {
    $('#divUsers').addClass('d-none');
    $('#divCoproprietes').removeClass('d-none');
});

$('.sup').on("click",function() {

   id = recupererIDUser(4,$(this).attr('id'));

    $.ajax({
    url: "../php/ajax/deleteUser.php",
    method: "GET",
    data: 'id='+id,
    dataType: "html",
    success : function(code_html, statut){ 
        $('#user'+id).remove();
    }
  });

});

<<<<<<< Updated upstream
$('.editUser').on("click",function() {

    id = recupererIDUser(5,$(this).attr('id'));
    $('#nomUser'+id).removeAttr('disabled');
    $('#prenomUser'+id).removeAttr('disabled');
    $('#mdpUser'+id).removeAttr('disabled');
    $('#adresseUser'+id).removeAttr('disabled');
    $('#villeUser'+id).removeAttr('disabled');
    $('#CPUser'+id).removeAttr('disabled');
    $('#telUser'+id).removeAttr('disabled');
    $('#mailUser'+id).removeAttr('disabled');
    $('#btnUser'+id).removeClass('d-none');
 
 });

 $('.btnModifUser').on("click",function() {
    id = recupererIDUser(8,$(this).attr('id'));
    nom = $('#nomUser'+id).val();
    prenom = $('#prenomUser'+id).val();
    mdp = $('#mdpUser'+id).val();
    adresse = $('#adresseUser'+id).val();
    ville = $('#villeUser'+id).val();
    codePostal = $('#CPUser'+id).val();
    tel = $('#telUser'+id).val();
    mail = $('#mailUser'+id).val();

    $.ajax({
        url: "../php/ajax/modifUser.php",
        method: "GET",
        data: 'id='+id+'&nom='+nom+'&prenom='+prenom+'&mdp='+mdp+"&adresse="+adresse+'&ville='+ville+'&codePostal='+codePostal+'&tel='+tel+'&mail='+mail,
        dataType: "html",
        success : function(code_html, statut){ 
            console.log('fonctionne');
        }
    });
 });

function recupererIDUser(tailleID,id){
    return (id.substring(tailleID-1,id.length));
=======
function récupérerID(tailleID,id){
    return (id.substring(tailleID,id.length)).split('_');
>>>>>>> Stashed changes
}