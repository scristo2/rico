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

            let aa = ['mercedes', "audi", "bmw", "seat", "reanualt"];

            aa.map((e, i) => {

                $("#ul").append(`<li>${e} | ${i}</li>`)
            });
        });
    </script>
</body>
</html>