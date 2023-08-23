
$('.login-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val();

    $.ajax({
        url: 'app/signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password
        },
        success (data) {

            if (data.status) {
                document.location.href = '../index.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }
                $('.msg').removeClass('none').text(data.message);
            }
        }
    });
});


$('.register-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val(),
        email = $('input[name="email"]').val(),
        password_confirm = $('input[name="password_confirm"]').val();

    let formData = new FormData();
    formData.append('login', login);
    formData.append('password', password);
    formData.append('password_confirm', password_confirm);
    formData.append('email', email);


    $.ajax({
        url: 'app/signup.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/index.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }
                $('.msg').removeClass('none').text(data.message);
            }
        }
    });
});

let img = false;

$('input[name="img"]').change(function (e) {
    img = e.target.files[0];
});

$('.upload-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let title = $('input[name="title"]').val(),
        comment = $('input[name="comment"]').val();

    let formData = new FormData();
    formData.append('title', title);
    formData.append('comment', comment);
    formData.append('img', img);

    $.ajax({
        url: 'app/upload_img.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {
            if (data.status) {
                document.location.href = '/index.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }
                $('.msg').removeClass('none').text(data.message);
            }
        }
    });
});

// $('.comment_delete').click(function (e) {
//     e.preventDefault();
//     console.log($('input[name="id"]').val());
//     $(`input`).removeClass('error');
//     let title = $('input[name="title"]').val(),
//         comment = $('input[name="comment"]').val();

//     let formData = new FormData();
//     formData.append('title', title);
//     formData.append('comment', comment);
//     formData.append('img', img);


//     $.ajax({
//         url: 'app/upload_img.php',
//         type: 'POST',
//         dataType: 'json',
//         processData: false,
//         contentType: false,
//         cache: false,
//         data: formData,
//         success (data) {

//             if (data.status) {
//                 document.location.href = '/index.php';
//             } else {

//                 if (data.type === 1) {
//                     data.fields.forEach(function (field) {
//                         $(`input[name="${field}"]`).addClass('error');
//                     });
//                 }
//                 $('.msg').removeClass('none').text(data.message);
//             }
//         }
//     });
// });


