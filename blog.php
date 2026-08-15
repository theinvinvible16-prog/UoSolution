<?php
$page_title = "Travel Blog & Guides | Rail & Bus Travel Tips";
$page_description = "Read expert travel guides, train reservation tips, and bus route advice from Uo Travel Solutions (uotravelsolution.com).";
require_once __DIR__ . '/includes/header.php';

$blog_posts = [
    [
        'slug' => 'top-european-rail-travel-tips',
        'title' => '10 Essential Tips for European High-Speed Rail Travel',
        'category' => 'Train Guides',
        'date' => 'January 10, 2026',
        'image' => 'https://images.unsplash.com/photo-1530122037265-a5f1f91d3b99?auto=format&fit=crop&w=800&q=80',
        'excerpt' => 'Navigating Eurostar, TGV, and Glacier Express trains can be easy with the right seat reservations and packing strategies. Read our top 10 insider tips.'
    ],
    [
        'slug' => 'train-vs-bus-travel-comparison',
        'title' => 'Train vs. Express Bus: Choosing the Best Transit for Your Journey',
        'category' => 'Travel Advice',
        'date' => 'January 04, 2026',
        'image' => 'https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?auto=format&fit=crop&w=800&q=80',
        'excerpt' => 'Should you take a high-speed passenger train or a luxury express motorcoach? We break down speed, cost, luggage limits, and scenic views.'
    ],
    [
        'slug' => 'swiss-alps-7-day-itinerary-guide',
        'title' => 'How to Spend 7 Days Exploring the Swiss Alps by Scenic Train',
        'category' => 'Destination Guides',
        'date' => 'December 28, 2025',
        'image' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80',
        'excerpt' => 'Explore Zurich, Lucerne, Zermatt, and St. Moritz aboard panoramic Swiss trains. Here is the ultimate day-by-day scenic rail itinerary.'
    ]
];
?>

<!-- Inner Banner -->
<section class="hero-section" style="padding: 3.5rem 0; background: linear-gradient(135deg, rgba(10, 37, 64, 0.95) 0%, rgba(6, 23, 41, 0.98) 100%), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1800&q=80') center/cover no-repeat;">
    <div class="container text-center" style="text-align: center;">
        <span class="compliance-badge mb-2"><i class="fa-solid fa-newspaper"></i> Travel Insights</span>
        <h1 class="text-white">Travel Blog & Destination Guides</h1>
        <p style="color: #CBD5E1; max-width: 750px; margin: 0 auto 1.5rem auto;">
            Expert advice, itinerary ideas, train reservation hacks, and scenic transit recommendations.
        </p>
    </div>
</section>

<!-- Blog Grid -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="packages-grid">
            <?php foreach ($blog_posts as $post): ?>
                <div class="package-card">
                    <div class="package-thumb">
                        <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" loading="lazy">
                        <span class="package-badge"><?php echo $post['category']; ?></span>
                    </div>
                    <div class="package-body">
                        <div class="package-meta">
                            <span><i class="fa-regular fa-calendar text-accent"></i> <?php echo $post['date']; ?></span>
                            <span><i class="fa-solid fa-user text-accent"></i> Uo Travel Desk</span>
                        </div>
                        <h3 class="package-title">
                            <a href="blog-detail.php?slug=<?php echo $post['slug']; ?>"><?php echo htmlspecialchars($post['title']); ?></a>
                        </h3>
                        <p class="package-desc"><?php echo htmlspecialchars($post['excerpt']); ?></p>

                        <div class="package-actions mt-auto" style="margin-top: auto;">
                            <a href="blog-detail.php?slug=<?php echo $post['slug']; ?>" class="btn btn-outline btn-sm btn-full">
                                Read Full Article &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
