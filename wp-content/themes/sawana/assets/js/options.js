jQuery(function($){
    var frame = wp.media({
        title:      'select or upload logo',
        button: {
            text:   'Use this media' 
        },
        multiple: false
    });

    $('#sw_uploadLogoImgBtn').click (function(e){ 
        e.preventDefault();
        frame.open();  
    });

    frame.on('select', function() {
        var attachment = frame.state().get('selection').first().toJSON();
        $('input[name=sw_inputLogoImg]').val(attachment.url);
    })

});
