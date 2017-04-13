var host = window.location.href;
host = host.split('admin');
tinymce.init({
    selector: '.tinymce',
    height: 500,
    plugins: ["advlist autolink lists link image charmap print preview hr anchor pagebreak", "searchreplace wordcount visualblocks visualchars fullscreen", "insertdatetime media nonbreaking save table contextmenu directionality", "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"],
    toolbar1: "undo redo bold italic underline strikethrough cut copy paste| alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote searchreplace | styleselect formatselect fontselect fontsizeselect ",
    toolbar2: "table | hr removeformat | subscript superscript | charmap emoticons ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | link unlink anchor image media | insertdatetime preview | forecolor backcolor print fullscreen code ",
    image_advtab: true,
    menubar: true, // language : "vi_VN",
    toolbar_items_size: 'small',
    relative_urls: false,
    remove_script_host: false,
    external_filemanager_path: host[0] + "/filemanager/",
    filemanager_title: " Quản lý file",
    external_plugins: {
        "filemanager": host[0] + "/filemanager/plugin.min.js"
    },
    //video_template_callback: videoupload,
    video_template_callback: function(data) {
        return '';
    },
    // file_browser_callback: RoxyFileBrowser,
    // file_browser_callback_types: 'file image media'
});

window.setTimeout(function() {
    $("#alert-login").hide(1000);
}, 1000);
