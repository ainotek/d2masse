$('document').ready(function () {
    $('#select2-2').on('change', async function () {
        const parish_id = parseInt($(this).val());
        let response = await fetch(`http://d2masse.test/api/parishes/${parish_id}/masses`);
        if (response.ok) {
            const massesList = await response.json();
            console.log(massesList.length);
            if (massesList) {
                for (let i = 0; i < massesList.length; i++) {
                    const item = massesList[i]
                    $('#masse_id').append(
                        "<option value=" + item.id + ">" + item.nom + "</option>"
                    )
                }
            }
        } else {

        }
    });
});
