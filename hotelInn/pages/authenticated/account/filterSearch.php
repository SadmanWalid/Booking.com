<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a:link, a:visited {
    background-color: white;
    color: black;
    
    padding: 10px 20px;
    text-align: left;
    text-decoration: none;
    display: inline-block;
}
a:hover, a:active {
    background-color: green;
    color: white;
  }

.tooltip {
    position: relative;
    display: inline-block;
    
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 500px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: -5px;
    left: 105%;
}

.tooltip:hover .tooltiptext {
    visibility: visible;


.container {
   
   position: relative;
   width: 100%;
   padding-top: 100%; /* 1:1 Aspect Ratio */
}
.divhotel {
   
   position: relative;
   width: 100%;

.text {
   position:  absolute;
   top: 0;
   left: 0;
   bottom: 0;
   right: 0;
   text-align: left;
   font-size: 20px;
   color: black;
}
</style>
</head>
<body>

<form  id="search" action="filterSearch.php" method="post">
 <h3>Refine Search</h3>
 
 Stars:
 <select name="stars">
  <option value="1">*</option>
  <option value="2">**</option>
  <option value="3">***</option>
  <option value="4">****</option>
  <option value="5">*****</option>
</select>
Price Range:
<select name="price">
  <option value="1">500-1500 TK</option>
  <option value="2">1500-2500 TK</option>
  <option value="3">2500-3500 TK</option>
  <option value="4">3500-5000 TK</option>
  <option value="5">5000-10000 TK</option>
</select>
Rating:
 <select name="rating">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>

  Breakfast:<input type="checkbox" name="hotelServices" value="breakfast" > |
  Free wifi:<input type="checkbox" name="hotelServices" value="wifi" > |
  Laundry:<input type="checkbox" name="hotelServices" value="laundry" > |
  Swimming Pool: <input type="checkbox" name="hotelServices" value="pool" > |
  Parking: <input type="checkbox" name="hotelServices" value="parking" > 
  

<p></p>

   <input type="submit" name="refineSearch" value="Refine Search">
</form>
<p></p>

<div >

 <div class="divhotel" style="border: solid;">
   <a href="seagull.html" target="_parent"> Seagull Hotel Ltd</a><br/>
   <img   width="60" height="20" src="../../../resources/images/5stars.png">&nbsp;&nbsp;9.5 points  &nbsp;&nbsp;
   <div class="tooltip">(3km away from center)
    <span class="tooltiptext">This is the straignt-line distance on the map.Actual travel distance may vary.</span>
   </div> 
   <p style="color: blue; "><img  style="align-items:left " width="40%" height="200" src="../../../resources/images/seagull.jpg">&nbsp;&nbsp;BDT 4500 TK /day
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a style="border:2px solid blue; text-align: right;text-decoration: none; " href="seagull.html" target="_parent">Show Details/Book</a>
   

   </p>
   
 </div>

 <div class="divhotel" style="border: solid;">
   <a href="longBeachHotel.html" target="_parent">Long Beach Hotel Ltd</a><br/>
   <img   width="60" height="20" src="../../../resources/images/4stars.png">&nbsp;&nbsp;9 points  &nbsp;&nbsp;
   <div class="tooltip">(4km away from center)
    <span class="tooltiptext">This is the straignt-line distance on the map.Actual travel distance may vary.</span>
   </div> 
   <p style="color: blue; "><img  style="align-items:left " width="40%" height="200" src="../../../resources/images/longBeachHotel.jpg">&nbsp;&nbsp;BDT 4000 TK /day
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a style="border:2px solid blue; text-align: right;text-decoration: none; " href="longBeachHotel.html" target="_parent">Show Details/Book</a>
   

   </p>
   
   


 </div>
</div>


</body>
</html>
