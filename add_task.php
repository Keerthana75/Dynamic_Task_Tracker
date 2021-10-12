<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">    
<?php include "includes/header.php";?>
    <title>Add Task</title>
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
        <h1> Add Task </h1>
    <form>
    <div class="buttons">
        <button type="submit" formaction="index.php">Home</button>
    </div>
    </form>
    <div class="info_1">
    <center>
    <table>
        <tr>
            <th> Name </th>
            <th> Visit Time </th>
            <th> Status </th>
            <th> Add Task </th>
        </tr>
        <tr>
            <td> <input type="text" placeholder="Enter the task name "> </td>
            <td> <input type="text" placeholder="Enter the Time "> </td>
            <td> <input type="text" placeholder="Enter the status "> </td>
            <td> <input type="text" placeholder="Enter the user Task "> </td>
        </tr>
        <tr>
            <td> <input type="text" placeholder="Enter the task name "> </td>
            <td> <input type="text" placeholder="Enter the Time "> </td>
            <td> <input type="text" placeholder="Enter the status "> </td>
            <td> <input type="text" placeholder="Enter the user Task "> </td>
        </tr>
        <tr>
            <td> <input type="text" placeholder="Enter the task name "> </td>
            <td> <input type="text" placeholder="Enter the Time "> </td>
            <td> <input type="text" placeholder="Enter the status "> </td>
            <td> <input type="text" placeholder="Enter the user Task "> </td>
        </tr>
        <tr>
            <td> <input type="text" placeholder="Enter the task name "> </td>
            <td> <input type="text" placeholder="Enter the Time "> </td>
            <td> <input type="text" placeholder="Enter the status "> </td>
            <td> <input type="text" placeholder="Enter the user Task "> </td>
        </tr>
        <tr>
            <td> <input type="text" placeholder="Enter the task name "> </td>
            <td> <input type="text" placeholder="Enter the Time "> </td>
            <td> <input type="text" placeholder="Enter the status "> </td>
            <td> <input type="text" placeholder="Enter the user Task "> </td>
        </tr>
    </table>
    <div class="buttons">
        <button type="submit">Submit</button>
    </div>
</center>
    </div>
    <div class="footer">
        <p> All Rights Reserved (C) 2021 Some Website </p>
    </div>
    <?php include "includes/footer.php";?>
</body>
</html>