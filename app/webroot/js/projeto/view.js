$("#salary").blur(function(){
    $(this).format({format:"#,###.00", locale:"de"});
});