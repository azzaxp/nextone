<?php
echo <<<END
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="docs.css">
    <script src="http://yui.yahooapis.com/3.10.1/build/yui/yui-min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <style>
li {
    height: 50px;
    font-size: 30px;
}
.btn {
    margin-bottom:10px;
}
.block {
    height: 25px;
    width: 100px;
    border: 1px solid black;
    background-color: #8DD5E7;
    cursor: move;
    float: left;
}
.inp {
    height: 10px;
    width: 20px;
    padding-left: 15px;
    background-color: #555555;
    cursor: move;
    float: left;
}
.are {
    height: 10px;
    width: 20px;
    padding-left: 15px;
    background-color: #555555;
    cursor: move;
    float: left;
}
.but {
    height: 10px;
    width: 20px;
    background-color: #123456;
    padding-left: 15px;
    cursor: move;
    float: left;
}
.tab {
    height: 140px;
    width: 600px;
    background-color: #fff;
    cursor: move;
    float: left;
}
.nal {
    height: 140px;
    width: 100px;
    background-color: #001122;
    cursor: move;
    float: left;
}
    </style>
  </head>
  <body>
      <div id="navl" style="width:150px;position:fixed;right:10px;padding-top:40px;background-color:#eeeeee">
        <ul class="nav nav-list">
        <button onClick="createBlock()" class="btn">Add a block</button>
        <button onClick="createInput()" class="btn">Add a text</button>
        <button onClick="createArea()" class="btn">Add a textarea</button>
        <button onClick="createButton()" class="btn">Add a button</button>
        <button onClick="createTable()" class="btn">Add a table</button>
        <button onClick="createNal()" class="btn">Add a navlist</button>
        <p>
        <p>
        <p>
        <button id='upload' class="btn btn-primary">Save</button>
        <button id='discard' class="btn btn-danger">Discard</button>
      </div>
      
      <div id="board" style="width:1366px;"></div>
END;
$url = "sample.html"; 
$contents = file_get_contents($url); 
//如果出现中文乱码使用下面代码 
//$getcontent = iconv("gb2312", "utf-8",$contents); 
echo $contents; 
echo <<<END
</div>
      <!--border-left-style:dotted;border-right-style:dotted-->
      
      <script>
        var cnt = 1;
        YUI().use('dd-drag', 'node');
        
                    YUI().use('dd-drag', function(Y) {
                        //Selector of the node to make draggable
                        new Y.DD.Drag({
                            node: "#navl"
                        });
                    });
                 
                function createBlock(){  
                    var id = "demo"+cnt;
                    var node_t = "#"+id;
                    cnt = cnt+1;
                    YUI().use('node', function (Y) {
                        var node = Y.one('#board');
                        //var bodyNode = Y.one(document.body);
                        node.append("<div id='"+id+"' class='block'>"+node_t+"</div>");
                    });
                    YUI().use('dd-drag', function(Y) {
                        //Selector of the node to make draggable
                        new Y.DD.Drag({
                            node: node_t
                        });
                    });
                }
                
              function createInput(){
                    var id = "demo"+cnt;
                    var node_t = "#"+id;
                    cnt = cnt+1;
                    YUI().use('node', function (Y) {
                        var node = Y.one('#board');
                        node.append("<div id='"+id+"' class='inp'><input type='text' placeholder='"+node_t+"'></input></div>");
                    });
                    YUI().use('dd-drag', function(Y) {
                        //Selector of the node to make draggable
                        new Y.DD.Drag({
                            node: node_t
                        });
                    });
              }
              function createArea(){
                    var id = "demo"+cnt;
                    var node_t = "#"+id;
                    cnt = cnt+1;
                    YUI().use('node', function (Y) {
                        var node = Y.one('#board');
                        node.append("<div id='"+id+"' class='are'><textarea width=175 height=90></textarea></div>");
                    });
                    YUI().use('dd-drag', function(Y) {
                        //Selector of the node to make draggable
                        new Y.DD.Drag({
                            node: node_t
                        });
                    });
              }
              function createButton(){  
                    var id = "demo"+cnt;
                    var node_t = "#"+id;
                    cnt = cnt+1;
                    YUI().use('node', function (Y) {
                        var node = Y.one('#board');
                        //var bodyNode = Y.one(document.body);
                        node.append("<div id='"+id+"' class='but'><button class='btn'>"+node_t+"</button></div>");
                    });
                    YUI().use('dd-drag', function(Y) {
                        //Selector of the node to make draggable
                        new Y.DD.Drag({
                            node: node_t
                        });
                    });
                }
              function createTable(){  
                    var id = "demo"+cnt;
                    var node_t = "#"+id;
                    cnt = cnt+1;
                    YUI().use('node', function (Y) {
                        var node = Y.one('#board');
                        var code = " <div class='bs-docs-example'><table class='table table-striped'><thead><tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr></thead><tbody><tr>\<td>1</td><td>Mark</td><td>Otto</td><td>@mdo</td></tr><tr><td>2</td><td>Jacob</td><td>Thornton</td><td>@fat</td></tr><tr><td>3</td><td>Larry</td><td>the Bird</td><td>@twitter</td></tr></tbody></table></div>";
                        //var bodyNode = Y.one(document.body);
                        node.append("<div id='"+id+"' class='tab'>"+code+"</div>");
                    });
                    YUI().use('dd-drag', function(Y) {
                        //Selector of the node to make draggable
                        new Y.DD.Drag({
                            node: node_t
                        });
                    });
                }
              function createNal(){  
                    var id = "demo"+cnt;
                    var node_t = "#"+id;
                    cnt = cnt+1;
                    YUI().use('node', function (Y) {
                        var node = Y.one('#board');
                        var code = "<ul class='nav nav-list bs-docs-sidenav' style='width:150px;height:500px;background-color:#eeeeee;padding-top:30px;padding-left:30px'><li>#one</li><li>#two</li><li>#three</li></ul>";
                        //var bodyNode = Y.one(document.body);
                        node.append("<div id='"+id+"' class='span2 bs-docs-sidebar'>"+code+"</div>");
                    });
                    YUI().use('dd-drag', function(Y) {
                        //Selector of the node to make draggable
                        new Y.DD.Drag({
                            node: node_t
                        });
                    });
                }
          $("#upload").click(function(){
            var my_header=$("head").html();
            var wait_upload=my_header+$("#board").html();
            $.post("upload.php",{page:wait_upload},function(data){alert(data);});
        });
        $("#discard").click(function(){
            if (confirm('Are you sure you want to discard all the changes you had made? '))
                alert("Changes discarded!");
        });
      </script>
  </body>
</html>
END;
?>
