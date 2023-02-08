$(document).ready(function() {


    $("div").click(function() {
        var name = $(this).attr("name");
        var tempInput = $("<input>");
        $("body").append(tempInput);
        tempInput.val(name).select();
        document.execCommand("copy");
        tempInput.remove();
        console.log("Value copied to clipboard: " + name);
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