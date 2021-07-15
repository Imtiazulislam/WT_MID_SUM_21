<html>
	<body>
		<?php
        $length= 5;
        $width= 5;
        $parameter= 2*($length+$width);
        $area= $length*$width;
        echo "Perameter: ". $parameter."<br>";
        echo "Area: ".$area."<br>";;
        if ($length == $width){
            echo "This shape is a square.";
        }
        
			
		?>
	</body>
</html>