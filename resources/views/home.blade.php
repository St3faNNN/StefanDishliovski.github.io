@extends('layouts.app')

@section('title', 'Stefan Dishliovski — AI, Research & Software Engineering')

@section('content')
<header class="site-header" id="top">
    <div class="container nav-shell">
        <a class="wordmark" href="#top" aria-label="Stefan Dishliovski, home">
            <img class="wordmark-avatar" src="{{ asset('images/profile-avatar.svg') }}" alt="">
            <span>Stefan Dishliovski</span>
        </a>

        <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="primary-navigation">
            <span></span><span></span>
        </button>

        <nav class="primary-nav" id="primary-navigation" aria-label="Main navigation">
            <a href="#about">About</a>
            <a href="#research">Research</a>
            <a href="#projects">Projects</a>
            <a href="#education">Education</a>
            <a class="nav-contact" href="#contact">Get in touch <span aria-hidden="true">↗</span></a>
        </nav>
    </div>
</header>

<main id="main">
    <section class="hero section-shell">
        <div class="container hero-grid">
            <div class="hero-copy">
                <p class="eyebrow"><span class="eyebrow-line"></span> SOFTWARE ENGINEERING · ARTIFICIAL INTELLIGENCE</p>
                <h1>Building intelligent systems.<br><em>Understanding</em> how they work.</h1>
                <p class="hero-intro">
                    I'm Stefan, a software engineering student interested in machine learning,
                    language models and the representations that shape their behaviour.
                </p>
                <div class="hero-actions">
                    <a class="button button-dark" href="#projects">Explore selected work <span aria-hidden="true">↓</span></a>
                    <a class="text-link" href="https://www.linkedin.com/in/stefan-dishliovski-0aa1151a9/" target="_blank" rel="noreferrer">Connect on LinkedIn <span aria-hidden="true">↗</span></a>
                </div>
            </div>

            <aside class="hero-aside" aria-label="Profile summary">
                <div class="portrait-frame graph-frame hero-image-frame">
                    <img class="hero-campus-image" src="{{ asset('images/campus-network.png') }}" alt="A golden knowledge graph connecting Ss. Cyril and Methodius University in Skopje with TU Wien in Vienna">
                    <span class="portrait-index">TWO CAMPUSES · ONE ACADEMIC NETWORK / 2026</span>
                </div>
                <div class="hero-note">
                    <span class="note-label">CURRENTLY</span>
                    <p>Studying Software Engineering at FINKI and completing a second academic exchange at TU Wien.</p>
                </div>
            </aside>
        </div>
        <div class="container hero-bottom">
            <span>BASED IN SKOPJE · CURRENTLY IN VIENNA</span>
            <a href="#about">SCROLL TO EXPLORE <span aria-hidden="true">↓</span></a>
        </div>
    </section>

    <section class="intro-section section-pad" id="about">
        <div class="container split-section">
            <div class="section-heading">
                <p class="eyebrow">01 / ABOUT</p>
                <h2>Curiosity first.<br><em>Engineering</em> always.</h2>
            </div>
            <div class="section-body intro-body">
                <p class="lead-copy">
                    I study Software Engineering and Information Systems at the Faculty of Computer
                    Science and Engineering (FINKI), Ss. Cyril and Methodius University.
                </p>
                <p>
                    My work moves between applied machine learning and software engineering:
                    building data and retrieval pipelines, experimenting with neural models, and
                    turning research ideas into usable systems. International coursework at TU Wien
                    has broadened that perspective through advanced subjects in machine learning,
                    natural language processing, databases and software quality.
                </p>
                <p>
                    I'm especially interested in questions that connect what a model does with
                    what is happening inside it: how useful representations emerge, how they can
                    be measured, and how reliably they can be steered.
                </p>
                <div class="about-facts">
                    <div><span class="fact-value">Ss. Cyril and Methodius University</span><span class="fact-label">HOME UNIVERSITY</span></div>
                    <div><span class="fact-value">TU Wien</span><span class="fact-label">EXCHANGE EXPERIENCE</span></div>
                    <div><span class="fact-value">AI / ML</span><span class="fact-label">PRIMARY FOCUS</span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="research-section section-pad" id="research">
        <div class="container">
            <div class="section-topline">
                <div>
                    <p class="eyebrow">02 / RESEARCH</p>
                    <h2>Questions that<br><em>keep me curious.</em></h2>
                </div>
                <p class="section-aside">I am interested in understanding, evaluating and improving intelligent systems — from their internal representations to their real-world behaviour.</p>
            </div>

            <div class="research-list">
                @foreach ($researchInterests as $index => $interest)
                    <div class="research-item">
                        <span class="mono-index">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <h3>{{ $interest }}</h3>
                        <span class="research-arrow" aria-hidden="true">↗</span>
                    </div>
                @endforeach
            </div>
            <div class="research-note">
                <span class="note-label">CURRENT RESEARCH DIRECTION</span>
                <p>Comparing persona-based conditioning with trait-grounded representations in large language models, with a focus on Big Five personality dimensions and internal steering directions.</p>
            </div>
        </div>
    </section>

    <section class="projects-section section-pad" id="projects">
        <div class="container">
            <div class="section-topline">
                <div>
                    <p class="eyebrow">03 / SELECTED WORK</p>
                    <h2>From research questions<br>to <em>working systems.</em></h2>
                </div>
                <p class="section-aside">A selection of projects across machine learning, information retrieval and full-stack engineering.</p>
            </div>

            <div class="project-grid">
                @foreach ($projects as $project)
                    <article class="project-card">
                        <div class="project-card-top">
                            <span class="mono-index">{{ $project['number'] }}</span>
                            <span class="project-category">{{ $project['category'] }}</span>
                        </div>
                        <div class="project-visual project-visual-{{ $loop->index + 1 }}">
                            <img src="{{ asset('images/' . $project['image']) }}" alt="{{ $project['image_alt'] }}" loading="lazy">
                        </div>
                        <div class="project-card-content">
                            <h3>{{ $project['name'] }}</h3>
                            <p>{{ $project['description'] }}</p>
                            <div class="tag-list">
                                @foreach ($project['stack'] as $tag)
                                    <span>{{ $tag }}</span>
                                @endforeach
                            </div>
                            @if ($project['url'])
                                <a class="project-link" href="{{ $project['url'] }}" target="_blank" rel="noreferrer">{{ $project['link_label'] }} <span aria-hidden="true">↗</span></a>
                            @else
                                <span class="project-status">Ongoing research</span>
                            @endif
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="education-section section-pad" id="education">
        <div class="container split-section">
            <div class="section-heading">
                <p class="eyebrow">04 / EDUCATION</p>
                <h2>Learning across<br><em>institutions.</em></h2>
                <p class="section-aside">A foundation in software engineering, complemented by international academic experience.</p>
            </div>
            <div class="timeline">
                @foreach ($education as $item)
                    <article class="timeline-item">
                        <span class="timeline-period">{{ $item['period'] }}</span>
                        <div>
                            <h3>{{ $item['institution'] }}</h3>
                            <p class="timeline-programme">{{ $item['programme'] }}</p>
                            <p class="timeline-location">{{ $item['location'] }}</p>
                            <p class="timeline-detail">{{ $item['detail'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="skills-section section-pad" id="skills">
        <div class="container">
            <div class="section-topline">
                <div>
                    <p class="eyebrow">05 / TOOLKIT</p>
                    <h2>Tools for <em>building.</em></h2>
                </div>
                <p class="section-aside">Technologies I have used across academic work, research experiments and software projects.</p>
            </div>
            <div class="skills-grid">
                @foreach ($skills as $category => $items)
                    <div class="skill-group">
                        <h3>{{ $category }}</h3>
                        <div class="skill-items">
                            @foreach ($items as $item)
                                <span>{{ $item }}</span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="contact-section section-pad" id="contact">
        <div class="container contact-inner">
            <p class="eyebrow">06 / CONTACT</p>
            <h2>Have a thoughtful<br><em>problem to solve?</em></h2>
            <p>I'm open to conversations about research, machine learning, software engineering and opportunities to collaborate.</p>
            <div class="contact-actions">
                <a class="button button-light" href="https://www.linkedin.com/in/stefan-dishliovski-0aa1151a9/" target="_blank" rel="noreferrer">Connect on LinkedIn <span aria-hidden="true">↗</span></a>
                <a class="contact-secondary" href="https://github.com/St3faNNN" target="_blank" rel="noreferrer">Explore my GitHub <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </section>
</main>
@endsection
