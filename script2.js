// Api Calling
async function call(){
    const url = 'https://cryptocurrency-markets.p.rapidapi.com/v1/crypto/coins?page=1';
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': '24ed7f3ebcmsh0401816852477a7p11bf04jsn9f17c7f793d8',
            'X-RapidAPI-Host': 'cryptocurrency-markets.p.rapidapi.com'
        }
    };
    
    try {
        const response = await fetch(url, options);
        const result = await response.json();
        data = "data";
        const first = result.data[1];
        console.log(first);
    } catch (error) {
        console.error(error);
    }
}
call();