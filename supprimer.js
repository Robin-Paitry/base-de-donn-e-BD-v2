function informerSuppressionOk() {
    alert('la ligne est supprimée');
    location.reload();
}


function supprimer(id) {
    $.ajax(
        {
            url: "core/api/supprimer.php?id=" + id,
            success:
            informerSuppressionOk
        }
    )
    ;
}