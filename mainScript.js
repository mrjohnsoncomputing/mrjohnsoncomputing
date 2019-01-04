window.onload = function() {
    let url = window.location.href;
    if (url.indexOf("127") == -1) {
        window.location.protocol = 'https'
    }

}

function setPage(folder) {
    const params = new URLSearchParams(window.location.search);
    params.append("page", folder);
}

function getPage() {
    const params = new URLSearchParams(window.location.search);
    navigate(params.get("page"));
}

function navigate(folder, frame) {
    //getPage(folder);
    if (frame != undefined) {
        dom.loadiframeContent(folder, frame);
    } else {
        window.location.href = "http://" + window.location.host + "/" + folder;
    }
}