<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
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

      
      <div class="dropdown" style="margin-left: 280px;">
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
      <button class="button" style="margin-left: 15px;margin-top: 26px; cursor: pointer;">My Acc</button>
      
      <!-- <a href="register.php"><span class="material-icons-outlined" style="margin-left: 12px; margin-top: 26px; cursor: pointer;">person</span></a>
     -->
     <div class="dropdown">
        <button class="dropbtn" style="background-color:transparent;font-weight:600; width:10px;"><span class="material-icons-outlined" style="margin-left:-20px;cursor: pointer;width:50px">person</span></button>
        <div class="dropdown-content" style="width:50px;">
           <a href="" style="width:50px;">Logout</a>
           <a href="" style="width:50px;">Home</a>
        </div>
      </div>
      <span class="material-icons-outlined" style="margin-left: 50px; margin-top: 26px; cursor: pointer;">save</span>
      <span class="material-icons-outlined" style="margin-left: 20px; margin-top: 26px; cursor: pointer;">account_balance</span>
      <span class="material-icons-outlined" style="margin-left: 20px; margin-top: 26px; cursor: pointer;">notifications</span>
   </nav>
   <form action="" style="margin-left: 550px;margin-top: 150px;border: 1px solid black;justify-content: center;text-align: center;width: 450px;height: 80px;padding-top: 50px;border-radius: 16px;background-color:#fff;">
    <input type="text" placeholder="Name of the Coin" id="data_name" style="height:30px ;border-radius:6px;text-align:center;">
    <input type="number" placeholder="units" id="data_unit" style="height:30px ;border-radius:6px; text-align:center;">
    <button style="width:50px; height:30px; background-color:yellow;border-radius:6px; cursor:pointer;" onclick="buy()">BUY</button>
   </form>
    <section id="body" style="margin-top:150px">
     <table style="margin-left:200px">
        <tr>
          <th style="font-size:28px; color:rgb(196, 197, 198);">Name</th>
          <th style="padding-left: 150px;font-size:28px; color: rgb(196, 197, 198);">Last Price</th>
          <th style="padding-left: 140px;font-size:28px; color: rgb(196, 197, 198);">24h Change</th>
          <th style="padding-left: 144px;font-size:28px; color:rgb(196, 197, 198);">Market Cap</th>
        </tr>
        </table>
        <table style="margin-left:200px" id="tabledata">
     </table>
    </section>

    <center style="margin-top: 100px;margin-bottom:50px;">
    <h1 style="font-size: 46px;">Start trading now</h1>
   <a href="home.php" style="text-decoration:none;color:black;cursor: pointer;"><button style="margin-top: 20px; width: 180px;height: 40px; font-size: 18px;background-color: #ffcc00; border: none; border-radius: 6px;cursor: pointer;">Trade Now</button></a>
</center>

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

const table = document.createElement("table");

for (var i = 1; i <= 100; i++) {
    const tr = document.createElement("tr"); 
    const td1 = document.createElement("td");
    td1.textContent = data[i].name;
    
    const td2 = document.createElement("td");
    td2.textContent = data[i].quote.quotes_price.toFixed(2);
    
    const td3 = document.createElement("td");
    td3.textContent = data[i].quote.quotes_percentChange24h.toFixed(2);
    
    const td4 = document.createElement("td");
    td4.textContent = (data[i].totalSupply / 100000000000).toFixed(4) + 'M';
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tr.appendChild(td4);
    td1.style="font-size: 20px;padding-bottom:20px;"
    td2.style= "padding-left:70px; font-size: 20px;padding-bottom:20px;";
        
    td3.style= "padding-left:180px;font-size: 20px;padding-bottom:20px;";
    td4.style= "padding-left:210px;font-size: 20px;padding-bottom:20px;"
    table.appendChild(tr);
}
document.getElementById('tabledata').appendChild(table);
}
call();

async function buy(){
    event.preventDefault();
    const data_name = document.getElementById("data_name").value;
    const data_unit = document.getElementById("data_unit").value;
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
if(data_name != '' && data_unit == ''){
for(var i = 1; i<= 100; i++){
    // console.log(data[i]);
   if(data[i].name.toLowerCase() == data_name.toLowerCase()){
    alert("$"+data[i].quote.quotes_price.toFixed(2) +" is Current Price of " + data[i].name);
   }

}
}
 if(data_name != '' && data_unit != ''){
    window.location.href = 'checkout.php';
}   

}


    </script>
    <script src="binance/script.js"></script>
</body>
</html>