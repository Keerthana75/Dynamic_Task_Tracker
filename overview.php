<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">    
<?php include "includes/header.php";?>
    <title>Overview</title>
    <style>
        body
        {
            margin: 0px;
            padding: 0px;
            padding-top: 10px;
            background: white;
        }
        .info
        {
            text-align: center;
            font-size: 15px;
            padding-left: 10px;
        }
        .buttons
        {
            padding: 10px;
            background-color:#B5D7F9;
            display: flex;
            justify-content: space-evenly;
            margin: 20px 20px;
        }
        .buttons button
        {
            background-color: blue;
            color: white;
            padding: 10px;
            margin-right: 10px;
            
        }
        .info_1, .mid
        {
            padding-left: 20px;
        }
        .footer
        {
            background-color: #B5D7F9;
            padding: 20px;
            text-align: center;
            margin-top: 390px;
            
        }
        .info_1
        {
            background-color: #B5D7F9;
            margin: 20px 20px;
            text-align: center;
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        .info_1 th
        {
            background-color: blue;
            color: white;
            font-weight: normal;
            padding: 10px;
            
        }
        .mid input
        {
            background-color: blue;
            margin: 10px;
            color: white;
            border: none;
            text-align: center;
            padding: 10px;
        }
        th,td
        {
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="info">
        <h1> Overview </h1>
    <form>
    <div class="buttons">
        <button type="submit" formaction="index.php">Home</button>
    </div>
    </form>
    <div class="info_1">
        <table>
            <tr>
                <th> Date </th>
                <th> Name </th>
                <th> Visit Time </th>
                <th> Status </th>
                <th> Customer </th>
                <th> Phone </th>
                <th> Email </th>
            </tr>
            <tr>
                <td> 9/10/21 </td>
                <td> Electric Work </td>
                <td> 9:00 AM </td>
                <td> Pending  </td>
                <td> Nayana </td>
                <td> 6234567890 </td>
                <td> naya@gmail.com </td>
            </tr> 
            <tr>
                <td> 9/10/21 </td>
                <td> Plumbing Work </td>
                <td> 10:00 AM </td>
                <td> Completed  </td>
                <td> Asfiya </td>
                <td> 5974391259 </td>
                <td> asf@gmail.com </td>
            </tr> 
            <tr>
                <td> 10/10/21 </td>
                <td> Welding Work </td>
                <td> 11:00 AM </td>
                <td> Pending  </td>
                <td> Kirana </td>
                <td> 6934567890 </td>
                <td> kir@gmail.com </td>
            </tr> 
            <tr>
                <td> 10/10/21 </td>
                <td> Electric Work </td>
                <td> 1:00 PM </td>
                <td> Pending  </td>
                <td> Nisarga </td>
                <td> 9234567890 </td>
                <td> nis@gmail.com </td>
            </tr> 
            <tr>
                <td> 13/10/21 </td>
                <td> Wood Work </td>
                <td> 3:00 PM </td>
                <td> Pending  </td>
                <td> Aadhya </td>
                <td> 7634567890 </td>
                <td> aad@gmail.com </td>
            </tr> 
            <tr>
                <td> 14/10/21 </td>
                <td> Painting Work </td>
                <td> 4:00 PM </td>
                <td> Pending  </td>
                <td> Priya </td>
                <td> 964567890 </td>
                <td> pri@gmail.com </td>
            </tr>    
        </table>
    </div>
    <div class="footer">
        <p> All Rights Reserved (C) 2021 Some Website </p>
    </div>
    <?php include "includes/footer.php";?>
</body>
</html>