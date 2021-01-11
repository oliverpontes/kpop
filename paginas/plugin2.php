<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Landing Page</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<header id="header">
  <div id="image">
      <img src="https://cdn140.picsart.com/240084203033212.png?r1024x1024" alt="" id="header-img"/>
  </div>

  <nav id="nav-bar">
    <a href="#video" class="nav-link">Video</a>
    <a href="#form" class="nav-link">Form</a>
    <a href="#albums" class="nav-link">Albums</a>
  </nav>
</header>
<body>
  <h1>Twice - Kpop group</h1>
  <iframe id="video" width="854" height="480" src="https://www.youtube.com/embed/Fm5iP0S1z9w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  
  <form id="form" action="https://www.freecodecamp.com/email-submit">
    <input name="email" id="email" type="email" placeholder="Enter your email address" required/>
    <input id="submit" type="submit" value="Get Started" class="btn"></input>
  </form>

  <h1 id="album-title">Twice Albums</h1>
  <div id="albums">
    <div id="twicetagram" class="album">
      <img src="https://upload.wikimedia.org/wikipedia/en/e/eb/Twicetagram_album_cover.png" alt="">
      <p class="album-name">Twicetagram</p>
      <a href="https://open.spotify.com/album/7dOZAeST5qCpfpQRAHq9sa" target="_blank">Spotify</a>
    </div>
    <div id="merry-happy" class="album">
      <img src="https://upload.wikimedia.org/wikipedia/en/b/b8/Twice-Merry_%26_Happy_%28album_cover%29.jpg" alt="">
      <p class="album-name">Merry & Happy</p>
       <a href="https://open.spotify.com/album/7z35ak4YnECGLJADDJ4obf" target="_blank">Spotify</a>
    </div>
    <div id="the-story-begins" class="album">
      <img src="https://upload.wikimedia.org/wikipedia/en/1/17/TheStoryBegins.jpg" alt="">
      <p class="album-name">The Story Begins</p>
      <a href="https://open.spotify.com/album/3uLLMZwXdtGAD3BAB12jUM" target="_blank">Spotify</a>
    </div>
    
  </div>
</body>
<footer> Created by Jeison Pham</footer>
<!-- partial -->
  <script src='https://gitcdn.link/repo/freeCodeCamp/testable-projects-fcc/master/build/bundle.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
</body>
</html>
