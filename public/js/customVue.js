// var app = new Vue({
//     el: '#app',
//     data: {
//       message: 'Hello Vue !'
//     },
//     methods: {
//         updateParishioner(e) {
//             alert(e)
//         }
//     },
// })

$(function () {
    $('#select2-2').on('change', function () {
        let parishioner_id = parseInt($(this).val());
        $.get("getAllByParish", {
            // headers: {
            //     'Content-Type': 'application/json',
            // },
            value: parishioner_id,
        }).done(function (response) {
            console.log(response.data)
        }).catch(function (error) {
            console.log(error);
        })
    });
});
