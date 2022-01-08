let once = false;
$(document).ready(function(){
    if (!once) {
        CKEDITOR.disableAutoInline = true;
        CKEDITOR.replace('content');
        once = true;
    }
});
