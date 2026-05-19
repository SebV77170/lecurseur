<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le Curseur · Yogathérapie</title>
    <meta name="description" content="Yogathérapie : accompagnement individuel au cabinet et interventions en structure, avec une approche claire, professionnelle et concrète.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-50 text-stone-800 antialiased">
<header class="sticky top-0 z-20 border-b border-violet-100 bg-white/95 backdrop-blur">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6">
        <a href="#accueil" class="text-xl font-bold text-violet-800">Le Curseur</a>
        <nav class="hidden items-center gap-6 text-sm font-medium text-stone-700 md:flex">
            <a href="#structures" class="transition hover:text-violet-700">Interventions en structure</a>
            <a href="#cabinet" class="transition hover:text-violet-700">Suivi individuel</a>
            <a href="#methode" class="transition hover:text-violet-700">Méthode</a>
            <a href="#contact" class="transition hover:text-violet-700">Contact</a>
        </nav>
        <a href="#contact" class="rounded-full bg-violet-700 px-4 py-2 text-sm font-semibold text-white transition hover:bg-violet-600">Prendre RDV</a>
    </div>
</header>

<main id="accueil">
    <section class="px-4 pb-16 pt-20 sm:px-6">
        <div class="mx-auto max-w-4xl text-center">
            <p class="text-sm font-semibold uppercase tracking-[0.16em] text-violet-700">Emilie Voillot · Yogathérapeute</p>
            <h1 class="mt-4 text-balance text-4xl font-bold leading-tight text-violet-900 sm:text-5xl">Un accompagnement professionnel pour retrouver un mieux-être durable.</h1>
            <p class="mx-auto mt-6 max-w-3xl text-lg leading-relaxed text-stone-700">J'interviens en <strong>structure partenaire</strong> pour animer des cycles collectifs, et je propose un <strong>suivi individuel au cabinet du Chemin Vert</strong> avec bilan initial.</p>
            <div class="mt-10 flex flex-wrap justify-center gap-3">
                <a href="#structures" class="rounded-full bg-violet-700 px-6 py-3 font-semibold text-white transition hover:bg-violet-600">Intervention en structure</a>
                <a href="#cabinet" class="rounded-full border border-violet-300 bg-white px-6 py-3 font-semibold text-violet-900 transition hover:bg-violet-50">Suivi individuel</a>
            </div>
        </div>
    </section>

    <section id="structures" class="border-y border-violet-100 bg-white px-4 py-16 sm:px-6">
        <div class="mx-auto grid max-w-6xl gap-8 lg:grid-cols-2">
            <article class="rounded-2xl border border-stone-200 bg-stone-50 p-8">
                <h2 class="text-3xl font-bold text-violet-900">Interventions en structure</h2>
                <p class="mt-4 leading-relaxed text-stone-700">Pour entreprises, associations, collectivités ou établissements de soins.</p>
                <ul class="mt-6 space-y-3 leading-relaxed text-stone-700">
                    <li>• Vous constituez le groupe, j'anime le cycle de séances.</li>
                    <li>• Thème défini ensemble : stress, sommeil, douleur, respiration, prévention santé.</li>
                    <li>• Lieu au choix : dans votre structure ou au cabinet.</li>
                </ul>
            </article>
            <article class="rounded-2xl border border-violet-200 bg-violet-50 p-8">
                <h3 class="text-2xl font-semibold text-violet-900">Résultat attendu</h3>
                <div class="mt-6 space-y-4 leading-relaxed text-stone-700">
                    <p><strong>Cadre clair :</strong> objectifs, format, fréquence et durée validés en amont.</p>
                    <p><strong>Animation sécurisante :</strong> approche bienveillante et progressive, adaptée à votre public.</p>
                    <p><strong>Bilan de fin de cycle :</strong> points clés et recommandations de continuité.</p>
                </div>
            </article>
        </div>
    </section>

    <section id="cabinet" class="px-4 py-16 sm:px-6">
        <div class="mx-auto max-w-6xl">
            <h2 class="text-center text-3xl font-bold text-violet-900">Suivi individuel au cabinet</h2>
            <p class="mx-auto mt-4 max-w-3xl text-center leading-relaxed text-stone-700">Un parcours simple en 3 étapes pour avancer avec des repères concrets, à votre rythme.</p>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                <article class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">
                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-violet-700">Étape 1</p>
                    <h3 class="mt-2 text-xl font-semibold text-violet-900">Bilan initial</h3>
                    <p class="mt-3 leading-relaxed text-stone-700">Premier échange pour clarifier votre situation et définir un objectif réaliste.</p>
                </article>
                <article class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">
                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-violet-700">Étape 2</p>
                    <h3 class="mt-2 text-xl font-semibold text-violet-900">Plan personnalisé</h3>
                    <p class="mt-3 leading-relaxed text-stone-700">Séances progressives avec des pratiques adaptées à votre santé et à votre quotidien.</p>
                </article>
                <article class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">
                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-violet-700">Étape 3</p>
                    <h3 class="mt-2 text-xl font-semibold text-violet-900">Autonomie</h3>
                    <p class="mt-3 leading-relaxed text-stone-700">Vous repartez avec des outils simples pour maintenir les bénéfices dans le temps.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="methode" class="border-y border-violet-100 bg-violet-50 px-4 py-16 sm:px-6">
        <div class="mx-auto max-w-6xl">
            <h2 class="text-center text-3xl font-bold text-violet-900">Une méthode claire et concrète</h2>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                <article class="rounded-2xl bg-white p-6 ring-1 ring-violet-100">
                    <h3 class="text-lg font-semibold text-violet-900">Écoute clinique</h3>
                    <p class="mt-3 leading-relaxed text-stone-700">État physique, mental et émotionnel pris en compte sans jugement.</p>
                </article>
                <article class="rounded-2xl bg-white p-6 ring-1 ring-violet-100">
                    <h3 class="text-lg font-semibold text-violet-900">Pratiques ciblées</h3>
                    <p class="mt-3 leading-relaxed text-stone-700">Respiration, mouvement, relaxation et concentration selon votre objectif.</p>
                </article>
                <article class="rounded-2xl bg-white p-6 ring-1 ring-violet-100">
                    <h3 class="text-lg font-semibold text-violet-900">Suivi structuré</h3>
                    <p class="mt-3 leading-relaxed text-stone-700">Ajustements séance après séance pour progresser avec régularité.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-stone-900 px-4 py-16 text-white sm:px-6">
        <div class="mx-auto max-w-6xl">
            <h2 class="text-3xl font-bold">Contact & rendez-vous</h2>
            <p class="mt-4 max-w-3xl leading-relaxed text-stone-300">Pour une demande individuelle ou un projet en structure : indiquez le public concerné, l'objectif, le lieu et la période souhaitée.</p>
            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <article class="rounded-xl bg-stone-800 p-5">
                    <p class="text-xs uppercase tracking-[0.12em] text-violet-300">Téléphone</p>
                    <p class="mt-2 text-lg font-semibold">06 83 04 08 07</p>
                </article>
                <article class="rounded-xl bg-stone-800 p-5">
                    <p class="text-xs uppercase tracking-[0.12em] text-violet-300">Email</p>
                    <p class="mt-2 text-lg font-semibold">emilie@lecurseur.com</p>
                </article>
                <article class="rounded-xl bg-stone-800 p-5">
                    <p class="text-xs uppercase tracking-[0.12em] text-violet-300">Cabinet</p>
                    <p class="mt-2 text-lg font-semibold">3 route de Férolles<br>77170 Brie-Comte-Robert</p>
                </article>
                <article class="rounded-xl bg-stone-800 p-5">
                    <p class="text-xs uppercase tracking-[0.12em] text-violet-300">Modalités</p>
                    <p class="mt-2 text-lg font-semibold">Présentiel & visio</p>
                </article>
            </div>
        </div>
    </section>
</main>
</body>
</html>
