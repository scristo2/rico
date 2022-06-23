<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="/jquery.js"></script>
</head>

<body>
    <ul id="ul"></ul>
    <script type="text/javascript">
        $(document).ready(() => {

            var xhr = new XMLHttpRequest();

            xhr.open('GET', 'categorias.json', true);

            xhr.responseType = 'json';

            xhr.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.response.motor[2].clasicos[2]);
                }
            };

            xhr.send();

        });
    </script>
</body>

</html>