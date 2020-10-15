
/************************************** GESTION ERRORS*******************************/

$(document).ready(function () {
    $("#envoyer").click(function () {
        let valid = true;
        //**************************NOM************************* */
        if ($("#nom").val() == "") {
            $("#nom").next(".error-message").fadeIn().text("Veuillez entrer votre nom !");
            valid = false;
        }
        else if (!$("#nom").val().match(/^[a-z.-]+$/i)) {
            $("#nom").next(".error-message").fadeIn().text("Veuillez entrer un nom valide!");
            valid = false;
        }
        else {
            $("#nom").next(".error-message").fadeOut();
        }
        //************************************PRENOM******************************************* */
        if ($("#prenom").val() == "") {
            $("#prenom").next(".error-message").fadeIn().text("Veuiller entrer votre prenom !");
            valid = false;
        }
        else if (!$("#prenom").val().match(/^[a-z.-]+$/i)) {
            $("#prenom").next(".error-message").fadeIn().text("Veuillez entrer un prenom valide!");
            valid = false;
        }
        else {
            $("#prenom").next(".error-message").fadeOut();
        }
        //****************************VILLE******************************** */
        if ($("#ville").val() == "") {
            $("#ville").next(".error-message").fadeIn().text("Veuiller entrer votre ville !");
            valid = false;
        }
        else if (!$("#ville").val().match(/^[a-z.-]+$/i)) {
            $("#ville").next(".error-message").fadeIn().text("Veuillez entrer une ville valide!");
            valid = false;
        }
        else {
            $("#ville").next(".error-message").fadeOut();
        }
        //*******************************PASSWORD******************************************** */
        if ($("#mdp").val() == "") {
            $("#mdp").next(".error-message").fadeIn().text("Veuillez entrer votre password !");

        }
        else if (!$("#mdp").val().match("^(?=.*[a-z])(?=.*[0-9])(?=.{5,})")) {
            $("#mdp").next(".error-message").fadeIn().text("Veuillez entrer un password minimum 5 caracteres + 1 chifre  !");
            valid = false;
        }

        else {
            $("#mdp").next(".error-message").fadeOut();
        }

        if ($("#mdp2").val() != $("#mdp").val()) {
            $("#mdp2").next(".error-message").fadeIn().text("Veuillez saisir le meme password !");
            valid = false;
        }
        else {
            $("#mdp2").next(".error-message").fadeOut();
        }
        //************************************EMAIL*************************************************/
        if ($("#email").val() == "") {
            $("#email").next(".error-message").fadeIn().text("Veuillez entrer un email.");
            valid = false;
        }

        else if (!$("#email").val().match(/^[a-z0-9._-]+@[a-z0-9.-]{1,}[.][a-z]{1,2}$/)) {
            $("#email").next(".error-message").fadeIn().text("L'email n'est pas au format valide.");
            valid = false;
        }


        else {
            $("#email").next(".error-message").fadeOut();
        }


        //************************DATE ***************************** */

        var date1 = new Date($('#date').val());
        var date2 = new Date();
        var diffDays = parseInt((date2 - date1) / (1000 * 60 * 60 * 24));
        var diffYears = diffDays / 365;
        if (diffYears < 18) {
            $("#date").next(".error-message").fadeIn().text("Tu a moins de 18 ans");
            valid = false;
        }
        else if ($("#date").val() == "") {
            $("#date").next(".error-message").fadeIn().text("Veuillez entrer une date");
            valid = false;
        }
        else {
            $("#date").next(".error-message").fadeOut();
        }

        //**********************************LOISIR************************************** */
        if ($("#loisir").val() == "") {
            $("#loisir").next(".error-message").fadeIn().text("Veuillez saisir un loisir !");
            valid = false;
        }
        else {
            $("#loisir").next(".error-message").fadeOut();
        }
        //*****************************GENRE***************************/
        if ($("#genre").val() == "") {
            $("#genre").next(".error-message").fadeIn().text("Veuillez saisir votre genre !");
            valid = false;
        }
        else {
            $("#genre").next(".error-message").fadeOut();
        }



        /******************************************************RELIER LA base de donne**************************************************/
        $.ajax({
            url: "verification.php",
            method: "POST",
            data: {
                validation: "envoyer",
                email: $("#email").val(),
            },
            success: function (value) {

                if (value == "1") {
                    $("#email").next(".error-message").fadeIn().text("Email deja pris!");
                } else {
                    create();
                }


            }
        });

        // console.log(valid);
        function create() {
            $.ajax({
                url: "inscription.php",

                method: "POST",
                data: {
                    validation: "envoyer",
                    nom: $("#nom").val(),
                    prenom: $("#prenom").val(),
                    date: $("#date").val(),
                    genre: $("#genre").val(),
                    ville: $("#ville").val(),
                    email: $("#email").val(),
                    mdp: $("#mdp").val(),
                    loisir: $("#loisir").val()
                },
                success: function (value) {

                }
            });
        }

    })

})