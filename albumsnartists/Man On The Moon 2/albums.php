<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pied Piper - Articles</title>
    <link rel="stylesheet" href="albums.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Foldit&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <img src="../../img/logo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="../../index.html">Home</a></li>
                    <li><a href="../../quiz/quiz.html">Quiz</a></li>
                    <li><a href="../../articles/articles.html">Articles</a></li>
                </ul>
            </nav>
            <div class="dropdown">
                <img src="../img/menu.png" class="menu-icon" alt="drop-down menu">
                <div class="dropdown-content">
                    <a href="../../login/login.html">Log In</a>
                    <a href="../../form/form.html">Sign up</a>      
                </div>
            </div>
        </div>

        <div class="content">
            
            <div class="album-review">
                <div class="review-header">
                    <img src="../img/manonthemoon2.jpg" alt="Album Cover" class="album-cover">
                    <div class="info">
                        <h2>Kid Cudi</h2>
                        <h3>Man on the Moon II: The Legend of Mr. Rager</h3>
                        <p class="rating">Rating: 5/5</p>
                    </div>
                </div>
        
                
                <div class="review-content">
                    <p>Cosmic Chronicles: Kid Cudi's Sonic Odyssey in 'Man on the Moon II: The Legend of Mr. Rager</p>
                    
                </div>
            </div>
            
            <div class="detailed-review">

                <div class="additional-info">
                    <p>Genre: Hip-Hop/Rap</p>
                    <p>Date Reviewed: December 12, 2023</p>
                    <p>Label: Universal Motown Records
                    </p>
                </div>

                <h2>Review</h2>

                <div class="starz-review">
                    <p>Man on the Moon II: The Legend of Mr. Rager" is a captivating musical journey that delves deep into the psyche of its creator, Scott Mescudi, better known as Kid Cudi. Released in 2010 as a sequel to the acclaimed "Man on the Moon: The End of Day," this album stands as a testament to Cudi's unique approach to hip-hop and his ability to blend introspective lyrics with innovative production.

                        The album opens with the ethereal "Scott Mescudi vs. The World," setting the tone for a sonic exploration of self-discovery, inner turmoil, and the pursuit of happiness. The production throughout the album is atmospheric and immersive, featuring a fusion of hip-hop, rock, and electronic elements. Kid Cudi's signature moody hums and introspective verses create an otherworldly atmosphere, drawing listeners into his personal narrative.
                    </p>
                    <br>
                    <p>One of the standout tracks, "Erase Me" featuring Kanye West, showcases the album's versatility with its infectious melody and rock-infused production. Cudi's candid lyrics about relationships, fame, and the struggles of staying true to oneself resonate deeply, providing listeners with a relatable and emotionally charged experience.

                        "Mr. Rager" stands out as a poignant exploration of Cudi's internal battles and the pursuit of escapism. The haunting production, coupled with Cudi's evocative storytelling, paints a vivid picture of the complex emotions he grapples with. The album's narrative unfolds like a surreal dreamscape, blurring the lines between reality and fantasy
                        Man on the Moon II" is more than just a collection of songs; it's a sonic odyssey that invites listeners to explore the recesses of Kid Cudi's mind. The album's cohesive storytelling, combined with its innovative production, solidifies it as a landmark project in the realm of alternative hip-hop. Kid Cudi's willingness to lay bare his struggles and triumphs creates a connection with the audience, making "Man on the Moon II" a timeless and deeply resonant musical experience.</p>
                </div>
                
                
            </div>
            <div id="kontenti">
                <header>
                <img id="slideshow" />
                </header>
                <button onclick="changeImg()">Next</button>
            </div>
        
        </div>
            
        </div>
        
        <script>
            let i = 0;
            let imgArray = ['../img/kidcudi1.jpg','../img/kidcudi2.jpg','../img/kidcudi3.jpeg'];
    
            function changeImg(){
                document.getElementById('slideshow').src = imgArray[i];
    
                if(i< imgArray.length -1){
                    i++;
                }
                else{
                    i=0;
                }
            }
            document.addEventListener(onload, changeImg());
        </script>
    </div>
</body>
</html>
