<?php
function back() {
	echo '<br><a href="Sessionone.php">Back</a>';
}
$lesson = isset($_GET['l']) ? $_GET['l'] : 'Nothing set.'; //what is this doing?

switch($lesson)
{
	case 1:
		echo 'hello world.';
		back();
		break;
	case 2: 
		phpinfo();
		back();
		break;
	case 3:
		function mult($x, $y)
		{
			return $x * $y;		
		}		

		function addi($x,$y)
		{
			return $x + $y;
		} 

		function subt($x,$y)
		{
			return $x - $y;
		}

		function divi($x,$y)
		{
			if ($y==0)
			{
				return "This cannot be done, sir.";
			}
			else 
			{
				return $x / $y;
			}
		}
		echo divi(mult(addi(100,6),subt(20,3)),0);
		echo '<br>';

		echo mult(100,20);	
		echo '<br>';	

		echo addi(4,5);
		echo '<br>';		
				
		echo subt(4,5);
		echo '<br>';	
		back();
		break;
	case 4:
		//echo '<a href="https://www.google.com/#hl=en&tbo=d&output=search&sclient=psy-ab&q=washington&oq=washington&gs_l=hp.3..0l4.822.4566.0.4744.14.6.3.5.6.0.156.739.0j6.6.0.les%3B..0.0...1c.1.2.hp.L-_XwbqxsTk&pbx=1&bav=on.2,or.r_gc.r_pw.r_qf.&bvm=bv.42080656,d.b2I&fp=ffd32c9ec628fa85&biw=667&bih=615">Washington </a><br>' ;
		
			
		$states=array("Alabama","Alaska","Arizona","Arkansa","California",
		"Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii",
		"Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky",
		"Lousiana","Maine","Maryland","Massachusetts","Michigan",
		"Minnesota","Mississippi","Missouri","Montana","Nebraska",
		"Nevada","New Hampshire","New Jersey","New Mexico","New York",
		"North Carolina","North Dakota","Ohio","Oklahoma","Oregon",
		"Pennsylvania","Rhode Island","South Carolina","South Dakota",
		"Tennessee","Texas","Utah","Vermont","Virginia","Washington",
		"West Virginia","Wisconsin","Wyoming");
		$arrlength=count($states);
		
		for ($i=0;$i<$arrlength;$i++) //why doesnt <= work?
		{
		echo '<a href="https://www.google.com/search?q=' . $states[$i] 
		. '">' . $states[$i] . '</a><br>';
		
		//echo $states[$i];
		
		echo "<br>";
		}
		
		back();
		break;
	default:
		echo 'Please select a lesson.<br>';
		for($i = 1; $i < 5; $i++)  /* How does it know that 
									the numbers refer
									to our cases above and not, 
									say, the indexes of the array above?*/
		{
			echo '<a href="Sessionone.php?l=' . $i . '">Lesson ' . $i . '</a><br>';
		
			//echo "doich $i";
			//echo "<br>";
		}

}


