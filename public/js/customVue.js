$(function () {
    $('#select2-2').on('change', async function  ()  {
        const parish_id = parseInt($(this).val());
        let response = await fetch(`http://d2messe.test/api/parishes/${parish_id}/masses`);
        if (response.ok){
            const massesList = await response.json();
            console.log(massesList);
        }else {

        }
    });
});
