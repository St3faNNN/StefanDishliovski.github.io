@extends('layouts.app')

@section('title', 'Stefan Dishliovski — AI, Research & Software Engineering')

@section('content')
<header class="site-header" id="top">
    <div class="container nav-shell">
        <a class="wordmark" href="#top" aria-label="Stefan Dishliovski, home">
            <span class="wordmark-mark">SD</span>
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
                <div class="portrait-frame graph-frame" role="img" aria-label="Academic and research knowledge graph, with TU Wien as a highlighted vertex">
                    <svg class="hero-graph campus-graph" viewBox="0 0 620 600" aria-hidden="true">
 <g class="campus-links">
  <path d="M70 170 L105 125 L145 170 L185 125 L225 170 L265 125 L300 170 L335 125 L375 170 L415 125 L455 170 L495 125 L535 170"/>
  <path d="M70 170 L70 230 L145 230 L145 170 M185 125 L185 230 L265 230 L265 125 M335 125 L335 230 L415 230 L415 125 M455 170 L455 230 L535 230 L535 170"/>
  <path d="M70 170 L105 275 L185 275 L225 230 M265 230 L300 275 L375 275 L415 230 M455 230 L495 275 L535 230"/>
  <path d="M85 330 L135 300 L185 330 L235 300 L285 330 M85 330 L85 395 L185 395 L185 330 M235 300 L235 395 L335 395 L335 330 M385 300 L435 330 L485 300 L535 330 M385 300 L385 395 L485 395 L485 300"/>
  <path d="M135 300 L135 260 L185 230 M435 330 L435 275 L495 275 M285 330 L310 275"/>
  <path d="M110 445 L160 420 L210 445 L260 420 L310 445 L360 420 L410 445 L460 420 L510 445"/>
  <path d="M110 445 L110 495 L210 495 L210 445 M260 420 L260 495 L360 495 L360 420 M410 445 L410 495 L510 495 L510 445"/>
  <path d="M210 495 L260 530 L360 530 L410 495"/>
 </g>
 <g class="campus-dots">
  <circle cx="70" cy="170" r="4"/><circle cx="105" cy="125" r="4"/><circle cx="145" cy="170" r="4"/><circle cx="185" cy="125" r="4"/><circle cx="225" cy="170" r="4"/><circle cx="265" cy="125" r="4"/><circle cx="300" cy="170" r="4"/><circle cx="335" cy="125" r="4"/><circle cx="375" cy="170" r="4"/><circle cx="415" cy="125" r="4"/><circle cx="455" cy="170" r="4"/><circle cx="495" cy="125" r="4"/><circle cx="535" cy="170" r="4"/>
  <circle cx="70" cy="230" r="3"/><circle cx="145" cy="230" r="3"/><circle cx="185" cy="230" r="3"/><circle cx="265" cy="230" r="3"/><circle cx="335" cy="230" r="3"/><circle cx="415" cy="230" r="3"/><circle cx="455" cy="230" r="3"/><circle cx="535" cy="230" r="3"/>
  <circle cx="105" cy="275" r="3"/><circle cx="185" cy="275" r="3"/><circle cx="300" cy="275" r="3"/><circle cx="375" cy="275" r="3"/><circle cx="495" cy="275" r="3"/>
  <circle cx="85" cy="330" r="4"/><circle cx="135" cy="300" r="4"/><circle cx="185" cy="330" r="4"/><circle cx="235" cy="300" r="4"/><circle cx="285" cy="330" r="4"/><circle cx="385" cy="300" r="4"/><circle cx="435" cy="330" r="4"/><circle cx="485" cy="300" r="4"/><circle cx="535" cy="330" r="4"/>
  <circle cx="85" cy="395" r="3"/><circle cx="185" cy="395" r="3"/><circle cx="235" cy="395" r="3"/><circle cx="335" cy="395" r="3"/><circle cx="385" cy="395" r="3"/><circle cx="485" cy="395" r="3"/>
  <circle cx="110" cy="445" r="4"/><circle cx="160" cy="420" r="4"/><circle cx="210" cy="445" r="4"/><circle cx="260" cy="420" r="4"/><circle cx="310" cy="445" r="4"/><circle cx="360" cy="420" r="4"/><circle cx="410" cy="445" r="4"/><circle cx="460" cy="420" r="4"/><circle cx="510" cy="445" r="4"/>
  <circle cx="110" cy="495" r="3"/><circle cx="210" cy="495" r="3"/><circle cx="260" cy="495" r="3"/><circle cx="360" cy="495" r="3"/><circle cx="410" cy="495" r="3"/><circle cx="510" cy="495" r="3"/>
  <circle cx="260" cy="530" r="3"/><circle cx="360" cy="530" r="3"/>
 </g>
 <g class="campus-labels"><text x="175" y="80">SS. CYRIL AND METHODIUS</text><text x="175" y="96">UNIVERSITY · SKOPJE</text><text x="445" y="565">TU WIEN · VIENNA</text></g>
 <g class="campus-mark"><circle cx="310" cy="275" r="8"/><circle cx="310" cy="275" r="17"/></g>
</svg>
                    <span class="portrait-index">ACADEMIC NETWORK / 2026</span>
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
