$(document).ready(function() {
    $('.valor').each(function(i, el){$(el).val($(el).val().replace('.',','))});
    $('.valor').numeric({allow:","});

     $("form").submit(function () {
         $('.valor').each(function(i, el){$(el).val($(el).val().replace(',','.'))});
         return true;
     });
});