<?php
	function search($needle, $haystack)
	{
		$result=false;
		foreach ($haystack as $key => $value)
			if ($value==$needle)
			{
				$result=$key; 
				break;
			}
		
		return $result;
	}
	
	function binary_search($needle, $haystack, $min_key=0, $max_key=0, $depth=0)
	{
		if ($depth==0)
		{
			$max_key=count($haystack);
			$min_key=0;
		}

		if ($max_key-$min_key>0) //when value can't be found, min will be equal to max and it will stop
		{
			$mid_key=$min_key+intdiv($max_key-$min_key, 2);
			switch ($needle<=>$haystack[$mid_key])
			{
				case -1:
					$result=binary_search($needle, $haystack, $min_key, $mid_key, $depth+1);
					break;
				case 0:
					$result=$mid_key;
					break;
				case 1:
					$result=binary_search($needle, $haystack, $mid_key, $max_key, $depth+1);
					break;
			}
		}
		else
			$result=false;
		
		return $result;
	}
	
	function randomise($size, $max=1000000000, $sequential=false)
	{
		$result=[];
		$duplicate=[];
		if ($sequential)
		{
			$jump=floor($max/$size);
			$result[0]=rand(1, $jump);
			for ($i=1; $i<$size; $i++)
			{
				$result[$i]=$result[$i-1]+rand(1, $jump);
			}
		}
		else
		{
			for ($i=0; $i<$size; $i++)				
			{
				do $value=rand(1, $max); while (isset($duplicate[$value]));
				$duplicate[$value]=true;
				$result[]=$value;
			}
		}
		
		return $result;
	}		
?>
