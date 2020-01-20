<?php

function roll_the_dice($nilai)
{
	$nilai_dice = [];

	for ($i=0; $i < $nilai ; $i++) {
		$nilai_dice[] = rand(1, $i);	
	}

	$nilai_dice = array_unique($nilai_dice);

	return print_r($nilai_dice);
}

roll_the_dice(100);