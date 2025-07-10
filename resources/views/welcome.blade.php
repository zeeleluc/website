<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>About Me - Freelance Laravel Developer</title>
    <style>
        :root {
            --bg: #fffaf3;
            --text: #1f2937;
            --muted: #5c7393;
            --primary: #60a5fa;
            --accent: #dbeafe;
            --card-bg: #ffffff;
            --border: #dddddd;
            --link-hover: #3b82f6;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 2rem;
        }

        .card {
            background-color: var(--card-bg);
            border-radius: 1.5rem;
            box-shadow: 0 15px 30px rgba(63, 187, 166, 0.1);
            padding: 2.5rem;
            max-width: 700px;
            width: 100%;
            text-align: center;
            border: 1px solid var(--border);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(63, 187, 166, 0.2);
        }

        .avatar {
            width: 128px;
            height: 128px;
            border-radius: 9999px;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 3px solid var(--accent);
        }

        h1 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
        }

        h2 {
            font-size: 1.125rem;
            color: var(--muted);
            margin-top: 0.25rem;
            margin-bottom: 1.25rem;
            font-weight: 400;
        }

        p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1.25rem;
            text-align: left;
        }

        .links {
            margin-top: 1rem;
            margin-bottom: 2rem;
        }

        .links a {
            display: inline-block;
            margin: 0 0.5rem;
            color: var(--primary);
            font-weight: 500;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .links a:hover {
            color: var(--link-hover);
        }

        hr {
            margin: 2rem 0;
            border: none;
            border-top: 1px dashed var(--accent);
        }

        .portfolio a {
            display: inline-block;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            font-size: 1rem;
        }

        .portfolio a:hover {
            text-decoration: underline;
            color: var(--link-hover);
        }

        .text {
            text-align: left;
        }

        @media (max-width: 600px) {
            .card {
                padding: 2rem;
            }

            p {
                text-align: justify;
            }
        }
    </style>
</head>
<body>
<div class="card">
    <!-- <img src="{{ asset('images/profile.jpg') }}" alt="Profile Photo" class="avatar"> -->
    <h1>Luc Zeelenberg</h1>
    <h2>Freelance PHP Laravel Developer</h2>

    <p>
        Ik ben een enthousiaste PHP/Laravel-developer die graag werkt aan duidelijke en efficiënte webapplicaties.
        Ik vind het leuk om ideeën om te zetten in code en bedrijven te helpen hun plannen waar te maken.
    </p>

    <div class="links">
        <a href="https://github.com/zeeleluc" target="_blank">GitHub</a>
        <a href="https://linkedin.com/in/zeeleluc" target="_blank">LinkedIn</a>
        <a href="mailto:lucaszeelenberg@gmail.com">Email Me</a>
    </div>

    <hr />

    <div class="text">
        <p>Met 13 jaar professionele ervaring als developer heb ik een sterke basis opgebouwd in PHP-development. De eerste 7 jaar werkte ik intensief met Zend Framework, waarna ik volledig ben overgestapt op Laravel. Mijn huidige favoriete stack bestaat uit PHP, Laravel, Livewire en Tailwind. Hoewel ik ook ervaring heb met React en Vue.js, ligt mijn passie duidelijk bij backend development.</p>
        <p>Ik werk als freelancer vanuit Curaçao, voornamelijk remote voor Nederlandse bedrijven. Mijn voorkeur gaat uit naar werken op ticketbasis: het bedrijf zet tickets klaar met een inschatting, ik beoordeel deze, en als ik denk dat het haalbaar is, los ik de feature op voor een vast bedrag. Deze manier van werken biedt duidelijkheid voor beide kanten, maar ik ben zeker flexibel als een andere werkwijze beter aansluit bij het bedrijf.</p>
        <p>In mijn vrije tijd werk ik aan een persoonlijk project waarin ik mijn favoriete stack combineer met Web3- en blockchain-integraties.</p>
    </div>

    <hr />

    <div class="portfolio">
        <a href="https://cryptmeup.com" target="_blank">🔗 Crypt Me Up</a>
    </div>
</div>
</body>
</html>
