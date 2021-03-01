$(document).ready(function() {
    function onLoad(loading, loaded) {
        if (document.readyState === 'complete') {
            return loaded();
        }
        loading();
        if (window.addEventListener) {
            window.addEventListener('load', loaded, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', loaded);
        }
    };
    onLoad(function() {
            $(".div-loading").show();

        },
        function() {
            $(".div-loading").hide();

        });

});