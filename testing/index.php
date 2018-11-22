<html>
<head>
<title>HOME</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<link type="text/css" rel="stylesheet" href="stili.css">
<style type="text/css">
#bg_popup{
background-color: rgba(0, 0, 0, 0.8);
display: none;
position: fixed;
z-index: 99999;
top: 0;
right: 0;
bottom: 0;
left: 0;
}
  
#popup {
background: #fff;
width: 520px;
margin: 25% auto;
padding: 5px 20px 13px 20px;
border: 2px solid #1BA600;
position: relative;
-webkit-box-shadow: 0px 0px 20px #000;
-moz-box-shadow: 0px 0px 20px #000;
box-shadow: 0px 0px 20px #000;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
}
  
.close{
display:block;
position:absolute;
top:-12px;
right:5px;
width:25px;
height:25px;
line-height:28px;
color:#fff;
background:#1BA600;
cursor:pointer;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
-ms-border-radius: 15px;
-o-border-radius: 15px;
border-radius: 15px;
-moz-box-shadow: 1px 1px 3px #000;
-webkit-box-shadow: 1px 1px 3px #000;
box-shadow: 1px 1px 3px #000;
}
.close:hover {
background-color:#f30;
} 
</style>
<!--<script> 
        do
        {
          alert("Введите пожалуйста никнейм!")
          var years = prompt("Введите никнейм", "Nickname");
        }while(years == null||years == "")
        alert("Добро пожаловать " + years + ", подключаемся к камере...")
</script>-->
</head>


<body>
    <div id="bg_popup">
  		<div id="popup">
			<p><b>Введите идентификационный номер:</b><br>
			<input type="text" size="40">
			<p><button name="button" onclick="window.location='Ввод_диапазона.html'">Ввести</button></p>
			
		</div>
	</div>  
    <script type="text/javascript">
    var delay_popup = 1;
    setTimeout("document.getElementById('bg_popup').style.display='block'", delay_popup);
	</script> 
</body>






















 <!--<link rel="stylesheet" type="text/css" href="style.css">
 <script>  
        function show()  
        {  
            $.ajax({  
                url: "transfer/temp-1.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html); 
				}
             }); 
           $.ajax({  
                url: "transfer/temp-2.php",  
                cache: false,  
                success: function(html){  
                    $("#content-1").html(html); 
                }
             }); 
             
             $.ajax({  
                url: "transfer/ledstate.php",  
                cache: false,  
                success: function(html){  
                    $("#content-3").html(html); 
                }
             }); 
             
        }
        
        $(document).ready(function(){  
            show();  
            setInterval('show()',500);  
        }); 
        
 
      function AjaxFormRequest(result_id,led,url) {
      jQuery.ajax({
      url:     url,
      type:     "POST",
      dataType: "html",
      data: jQuery("#"+led).serialize(),
         });
}


</script>

    
</head>
    <body>
          <div class="r">
          <p class="r1">Temperature</p>
          <div class="r2" style="display:inline-block;">
          <div class="r3" id="content"></div> 
          <div class="r3"> C<sup>o</sup></div>
          </div>
          </div>

		<p><a href="1.html">РЎСЃС‹Р»РєР° РѕС‚РєСЂРѕРµС‚СЃСЏ РІ СЌС‚РѕРј РѕРєРЅРµ</a></p>
		<p><a href="Home.html" target="_blank">РЎСЃС‹Р»РєР° РѕС‚РєСЂРѕРµС‚СЃСЏ РІ РЅРѕРІРѕРј РѕРєРЅРµ</a></p>

        

          <div class="r">
          <p class="r1">РўРµРјРїРµСЂР°С‚СѓСЂР° W5100</p>
          <div class="r2" >
          <div class="r3" id="content-1"></div> 
          <div class="r3"> C<sup>o</sup></div>
          </div>
          </div>
          
          <div class="r">
          <div class="rl">
          <p class="r1">Vikluchatel</p>
          <div class="r2" style="font-size:35px" >
          <form  id="led" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="РћС‚РїСЂР°РІРёС‚СЊ" onclick="AjaxFormRequest('messegeResult', 'led', 'transfer/led.php')" >
          </form>
          </div>
          </div>
          
          <div class="rr">
          <p class="r1">State</p>
          <div class="r2"style="font-size:35px" >
          <div class="r3" id="content-3"></div> 
          </div>
          </div>
          <div id="chart_div"></div>
          </div>
         


        
        
   </body>
</html> 
-->

