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
        data: 'id='+id+'&nom='+nom+'&prenom='+prenom+'&mdp='+mdp+'&adresse='+adresse+'&ville='+ville+'&codePostal='+codePostal+'&tel='+tel+'&mail='+mail,
        dataType: "html",
        success : function(code_html, statut){ 
            console.log('fonctionne');
        }
    });
 });

$('#exitAjout').on('click',function(){
    $('#divAjoutCopro').addClass('d-none');
});

$('.ajoutCopro').on('click',function(){
    $('#divAjoutCopro').removeClass('d-none');
});

$('#btnAjout').on('click',function(){
    id = parseInt(recupererIDUser(9,$(".divCopropriete").last().attr('id')));
    newId = id + 1;
    console.log(newId);
    nom = $('#imputNom').val();
    adresse = $('#inputAdresse').val();
    ville = $('#inputVille').val();
    codePostal = $('#inputCodePostal').val();

    $.ajax({
        url: "/SyndicSaaS/php/ajax/addCopro.php",
        method: "GET",
        data: 'id='+newId+'&nom='+nom+'&adresse='+adresse+'&ville='+ville+'&codePostal='+codePostal,
        dataType: "html",
        success : function(code_html, statut){ 
            location.reload();
        }
    });
});

$('#exitAjoutUser').on('click',function(){
    $('#divAjoutUser').addClass('d-none');
});

$('#ajoutGestionaire').on('click',function(){
   parentDiv = $(this).parent().parent().parent().attr('id');
   idCopro = recupererIDUser(9,parentDiv);
   
   $('#divAjoutUser').removeClass('d-none');
});

$('.supCopro').on('click',function(){
    parentDiv = $(this).parent().parent().attr('id');
    id = recupererIDUser(9,parentDiv);
    $.ajax({
        url: "/SyndicSaaS/php/ajax/deleteCopro.php",
        method: "GET",
        data: 'id='+id,
        dataType: "html",
        success : function(code_html, statut){ 
            location.reload();
        }
    });
});

function recupererIDUser(tailleID,id){
    return (id.substring(tailleID-1,id.length));
}