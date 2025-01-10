<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <h1>Welcome to My Blog</h1>

    <?php foreach ($blogs as $blog):?>
        <a href="blog/<?= $blog->slug ?>"> <?= $blog->slug ?> </a>
        <div>
            <p>
                    <?= $blog->intro ?>
            </p>
        </div>
    <?php endforeach; ?>


{{--    <article>--}}
{{--        <a href="/blog/first_blog">First Blog</a>--}}
{{--        <h1>I am Title</h1>--}}
{{--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam aliquid architecto asperiores atque consequatur deleniti dolor, dolores eius et ipsa iusto maxime modi molestiae natus neque, nihil nostrum, quae quas quo quod quos ratione reprehenderit rerum sequi vel vitae. Dolor dolore doloremque eligendi nam necessitatibus quae quam rem repellendus soluta. Harum incidunt nihil numquam reprehenderit soluta? Deleniti, dolorum exercitationem harum incidunt ipsam non ratione saepe ut? Accusantium ad adipisci aperiam asperiores commodi consectetur deleniti dicta dolore dolores explicabo fugit, illum ipsam maxime minus nihil nobis obcaecati officia optio perspiciatis possimus provident quibusdam quidem quos repellendus tempora ut veniam!</p>--}}
{{--    </article>--}}
{{--    <article>--}}
{{--        <a href="/blog/second_blog">Second Blog</a>--}}
{{--        <h1>I am Title</h1>--}}
{{--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam aliquid architecto asperiores atque consequatur deleniti dolor, dolores eius et ipsa iusto maxime modi molestiae natus neque, nihil nostrum, quae quas quo quod quos ratione reprehenderit rerum sequi vel vitae. Dolor dolore doloremque eligendi nam necessitatibus quae quam rem repellendus soluta. Harum incidunt nihil numquam reprehenderit soluta? Deleniti, dolorum exercitationem harum incidunt ipsam non ratione saepe ut? Accusantium ad adipisci aperiam asperiores commodi consectetur deleniti dicta dolore dolores explicabo fugit, illum ipsam maxime minus nihil nobis obcaecati officia optio perspiciatis possimus provident quibusdam quidem quos repellendus tempora ut veniam!</p>--}}
{{--    </article>--}}

    <script src="/app.js"></script>
</body>
</html>
