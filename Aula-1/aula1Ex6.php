<?php

	for($ano = 1980; $ano <= 2025; $ano++){
		if($ano % 4 == 0){
			if($ano % 100 == 0){
                        	if($ano % 400 == 0){
                         	echo $ano . " ";
		                }

	                }else {
			echo $ano . " ";
			}
		}
	}

