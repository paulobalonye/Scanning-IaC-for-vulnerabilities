<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::insert([
            ['id' => 1, 'uuid' => Str::uuid()->toString(), 'user_id' => 2, 'instructor_id' => 1, 'category_id' => '1', 'subcategory_id' => '1', 'course_language_id' => '1', 'difficulty_level_id' => '1',
                'title' => 'JavaScript: Understanding the Weird Parts', 'description' => 'Javascript is the language that modern developers need to know, and know well. Truly knowing Javascript will get you a job, and enable you to build quality web and server applications.',
                'subtitle' => 'In this course you will gain a deep understanding of Javascript, learn how Javascript works under the hood, and how that knowledge helps you avoid common pitfalls and drastically improve your ability to debug problems. You will find clarity in the parts that others, even experienced coders, may find weird, odd, and at times incomprehensible.',
                'feature_details' => '', 'price' => '50', 'learner_accessibility' => 'paid','intro_video_check' => 1,'image' => 'uploads_demo/course/1.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('JavaScript: Understanding the Weird Parts'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],

            ['id' => 2, 'uuid' => Str::uuid()->toString(), 'user_id' => 2, 'instructor_id' => 1, 'category_id' => '1', 'subcategory_id' => '1', 'course_language_id' => '1', 'difficulty_level_id' => '1',
                'title' => 'React - The Complete Guide (incl Hooks, React Router, Redux)', 'description' => 'This course is fully up-to-date with React 18 (the latest version of React)! It was completely updated and re-recorded from the ground up - it teaches the very latest version of React with all the core, modern features you need to know!',
                'subtitle' => 'Welcome to "React - The Complete Guide"! This course will teach you React.js in a practice-oriented way, using all the latest patterns and best practices you need. You will learn all the key fundamentals as well as advanced concepts and related topics to turn you into a React.js developer.',
                'feature_details' => '', 'price' => '60', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/2.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('React - The Complete Guide (incl Hooks, React Router, Redux)'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],

            ['id' => 3, 'uuid' => Str::uuid()->toString(), 'user_id' => 4, 'instructor_id' => 2, 'category_id' => '1', 'subcategory_id' => '1', 'course_language_id' => '1', 'difficulty_level_id' => '1',
                'title' => 'Angular - The Complete Guide', 'description' => 'Join the most comprehensive and bestselling Angular course on Udemy and learn all about this amazing framework from the ground up, in great depth! This course starts from scratch, you neither need to know Angular 1 nor Angular 2! Angular 13 simply is the latest version of Angular 2, you will learn this amazing framework from the ground up in this course!',
                'subtitle' => 'TypeScript is the main language used by the official Angular team and the language you\'ll mostly see in Angular tutorials. It\'s a superset to JavaScript and makes writing Angular apps really easy. Using it ensures, that you will have the best possible preparation for creating Angular apps. Check out the free videos for more information.',
                'feature_details' => '', 'price' => '45', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/3.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('Angular - The Complete Guide'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'uuid' => Str::uuid()->toString(), 'user_id' => 5, 'instructor_id' => 3, 'category_id' => '1', 'subcategory_id' => '1', 'course_language_id' => '1', 'difficulty_level_id' => '1',
                'title' => 'NodeJS - The Complete Guide (MVC, REST APIs, GraphQL, Deno)', 'description' => 'Join the most comprehensive Node.js course on Udemy and learn Node in both a practical as well as theory-based way!',
                'subtitle' => 'This course will teach you all of that! From scratch with zero prior knowledge assumed. Though if you do bring some knowledge, you\'ll of course be able to quickly jump into the course modules that are most interesting to you.',
                'feature_details' => '', 'price' => '70', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/4.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('NodeJS - The Complete Guide (MVC, REST APIs, GraphQL, Deno)'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'uuid' => Str::uuid()->toString(), 'user_id' => 6, 'instructor_id' => 4, 'category_id' => '1', 'subcategory_id' => '1', 'course_language_id' => '1', 'difficulty_level_id' => '1',
                'title' => 'PHP for Beginners - Become a PHP Master - CMS Project', 'description' => 'There is no limit to what you can do with this knowledge. PHP is one of the most important web programming languages to learn, and knowing it, will give you SUPER POWERS in the web development world and job market place.',
                'subtitle' => 'Because Millions of websites and applications (the majority) use PHP. You can find a job anywhere or even work on your own, online and in places like freelancer or Odesk. You can definitely make a substantial income once you learn it.',
                'feature_details' => '', 'price' => '80', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/5.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('PHP for Beginners - Become a PHP Master - CMS Project'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],

            ['id' => 6, 'uuid' => Str::uuid()->toString(), 'user_id' => 5, 'instructor_id' => 3, 'category_id' => '2', 'subcategory_id' => '6', 'course_language_id' => '1', 'difficulty_level_id' => '1',
                'title' => 'PHP OOP: Object Oriented Programming for beginners + Project', 'description' => 'PHP has allowed me to make a really great income, so much that It gives me time to teach others about it. You too can become a professional in the field, and create the life you always dreamed of.',
                'subtitle' => 'PHP is one of the best web programming languages in the world, and all the big important websites, like Google, Apple, Facebook, Yahoo, Wikipedia and many more, use it for their web applications.',
                'feature_details' => '', 'price' => '20', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/6.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('PHP OOP: Object Oriented Programming for beginners + Project'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'uuid' => Str::uuid()->toString(), 'user_id' => 4, 'instructor_id' => 2, 'category_id' => '2', 'subcategory_id' => '6', 'course_language_id' => '1', 'difficulty_level_id' => '1',
                'title' => 'APIs in PHP: from Basic to Advanced', 'description' => 'An API is a way for a program to interact with another program. By using third-party APIs from your code, you can utilise functionality developed elsewhere. By creating an API to access your own data, other programs can take advantage of your services in a secure and easy fashion.',
                'subtitle' => 'When you complete the course you\'ll be able to use APIs in your PHP applications to leverage third-party components and services. You\'ll also be able to create your own API, using various authentication techniques depending on the type of API you want to create.',
                'feature_details' => '', 'price' => '30', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/7.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('APIs in PHP: from Basic to Advanced'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'uuid' => Str::uuid()->toString(), 'user_id' => 6, 'instructor_id' => 4, 'category_id' => '2', 'subcategory_id' => '6', 'course_language_id' => '1', 'difficulty_level_id' => '1',
                'title' => 'The Ultimate PHP Training Bundle for Beginner to Advanced', 'description' => 'PHP is an invaluable tool to help web developers build powerful websites. Despite how PHP powerful it is, few web developers know how to use PHP to its full potential, which is where our Ultimate PHP Training Bundle comes in.',
                'subtitle' => 'This training bundle combines two jam-packed PHP courses into one training bundle.',
                'feature_details' => '', 'price' => '25', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/8.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('The Ultimate PHP Training Bundle for Beginner to Advanced'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'uuid' => Str::uuid()->toString(), 'user_id' => 5, 'instructor_id' => 3, 'category_id' => 2, 'subcategory_id' => 6, 'course_language_id' => 1, 'difficulty_level_id' => 1,
                'title' => 'Learn HTML5 Programming From Scratch', 'description' => ' HTML5 is one of the hot web technologies and is widely gaining acceptance across mobile and web. In our course, you get a complete resource that can get you started on application development for HTML5. In our course, you work on actual examples and go through important concepts required for thorough knowledge..',
                'subtitle' => 'n our course, you will start with basic HTML tags. You will learn how to create HTML websites and use CSS in your work before we start discussing HTML5',
                'feature_details' => '', 'price' => '17', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/1.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('Learn HTML5 Programming From Scratch'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],

            ['id' => 10, 'uuid' => Str::uuid()->toString(), 'user_id' => 2, 'instructor_id' => 1, 'category_id' => 3, 'subcategory_id' => 10, 'course_language_id' => 1, 'difficulty_level_id' => 1,
                'title' => 'Responsive Web Design: HTML5 + CSS3', 'description' => 'Learn the basic concepts, tools, and functions that you will need to build beautiful and modern websites using HTML5 & CSS3.',
                'subtitle' => 'Learn the basic concepts, tools, and functions that you will need to build beautiful and modern websites using HTML5 & CSS3.',
                'feature_details' => '', 'price' => '28', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/1.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('Responsive Web Design: HTML5 + CSS3'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'uuid' => Str::uuid()->toString(), 'user_id' => 4, 'instructor_id' => 2, 'category_id' => 3, 'subcategory_id' => 10, 'course_language_id' => 1, 'difficulty_level_id' => 1,
                'title' => 'JavaScript JSON AJAX API data for web pages Objects Arrays', 'description' => 'Explore JSON and how you can use JSON data from an API to update your page contents.',
                'subtitle' => 'JSON is short for JavaScript Object Notation which is the most commonly used data standard format for transferring of data.  Its human readable which makes it easy to read.   Its used across all modern programming language.   Because its based off JavaScript Objects understanding of how to get content from JavaScript object and arrays is essential in being able to better make use of data with JSON.',
                'feature_details' => '', 'price' => '35', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/2.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('JavaScript JSON AJAX API data for web pages Objects Arrays'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'uuid' => Str::uuid()->toString(), 'user_id' => 5, 'instructor_id' => 3, 'category_id' => 3, 'subcategory_id' => 10, 'course_language_id' => 1, 'difficulty_level_id' => 1,
                'title' => 'ABAP on HANA Training Tutorial A to Z concepts', 'description' => 'ABAP (development) for SAP HANA refers to all developments which leverage the power of SAP HANA within ABAP-based applications. In this context, the SAP HANA platform is the primary database underlying the ABAP platform. This system deployment option is supported with AS ABAP 7.4 onwards.',
                'subtitle' => 'CDS represents SAP’s next generation of data definition and access for database-centric applications. Technically, CDS uses and extends SQL to capture the business intent.',
                'feature_details' => '', 'price' => '14','intro_video_check' => 1, 'learner_accessibility' => 'paid', 'image' => 'uploads_demo/course/3.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('ABAP on HANA Training Tutorial A to Z concepts'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'uuid' => Str::uuid()->toString(), 'user_id' => 6, 'instructor_id' => 4, 'category_id' => 3, 'subcategory_id' => 10, 'course_language_id' => 1, 'difficulty_level_id' => 1,
                'title' => 'SAP ABAP Job Ready In 23 Days And Help In Getting Job', 'description' => 'After The Training Is Completed, I Will Also Help You In Getting Job With A Good Package.',
                'subtitle' => 'After The Training Is Completed, I Will Also Help You In Getting Job With A Good Package.',
                'feature_details' => '', 'price' => '14', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/3.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('SAP ABAP Job Ready In 23 Days And Help In Getting Job'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],

            ['id' => 14, 'uuid' => Str::uuid()->toString(), 'user_id' => 4, 'instructor_id' => 2, 'category_id' => 4, 'subcategory_id' => 13, 'course_language_id' => '1', 'difficulty_level_id' => '1',
                'title' => 'Object Oriented Programming for beginners', 'description' => 'PHP has allowed me to make a really great income, so much that It gives me time to teach others about it. You too can become a professional in the field, and create the life you always dreamed of.',
                'subtitle' => 'PHP is one of the best web programming languages in the world, and all the big important websites, like Google, Apple, Facebook, Yahoo, Wikipedia and many more, use it for their web applications.',
                'feature_details' => '', 'price' => '20', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/6.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('Object Oriented Programming for beginners'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'uuid' => Str::uuid()->toString(), 'user_id' => 5, 'instructor_id' => 3, 'category_id' => 4, 'subcategory_id' => 13, 'course_language_id' => '1', 'difficulty_level_id' => '1',
                'title' => 'APIs in PHP: from Basic to Advanced', 'description' => 'An API is a way for a program to interact with another program. By using third-party APIs from your code, you can utilise functionality developed elsewhere. By creating an API to access your own data, other programs can take advantage of your services in a secure and easy fashion.',
                'subtitle' => 'When you complete the course you\'ll be able to use APIs in your PHP applications to leverage third-party components and services. You\'ll also be able to create your own API, using various authentication techniques depending on the type of API you want to create.',
                'feature_details' => '', 'price' => '30', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/7.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('APIs in PHP: from Basic to Advanced'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'uuid' => Str::uuid()->toString(), 'user_id' => 6, 'instructor_id' => 4, 'category_id' => 4, 'subcategory_id' => 14, 'course_language_id' => '1', 'difficulty_level_id' => '1',
                'title' => 'The Ultimate PHP Training Bundle for Beginner to Advanced', 'description' => 'PHP is an invaluable tool to help web developers build powerful websites. Despite how PHP powerful it is, few web developers know how to use PHP to its full potential, which is where our Ultimate PHP Training Bundle comes in.',
                'subtitle' => 'This training bundle combines two jam-packed PHP courses into one training bundle.',
                'feature_details' => '', 'price' => '25', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/8.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('The Ultimate PHP Training Bundle for Beginner to Advanced'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'uuid' => Str::uuid()->toString(), 'user_id' => 4, 'instructor_id' => 2, 'category_id' => 4, 'subcategory_id' => 14, 'course_language_id' => 1, 'difficulty_level_id' => 1,
                'title' => 'Learn HTML5 Programming From Scratch', 'description' => ' HTML5 is one of the hot web technologies and is widely gaining acceptance across mobile and web. In our course, you get a complete resource that can get you started on application development for HTML5. In our course, you work on actual examples and go through important concepts required for thorough knowledge..',
                'subtitle' => 'n our course, you will start with basic HTML tags. You will learn how to create HTML websites and use CSS in your work before we start discussing HTML5',
                'feature_details' => '', 'price' => '17', 'learner_accessibility' => 'paid','intro_video_check' => 1, 'image' => 'uploads_demo/course/1.jpg', 'video' => 'uploads_demo/course/test.mp4', 'slug' => Str::slug('Learn HTML5 Programming From Scratch'), 'status' => 1, 'average_rating' => 0.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
