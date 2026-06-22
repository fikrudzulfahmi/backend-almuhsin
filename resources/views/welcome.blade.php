<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Backend - Pesantren</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Mendaftarkan Color Palette dari gambar kamu */
        :root {
            --color-light-green: #C1E899;
            --color-brown: #9A6735;
            --color-pale-green: #E6F0DC;
            --color-dark-green: #55883B;
            --text-main: #333333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--color-pale-green);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* Pola titik-titik samar untuk background agar tidak terlalu sepi */
            background-image: radial-gradient(var(--color-light-green) 1.5px, transparent 1.5px);
            background-size: 25px 25px;
        }

        .card {
            background: #ffffff;
            padding: 3rem 2rem;
            border-radius: 24px;
            box-shadow: 0 15px 35px rgba(85, 136, 59, 0.15);
            text-align: center;
            max-width: 450px;
            width: 90%;
            border-top: 8px solid var(--color-dark-green);
            position: relative;
        }

        .icon-wrapper {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            display: inline-block;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            background-color: var(--color-light-green);
            color: var(--color-dark-green);
            padding: 0.4rem 1.2rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        /* Animasi titik berkedip */
        .status-dot {
            width: 10px;
            height: 10px;
            background-color: var(--color-dark-green);
            border-radius: 50%;
            margin-right: 8px;
            animation: pulse 2s infinite;
        }

        h1 {
            color: var(--color-dark-green);
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .btn {
            text-decoration: none;
            padding: 0.8rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            cursor: default;
            /* Karena ini cuma tampilan, bukan link betulan */
        }

        .btn-primary {
            background-color: var(--color-dark-green);
            color: #ffffff;
            box-shadow: 0 4px 15px rgba(85, 136, 59, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--color-brown);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(154, 103, 53, 0.4);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--color-brown);
            border: 2px solid var(--color-brown);
        }

        .btn-secondary:hover {
            background-color: var(--color-light-green);
            border-color: var(--color-light-green);
            color: var(--color-dark-green);
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(85, 136, 59, 0.7);
            }

            70% {
                box-shadow: 0 0 0 8px rgba(85, 136, 59, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(85, 136, 59, 0);
            }
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="icon-wrapper">
            🌿
        </div>

        <div class="status-badge">
            <span class="status-dot"></span>
            System Online & Running
        </div>

        <h1>API Pesantren</h1>
        <p>Selamat datang! Sistem backend administrasi pondok pesantren sedang berjalan dengan lancar. Siap menerima request dari Frontend.</p>

        <div class="btn-group">
            <div class="btn btn-primary">Uji Endpoint di Postman</div>
            <div class="btn btn-secondary">Laravel 11.x & PHP 8.2</div>
        </div>
    </div>

</body>

</html>