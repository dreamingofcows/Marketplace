<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>FIRMCAST marketplace - Search Results</title>
		<meta name="author" content="Mark" />
		 <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
		 <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		 <style type='text/css'>
		 div.result_container{
		 border-style:solid;	
		 border-bottom-width: 1px;	
		 }
		 div.title{
		 padding-top:5px;
		 font-size:20px;
		 color:#BD4444;
		 }
		 div.price{
		 padding-top:5px;
		 font-size:20px;
		 color:#BD0000;
		 
		 }
		 div.revenue{
		 	
		 }
		 </style>
		 
		 
		 
		<!-- Date: 2014-03-16 -->
		    <img src="img/marketplaceheader.png">
		 <div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Search Results</a>
    <ul class="nav">
      <li class="active"><a href="marketsplash.html">Home</a></li>
    </ul>
  </div>
</div>
	</head>
	<body>
<script>
	var listing_title[];
	
</script>		

<div id="wrap">
	<div class="container-fluid">
		<div class="row-fluid">
			
		<div class="span2"> 
		<form method="post" action="do_search.php">
			<input type="text" class="input-small search-query" name="s" placeholder="Search again" value="" id="search_box">
		    <input type="submit" value="Find" class="search_button" /><br />
		</form>
		<!--Insert Filters here-->
		FILTERS HERE
		</div>
		
		<div class="span10">
			<div class="row-fluid">
			<div id="googleMap" style="width:100%;height:380px;"></div>
			</div>
			<div class="row-fluid" style = "width:100%">
			<!--Insert Listings here-->	

				<ul id="results" class="update">
				</ul>
				
			</div>
			</div>
		</div>
		
			
		</div>
	</div>
</div>
		
		
		<!--javascript-->
		<script src="http://code.jquery.com/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDqhGczorRjukfZeeoGA6U37vcI4koJPHk&sensor=false"></script>
    	<script>
		function initialize()
		{
		var mapProp = {
		  center:new google.maps.LatLng(51.508742,-122.120850),
		  zoom:5,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
		var map=new google.maps.Map(document.getElementById("googleMap")
		  ,mapProp);
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		
		<script type="text/javascript">

		$(function() {
		
		    $(".search_button").click(function() {
		        // getting the value that user typed
		        var searchString    = $("#search_box").val();
		        // forming the queryString
		        var data            = 'search='+ searchString;
		        
		        // if searchString is not empty
		        if(searchString) {
		            // ajax call
		            $.ajax({
		                type: "POST",
		                url: "do_search.php",
		                data: data,
		                beforeSend: function(html) { // this happens before actual call
		                    $("#results").html(''); 
		                    $("#searchresults").show();
		                    $(".word").html(searchString);
		               },
		               success: function(html){ // this happens after we get results
		                    $("#results").show();
		                    $("#results").append(html);
		                    
		               var x=document.getElementById("numresults");
		               var numresults = x.innerHTML;
		               
		              }
		            });    
		        }
		        return false;
		    });
		});
		
		</script>
	</body>
</html>

