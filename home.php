<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section id="body">

    </section>



    <script>
async function call(){
    const url = 'https://cryptocurrency-markets.p.rapidapi.com/v1/crypto/coins?page=1';
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': '24ed7f3ebcmsh0401816852477a7p11bf04jsn9f17c7f793d8',
            'X-RapidAPI-Host': 'cryptocurrency-markets.p.rapidapi.com'
        }
    };
    const response = await fetch(url, options);
        const result = await response.json();
        const data = result.data;
        for(var i = 1; i<=100; i++){
        console.log(data[1]);
    }
    // console.log(data[1]);
}
call();
    </script>
</body>
</html>