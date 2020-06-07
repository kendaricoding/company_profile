<?php 


	if ( ! function_exists('kosong'))
	{

		function kosong($data)
		{
			if ($data==null) 
			{
				echo "<small class='badge-warning'>Data kosong</small>";
			}
			else
			{
				return $data;
			}
		}
	}