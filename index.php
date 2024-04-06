<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="binance/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
    <div id="add">
        <h1>To see content specific to your location, we suggest <span>India</span> as your preferred country/region.</h1>
        <button>continue</button>
        <span class="material-icons-outlined" style="color: rgb(105, 106, 107);" onclick="cancel()">close</span>
    </div>
   <nav id="navbar">
    <label for="" id="logo"><img src="https://download.logo.wine/logo/Binance/Binance-Logo.wine.png" width="180ox" height="80px" alt=""></label>
    <a href="home.php" style="text-decoration:none; color:black;"><li>Buy Cripto</li></a>
    <a href="home.php" style="text-decoration:none; color:black;"><li >Markets</li></a>
    <div class="dropdown">
        <button class="dropbtn" style="background-color:transparent;margin-top:30px;font-weight:600;">Trades</button>
        <div class="dropdown-content">
          <div style="display: flex;">
            <div class="left">
                Basic
          <a href="#">INR</a>
          <a href="#">TAKA</a>
          <a href="#">RUBLE</a>
        </div>
        <div class="right">Advance
            <a href="#">USD</a>
            <a href="#">EUR</a>
            <a href="#">DIRHAM</a>

        </div>
        </div>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn" style="background-color:transparent;margin-top:30px;font-weight:600;">Futures</button>
        <div class="dropdown-content">
          
           <a href="">Earn Money</a>
          <a href="#">Investment</a>
          <a href="#">Network</a>
          <a href="#">Market Analysis</a>
        </div>
      </div>
      <li>Earn</li>
      <div class="dropdown">
        <button class="dropbtn" style="background-color:transparent;margin-top:30px;font-weight:600;">Learn</button>
        <div class="dropdown-content">
          <a href="https://youtu.be/-XMm9oQZt1g?si=RpKsXqsJKWvWMFJr">How To Select Crypto Coin for Trading</a>
          <a href="https://youtu.be/26pKp6dy9JA?si=6RUMBMIYlJdB_W7C">Cryptocurrency Fundamental Analysis</a>
          <a href="https://youtu.be/4Tmmpqqi5KU?si=gr0qj_DYfsAbmG8_">SECRET OF BINANCE FUTURES COIN SELECTION</a>
          <a href="https://youtu.be/KWMVQGCBY5w?si=ATWyiiQzaoPaGD0Y">GLOBAL CRYPTO EXCHANGES REGISTERING IN INDIA</a>

        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn" style="background-color:transparent;margin-top:30px;font-weight:600;">More</button>
        <div class="dropdown-content">
          <div style="display: flex;">
            <div class="left">
               
          <a href="#">text 1</a>
          <a href="#">text 2</a>
          <a href="#">text 3</a>
        </div>
        <div class="right">
            <a href="#">text 1</a>
            <a href="#">text 2</a>
            <a href="#">text 3</a>

        </div>
        </div>
        </div>
      </div>

      
      <div class="dropdown" style="margin-left: 380px;">
        <button class="dropbtn" style="background-color:transparent;"><span class="material-icons-outlined" style=" color: black;font-size: 28px;">search</span></button>
        <div class="dropdown-content" style="">
            <div>
          <input type="text" placeholder="Finance, Currency, Country"><span class="material-icons-outlined" style=" color: rgb(61, 60, 60); font-size: 28px;cursor: pointer;">search</span></div>
          <div style="display: flex;">
            <div class="left">
        
               
          <a href="#">text 1</a>
          <a href="#">text 2</a>
          <a href="#">text 3</a>
        </div>
        <div class="right">
            <a href="#">text 1</a>
            <a href="#">text 2</a>
            <a href="#">text 3</a>

        </div>
        </div>
      </div>
      </div>
      <button class="button" style="margin-left: 15px;margin-top: 26px; cursor: pointer;"><span class="material-icons-outlined">file_download</span>Diposit</button>
      
      <a href="register.php"><span class="material-icons-outlined" style="margin-left: 12px; margin-top: 26px; cursor: pointer;">person</span></a>
      <span class="material-icons-outlined" style="margin-left: 12px; margin-top: 26px; cursor: pointer;">save</span>
      <span class="material-icons-outlined" style="margin-left: 12px; margin-top: 26px; cursor: pointer;">account_balance</span>
      <span class="material-icons-outlined" style="margin-left: 12px; margin-top: 26px; cursor: pointer;">notifications</span>
      <span class="material-icons-outlined" style="margin-left: 12px; margin-top: 26px; cursor: pointer;">save_alt</span>
      <span class="material-icons-outlined" style="margin-left: 12px; margin-top: 26px; cursor: pointer;">language</span>
      <span class="material-icons-outlined" style="margin-left: 12px; margin-top: 26px; cursor: pointer;" onclick="change()">nightlight_round</span>
   </nav>
    <h1 style="margin-top: 120px; margin-left: 150px; font-size: 56px;">Verify your account</h1>
    <h1 style="margin-top: 28px; margin-left: 150px; font-size: 20px;color: rgba(15, 15, 15, 0.405);">Get verified to achieve higher trading capacity.</h1>
     <a href="register.php"><button style="margin-left: 150px;margin-top: 30px; width: 210px; height: 50px; background-color: #ffcc00;border: none; border-radius: 6px;">Get Verified</button></a> 
<center>
    <div class="record" style="display: flex;margin-top: 85px;font-size: 20px;margin-left: 180PX;">
        <ul style="list-style: none;margin-left: 50px;">
            <li><h3 id="coin1"></h3> <span id="symbol1" style="color: rgb(5, 247, 25);"></span></li>
            <li id="low1"></li>
            <li style="display: flex;" id="price1"></li>
        </ul>
        <ul style="list-style: none;margin-left: 140px;">
            <li><h3 id="coin2"></h3> <span id="symbol2" style="color: rgb(5, 247, 25);"></span></li>
            <li id="low2"></li>
            <li style="display: flex;" id="price2"></li>
        </ul>
        <ul style="list-style: none;margin-left: 140px;">
            <li><h3 id="coin3"></h3><span id="symbol3" style="color: rgb(5, 247, 25);"></span></li>
            <li id="low3"></li>
            <li style="display: flex; margin-left: 32px;" id="price3" ></li>
        </ul>
        <ul style="list-style: none;margin-left: 140px;">
            <li><h3 id="coin4"></h3><span id="symbol4" style="color: rgb(5, 247, 25);"></span></li>
            <li id="low4"></li>
            <li style="display: flex;" id="price4" ></li>
        </ul>
        <ul style="list-style: none;margin-left: 140px;">
            <li><h3 id="coin5"></h3><span id="symbol5" style="color: rgb(5, 247, 25);"></span></li>
            <li id="low5"></li>
            <li style="display: flex;" id="price5"></li>
        </ul>
    </div>
    
</center>

  <div id="announce" style="display: flex;"> <pre style="margin-top: 120px; margin-left: 150px;display: flex; "><span class="material-icons-outlined">campaign</span>  Binance Futures Will Update the Leverage and Margin Tiers of Multiple USDⓈ-M Perpetual Contracts   10-05 </pre> <a style="text-decoration:none; color:black;" href="https://www.coinlive.com/news-flash/412269"><pre style="margin-top: 120px; margin-left: 25px; display: flex;"> More <span class="material-icons-outlined" style="margin-top: -3px;">chevron_right</span></pre></a> </div>
  <div id="announce" style="display: flex; margin-top: -50px;"> <pre style="margin-top: 60px; margin-left: 150px;display: flex; "><span class="material-icons-outlined">description</span>  Special Notice about Binance.com in Singapore   10-05 </pre> <a style="text-decoration:none; color:black;" href="https://asia.nikkei.com/Spotlight/Cryptocurrencies/Binance-revives-Singapore-crypto-permit-bid-despite-U.S.-pressure"><pre style="margin-top: 60px; margin-left: 25px; display: flex;"> More <span class="material-icons-outlined" style="margin-top: -3px;">chevron_right</span></pre></a> </div>
  <div id="announce" style="display: flex; margin-top: -50px;"> <pre style="margin-top: 60px; margin-left: 150px;display: flex; "><span class="material-icons-outlined">description</span>  Special Notice About Binance Markets Limited   10-05 </pre> <a style="text-decoration:none; color:black;" href="https://economictimes.indiatimes.com/markets/binance"><pre style="margin-top: 60px; margin-left: 25px; display: flex;"> More <span class="material-icons-outlined" style="margin-top: -3px;">chevron_right</span></pre></a> </div>
 <div class="section1" style="display: flex; margin-top: 55px;"> 
 <h1 style=" margin-left: 150px; font-size: 42px;">Popular cryptocurrencies</h1>
  <a href="home.php" style="text-decoration:none;color:black;"><h1 style="font-size: 22px;margin-left: 650px;display:flex;">View more markets <span class="material-icons-outlined" style="margin-top: 5px;">chevron_right</span></h1></a>
</div>
<div class="section2" style="margin-left: 150px;font-size:10px;margin-top: 50px;color: rgb(0, 0, 0); font-weight: 100;">
    <div class="name" style="display: flex; color: rgba(0, 0, 0, 0.436);">
        <h1>Name</h1>
        <h1 style="margin-left: 350px;">Last Price</h1>
        <h1 style="margin-left: 250px;">24h Change</h1>
        <h1 style="margin-left: 250px;">Market Cap</h1>
    </div>
    <div class="name" style="display: flex; margin-top: 30px;margin-left: -20px;">
        <h1><img src="binance/img.png" width="30px" height="30px" alt="">  BNB <span style="color: rgba(0, 0, 0, 0.408);font-size: 8px;">BNB</span></h1>
        <h1 style="margin-left: 320px;" id="price9"></h1>
        <h1 style="margin-left: 270px;">+ <span style="color: greenyellow;" id="perc1"></span></h1>
        <h1 style="margin-left: 270px;" id="mcap1"></h1>
    </div>
    <div class="name" style="display: flex;  margin-top: 20px;margin-left: -20px;">
        <h1 style="margin-left: -10px;"><img src="binance/bitcoin.png" width="40px" height="30px" alt="">Bitcoin <span style="color: rgba(0, 0, 0, 0.408);font-size: 8px;">BTC</span></h1>
        <h1 style="margin-left: 300px;" id="price6"></h1>
        <h1 style="margin-left: 260px;">+ <span style="color: greenyellow;" id="perc2"></span></h1>
        <h1 style="margin-left: 260px;" id="mcap2"></h1>
    </div>
    <div class="name" style="display: flex;  margin-top: 20px;margin-left: -20px;">
        <h1 style="margin-left: -5px;"><img src="binance/solana.png" width="30px" height="30px" alt="">  Ethereum <span style="color: rgba(0, 0, 0, 0.408);font-size: 8px;">ETH</span></h1>
        <h1 style="margin-left: 280px;" id="price7"></h1>
        <h1 style="margin-left: 270px;">+ <span style="color: greenyellow;" id="perc3"></span></h1>
        <h1 style="margin-left: 270px;" id="mcap3"></h1>
    </div>
    <div class="name" style="display: flex;  margin-top: 20px;margin-left: -20px;">
        <h1><img src="binance/solana1.png" width="30px" height="30px" alt="">  Solana <span style="color: rgba(0, 0, 0, 0.408);font-size: 8px;">SQL</span></h1>
        <h1 style="margin-left: 300px;" id="price10"></h1>
        <h1 style="margin-left: 270px;">+ <span style="color: greenyellow;" id="perc4"></span></h1>
        <h1 style="margin-left: 280px;" id="mcap4"></h1>
    </div>
    <div class="name" style="display: flex;  margin-top: 20px;margin-left: -20px;">
        <h1><img src="binance/tether.png" width="30px" height="30px" alt="">  Tether <span style="color: rgba(0, 0, 0, 0.408);font-size: 8px;">XRP</span></h1>
        <h1 style="margin-left: 300px;" id="price8"></h1>
        <h1 style="margin-left: 300px;">+ <span style="color: greenyellow;"id="perc5"></span></h1>
        <h1 style="margin-left: 300px;" id="mcap5"></h1>
    </div>
</div>


<section id="body1" style="display: flex;margin-top:110px ;margin-left: 60px;">
    <div class="left" style="width: 50%; float: left;padding-left: 100px;">
    <div class="image" style="display: flex;">
     <img src="binance/desktop.png" alt=""  style="margin-left: 0px;" width="600px" height="620px" id="image1">
     <img src="binance/phone.png" alt="" width="400px" height="620px"  style="margin-left: 170px;" id="image2">
     <img src="binance/pro.png" alt="" width="400px" height="620px" style="margin-left: 170px;" id="image3">
    </div>
    <div class="button2" style="display: flex;position: absolute;">
      <span onclick="desk()" id="text1" style="margin-left: 250px; color: black; cursor: pointer;">Desptop</span>
      <span onclick="phone()" id="text2" style="margin-left: 30px; color: black; cursor: pointer;">phone</span>
      <span onclick="pro()" id="text3" style="margin-left: 30px; color: black; cursor: pointer;">pro</span>
    </div>
    
    </div>
    <div class="right" style="margin-top:50px;">
   <img src="binance/right.png" width="600px" height="500px" alt="">
   <button class="button3">More download option</button>
    </div>
</section>

<h1 style="margin-top: 80px; margin-left: 150px;"> Get in touch. Stay in touch.</h1>
<section class="body2" style="margin-left: 150px; margin-top: 15px; display: flex;">
        <img src="binance/pic1.png"  width="300px" height="250px"     >
        <a href="https://blog.binance.us/"><img src="binance/pic2.png"  width="300px" height="250px"  style="margin-left: 30px;"></a>
         <a href="https://twitter.com/binance"><img src="binance/pic3.png" width="300px" height="250px"  style="margin-left: 30px;"></a>
         <img src="binance/pic4.png" width="300px" height="250px"  style="margin-left: 30px;"  >
</section>

<center style="margin-top: 100px;margin-bottom:50px;">
    <h1 style="font-size: 46px;">Start trading now</h1>
   <a href="home.php" style="text-decoration:none;color:black;cursor: pointer;"><button style="margin-top: 20px; width: 180px;height: 40px; font-size: 18px;background-color: #ffcc00; border: none; border-radius: 6px;cursor: pointer;">Trade Now</button></a>
</center>

    <script src="binance/script.js"></script>

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
    
    try {
        const response = await fetch(url, options);
        const result = await response.json();
        // First Coin
        const data1 = result.data[1];
        const firstname = result.data[1].name;
        document.getElementById("coin1").innerHTML = firstname;
        document.getElementById("symbol1").innerHTML = data1.symbol;
        document.getElementById("low1").innerHTML = data1.low24h.toFixed(2);
        document.getElementById("price1").innerHTML = '$'+data1.quote.quotes_price.toFixed(2);
        document.getElementById("price6").innerHTML = '$'+data1.quote.quotes_price.toFixed(2);
        document.getElementById("perc2").innerHTML = data1.quote.quotes_percentChange24h.toFixed(2);
        document.getElementById("mcap2").innerHTML = '$'+(data1.totalSupply/100000000000).toFixed(4)+'M';
        // Second Coin
        const data2 = result.data[2];
        const firstname2 = result.data[2].name;
        document.getElementById("coin2").innerHTML = firstname2;
        document.getElementById("symbol2").innerHTML = data2.symbol;
        document.getElementById("low2").innerHTML = data2.low24h.toFixed(2);
        document.getElementById("price2").innerHTML = '$'+data2.quote.quotes_price.toFixed(2);
        document.getElementById("price7").innerHTML = '$'+data2.quote.quotes_price.toFixed(2);
        document.getElementById("perc3").innerHTML = data2.quote.quotes_percentChange24h.toFixed(2);
        document.getElementById("mcap3").innerHTML = '$'+(data2.totalSupply/100000000000).toFixed(4)+'M';
        // Third Coin
        const data3 = result.data[3];
        const firstname3 = result.data[3].name;
        console.log(data3);
        document.getElementById("coin3").innerHTML = firstname3;
        document.getElementById("symbol3").innerHTML = data3.symbol;
        document.getElementById("low3").innerHTML = data3.low24h.toFixed(2);
        document.getElementById("price3").innerHTML = '$'+data3.quote.quotes_price.toFixed(2);
        document.getElementById("price8").innerHTML = '$'+data3.quote.quotes_price.toFixed(2);
        document.getElementById("perc5").innerHTML = data3.quote.quotes_percentChange24h.toFixed(2);
        document.getElementById("mcap5").innerHTML = '$'+(data3.totalSupply/100000000000).toFixed(4)+'M';
        // Fourth coin
        const data4 = result.data[4];
        const firstname4 = result.data[4].name;
        document.getElementById("coin4").innerHTML = firstname4;
        document.getElementById("symbol4").innerHTML = data4.symbol;
        document.getElementById("low4").innerHTML = data4.low24h.toFixed(2);
        document.getElementById("price4").innerHTML = '$'+data4.quote.quotes_price.toFixed(2);
        document.getElementById("price9").innerHTML = '$'+data4.quote.quotes_price.toFixed(2);
        document.getElementById("perc1").innerHTML = data4.quote.quotes_percentChange24h.toFixed(2);
        document.getElementById("mcap1").innerHTML = '$'+(data4.totalSupply/100000000000).toFixed(4)+'M';
        // fifth coin
        const data5 = result.data[5];
        const firstname5 = result.data[5].name;
        document.getElementById("coin5").innerHTML = firstname5;
        document.getElementById("symbol5").innerHTML = data5.symbol;
        document.getElementById("low5").innerHTML = data5.low24h.toFixed(2);
        document.getElementById("price5").innerHTML = '$'+data5.quote.quotes_price.toFixed(2);
        document.getElementById("price10").innerHTML = '$'+data5.quote.quotes_price.toFixed(2);
        document.getElementById("perc4").innerHTML = data5.quote.quotes_percentChange24h.toFixed(2);
        document.getElementById("mcap4").innerHTML = '$'+(data5.totalSupply/100000000000).toFixed(4)+'M';
    } catch (error) {
        console.error(error);
    }
}
call();
    </script>
</body>
</html>