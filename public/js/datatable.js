$(document).ready(function () {
	$('#dataTableExample').DataTable({
		"aLengthMenu": [
		[10, 30, 50, -1],
		[10, 30, 50, "All"]
		],
		"iDisplayLength": 10,
		language: {
            processing:     "Traitement en cours ...",
            search:         "",
            lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
            info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
            infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            infoPostFix:    "",
            loadingRecords: "Chargement en cours...",
            zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
            emptyTable:     "Aucune donnÃ©e disponible dans le tableau",
            paginate: {
                first:      "Premier",
                previous:   "Pr&eacute;c&eacute;dent",
                next:       "Suivant",
                last:       "Dernier"
            },
            aria: {
                sortAscending:  ": activer pour trier la colonne par ordre croissant",
                sortDescending: ": activer pour trier la colonne par ordre dÃ©croissant"
            }
        }
	});

	$('#dataTableExample').each(function() {
		var datatable = $(this);
		
		// SEARCH - Add the placeholder for Search and Turn this into in-line form control
		var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
		search_input.attr('placeholder', 'Recherche');
		search_input.removeClass('form-control-sm');
		search_input.parent().parent().parent().removeClass('col-md-6').addClass('col-md-4')
		
		// LENGTH - Inline-Form control
		var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
		length_sel.removeClass('form-control-sm');
		length_sel.parent().parent().parent().removeClass('col-md-6').addClass('col-md-8')
	});
});
