<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Heading 1</h1>
    <p class="test-para">This is a paragraph.</p>
    <button id="colorBtn">Change Colors</button>

    <script>
    $(document).ready(function() {
        $("#colorBtn").click(function() {
            // Target by tag name, class name, and ID selector
            $("h1").css("background-color", "red");
            $(".test-para").css("background-color", "red");
            $(this).css("background-color", "red");
        });
    });
    </script>
</body>
</html>