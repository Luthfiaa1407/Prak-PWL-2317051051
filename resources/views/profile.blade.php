<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Card</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #9CAF88 0%, #87A96B 100%);
      text-align: center;
      margin-top: 50px;
    }

    .profile-card {
      background: #fff;
      border-radius: 15px;
      padding: 35px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      text-align: center;
      max-width: 350px;
      width: 100%;
      margin: auto;
    }

    .profile-image {
      margin-bottom: 25px;
    }

    .profile-image img {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      border: 4px solid #9CAF88;
      box-shadow: 0 4px 15px rgba(156, 175, 136, 0.3);
      object-fit: cover;
    }

    .profile-info {
      margin-top: 20px;
    }

    .info-item {
      background: #f8faf7;
      margin: 12px 0;
      padding: 15px 20px;
      border-radius: 10px;
      border-left: 4px solid #9CAF88;
      box-shadow: 0 2px 8px rgba(156, 175, 136, 0.1);
      position: relative;
      overflow: hidden;
    }

    .label {
      font-weight: 700;
      color: #333;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 5px;
      display: block;
    }

    .value {
      font-size: 18px;
      color: #555;
      font-weight: 500;
    }

    @media (max-width: 480px) {
      .profile-card {
        padding: 30px 20px;
        margin: 10px;
      }

      .profile-image img {
        width: 120px;
        height: 120px;
      }

      .info-item {
        padding: 15px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="profile-card">
    <div class="profile-image">
      <!-- Gambar profil default -->
      <img src="{{ asset('fia.jpg') }}" alt="Profile Picture">
    </div>

    <div class="profile-info">
      <div class="info-item">
        <span class="label">Nama:</span>
        <span class="value">{{ $nama }}</span>
      </div>

      <div class="info-item">
        <span class="label">NPM:</span>
        <span class="value">{{ $nim }}</span>
      </div>

      <div class="info-item">
        <span class="label">Kelas:</span>
        <span class="value">{{ $kelas }}</span>
      </div>
    </div>
  </div>
</body>
</html>
