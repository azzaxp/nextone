
<html>
<head>
    <title>Editor</title>
	
	  <script type="text/javascript">

</script>
	   <style>
    .container{
        display:-webkit-box;
         display:-moz-box;
     }
     div:not(.container){
         -webkit-border-radius:5px;
         
         border-radius:5px;
        
        
     }
     
     #left,#right{
         width:33%;
		 height:1024px;
         -webkit-box-sizing:border-box;
         -moz-box-sizing:border-box;
         padding:10px;
		 background-color:#CCCCCC;
     }
     #middle{
	 width:33%;
        padding:20px;
		height:1024px;
         -webkit-box-flex:1;
         -moz-box-flex:1;
         -webkit-box-ordinal-group:2;
         -moz-box-ordinal-group:2;
         margin:0 5px;
		  background-color:yellow;
     }
     #right{
	 width:33%;
        -webkit-box-ordinal-group:2;
		height:1024px;
         -moz-box-ordinal-group:2;
         background-color:grey;
    }
    a{
    text-decoration:none;
    }
 </style>

  
</head>
<body onLoad="init();">

<section>
    <div class="container">
         <div id="middle" style="font-size: 200px"><center><a href="new.html" target="blank">N<br>E<br>W</a></center></div>
        <div id="left" style="font-size: 50px"><center><h1><strong>VIEW</strong></h1></center>
<center>
<?php
$fp=fopen("page_record.txt","r");
$buffer=fgets($fp);
while($buffer)
    {   
        echo "<a href=".$buffer.">".$buffer."</a><br></br>";
        $buffer=fgets($fp);
    }
fclose($fp);
?>
</center>		    
			
			
		 
		</div>
    <div id="right"style="font-size: 50px"><center><h1><strong><strong>EDIT</strong></h1></center>
    <center><?php
$fp=fopen("page_record.txt","r");
$buffer=fgets($fp);
while($buffer)
    {   
        echo "<a href=".$buffer.">".$buffer."</a><br></br>";
        $buffer=fgets($fp);
    }
fclose($fp);
?>
</center>

    </div>
      
    </div>
 </section>

	 
	
	
</body>
</html>
