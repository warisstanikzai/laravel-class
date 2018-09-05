$(document).ready(function () {


    // load the table view
    $('#table-view').click(function () {
        $.ajax({
            type: 'GET',
            url: '/medicines/table/view',
            success: function (data) {
                $('#medicines').html(data);
            }
        });
    });

    // card view
    $('#card-view').click(function () {
        $.ajax({
            type: 'GET',
            url: '/medicines/card/view',
            success: function (data) {
                $('#medicines').html(data);
            }
        });
    });


    $('#create-card-form').submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/cards',
            data: $(this).serialize(),
            success: function (data) {
                if (data.id) {

                    $('#create-card').modal('hide');
                }
            },
            error: function (error) {
                $('#name-error').html(error.responseJSON.message);
            }
        });
    });
});
