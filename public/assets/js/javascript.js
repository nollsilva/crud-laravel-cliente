$(function () {

    $('#del').click(function () {

        if (confirm('Deseja realmente excluir este registro?')) {
            var id = $('#cliente_id').html();
            $.ajax({
                "type": "DELETE",
                data: {
                    "_token": $('input[name="_token"]').val(),
                    "id": id
                },
                "url": "/cliente/" + id,
                "success": function (data) {
                    console.log(data);
                    window.location = "/cliente";
                },
                "error": function (request, status, error) {
                    console.log(error);
                }
            });
        }

    });

});
