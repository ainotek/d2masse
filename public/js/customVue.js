(function () {
    console.log('loaded');
    let parishSelect = document.getElementById('select2-2');
    let massSelect = $('#mass_id');
    parishSelect.addEventListener("change", async function () {
        massSelect.find('option')
            .remove().end().append('<option value="0" selected >---Choisir la Messe---</option>\n');
        const parish_id = parishSelect.value;
        if (parish_id) {
            const getMassesUrl = document.getElementById('requestForm').dataset.massesUrl.replace("#id", parish_id);
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

    var useTemplate = document.getElementById("use-template");
    var templateSelectDiv = document.getElementById("template-select-div");
    var templateSelectInput = document.getElementById("template-select-input");
    var messageTextarea = document.getElementById("message-textarea");
    useTemplate.addEventListener('change', function () {
        if (this.checked) {
            templateSelectDiv.classList.remove('d-none');
            // Checkbox is checked..
            templateSelectInput.value = templateSelectInput.children[0].value;
        } else {
            // Checkbox is not checked..
            templateSelectDiv.classList.add('d-none');
            templateSelectInput.value = null;
        }
    });
    templateSelectInput.addEventListener('change', async function () {
        var selectedTemplateId = templateSelectInput.value;
        var getTemplatesUrl = document.getElementById('requestForm').dataset.templatesUrl.replace("#id", selectedTemplateId);
        if (selectedTemplateId) {
            var response = await fetch(getTemplatesUrl);
            if (response.ok) {
                const requestTemplate = await response.json();
                if (requestTemplate) {
                    messageTextarea.value = requestTemplate.content;
                }
            } else {
                messageTextarea.value = '';
            }
        }
    })
})();
