<?php
function nembakCewek($jawaban) {
    // Cek jawaban yang diberikan
    if (strtolower($jawaban) == "ya") {
        return "<div class='response positive'>Yay! Aku sangat senang kamu mau menjadi bagian dari hidupku. ❤️</div>";
    } elseif (strtolower($jawaban) == "tidak") {
        return "<div class='response negative'>Tidak apa-apa, aku menghargai keputusanmu. Semoga kita tetap bisa berteman. 😊</div>";
    } else {
        return "<div class='response neutral'>Hmm, sepertinya kamu ragu. Coba jawab dengan jujur lagi ya! 😅</div>";
    }
}

$response = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil jawaban dari form
    $jawaban = $_POST["jawaban"];
    $response = nembakCewek($jawaban);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nembak Cewek</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            padding: 20px;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            text-align: left;
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }
        h2 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            padding: 10px;
            width: 100%;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .response {
            margin-top: 20px;
            padding: 15px;
            border-radius: 4px;
            font-size: 18px;
            font-weight: bold;
        }
        .positive {
            background-color: #d4edda;
            color: #155724;
        }
        .negative {
            background-color: #f8d7da;
            color: #721c24;
        }
        .neutral {
            background-color: #fff3cd;
            color: #856404;
        }

        /* Styling khusus untuk tampilan mobile */
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
            .container {
                width: 100%;
            }
            input[type="text"], button {
                font-size: 16px;
            }
            .response {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>HAI ISKA!!!</h2>
        <p>Aku punya sesuatu yang ingin aku sampaikan. Jawab dengan jujur ya!</p>

        <form method="post">
            <label for="jawaban">Aku suka kamu, mau nggak jadi pacarku? (ya/tidak): </label>
            <br><br>
            <input type="text" name="jawaban" id="jawaban" required>
            <br><br>
            <button type="submit">Kirim Jawaban</button>
        </form>

        <!-- Tampilkan hasil respons -->
        <?php
        if (!empty($response)) {
            echo $response;
        }
        ?>
    </div>
</body>
</html>
