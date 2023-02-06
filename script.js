$(document).ready(function(){
    $(".category").click(function(){
        var dummyContent = $(this).attr('name');
        console.log(dummyContent);
        var dummy = $('<input>').val(dummyContent).appendTo('body').select()
        document.execCommand('copy')
        toastr.success('Copied to clipboard!')

    });
});