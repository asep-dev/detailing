$(function () {
    $(".image-projects").slice(0, 5).show();
    $("#load-image").on('click', function (e) {
        e.preventDefault();
        $(".image-projects:hidden").slice(0, 3).slideDown();
        if ($(".image-projects:hidden").length == 0) {
            $(".load-wrap-image").remove()
        }
    });
},($))

$(document).ready(function () {
    // $('#send-email').click(function(e){
    //     const email = $('#email').val()
    //     const subject = $('#subject').val()

    //     const result = `mailto:asepseo07@gmail.com?subject=${subject}`
    //     console.log(result)
    //     window.location.href = result
    // })
});

