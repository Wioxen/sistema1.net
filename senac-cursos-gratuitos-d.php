
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Cursos gratuito com certificado | Curso online e presencial | Curso SENAC e SENAI</title>
    <meta name="description" content="Descubra cursos gratuitos online com certificado reconhecido. Melhore suas habilidades e aumente suas chances no mercado de trabalho.">
    <link rel="icon" href="icon.png" type="image/x-icon" />
    <!-- Pré-conexão para recursos externos -->
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    <!-- Pré-carregar CSS crítico -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"></noscript>

    <!-- CSS crítico inline -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            margin: 0;
            padding: 0;
        }

        input[type="checkbox"] {
            width: 20px;
            height: 20px;
            accent-color: #007bff; /* opcional: cor do check */
            cursor: pointer;
        }

        .assistant-img {
            background-size: 200% 200%;
            animation: shimmer 1.5s infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }

        .quiz-container {
            max-width: 600px;
            margin: 30px auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .quiz-header {
            background: white;
            color: #2C3E50;
            padding: 15px;
            text-align: center;
        }

        .quiz-body {
            padding: 20px;
        }

        .question {
            display: none;
        }

            .question.active {
                display: block;
                animation: fadeIn 0.3s ease-out;
            }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Estilos mínimos necessários para o conteúdo acima da dobra */
        .btn-option, .btn-next, .form-control {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 6px;
        }

        .btn-next {
            background: #2c3e50;
            color: white;
            border: none;
            font-weight: bold;
        }

        .progress {
            height: 8px;
            margin-bottom: 15px;
        }
        /* Ocultar accordion inicialmente */
        .accordion {
            display: none;
        }
    </style>

    <!-- Scripts não críticos carregados de forma assíncrona -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16696952717"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'AW-16696952717');

        function gtag_report_conversion(url) {
            var callback = function () {
                if (typeof (url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-16696952717/welKCJCdt9EZEI2P3Zk-',
                'event_callback': callback
            });
            return false;
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="quiz-container">
            <div class="quiz-header">
                <picture>
                    <source srcset="lais.webp" media="(max-width: 600px)">
                    <source srcset="lais.webp" media="(min-width: 601px)">
                    <img src="lais.webp"
                         alt="Assistente Virtual"
                         class="assistant-img"
                         width="120"
                         height="120"
                         loading="eager"
                         decoding="async">
                </picture>
                <h1 style="font-size:15px;margin:0" style="color:#2C3E50">👋 Olá! Sou sua Assistente de Cursos Gratuitos</h1>
            </div>
            <div class="quiz-body">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                </div>

                <!-- Saudação -->
                <div class="question active" id="question0">
                    <p>Você pode ter acesso a cursos 100% gratuitos com certificado reconhecido pelo MEC.</p>
                    <p>Vamos descobrir as melhores opções para você?</p>
                    <button class="btn-next" onclick="nextQuestion()">CURSO GRATUITO COM CERTIFICADO</button>
                </div>

                <!-- Pergunta 1 -->
                <div class="question" id="question1">
                    <h4>
                        📍 Qual tipo de curso gratuito com certificado você deseja?<h4>
                            <button class="btn-option" onclick="selectOption(this, 'CursoLivre')">Curso Livre</button>
                            <button class="btn-option" onclick="selectOption(this, 'CursoTecnico')">Curso Técnico</button>
                            <button class="btn-option" onclick="selectOption(this, 'Graduacao')">Graduação</button>
                            <button class="btn-option" onclick="selectOption(this, 'PosGraduacao')">Pós-graduação</button>
                </div>

                <!-- Pergunta 2 -->
                <div class="question" id="question2">
                    <h4>⏳ Qual área você tem interesse em estudar?</h4>
                    <button class="btn-option" onclick="selectOption(this, 'Tecnologia')">Tecnologia e Informática</button>
                    <button class="btn-option" onclick="selectOption(this, 'Administração')">Administração e Negócios</button>
                    <button class="btn-option" onclick="selectOption(this, 'Saude')">Saúde e Bem-estar</button>
                    <button class="btn-option" onclick="selectOption(this, 'Idiomas')">Idiomas e Comunicação</button>
                    <button class="btn-option" onclick="selectOption(this, 'Industria')">Indústria e Produção</button>
                    <button class="btn-option" onclick="selectOption(this, 'Outras')">Outras opções</button>
                </div>

                <!-- Pergunta 3 -->
                <div class="question" id="question3">
                    <h4>🎯 Qual seu principal objetivo com o curso?</h4>
                    <button class="btn-option" onclick="selectOption(this, 'Emprego')">Conseguir um emprego</button>
                    <button class="btn-option" onclick="selectOption(this, 'Promoção')">Melhorar no trabalho atual</button>
                    <button class="btn-option" onclick="selectOption(this, 'Conhecimento')">Apenas adquirir conhecimento</button>
                </div>

                <!-- Captura de dados -->
                <div class="question" id="question4">
                    <h4>✅ Ótimo! Encontramos várias opções que combinam com seu perfil.</h4>
                    <p>Para enviar a lista completa de cursos gratuitos com certificado válido, precisamos dos seus dados:</p>

                    <div>
                        <label for="name">📛 Qual seu nome completo?</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div>
                        <label for="email">📧 Seu melhor e-mail:</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div>
                        <label for="phone">📱 WhatsApp para contato:</label>
                        <input type="tel" class="form-control" id="phone" placeholder="(99) 99999-9999" required>
                    </div>
                    <div style="margin:15px 0">
                        <input type="checkbox" id="privacyPolicy" required>
                        <label for="privacyPolicy" style="font-size:8px">
                            Eu confirmo que desejo receber comunicações e concordo com a <a href="https://sistema1.net/politica-de-privacidade/">Política de Privacidade</a> e <a href="https://sistema1.net/termo-de-privacidade/">termo de uso</a>.
                        </label>
                    </div>
                    <div id="loading" style="display:none;text-align:center">
                        <div style="width:20px;height:20px;border:2px solid #f3f3f3;border-top:2px solid #3498db;border-radius:50%;animation:spin 1s linear infinite;margin:0 auto"></div>
                        <p style="margin-top:8px">Preparando sua lista de cursos...</p>
                    </div>

                    <div id="error-message" style="display:none;color:#dc3545;margin:10px 0"></div>

                    <button class="btn-next" id="submit-btn" onclick="submitForm()">Receber lista de cursos</button>
                </div>
                <br><div style="text-align:center;font-size:10px"><a href="https://sistema1.net/politica-de-privacidade/" style="font-size:10px">Política de Privacidade</a> e <a href="https://sistema1.net/termo-de-privacidade/" style="font-size:10px">Termo de uso</a></div>
            </div>
        </div>
    </div>

    <!-- Accordion - Carregado posteriormente -->
    <div class="accordion accordion-flush" id="accordionFlushExample" style="margin-top:5em">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Quais os cursos que o Senac oferece gratuitamente? Veja alguns cursos livres gratuitos oferecidos pelo Senac.
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <ul>
                        <li>Aproveitamento Integral de Alimentos</li>
                        <li>Business Intelligence com Power Bi</li>
                        <li>Congelamento de Alimentos&nbsp;</li>
                        <li>Cozinha Brasileira&nbsp;</li>
                        <li>Cozinha Vegetariana</li>
                        <li>Cozinha Árabe&nbsp;</li>
                        <li>Design Thinking</li>
                        <li>Elaboração de Roteiros Turísticos Receptivos</li>
                        <li>Garde Manger - Preparo de Receitas Frias</li>
                        <li>Gestão de Salões de Beleza&nbsp;</li>
                        <li>Informática Básica com Internet e Mídias Sociais</li>
                        <li>Introdução ao Ms Project&nbsp;</li>
                        <li>Líder Coach</li>
                        <li>Maquiagem Artística&nbsp;</li>
                        <li>Maquiagem e Penteados para Noivas&nbsp;</li>
                        <li>Maquiagem para Pele Negra&nbsp;</li>
                        <li>Marketing Social&nbsp;</li>
                        <li>Penteados&nbsp;</li>
                        <li>Preparo de Drinques e Coquetéis&nbsp;</li>
                        <li>Sustentabilidade Aplicada à Cozinha&nbsp;</li>
                        <li>Técnicas de Tranças&nbsp;</li>
                        <li>Unhas Decoradas</li>
                        <li>Vendas</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Curso gratuito com certificado
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Está em busca de cursos gratuitos para aprimorar seu currículo e conquistar novas oportunidades? Diversas instituições renomadas, como o Senac, Senai e Sebrae, oferecem formações em diferentes áreas do conhecimento. Você pode optar por um curso técnico Senac, um <b>curso gratuito com certificado</b> online ou até mesmo participar de um <b>curso gratuito com certificado</b> Senac presencial.

                    O Senai cursos gratuitos é ideal para quem deseja ingressar na indústria com qualificação profissional, enquanto o Senac cursos gratuitos online oferece flexibilidade para estudar no seu ritmo, garantindo um curso online gratuito com certificado. Além disso, programas do governo disponibilizam cursos gratuitos do governo para quem deseja se profissionalizar sem custos.

                    Se você procura especializações na área da beleza, pode se inscrever no curso de design de sobrancelha Senac gratuito online ou no curso de maquiagem profissional Senac. Já para os apaixonados por culinária, o Senac curso de gastronomia gratuito é uma excelente opção.

                    Quer saber como fazer um curso no Senac? Acesse o portal oficial (www Senac cursos gratuitos) e confira as vagas disponíveis para cursos gratuitos no Senac em todo o Brasil, incluindo Senac cursos gratuitos presenciais, <b>curso gratuito com certificado</b> Senac Maceió e cursos gratuitos Senac GO.

                    Além do Senac e do Senai, há também outras oportunidades, como os cursos gratuitos Avasus, os cursos online gratuitos Sesi e os cursos online gratuitos Senac, todos com certificado reconhecido.

                    Seja um curso técnico gratuito, um curso no Senai de graça ou um curso do Senac gratuito, essa é sua chance de se qualificar e se destacar no mercado de trabalho. Não perca essa oportunidade e comece a estudar hoje mesmo!
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Como conseguir um curso técnico de graça?
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><ol class="X5LH0c"><li class="TrT0Xe">IFRS. O Instituto Federal do Rio Grande do Sul é uma das alternativas de instituição de ensino público que oferece <b>cursos técnicos</b> de forma gratuita e a distância. ... </li><li class="TrT0Xe">SENAC. ... </li><li class="TrT0Xe">SENAI. ... </li><li class="TrT0Xe">FIRJAN. ... </li><li class="TrT0Xe">SEBRAE. ... </li><li class="TrT0Xe">FAETEC. ... </li><li class="TrT0Xe">PRONATEC.</li></ol></div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Curso Gratuito com Certificado
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Aproveite a oportunidade de fazer um <b>curso gratuito com certificado</b> e receber um certificado válido. Aprimore seu currículo e aumente suas chances no mercado de trabalho!
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Procurando cursos gratuitos?
                </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Encontre diversas opções de cursos online e presenciais sem custo algum. Qualificação profissional acessível para você!
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    Curso Livre, Técnico e EAD
                </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Escolha entre cursos livres, técnicos ou na modalidade EAD e estude de onde estiver, no seu ritmo e sem mensalidade!
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                    [Aprovado] Curso 100% online
                </button>
            </h2>
            <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Cursos totalmente online, com acesso imediato ao conteúdo e certificado ao final. Estude sem sair de casa!
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                    Milhões de alunos já formados
                </button>
            </h2>
            <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Junte-se a uma comunidade de milhões de estudantes que já se formaram e conquistaram novas oportunidades!
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                    Cursos Online Gratuitos com Certificado Grátis
                </button>
            </h2>
            <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Cursos online gratuitos com certificado grátis são uma excelente oportunidade para quem busca aprender e se qualificar sem custos. Ganhe um diploma que pode agregar valor ao seu perfil profissional, tudo no conforto de sua casa.

                    Esses textos podem ser ajustados conforme necessário para se adequarem ao tom e formato do seu conteúdo, proporcionando informações relevantes e de fácil acesso para os leitores.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                    Senac Cursos Gratuitos
                </button>
            </h2>
            <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    O SENAC proporciona cursos gratuitos em diferentes áreas, permitindo que você se capacite e melhore sua empregabilidade. Não perca as oportunidades de qualificação que podem transformar sua carreira!
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                    Cursos Online Gratuitos Governo
                </button>
            </h2>
            <div id="flush-collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    O governo oferece cursos online gratuitos que possibilitam o acesso a conhecimentos essenciais para diversas áreas profissionais. Aproveite essa oportunidade de aprimorar seu perfil profissional sem custo algum.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                    Curso Gratuito Presencial
                </button>
            </h2>
            <div id="flush-collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Se você busca um <b>curso gratuito com certificado</b> presencial, diversas instituições oferecem oportunidades em diferentes áreas. O Senac, Senai e Fundação Bradesco são algumas das opções que disponibilizam cursos presenciais para quem deseja se qualificar profissionalmente sem custos.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirteen" aria-expanded="false" aria-controls="flush-collapseThirteen">
                    Cursos Gratuitos Online
                </button>
            </h2>
            <div id="flush-collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Os cursos gratuitos online são uma ótima alternativa para quem deseja aprender no seu próprio ritmo. Plataformas como AVASUS, Sebrae e Trilhas do Futuro oferecem formações com materiais completos e certificados gratuitos.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFourteen" aria-expanded="false" aria-controls="flush-collapseFourteen">
                    Curso Online com Certificado Grátis
                </button>
            </h2>
            <div id="flush-collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Quer um curso online com certificado grátis? O Senac, Senai e Fundação Bradesco disponibilizam opções em diversas áreas, garantindo qualificação com reconhecimento no mercado de trabalho.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFifteen" aria-expanded="false" aria-controls="flush-collapseFifteen">
                    Curso Online Gratuito Senai
                </button>
            </h2>
            <div id="flush-collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    O Senai oferece diversas formações, e o curso online gratuito Senai é uma excelente opção para quem busca capacitação de qualidade com certificado grátis.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSixteen" aria-expanded="false" aria-controls="flush-collapseSixteen">
                    O que são os cursos gratuitos do SENAC?
                </button>
            </h2>
            <div id="flush-collapseSixteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    O SENAC oferece cursos gratuitos por meio do Programa Senac de Gratuidade (PSG). Ele é destinado a pessoas de baixa renda que desejam se qualificar profissionalmente. Os cursos abrangem diversas áreas como administração, tecnologia, saúde, gastronomia e mais.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeventeen" aria-expanded="false" aria-controls="flush-collapseSeventeen">
                    Quem pode se inscrever nos cursos gratuitos do SENAC?
                </button>
            </h2>
            <div id="flush-collapseSeventeen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Os cursos gratuitos são voltados para pessoas com renda familiar de até dois salários mínimos. Além disso, é necessário atender aos pré-requisitos de cada curso, como idade mínima e escolaridade.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEighteen" aria-expanded="false" aria-controls="flush-collapseEighteen">
                    Como se inscrever nos cursos gratuitos do SENAC?
                </button>
            </h2>
            <div id="flush-collapseEighteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    As inscrições podem ser feitas online pelo site do SENAC ou presencialmente em uma unidade próxima. É necessário preencher um cadastro e enviar documentos como RG, CPF e comprovante de residência.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNineteen" aria-expanded="false" aria-controls="flush-collapseNineteen">
                    Cursos Gratuitos do SENAC – Inscreva-se Agora e Mude Seu Futuro!
                </button>
            </h2>
            <div id="flush-collapseNineteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    O SENAC oferece cursos gratuitos para quem deseja se qualificar profissionalmente e conquistar melhores oportunidades no mercado de trabalho. Com certificado reconhecido, você pode aprender novas habilidades sem custo algum.

                    Por que fazer um <b>curso gratuito com certificado</b> no SENAC?
                    Certificado válido em todo o Brasil
                    Formação 100% gratuita pelo Programa Senac de Gratuidade (PSG)
                    Modalidades presencial e online (EAD)
                    Qualificação para ingressar rapidamente no mercado de trabalho
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwenty" aria-expanded="false" aria-controls="flush-collapseTwenty">
                    Quais Cursos Gratuitos do SENAC Estão Disponíveis?
                </button>
            </h2>
            <div id="flush-collapseTwenty" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    O SENAC oferece diversos cursos gratuitos em diferentes áreas. Confira alguns dos mais procurados:

                    Administração e Negócios
                    Assistente Administrativo
                    Gestão de Pequenos Negócios
                    Marketing Digital

                    Tecnologia da Informação
                    Pacote Office Completo
                    Introdução à Programação
                    Design Gráfico

                    Gastronomia e Turismo
                    Confeitaria Básica
                    Cozinha Profissional
                    Garçom e Atendimento

                    Saúde e Bem-Estar
                    Cuidador de Idosos
                    Primeiros Socorros
                    Massoterapia

                    Beleza e Estética
                    Manicure e Pedicure
                    Maquiagem Profissional
                    Cabeleireiro
                </div>
            </div>
        </div>
    </div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.2.0/vanilla-masker.min.js"></script>
    <!-- Scripts não críticos carregados no final do body -->
    <script>
	var phone = document.getElementById('phone');
        if (phone) {
            VMasker(phone).maskPattern('(99) 99999-9999');
        }
        function getUTMTerm() {
            const params = new URLSearchParams(window.location.search);
            return params.get('utm_term');
        }
        const utmTerm = getUTMTerm();
        // Funções essenciais carregadas primeiro
        let currentQuestion = 0;
        const totalQuestions = 4;
        const answers = {};
        const redirectUrl = "https://vafast.xyz/lp/?utm_source=GoogleAdsS1&utm_medium=PesquisaS1&utm_campaign=Auto_01_s1_Pouso&utm_term=" + utmTerm + "";

        function updateProgress() {
            const progress = (currentQuestion / totalQuestions) * 100;
            document.querySelector('.progress-bar').style.width = progress + '%';
        }

        function nextQuestion() {
            document.querySelectorAll('.question').forEach(q => q.classList.remove('active'));
            currentQuestion++;
            document.getElementById('question' + currentQuestion).classList.add('active');
            updateProgress();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function selectOption(button, value) {
            button.parentNode.querySelectorAll('.btn-option').forEach(btn => {
                btn.style.backgroundColor = '';
                btn.style.borderColor = '#e9ecef';
            });

            button.style.backgroundColor = '#e3f2fd';
            button.style.borderColor = '#3498db';
            answers['question' + currentQuestion] = value;

            setTimeout(nextQuestion, 300);
        }

        // Carregar recursos não críticos após o carregamento da página
        window.addEventListener('load', function () {
            // Carregar accordion
            //fetchAccordionContent();

            // Carregar jQuery e Bootstrap apenas se necessário
            if (typeof jQuery == 'undefined') {
                var script = document.createElement('script');
                script.src = 'https://code.jquery.com/jquery-3.6.0.min.js';
                script.onload = function () {
                    loadBootstrap();
                };
                document.body.appendChild(script);
            } else {
                loadBootstrap();
            }
        });

        /*função do accordion aqui anotacoes.txt*/

        function loadBootstrap() {
            var script = document.createElement('script');
            script.src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js';
            document.body.appendChild(script);
        }

        function submitForm() {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const privacyChecked = document.getElementById('privacyPolicy').checked;
            const errorElement = document.getElementById('error-message');

            errorElement.style.display = 'none';

            if (!name || !email || !phone) {
                errorElement.textContent = 'Por favor, preencha todos os campos.';
                errorElement.style.display = 'block';
                return;
            }

            if (!privacyChecked) {
                errorElement.textContent = 'Você deve aceitar a política de privacidade para continuar.';
                errorElement.style.display = 'block';
                return;
            }

            if (!email.includes('@') || !email.includes('.')) {
                errorElement.textContent = 'Por favor, insira um e-mail válido.';
                errorElement.style.display = 'block';
                return;
            }

            document.getElementById('loading').style.display = 'block';
            document.getElementById('submit-btn').style.display = 'none';

            answers.name = name;
            answers.email = email;
            answers.phone = phone;

            const postData = {
                id: 1,
                nome: name,
                email: email,
                campanha: "S1D_" + utmTerm + "_" + (answers.question1 || '').replace(/\s+/g, '_') + "_" + (answers.question2 || '').replace(/\s+/g, '_'),
                phone: phone,
                respostas: answers
            };

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
    </script>
</body>
</html>