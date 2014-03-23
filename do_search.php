
<?php
//if we got something through $_POST
if (isset($_POST['search'])) {


    $word = $_POST['search'];
    $word = htmlentities($word);
	$word = '%'.$word.'%';
	
	$sort = $_POST['sort'];
	$sort = htmlentities($sort);
	$sort = strtolower($sort);
	
	$type = $_POST['type'];
	$type = htmlentities($type);
	$type = filter_var($type,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_THOUSAND);
	$type = ','. $type.',';
	$type = str_replace(',1,', ",'agency',",$type);
	$type = str_replace(',2,', ",'network',",$type);
	$type = str_replace(',3,', ",'public',",$type);
	$type = substr($type,1,-1);
	
	
	$industry = $_POST['industry'];
	$industry = htmlentities($industry);
	$industry = filter_var($industry,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_THOUSAND);
	
	
	// Create connection
	$db= new mysqli("23.253.10.205:3306","mark","cowandcheese","marketalpha");
	
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  
	  
	 // decode the sort into the database column_name whitelisted
	switch ($sort) {
		case 'name (a to z)':
			$orderby = 'company_name';
			$ascdesc = 'asc';
			break;
		case 'name (z to a)':
			$orderby = 'company_name';
			$ascdesc = 'desc';
			break;
		case 'asking price($ to $$$$)':
			$orderby = 'asking_price';
			$ascdesc = 'asc';
			break;
		case 'asking price($$$$ to $)':
			$orderby = 'asking_price';
			$ascdesc = 'desc';
			break;
		case 'revenue($ to $$$$)':
			$orderby = 'revenue';
			$ascdesc = 'asc';
			break;
		case 'revenue($$$$ to $)':
			$orderby = 'revenue';
			$ascdesc = 'desc';
			break;
		case 'newest listings':
			$orderby = 'posting_date';
			$ascdesc = 'desc';
			break;
		case 'oldest listings':
			$orderby = 'posting_date';
			$ascdesc = 'asc';
			break;
	}
	

    // build your search query to the database
    $sql = $db->prepare("SELECT idx, listing_title, description, asking_price, revenue, locationx, locationy 
    FROM listing_company 
    where company_name like ? 
    and industry_idx in (".$industry.")
    and listing_security in (".$type.") 
    order by ". $orderby." ".$ascdesc);

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