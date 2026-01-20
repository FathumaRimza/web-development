<!DOCTYPE html>
<html>
  <head>
    <script src="js/jquery-3.7.1.min.js"></script>
  </head>
  <body>
    <input id="num" type="number" />
<button id="getValue">GET VALUES</button>
<script>
    $('#getValue').click(function() {
        const data = {num:$('#num').val()};

        $.post('square.php', data, function(json) {
            alert(json.squaredValue);
        }, 'json');
    });
</script>
</body>