<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi Kandidat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0e7ef;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 600px;
            text-align: center;
        }
        .container img {
            width: 200px;
            height: 200px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .container h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .details {
            display: flex;
            justify-content: space-around;

        }
        .details div {
            width: 45%;
        }
        .details h2 {
            font-size: 14;
            justify-content: start;
            margin-bottom: 10px;
        }
        .raur {
            margin-right: 340px;

        }
        .details p {
            font-size: 20px;
            color: gray;
        }
        .buttons {
            margin-top: 20px;
            margin-left: 380px
        }
        .buttons button {
            background-color: #4CAF50;
            color: white;
            width: 100px;
            height: 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;


        }
        .buttons button:last-child {
            background-color: #8a8a8a;
        }
        .buttons button:hover {
            opacity: 0.9;
        }
    </style>

</head>
<body>
    <div class="container">
        

        <div class="details">

            <img src="{{asset('images/kandidat/' . $kandidat->foto)}}" alt="Candidate Photo">
            <div>
                <h2>VISI</h2>
                <p>{{$kandidat->visi}}</p>
                <h2>MISI</h2>
                <p>{{$kandidat->misi}}</p>
            </div>
        </div>
        <div class="raur">
            <h3>{{$kandidat->nama_ketua}}</h3>
        </div>
        <div class="buttons">

            <button class="button btn">
            <a href="/" class="btn btn-sm" style="text-decoration: none; color: white">KEMBALI
            </button>
            </a>
        </div>

    </div>
</body>
</html>
