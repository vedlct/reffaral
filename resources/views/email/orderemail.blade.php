<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 60%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th{
            text-align: center;
        }
        /*tr:nth-child(even) {*/
        /*background-color: #dddddd;*/
        /*}*/
    </style>
</head>
<body>


<div align="center">
    <table>

        <tr>
            <td>Company Name:</td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td>Company Email:</td>
            <td>{{$email}}</td>
        </tr>
        <tr>
            <td>Phone Number:</td>
            <td>{{$number}}</td>
        </tr>
        <tr>
            <td>Message</td>
            <td>{{$logoShape}}</td>
        </tr>

        <tr>
            <td>Discount</td>
            <td>{{$logoShape}}</td>
        </tr>

        <tr>
            <td>Start Date</td>
            <td>{{$logoShape}}</td>
        </tr>

        <tr>
            <td>End Date</td>
            <td>{{$logoShape}}</td>
        </tr>

    </table>
</div>
</body>
</html>