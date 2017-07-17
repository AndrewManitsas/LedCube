<?php
	//Set the selector to CUSTOM ANIMATION
	$file = fopen("com_files/default_patterns.txt", "w");
	fwrite($file, 7);
	fclose($file);

	$frames = $_POST["frames"];
	echo $frames;
	$file = fopen("com_files/frame_num.txt", "w");
	fwrite($file, $frames);
	fclose($file);

	$stat = 0;

	//--------------------------------------------------
	//Layer 1
	$file = fopen("com_files/layer1.txt", "w"); //Open the clean the file
	fclose($file);
	$file = fopen("com_files/layer1.txt", "a");

	//L0_00
	if ($_POST["L0_00"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_00

	//L0_01
	if ($_POST["L0_01"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_01

	//L0_02
	if ($_POST["L0_02"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_02

	//L0_03
	if ($_POST["L0_03"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_03

	//L0_04
	if ($_POST["L0_04"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_04

	//L0_05
	if ($_POST["L0_05"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_05

	//L0_06
	if ($_POST["L0_06"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_06

	//L0_07
	if ($_POST["L0_07"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_07

	//L0_08
	if ($_POST["L0_08"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_08

	//L0_09
	if ($_POST["L0_09"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_09
	
	//L0_10
	if ($_POST["L0_10"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_10

	//L0_11
	if ($_POST["L0_11"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_11

	//L0_12
	if ($_POST["L0_12"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_12

	//L0_13
	if ($_POST["L0_13"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_13

	//L0_14
	if ($_POST["L0_14"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_14

	//L0_15
	if ($_POST["L0_15"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_15

	//L0_16
	if ($_POST["L0_16"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_16

	//L0_17
	if ($_POST["L0_17"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_17

	//L0_18
	if ($_POST["L0_18"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_18

	//L0_19
	if ($_POST["L0_19"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_19

	//L0_20
	if ($_POST["L0_20"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_20

	//L0_21
	if ($_POST["L0_21"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_21

	//L0_22
	if ($_POST["L0_22"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_22

	//L0_23
	if ($_POST["L0_23"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_23

	//L0_24
	if ($_POST["L0_24"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L0_24

	fclose($file);

	//--------------------------------------------------
	//Layer 2
	$file = fopen("com_files/layer2.txt", "w"); //Open the clean the file
	fclose($file);
	$file = fopen("com_files/layer2.txt", "a");

	//L1_00
	if ($_POST["L1_00"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_00

	//L1_01
	if ($_POST["L1_01"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_01

	//L1_02
	if ($_POST["L1_02"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_02

	//L1_03
	if ($_POST["L1_03"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_03

	//L1_04
	if ($_POST["L1_04"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_04

	//L1_05
	if ($_POST["L1_05"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_05

	//L1_06
	if ($_POST["L1_06"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_06

	//L1_07
	if ($_POST["L1_07"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_07

	//L1_08
	if ($_POST["L1_08"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_08

	//L1_09
	if ($_POST["L1_09"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_09
	
	//L1_10
	if ($_POST["L1_10"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_10

	//L1_11
	if ($_POST["L1_11"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_11

	//L1_12
	if ($_POST["L1_12"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_12

	//L1_13
	if ($_POST["L1_13"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_13

	//L1_14
	if ($_POST["L1_14"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_14

	//L1_15
	if ($_POST["L1_15"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_15

	//L1_16
	if ($_POST["L1_16"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_16

	//L1_17
	if ($_POST["L1_17"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_17

	//L1_18
	if ($_POST["L1_18"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_18

	//L1_19
	if ($_POST["L1_19"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_19

	//L1_20
	if ($_POST["L1_20"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_20

	//L1_21
	if ($_POST["L1_21"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_21

	//L1_22
	if ($_POST["L1_22"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_22

	//L1_23
	if ($_POST["L1_23"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_23

	//L1_24
	if ($_POST["L1_24"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L1_24

	fclose($file);

	//--------------------------------------------------
	//Layer 3
	$file = fopen("com_files/layer3.txt", "w"); //Open the clean the file
	fclose($file);
	$file = fopen("com_files/layer3.txt", "a");

	//L2_00
	if ($_POST["L2_00"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_00

	//L2_01
	if ($_POST["L2_01"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_01

	//L2_02
	if ($_POST["L2_02"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_02

	//L2_03
	if ($_POST["L2_03"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_03

	//L2_04
	if ($_POST["L2_04"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_04

	//L2_05
	if ($_POST["L2_05"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_05

	//L2_06
	if ($_POST["L2_06"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_06

	//L2_07
	if ($_POST["L2_07"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_07

	//L2_08
	if ($_POST["L2_08"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_08

	//L2_09
	if ($_POST["L2_09"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_09
	
	//L2_10
	if ($_POST["L2_10"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_10

	//L2_11
	if ($_POST["L2_11"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_11

	//L2_12
	if ($_POST["L2_12"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_12

	//L2_13
	if ($_POST["L2_13"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_13

	//L2_14
	if ($_POST["L2_14"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_14

	//L2_15
	if ($_POST["L2_15"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_15

	//L2_16
	if ($_POST["L2_16"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_16

	//L2_17
	if ($_POST["L2_17"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_17

	//L2_18
	if ($_POST["L2_18"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_18

	//L2_19
	if ($_POST["L2_19"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_19

	//L2_20
	if ($_POST["L2_20"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_20

	//L2_21
	if ($_POST["L2_21"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_21

	//L2_22
	if ($_POST["L2_22"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_22

	//L2_23
	if ($_POST["L2_23"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_23

	//L2_24
	if ($_POST["L2_24"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L2_24

	fclose($file);

	//--------------------------------------------------
	//Layer 4
	$file = fopen("com_files/layer4.txt", "w"); //Open the clean the file
	fclose($file);
	$file = fopen("com_files/layer4.txt", "a");

	//L3_00
	if ($_POST["L3_00"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_00

	//L3_01
	if ($_POST["L3_01"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_01

	//L3_02
	if ($_POST["L3_02"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_02

	//L3_03
	if ($_POST["L3_03"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_03

	//L3_04
	if ($_POST["L3_04"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_04

	//L3_05
	if ($_POST["L3_05"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_05

	//L3_06
	if ($_POST["L3_06"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_06

	//L3_07
	if ($_POST["L3_07"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_07

	//L3_08
	if ($_POST["L3_08"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_08

	//L3_09
	if ($_POST["L3_09"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_09
	
	//L3_10
	if ($_POST["L3_10"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_10

	//L3_11
	if ($_POST["L3_11"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_11

	//L3_12
	if ($_POST["L3_12"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_12

	//L3_13
	if ($_POST["L3_13"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_13

	//L3_14
	if ($_POST["L3_14"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_14

	//L3_15
	if ($_POST["L3_15"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_15

	//L3_16
	if ($_POST["L3_16"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_16

	//L3_17
	if ($_POST["L3_17"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_17

	//L3_18
	if ($_POST["L3_18"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_18

	//L3_19
	if ($_POST["L3_19"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_19

	//L3_20
	if ($_POST["L3_20"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_20

	//L3_21
	if ($_POST["L3_21"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_21

	//L3_22
	if ($_POST["L3_22"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_22

	//L3_23
	if ($_POST["L3_23"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_23

	//L3_24
	if ($_POST["L3_24"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L3_24

	fclose($file);

	//--------------------------------------------------
	//Layer 5
	$file = fopen("com_files/layer5.txt", "w"); //Open the clean the file
	fclose($file);
	$file = fopen("com_files/layer5.txt", "a");

	//L4_00
	if ($_POST["L4_00"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_00

	//L4_01
	if ($_POST["L4_01"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_01

	//L4_02
	if ($_POST["L4_02"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_02

	//L4_03
	if ($_POST["L4_03"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_03

	//L4_04
	if ($_POST["L4_04"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_04

	//L4_05
	if ($_POST["L4_05"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_05

	//L4_06
	if ($_POST["L4_06"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_06

	//L4_07
	if ($_POST["L4_07"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_07

	//L4_08
	if ($_POST["L4_08"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_08

	//L4_09
	if ($_POST["L4_09"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_09
	
	//L4_10
	if ($_POST["L4_10"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_10

	//L4_11
	if ($_POST["L4_11"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_11

	//L4_12
	if ($_POST["L4_12"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_12

	//L4_13
	if ($_POST["L4_13"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_13

	//L4_14
	if ($_POST["L4_14"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_14

	//L4_15
	if ($_POST["L4_15"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_15

	//L4_16
	if ($_POST["L4_16"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_16

	//L4_17
	if ($_POST["L4_17"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_17

	//L4_18
	if ($_POST["L4_18"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_18

	//L4_19
	if ($_POST["L4_19"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_19

	//L4_20
	if ($_POST["L4_20"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_20

	//L4_21
	if ($_POST["L4_21"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_21

	//L4_22
	if ($_POST["L4_22"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_22

	//L4_23
	if ($_POST["L4_23"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_23

	//L4_24
	if ($_POST["L4_24"] == "on")
	{
		$stat = 1;
	}
	else
	{
		$stat = 0;
	}

	fwrite($file, $stat); //L4_24

	fclose($file);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta http-equiv="refresh" content="1; URL='led_cube.html'" />
</head>
<body>
	<br>
	<p>
		The site should redirect to home in 1 sec. If not use the link below.
	</p>
	<br>
	<a href="led_cube.html">Back to main control panel.</a>
</body>
</html>