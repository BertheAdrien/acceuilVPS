<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bienvenue - Adrien Berthe</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    :root {
      --primary: #4361ee;
      --secondary: #4cc9f0;
      --accent: #f72585;
      --text: #f8f9fa;
      --bg-dark: #0f172a;
      --bg-card: #1e293b;
      --transition: all 0.3s ease;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', 'Segoe UI', sans-serif;
      background: var(--bg-dark);
      color: var(--text);
      line-height: 1.6;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      overflow-x: hidden;
    }

    header {
      padding: 2rem 0;
      text-align: center;
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
      padding-bottom: 4rem;
    }

    .profile {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.5rem;
    }

    .profile-pic {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 4px solid var(--text);
      margin-bottom: 1rem;
      object-fit: cover;
      background-color: #4361ee;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 3rem;
      color: white;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .subtitle {
      font-size: 1.2rem;
      opacity: 0.9;
      max-width: 600px;
      margin: 0 auto;
    }

    main {
      flex: 1;
      padding: 2rem 1rem 4rem;
      margin-top: -2rem;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .section-title {
      font-size: 1.8rem;
      margin-bottom: 1.5rem;
      padding-bottom: 0.5rem;
      position: relative;
      display: inline-block;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 50%;
      height: 3px;
      background: var(--accent);
    }

    .card {
      background: var(--bg-card);
      border-radius: 12px;
      overflow: hidden;
      transition: var(--transition);
      height: 100%;
      display: flex;
      flex-direction: column;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .card-header {
      padding: 1.5rem;
      background: linear-gradient(to right, var(--primary), var(--secondary));
      color: white;
      text-align: center;
    }

    .card-body {
      padding: 1.5rem;
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .card-icon {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: var(--secondary);
    }

    .card-title {
      font-size: 1.4rem;
      margin-bottom: 0.5rem;
      font-weight: 600;
    }

    .card-description {
      text-align: center;
      margin-bottom: 1.5rem;
      font-size: 0.95rem;
      opacity: 0.9;
    }

    .btn {
      display: inline-block;
      padding: 0.8rem 1.5rem;
      background: var(--primary);
      color: white;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 500;
      transition: var(--transition);
      border: none;
      cursor: pointer;
    }

    .btn:hover {
      background: var(--accent);
      transform: translateY(-2px);
    }

    .social-links {
      margin-top: 2rem;
      display: flex;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .social-link {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: var(--bg-card);
      color: var(--text);
      font-size: 1.5rem;
      transition: var(--transition);
      text-decoration: none;
    }

    .social-link:hover {
      background: var(--primary);
      transform: translateY(-3px);
    }

    footer {
      padding: 1.5rem;
      text-align: center;
      background: var(--bg-card);
      margin-top: auto;
    }

    .footer-text {
      opacity: 0.8;
      font-size: 0.9rem;
    }

    /* Mode sombre/clair toggle */
    .theme-toggle {
      position: fixed;
      top: 20px;
      right: 20px;
      background: var(--bg-card);
      border-radius: 50%;
      width: 45px;
      height: 45px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 100;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
      transition: var(--transition);
    }

    .theme-toggle:hover {
      transform: rotate(20deg);
    }

    /* Responsive design */
    @media (max-width: 768px) {
      h1 {
        font-size: 2rem;
      }
      
      .section-title {
        font-size: 1.5rem;
      }
      
      .profile-pic {
        width: 120px;
        height: 120px;
      }
      
      .card-grid {
        grid-template-columns: 1fr;
      }
    }

    /* Animation */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .animate {
      animation: fadeIn 0.8s ease forwards;
    }

    .animate-delay-1 {
      animation-delay: 0.2s;
      opacity: 0;
    }

    .animate-delay-2 {
      animation-delay: 0.4s;
      opacity: 0;
    }

    .animate-delay-3 {
      animation-delay: 0.6s;
      opacity: 0;
    }

    /* Accessibilité */
    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border-width: 0;
    }

    /* Mode clair (qui sera activé par le JavaScript) */
    body.light-mode {
      --bg-dark: #f0f4f8;
      --bg-card: #ffffff;
      --text: #1a202c;
    }

    /* Skip to content button for accessibility */
    .skip-link {
      position: absolute;
      top: -40px;
      left: 0;
      background: var(--accent);
      color: white;
      padding: 8px;
      z-index: 100;
      transition: top 0.3s;
    }

    .skip-link:focus {
      top: 0;
    }
  </style>
</head>
<body>
  <a href="#main-content" class="skip-link">Passer au contenu principal</a>
  
  <div class="theme-toggle" id="themeToggle" role="button" aria-label="Changer le thème">
    <i class="fas fa-moon"></i>
  </div>

  <header>
    <div class="profile">
      <div class="profile-pic" aria-hidden="true">AB</div>
      <h1>Adrien Berthe</h1>
      <p class="subtitle">Développeur web & Créateur de solutions numériques</p>
    </div>
  </header>

  <main id="main-content">
    <div class="container">
      <h2 class="section-title animate">Mes Projets</h2>
      
      <div class="card-grid">
        <div class="card animate animate-delay-1">
          <div class="card-header">
            <h3>Portfolio</h3>
          </div>
          <div class="card-body">
            <i class="fas fa-briefcase card-icon" aria-hidden="true"></i>
            <h4 class="card-title">Mon Portfolio</h4>
            <p class="card-description">Découvrez mes compétences, projets et expériences professionnelles.</p>
            <a href="https://portfolio.bertadrien.fr" class="btn" aria-label="Visiter mon portfolio">Découvrir</a>
          </div>
        </div>
        
        <div class="card animate animate-delay-2">
          <div class="card-header">
            <h3>ClickNeat</h3>
          </div>
          <div class="card-body">
            <i class="fas fa-utensils card-icon" aria-hidden="true"></i>
            <h4 class="card-title">ClickNeat</h4>
            <p class="card-description">Application de commande de repas en ligne.</p>
            <a href="https://clickneat.bertadrien.fr" class="btn" aria-label="Visiter ClickNeat">Explorer</a>
          </div>
        </div>
        
        <div class="card animate animate-delay-3">
          <div class="card-header">
            <h3>WelcomeTraining</h3>
          </div>
          <div class="card-body">
            <i class="fas fa-dumbbell card-icon" aria-hidden="true"></i>
            <h4 class="card-title">WelcomeTraining</h4>
            <p class="card-description">Plateforme de Signature en ligne destinée aux établissements scolaires.</p>
            <a href="https://welcometraining.bertadrien.fr" class="btn" aria-label="Visiter WelcomeTraining">S'entraîner</a>
          </div>
        </div>
      </div>
      
      <h2 class="section-title animate">Me Contacter</h2>
      
      <div class="social-links">
        <a href="https://www.linkedin.com/in/adrien-berthe" class="social-link" aria-label="LinkedIn">
          <i class="fab fa-linkedin-in" aria-hidden="true"></i>
        </a>
        <a href="https://github.com/BertheAdrien" class="social-link" aria-label="GitHub">
          <i class="fab fa-github" aria-hidden="true"></i>
        </a>
        <a href="berthe.adrien@yahoo.fr" class="social-link" aria-label="Email">
          <i class="fas fa-envelope" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </main>
  
  <footer>
    <p class="footer-text">© 2025 Adrien Berthe - Tous droits réservés</p>
  </footer>

  <script>
    // Animation à l'apparition des éléments
    document.addEventListener('DOMContentLoaded', function() {
      setTimeout(() => {
        document.querySelectorAll('.animate').forEach(el => {
          el.style.opacity = '1';
        });
      }, 100);
    });

    // Mode clair/sombre
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;
    const icon = themeToggle.querySelector('i');
    
    themeToggle.addEventListener('click', () => {
      body.classList.toggle('light-mode');
      
      if (body.classList.contains('light-mode')) {
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
      } else {
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
      }
    });
  </script>
</body>
</html>