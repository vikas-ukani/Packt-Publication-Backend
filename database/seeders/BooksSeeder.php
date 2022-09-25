<?php

namespace Database\Seeders;

use App\Models\Books;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $books = [
            [
                "id" =>  1,
                "category_id" => 1,
                "title" => "Laravel Application Development Cookbook",
                "body" =>  "About this book
                When creating a web application, there are many PHP frameworks from which to choose. Some are very easy to set up, and some have a much steeper learning curve. Laravel offers both paths. You can do a quick installation and have your app up-and-running in no time, or you can use Laravel’s extensibility to create an advanced and fully-featured app.
                Laravel Application Development Cookbook provides you with working code examples for many of the common problems that web developers face. In the process, it will also allow both new and existing Laravel users to expand their knowledge of the framework.
                This book will walk you through all aspects of Laravel development. It begins with basic set up and installation procedures, and continues through more advanced use cases.
                You will also learn about all the helpful features that Laravel provides to make your development quick and easy. For more advanced needs, you will also see how to utilize Laravel’s authentication features and how to create a RESTful API.
                In the Laravel Application Development Cookbook, you will learn everything you need to know about a great PHP framework, with working code that will get you up-and-running in no time.
                Publication date:
                October 2013
                Publisher
                Packt
                Pages
                272
                ISBN
                9781782162827",
                "auther" => "Vikas Ukani",
                "image" => "https://static.packt-cdn.com/products/9781782162827/cover/smaller",
                "status" => 'Published',
                "price" => "2,000",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "id" =>  2,
                "category_id" => 1,
                "title" => "React.js – Key Concepts",
                "body" =>  "As the most popular JavaScript library for building modern, interactive user interfaces, React is an in-demand framework that will bring real value to your career or next project. But like any technology, learning React can be tricky, and finding the right teacher can make things a whole lot easier.
                Maximilian Schwarzmüller is a bestselling instructor who has helped over two million students worldwide learn how to code, and his latest React video course (React — The Complete Guide) has over five hundred thousand students on Udemy.
                Max has written this quick reference guide to help clarify the world of React programming. Simple explanations, relevant examples, and a clear, concise approach make this fast-paced guide the ideal resource for busy developers.
                By distilling the core concepts of React and drawing together key features with neat summaries, it's the perfect complement to other in-depth teaching resources. So, whether you've just finished Max’s React video course and are looking for a handy reference tool, or you've been using a variety of other learning materials and now need a single study guide to knit everything together, this is the ideal companion to support you through your next React projects. Plus, it's fully up to date for React 18, so you can be sure you’re ready to go with the latest version.",
                "auther" => "Vikas Ukani",
                "image" => "https://static.packt-cdn.com/products/9781803234502/cover/smaller",
                "status" => 'Published',
                "price" => "1,000",
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "id" =>  3,
                "category_id" => 3,
                "title" => "Machine Learning with PyTorch and Scikit-Learn",
                "body" =>  "About this book
                Machine Learning with PyTorch and Scikit-Learn is a comprehensive guide to machine learning and deep learning with PyTorch. It acts as both a step-by-step tutorial and a reference you'll keep coming back to as you build your machine learning systems.
                Packed with clear explanations, visualizations, and examples, the book covers all the essential machine learning techniques in depth. While some books teach you only to follow instructions, with this machine learning book, we teach the principles allowing you to build models and applications for yourself.
                Why PyTorch?
                PyTorch is the Pythonic way to learn machine learning, making it easier to learn and simpler to code with. This book explains the essential parts of PyTorch and how to create models using popular libraries, such as PyTorch Lightning and PyTorch Geometric.
                You will also learn about generative adversarial networks (GANs) for generating new data and training intelligent agents with reinforcement learning. Finally, this new edition is expanded to cover the latest trends in deep learning, including graph neural networks and large-scale transformers used for natural language processing (NLP).
                This PyTorch book is your companion to machine learning with Python, whether you're a Python developer new to machine learning or want to deepen your knowledge of the latest developments.",
                "auther" => "Vikas Ukani",
                "image" => "https://static.packt-cdn.com/products/9781801819312/cover/smaller",
                "status" => 'Published',
                "price" => "5,000",
                "created_at" => $now,
                "updated_at" => $now
            ]
        ];
        DB::table('books')->insert($books);
        Books::factory()->count(200)->create();
    }
}
