<html>  
    <head>
        <style>
            div {
                margin: 60px;
            }
            if {
                margin: 60px;
            }
        </style>
    </head>
<body>
    <div>
        <form method = "post">   
        Width parameter: <input type="number" name="width">   
        <br><br>   
        Length paramter: <input type="number" name="length"> <br><br>   
        <input type = "submit" name = "submit" value="Compute">   
        </form>
    </div>  
   
</body>   
</html> 

<?php   

if(isset($_POST['submit']))  
    {   
$width = $_POST['width'];   
$length = $_POST['length'];   
$area = $width*$length;   

echo "The area of a rectangle with $width x $length is $area";   
}   

?>   
