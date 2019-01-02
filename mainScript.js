window.onload = function() {
    let url = window.location.href;
    if (url.indexOf("127") == -1) {
        window.location.protocol = 'https'
    }
}

function navigate(folder, frame) {
    if (frame != undefined) {
        dom.loadiframeContent(folder, frame);
    } else {
        window.location = "http://" + window.location.host + "/" + folder;
    }
}