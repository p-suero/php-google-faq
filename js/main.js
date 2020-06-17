$(document).ready(function() {
    //intercetto il click sulla domanda
    $(".domanda").click(function() {
        //seleziono la risposta successiva al domanda cliccato
        var risposta_corrente = $(this).next();
        //nascondo le altre risposte visualizzate
        $(".risposte").slideUp();
        //mostro la risposta corrente solo se non già visualizzata
        if (!risposta_corrente.is(":visible")) {
            risposta_corrente.slideDown();
        }
    })
})
