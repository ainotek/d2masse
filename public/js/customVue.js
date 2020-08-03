(function () {
    let parishSelect = document.getElementById('select2-2');
    console.log(parishSelect);
    let massSelect = $('#mass_id');
    console.log(massSelect);

    parishSelect.addEventListener("change", async function () {
        massSelect.find('option')
            .remove().end().append('<option value="0" selected >---Choisir la Messe---</option>\n');
        const parish_id = parishSelect.value;
        console.log(parish_id);

        if (parish_id) {
            const getMassesUrl = document.getElementById('requestForm').dataset.massesUrl.replace("#id", parish_id);
            console.log(getMassesUrl);
            const response = await fetch(getMassesUrl);
            if (response.ok) {
                const massOptions = await response.json();
                if (massOptions) {
                    for (let i = 0; i < massOptions.length; i++) {
                        const item = massOptions[i];
                        massSelect.append(
                            "<option value=" + item.id + ">" + item.name + "</option>"
                        )
                    }
                }
            } else {
            }
        }
    });
})();
