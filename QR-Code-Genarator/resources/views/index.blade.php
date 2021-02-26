<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{url('simple-qr-code')}}" method="POST">
        <label for="url">URL</label>
        <input type="url" name="url" id="url">

        <button type="submit">
            Generate QR
        </button>
    </form>
</body>
</html>