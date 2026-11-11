<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $projects = [
            [
                'number' => '01',
                'name' => 'Macedonian Sign Language Recognition',
                'category' => 'Computer vision · Deep learning',
                'description' => 'A computer-vision pipeline for classifying 26 static letters of the Macedonian manual alphabet, with CNN experiments, MediaPipe hand-region processing and Grad-CAM visualisations.',
                'stack' => ['PyTorch', 'MediaPipe', 'CNNs', 'Grad-CAM'],
                'url' => 'https://github.com/St3faNNN/MSLModel',
                'link_label' => 'View repository',
            ],
            [
                'number' => '02',
                'name' => 'GraphRAG Jeopardy Evaluation',
                'category' => 'Information retrieval · NLP',
                'description' => 'An experimental comparison of dense-retrieval RAG approaches and knowledge-graph-based retrieval for generating Jeopardy-style clues, including the effect of coreference resolution.',
                'stack' => ['Python', 'Neo4j', 'NLP', 'RAG evaluation'],
                'url' => 'https://github.com/St3faNNN/GraphRAG-JeopardyEvaluation',
                'link_label' => 'View repository',
            ],
            [
                'number' => '03',
                'name' => 'GraphRAG for Macedonian Legislation',
                'category' => 'Applied AI · Full-stack engineering',
                'description' => 'A question-answering application over Macedonian legislation, designed to surface cited statutory provisions first and keep generated summaries clearly subordinate to the source material.',
                'stack' => ['Laravel', 'PHP', 'PostgreSQL', 'RAG'],
                'url' => 'https://github.com/St3faNNN/graphrag-app',
                'link_label' => 'View repository',
            ],
            [
                'number' => '04',
                'name' => 'Personality Trait Representations in LLMs',
                'image' => 'personality-llm.svg',
                'image_alt' => 'Illustration of an interconnected language model representation graph.',
                'category' => 'Research · Mechanistic interpretability',
                'description' => 'An investigation of persona conditioning and trait-grounded representations in language models, comparing prompt-based steering with directions derived from Big Five trait descriptions.',
                'stack' => ['LLMs', 'Representation analysis', 'Experimental design'],
                'url' => null,
                'link_label' => null,
            ],
        ];

        $education = [
            [
                'period' => '2023 — present',
                'institution' => 'Ss. Cyril and Methodius University',
                'programme' => 'BSc, Software Engineering and Information Systems',
                'location' => 'Skopje, North Macedonia',
                'detail' => 'Faculty of Computer Science and Engineering (FINKI).',
            ],
            [
                'period' => 'Mar — Jun 2026',
                'institution' => 'TU Wien',
                'programme' => 'CEEPUS academic exchange',
                'location' => 'Vienna, Austria',
                'detail' => 'Coursework included Machine Learning, Deep Learning in NLP, Software Quality Assurance, Web Engineering and Advanced Database Systems.',
            ],
            [
                'period' => 'Oct 2026 — Jan 2027',
                'institution' => 'TU Wien',
                'programme' => 'CEEPUS academic exchange',
                'location' => 'Vienna, Austria',
                'detail' => 'Further coursework in computer science, including Theoretical Computer Science and advanced AI-related subjects.',
            ],
        ];

        $researchInterests = [
            'Mechanistic interpretability and internal representations',
            'Large language models and natural language processing',
            'Representation learning and model steering',
            'Retrieval-augmented generation and knowledge graphs',
            'Evaluation and reliability of machine-learning systems',
        ];

        $skills = [
            'Languages' => ['Python', 'Java', 'JavaScript', 'PHP', 'SQL'],
            'AI and machine learning' => ['PyTorch', 'Hugging Face', 'Transformers', 'scikit-learn', 'RAG', 'GraphRAG'],
            'Backend and data' => ['Laravel', 'FastAPI', 'PostgreSQL', 'MySQL', 'Neo4j', 'Apache Spark'],
            'Engineering tools' => ['Docker', 'Git', 'JUnit', 'Linux'],
        ];

        return view('home', compact('projects', 'education', 'researchInterests', 'skills'));
    }
}
