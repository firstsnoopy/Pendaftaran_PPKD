<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container Styles */
        .thankyou-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .thankyou-card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .thankyou-card img {
            max-width: 100px;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
            font-size: 2rem;
            margin-bottom: 15px;
        }

        p {
            color: #666;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .btn-home {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #4CAF50;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-home:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="thankyou-container">
        <div class="thankyou-card">
            <img src="{{ asset('admin/src/assets/images/logos/potoo.png') }}" alt="Thank You">
            <h1>Terima Kasih!</h1>
            <p>Data Anda telah disimpan. Silahkan tunggu pengumuman selanjutnya.</p>
            <a href="{{ url('pendaftaran') }}" class="btn-home">Kembali ke Beranda</a>
        </div>
    </div>
</body>

</html>
