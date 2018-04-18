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
    </style>
</head>
<body>


<div align="center">
    <table>

        <tr>
            <td>Name:</td>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <td> Email:</td>
            <td>{{$email}}</td>
        </tr>
        <tr>
            <td>Company Name:</td>
            <td>{{$cname}}</td>
        </tr>

        <tr>
            <td>Message</td>
            <td>{{$sms}}</td>
        </tr>

        <tr>
            <td>Discount</td>
            <td>{{$discountcode}}</td>
        </tr>

        <tr>
            <td>Start Date</td>
            <td>{{$codeStartDate}}</td>
        </tr>

        <tr>
            <td>End Date</td>
            <td>{{$codeEndDate}}</td>
        </tr>

    </table>
</div>
</body>
</html>