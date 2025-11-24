<?php
// thankyou.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Thank You - SEMCOM Alumni</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

  <style>
    body {
      margin: 0;
      padding: 0;
      background: #e5eaf5;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;       /* Full screen height */
    }

    .thank-wrapper {
      width: 100%;
      max-width: 600px;
      padding: 20px;
    }

    .thank-card {
      width: 100%;
      background: #fff;
      border-radius: 16px;
      padding: 40px 30px;
      text-align: center;
      box-shadow: 0 8px 25px rgba(0,0,0,0.10);
      animation: fadeIn 0.6s ease;
    }

    .logo {
      max-height: 510px;
      width: auto;
      margin-bottom: 100px;
    }

    h2 {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 15px;
    }

    p {
      font-size: 1.1rem;
      color: #444;
      margin-bottom: 25px;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 576px) {
      .thank-card {
        padding: 30px 20px;
      }
      h2 {
        font-size: 1.8rem;
      }
      p {
        font-size: 1rem;
      }
      .logo {
        max-height: 190px;
        margin-bottom:100px; 
      }
    }
  </style>
</head>
<body>

  <div class="thank-wrapper">
    <div class="thank-card">
      <img src="../assets/images/alumni_images/Samarpan_Logo.png" 
           alt="Event Logo" class="logo">

      <h2>Thank You!</h2>

      <p>Your response has been successfully submitted.<br>
         We look forward to seeing you at the Alumni Meet.</p>

      <a href="alumni_form.php" class="btn btn-primary btn-lg mt-2">
        Back to Form
      </a>
    </div>
  </div>

</body>
</html>
