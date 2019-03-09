<?php
function biodata(){
	$data = [
		"name" => "Muhammad Pandriadi",
		"address" => "Kp sajira barat 03/03 desa sajira kec sajira kab lebak Banten",
		"hobbies" => ["Playing Game", "Wild fishing"],
		"is_married" => false,
		"schools" => (object) [
							"highSchool" => "SMA NEGERI 1 SAJIRA", 
							"university" => ""],
		"skills" => (object) [
							"Skill1" => "HTML","CSS","jAVASCRIPT","BOOTSTRAP","PHP",
							
							]
		];
	return json_encode($data);
	}
echo (biodata());
