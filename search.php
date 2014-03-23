<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>FIRMCAST marketplace - Search Results</title>
		<meta name="author" content="Mark" />
		 <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
		 <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		 <link href="css/bootstrap-select.min.css" rel="stylesheet" media="screen">
		 <style type='text/css'>
		 div.result_container{
		 border-bottom-style:solid;
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
		 div.category{
		 color:#555555;
		 border-bottom-style:solid;
		 border-bottom-color:#CCCCCC;
		 }
		
		 </style>
		 
		 
		 
		<!-- Date: 2014-03-16 -->
	<a href="marketsplash.html"> <img src="img/marketplaceheader.png"> </a>
		 
	</head>
	<body>
	

<div id="wrap">
	<div class="container-fluid">
		<div class="row-fluid">
			
		<div class="span2" id="sidebar"> 
		<!--Insert Filters here-->
			<ul class="nav list-group">
				
                    <div class = "category">Listing Type </div>
	                    <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id="filter-listing-type-agency" checked="checked"> Internal
	                    	</label>
	                    </div>
	                    <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id = "filter-listing-type-network" checked="checked"> Network
	                    	</label>
	                    </div>
	                    <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id = "filter-listing-type-public" checked="checked"> Public
	                    	</label>
	                    </div>
                    
                        <div class = "category">Industry</div>
	                    <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id = "filter-industry-1" checked="checked"> Accounting
	                    	</label>
	                    </div>
	                     <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id = "filter-industry-2" checked="checked"> Law
	                    	</label>
	                    </div>
	                     <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id = "filter-industry-3" checked="checked"> Medical
	                    	</label>
	                    </div>
	                     <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id = "filter-industry-4" checked="checked"> Dental
	                    	</label>
	                    </div>
	                     <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id = "filter-industry-5" checked="checked"> Engineering
	                    	</label>
	                    </div>
	                     <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id = "filter-industry-6" checked="checked"> Building
	                    	</label>
	                    </div>
	                     <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id = "filter-industry-7" checked="checked"> Consulting
	                    	</label>
	                    </div>
	                     <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id = "filter-industry-8" checked="checked"> Services
	                    	</label>
	                    </div>
	                     <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id = "filter-industry-9" checked="checked"> Real Estate
	                    	</label>
	                    </div>
	                    <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id = "filter-industry-10" checked="checked"> Food
	                    	</label>
	                    </div>
	                    <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id = "filter-industry-all" checked="checked" onchange="checkall('filter-industry-all')"> (check all)
	                    	</label>
	                    </div>
                     <div class = "category">Location</div>
	                    <div class="checkbox">
	                    	<label>
	                    	<input type="checkbox" id = "filter-location-Oregon" checked="checked"> Oregon
	                    	</label>
	                    </div>
                    
                </ul>
		
		</div>
		
		<div class="span10">
			<div class="row-fluid">
			
			<div id="map-canvas" style="width:100%;height:450px;"></div>
			</div>
			<div class="row-fluid" style = "width:100%">
			<div class="navbar">
			  <div class="navbar-inner">
			    <div class="container">
			      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </a>
			     
			      <div class="nav-collapse">
			      	<div class = "span6" style="padding-top:5px;">
			      		Sort Results:
			        	<select class="selectpicker" id="sortpicker" style="padding-top:8px;">
						    <option>Name (A to Z)</option>
						    <option>Name (Z to A)</option>
						    <option>Asking Price($$$$ to $)</option>
						    <option>Asking Price($ to $$$$)</option>
						    <option>Revenue($$$$ to $)</option>
						    <option>Revenue($ to $$$$)</option>
						    <option>Newest Listings</option>
						    <option>Oldest Listings</option>
					  	</select>
					 </div>
					 <div class = "span6">
				        <form class="navbar-form pull-right" method="post" action="do_search.php">
						  	<input type="text" class="input-large search-query" name="s" placeholder="Search again" value="" id="search_box">
						    <input type="submit" value="Search" class="search_button" /><br />
						</form>
					</div>
			      </div><!-- /.nav-collapse -->
			    </div><!-- /.container -->
			  </div><!-- /.navbar-inner -->
			</div><!-- /.navbar -->	
				
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
    	<script src="js/bootstrap-select.min.js"></script>
    	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDqhGczorRjukfZeeoGA6U37vcI4koJPHk&sensor=false"></script>
    	<!--SCRIPT FOR GOOGLE MAP FUNCTIONALITY -- move to separate file on cleanup-->
    	
    	<script>
    	var map;
		var markers = [];
    	function initialize() {
		  var portland = new google.maps.LatLng(45.5, -122.6);
		  var mapOptions = {
		    zoom: 13,
		    center: portland,
		    mapTypeId: google.maps.MapTypeId.TERRAIN
		  };
		  map = new google.maps.Map(document.getElementById('map-canvas'),
		      mapOptions);
		
		}
		// Add a marker to the map and push to the array.
		function addMarker(location) {
		  var marker = new google.maps.Marker({
		    position: location,
		    map: map
		  });
		  markers.push(marker);
		}
		
		// Sets the map on all markers in the array.
		function setAllMap(map) {
		  for (var i = 0; i < markers.length; i++) {
		    markers[i].setMap(map);
		  }
		}
		
		// Removes the markers from the map, but keeps them in the array.
		function clearMarkers() {
		  setAllMap(null);
		}
		
		// Shows any markers currently in the array.
		function showMarkers() {
		  setAllMap(map);
		}
		
		// Deletes all markers in the array by removing references to them.
		function deleteMarkers() {
		  clearMarkers();
		  markers = [];
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	  	<!--SCRIPT FOR Checkbox-all -- MOVE TO SEPARATE FILE LATER-->	
		<script type="text/javascript">
		 function checkall(id){
			   if (id == 'filter-industry-all'){
			   		var c = document.getElementById(id);
			   		if (c.checked){
			   			for(var i=1; i<= 10;  i+=1){
		               		var x = document.getElementById("filter-industry-"+i);
			   					x.checked = true;
			   				}
			   		} else{
			   			for(var i=1; i<= 10;  i+=1){
		               		var x = document.getElementById("filter-industry-"+i);
			   					x.checked = false;
			   				}
			   			}
			   }
			}
		</script>

	  	<!--SCRIPT FOR SEARCH -- Keep here-->	
		<script type="text/javascript">

		$(function() {
		
		    $(".search_button").click(function() {
		        // getting the value that user typed
		        var searchString    = $("#search_box").val();
		        
		        
		        //get the sort string
		        var sortString = $("#sortpicker").selectpicker('val');
		        
		        //get the filter strings 

		       	//for listing_type
		       	var filterstringtype = '';
		        	if(document.getElementById("filter-listing-type-agency").checked){ 
		        		filterstringtype += "1,";
		        	}
		        	if(document.getElementById("filter-listing-type-network").checked){ 
		        		filterstringtype += "2,";
		        	}
		        	if(document.getElementById("filter-listing-type-public").checked){ 
		        		filterstringtype += "3,";
		        	}
		       filterstringtype = filterstringtype.substring(0,filterstringtype.length-1);
		       	//for industry
		       	var filterstringindustry = '';
		        	if(document.getElementById("filter-industry-1").checked){ 
		        		filterstringindustry += "1,";
		        	}
		        	if(document.getElementById("filter-industry-2").checked){ 
		        		filterstringindustry += "2,";
		        	}
		        	if(document.getElementById("filter-industry-3").checked){ 
		        		filterstringindustry += "3,";
		        	}
		        	if(document.getElementById("filter-industry-4").checked){ 
		        		filterstringindustry += "4,";
		        	}
		        	if(document.getElementById("filter-industry-5").checked){ 
		        		filterstringindustry += "5,";
		        	}
		        	if(document.getElementById("filter-industry-6").checked){ 
		        		filterstringindustry += "6,";
		        	}
		        	if(document.getElementById("filter-industry-7").checked){ 
		        		filterstringindustry += "7,";
		        	}
		        	if(document.getElementById("filter-industry-8").checked){ 
		        		filterstringindustry += "8,";
		        	}
		        	if(document.getElementById("filter-industry-9").checked){ 
		        		filterstringindustry += "9,";
		        	}
		        	if(document.getElementById("filter-industry-10").checked){ 
		        		filterstringindustry += "10,";
		        	}
		       filterstringindustry = filterstringindustry.substring(0,filterstringindustry.length-1);      
		        
		        // forming the queryString
		        var data            = 'search='+ searchString + '&sort=' + sortString + '&type=' +filterstringtype+'&industry='+filterstringindustry;
		        clearMarkers();
	
		      
	
		        // if searchString is not empty
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
		                    
		               var v=document.getElementById("numresults");
		               var numresults = v.innerHTML;
		               var bounds = new google.maps.LatLngBounds();
		               
		               //drop a marker for each one
		               for(var i=1; i<= numresults;  i+=1){
		               		var x = document.getElementById("locationx"+i);
		               		var	lx = x.innerHTML;
	               			var y = document.getElementById("locationy"+i);
	               			var	ly = y.innerHTML;
	               			var latlng = new google.maps.LatLng(lx, ly);
		               		addMarker(latlng);
		               		bounds.extend(latlng);
		               }
		              //set the map bounds
		            
						//now fit the map to the newly inclusive bounds
						map.fitBounds(bounds);
		              	
		              
		              }
		              
		            });    
		        
		        return false;
		    });
		});
		
		</script>
	</body>
</html>

