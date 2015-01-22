/**
 * Initialisation
 */
$.extend( $.fn.dataTable.defaults, {
    language: {
        processing:     "Traitement en cours...",
        search:         "Rechercher&nbsp;:",
        lengthMenu:     "Afficher _MENU_ &eacute;l&eacute;ments",
        info:           "Affichage de l'élement _START_ &agrave; _END_ sur _TOTAL_ éléments",
        infoEmpty:      "Affichage de l'élement 0 à 0 sur 0 éléments",
        infoFiltered:   "(filtré de _MAX_ éléments au total)",
        infoPostFix:    "",
        loadingRecords: "Chargement en cours...",
        zeroRecords:    "Aucun élément à afficher",
        emptyTable:     "Aucune donnée disponible dans le tableau",
        paginate: {
            first:      "Premier",
            previous:   "Précédent",
            next:       "Suivant",
            last:       "Dernier"
        },
        aria: {
            sortAscending:  ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
    }
} );
