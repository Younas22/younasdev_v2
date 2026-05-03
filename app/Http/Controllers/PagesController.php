<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;

class PagesController extends Controller
{
public function home()
{
    $seo = [
        'title' => 'Younas Dev — PHP Laravel Developer & Travel Tech Expert | SaaS Builder',
        'description' => 'Younas Dev is a Pakistan-based PHP Laravel developer & Travel Tech expert with 6+ years experience. Built CustomerNearMe (350+ users) and generated 10K+ leads for 70+ clients worldwide.',
        'keywords' => 'PHP Laravel developer, travel tech expert, SaaS developer, CustomerNearMe, 8 Clients Blueprint, freelance client hunting, Laravel developer Pakistan, hire web developer',
        'img' => asset('public/assets/images/personal/hero.png'),
        'url' => 'https://younasdev.com'
    ];

    $schema = [
        'person' => [
            "@context" => "https://schema.org",
            "@type" => "Person",
            "name" => "Younas Dev",
            "url" => "https://younasdev.com",
            "image" => asset('public/assets/images/personal/hero.png'),
            "jobTitle" => "PHP Laravel Developer & Travel Tech Expert",
            "description" => "Pakistan-based Software Engineer with 6+ years building travel booking platforms, scalable Laravel apps, and SaaS tools. Creator of CustomerNearMe and the 8 Clients Blueprint.",
            "knowsAbout" => ["PHP Laravel", "Travel Tech", "SaaS Development", "Local SEO", "API Integration", "Freelance Client Acquisition"],
            "email" => "hello@younasdev.com",
            "telephone" => "+923460820722",
            "address" => [
                "@type" => "PostalAddress",
                "addressLocality" => "Pakistan",
                "addressCountry" => "PK"
            ],
            "contactPoint" => [
                "@type" => "ContactPoint",
                "telephone" => "+923460820722",
                "contactType" => "Customer Service",
                "email" => "hello@younasdev.com"
            ],
            "sameAs" => [
                "https://linkedin.com/in/younasdev",
                "https://x.com/YounasDev",
                "https://github.com/younas22",
                "https://www.youtube.com/@YounasDev",
                "https://www.facebook.com/YounasDev"
            ]
        ],
        'business' => [
            "@context" => "https://schema.org",
            "@type" => "ProfessionalService",
            "name" => "Younas Dev",
            "description" => "PHP Laravel developer & Travel Tech expert helping businesses build scalable web apps, SaaS platforms, and lead generation systems.",
            "url" => "https://younasdev.com",
            "telephone" => "+923460820722",
            "email" => "hello@younasdev.com",
            "founder" => [
                "@type" => "Person",
                "name" => "Younas Dev"
            ],
            "serviceArea" => [
                "@type" => "Place",
                "name" => "Worldwide"
            ],
            "hasOfferCatalog" => [
                "@type" => "OfferCatalog",
                "name" => "Development Services",
                "itemListElement" => [
                    [
                        "@type" => "Offer",
                        "itemOffered" => [
                            "@type" => "Service",
                            "name" => "Travel Booking Platform",
                            "description" => "Custom travel tech development with PHPTRAVELS and Laravel"
                        ]
                    ],
                    [
                        "@type" => "Offer",
                        "itemOffered" => [
                            "@type" => "Service",
                            "name" => "Laravel SaaS Development",
                            "description" => "Scalable SaaS applications built with Laravel and modern PHP"
                        ]
                    ],
                    [
                        "@type" => "Offer",
                        "itemOffered" => [
                            "@type" => "Service",
                            "name" => "Local SEO & Lead Generation",
                            "description" => "SEO strategies and systems that generate real bookings, leads, and business growth"
                        ]
                    ]
                ]
            ]
        ]
    ];

    return view('pages.home', compact('seo', 'schema'));
}


 
        public function about()
    {
        $seo = [
            'title' => 'About Younas Dev — PHP Laravel & Travel Tech Developer | 6+ Years Experience',
            'description' => 'Younas Dev is a Pakistan-based PHP Laravel developer & Travel Tech expert with 6+ years experience, 70+ clients worldwide, and creator of CustomerNearMe SaaS used by 350+ freelancers.',
            'keywords' => 'about Younas Dev, PHP Laravel developer Pakistan, travel tech developer, SaaS builder, CustomerNearMe creator, 8 Clients Blueprint, freelance developer',
            'img' => asset('public/assets/images/personal/hero.png'),
        ];

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => 'Younas Dev',
            'jobTitle' => 'PHP Laravel Developer & Travel Tech Expert',
            'url' => url('/about'),
            'sameAs' => [
                'https://github.com/younas22',
                'https://linkedin.com/in/younasdev',
                'https://x.com/YounasDev',
                'https://www.youtube.com/@YounasDev',
                'https://www.facebook.com/YounasDev'
            ],
            'image' => asset('public/assets/images/personal/hero.png'),
            'description' => 'Younas Dev is a Pakistan-based PHP Laravel developer & Travel Tech expert with 6+ years of experience, 70+ clients worldwide, and creator of CustomerNearMe and the 8 Clients Blueprint.',
            'worksFor' => [
                '@type' => 'Organization',
                'name' => 'Younas Dev',
                'url' => url('/')
            ],
            'email' => 'mailto:hello@younasdev.com',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Lahore',
                'addressCountry' => 'Pakistan'
            ]
        ];

        return view('pages.about', compact('seo', 'schema'));
    }


    public function contact()
    {
        $seo = [
            'title' => 'Contact Younas Dev — Hire PHP Laravel & Travel Tech Developer',
            'description' => 'Get in touch with Younas Dev — PHP Laravel developer & Travel Tech expert. Available for new projects. Replies within 12 hours. Book a free strategy call today.',
            'keywords' => 'contact Younas Dev, hire Laravel developer, hire PHP developer Pakistan, travel tech developer contact, book strategy call, hello@younasdev.com',
            'img' => asset('public/assets/images/personal/hero.png'),
        ];

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'ContactPage',
            'mainEntity' => [
                '@type' => 'LocalBusiness',
                'name' => 'Younas Dev',
                'image' => asset('assets/images/profile-pic.png'),
                'url' => url('/contact'),
                'email' => 'mailto:hello@younasdev.com',
                'telephone' => '+923460820722',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => 'Lahore',
                    'addressCountry' => 'PK'
                ],
                'contactPoint' => [
                    '@type' => 'ContactPoint',
                    'telephone' => '+923460820722',
                    'contactType' => 'Customer Service',
                    'areaServed' => 'PK',
                    'availableLanguage' => ['English', 'Urdu']
                ],
                'sameAs' => [
                    'https://github.com/younas22',
                    'https://linkedin.com/in/younasdev'
                ]
            ]
        ];

        return view('pages.contact', compact('seo', 'schema'));
    }

 
    public function services()
    {
        $seo = [
            'title' => 'Laravel Web & AI Services | Hire Younas Dev Today',
            'description' => 'Custom Laravel web, API & AI solutions by Younas Dev. Scalable, secure, and fast. Book a free call to start your project today!',
            'keywords' => 'Laravel developer, API integration, SaaS solutions, PHP expert, AI development, web development, hire Laravel developer',
            'img' => asset('public/assets/images/profile-pic.png'),
        ];

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'ProfessionalService',
            'name' => 'Younas Dev',
            'image' => asset('public/assets/images/profile-pic.png'),
            'url' => url('/services'),
            'description' => 'Custom Laravel development, API integration, and AI-powered solutions for startups and enterprises. Hire a seasoned developer with 5+ years experience.',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Lahore',
                'addressCountry' => 'PK'
            ],
            'telephone' => '+923460820722',
            'email' => 'hello@younasdev.com',
            'priceRange' => '$$$',
            'areaServed' => 'Global',
            'founder' => [
                '@type' => 'Person',
                'name' => 'Younas Dev'
            ],
            'sameAs' => [
                'https://github.com/younas22',
                'https://linkedin.com/in/younasdev'
            ]
        ];

        return view('pages.services', compact('seo', 'schema'));
    }


    public function servicedetail($slug)
    {
        $seo = [
            'title' => 'Our services',
            'description' => 'Explore the services we have completed for clients.',
            'keywords' => 'services, portfolio, work',
        ];
        // Assuming $services = service::latest()->paginate(10);
        return view('pages.servicedetail', compact('seo'));
    }

    public function projects()
    {
        $seo = [
            'title' => 'Projects — Younas Dev | Laravel, Travel Tech & SaaS Portfolio',
            'description' => 'Real projects by Younas Dev: travel booking platforms, SaaS apps, APIs, and lead generation systems. 70+ clients, 6+ years of PHP Laravel development.',
            'keywords' => 'Younas Dev projects, Laravel portfolio, travel booking platform, SaaS development, PHP projects, CustomerNearMe, PHPTRAVELS developer',
            'img' => asset('public/assets/images/personal/hero.png'),
        ];

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'CreativeWork',
            'name' => 'Younas Dev Projects',
            'headline' => 'Recent Laravel Projects by Younas Dev',
            'description' => 'View Laravel and PHP projects developed by Younas Dev including SaaS apps, travel platforms, HR systems, and eCommerce tools.',
            'creator' => [
                '@type' => 'Person',
                'name' => 'Younas Dev',
                'jobTitle' => 'Senior Laravel Developer',
                'url' => url('/'),
                'image' => asset('public/assets/images/profile-pic.png'),
                'email' => 'mailto:hello@younasdev.com',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => 'Lahore',
                    'addressCountry' => 'PK'
                ],
                'sameAs' => [
                    'https://github.com/younas22',
                    'https://linkedin.com/in/younasdev'
                ]
            ],
            'url' => url('/projects'),
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Younas Dev',
                'url' => url('/')
            ],
            'mainEntityOfPage' => url('/projects')
        ];

        return view('pages.projects', compact('seo', 'schema'));
    }


    

public function projectdetail($slug)
{
    $projects = json_decode(file_get_contents(base_path('project.json')), true);
    $slug = $slug ?? '';
    $searchTitle = ucwords(str_replace('-', ' ', $slug));
    $project = null;

    foreach ($projects as $item) {
        if (strtolower($item['title']) === strtolower($searchTitle)) {
            $project = $item;
            break;
        }
    }

    if (!$project) {
        return redirect()->route('projects')->with('error', 'Project not found.');
    }

    $seo = [
        'title' => $project['title'] . ' — Laravel Project by Younas Dev',
        'description' => substr($project['short_detail'], 0, 160),
        'keywords' => implode(', ', $project['tech_stack']) . ', ' . $project['title'],
        'img' => asset('public/assets/images/project/' . $project['image'])
    ];

    $schema = [
        "@context" => "https://schema.org",
        "@type" => "SoftwareApplication",
        "name" => $project['title'],
        "operatingSystem" => "Web",
        "applicationCategory" => "BusinessApplication",
        "url" => $project['link'],
        "description" => $project['short_detail'],
        "creator" => [
            "@type" => "Person",
            "name" => "Younas Dev"
        ],
        "offers" => [
            "@type" => "Offer",
            "price" => "0.00",
            "priceCurrency" => "USD"
        ],
        "aggregateRating" => [
            "@type" => "AggregateRating",
            "ratingValue" => "5",
            "reviewCount" => "3"
        ]
    ];


    return view('pages.projectdetail', compact('seo', 'project', 'schema'));
}


    public function products()
    {
        $seo = [
            'title' => 'Our Products',
            'description' => 'Discover our range of quality products.',
            'keywords' => 'products, ecommerce, items',
        ];
        // Assuming $products = Product::latest()->paginate(10);
        return view('pages.products', compact('seo'));
    }
    

    public function productdetail($slug)
    {
        $seo = [
            'title' => 'Our Products',
            'description' => 'Discover our range of quality products.',
            'keywords' => 'products, ecommerce, items',
        ];
        // Assuming $products = Product::latest()->paginate(10);
        return view('pages.productdetail', compact('seo'));
    }

public function sitemap()
{
    $seo = [
        'title' => 'Sitemap — Younas Dev | All Pages & Blog Posts',
        'description' => 'Browse all pages of younasdev.com — portfolio, projects, blog, FAQ, and more. PHP Laravel developer & Travel Tech expert.',
        'keywords' => 'younasdev.com sitemap, all pages, Younas Dev portfolio pages, Laravel developer blog, site navigation',
        'img' => asset('public/assets/images/personal/hero.png'),
    ];

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'SiteNavigationElement',
        'name' => 'Website Sitemap',
        'description' => 'List of all accessible pages and sections of the website',
        'url' => url('/sitemap'),
    ];

    return view('pages.sitemap', compact('seo', 'schema'));
}


    public function faq()
{
    $seo = [
        'title' => 'FAQ — Younas Dev | PHP Laravel Developer & Travel Tech Expert',
        'description' => 'Frequently asked questions about working with Younas Dev — PHP Laravel developer, travel tech expert, and SaaS builder. Learn about services, process, timelines, and pricing.',
        'keywords' => 'Younas Dev FAQ, hire Laravel developer questions, web development process, project timeline, PHP developer pricing Pakistan',
        'img' => asset('public/assets/images/personal/hero.png'),
    ];

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'What services does Younas Dev offer?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Younas Dev offers PHP Laravel development, travel booking platform development, SaaS application building, API integration, and Local SEO & lead generation systems.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'How many years of experience does Younas Dev have?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Younas Dev has 6+ years of experience, having worked with 70+ clients worldwide and generated over 10,000 leads.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'What is CustomerNearMe?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'CustomerNearMe is a SaaS tool built by Younas Dev that helps freelancers find local business leads using Google Maps data. It is used by 350+ freelancers.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'How can I hire Younas Dev?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'You can contact Younas Dev via WhatsApp at +92 346 0820722, email at hello@younasdev.com, or book a free strategy call at calendly.com/younasdev/strategy-call.'
                ]
            ]
        ]
    ];

    return view('pages.faq', compact('seo', 'schema'));
}



    public function blog(Request $request) 
    {
    $seo = [
        'title' => 'Blog — Younas Dev | Laravel, Travel Tech & Freelancing Tips',
        'description' => 'Read practical guides on PHP Laravel, travel tech, SaaS building, and freelance client acquisition by Younas Dev. Real insights from 6+ years and 70+ clients.',
        'keywords' => 'Younas Dev blog, Laravel tutorials, PHP tips, travel tech blog, freelance client hunting, SaaS builder blog, CustomerNearMe, 8 Clients Blueprint',
        'img' => asset('public/assets/images/personal/hero.png'),
    ];

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Blog',
        'name' => 'Younas Dev Blog',
        'url' => url('/blogs'),
        'description' => 'Laravel tutorials, developer experiences, and technical insights by Younas Dev. Covering web development, APIs, and modern PHP practices.',
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'Younas Dev',
            'url' => url('/'),
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('public/assets/images/profile-pic.png')
            ]
        ],
        'author' => [
            '@type' => 'Person',
            'name' => 'Younas Dev',
            'url' => url('/'),
            'image' => asset('public/assets/images/profile-pic.png'),
            'email' => 'mailto:hello@younasdev.com',
            'sameAs' => [
                'https://github.com/younas22',
                'https://linkedin.com/in/younasdev'
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Lahore',
                'addressCountry' => 'PK'
            ]
        ],
        'mainEntityOfPage' => url('/blogs')
    ];


        // Get featured post (most recent or manually featured)
        $featuredPost = BlogPost::with(['category', 'author'])
                              ->where('status', 'published')
                              ->where('is_featured', true)
                              ->latest('published_at')
                              ->first();

        if (!$featuredPost) {
            $featuredPost = BlogPost::with(['category', 'author'])
                                  ->where('status', 'published')
                                  ->latest('published_at')
                                  ->first();
        }

        // Get initial blog posts (excluding featured post)
        $query = BlogPost::with(['category', 'author'])
                        ->where('status', 'published');
        
        if ($featuredPost) {
            $query->where('id', '!=', $featuredPost->id);
        }

        // Apply filters
        if ($request->has('category') && $request->category !== 'all') {
            $query->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $blogs = $query->latest('published_at')->paginate(9);
        
        // Get all active categories that have blog posts
        $categories = BlogCategory::has('posts')
                            ->whereHas('posts', function($query) {
                                $query->where('status', 'published');
                            })
                            ->withCount(['posts' => function($query) {
                                $query->where('status', 'published');
                            }])
                            ->get();

        // Get blog stats
        $stats = [
            'total_posts' => BlogPost::where('status', 'published')->count(),
            'total_views' => BlogPost::where('status', 'published')->sum('views_count'),
            'total_categories' => $categories->count()
        ];
        
        return view('pages.blog', compact('blogs', 'categories', 'featuredPost', 'stats', 'seo','schema'));
    }

    public function loadMore(Request $request)
    {
        $page = $request->get('page', 1);
        
        $query = BlogPost::with(['category', 'author'])
                        ->where('status', 'published');

        // Exclude featured post from load more results
        if ($request->has('exclude_featured') && $request->exclude_featured) {
            $featuredPost = BlogPost::where('status', 'published')
                                  ->where('is_featured', true)
                                  ->latest('published_at')
                                  ->first();
            
            if (!$featuredPost) {
                $featuredPost = BlogPost::where('status', 'published')
                                      ->latest('published_at')
                                      ->first();
            }
            
            if ($featuredPost) {
                $query->where('id', '!=', $featuredPost->id);
            }
        }

        // Apply filters
        if ($request->has('category') && $request->category !== 'all') {
            $query->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $blogs = $query->latest('published_at')->paginate(9, ['*'], 'page', $page);

        if ($request->ajax()) {
            $html = view('common.blog-cards', compact('blogs'))->render();
            
            return response()->json([
                'html' => $html,
                'has_more' => $blogs->hasMorePages(),
                'next_page' => $blogs->currentPage() + 1
            ]);
        }

        return redirect()->route('blog');
    }


    public function blogdetail($slug)
{
    $post = BlogPost::with(['category', 'author', 'tags', 'comments.author'])
                   ->where('slug', $slug)
                   ->where('status', 'published')
                   ->firstOrFail();

    // Increment views
    $post->incrementViews();

    // Get related posts
    $relatedPosts = BlogPost::with(['category', 'author'])
                          ->where('status', 'published')
                          ->where('id', '!=', $post->id)
                          ->where('category_id', $post->category_id)
                          ->latest('published_at')
                          ->limit(3)
                          ->get();

    $seo = [
        'title' => $post->seo_title ?: $post->title,
        'description' => $post->meta_description ?: $post->excerpt,
        'keywords' => $post->tags->pluck('name')->implode(', '),
        'img' => $post->featured_image ? asset('storage/app/public/' . $post->featured_image) : null,
    ];

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => url()->current()
        ],
        'headline' => $post->title,
        'description' => $seo['description'],
        'image' => $post->featured_image ? asset('storage/app/public/' . $post->featured_image) : null,
        'author' => [
            '@type' => 'Person',
            'name' => $post->author->name ?? 'Younas Dev'
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'Younas Dev',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('public/assets/images/profile-pic.png') // Update logo path if needed
            ]
        ],
        'datePublished' => $post->published_at 
                ? Carbon::parse($post->published_at)->toIso8601String() 
                : null,

            'dateModified' => $post->updated_at 
                ? Carbon::parse($post->updated_at)->toIso8601String() 
                : null,
            ];

    return view('pages.blogdetails', compact('post', 'relatedPosts', 'seo', 'schema'));
}

public function sitemapxml()
{
    $projects = json_decode(file_get_contents(base_path('project.json')), true);
    $posts = BlogPost::where('status', 'published')->latest()->get();
    $content = view('pages.sitemapxml', compact('posts','projects'));
    return Response::make($content, 200)->header('Content-Type', 'application/xml');
}

}
