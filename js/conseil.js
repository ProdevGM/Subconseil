// Affichage du logo et de la connexion dans la barre nav au scroll
window.addEventListener('scroll', () => {
    if(window.scrollY > 228){
        $('.ss-block-connexion').css('display', 'none');
        $('.ss-block-connexion-scroll').css('display', 'block');
        $('.ss-block-connexion-scroll-logo').css('display', 'block');
    }else{
        $('.ss-block-connexion').css('display', 'block');
        $('.ss-block-connexion-scroll').css('display', 'none');
        $('.ss-block-connexion-scroll-logo').css('display', 'none');

    }
});



// Tabs sur la page d'accueil
$( function() {
    $( "#tabs" ).tabs();
});



// Appel de l'input caché type file
$('#cv').on('click', function(){
    $("#input_cv").click();
});

// Récupération du nom du fichier charger pour affichage
$('#input_cv').change(function(e) {
    var file = e.target.files[0].name;
    $('#cv').html(file);
});



// Couleur de fond des onglets de la section2 de la page d'accueil
$('#focus1').on("click", function(){
    $(this).css('background-color', '#0094a5');
    $('#focus2').css('background-color', '#6dbcd5');
    $('#focus3').css('background-color', '#6dbcd5');
});

$('#focus2').on("click", function(){
    $(this).css('background-color', '#0094a5');
    $('#focus1').css('background-color', '#6dbcd5');
    $('#focus3').css('background-color', '#6dbcd5');
});

$('#focus3').on("click", function(){
    $(this).css('background-color', '#0094a5');
    $('#focus1').css('background-color', '#6dbcd5');
    $('#focus2').css('background-color', '#6dbcd5');
});