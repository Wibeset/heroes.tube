<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Heroes Tube</title>
    <meta name="description" content="Watch movie trailers, teasers, TV spots, clips and featurettes for upcoming films from your favorite (super) heroes.">
    <meta name="author" content="Wibeset">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Heroes Tube">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="Heroes Tube">
    <meta property="og:description" content="Watch movie trailers, teasers, TV spots, clips and featurettes for upcoming films from your favorite (super) heroes.">
    <meta property="og:type" content="">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="http://www.heroes.tube">
    <link rel="icon" type="image/x-icon" href="favicon.ico?v={{ $version }}">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//google-analytics.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400,700">
    <link rel="stylesheet" href="app.css?v={{ $version }}" type="text/css">
</head>
<body>

    <article>
        <header>
            <h1><em>Heroes Tube</em> Watch movie trailers, teasers, TV spots, clips and featurettes for upcoming films
                from your favorite (super) heroes.</h1>
        </header>
        @foreach ($movies as $movie)
            <section class="movie" data-image="{{ $movie['image'] }}" data-movie="true">
                <header>
                    <h2>{{ $movie['title'] }}</h2>
                    <em>{{ Carbon\Carbon::createFromFormat("Y-m-d", $movie['date'])->formatLocalized("%B %e, %Y") }}</em>
                </header>
                <p>{{ $movie['description'] }} (<a href="{{ $movie['imdb'] }}">IMDB</a>)</p>
                <h3>Videos</h3>
                <ul>
                    @foreach ($movie['videos'] as $title => $id)
                        <li><a href="https://www.youtube.com/watch?v={{ $id }}">{{ $title }}</a></li>
                    @endforeach
                </ul>
            </section>
        @endforeach
        <footer>
            Handcrafted with <i class="fa fa-fw fa-heart animated infinite pulse"></i> by <a href="http://www.wibeset.com">a fan of superhero movies</a>.
            Interested in some text-based superhero tees ? Take a look at my shop
            <a href="http://omnomnomtshirts.com/">Om Nom Nom</a>.
        </footer>
    </article>

    <aside>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
    </aside>

    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="app.js?v={{ $version }}"></script>

</body>
</html>
