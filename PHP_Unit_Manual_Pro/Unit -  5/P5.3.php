<button onclick="getHeaders()">Fetch Headers</button>
<pre id="output"></pre>

<script>
function getHeaders() {
    var xhr = new XMLHttpRequest();
    xhr.open("HEAD", "data.txt", true); // Using HEAD method instead of GET
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("output").innerText = xhr.getAllResponseHeaders();
        }
    };
    xhr.send();
}
</script>