<?php include 'dbconnect.php';?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 70%;
    color: white;
    font-size: 30px;
    align-items: center;
    margin-left: 210px;
    align:center;
}

td, th {
    border: 1px solid #dddded;
    text-align: left;
    padding: 20px;
}

tr:nth-child(even) {
    align:center;
    background-color: #dddddd;
        padding: 10px;
color: black;
}
</style>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin-Foundation Fighting Poverty</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>


<body style="background-color:Black;">
    <div id="header">
		<a href="index.html" class="logo">
			<img src="images/ffp_logo.jpg" alt="" width="300" height="250" >
		</a>
    </div>
    
    <table>
    <tr>
        
        <th>VOLUNTEER-ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>START-DATE</th>
        <th>END-DATE</th>
        
        
        
        </tr>
    
        
    <?php 

$status=$_POST['action'];
       
            $sql="select d.vid,u.uname,u.ueid,d.start_date,d.end_date from user u,volunteership d,uservolunt uv where uv.vuid=u.ueid and uv.vvid=d.vid";
            
            if ($result=mysqli_query($conn,$sql))
            {
                // Fetch one and one row
                while ($row=mysqli_fetch_row($result))
                {
                    printf("<tr>");
                    printf ("<td> %s </td>",$row[0]);
                    printf ("<td> %s </td>",$row[1]);
                    printf ("<td> %s </td>",$row[2]);
                    printf ("<td> %s </td>",$row[3]);
                    printf ("<td> %s </td>",$row[4]);
                
                    printf("</tr>");
                
                }
                // Free result set
                mysqli_free_result($result);
            }
mysqli_close($conn);

?>
    </table>
    </body>
</html>