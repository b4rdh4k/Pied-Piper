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
                    <img src="../img/Ninasimonepastelblues.jpg" alt="Album Cover" class="album-cover">
                    <div class="info">
                        <h2>Nina Simone</h2>
                        <h3>Pastel Blues</h3>
                        <p class="rating">Rating: 5/5</p>
                    </div>
                </div>
        
                
                <div class="review-content">
                    <p>"Pastel Blues" by Nina Simone: A Soul-Stirring Journey through Emotional Landscapes</p>
                    
                </div>
            </div>
            
            <div class="detailed-review">

                <div class="additional-info">
                    <p>Genre: Soul/Blues</p>
                    <p>Date Reviewed: December 12, 2023</p>
                    <p>Label: Philips Records
                    </p>
                </div>

                <h2>Review</h2>

                <div class="starz-review">
                    <p>
                        Nina Simone's "Pastel Blues" is a timeless masterpiece that transcends the boundaries of genre, offering a soul-stirring journey through a spectrum of emotions. Released in 1965, this album stands as a testament to Simone's unparalleled ability to infuse each note with raw, unfiltered passion and storytelling prowess.

The title itself, "Pastel Blues," hints at the album's exploration of complex emotions painted with a delicate yet profound brush. Simone's distinctive voice, marked by its deep timbre and emotive range, becomes the guiding force through this musical odyssey. From the hauntingly poignant "Strange Fruit" to the defiant strength of "Sinnerman," the album weaves a tapestry of blues, jazz, and folk influences, showcasing Simone's versatility as an artist.
                    </p>
                    <br>
                    <p>"Strange Fruit," a chilling commentary on racial injustice, remains one of the standout tracks. Simone's interpretation of this iconic song brings an additional layer of intensity, making it a visceral experience that resonates with the listener long after the last note fades. The song becomes a poignant social commentary, capturing the struggles and realities of the time.

                        Throughout "Pastel Blues," Simone's piano skills shine, providing the perfect accompaniment to her vocals. The arrangements are intricate, and the dynamics of each track ebb and flow with an organic fluidity. The emotional weight of Simone's performance is further emphasized by the minimalistic yet powerful musical backdrop.
                        
                        The album's ability to seamlessly transition between sorrow, hope, and resilience is a testament to Nina Simone's unmatched artistry. Tracks like "Tell Me More and More and Then Some" and "Do I Move You" showcase Simone's ability to explore the complexities of love and desire with unmatched authenticity.
                        
                        "Pastel Blues" is not merely a collection of songs; it's a sonic journey that invites listeners to delve into the depths of the human experience. Nina Simone's masterful storytelling, combined with her evocative delivery, cements this album as a cornerstone in the realms of blues and jazz, leaving an indelible mark on the landscape of music history.</p>
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
            let imgArray = ['../img/ninasimone1.JPG','../img/ninasimone2.jpg','../img/ninasimone3.jpg'];
    
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
