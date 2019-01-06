// window.onload = function() {
//     let url = window.location.href;
//     if (url.indexOf("127") == -1 || url.indexOf("localhost") == -1 ) {
//         window.location.protocol = 'https'
//     }
// }

function navigate(path) {
    window.location.href = "http://" + window.location.host + "/" + path;
}