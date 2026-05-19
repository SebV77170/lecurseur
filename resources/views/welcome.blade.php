<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le Curseur · Yogathérapie</title>
    <meta name="description" content="Yogathérapie individuelle au cabinet et interventions en structure : un accompagnement professionnel, clair et concret.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-50 text-stone-800 antialiased">
<header class="sticky top-0 z-20 border-b border-violet-100 bg-white/95 backdrop-blur">
    <div class="mx-auto flex w-full max-w-6xl items-center justify-between px-6 py-4">
        <a href="#accueil" class="text-lg font-semibold text-violet-800">Le Curseur</a>
        <nav class="hidden gap-6 text-sm md:flex">
            <a href="#structures" class="hover:text-violet-700">Interventions en structure</a>
            <a href="#cabinet" class="hover:text-violet-700">Suivi individuel</a>
            <a href="#methode" class="hover:text-violet-700">Méthode</a>
            <a href="#contact" class="hover:text-violet-700">Contact</a>
        </nav>
        <a href="#contact" class="rounded-full bg-violet-700 px-4 py-2 text-sm font-semibold text-white hover:bg-violet-600">Prendre RDV</a>
    </div>
</header>

<main>
    <section id="accueil" class="bg-gradient-to-b from-violet-50 to-stone-50 py-20">
        <div class="mx-auto max-w-6xl px-6 text-center">
            <p class="mb-4 text-sm font-semibold uppercase tracking-wider text-violet-700">Emilie Voillot · Yogathérapeute</p>
            <h1 class="mx-auto max-w-3xl text-4xl font-bold leading-tight text-violet-900 md:text-5xl">Un accompagnement clair et humain pour retrouver un mieux-être durable.</h1>
            <p class="mx-auto mt-6 max-w-3xl text-lg text-stone-700">J'interviens en <strong>structure partenaire</strong> pour animer des cycles thématiques en groupe, et je propose aussi un <strong>suivi individuel au cabinet du Chemin Vert</strong> avec bilan initial.</p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="#structures" class="rounded-full bg-violet-700 px-6 py-3 font-semibold text-white hover:bg-violet-600">Demander une intervention</a>
                <a href="#cabinet" class="rounded-full border border-violet-300 px-6 py-3 font-semibold text-violet-900 hover:bg-violet-50">Découvrir le suivi individuel</a>
            </div>
        </div>
    </section>

    <section id="structures" class="py-16">
        <div class="mx-auto grid max-w-6xl gap-10 px-6 lg:grid-cols-2">
            <div>
                <h2 class="text-3xl font-bold text-violet-900">Interventions en structure</h2>
                <p class="mt-5 text-stone-700">Vous êtes une entreprise, association, collectivité ou établissement de soins ? Vous constituez votre groupe, et j'interviens comme professionnelle extérieure sur plusieurs séances.</p>
                <ul class="mt-6 space-y-3 text-stone-700">
                    <li>• Groupes homogènes autour d'un objectif commun (stress, sommeil, douleur, respiration, prévention santé).</li>
                    <li>• Format personnalisé : dans votre structure ou au cabinet.</li>
                    <li>• Programme progressif, concret et adapté au public accompagné.</li>
                </ul>
            </div>
            <div class="rounded-2xl bg-violet-50 p-8">
                <h3 class="text-xl font-semibold text-violet-900">Ce que vous obtenez</h3>
                <div class="mt-5 space-y-4 text-stone-700">
                    <p><strong>Cadre clair :</strong> objectifs, durée, rythme et modalités définis dès le départ.</p>
                    <p><strong>Animation professionnelle :</strong> posture bienveillante, sécurisante, sans injonction de performance.</p>
                    <p><strong>Impact mesurable :</strong> retour d'expérience en fin de cycle et recommandations de continuité.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="cabinet" class="bg-violet-50 py-16">
        <div class="mx-auto max-w-6xl px-6">
            <h2 class="text-3xl font-bold text-violet-900">Suivi individuel au cabinet du Chemin Vert</h2>
            <div class="mt-8 grid gap-6 md:grid-cols-3">
                <article class="rounded-2xl bg-white p-6 shadow-sm">
                    <p class="text-sm font-semibold uppercase tracking-wide text-violet-700">Étape 1</p>
                    <h3 class="mt-2 text-xl font-semibold text-violet-900">Bilan initial</h3>
                    <p class="mt-3 text-stone-700">Un premier échange pour comprendre votre situation, clarifier vos besoins et définir un objectif réaliste.</p>
                </article>
                <article class="rounded-2xl bg-white p-6 shadow-sm">
                    <p class="text-sm font-semibold uppercase tracking-wide text-violet-700">Étape 2</p>
                    <h3 class="mt-2 text-xl font-semibold text-violet-900">Plan personnalisé</h3>
                    <p class="mt-3 text-stone-700">Un parcours sur plusieurs séances avec des outils simples, concrets et adaptés à votre rythme.</p>
                </article>
                <article class="rounded-2xl bg-white p-6 shadow-sm">
                    <p class="text-sm font-semibold uppercase tracking-wide text-violet-700">Étape 3</p>
                    <h3 class="mt-2 text-xl font-semibold text-violet-900">Autonomie progressive</h3>
                    <p class="mt-3 text-stone-700">Vous développez des repères utilisables dans votre quotidien pour consolider les bénéfices dans le temps.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="methode" class="py-16">
        <div class="mx-auto max-w-6xl px-6">
            <h2 class="text-3xl font-bold text-violet-900">Une méthode professionnelle, concise et concrète</h2>
            <div class="mt-8 grid gap-6 md:grid-cols-3">
                <div class="rounded-2xl border border-stone-200 bg-white p-6">
                    <h3 class="font-semibold text-violet-900">Écoute clinique</h3>
                    <p class="mt-3 text-stone-700">Prise en compte de votre état physique, mental et émotionnel, sans jugement.</p>
                </div>
                <div class="rounded-2xl border border-stone-200 bg-white p-6">
                    <h3 class="font-semibold text-violet-900">Pratiques ciblées</h3>
                    <p class="mt-3 text-stone-700">Respiration, mouvement, relaxation et concentration selon un objectif clairement défini.</p>
                </div>
                <div class="rounded-2xl border border-stone-200 bg-white p-6">
                    <h3 class="font-semibold text-violet-900">Suivi structuré</h3>
                    <p class="mt-3 text-stone-700">Séances en continuité avec ajustements réguliers pour garantir pertinence et efficacité.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-stone-900 py-16 text-stone-100">
        <div class="mx-auto max-w-6xl px-6">
            <h2 class="text-3xl font-bold">Contact & rendez-vous</h2>
            <p class="mt-4 max-w-3xl text-stone-300">Pour un suivi individuel ou un projet d'intervention en structure, décrivez brièvement votre demande : public concerné, objectif, lieu, période souhaitée.</p>
            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-xl bg-stone-800 p-4">
                    <p class="text-xs uppercase tracking-wide text-violet-300">Téléphone</p>
                    <p class="mt-2 font-semibold">06 83 04 08 07</p>
                </div>
                <div class="rounded-xl bg-stone-800 p-4">
                    <p class="text-xs uppercase tracking-wide text-violet-300">Email</p>
                    <p class="mt-2 font-semibold">emilie@lecurseur.com</p>
                </div>
                <div class="rounded-xl bg-stone-800 p-4">
                    <p class="text-xs uppercase tracking-wide text-violet-300">Cabinet</p>
                    <p class="mt-2 font-semibold">3 route de Férolles, 77170 Brie-Comte-Robert</p>
                </div>
                <div class="rounded-xl bg-stone-800 p-4">
                    <p class="text-xs uppercase tracking-wide text-violet-300">Modalités</p>
                    <p class="mt-2 font-semibold">Présentiel & visio selon besoin</p>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>
