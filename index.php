<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <title>JS Bin</title>
</head>
<body>
    <form method="post" id="custom-form">
        <input type="text" id="text1" name="text1"> +
        <input type="text" id="text2" name="text2">
        <button type="submit" id="button"> = </button>
    </form>
    
    <div id="result"></div>

<script>
    $(document).ready(function($) {
        $('#button').on('click', function(e) {
            e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'process.php',
            data: {
                fields: $('form#custom-form').serialize()
            },
            success: function(res) {
                $('#result').html(res);
            }            
        });
    });
    })
</script>

</body>
</html>