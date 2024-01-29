<!DOCTYPE html>
<html>

<head>
    <title>Contact Form Submission</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #333;
            padding: 20px;
        }

        table {
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th {
            background: #022859;
            color: #FFFFFF;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        td {
            border-top: 1px solid #ddd;
        }

        hr {
            border: 1px solid #ddd;
        }

        p {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <th colspan="2">
                <h2>Contact Form Submission</h2>
            </th>
        </tr>
        <tr>
            <td><strong>Name:</strong></td>
            <td>{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td><strong>Email:</strong></td>
            <td>{{ $data['email'] }}</td>
        </tr>
        <tr>
            <td><strong>Phone:</strong></td>
            <td>{{ $data['phone'] }}</td>
        </tr>
        <tr>
            <td><strong>Country:</strong></td>
            <td>{{ $data['country'] }}</td>
        </tr>
        <tr>
            <td><strong>Cooperation Plan of Interest:</strong></td>
            <td>{{ $data['interest'] }}</td>
        </tr>
    
        <tr>
            <td colspan="2">
                <p><strong>Message:</strong></p>
                <p>{{ $data['message'] }}</p>
            </td>
        </tr>
    </table>

</body>

</html>
