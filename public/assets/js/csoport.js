$.fn.exists = function () {
    return this.length !== 0;
};



/**
 *
 * A csoportos belépésnél a legördülő listában
 * kiválasztott cégnevek alapján, létrehozza a
 * cégben lévő belépők listáját.
 *
 */
$(document).ready(function () {
    // csoportos beléptetés legördülő lista.
    if ($("#csoportok").exists()) {
        $("#csoportok").focus()
        $("#csoportok").change(function () { // a legördülő listában változtatunk
            let csid = $("#csoportok").val();
            // A csoportok lekérdezése ajax-al.
            $.ajax({
                url: "csopval",
                method: "post",
                data: "csid=" + csid
            }).done(function (fellepok) {
                $("#csopupd").removeClass("disabled");
                fellepok = JSON.parse(fellepok);
                $("#benvan").empty();
                $("#szamok").empty();
                let i = 1; // sorszámok megadása
                let belepett_szama = 0; // beléptetettek száma
                const lis = '<li class="list-group-item p-1 bg-dark">';
                const lisben = '<li class="list-group-item p-1 bg-warning text-dark">';
                const chkbox = '; <input class="ml-1" type="checkbox" id="felhaszn" name="fellepo[]" value="';
                const label = '<label class="form-check-label ml-2" for="felhaszn">';
                fellepok.forEach(function (fellepo) {
                    var felhid = fellepo.sorsz;
                    if (fellepo.belepett == 1) {
                        $('#benvan').append(lisben + i + chkbox + felhid + '" checked>' + label + fellepo.nev + '</label></li>');
                        belepett_szama++;
                        i++;
                    } else {
                        $('#benvan').append(lis + i + chkbox + felhid + '">' + label + fellepo.nev + '</label></li>');
                        i++;
                    }
                });
                i = i - 1;
                $("#szamok").append("Összesen: " + i + ", ebből: " + belepett_szama + " belépett." + "<br>Szabad jegyek száma: " + (i - belepett_szama));
            });
            $("#csopgomb").removeClass("disabled");
            $("#csopgomb").attr("href", "csopbel/" + csid);
        });
    }

});
