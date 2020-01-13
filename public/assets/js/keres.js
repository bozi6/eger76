$.fn.exists = function () {
    return this.length !== 0;
};

$(document).ready(function () {
    $("#eddigtablazat").tablesorter({
        theme: "metro-dark",
        sortLocaleCompare: true,
        sortStable: true,
        widgets: ["zebra"],
        headers: {
            4: {
                sorter: false
            }
        }
    });
    // csoportos beléptetés legördülő lista.
    if ($("#csoportok").exists()) {
        $("#csoportok").focus();
        $("#csoportok").change(function () { // a legördülő listában változtatunk
            var csid = $("#csoportok").val();
            // A csoportok lekérdezése ajax-al.
            $.ajax({
                url: "csopval",
                method: "post",
                data: "csid=" + csid
            }).done(function (fellepok) {
                $("#csupupd").removeClass("disabled");
                fellepok = JSON.parse(fellepok);
                $("#benvan").empty();
                $("#szamok").empty();
                var i = 1; // sorszámok megadása
                var belepett_szama = 0; // beléptetettek száma
                var lis = '<li class="list-group-item p-1 bg-dark">';
                var lisben = '<li class="list-group-item p-1 bg-warning text-dark">';
                var chkbox = '; <input class="ml-1" type="checkbox" id="felhaszn" name="fellepo[]" value="';
                var label = '<label class="form-check-label ml-2" for="felhaszn">';
                fellepok.forEach(function (fellepo) {
                    var felhid = fellepo.id;
                    if (fellepo.belepett == 1) {
                        $('#benvan').append(lisben + i + chkbox + felhid + '" checked>' + label + fellepo.nev + '</label></li>')
                        belepett_szama++;
                        i++;
                    } else {
                        $('#benvan').append(lis + i + chkbox + felhid + '">' + label + fellepo.nev + '</label></li>')
                        i++;
                    }
                })
                i = i - 1;
                $('#szamok').append("Összesen: " + i + ", ebből: " + belepett_szama + " belépett." + "<br>Szabad jegyek száma: " + (i - belepett_szama));
            })
            $('#csopgomb').removeClass('disabled');
            $('#csopgomb').attr('href', 'csopbel/' + csid);
        });
    }

    // Az eddig belépett keresőmezője
    if ($("#eddig").exists()) {
        $("#eddig").focus();
        $("#eddig").keyup(function () {
            var nev = $("#eddig").val();
            $.ajax({
                beforesend: function () {
                    $("#eddig").addClass('ui-autocomplete-loading');
                },
                url: 'getEddig',
                complete: function () {
                    $("#eddig").removeClass('ui-autocomplete-loading');
                },
                method: 'post',
                data: 'nev=' + nev
            }).done(function (bennvannak) {
                bennvannak = JSON.parse(bennvannak);
                $('#eddigtbl').empty();
                bennvannak.forEach(function (bennvan) {
                    $('#eddigtbl').append('<tr>');
                    $('#eddigtbl').append('<th scope="row">' + bennvan.id + '.</th>');
                    $('#eddigtbl').append('<td>' + bennvan.nev + '</td>');
                    $('#eddigtbl').append('<td>' + bennvan.ceg + '</td>');
                    $('#eddigtbl').append('<td>' + bennvan.belepett + '</td>');
                    $('#eddigtbl').append('<td>' + bennvan.megjegyzes + '</td>');
                    $('#eddigtbl').append('</tr>');
                })
            });
        });
    }
    ;

    // A kezdőoldal keresőmezője
    if ($("#title").exists()) {
        $("#title").focus();
        $('#egybelep').disabled = true;
        $("#title").autocomplete({
            minLength: 2,
            source: "index.php/karszalag/getAutocomplete/?",
            select: function (event, ui) {
                $('[name="sorsz"]').val(ui.item.sorsz);
                $('[name="nev"]').val(ui.item.label);
                $('[name="szul_datum"]').val(ui.item.szul_datum);
                $('[name="cegnev"]').val(ui.item.cegnev);
                $('[name="besorolas"]').val(ui.item.besorolas);
                $('[name="programresz"]').val(ui.item.programresz);
                $('[name="megjegy"]').val(ui.item.megjegyzes);
                $('[name="belepett"]').val(ui.item.belepett);
                $('[name="befiz"]').val(ui.item.szdarab);
                $('[name="gybefiz"]').val(ui.item.gyszdarab);
                $('#egybelep').prop('disabled', false);
                $('#karsz').prop('disabled', false);
                $('#gykarsz').prop('disabled', false);
                return false;
            }
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            var bel = '';
            if (item.belepett === 'Nincs beléptetve.') {
                bel = '<div class="d-inline bg-light text-danger ">Nincs beléptetve.</div>'
            } else {
                bel = '<div class="d-inline bg-light text-primary">' + item.belepett + '</div>'
            }
            return $('<li class="list-group-item p-0">')
                .append("<div><strong>" + item.label + "</strong> - " + item.szul_datum + "<br>" + item.cegnev + '<br>' + bel + '</div>')
                .appendTo(ul);
        };
    }
});
