
<?php
//if we got something through $_POST
if (isset($_POST['search'])) {

	    
    $word = $_POST['search'];
    $word = htmlentities($word);
	$word = '%'.$word.'%';
	// Create connection
	$db= new mysqli("23.253.10.205:3306","mark","cowandcheese","marketalpha");
	
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

    // build your search query to the database
    $sql = $db->prepare("SELECT idx, listing_title, description, asking_price, revenue, locationx, locationy FROM listing_company where company_name like ?");

	$sql->bind_param('s',$word);
	

    // get results
    $sql->execute();

	$sql->bind_result($idx, $listing_title, $description, $asking_price, $revenue,$x,$y);
	$i = 1;
	while ($sql->fetch()){
	    echo '<div class = "result_container">
	    	 	<div class = "row-fluid"> 
	    			<div class ="span8"><div class="title" id="title'.$i.'">' . $listing_title. '</div></div>
	    			<div class ="span4"><div class="price" id="price'.$i.'">Asking Price: $'.number_format($asking_price).'</div><div class="revenue" id="revenue'.$i.'">Revenue: $'.number_format($revenue). '</div></div> 
	    	 	</div>
	    	 	<div class = "row-fluid">
	    	 		<div class="span1" style = "padding-bottom:5px"><img src = "http://lorempixel.com/100/100/?'.rand(1,1000).'"></div>
	    	 		<div class="span11" id="description'.$i.'">'. $description . '</div>
	    	 	</div>
	    	  </div>
	    	  <div id="locationx'.$i.'" style = "display:none">'.$x.'</div> <div id="locationy'.$i.'" style = "display:none">'.$y.'</div>
	    	  '
	    	  ;
	$i= $i+1;
	  }
	$i = $i-1;
	echo 'number of results:';
	echo '<div id = "numresults">' .$i.'</div>';
	  
}
 
?>