(function () {
    let element = document.getElementById('select2-2');
    element.addEventListener("change", async function () {
        const parish_id = parseInt(element.value);
        let response = await fetch(`http://d2messe.test/api/parishes/${parish_id}/masses`);
        if (response.ok) {
            const masses = await response.json();
            console.log(masses[0]);
            masses.forEach((element, index) => {
                let option_elem = document.createElement('option');

                // Add index to option_elem
                option_elem.value = index;

                // Add element HTML
                option_elem.textContent = element;

                // Append option_elem to select_elem
                select_elem.appendChild(option_elem);
            });
        } else {

        }
    });
})();
