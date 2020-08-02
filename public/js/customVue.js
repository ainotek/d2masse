(function () {
    let element = document.getElementById('select2-2');
    let massesSelect = $('#masse_id');
    element.addEventListener("change", async function () {
        massesSelect.find('option')
            .remove().end().append('<option value="0" selected >---Choisir la Messe---</option>\n').val('whatever');
        const parish_id = element.value;
        if (parish_id) {
            const getMassesUrl = document.getElementById('requestForm').dataset.massesUrl.replace("#id", parish_id);
            const response = await fetch(getMassesUrl);
            if (response.ok) {
                const masses = await response.json();
                if (masses) {
                    for (let i = 0; i < masses.length; i++) {
                        const item = masses[i];
                        massesSelect.append(
                            "<option value=" + item.id + ">" + item.name + "</option>"
                        )
                    }
                }
            } else {
            }
        }
    });
})();
