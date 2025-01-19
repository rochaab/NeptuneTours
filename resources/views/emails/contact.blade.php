<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Message</title>
    <style>
        /* Global Styles for Body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Table Layout for Email */
        table {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Heading */
        h2 {
            font-size: 24px;
            color: #337AB7;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Card View Styles */
        .card {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card h3 {
            font-size: 20px;
            color: #337AB7;
            margin-bottom: 10px;
        }

        /* Content Styles */
        .content {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        .content p {
            margin-bottom: 10px;
        }

        .content strong {
            font-weight: bold;
            color: #2c3e50;
        }

        /* Button Style */
        .button {
            background-color: #337AB7;
            color: #fff;
            text-decoration: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }

        /* Footer Style */
        .footer {
            text-align: center;
            font-size: 14px;
            color: #aaa;
            margin-top: 20px;
        }

        /* Responsive Styles */
        @media screen and (max-width: 600px) {
            h2 {
                font-size: 20px;
            }

            .content {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <td>
                <h2>Contact Us Message</h2>

                <!-- Card View for Message Content -->
                <div class="card">
                    <h3>Message Details</h3>
                    <div class="content">
                        <p><strong>Name:</strong> {{ $request->name }}</p>
                        <p><strong>Email:</strong> {{ $request->email }}</p>
                        <p><strong>Message:</strong> {{ $request->message }}</p>
                    </div>
                </div>

                <div class="footer">
                    <!-- Footer content can go here -->
                </div>
            </td>
        </tr>
    </table>

</body>
</html>
