<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Message</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background: #121212;
            margin: 0;
            padding: 0;
            color: #ffffff;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Email Table Layout */
        table {
            width: 100%;
            max-width: 700px;
            margin: 40px auto;
            background: #1e1e1e;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
            border: none;
            padding: 20px;
        }
        /* Header Styles */
        h2 {
            font-size: 24px;
            color: #00adee;
            text-align: center;
            margin: 20px 0;
            font-weight: bold;
        }

        /* Content Styles */
        .content {
            font-size: 16px;
            color: #d1d1d1;
            line-height: 1.8;
            margin: 20px 0;
        }

        .content p {
            margin-bottom: 10px;
        }

        .content a {
            color: #00adee;
            text-decoration: none;
            font-weight: 500;
        }

        .content a:hover {
            text-decoration: underline;
        }

        /* Footer Styles */
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }

        .footer a {
            color: #00adee;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Divider */
        .divider {
            margin: 20px 0;
            border-top: 1px solid #444;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>
                <h2>Client Message Received</h2>
                <div class="content">
                    <p>Hi, Admin</p>
                    <p>You received the following message:</p>
                    <p><strong>Name:</strong> {{ $request->name }}</p>
                    <p><strong>Phone:</strong> {{ $request->phone }}</p>
                    <p><strong>Email:</strong> {{ $request->email }}</p>
                    <p><strong>Message:</strong> {{ $request->message }}</p>
                </div>
                <div class="divider"></div>
                <div class="footer">
                    <p>&copy; 2025 Neptune Travel And Tours. All rights reserved.</p>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>