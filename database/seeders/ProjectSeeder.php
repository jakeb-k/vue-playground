<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert(
            ['name'=>"Nomster",
            'description'=>"Nomster is an all-in-one meal planning and fitness app, blending angular and ionic for a cross-platform experience with a focus on interactive recipe searching and efficient data handling.+Leverages Spoonacular API, sqlite, and a sleek UI with HTML and SCSS for dynamic recipe browsing and robust data storage.+Offers personalized profiles, interactive recipes, grocery lists, and detailed calorie tracking, all underpinned by typescript for backend stability.+Features a smart onboarding process for tailored calorie goals and delivers key nutritional insights, optimizing user engagement and health tracking.",
            'type'=>'mobile',
            'url'=>'https://github.com/jakeb-k/nomster',
            'techs'=>'html5,sass,ionic,typescript,angular,sqlite,github,androidstudio',
            'status'=>'In Progress - Scheduled Release in 2024',
            'logo'=>'nomsterLogo.webp']);
            
        DB::table('projects')->insert(
            ['name'=>'Aussie_PicklePro',
            'description'=>"Aussie PicklePro is a sophisticated Laravel-based e-commerce platform, hosted on a linux server I maintain, designed for an optimal online shopping experience+Utilizes laravel, jquery, and SCSS to offer dynamic user interfaces, interactive elements, and seamless admin and user functionalities.+Features robust product and order management, user account customization, and engaging UI/UX designs, backed by a comprehensive sqlite database.+Integrates stripe for secure payments, SMTP for email notifications, and implements SEO strategies to enhance online visibility. ",
            'type'=>'web',
            'url'=>'https://aussiepicklepro.com.au/',
            'techs'=>'php,laravel,jquery,html5,sass,sqlite,github,linux,stripe,hostinger,googleanalytics',
            'status'=>'Completed November 23',
            'logo'=>'pickleLogo.webp'
        ]);
        DB::table('projects')->insert(
            ['name'=>"Freemans_Lawns",
            'description'=>"Freemans Lawns features a dynamic, SEO-optimized website and a feature-rich blog with a robust CMS, all designed to enhance user engagement and site manageability.+Combines html5, SCSS, and jquery for a compelling UI, alongside laravel for backend efficiency, offering an engaging, responsive experience across devices.+Implements MVC architecture with sqlite for efficient data management, user authentication with Vite, and engaging jquery animations to boost interactivity.+Features a WordPress version with ACF for tailored content management, ensuring the site's functionality and design are consistent with the original bespoke solution.",
            'type'=>'web',
            'url'=>'https://vimeo.com/899431114?share=copy',
            'techs'=>'php,laravel,jquery,html5,sass,sqlite,github,linux,googleanalytics,WordPress',
            'status'=>'Completed January 24',
            'logo'=>'freemanLogo.webp']);

        DB::table('projects')->insert(
            ['name'=>'Mat-Mart',
            'description'=>'Mat Mart is a laravel-based personal e-commerce website, with a responsive design and hosted on a secure linux server.+Features an administrative dashboard with CRUD capabilities, custom user interfaces using SCSS and Blade, and a dynamic, responsive design ensuring seamless cross-device functionality.+Implements advanced features like efficient version control with Git, optimized database schema, and robust search functionality, enhancing user interaction and site performance.+Offers a user-friendly account management system, real-time review updates, and leverages linux server hosting for maximum reliability and security.',
            'type'=>'web',
            'url'=>'https://matmart.shop/',
            'techs'=>'php,laravel,jquery,html5,sass,sqlite,github,linux,stripe,hostinger,googleanalytics',
            'status'=>'Completed August 23',
            'logo'=>'mmLogo.webp']);

        DB::table('projects')->insert(
            ['name'=>'HaHa_Hub',
            'description'=>'HaHa Hub is an humor-centered mobile application, developed solo using angular, ionic Capacitor, and typescript, delivering a unique blend of comedy and technology.+Utilizes angular and ionic Capacitor for cross-platform mobile app development, with a typescript backend ensuring robust data handling and application logic.+Features API integration for a vast joke collection, a user-friendly UI/UX design with html5 and SCSS, and includes Google AdMob for monetization.+Employs Git for version control, typescript for backend structure, and a successful Google Ads campaign, demonstrating effective marketing and user engagement strategies.',
            'type'=>'mobile',
            'url'=>'https://play.google.com/store/apps/details?id=com.ionic.hahahub&pli=1',
            'techs'=>'html5,sass,ionic,typescript,angular,github,androidstudio,GoogleAds',
            'status'=>'Completed September 23 - Available on the Google Play Store',
            'logo'=>'hahaLogo.webp']);

        DB::table('projects')->insert(
            ['name'=>'Japres',
            'description'=>"Japres is an engaging mobile app designed for learning Japanese, leveraging angular, ionic, and typescript to provide an engaging educational experience.+Developed by a team using angular and ionic for a seamless mobile experience and typescript for advanced interaction, ensuring an interactive and effective learning environment.+Creates exciting UI with SCSS and HTML, Agile methodology for flexible development, and Android Studio for APK generation, delivering a high-quality, user-centric educational app.+Offers language games and study tools, powered by a collaborative team effort, emphasizing user-centric design for learners at various proficiency levels.",
            'type'=>'mobile',
            'url'=>'https://vimeo.com/899423632?share=copy',
            'techs'=>'html5,sass,ionic,typescript,angular,github,androidstudio,Trello',
            'status'=>'Completed October 23',
            'logo'=>'japresLogo.webp'
        ]);

        DB::table('projects')->insert(
            ['name'=>'F-Service',
            'description'=>"Food Service is a streamlined web app emulating popular food delivery platforms, offering user-friendly features for customers and restaurants alike.+Users can explore restaurants, order, and favorite dishes, while eateries can manage menus and orders with full CRUD functions.+Built with laravel and sqlite backend, HTML and CSS frontend, ensuring a durable and visually pleasing experience.+Hosted on a linux server, utilizing Git for version control, highlighting the system's dependability and secure collaboration.",
            'type'=>'web',
            'url'=>'https://foodservice-mock.online/',
            'techs'=>'php,laravel,jquery,html5,sass,sqlite,github,linux',
            'status'=>'Completed July 23',
            'logo'=>'fsLogo.webp'
        ]);
    }
}
