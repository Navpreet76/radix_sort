<?php
$array = array(170, 45, 75, 90, 802, 2, 24, 66, 99, 17, 24, 38, 112, 146, 46);

function radix_sort($array)
{
	$most_digits = 0;
	foreach ($array as $value) {
		$length = strlen($value);
		if ($length > $most_digits)
		{
			$most_digits = $length;
		}
	}

	$bucket = array(
		array(),
		array(),
		array(),
		array(),
		array(),
		array(),
		array(),
		array(),
		array(),
		array(),
	);

	for ($i = 0; $i < $most_digits; $i++)
	{
		for($j = 0; $j < count($array); $j++)
		{
			$bucket[floor(($array[$j]/pow(10, $i)))%10][] = $array[$j];
		}

		$array = array();
		for($k = 0; $k < count($bucket); $k++)
		{
			foreach($bucket[$k] as $value)
			{
				$array[] = $value;
			}
		}
		$bucket = array(
			array(),
			array(),
			array(),
			array(),
			array(),
			array(),
			array(),
			array(),
			array(),
			array(),
		);
	}
	var_dump($array);
}

radix_sort($array);
?>