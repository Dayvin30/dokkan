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

$(document).ready(function () {
    $('.filter-category').on('keyup', function () {
        let toFind = $(this).val().toLowerCase();
        let currentSectionVisible = false;

        // Commence par tout cacher
        $('.category').hide();

        // Parcourt chaque section
        $('.section-title').each(function () {
            let section = $(this);
            let hasVisible = false;

            // Trouve les catégories qui suivent ce titre jusqu'au prochain titre
            let categories = section.nextUntil('.section-title', '.category');

            categories.each(function () {
                let categoryText = $(this).text().toLowerCase();
                if (categoryText.includes(toFind)) {
                    $(this).show();
                    hasVisible = true;
                }
            });

            // Affiche le titre si au moins une catégorie dans cette section correspond
            if (hasVisible) {
                section.show();
            } else {
                section.hide();
            }
        });
    });
});



