
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments) };
            t = l.createElement(r); t.async = 1; t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "rrpqx03u5t");
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16696952717"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-16696952717');
    </script>

    <!-- Event snippet for clique de saida conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function () {
                if (typeof (url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-16696952717/welKCJCdt9EZEI2P3Zk-',
                'value': 1.0,
                'currency': 'BRL',
                'event_callback': callback
            });
            return false;
        }
    </script>
	    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7WRN9H9TVP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-7WRN9H9TVP');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa Pé-de-Meia 2025 | Conteúdo sobre Consulta e Inscrição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #1e5799;
            --secondary: #28a745;
            --accent: #ffc107;
            --light: #f8f9fa;
            --dark: #212529;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, var(--primary) 0%, #207cca 100%);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            letter-spacing: -0.5px;
            color: white;
        }

            .navbar-brand i {
                color: var(--accent);
                margin-right: 10px;
            }

        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            transition: all 0.3s;
            padding: 8px 15px !important;
            border-radius: 30px;
            margin: 0 3px;
        }

            .nav-link:hover, .nav-link:focus, .nav-link.active {
                color: white !important;
                background: rgba(255, 255, 255, 0.15);
            }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary) 0%, #2c8ed6 100%);
            color: white;
            padding: 100px 0 70px;
            position: relative;
            overflow: hidden;
            border-radius: 0 0 50px 50px;
        }

            .hero-section::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.08" d="M0,160L48,149.3C96,139,192,117,288,122.7C384,128,480,160,576,165.3C672,171,768,149,864,138.7C960,128,1056,128,1152,138.7C1248,149,1344,171,1392,181.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>');
                background-size: cover;
                background-position: center bottom;
            }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.2rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            line-height: 1.2;
            animation: fadeInDown 1s ease;
        }

        .hero-subtitle {
            font-size: 1.4rem;
            font-weight: 300;
            margin-bottom: 30px;
            max-width: 700px;
            animation: fadeIn 1.5s ease;
        }

        .value-highlight {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--accent);
            margin: 25px 0 10px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            line-height: 1;
            animation: pulse 2s infinite;
        }

        .btn-hero {
            background: var(--secondary);
            color: white;
            font-weight: 600;
            padding: 14px 35px;
            border-radius: 50px;
            font-size: 1.1rem;
            transition: all 0.3s;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            animation: fadeInUp 1s ease;
        }

            .btn-hero:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
                background: #218838;
            }

        /* Quiz Section */
        .quiz-container {
            max-width: 800px;
            margin: -50px auto 50px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            position: relative;
            z-index: 10;
            animation: fadeInUp 1s ease;
        }

        .quiz-header {
            background: linear-gradient(135deg, var(--primary) 0%, #1a4a7a 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .quiz-body {
            padding: 40px;
            background: #f8fafc;
        }

        .progress {
            height: 8px;
            margin-bottom: 25px;
            border-radius: 4px;
            overflow: visible;
        }

        .progress-bar {
            background: var(--secondary);
            transition: width 0.5s ease;
        }

        .question {
            display: none;
            animation-duration: 0.5s;
        }

            .question.active {
                display: block;
                animation-name: fadeIn;
            }

        .btn-option {
            display: block;
            width: 100%;
            padding: 15px 20px;
            margin-bottom: 15px;
            background: white;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            animation: fadeIn 0.5s ease;
        }

            .btn-option:hover {
                border-color: var(--primary);
                background: #f0f7ff;
                transform: translateY(-3px);
            }

        .btn-next {
            display: block;
            width: 100%;
            padding: 15px;
            background: var(--secondary);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s;
            animation: fadeIn 0.5s ease;
        }

            .btn-next:hover {
                background: #218838;
                transform: translateY(-3px);
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }

        .form-control {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s;
        }

            .form-control:focus {
                border-color: var(--primary);
                outline: none;
                box-shadow: 0 0 0 3px rgba(30, 87, 153, 0.1);
            }

        #loading {
            display: none;
            text-align: center;
            padding: 30px;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid rgba(0,0,0,0.1);
            border-left-color: var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }

        #error-message {
            display: none;
            color: #dc3545;
            margin: 15px 0;
            padding: 15px;
            background: rgba(220, 53, 69, 0.1);
            border-radius: 8px;
            border-left: 4px solid #dc3545;
            animation: shake 0.5s;
        }

        .money-badge {
            display: inline-block;
            background: var(--accent);
            color: #212529;
            font-weight: 700;
            padding: 10px 20px;
            border-radius: 30px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            animation: float 3s ease-in-out infinite;
        }

        /* Information Section */
        .info-section {
            padding: 80px 0;
            background: white;
        }

        .section-title {
            position: relative;
            margin-bottom: 40px;
            padding-bottom: 15px;
            font-weight: 700;
            color: var(--primary);
            text-align: center;
        }

            .section-title::after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                width: 100px;
                height: 5px;
                background: var(--secondary);
                border-radius: 3px;
            }

        .card-feature {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s;
            height: 100%;
            background: white;
            margin-bottom: 30px;
            border-top: 5px solid var(--primary);
            animation: fadeIn 1s ease;
        }

            .card-feature:hover {
                transform: translateY(-10px) scale(1.02);
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            }

        .card-header {
            background: linear-gradient(135deg, var(--primary) 0%, #2c8ed6 100%);
            color: white;
            padding: 25px;
            border: none;
        }

        .card-body {
            padding: 30px;
        }

        .feature-list li {
            margin-bottom: 12px;
            padding-left: 30px;
            position: relative;
            font-size: 1.05rem;
        }

            .feature-list li::before {
                content: "\f00c";
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                position: absolute;
                left: 0;
                color: var(--secondary);
                font-size: 1.2rem;
            }

        .step-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
            border-top: 4px solid var(--secondary);
            height: 100%;
            transition: all 0.3s;
        }

            .step-card:hover {
                transform: translateY(-5px);
            }

        .step-number {
            display: inline-block;
            width: 45px;
            height: 45px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 45px;
            font-weight: 800;
            margin-right: 15px;
            font-size: 1.3rem;
        }

        /* FAQ Section */
        .faq-section {
            padding: 80px 0;
            background: #f8fafc;
        }

        .faq-item {
            margin-bottom: 15px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .faq-question {
            width: 100%;
            padding: 18px 25px;
            background: white;
            border: none;
            text-align: left;
            font-weight: 600;
            color: var(--primary);
            position: relative;
            font-size: 1.05rem;
            cursor: pointer;
            transition: all 0.3s;
        }

            .faq-question:after {
                content: '\f107';
                font-family: 'Font Awesome 5 Free';
                font-weight: 900;
                position: absolute;
                right: 20px;
                top: 50%;
                transform: translateY(-50%);
                transition: transform 0.3s;
            }

            .faq-question[aria-expanded="true"]:after {
                transform: translateY(-50%) rotate(180deg);
            }

            .faq-question:hover, .faq-question:focus {
                background: #f8fafc;
            }

        .faq-answer {
            padding: 0 25px;
            background: #f8fafc;
            border-top: 1px solid #eee;
        }

        .collapse:not(.show) {
            display: none;
        }

        .collapsing {
            height: 0;
            overflow: hidden;
            transition: height 0.35s ease;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--primary) 0%, #1a4a7a 100%);
            color: white;
            padding: 80px 0 30px;
            position: relative;
        }

            footer::before {
                content: "";
                position: absolute;
                top: -50px;
                left: 0;
                width: 100%;
                height: 100px;
                background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%231e5799" d="M0,160L48,149.3C96,139,192,117,288,122.7C384,128,480,160,576,165.3C672,171,768,149,864,138.7C960,128,1056,128,1152,138.7C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
                background-size: cover;
                background-position: center;
            }

        .footer-title {
            font-size: 1.4rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

            .footer-title::after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 50px;
                height: 3px;
                background: var(--accent);
            }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            display: block;
            margin-bottom: 12px;
            transition: all 0.3s;
            text-decoration: none;
        }

            .footer-links a:hover {
                color: white;
                padding-left: 5px;
            }

        .social-icons a {
            display: inline-block;
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 45px;
            color: white;
            margin-right: 10px;
            transition: all 0.3s;
            font-size: 1.2rem;
        }

            .social-icons a:hover {
                background: var(--accent);
                transform: translateY(-5px);
                color: #212529;
            }

        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            padding-top: 25px;
            margin-top: 50px;
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @keyframes shake {
            0%, 100% {
                transform: translateX(0);
            }

            10%, 30%, 50%, 70%, 90% {
                transform: translateX(-5px);
            }

            20%, 40%, 60%, 80% {
                transform: translateX(5px);
            }
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.4rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
            }

            .value-highlight {
                font-size: 2.8rem;
            }

            .navbar-brand {
                font-size: 1.5rem;
            }

            .quiz-container {
                margin: -30px 15px 30px;
            }

            .quiz-body {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-piggy-bank"></i>Pé-de-Meia
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#quiz">Quiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#info">Informações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light" href="#quiz">
                            <i class="fas fa-search me-2"></i>Consultar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 hero-content">
                    <span class="money-badge">
                        <i class="fas fa-coins me-2"></i>Duzentos reais disponível!
                    </span>
                    <h1 class="hero-title">Programa Pé-de-Meia 2025</h1>
                    <p class="hero-subtitle">Incentivo financeiro para estudantes do ensino médio público. Ganhe até R$9.200 durante os três anos de estudo para investir no seu futuro!</p>

                    <div class="d-flex align-items-center mb-4">
                        <div>
                            <span class="value-highlight">R$9.200</span>
                            <p class="mb-0">Valor máximo que você pode receber</p>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="#quiz" class="btn btn-hero pulse">
                            <i class="fas fa-search-dollar me-2"></i>Consulte seu Benefício
                        </a>
                        <a href="#info" class="btn btn-hero btn-outline-light">
                            <i class="fas fa-info-circle me-2"></i>Saiba Mais
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block text-center">
                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='400' height='400' viewBox='0 0 400 400'><rect width='400' height='400' fill='%232c8ed6' opacity='0.2' rx='20'/><circle cx='200' cy='180' r='100' fill='%231e5799' opacity='0.6'/><rect x='200' y='300' width='100' height='40' fill='%23ffffff' rx='5'/><path d='M150,120 Q250,80 350,120 L350,220 L150,220 Z' fill='%23ffffff'/></svg>" alt="Estudante recebendo benefício" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Quiz Section -->
    <div class="container" id="quiz">
        <div class="quiz-container">
            <div class="quiz-header">
                <h2><i class="fas fa-comments me-2"></i>Assistente Virtual do Pé-de-Meia</h2>
                <p class="mb-0">Descubra se seu nome está na lista de pagamentos do governo</p>
            </div>
            <div class="quiz-body">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                </div>

                <!-- Saudação -->
                <div class="question active" id="question0">
                    <h4>Você Está na Lista do Pé-de-Meia 2025?</h4>
                    <p>Responda 3 perguntas rápidas para descobrir se você pode receber o benefício</p>
                    <button id="btn1" class="btn-next" onclick="nextQuestion()">INICIAR CONSULTA AGORA</button>
                </div>

                <!-- Pergunta 1 -->
                <div class="question" id="question1">
                    <h4>1 - Você está no Ensino Médio atualmente?</h4>
                    <button class="btn-option" onclick="selectOption(this, 'EnsinoMedio')">SIM</button>
                    <button class="btn-option" onclick="selectOption(this, 'NaoEM')">NÃO</button>
                </div>

                <!-- Pergunta 2 -->
                <div class="question" id="question2">
                    <h4>2 - Você já fez o ENEM alguma vez?</h4>
                    <button class="btn-option" onclick="selectOption(this, 'FezENEM')">SIM</button>
                    <button class="btn-option" onclick="selectOption(this, 'NaoENEM')">NÃO</button>
                </div>

                <!-- Pergunta 3 -->
                <div class="question" id="question3">
                    <h4>3 - Você está estudando em escola pública este ano?</h4>
                    <button class="btn-option" onclick="selectOption(this, 'publica')">SIM</button>
                    <button class="btn-option" onclick="selectOption(this, 'particular')">NÃO</button>
                </div>

                <!-- Captura de dados -->
                <div class="question" id="question4">
                    <h4>Estamos quase lá...</h4>
                    <p>Com base nas suas respostas, agora falta apenas um passo para consultar se você tem direito ao benefício do Programa Pé-de-Meia.</p>

                    <div>
                        <label for="name"><b>Qual seu nome completo?</b></label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div>
                        <label for="email"><b>Seu melhor e-mail:</b></label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div style="margin:15px 0">
                        <input type="checkbox" id="privacyPolicy" required>
                        <label for="privacyPolicy" style="font-size:0.55rem">
                            Eu confirmo que desejo receber comunicações e concordo com a <a href="https://colegiomarcodes.com.br/politica.php" style="color: var(--primary);">Política de Privacidade</a> e <a href="https://colegiomarcodes.com.br/termo.html" style="color: var(--primary);">termo de uso</a>.
                        </label>
                    </div>
                    <div id="loading" style="display:none;text-align:center">
                        <div class="spinner"></div>
                        <p>Consultando se você tem direito ao benefício...</p>
                    </div>

                    <div id="error-message"></div>

                    <button class="btn-next" id="submit-btn" onclick="submitForm()">CONFIRMAR CADASTRO</button>
                </div>
                <br>
                <div style="text-align:center;font-size:0.55rem">
                    <a href="https://colegiomarcodes.com.br/politica.php" style="color: var(--primary);">Política de Privacidade</a> e
                    <a href="https://colegiomarcodes.com.br/termo.html" style="color: var(--primary);">Termo de uso</a>
                </div>
                <br>
                <p style="font-size:0.8rem">
                    Ao preencher seus dados, você autoriza nossa plataforma e/ou instituições educacionais parceiras a entrarem em contato pelos canais informados para oferecer conteúdos relacionados ao seu interesse. Seus direitos estão garantidos pela Lei Geral de Proteção de Dados (Lei 13.709/2018).
                </p>
            </div>
        </div>
    </div>

    <!-- Information Section -->
    <section class="info-section" id="info">
        <div class="container">
            <h2 class="section-title">Tudo sobre o Programa Pé-de-Meia</h2>
            <p class="lead text-center mb-5">Saiba como funciona, quem pode participar e como receber o benefício</p>

            <div class="row">
                <div class="col-md-6">
                    <div class="card-feature">
                        <div class="card-header">
                            <h4 class="mb-0">Quem tem direito ao benefício?</h4>
                        </div>
                        <div class="card-body">
                            <ul class="feature-list">
                                <li>Estar matriculado no ensino médio de escola pública</li>
                                <li>Ter cadastro no Cadastro Único (CadÚnico) atualizado</li>
                                <li>Manter frequência escolar mínima de 80%</li>
                                <li>Renda familiar per capita de até 1/2 salário mínimo</li>
                                <li>Não receber outros benefícios educacionais federais</li>
                            </ul>
                            <div class="mt-4 p-3 bg-light rounded-3">
                                <p class="mb-0"><i class="fas fa-info-circle me-2 text-primary"></i>As inscrições para 2025 estão abertas! Não perca esta oportunidade.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card-feature">
                        <div class="card-header">
                            <h4 class="mb-0">Valores e Benefícios</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="step-card text-center">
                                        <div class="step-number">1</div>
                                        <h5>Incentivo à Matrícula</h5>
                                        <p class="mb-0">R$ 200,00</p>
                                        <small>Pago no início do ano</small>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="step-card text-center">
                                        <div class="step-number">2</div>
                                        <h5>Por Frequência</h5>
                                        <p class="mb-0">R$ 200/mês</p>
                                        <small>Com 80% de presença</small>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="step-card text-center">
                                        <div class="step-number">3</div>
                                        <h5>Conclusão do Ano</h5>
                                        <p class="mb-0">R$ 1.000</p>
                                        <small>Com aprovação</small>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="step-card text-center">
                                        <div class="step-number">4</div>
                                        <h5>Realização do ENEM</h5>
                                        <p class="mb-0">R$ 200</p>
                                        <small>No 3º ano</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#quiz" class="btn btn-primary btn-lg py-3 px-5">
                    <i class="fas fa-edit me-2"></i>Faça o Teste Agora
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="container">
            <h2 class="section-title">Perguntas Frequentes</h2>
            <p class="lead text-center mb-5">Tire suas dúvidas sobre o Programa Pé-de-Meia</p>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="faq-item">
                        <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                            Quando posso sacar o dinheiro do Pé-de-Meia?
                        </button>
                        <div id="faq1" class="collapse faq-answer">
                            <div class="p-4">
                                <p>Você pode sacar até 50% do valor acumulado a cada ano durante o ensino médio. O valor total só pode ser sacado após a conclusão do 3º ano e prestação do ENEM.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                            Como consulto meu saldo do Pé-de-Meia?
                        </button>
                        <div id="faq2" class="collapse faq-answer">
                            <div class="p-4">
                                <p>O saldo pode ser consultado exclusivamente pelo aplicativo Jornada do Estudante. Basta fazer login com seu CPF e data de nascimento para visualizar seu saldo acumulado.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                            Quanto tempo demora para o dinheiro cair na conta?
                        </button>
                        <div id="faq3" class="collapse faq-answer">
                            <div class="p-4">
                                <p>Após solicitar o saque pelo aplicativo, o dinheiro é depositado em até 3 dias úteis na conta bancária cadastrada.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                            Posso participar se estiver em escola particular?
                        </button>
                        <div id="faq4" class="collapse faq-answer">
                            <div class="p-4">
                                <p>Não, o Programa Pé-de-Meia é exclusivo para estudantes matriculados na rede pública de ensino médio.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                            Perco o benefício se mudar de escola?
                        </button>
                        <div id="faq5" class="collapse faq-answer">
                            <div class="p-4">
                                <p>Não, desde que você permaneça matriculado em uma escola pública de ensino médio e mantenha os requisitos do programa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h4 class="footer-title">Programa Pé-de-Meia</h4>
                    <p style="font-size:9px">
                        Esta página contém conteúdos atualizados sobre programas sociais do Governo Federal voltados às famílias brasileiras. Nosso objetivo é informar e orientar os leitores com base em dados públicos, de forma acessível e clara.

                        No entanto, é importante destacar que o site sistema1.net é um portal independente e não possui qualquer vínculo com o Governo Federal, órgãos públicos ou instituições oficiais.
                    </p>
                </div>

                <div class="col-md-4 mb-4">
                    <h4 class="footer-title">Links Rápidos</h4>
                    <div class="footer-links">
                        <a href="#quiz">Quiz de Elegibilidade</a>
                        <a href="#info">Informações do Programa</a>
                        <a href="#info">Como se Inscrever</a>
                        <a href="#info">Valores e Benefícios</a>
                        <a href="#faq">Perguntas Frequentes</a>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <h4 class="footer-title">Contato</h4>
                    <div class="footer-links">
                        <a href="tel:0800616161"><i class="fas fa-phone me-2"></i>0800 616 161</a>
                        <a href="mailto:pedemeia@educacao.gov.br"><i class="fas fa-envelope me-2"></i>suporte4sistema1@gmail.com</a>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2025 Programa Pé-de-Meia - Governo Federal. Todos os direitos reservados.</p>
                <p class="mb-0" style="font-size:9px">
                    O conteúdo desta página tem caráter exclusivamente informativo. O site auxiliobeneficios.colegiomarcodes.com.br não possui qualquer vínculo com órgãos governamentais, prefeituras, instituições públicas ou os responsáveis oficiais pelos programas sociais aqui mencionados.

                    Nosso objetivo é informar e orientar os leitores de forma clara e acessível sobre programas sociais disponíveis à população, como benefícios, auxílios, inscrições e critérios gerais.

                    Para obter informações oficiais, orientamos que o cidadão acesse os sites institucionais do governo ou dos órgãos responsáveis.
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function getUTMTerm() {
            const params = new URLSearchParams(window.location.search);
            return params.get('utm_term');
        }
        const utmTerm = getUTMTerm();

        function getIdCampanha() {
            const params = new URLSearchParams(window.location.search);
            return params.get('gad_campaignid');
        }
        const idCampanha = getIdCampanha();

        // Funções do Quiz
        let currentQuestion = 0;
        const totalQuestions = 4;
        const answers = {};
        const redirectUrl = "https://vafast.xyz/descubra-como-o-programa-pe-de-meia-e-o-auxilio-estudante-2025-podem-transformar-sua-educacao/?utm_source=GoogleAds&utm_medium=Auto_PeDeMeia_S1&utm_campaign=Auto_PeDeMeia_S1_NEW";

        //const idCampanha = "S1_PeDeMeia"; // Definindo o ID da campanha
        //const utmTerm = "default_term"; // Definindo o termo UTM padrão

        function updateProgress() {
            const progress = (currentQuestion / totalQuestions) * 100;
            document.querySelector('.progress-bar').style.width = progress + '%';
        }

        function nextQuestion() {
            document.querySelectorAll('.question').forEach(q => q.classList.remove('active'));
            currentQuestion++;
            document.getElementById('question' + currentQuestion).classList.add('active');
            updateProgress();
        }

        function selectOption(button, value) {
            button.parentNode.querySelectorAll('.btn-option').forEach(btn => {
                btn.style.backgroundColor = '';
                btn.style.borderColor = '#e0e0e0';
            });

            button.style.backgroundColor = '#e3f2fd';
            button.style.borderColor = '#3498db';
            answers['question' + currentQuestion] = value;

            setTimeout(nextQuestion, 300);
        }

        function submitForm() {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const privacyChecked = document.getElementById('privacyPolicy').checked;
            const privacyCheckbox = document.getElementById('privacyPolicy');
            const errorElement = document.getElementById('error-message');

            errorElement.style.display = 'none';
            errorElement.innerHTML = '';

            if (!name) {
                errorElement.innerHTML = 'Por favor, informe seu nome completo.';
                errorElement.style.display = 'block';
                return;
            }

            if (!email || !email.includes('@') || !email.includes('.')) {
                errorElement.innerHTML = 'Por favor, insira um e-mail válido.';
                errorElement.style.display = 'block';
                return;
            }

            if (!privacyChecked) {
                errorElement.innerHTML = 'Você deve marcar a caixinha de política de privacidade para continuar.';
                privacyCheckbox.focus();
                document.getElementById('privacyPolicy').style.outline = '4px solid red';
                errorElement.style.display = 'block';
                return;
            }

            document.getElementById('loading').style.display = 'block';
            document.getElementById('submit-btn').style.display = 'none';

            answers.name = name;
            answers.email = email;

            // Construindo os dados para envio
            const postData = {
                id: 1,
                nome: name,
                email: email,
                campanha: `S1NEW_auraburs_PeDeMeia_${idCampanha}_${utmTerm}_${(answers.question1 || '').replace(/\s+/g, '_')}_${(answers.question2 || '')}`,
                phone: "",
                respostas: answers
            };

            // Enviando dados via POST
            fetch("https://n8n-1.digite.com.br/webhook/f5e44c10-12a6-4247-a6e8-2699d0d80a54", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(postData)
            })
                .then(response => {
                    if (!response.ok) throw new Error('Erro na rede');
                    return response.json();
                })
                .then(data => {
                    // Redirecionar após envio bem-sucedido
                    window.location.href = redirectUrl;
                    gtag_report_conversion(redirectUrl);
                })
                .catch(error => {
                    console.error("Erro:", error);
                    document.getElementById('submit-btn').style.display = 'block';
                    document.getElementById('loading').style.display = 'none';
                    errorElement.innerHTML = '<b>Ocorreu um erro. Verifique seus dados e tente novamente.</b>';
                    errorElement.style.display = 'block';
                });
        }

        // Animação de scroll suave para links internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>