<?php

    require_once 'navigation.php';

?>
<html>
<head>
<meta charset="utf-8">
<meta content="IE-edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, intial-scale=1.0" name="viewport">
<title>Shoppers Stop-Electronics</title>

<!--JQuery--------------->
<script src="js/JQuery.js"></script>
<!--fav-icon---------------->
<link rel="shortcut icon" href="images/fav-icon.png"/>
<!--using FontAwesome--------------->
<script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>
	<!--style----->
	<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
    body{
    margin:0px;
    padding: 0px;
    font-family: poppins;
    background-color: white;
}
*{
    box-sizing: border-box;
}
ul{
    list-style: none;
}
a{
    text-decoration: none;
}
#autoWidth{
    display: flex;
    justify-content: center !important;
    margin: 10px auto 40px auto;
}

.arrival-heading strong{
    font-size: 1.2rem;
    letter-spacing: 1px;
    color: #1b1919;
    text-transform: uppercase;
    font-weight: 600;
    margin-top: 40px;
    padding: 5px 30px;
    border: 1px solid #e0e0e0;
}
.arrival-heading{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.arrival-heading strong{
    color: white;
    background-color: black;
    font-weight: 500;
    font-size: 20px;
}
.arrival-heading p{
    color: #808080;
    margin: 10px;
    font-size: 0.9rem;
}
.product-container{
    width:90%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 20px;
}
.product-box{
    display: flex;
    flex-grow: 0.5;
    flex-direction: column;
    align-items: center;
    border: 1px solid #f7f7f7;
    border-radius: 10px;
    margin: 20px;
}
.product-img{
    width:200px;
    height: 210px;
    margin: 20px;
    cursor: pointer;
    position: relative;
}
.product-img img{
    width:100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
}
.product-details{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 10px 20px;
    border-top: 1px solid #f3f3f3;
}
.p-name{
    color: #727272;
}
.p-name:hover{
  color: #0b9d8a;
}
.p-price{
    color: #333333;
    font-size: 1.2rem;
    font-weight: 400;
}
.product-box:hover{
    box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
}
.add-cart{
    position: absolute;
    right: -20px;
    top: 10px;
    width:50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffffff;
    background-color: #0b9d8a;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
    display: none;
    animation: fade 0.3s;
 
}
.add-cart:hover{
    background-color: #f76b6a;
    transition: all ease 0.2s;
}
.product-box:hover .add-cart{
    display: flex;
}
.new-arrival{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}


</style>
	
    </head>

    <body>


<!--NEW ARRIVAL-------------------------------->
<section class="new-arrival">
            
  <!--heading-------->
  <div class="arrival-heading">
      <strong>Electronics</strong>
      <p>We Provide You New Fasion Design Clothes</p>
  </div>
    <!--products----------------------->
    <div class="product-container">
        
      <!--product-box-1---------->
        <div class="product-box">
            <!--product-img------------>
            <div class="product-img">
                <!--add-cart---->
                <a href="cart.php" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                  </a>
                <!--img------>
              <img src="data:image/jpeg;base64,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">
            </div>
            <!--product-details-------->
            <div class="product-details">
                <a href="electronics_detail.php" class="p-name">Drawstring T-Shirt</a>
                <span class="p-price">$22.00</span>
            </div>
        </div>
          <!--product-box-2---------->
          <div class="product-box">
              <!--product-img------------>
              <div class="product-img">
                  <!--add-cart---->
                <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
                <!--img------>
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBISEhESEhEQGRgYEhkYGhgRERgYGRwaGBoZGRgYGhghIS4lHB4rHxgaJzgrLC82NTc1HCRIQDs1Py40QzEBDAwMEA8QHxISGjQhJSU0NzExNDQ0MTQ0NDQ0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0MT80MTQ0NDQ0MTQ+MTQ0PP/AABEIAOMA3gMBIgACEQEDEQH/xAAcAAEAAgIDAQAAAAAAAAAAAAAABAYDBQECBwj/xABCEAACAQIDBQQGBgkDBQEAAAABAgADEQQSIQUGMUFRYXGBkRMiMqGxsjRCcnPB8AcUUoKSosLR8UNi4SQzY3SzI//EABgBAQEBAQEAAAAAAAAAAAAAAAABAwQC/8QAIBEBAQACAwEBAAMBAAAAAAAAAAECEQMhMRJBMlGBIv/aAAwDAQACEQMRAD8A9miIgIiICIiAiIgIiICIiAiJ0dwBckAdSbQO8TUYrePA0zZ8Zhgf2fTIW/hBvNRiv0h7NS4FV3P/AI6T/Fgo98C3THUcKrMeABJ7hqZ53i/0sYdb+jw1Vj/5KioP5c009X9J1fEMKK4eii1Dka5dmAf1TZrrY2PSIL3RZqpNWoWsQMtO9lUMMwuPrNlIuet5JVugHhce8GdbaEdo+WafefbgwOHatkzsXCU0vYFiSBc8gAL/AOZt1Ireiqw5v4Ox+N53GKYfWbxCn8BPP92d+KlastDF06SM98jUwQtwL5SCza27fwvec0k1USf11uq+KH8GmQY4/sr/ABMP6ZAvOY+YNgMeOaHwZT8SJkGMXmHH7pPwvNVEnxBtxik/aA+1cfGZgb8Jowx6nzknC4krccZLh/Q2sRE8BERAREQEREBETqeyBSN6P0gUsJUehSp+kdB6xLZUU3ta4BLEG4sOYtyNqVi/0n497hDRTpkpa+bswPlNLvJSI9G5vd6CMb8cys4e/bmY3mjpA5rDoPNuEDfYnfDaVW+bFYj9x8n/AMws02JxVWprUdnPV2znzNzFMq2rs6rf2wmZR2kA3t2i/cZjxNJkZka1xbVTcEEAqynmpBBB6EQMRqHhc+c4nV+sXgckyVsr/v0fvE+YSGTJmyf+/R+8T5hLPR9Bn+ofCVzfnZFTF4NlpDM6VM6L+1lY3XvIuJYz/UPhK/vlt1sFhTUpqrO9TJTD+yCSxLMOYAHCa3xXm+xMFisVjqH/AE9dMlRWqNUR1Cin1LDj2cT0np+2t5MJg2RMRUKs4LBURmOUG2YhQbC9x22Nr2Mp26++mJbEpQxjq4c5VYIqFHIuFICroe7p1uJu/O7eKrYhMVhUWpektN0NRUYZHZlcFiAVOYgi/Lt08zzpF3w9ZHVKlNlZHQMrKbhlOoIPS0yTUbr7NfCYTD4eowZ0RsxU3F3dnKqeYGaw7ptp7VzE4iBzOLxOIFhiImCEREBERAREQETA9cC9rkjkPxPASv7d2vVRSEIX7Op/iP4DxgULf7Z+RqotomIYj7GJXOPAPmHhKJSexpva9jYjqUbMB/Cx8pcDVau2LpuzFnpEgsSWLJ666nUnRh4ynN9cdCr+HBvcx8oGSrXC0/RhWYA+qwAsRawzcw1tCP8AiR8RWzBL/UpqnflH5HcBOxQkgAAkk8f9tr/ETu1JXRyoKugDMt8yshIUuh4ghmAKm+huDoYEapSIVWNrMOV+YuL+EwqdJ2bkLmw4AnQd0xrxMDvJuxlzYnDr1rIPNwJBk/YP0vC/+zT/APoss9H0Df5h8Jot8NjNjMK6UyvpEqZ0zcCysfVPYRpN4OX2h8JW9/Nt1MHhC9Gwd6uRWIBy3LEsAdCbDS+mvZNb52qkbD3axtXG06lbCtRRKgd2cra68AgHHXoLdTL7tveanhqqUFoYitUZC5SgqkqlyATmIuSQbKNTblpei7qb14uni0oYqq9RKj5D6RsxVz7JBPDXSw69kue8GxcW9YYnA4inTqNTWnUWsDlZUcujKygsrAswI4EGeJeuvUjdbPxtOvTp1qTZkdMym1tOhHIgggjqDJM12wdmDCYelhw5fIpzORbM7uzu1uQLMbDpabGaKREQEROBAsUREwQiIgJ1JA1JkZsSC7U19pVBYngoa+XvJsdJzbXmT1b+3AQMhq/si/adB/z4ToRf2jfs4L5c/Ew1RQQGZQTwBIBPd1nJMDHU4StbepXUyztNPtWldTA8nep6HGU6nLNr3c/dfzmm2vhRSxL0z7Odk/df2T5N7pv95qBUlhxVrjw1kDe5A4pV14PSU+KafIRA0uGr5MpIXMjXGYXUnRXRu8oCD2dumH9YIaowAGZGW2bN7ZBYkju987Fczj/cVb+Pj/MGnSizAekyU2XUlHGpUcfWGo7wYEjYmCpV6pStWFNBTL3uLmxAstxYnW9uJsek1tdQrsAwYBmUMODAEgMO+1/GZ8fQVH9XMUZEdM1s2V1DANbTML5T2qZEbhA7yfsH6XhP/ZpfOs1wMn7Fe2JwzdK9M+Tg/hLPR9Bk6eI+WafezYox2GqUMwVs2emx4BgSRfs1sZt34eI+WdSZr+K8x3d3GxgxdOti8ipTfPcVA7Ow4Wtr4m34T1CY8s4yRJIO99ZxAFolCInN4HE5E4gQLHERMEIiIGowrZcRiEbi7KwPUZFC+F1ceHbJw0P5/PWareDFU6ZpuT6wNio4lG436WIDDtXvmxo1Q6BrjobcL8QR2cDBt4Tts1nxmNarUqCqlZreuVOQE5Ah5ALa09H/AEZbcqYvCulUlnouEzn6wNyp7wBNpvBujg8cQ9emQ6i2em+RrdCeY75S9j78bPwINDC4SsMOKjXq5szOeBqFbXIsBzva2g4QOx/SPiFxT+kpUf1dcQ1IqA/pFUPkzFr2LDiVt2DrPQ8alwZqE3d2bi6lPaAoU3dsrq6u4ViNVdkDZWbhqQeXHSbNNpYeq706eIoO6e2iVVZ11scyg3GsCgbz4X2tJXGX0mz7HjQq2/db1W9xTyl63kw9wZTdkJepicOeFWmbfaGg/mKnwgU5XKhTexRrX6a5lbwYHziq97hCVU6lLXAvxCn9ns+M6YoFXPb/AIPvBkcnu8oGavUzEX5KqgX4BQAB7pHc8hO0QOBJuyPpFD71PmEhyfsEXxeFB4HEUx4F1lno+gqnA94+Exzu/DxHyzpNYpERKEREBERAQDECBZIidGYAEkgAczMEdpq9pbTCAqli3XkP7mR9obSvdV4czzP9hNQ2s1xw/awz5fyNZjruSzEkk8TNxuvtC16TngNL/s3/AKSfJuya+skgB2putReKm/YeoPYRp4z1ljuPHHnqvRHW4IPAix7j/meG7e3SxOEd6a4WtVQvenUooX9XX1XAF1OvunteBxAdAQb2A53up4f28O2Y9rV3p4fEVKYzOlF3QEXuyqSunPUTB1NBuDsevh9mrRxGZHYubXuyK+ii/Ucbcryq7G3ZxtDEYCkMIqLhquapildCr07EOFsQ9nWwykaE35SkYXbmNRv1pcXVL3zEuxYNrqrX69Baw4WnvO7+0hi8JQxIFs9MMR0OoI8wYGt23RupnmWPJpV0qD6tQH36e+09b2mlxPM95sNYm356QKvvbhhTxD5fZLZ1+y4zj8ZopbN5KfpMPhaw50yh709YeNjbwMqcBOsRASfsR8uJwzdK6G3c4P4SBJuyPpFD71PmEs9H0LU4eI+WY5kq8P3h8Jim0VzERAREQEREBOROIgb+tWVBcn+57poMdj2c2Gg6D88ZFfGtWLudBnZQOiqfV8xrKlv3terh6dFKTFDUdgXHEBQNAeRObj2GSYzGbrmyzuWXzFogzzfYO8GJpYmlTq1XqJUYKc7ZiM3BlY66Ei475vN9nximi2HauEAbP+rgls9xlzBRmK2v2cb8p6mXW2d47MtbWdxIOISdtjVKr4ei1cWqFBnBABv1IHAkWJHUzPVWe/XnypG7mOKt6I8tV7QfaX89nIS2aG1rEEXHaDynnr3Rgy8QbiXPZOLFWmLdLjv+svn+PSc+eOrt1ceW5pU9q/oywdaq1RKlakGbMyU8uW/PLcer75b8DhEoUko0lyoiBVF76DqeZ7ZJLTieGiLiU0Moe8+G0M9CqjSVPeGhdTAoSL6TB4in9am4qAc8t9fD128pSai2JHQy9bNsuK9G3surIe5wV+JHlKdtKiadRlIsQSD3qbfhAiTiIgJN2R9Iofep8wkKTdkfSKH3qfMJZ6Poatw/eHwmKZa3A/aHwmGbRXMTiIHMTiIHMREBERAw4vCGjUK2ursSv+4ElsgPJ1ubD6y9oM1e19l0sXS9HUF1JurDQgjS46HiCJd8Vh0qKUcXB8OGoIPEEHUEcJXMVhnpNla7ZvZbQekt7lqgcuDgacwJjlvqubkwsv1HnuI3fo7Npvi2ZqhS2RWsBmYhVueQufdIOF36xKOrV0pMhtmFNWVlB5qSTe3Q+cvm1tn08TRek59R10YcQQbg94IGkoR3HxOYJUrJ6JTfNf6o1OltPOW42eJjlLP+ly2zjmRKBpvTRalVEatUF0po4YhyLgakKoJIF2F512NjzXWrd0f0dZkFSmpCOAFYMoubH1spFyLqbGVsb90FtTXDVGoqAmfMLlRpfIRwI6kGXDA1Kb06b0cuRlDLlFhY9nKXG7u5XnLG446s/wBY66TnZOMNGqLmysbG/AHk34HsJmZ1kCvTlyx3Ewy+bt6AWDAMOfuI4icTU7u40OgVib6Kb9Rop8RYeXbNsROazTrl326uJo9sUrqZvTIGPp3UwryTbKGnVVxyaanfKiPTGoo0qKtQfvj1v5paN6MN7U0O2U9Lg6FTmjNTbx9dB55oFQiIgJN2R9Iofep8wkKTdkfSKH3qfMJZ6PoatwPePhMMzVufePhMM2ikREBERAREQERECzyNicOlRWRxdT4doIPEEHUEcJJiYIqeKwlSm5VgWvqGA9sDryWqB4MOGtwIOIpLUpshN1dGW46MCD3HWXPEUFqKVYXB8weRB5GVzHYNkY6XJ6aZ7cx0qD+abYZ76rm5OPXceKYzdnGUXaktPOpJs6jQg8x08Z6Luxs98NhKVJz6wuT2ZiWt75uDyINweB/PAzqZ7mMl3GeXJcpqurSPVSSDOjie3hGwmKNF81iQdGANtOo7RLvQqh0VwQdBcjnpcN4i0o1ZJuN2cflJpOdLG1/2eJHgTfuLTDkx/XTw5fixzBiVuDJDrY2mOoNJk3UPeXDXDaSoYJM9HF0OYT0i9hQ5vgXnou3qF1M8+wziljKZPss2U9x0PuJgUestmI7fjOk2G28KaVapTP1XZfI6e6a+Ak3ZH0ih96nzCQpN2R9Iofep8wlno+ha3PvHwmGZq3PvHwmGbRSIiAnM4iAiIgIETkQLPERMEJgxFBailWFwfMdCDyMzxAqm0MI1N7HUsdOQew5chUA5fWAMgHkQbg8D+eBlxxWGWopRxdT/AJBB4gg6gjhK1jcFURiCC19QwsPSAfLVA8GHboN8M99VzcnHruIJnBnJ5EG4PA/ngeycTZgw1FkMOyMrqbFTceEntI1ZJLNrjlqrls7FLWpKy8hoOzgV71Onl1mdpUd38cadTIeDHT7XC3iNO8LLe1tCOBFxOTKaunbjl9TbTbVpXUzzDeKjkfN0N/7z1vGpcGed70YXRtJHpUt8qeZ6dYf6lJGP2l9R/eLysS345PSYBTzo1Sp+y4tc/vL75UDASbsj6RQ+9T5hIUnbI+kUPvU+YSz0fQdbn3j4TFMtbn3j4TFNopETlbXF4HETKGXp15dunuguvTryHM6QMUTK9S99OPb2kzFATkTiBAtEREwQiIgJgxFBailWFwfMdCDyMzxAqW0cIyPYgktwPAVLdP2aoHL6wB6TXnqDcHgfzwPZLpicOtRSji6n/IIPEEHUEcJWMdg3ptla7FvZbQekt7lrAeDgd9t8M/yubk49dxAMxOsykcwbg8D+eB7J1M2c6DVW0t+wsd6anYn1hx+1xP8AENf4ukq9VJzsvFmjUBJspsG7OjeB915jyY7m2/Dnq6XGuuhlO3jw9w0urnMoYc+I6HnK9tujdTMHU822bTzHF4c/6lJrfaX1l96++UuqtmP575dqrmhiqdTo+vde/wCEre8mE9FiaqAaByV+y3rL7jA1Um7I+kUPvU+YSFJuyPpFD71PmEs9H0HW594+ExTLW4nvHwmKbRSIiAiIgIiICBEQLRERMEIiICIiAkbFYZKilHF1PL3gg8QQdQRwkmIFOx+Cem2U+sW9ltB6S3uWsB4OB32gHqNQef54Hsl3xWGSopRxdTy94IPEEHUEcJV9oYF0ax9Yt7LaD0lhwPJawHg4HfbfDPfVc3Jx67jWMJErJJjDmOH58jMTrNmEbzdrH50NNzqLDw4KfD2f4ZI2nS0IlUoVjSqK45cR1B0I8RLizipTDg30GvUHgfzzv0nLnj8128eX1i8s3mw9iSBwN/KaTetM6YWuPr0shPVqeny5ZdN58NcNpKnWT0mAqrzo1FcfZb1GA/knh7VKTNkfSKH3qfMJDIkrZjha1FjwFRCe7MNZYPoOtxPePhMcCoHAYcCqHzUH4m0Xm0UicXjNA5idS06tWUcWXzEDJExLWB4XP2VJ+AmRKdRuFKp4oR8bSDmF46dJ3XA1zwp27WdR8Lza7PwHowS5BJ8gOgkuUg2EREyQiIgIiICIiAkbFYZKilHF1PL3gg8QQdQRwkmIFN2jgHRrH1i3stoPSW5HktYDwcDvtrGHTh+fIy+YnDLUUo4up5e8EHiCDqCOEq20sA6PY+sW9k6D0luR5CsB4MB323wz31XLy8Wu40lZJsd3sdlJpMdNSvd9Zf6h+91kR18vz5GRXurBlNiDcEdRNM8dx548vmtlvFhtGlF2ag9PUotwq02TXhdhYH+LLPQqlUVqII6cOluK+B9xWebbwI1N866FTcTkdipVqZVipGoJB7xpOkm7Rx9OtUZ2ORm1dShIL21ZSvC/PTjyE2+6O6lfaTXpIy0QbNiKq2XTiqIGu7dxAHO3MJm7u+lejkpPTerplUJcuedgtjmPHh8dZ6NskbRxNmbCDDofrYmpZ7dRSUE+DFZYN3t28NgKYSggvb1qjAF2PMswA8hYdk3U9fVGnTYot69WoT/tVVHwPxmVdjUuedvtO34WmziTdEFdl0B/pIftDN8ZnTDIvsog7lAmaJN0cxEQEREBERAREQEREBERAREQEjYnDJVVkcXU8veCDyIOoI4STECm7T2e6NY+sW9ltB6Sw4HktUDwYDvA01RPz+eBnoWJwyVVKOLqeI94IPIg6gjhKptTZ7I9jqW9ltAKluR5LVA8GA63A3wz31XNyceu40mFxPo2IN8p49h627tD/wATS7xU6dS5VlPYCLzcVkvf39neOUl7t7EGKf0jr/8Akh6e2w+qD+yOfl1tOTCerx8l/jpoNz/0ZrXK4rG3FM6pRFwzjkztxVeijU6ajgfXsPQSkioiqiKoVVRQFAHABRoBM05mLoIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAmKvQWopV1DA8QwuIiBTamzaNTFim6llDWszsTboWvc+JlypUlRQqKAALAAWAHS0RPeTxgyxETw9kREBERAREQEREBERA//9k=">
              </div>
              <!--product-details-------->
              <div class="product-details">
                  <a href="#" class="p-name">Drawstring T-Shirt</a>
                  <span class="p-price">$22.00</span>
              </div>
          </div>
        <!--product-box-3---------->
        <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
              <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
              <!--img------>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHLUxjYdLFt9TkHPTcoWJTqnVNEQOn6AZ4dg&usqp=CAU">
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Drawstring T-Shirt</a>
              <span class="p-price">$22.00</span>
          </div>
      </div>
        <!--product-box-4---------->
        <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
              <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
              <!--img------>
            <img src="data:image/jpeg;base64,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">
            
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Drawstring T-Shirt</a>
              <span class="p-price">$22.00</span>
          </div>
      </div>
        <!--product-box-5---------->
        <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
              <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
              <!--img------>
            <img src="data:image/jpeg;base64,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">
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Drawstring T-Shirt</a>
              <span class="p-price">$22.00</span>
          </div>
      </div>
        <!--product-box-6---------->
        <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
              <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
              <!--img------>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsR-u6QC4xQ8aMi7iblsA73rPg45cE2GAfiA&usqp=CAU">
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Drawstring T-Shirt</a>
              <span class="p-price">$22.00</span>
          </div>
      </div>
        <!--product-box-7---------->
        <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
              <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
              <!--img------>
            <img src="data:image/jpeg;base64,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">
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Drawstring T-Shirt</a>
              <span class="p-price">$22.00</span>
          </div>
      </div>
      <!--product-box-8---------->
      <div class="product-box">
        <!--product-img------------>
        <div class="product-img">
            <!--add-cart---->
            <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
              </a>
            <!--img------>
          <img src="data:image/jpeg;base64,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">
        </div>
        <!--product-details-------->
        <div class="product-details">
            <a href="#" class="p-name">Drawstring T-Shirt</a>
            <span class="p-price">$22.00</span>
        </div>
    </div>
      <!--product-box-9---------->
      <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
            <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
            <!--img------>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRU3FUmog8MSG3LMyALF97x2lsZiUwtMoMKKw&usqp=CAU">
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Drawstring T-Shirt</a>
              <span class="p-price">$22.00</span>
          </div>
      </div>
    <!--product-box-10---------->
    <div class="product-box">
      <!--product-img------------>
      <div class="product-img">
          <!--add-cart---->
          <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
          <!--img------>
        <img src="data:image/jpeg;base64,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">
      </div>
      <!--product-details-------->
      <div class="product-details">
          <a href="#" class="p-name">Drawstring T-Shirt</a>
          <span class="p-price">$22.00</span>
      </div>
  </div>
    <!--product-box-11---------->
    <div class="product-box">
      <!--product-img------------>
      <div class="product-img">
          <!--add-cart---->
          <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
          <!--img------>
        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8PDw8PDxAPDw8NDQ8PDw8PDw8PDQ8NFREWFhURFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtPSgtLisBCgoKDg0OFw8QFy0gFR0rLSsrLS0rKy0tKy03Ky0rLS0tLS0tLSstLS0tKystKystKy0rLSstMS0rKy0tKy0rLf/AABEIAKgBKwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAAAgEDBAUGBwj/xABHEAACAQMBAwcHCAgDCQAAAAAAAQIDBBESBSExBhNBUWFxkRRCUnKBobEHIjIzYoKywSMkNHOSosLRRGOjFRZDU4Oz0uPw/8QAGgEBAQEBAQEBAAAAAAAAAAAAAAECBAMFBv/EACYRAQEAAgIBAwQDAQEAAAAAAAABAhEDEgQhQVETFFKhMUKRcWL/2gAMAwEAAhEDEQA/AORFYzFZ+or8pCkEkGWogAAjSCGMQBBBIYIpSB8BgaUhA+kNJNG1YD6Q0E0u1ZBY4EOBNLKqZBY4EOJnTW1ZDHaFZGot2f8AXU/XXxPZbN/o4eqjx/ZtCTrU8Rk/nrgm+k9gsqc9EcRlwXms4vK9nb4n81kpjxJja1X/AMOp/BL+xdCyrf8ALn/C0cW3dpWh0XR2fW9B+MV+Y62fV9HH3o/3M7XTHAvqWk4rL07vtIoyF0kkUkgYkUAHRKEQwDIbIiJCvDmKyWQfp35VBBLIZlpDIJICggkhkVbaW061SNKnFznUlpjFcWzs7X5NLqSTnXtoZ6E6k2v5cHP8kaui7jLqpzx37l+bPVLPaGUt583y/Lz48+uL6fieJhyYdsnLw+S2p03lJd1Gcv6kXQ+SxedfeFt/7DsYXeekbyo5Pveb5/Udf2PB+P7rlIfJdQ867qvupQj8Wy6PyY2XTcXT7uZX9LOl8pDykz93zfk1PD4fxaGn8m2zlxqXcu+pSXwgXw+T/Za4wrS760vySNt5QHlJn7nl/KtTxeGf1jXx5C7JX+Hk++vcflIvhyQ2VHhaQfrTrS+MjI8oDygl5+S/2v8ArU4OKf1n+Fjyb2YuFlbe2mpfEtjsTZ8eFlZrt8mo5/CVO5I8oMfUyvvWvp4fE/xmQtLaP0be3j6tGkvgi6MoLhGC7opGsdwRz5N1rrG38qx0g7ztNM7gh3BFbh3naI7w07uBHcAbiV4U1L7tNRO5Matcg0t2xtNqLw+gtsG3RpN8XSpt/wAKOZ2pXymdPZrFKmuqlBfyo1izkvAgCsmAgAGJFJCmRIpOQPE+ak/NfgSrWo/Ml4M9T8gprzF4Dq0j6K8D7N8yfD4c8HL8v08rWz6z8yXgyxbJrvzH4HqKtl6K8CeYXUvAx95fhueF/wCnmEdh3D8xlseTtw/NPS+ZDmTN8zL4bnhT5rzmPJeu+osjyTrPi0eh8yComfu8mp4ePzXCWuw52tSFSTzqbh4rP5HTWdbgHKOnpp0n/nr8EzEtZ8Dg8jO557r6Pjccww6xvadcuVc1UKhaqh4OhseeJ5416qDKoBnc6HOmEphzgGbzpHOmHzhHOBGbzxHPGHzgvOA0zeeI50wnUI5wozHWFdYw3UFdQiMt1RJVjFdQSUyqunWMarVEnMomwMPaE9z7mdvS3RiuqKXuODvN/tO9LGMk5JyLkDTJwyKSFMGRSSB8gKAFvkbJ8j7TJyRk13qdIo8jXWSrSJdkjJO9OkVO3ghlQh1BVe4aL3E7VesRzUeoNMeokCbq6jQ8sYryeG7/ABEfwTOfoHRcr/2eP7+H4ZHO0OBmtxmQY6kVRLAqxSJ1FaDIFusnWU5JAs1kOQmSGA+oXUKyMhDayNQrZGQGchdRAoEuQrkDFZQsiubHkVz4AYdVZlFdcor3ndtnDxWalNddWn+JHbZLGMk5JFyGTSGySLknJA2Sci5ABiRcgBsMhkXIZMtJyGRchkBar3DRe4rrPcTB7kBYAuQyBqOVa/V1++h8JHO0EdHym30F+9h+ZoKMSVqLojAojaQpSRtIYAUBsE4ATAD4IaAQpubiFOEpzkowgnKUm9yiuLJvLiNKnOpN4hThKcn1Riss8v2py7lcRqU52tKVKTThGc6mcxkpLXhrUspblgsiWvTbW4jVhCpDOmpCM4tppuLWVufDcW4Od5D7Qubq3dauqajKbjS0R0vTHc8rOMZ3LuZ0qiAmCMFukhxIqloiSLnEVxAx2hJxMhxK5RKMWhD9NS/e0/xI65ZfQ/A5/ZFPN1brj+lT8N/5HoUaUV0IsYrQxpTfmvwLI2s30G80k4KjTRsZ9hZHZ76WbTAaQNfGwXSx1ZxM3SRpAxlbR6huaj1F+kjAGA2RkRyI1GQ+Q1FTkGQorS3EwluQlSMmtyb9g9K3qNL5rKG1BqLI2NR9GO9lkdnT6WkBpdv76P8A1IfmaelA6Xb1g40HJyzicN2PtY/M0NOBK1Aok6SxRGUSKq0hpLtJOgCnSGku0hpAp0kOJkaSHADScobOVa0uaUN8qlCpGK65aXheJ4NjrPpKVM0y5M2SqVKnk1GU6zbqOcFPLfHCllRz2YLKlm3L/JXUrStqkZpczTqYoyw1Jye+a7Um17WzuowItLOFKEYU4RhCKxGEIqMV3JGSoEpFGkHEv0EOIVjuIjiZLiI4gYziVTgZcolU0A+wYfrlD1pPwhI7/BxHJyObyj2c4/8ATkd3pNRjJXgNJZgMFRXpIwWYDAFeAwWYIwBXgMFmCMAYq2bHpbHVhT6m/aZmAAx42lNeaixUoroRYQULgkAyAAGQA1vKNfq0/Wp/jRy8InVcoP2afrUv+5E5qCMVvH+AojKI6iMkRpWok6SxRG0hFWkNJbpDSBVpDSW6QwBVoI0F2AwFUqAaS3SGAKnEVxLmhWgaUOIkkXSEkQ0okiiqjJmY1Vg0yuTlRRu4PjiFT8ODt4XMH0479xwvJ7fc91Kb96X5nUtEudlbnHMo267AwamMmuDaL4Xc1xwyzknuzeG+zOwGCiF5F8U170XwnF8GmbmUrzuNn8wYIwPgMFZJgMD4IwAAamW0KnRpXsKpXdR+e/ZhGPqR7TgyrdMrnUiuLS72jSSnJ8ZN97ZwfKHltXtq9WlC2p4pzcFUnOUtWOnSsY8RjlcrqQy4phN5X0/49RneU1569m8qltGHRqfcjxWty92hLhKlT9Sks/zNmvr8pr+p9K6rfdkqf4Uj0+lyX4eP1eKfNe6z2njzH95pGBdcpqNP6da3p+tVjnwyeEVripP6dSpP15yl8WUYNfQy98k+4x9sP29nu+V1tcYt4XEKlSrOCjGEZNPElJ/Oxjgn0l8EeS8lf2+1/e/0yPXIo88sOt1t6YZ95vWjxQ6RCGRloYDBINgRgCNSDUTa6SyBXMXWNmjhkrcxXUJs0tbIbKHVFdUbXS9yEciiVUqlWJterIlMqlMx5VyqVYbXqvnMxq0yqdYxqtYm16tzyUebqXZQl+OB12DjuRG+vWl0Rope1zX/AIs7IzW8ZqFwRgYCNFwGBgwA0K81wb9u8vhe9a8DFwGDUysYuGN9mxhcwfTjv3FqNRgnBucled4Z7VhsXIlwn81J4y32FM6c0s6s46mzy09+2vZknN8qeTjunztKajVjHToms0qkfRl0p9vuN3zU+v2ZY9DOnfxyx/HrFl36WPGL/Zcqc3TlB0aq381PhJelTlwkv/txr5RaeGmmuh7me37T2XRuoc3WgprinwlGXpRkt8X2o4Db/JatQTklK5oLOJxX6zSX2kvprtW/sOjj8iz0ycvL4kvri48MGRUt2lqi1OD4Sjv8So6Zlv1jiuFxuqy+StZO+tcKf16+lDThYe/jw6D2CLPIOT9OLvrSTW+NeGH0nrmo5+W+rp4Z6LlINZjuYrqnlt79WTrIlMxHWK5VibXqy9ZDqmE6wkqw7L0ZjqiusYDriOuZ7NdGe6xVKuYM7jreF28DXV9u20HplXpavRU1Kf8ACssbXrG7dwVu4NLT2nKp9Tb3df1LecE/bU0oyqdhtSpjRZRpp9NxcRi192Cl8SbOrNlcFMrgelyS2nP6y4tqK6qVGU5L2zlj3GXR+T5P6+9u6vWozVCP+mkNrpq6t0orMmkutvCNdU2/bcFWhNrzabdWXhDLO1tuQOzYNN28asl51ZurLxlk3ltsm3prFOlTgl6MEgPL6V7Vq/U2l3Vz08zzUfGo0bC12HtGrJareFGD4udbM8d0Y4956XGml0DaQejT7E2X5NBxilmTzKWcyk+1mywy7BKg3wTfsLpNqMMnBlRtJvox37iyNg+lpd28vWs3PGe7BwGDZxso9Lb9xZG3gvNXt3mulYvLGpUfb3Fkbab81+3cbZLHDCAs42bzX4a6NjLpaXvLPIF6XuM3AYNdIxeXJzFaHzod7+AtSnjW+tfkZVdfOp+s/gYd4vnvq3fA8tOi5aLXelp4b3P4oWit2e1mw0xbUsrGl9PW1/YrtqScW/tS8Mk16NS+rFaIaM925XK1MaekycftzknTrN1aDVCu97aWaVV/bj1/aW8892ts6pRqONam6M8LGMyhUed7g0sNY37t/Hce3StWYe0NlQrwdOtTVSD4prO/rXU+1Gsc8sb6M58eOc9XjexouF5bZ6LiC7G1LDwz1CdU0F5yZu7OTnaU3dU9+KU5aK8G3nKnhqe/rWe8mndbRmsf7MuFPG9SqU408+s9+PYbz5O2q8+Ph6bjcyqlcqxgU9k7Zq8KVpbp+nOpWkvDSjKp8iL6f120JRXTGhRp014tN+889vTUTKsYF3tq3pfWV6MH1SqQT8M5N1S+Tezf187i56+er1JRf3c4NxYckLCh9XbUY46dCyBwP+8dGTxSjXrv/Jt6sk/vNJe8tpT2hV+p2fWWem4qU6S/l1M9QpWlOP0Yxj3JItUEXRt5tT5O7Yq8ZWluupRqVpr2tpe4y6XIGvP6/aFw88Y0VTor2OKz7zv8BgaTbjqHydbPWHUhO4a6a9SdX8TZvbLYFrQSVKhShj0YRRtUgjHPDf3b/gXSdtKo0kuCS7h1EyI2sn2d5arLrZZhWLyT5YWAwZ6tI9b9mMe8dW8PRz6zcl7zUwrF5o1yi3uLY2030Y7zYxSXDcuzcgNfTjN5aw42T6X4LJZG0iuOWZAF6xi55X3JGlFcIocANaZ3sABIEEDEARgnAABGCcASVGhr0FNLLxgp/wBnr0n4IAOfbssiPIF6T8EZFGkoLCed4ANrJIcAAigAACUiUgACSQAAJSACxLdQ8aEn0MsjaS6cL3gB6TCOe8uS2NmultjxtoLoADUxjNzyvudUY+ivasv3jgBWQAAAAAAAAAAAAAAAAAAAAAAUAAAASABH/9k=">
      </div>
      <!--product-details-------->
      <div class="product-details">
          <a href="#" class="p-name">Drawstring T-Shirt</a>
          <span class="p-price">$22.00</span>
      </div>
  </div>
        <!--product-box-12---------->
        <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
              <a href="#" class="add-cart">
                  <i class="fas fa-shopping-cart"></i>
              </a>
              <!--img------>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7Wl7dD323OP0twvxZCTl6dGsKJT36kknweg&usqp=CAU">
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Drawstring T-Shirt</a>
              <span class="p-price">$22.00</span>
          </div>
      </div>
    </div>
</section>


</body>
</html>

<?php

    require_once 'footer.php';

?>
