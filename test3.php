<!DOCTYPE html>
<html>
  <head>
      <link   rel="stylesheet" type="text/css" href='jquery/jquery.mobile-1.4.4.min.css'/>
      <script src="jquery/jquery-1.11.1.min.js"></script>
      <script src="jquery/jquery.mobile-1.4.4.min.js"></script>
    </head>
<body>
<div
data-role="page" id="pageone">
<div data-role="header">
  
<h1>ONLINE BUS APPLICATION</h1>

</div>
<div data-role="header">
  <div data-role="navbar">
    <ul>
       <li><a href="#" class="ui-btn-active ui-state-persist">Home</a></li>
       <li><a href="test2.php">Bus Schedule</a></li>
       <li><a href="test2.php">Bus Junctions</a></li>
       <li><a href="#">About us</a></li>
       

    </ul>


  </div>



            <div role="main" class="ui-content">
            <br></br>
            <br></br>
            <form method="post" action="demoform.asp">
              <div data-role="fieldcontain">
                <label for="Aseat">Available Seats:</label>
                <input type="text" name="Aseat" id="Aseat">
                <br></br>
                <br></br>
                <label for="lname" >Location:</label>
                <input type="text" name="lname" id="lname">
              </div>
             

       <br></br>
       <br></br>
       <br></br>
       <br></br>


       <div data-role="controlgroup" data-type="horizontal">
        <a href="test.html" data-role="button">Next</a>
        
             </div>
             <a href="test.html" data-transition="flip">slide to page</a>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>

           <div data-role="footer">
	            <div data-role="collapsible-set">
<div data-role="collapsible">
<h1>More Information</h1>
<p>You will need to purchase a seat</p>
</div>
<div data-role="collapsible">
<h1>Bus Junctions</h1>
<p>I'm the expanded content.</p>
</div>
</div>
               </div>
        
       
</html>


