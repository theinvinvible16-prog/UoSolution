<?php
/**
 * Travel Packages Dataset
 * Used by packages.php and package-detail.php
 */

$travel_packages = [
    'swiss-alps-scenic-express' => [
        'id' => 1,
        'slug' => 'swiss-alps-scenic-express',
        'title' => 'Swiss Alps Scenic Rail & Lake Expedition',
        'subtitle' => '7-Day Alpine Rail Journey aboard the Glacier Express & Panoramic Regional Trains',
        'category' => 'Rail Tour',
        'badge' => 'Bestseller',
        'duration' => '7 Days / 6 Nights',
        'price_from' => 1299,
        'price_was' => 1599,
        'rating' => 4.9,
        'reviews_count' => 142,
        'destination' => 'Switzerland (Zurich, Zermatt, St. Moritz, Lucerne)',
        'hero_image' => 'https://images.unsplash.com/photo-1530122037265-a5f1f91d3b99?auto=format&fit=crop&w=1200&q=80',
        'overview' => 'Experience the world-famous Swiss rail system with first-class panoramic train travel connecting Zurich, Zermatt, St. Moritz, and Lucerne. Includes Bernina Express alpine crossings, Matterhorn cogwheel railway tickets, and lake boat cruises.',
        'highlights' => [
            'Glacier Express 1st Class Panoramic Rail Tickets',
            'Matterhorn Glacier Paradise Cogwheel Railway Excursion',
            'Bernina Express UNESCO World Heritage Rail Pass',
            '4-Star Central Hotel Accommodations with Daily Breakfast',
            'Lake Lucerne Steamer Cruise & Mount Pilatus Pass'
        ],
        'inclusions' => [
            '6 Nights in centrally located 4-star hotels with daily buffet breakfast',
            'All point-to-point 1st Class Swiss Rail Passes & reserved seat reservations',
            'Glacier Express and Bernina Express mandatory seat booking fees included',
            '24/7 Uo Travel Solutions emergency passenger assistance line',
            'Detailed digital travel dossier, station maps, and timetable guides'
        ],
        'exclusions' => [
            'International transatlantic/transcontinental flights to/from Zurich',
            'Personal expenses, mini-bar, and optional mountain cable car upgrades',
            'Travel & medical insurance (strongly recommended)',
            'Meals not specified in the daily itinerary'
        ],
        'cancellation_policy' => 'Full refund available if cancelled 30 days prior to departure. 70% refund for cancellations between 15–29 days. Subject to carrier ticketing non-refundable fees. See our Refund & Cancellation Policy for full details.',
        'itinerary' => [
            [
                'day' => 1,
                'title' => 'Arrival in Zurich & Scenic Train to Lucerne',
                'description' => 'Arrive at Zurich Airport and board the express train straight to Lucerne (approx. 50 mins). Check into your 4-star hotel, stroll across the historic Chapel Bridge, and enjoy an evening welcome orientation.'
            ],
            [
                'day' => 2,
                'title' => 'GoldenPass Express to Interlaken & Grindelwald',
                'description' => 'Board the GoldenPass panoramic train through the heart of the Bernese Oberland. Take in stunning views of Lake Brienz before arriving in Interlaken and ascending to Grindelwald village.'
            ],
            [
                'day' => 3,
                'title' => 'Zermatt & Matterhorn Views',
                'description' => 'Board the scenic mountain railway down to car-free Zermatt. Marvel at the majestic peak of the Matterhorn and enjoy the afternoon on the Gornergrat cogwheel train.'
            ],
            [
                'day' => 4,
                'title' => 'The Legendary Glacier Express',
                'description' => 'Board the iconic Glacier Express panoramic train. Enjoy an exquisite 3-course lunch served directly at your seat as you cross 291 bridges and pass through 91 tunnels en route to St. Moritz.'
            ],
            [
                'day' => 5,
                'title' => 'Bernina Express UNESCO Rail Pass',
                'description' => 'Take a thrilling day excursion on the Bernina Express, climbing past glaciers to the highest point of alpine rail in Europe before descending toward sunny Tirano.'
            ],
            [
                'day' => 6,
                'title' => 'Return Scenic Rail to Zurich',
                'description' => 'Travel along Lake Zurich on the regional express train. Enjoy a farewell dinner at a lakeside Swiss restaurant.'
            ],
            [
                'day' => 7,
                'title' => 'Departure from Zurich',
                'description' => 'Enjoy your final Swiss breakfast before an easy rail transfer directly to Zurich Airport for your homebound flight.'
            ]
        ]
    ],

    'golden-triangle-rail-heritage' => [
        'id' => 2,
        'slug' => 'golden-triangle-rail-heritage',
        'title' => 'Golden Triangle Express Rail & Culture Tour',
        'subtitle' => '6-Day Heritage Train Journey exploring Delhi, Agra Taj Mahal, & Pink City Jaipur',
        'category' => 'Rail Tour',
        'badge' => 'Top Value',
        'duration' => '6 Days / 5 Nights',
        'price_from' => 699,
        'price_was' => 849,
        'rating' => 4.8,
        'reviews_count' => 98,
        'destination' => 'India (Delhi, Agra, Jaipur)',
        'hero_image' => 'https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1200&q=80',
        'overview' => 'Travel in comfort aboard India’s flagship high-speed express trains (Vande Bharat & Gatimaan Express). Discover the wonders of the Taj Mahal, Amber Fort, and Delhi’s historic landmarks with private station transfers and expert local guides.',
        'highlights' => [
            'Executive Class Vande Bharat & Gatimaan Express Train Tickets',
            'Sunrise Tour of the iconic Taj Mahal in Agra',
            'Jeep Ride & Guided Heritage Tour of Amber Fort in Jaipur',
            '5-Star Luxury Hotel Stays with Breakfast & Dinner',
            'Private air-conditioned station transfers & dedicated luggage handling'
        ],
        'inclusions' => [
            '5 Nights accommodation in 5-Star Heritage & Luxury Hotels',
            'Executive AC Chair Car train tickets between Delhi-Agra-Jaipur',
            'Private vehicle transfers between train stations, hotels, and sights',
            'All monument entry tickets with priority queue access',
            'Daily breakfast and dinner at hotel dining rooms'
        ],
        'exclusions' => [
            'International airfare to/from Indira Gandhi International Airport (DEL)',
            'Visa processing fees',
            'Graturities/tips for drivers and local city guides',
            'Personal laundry and phone services'
        ],
        'cancellation_policy' => 'Full refund available up to 21 days before travel. Cancellation fees apply as per Indian Railways refund regulations thereafter.',
        'itinerary' => [
            [
                'day' => 1,
                'title' => 'Arrival in Delhi',
                'description' => 'Private airport pickup and transfer to your hotel. Afternoon sightseeing of Qutub Minar and India Gate.'
            ],
            [
                'day' => 2,
                'title' => 'Gatimaan Express to Agra & Taj Mahal',
                'description' => 'Early morning transfer to Hazrat Nizamuddin Station to catch the high-speed Gatimaan Express to Agra. Visit Agra Fort in the afternoon.'
            ],
            [
                'day' => 3,
                'title' => 'Sunrise Taj Mahal & Express Train to Jaipur',
                'description' => 'Watch the morning light illuminate the Taj Mahal. Later, board the express train to the Pink City of Jaipur.'
            ],
            [
                'day' => 4,
                'title' => 'Jaipur Forts & Palaces',
                'description' => 'Ascend Amber Fort on an open Jeep. Visit Hawa Mahal (Palace of Winds) and the historic City Palace.'
            ],
            [
                'day' => 5,
                'title' => 'Vande Bharat Express back to Delhi',
                'description' => 'Board the sleek Vande Bharat Express back to New Delhi. Evening free for shopping in Khan Market.'
            ],
            [
                'day' => 6,
                'title' => 'Departure from Delhi',
                'description' => 'Transfer to the airport for your onward journey.'
            ]
        ]
    ],

    'grand-canyon-southwest-bus-trek' => [
        'id' => 3,
        'slug' => 'grand-canyon-southwest-bus-trek',
        'title' => 'Grand Canyon & Southwest National Parks Bus Trek',
        'subtitle' => '5-Day Luxury Motorcoach Tour through Vegas, Zion, Bryce, & Grand Canyon South Rim',
        'category' => 'Bus Adventure',
        'badge' => 'Popular',
        'duration' => '5 Days / 4 Nights',
        'price_from' => 749,
        'price_was' => 899,
        'rating' => 4.7,
        'reviews_count' => 115,
        'destination' => 'USA (Nevada, Utah, Arizona)',
        'hero_image' => 'https://images.unsplash.com/photo-1474044159687-1ee9f3a51722?auto=format&fit=crop&w=1200&q=80',
        'overview' => 'Relax on state-of-the-art luxury motorcoaches equipped with panoramic windows, Wi-Fi, and leather seating. Travel through the red rock canyon landscapes of Zion National Park, Bryce Canyon, Monument Valley, and the majestic Grand Canyon.',
        'highlights' => [
            'Deluxe Air-Conditioned Motorcoach with Reclining Seats & Onboard Wi-Fi',
            'Grand Canyon South Rim Guided Sunset Panoramic Tour',
            'Zion National Park Shuttle Pass & Scenic Overlook Hikes',
            'Bryce Canyon Amphitheater Hoodoo Sightseeing',
            'Hotel Stays in Las Vegas, Springdale, and Page (AZ)'
        ],
        'inclusions' => [
            '4 Nights in premier lodge accommodations near national park entrances',
            'All National Park entry passes and toll fees included',
            'Professional full-time Tour Director & expert motorcoach driver',
            'Daily hot breakfast and 2 park picnic lunches',
            'Complimentary bottled water and snacks on board'
        ],
        'exclusions' => [
            'Flights to/from Las Vegas Harry Reid International Airport (LAS)',
            'Optional Grand Canyon helicopter flyover tour',
            'Driver and Tour Guide gratuities'
        ],
        'cancellation_policy' => 'Free cancellation up to 14 days before trip start. 50% refund between 7–13 days. See Refund Policy page for details.',
        'itinerary' => [
            [
                'day' => 1,
                'title' => 'Las Vegas Departure to Zion National Park',
                'description' => 'Board your deluxe motorcoach in Las Vegas. Travel through the Virgin River Gorge to Zion Canyon.'
            ],
            [
                'day' => 2,
                'title' => 'Bryce Canyon Hoodoos & Page (AZ)',
                'description' => 'Explore the crimson-colored amphitheaters of Bryce Canyon before riding to Page near Lake Powell.'
            ],
            [
                'day' => 3,
                'title' => 'Horseshoe Bend & Monument Valley Navajo Tour',
                'description' => 'Visit Horseshoe Bend overlook in the morning, followed by an afternoon motorcoach ride into Monument Valley.'
            ],
            [
                'day' => 4,
                'title' => 'Grand Canyon National Park South Rim',
                'description' => 'Spend the day at Mather Point and Bright Angel Trailhead along the Grand Canyon South Rim.'
            ],
            [
                'day' => 5,
                'title' => 'Route 66 Historic Bus Return to Vegas',
                'description' => 'Travel along historic Route 66 through Seligman and Kingman before arriving back in Las Vegas.'
            ]
        ]
    ],

    'euro-express-bus-rail-combo' => [
        'id' => 4,
        'slug' => 'euro-express-bus-rail-combo',
        'title' => 'Euro Express Rail & Bus Multi-City Pass',
        'subtitle' => '10-Day Multi-Country Journey: London, Paris, Brussels, & Amsterdam',
        'category' => 'Mixed Scenic Transit',
        'badge' => 'Ultimate Tour',
        'duration' => '10 Days / 9 Nights',
        'price_from' => 1499,
        'price_was' => 1799,
        'rating' => 4.9,
        'reviews_count' => 210,
        'destination' => 'UK, France, Belgium, Netherlands',
        'hero_image' => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=1200&q=80',
        'overview' => 'Combine high-speed Eurostar underwater rail crossing with luxury FlixBus/Express Coach transfers across 4 iconic European capitals. Ideal for travelers seeking seamless inner-city transportation without airport hassles.',
        'highlights' => [
            'Eurostar High-Speed Channel Tunnel Train Ticket (London to Paris)',
            'Thalys / Eurostar High-Speed Express Rail to Brussels & Amsterdam',
            'Panoramic Paris City Coach Tour & Seine River Cruise Ticket',
            'Canal Cruise & Zaanse Schans Windmill Express Bus in Holland',
            'City-Center 4-Star Hotels next to Main Transit Terminals'
        ],
        'inclusions' => [
            '9 Nights in boutique hotels adjacent to major train & bus stations',
            'All train seat reservations and intercity express coach transfers',
            '24/7 Uo Travel Solutions WhatsApp Concierge support across Western Europe',
            'Daily breakfast included'
        ],
        'exclusions' => [
            'Transatlantic flights to London Heathrow (LHR) / from Amsterdam Schiphol (AMS)',
            'City tourist accommodation taxes payable directly at hotels (€3-€7/night)',
            'Personal luggage porterage'
        ],
        'cancellation_policy' => 'Full refund up to 30 days prior. Non-refundable Eurostar carrier fees apply within 30 days.',
        'itinerary' => [
            [
                'day' => 1,
                'title' => 'Arrive in London & Welcome Briefing',
                'description' => 'Arrive in London. Check in at St Pancras Hotel. Meet your travel concierge for tickets and city passes.'
            ],
            [
                'day' => 2,
                'title' => 'London City Sights & Thames Bus Cruise',
                'description' => 'Explore Big Ben, Westminster Abbey, and Tower Bridge with included hop-on-hop-off bus pass.'
            ],
            [
                'day' => 3,
                'title' => 'Eurostar Train under the English Channel to Paris',
                'description' => 'Board the 186 mph Eurostar train from St Pancras to Paris Gare du Nord (2 hrs 15 mins).'
            ],
            [
                'day' => 4,
                'title' => 'Paris Eiffel Tower & Louvre Excursions',
                'description' => 'Guided coach tour of Champs-Élysées, Arc de Triomphe, and priority entry to the Louvre Museum.'
            ],
            [
                'day' => 5,
                'title' => 'Express Coach to Brussels',
                'description' => 'Scenic luxury express coach transfer to Brussels Grand Place. Enjoy Belgian chocolate tasting.'
            ],
            [
                'day' => 6,
                'title' => 'High-Speed Rail to Amsterdam',
                'description' => 'Board the Eurostar express train direct to Amsterdam Centraal Station.'
            ],
            [
                'day' => 7,
                'title' => 'Amsterdam Canals & Van Gogh Museum',
                'description' => 'Glides along the UNESCO canal ring and enjoy priority access to the Van Gogh Museum.'
            ],
            [
                'day' => 8,
                'title' => 'Zaanse Schans Windmill Express Bus Tour',
                'description' => 'Take our private countryside coach to historic windmills, wooden shoe workshops, and cheese farms.'
            ],
            [
                'day' => 9,
                'title' => 'Amsterdam Leisure & Shopping Day',
                'description' => 'Free day for shopping along Nine Streets or exploring the Rijksmuseum.'
            ],
            [
                'day' => 10,
                'title' => 'Departure from Amsterdam Schiphol',
                'description' => 'Direct 15-minute train ride from Centraal Station to Schiphol Airport for homebound flights.'
            ]
        ]
    ],

    'japan-bullet-train-odyssey' => [
        'id' => 5,
        'slug' => 'japan-bullet-train-odyssey',
        'title' => 'Japan Shinkansen Bullet Train & Culture Odyssey',
        'subtitle' => '8-Day High-Speed Shinkansen Tour: Tokyo, Mount Fuji, Kyoto, & Osaka',
        'category' => 'Rail Tour',
        'badge' => 'Bucket List',
        'duration' => '8 Days / 7 Nights',
        'price_from' => 1899,
        'price_was' => 2199,
        'rating' => 5.0,
        'reviews_count' => 165,
        'destination' => 'Japan (Tokyo, Hakone, Kyoto, Osaka)',
        'hero_image' => 'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&w=1200&q=80',
        'overview' => 'Glides smoothly across Japan at 320 km/h on the legendary Shinkansen Bullet Train. Explore Tokyo neon towers, Hakone hot springs with Mt. Fuji views, Kyoto bamboo groves, and Osaka food culture.',
        'highlights' => [
            '7-Day Whole Japan Ordinary/Green Car Shinkansen Rail Pass with Reserved Seats',
            'Hakone Freepass including Cable Car & Lake Ashi Pirate Ship Cruise',
            'Kyoto Fushimi Inari & Arashiyama Bamboo Grove Guided Tour',
            'Traditional Ryokan Onsen Stay with Kaiseki Dinner included',
            'Luggage Forwarding Service (Takkyubin) between Tokyo & Kyoto'
        ],
        'inclusions' => [
            '7 Nights hotel stays (6 nights western 4-star, 1 night traditional Ryokan onsen)',
            '7-Day Japan Rail Pass + Shinkansen express seat reservations',
            'Hakone Ropeway and lake cruise ticket',
            'Daily breakfast + 1 traditional multi-course Kaiseki dinner'
        ],
        'exclusions' => [
            'International flights to Tokyo Haneda (HND) / Narita (NRT) or from Kansai (KIX)',
            'Personal spending money',
            'Pocket Wi-Fi rental (available as add-on)'
        ],
        'cancellation_policy' => 'Full refund up to 25 days before departure. JR Pass voucher return fees apply if physical exchange order has been dispatched.',
        'itinerary' => [
            [
                'day' => 1,
                'title' => 'Arrive in Tokyo & JR Pass Activation',
                'description' => 'Airport arrival, pickup your JR Pass at Narita/Haneda station, and check into your Shinjuku hotel.'
            ],
            [
                'day' => 2,
                'title' => 'Tokyo Highlights Tour',
                'description' => 'Visit Senso-ji Temple in Asakusa, Meiji Shrine, and the famous Shibuya Crossing.'
            ],
            [
                'day' => 3,
                'title' => 'Romancecar Train to Hakone & Mt Fuji Views',
                'description' => 'Travel to Hakone. Ride the cable car over Owakudani volcanic valley and stay in a hot spring Ryokan.'
            ],
            [
                'day' => 4,
                'title' => 'Shinkansen Bullet Train to Kyoto',
                'description' => 'Board the Tokaido Shinkansen bullet train to Kyoto. Visit Fushimi Inari Shrine thousands of vermilion torii gates.'
            ],
            [
                'day' => 5,
                'title' => 'Kyoto Temples & Arashiyama Bamboo Grove',
                'description' => 'Explore Kinkaku-ji (Golden Pavilion) and wander through the serene Arashiyama Bamboo Grove.'
            ],
            [
                'day' => 6,
                'title' => 'Express Train to Nara & Osaka Food Tour',
                'description' => 'Take the regional express train to Nara Deer Park, then travel to Osaka for Dotonbori street food.'
            ],
            [
                'day' => 7,
                'title' => 'Osaka Castle & Bullet Train back to Tokyo',
                'description' => 'Visit Osaka Castle Park before riding the bullet train back to Tokyo for a final farewell night.'
            ],
            [
                'day' => 8,
                'title' => 'Departure from Tokyo',
                'description' => 'Narita/Haneda Express train transfer to airport.'
            ]
        ]
    ],

    'rockies-rail-coach-discovery' => [
        'id' => 6,
        'slug' => 'rockies-rail-coach-discovery',
        'title' => 'Canadian Rockies Rail & Express Coach Explorer',
        'subtitle' => '7-Day Scenic Tour through Vancouver, Kamloops, Jasper, & Banff National Park',
        'category' => 'Mixed Scenic Transit',
        'badge' => 'Nature & Wildlife',
        'duration' => '7 Days / 6 Nights',
        'price_from' => 1399,
        'price_was' => 1649,
        'rating' => 4.9,
        'reviews_count' => 87,
        'destination' => 'Canada (Vancouver, Banff, Jasper, Calgary)',
        'hero_image' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1200&q=80',
        'overview' => 'Ride VIA Rail scenic passenger trains and Brewster express coaches through the heart of the Canadian Rockies. Witness turquoise glacial lakes, icefield snowcoaches, and mountain wildlife in Banff & Jasper.',
        'highlights' => [
            'VIA Rail Passenger Train Tickets with Dome Car Glass Roof Access',
            'Columbia Icefield Ice Explorer All-Terrain Glacier Truck Tour',
            'Lake Louise & Moraine Lake Express Coach Pass',
            'Banff Gondola Summit Cable Car Pass',
            'Mountain Lodge Hotel Stays in Jasper & Banff'
        ],
        'inclusions' => [
            '6 Nights accommodation in premium mountain resorts & city hotels',
            'VIA Rail passenger train tickets and express coach transfers',
            'Parks Canada National Park entry permits included',
            'Daily breakfast and Icefield glacier tour admission'
        ],
        'exclusions' => [
            'Flights to Vancouver (YVR) and from Calgary (YYC)',
            'Optional Banff helicopter flight',
            'Personal gratuities'
        ],
        'cancellation_policy' => 'Full refund up to 30 days prior. Subject to VIA Rail and National Park booking rules thereafter.',
        'itinerary' => [
            [
                'day' => 1,
                'title' => 'Arrive in Vancouver',
                'description' => 'Transfer to your downtown hotel near Pacific Central Station. Evening harbor stroll.'
            ],
            [
                'day' => 2,
                'title' => 'VIA Rail Mountain Train to Jasper',
                'description' => 'Board the VIA Rail train into the Cascade Mountains. Relax in the panoramic glass dome car.'
            ],
            [
                'day' => 3,
                'title' => 'Jasper National Park & Maligne Lake',
                'description' => 'Explore Jasper Canyon and boat cruise to Spirit Island.'
            ],
            [
                'day' => 4,
                'title' => 'Icefields Parkway Coach to Lake Louise',
                'description' => 'Ride our express coach along the Icefields Parkway. Step onto ancient ice at Columbia Icefield.'
            ],
            [
                'day' => 5,
                'title' => 'Moraine Lake & Banff Gondola',
                'description' => 'Photographs at Moraine Lake and ride the Banff Gondola to Sulphur Mountain summit.'
            ],
            [
                'day' => 6,
                'title' => 'Banff Town & Hot Springs',
                'description' => 'Leisurely day in Banff village with entry to Upper Hot Springs included.'
            ],
            [
                'day' => 7,
                'title' => 'Express Coach to Calgary Airport',
                'description' => 'Direct 90-minute express coach transfer to Calgary International Airport (YYC).'
            ]
        ]
    ]
];

/**
 * Get package by slug
 */
function get_package_by_slug($slug) {
    global $travel_packages;
    if (isset($travel_packages[$slug])) {
        return $travel_packages[$slug];
    }
    return null;
}

/**
 * Get package by ID
 */
function get_package_by_id($id) {
    global $travel_packages;
    foreach ($travel_packages as $pkg) {
        if ($pkg['id'] == $id) {
            return $pkg;
        }
    }
    return null;
}
?>
