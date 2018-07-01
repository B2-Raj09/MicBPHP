$(document).ready(function () {

    $('#email').focus();

    $('#submit').click(function () {
        var email = $('#email').val();
        var pass = $('#pass').val();

        if (email == "" || pass == "") {
            $('div#ack').html('Please enter both email and password !');
        } else {
            $.post($('#userForm').attr('action'),
                $('#userForm :input').serializeArray(),
                function (data) {
                    $('div#ack').html(data);
                });
        }
        $('#userForm').submit(function () {
            return false;
        });
    });

    $('#upload').click(function () {
        var image = $('#post-image').val();
        var content = $('#post-text').val();

        if (image == "" || content == "") {
            $('div#err').html('Please select image and write caption !');
        } else {
            $.post($('#postForm').attr('action'),
                $('#postForm :input').serializeArray(),
                function (data) {
                    $('div#err').html(data);
                });
        }
        $('#postForm').submit(function () {
            return false;
        });
    });

});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#disp')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
