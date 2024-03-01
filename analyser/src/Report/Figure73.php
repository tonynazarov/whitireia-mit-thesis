<?php

declare(strict_types=1);

namespace App\Report;

readonly class Figure73 extends Figure
{

    protected function group(): array
    {
        return [
            'Content'        => [
                'Content Writing', 'Writing', 'Article Writing', 'Blog Content', 'Data Entry', 'Copywriting', 'Blog Writing', 'Creative Writing', 'Email Communication', 'Article', 'Video Editing', 'Social Media Content Creation', 'Social Media Content', 'Proofreading', 'Content Creation', 'Ghostwriting', 'Website Content', 'Editing & Proofreading', 'Video Production', 'Fact-Checking', 'Content SEO', 'Technical Writing', 'Product Listings', 'Video Post-Editing', 'Explainer Video', 'Ad Copy', 'Copy Editing', 'Ebook Writing', 'Email Support', 'Communication Skills', 'List Building', '    Audio Editing', 'Social Media Imagery', 'Product Description', 'Email Copywriting', 'Video Commercial', 'Business Writing', 'Documentary', 'Photo Editing', 'Content Strategy', 'Video Intro & Outro', 'User Profile Creation', 'Media & Entertainment', 'Nonfiction', 'Content Editing', 'Content Rewriting', 'English', 'Translation', 'French', 'German'
            ],
            'Development'    => [
                'Python', 'JavaScript', 'Web Development', 'WordPress', 'Automation', 'Chatbot Development', 'PHP', 'Web Application', 'HTML', 'Node.js', 'React', 'CSS', 'Data Scraping', 'Zapier', 'Chatbot', 'Landing Page', 'Bot Development', 'iOS', 'LangChain', 'Scripting', 'Android', 'Mobile App Development', 'Scriptwriting', 'AI App Development', 'Data Mining', 'API Development', 'Amazon Web Services', 'TypeScript', 'Java', 'MySQL', 'HTML5', 'Django', 'Bubble.io', 'Ecommerce', 'TensorFlow', 'Airtable', 'Prototyping', 'RESTful API', 'AI Development', 'SQL', 'Tech & IT', 'MongoDB', 'iOS Development', 'OpenAI Embeddings', 'AI Agent Development', 'Data Extraction', 'Marketing Automation', 'Conversational AI', 'Database Development', 'GPT API', 'Google Chrome Extension', 'Database', 'WooCommerce', 'Laravel', 'Next.js', 'PostgreSQL', 'Chat & Messaging Software', 'WordPress Plugin', 'Script', 'Android App Development', 'Google Cloud Platform', 'AI Builder', 'SaaS', 'PyTorch', 'Integromat', 'Python Script', 'Webflow', 'Firebase', 'Azure OpenAI Service', 'React Native', 'C#', 'Web Scraping', 'Flutter', 'Software Architecture & Design', 'OpenAI Codex', 'jQuery', 'HubSpot', 'Desktop Application', 'Software', 'Computer Vision', 'Scrapy', 'Swift', 'JSON', 'Database Architecture', 'Microsoft Azure', 'Ecommerce Website Development', 'DevOps', 'Unity', 'Amazon FBA', 'C++', 'Elementor', 'Angular', 'AngularJS', 'User Authentication', 'API', 'ChatGPT API Integration', 'API Integration', 'AI Model Integration', 'GPT-4 API', 'Twilio API', 'Email Automation'
            ],
            'AI'             => [
                'AI Content Writing', 'AI Text-to-Speech', 'Artificial Intelligence', 'Machine Learning', 'Natural Language Processing', 'AI Content Creation', 'AI Chatbot', 'GPT-4', 'Deep Learning', 'AI Bot', 'Generative AI', 'Midjourney AI', 'Artificial Neural Network', 'Large Language Model', 'LLM Prompt Engineering', 'Bard', 'DALL-E', 'Neural Network', 'Machine Learning Model', 'GPT-3', 'Llama 2', 'LLaMA', 'Stable Diffusion', 'GPT-4 Developer', 'BERT', 'GPT Chatbot', 'AI Text-to-Image',
            ],
            'Assistance'     => [
                'Virtual Assistance',
                'Presentations'
            ],
            'Administrative' => [
                'Administrative Support'
            ],
            'Marketing'      => [
                'Search Engine Optimization', 'SEO Writing', 'Social Media Marketing', 'Social Media Management', 'Marketing Strategy', 'SEO Keyword Research', 'Customer Service', 'Digital Marketing', 'Email Marketing', 'Market Research', 'Google Analytics', 'On-Page SEO', 'SEO Backlinking', 'Google Ads', 'Email Campaign Setup', 'Facebook Advertising', 'Influencer Marketing', 'Internet Marketing', 'Social Media Advertising', 'SEO Content', 'Research & Strategy', 'Content Marketing Strategy', 'Sales & Marketing', 'Marketing', 'Facebook Ads Manager', 'Organic Traffic Growth', 'Off-Page SEO', 'Company Research', 'Social Media Marketing Strategy', 'Content Marketing', 'SEO Audit', 'Campaign Optimization',
            ],
            'Design'         => [
                'Graphic Design', 'Web Design', 'Canva', 'Adobe Photoshop', 'Adobe Illustrator', 'Adobe Premiere Pro', 'Adobe After Effects', 'Figma', 'Website Redesign', 'Mockup', 'Responsive Design', 'Wireframing', 'UX & UI', 'Illustration', 'Presentation Design', 'User Interface Design',
            ],
            'Prompting'      => [
                'ChatGPT Prompt', 'Prompt Engineering', 'LLM Prompt', 'Model Tuning', 'Midjourney Prompt', 'Model Optimization'
            ],
            'Social media'   => [
                'Instagram', 'Facebook', 'LinkedIn', 'Social Media Account Setup', 'TikTok', 'YouTube', 'Twitter', 'WhatsApp'
            ],
            'Sales'          => [
                'Dropshipping', 'Communications', 'Shopify', 'Lead Generation', 'Sales', 'Real Estate', 'Cold Calling', 'Customer Satisfaction', 'AI Consulting', 'Appointment Setting'
            ],
            'Tools'          => [
                'Google Sheets', 'Microsoft Word', 'Microsoft Excel', 'Google Docs', 'Google Workspace', 'Ebook', 'File Management', 'Smartphone', 'File Maintenance'
            ],
            'Management'     => [
                'Scheduling', 'Project Management', 'Campaign Management', 'Notion', 'Technical SEO', 'Light Project Management', 'Time Management', 'Content Management', 'Task Coordination', 'PPC Campaign Setup & Management', 'CRM Automation', 'Customer Relationship Management',
            ],
            'Analysis'       => [
                'Market Analysis', 'Data Science', 'Data Analysis', 'Statistics', 'Competitive Analysis', 'Data Visualization', 'Infographic'
            ],
            'Support'        => [
                'Executive Support', 'Customer Support', 'Online Chat Support', 'Phone Support'
            ],
            'Administration' => ['Personal Administration'],
            'Education'      => ['Education', 'Topic Research', 'Academic Writing', 'Research Methods'],
            'Accounting'     => ['Accounting'],
            'Health'         => ['Health & Fitness', 'Health & Wellness'],
            'Finance'        => ['Financial Analysis'],
        ];
    }

    protected function getTitle(): string
    {
        return 'Figure 73. Distribution of top 300 skills by groups (number of jobs) for Upwork.';
    }

    protected function getSql(): string
    {
        return <<<EOL
SELECT title, count(DISTINCT upwork_job_skills.job_upwork_id) AS count
FROM upwork_job_skills
WHERE title in ('{titles}')
GROUP BY title
ORDER BY count DESC
LIMIT 300

EOL;

    }

    protected static function transformOptions(array $data, string $title): string
    {
        return json_encode([
            'chart'       => [
                'type' => 'donut',
            ],
            'labels'      => array_keys($data),
            'series'      => array_values($data),
            'title'       => [
                'align'    => 'left',
                'floating' => false,
                'text'     => $title,
            ],
            'plotOptions' => [
                'pie' => [
                    'donut' => [
                        'labels' => [
                            'show'  => true,
                            'name'  => [
                                'show' => true,
                            ],
                            'total' => [
                                'show' => true,
                            ]
                        ]
                    ]
                ]
            ]
        ]);
    }

    private static function transformToAmountOfSkills(array &$data): void
    {
        foreach ($data as &$value) {
            $value = array_sum($value);
        }
    }

    public function __invoke(): array
    {

        foreach ($this->group() as $name => $group) {
            $sql = strtr($this->getSql(), ['{titles}' => implode("','", $group)]);

            $data[$name] = $this->getEntityManager()->getConnection()->executeQuery($sql)->fetchAllKeyValue();
        }

        self::transformToAmountOfSkills($data);
        arsort($data);

        $title = $this->getTitle();

        return [
            'title'   => $title,
            'data'    => $data,
            'options' =>
                self::transformOptions($data, $title)
        ];
    }
}