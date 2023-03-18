<!-- форма обратной связи -->
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Сообщение об ошибке</title>
  <meta charset="UTF-8">
</head>
<body>
  <h1>Вы хотите отправить сообщение об ошибке?</h1>
</body>

<script>
document.addEventListener("keydown", function(event) {
  if (event.ctrlKey && event.keyCode === 13) {
    var errorText = window.getSelection().toString();
    if (errorText !== "") {
      if (confirm("Вы хотите отправить сообщение об ошибке?")) {
        // Отправка данных на сервер
        var xhr = new XMLHttpRequest();
        var url = "error.php";
        var params = "error-text=" + encodeURIComponent(errorText);
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            // Отображение сообщения об успешной отправке
            alert("Сообщение отправлено");
          }
        };
        xhr.send(params);
      }
    } else {
      alert("Выделите текст с ошибкой");
    }
  }
});
</script>