<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk - Minimarket</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            color: #333;
        }

        .navbar {
            background-color: #2563eb;
            color: white;
            padding: 20px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            font-size: 24px;
        }

        .navbar span {
            font-size: 14px;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .header {
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 32px;
            margin-bottom: 8px;
            color: #1e293b;
        }

        .header p {
            color: #64748b;
        }

        .posts {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .card {
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .card h2 {
            color: #2563eb;
            margin-bottom: 12px;
        }

        .card p {
            color: #64748b;
            line-height: 1.6;
        }

        .badge {
            display: inline-block;
            background-color: #dbeafe;
            color: #2563eb;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            margin-bottom: 15px;
        }

        .empty {
            background: white;
            padding: 40px;
            text-align: center;
            border-radius: 12px;
        }

        footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            color: #94a3b8;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>🛒 Minimarket</h2>
        <span>Daftar Produk</span>
    </div>

    <div class="container">

        <div class="header">
            <h1>Daftar Produk</h1>
            <p>Informasi produk yang tersedia di minimarket.</p>
        </div>

        @if($posts->count() > 0)

            <div class="posts">

                @foreach($posts as $post)

                    <div class="card">

                        <span class="badge">Produk</span>

                        <h2>{{ $post->title }}</h2>

                        <p>{{ $post->content }}</p>

                    </div>

                @endforeach

            </div>

        @else

            <div class="empty">
                <h2>Belum Ada Produk</h2>
                <p>Data produk belum tersedia di database.</p>
            </div>

        @endif

    </div>

    <footer>
        &copy; 2026 Minimarket. Semua Hak Dilindungi.
    </footer>

</body>
</html>
