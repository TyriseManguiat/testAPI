<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
    <!-- Import Google Font for Japanese-inspired style -->
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Sawarabi Mincho', serif;
            /* Japanese-inspired font */
            margin: 0;
            padding: 0;
            background-image: url('https://i.pinimg.com/originals/76/a0/b9/76a0b92e3b694de08e9d637676478bc1.gif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        h1 {
            text-align: center;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            font-size: 2.5em;
        }

        .table-container {
            position: relative;
            width: 80%;
            background-color: rgba(0, 0, 0, 0.6);
            /* Transparent dark background for overlay effect */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(139, 0, 0, 0.8), 0 0 25px rgba(139, 0, 0, 0.6);
            /* Darker glowing red effect */
            backdrop-filter: blur(5px);
            /* Slight blur for a cool effect */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            color: #fff;
        }

        th,
        td {
            padding: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            text-align: left;
        }

        th {
            background-color: rgba(139, 0, 0, 0.7);
            /* Darker red header */
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1);
        }

        tr:hover {
            background-color: rgba(139, 0, 0, 0.3);
            /* Darker red hover effect */
        }

        img.flag {
            width: 30px;
            height: auto;
            vertical-align: middle;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="table-container">
        <h1>Weather Information in Manila</h1>
        <table>
            <thead>
                <tr>
                    <th>Location</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>Elevation (m)</th>
                    <th>Feature Code </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($weatherData["results"] as $result)
                    <tr>
                        <td>
                            <img class="flag" src="https://flagcdn.com/{{ strtolower($result['country_code']) }}.svg"
                                alt="{{ $result['country_code'] }} flag">
                            {{ $result["name"] }}
                        </td>
                        <td>{{ $result["longitude"] }}</td>
                        <td>{{ $result["latitude"] }}</td>
                        <td>{{ $result["elevation"] }}</td>
                        <td>{{ $result["feature_code"] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>