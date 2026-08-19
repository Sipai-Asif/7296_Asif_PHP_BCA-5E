<!DOCTYPE html>
<html>
<head>
    <!-- Include jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2 id="msg">Checking jQuery status...</h2>

    <script>
    $(document).ready(function() {
        if (typeof jQuery != 'undefined') {
            $("#msg").text("jQuery is successfully loaded and available!");
        } else {
            $("#msg").text("jQuery is NOT available.");
        }
    });
    </script>
</body>
</html>