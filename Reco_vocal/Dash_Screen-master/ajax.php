<?php

  header('Content-type: text/html; charset=utf-8');
  require_once('inc.php');

  if(isset($_REQUEST['block'])){$block = $_REQUEST['block'];}else{$block = 'none';}
  
   /////////////////////////////////////////////////
  //  IFSTAT
  /////////////////////////////////////////////////

  if($block == 'ifstat'){
    imagickHisto ($_REQUEST['max'], $_REQUEST['eth'], $_REQUEST['up_down']);
  }
  
    /////////////////////////////////////////////////
  //  Photo
  /////////////////////////////////////////////////
 
  if($block == 'photo'){
    echo photo();
  }

   /////////////////////////////////////////////////
  //  Fete du jour
  /////////////////////////////////////////////////
 
  if($block == 'fete'){
    echo fete();
  }
  
  /////////////////////////////////////////////////
  //  METEO
  /////////////////////////////////////////////////

  if($block == 'meteo'){
    echo meteo();
  }
  
   /////////////////////////////////////////////////
  //  METEOparis
  /////////////////////////////////////////////////

  if($block == 'meteoparis'){
    echo meteoparis();
  }
  
  /////////////////////////////////////////////////
  //  uptime pi
  /////////////////////////////////////////////////

  if($block == 'uptimepi'){
    echo uptime();
  }
  
   /////////////////////////////////////////////////
  //  cpu pi
  /////////////////////////////////////////////////

  if($block == 'cpupi'){
    echo cpu();
  }
  
   /////////////////////////////////////////////////
  //  memoire pi
  /////////////////////////////////////////////////

  if($block == 'mempi'){
    echo memoire();
  }
  
  /////////////////////////////////////////////////
  //  temp pi
  /////////////////////////////////////////////////

  if($block == 'temppi'){
    echo tempcpu();
  }

////////////////////////
//////////temp
////////////////////////

	if($block == 'temp1'){
	echo temp();
	}

	////////////////////////
//////////temp ext
////////////////////////

	if($block == 'tempext'){
	echo tempext();
	}
	
	////////////////////////
//////////temp graph ext
////////////////////////

	if($block == 'tempgraphext'){
	echo tempgraphext();
	}
	
	////////////////////////
//////////temp graph salon
////////////////////////

	if($block == 'tempgraph1'){
	echo tempgraph();
	}

	////////////////////////
//////////temp min max
////////////////////////

	if($block == 'minmax'){
	echo minmax();
	}
	
	////////////////////////
//////////temp min max ext
////////////////////////

	if($block == 'minmaxext'){
	echo minmaxext();
	}

?>
