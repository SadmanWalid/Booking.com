<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
   
   position: relative;
   width: 100%;
   padding-top: 100%; /* 1:1 Aspect Ratio */
}

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



<table width="100%" cellspacing="0" cellpadding="5" border="1">
  
    <tr>
      <td width="25%" height="450" valign="top">
         <div class="container"> 

      <div class="text">
      <form action="searchHotel.html" method="">
       <fieldset>  
        <legend>Search Hotels:</legend>
          Destination:<input type="text" name="destination" value="<?php echo $_POST['destination']; ?>" ><br/>
        Check-in:<input type="date" name="checkIn" value="<?php echo $_POST['checkIn']; ?>" >
        Check-out:<input type="date" name="checkOut" value="<?php echo $_POST['checkOut']; ?>"> <br/>
        Guests: 
      <input list="guests" name="numberOfGuests" value="<?php echo $_POST['numberOfGuests']; ?>">
         <datalist id="guests">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="5">
          <option value="6">
        <option value="7">
        <option value="8">
          <option value="9">
        <option value="10">
         </datalist>
       Rooms: 
       <input list="rooms" name="numberOfRooms" value="<?php echo $_POST['numberOfRooms']; ?>">
         <datalist id="rooms">
          <option value="1">
         <option value="2">
         <option value="3">
         <option value="5">
         <option value="6">
       <option value="7">
       <option value="8">
         <option value="9">
       <option value="10">
         </datalist>
   
      <input type="submit" value="Edit search">
  
        </fieldset>
      </form>
 
      </div> 
     </div>  
   </td>
        <td valign="top">
            <iframe name="contentFrame" frameborder="0" width="100%" height="450" src="filterSearch.php"></iframe>
        </td>

   
    </tr>
  
   
</table>


</body>
</html>
