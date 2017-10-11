$(document).ready(function() {
    initWebSocket();
    $('form').submit(function (e) {
        e.preventDefault();
        var data = $(this).serializeFormJSON();
        var jsonConvertedData = JSON.stringify(data);  // Convert to json
        console.log(jsonConvertedData);
        sendJSON(jsonConvertedData);
        /* Object
            email: "value"
            name: "value"
            password: "value"
         */
    });
});