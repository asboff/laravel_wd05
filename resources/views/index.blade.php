<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<script> function test(){
    console.log(11111)
    axios.get('/api/categories')then((res) => {
        let categories = res.data
        console.log(categories.data)
        console.log(22222)
        })
    console.log(33333)
    }

</script>
<body>
    <button onclick="test()">aaaaaa</button>
</body>
</html>
