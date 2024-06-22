function getRecetteAnnee(form, url) {
    ///create the xhr
    var xhr = createXHR();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                res = JSON.parse(xhr.responseText, true)
                alert(res)
            } else {
                alert(xhr.status);
            }
        }
    };
    sendXHR(xhr,"POST",url,true,form)
}