<!DOCTYPE html>
<html lang="ja">
<head>
</head>
<head>
    <title>Laravel Bulma Sample</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google fonts START --!>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&family=Potta+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&family=Potta+One&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Google fonts START --!>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" defer ></script>
    <style>
        body {
            /* font-family: 'Zen Kaku Gothic Antique', sans-serif; */
            /* font-family: 'Noto Sans JP', sans-serif; */
            font-family: 'Potta One', cursive;
            color: #1B7DFF;
        main {
          background-color: #eeeeee;
        }
    </style>
</head>
<body style="background-color: #fff; color: #1B7DFF;">

    <header>
        <div class="hero is-bold">
           <div class="hero-body">
               <div class="container">
                  <a href="/"><h1 class="title" style="color: #1B7DFF;">Phirog</h1>
                  <h2 class="subtitle" style="color: #1B7DFF;">悩みで占い師を見つけられるサイト</h2></a>
               </div>
           </div>
        </div>
    </header>
    @yield('content')
<footer class="footer">
   <div class="container">
     <div class="content has-text-centered">
         &copy; 2023 Phirog. All rights reserved.
     </div>
   </div>
</footer>

</body>
</html>

