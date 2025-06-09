<!-- includes/head.php -->
<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $pageTitle ?? 'VK Light' ?></title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#282828',
            accent: '#d4a762',
          },
          fontFamily: {
            sans: ['Montserrat', 'sans-serif'],
          },
          spacing: {
            '18': '4.5rem',
            '22': '5.5rem',
          }
        }
      }
    }
  </script>
  
  <?php if ($isHomePage ?? false): ?>
    <!-- Swiper CSS - Alleen voor homepagina -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <?php endif; ?>

  <style type="text/tailwindcss">
    @layer utilities {
      .writing-vertical { writing-mode: vertical-rl; }
      .mobile-menu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
      }
      .mobile-menu.open {
        max-height: 100vh;
        height: 100vh;
        overflow-y: auto;
      }
      .feature-card {
        transition: all 0.3s ease;
      }
      .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1);
      }
      .step-number {
        width: 3rem;
        height: 3rem;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid #d4a762;
        color: #d4a762;
        font-weight: bold;
        border-radius: 9999px;
        margin-right: 1.5rem;
        flex-shrink: 0;
      }
      .timeline::before {
        content: '';
        position: absolute;
        top: 0;
        left: 1.5rem;
        height: 100%;
        width: 2px;
        background: #d4a762;
      }
      <?php if ($isHomePage ?? false): ?>
        /* Homepage-specifieke stijlen */
        .diagonal-layout {
          transform: rotate(90deg) translateY(-50%);
          transform-origin: left top;
          left: 2.5cm;
        }
        .diagonal-layout-right {
          transform: rotate(-90deg) translateY(-50%);
          transform-origin: right top;
          right: 2.5cm;
        }
        .slider-content {
          max-width: 42rem;
        }
        @media (max-width: 767px) {
          .slider-content {
            max-width: 100%;
            padding-top: 6rem;
          }
        }
      <?php endif; ?>
    }
  </style>

  <!-- Font Awesome & Google Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>