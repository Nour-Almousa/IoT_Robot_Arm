<?php
    if(isset($_POST['save']))
    {
        require 'connect.php';
        $m1= $_POST['m1'];
        $m2= $_POST['m2'];
        $m3 = $_POST['m3'];
        $m4= $_POST['m4'];
        $m5= $_POST['m5'];
        $m6 = $_POST['m6'];
        $query = "UPDATE motors SET motor1=$m1, motor2=$m2, motor3=$m3, motor4=$m4, motor5=$m5, motor6=$m6";
        $result= mysqli_query($con, $query);
    }
    if(isset($_POST['on']))
    {
        require 'connect.php';
        $query ="UPDATE motors SET on_off = 1";
        $result= mysqli_query($con, $query);
    }      
    
?>
<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="mystyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <form name="control" method="POST" action="index.php" >
        <div class="motors">
            <span class="val"></span>
            <input type="range" class="slider" min="0" max="100" name="m1">
            <label >محرك 1</label>
        </div>
        
        <div class="motors">
            <span class="val"></span>
            <input type="range" class="slider" min="0" max="100" name="m2">
            <label>محرك 2</label>    
        </div>
        
        <div class="motors">
            <span class="val"></span>
            <input type="range" class="slider" min="0" max="100" name="m3">
            <label >محرك 3</label>
        </div>
        
        <div class="motors">
            <span class="val"></span>
            <input type="range" class="slider" min="0" max="100" name="m4">
            <label >محرك 4</label>
        </div>
        
        <div class="motors">
            <span class="val"></span>
            <input type="range" class="slider" min="0" max="100" name="m5">
            <label >محرك 5</label>    
        </div>
            
        <div class="motors">
            <span class="val"></span>
            <input type="range" class="slider" min="0" max="100" name="m6">
            <label >محرك 6</label>  
        </div>
        
        <div id="buttonscontainer">
            <button class="button" name="on"><b>تشغيل</b></button>
            <button class="button" name="save"><b>حفظ</b></button>
        </div> 
        </form>   
    </div>
    <script>
    var rangeSlider = function()
    { 
        var slider = $('.motors'), range = $('.slider'), value = $('.val');
    
        slider.each(function()
        { value.each(function()
            { 
                var value = $(this).next().attr('value');$
                (this).html(value); 
            });
            range.on('input', function()
            {
                $(this).prev(value).html(this.value);
            });
        });
    };

    rangeSlider();    
    </script>
</body>
</html>