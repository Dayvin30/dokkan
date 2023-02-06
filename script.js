$(document).ready(function(){


    
    $(".category").click(function(){
        var dummyContent = $(this).attr('name');
        console.log(dummyContent);
        var dummy = $('<input style="display: none">').val(dummyContent).appendTo('body').select()
        document.execCommand('copy')
        toastr.success('Copied to clipboard!')

    });

    $('.filter-category').onkeydown(function(e){
        console.log("key pressed");
        let toFind = $(this).val();
        if($('.category').text().includes(toFind)){
            $('.category').show();
        }else{
            $('.category').hide();
        }
    });

});


