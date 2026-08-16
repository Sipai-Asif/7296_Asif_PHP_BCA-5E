<button onclick="startRequest()">Get Data via Callback</button>
<div id="output"></div>

<script>
// Main AJAX function that accepts a callback function
function ajaxRequest(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            callback(xhr.responseText); // Execute callback here
        }
    };
    xhr.send();
}

function startRequest() {
    ajaxRequest("data.txt", function(response) {
        document.getElementById("output").innerText = response;
    });
}
</script>