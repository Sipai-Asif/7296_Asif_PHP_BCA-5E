<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style> body { height: 1500px; } .top-btn { position: fixed; bottom: 20px; right: 20px; } </style>
</head>
<body>
    <h1>Scroll down to see the button</h1>
    
    <button class="top-btn" id="scrollToTop">Scroll to Top</button>

    <script>
    $(document).ready(function() {
        $("#scrollToTop").click(function() {
            $("html, body").animate({ scrollTop: 0 }, "slow");
        });
    });
    </script>
</body>
</html>