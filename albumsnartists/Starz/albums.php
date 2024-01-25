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
                    <img src="../img/starz.png" alt="Album Cover" class="album-cover">
                    <div class="info">
                        <h2>Yung Lean</h2>
                        <h3>Starz</h3>
                        <p class="rating">Rating: 4.5/5</p>
                    </div>
                </div>
        
                
                <div class="review-content">
                    <p>Yung Lean's "Starz": A Glimpse into Maturation and Artistic Evolution...</p>
                    
                </div>
            </div>
            
            <div class="detailed-review">

                <div class="additional-info">
                    <p>Genre: Cloud Rap</p>
                    <p>Date Reviewed: December 12, 2023</p>
                    <p>Label: YEAR0001</p>
                </div>

                <h2>Review</h2>

                <div class="starz-review">
                    <p>On “Violence”, the fourth song on Yung Lean’s seventh full-length Starz,
                        the rapper paraphrases a mob boss from The Departed, played by Jack Nicholson:
                         “You’re a product of your environment, my environment’s a product of me.”
                          It’s less of a flex than a statement of fact: Lean is a foundational figure in the pantheon of white,
                           middle-class kids making divisive internet rap. But Jonatan Leandoer Håstad,
                            now rebranded as a vulnerable creative polymath, seeks something deeper than a Yung Lean coronation on his
                             new album: instead of sampling the quote in all its iconic gravitas, Lean mutters
                              his version through a sonic fog, the words ash-choked and made into his own. On Starz, 
                              Yung Lean turns inward without losing his rare ear for speaker-shaking rap, and creates
                               some of the most compelling music of his hip-hop career.
                    </p>
                    <br>
                    <p>On Starz, Lean builds on the melodic excellence of those songs and continues wrestling with his demons. As on Stranger, Lean on Starz
                         sounds like an undead creature of the night who spends his time counting his treasure, reading poetry, and searching out rap on YouTube.
                          But a special Lean song has a text or subtext of romance: the album’s sublime title track, which features Ariel Pink, recounts
                           transcendent puppy love over an ice storm of synth pads: “When I met you that summer I thought it would never end /
                            It would never end / You never end.” He stretches the concept to an absurd, wonderful place on “Butterfly Paralyzed,” a
                             gamble on colliding Darude with 808s & Heartbreak that pays off. Some of Lean’s older songs can aspire to a rote rap ruthlessness
                              as every day as a Jason mask; he can achieve it, and serve the song better, when he embraces the ineffable. 
                              On lead single “Boylife in EU,” a swooning reimagination of witch house with a strident sincerity, Lean creates the resonant 
                        scene of a corrupted haven: “Pretend this dream will never end,” he intones over a funereal synth. “Some things can't be unsaid.”</p>
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
            let imgArray = ['../img/starz1.jpg','../img/starz2.jpg','../img/starz3.jpg'];
    
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
