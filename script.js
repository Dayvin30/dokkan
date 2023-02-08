$(document).ready(function() {


    $(".category").click(function () {
        var dummyContent = $(this).attr('name');
        console.log(dummyContent);
        var dummy = $('<input class="to-copy">').val(dummyContent).appendTo('body').select()
        document.execCommand('copy')
        toastr.success("Category copied", 'Success!');
        document.activeElement.blur();
        $("input").blur();
        $('.to-copy').remove();
    });





});

$(document).ready(function() {
$('.filter-category').keyup(function (e) {
    console.log("key pressed");
    let toFind = $(this).val().toLowerCase();

    $('.category').each(function () {
        if ($(this).text().toLowerCase().includes(toFind)) {
            $(this).show();
        } else {
            $(this).hide();
        }


    });

});
});