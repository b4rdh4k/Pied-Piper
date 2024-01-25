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
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="../../quiz/quiz.php">Quiz</a></li>
                    <li><a href="../../articles/articles.php">Articles</a></li>
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
                    <img src="../img/Bladee_333_album_art.jpeg" alt="Album Cover" class="album-cover">
                    <div class="info">
                        <h2>Bladee</h2>
                        <h3>333</h3>
                        <p class="rating">Rating: 4.5/5</p>
                    </div>
                </div>
        
                
                <div class="review-content">
                    <p>Bladee's '333': A Hyper-Digital Dive into Ethereal Realms</p>
                    
                </div>
            </div>
            
            <div class="detailed-review">

                <div class="additional-info">
                    <p>Genre: Alternative Rap/R&B</p>
                    <p>Date Reviewed: December 12, 2023</p>
                    <p>Label: YEAR0001</p>
                </div>

                <h2>Review</h2>

                <div class="starz-review">
                    <p>Bladee's '333' takes listeners on a journey through a hyper-digital landscape, crafting an ethereal realm where the boundaries between reality and the virtual blur. As a pioneer in the genre of hyper-pop and experimental rap, Bladee continues to push the envelope with '333,' delivering an album that defies traditional genre classifications.

                        The title itself, '333,' suggests a sense of mysticism and repetition, a theme that resonates throughout the album. From the glitchy album art to the fragmented and distorted beats, Bladee immerses the listener in a world that feels both futuristic and nostalgic.
                        
                        The production on '333' is a sonic kaleidoscope, with Bladee collaborating with avant-garde producers to create a soundscape that is both disorienting and hypnotic. Tracks like "Dont Worry" and "Reality Surf" showcase the album's experimental nature, incorporating unconventional beats, pitch-shifted vocals, and electronic glitches that defy conventional musical norms.
                    </p>
                    <br>
                    <p>Bladee's lyrical themes on '333' often delve into the intersection of technology, identity, and the human experience. In an era dominated by digital connectivity, the album reflects on the impact of technology on our perceptions of self and reality. The lyrics oscillate between introspective moments and abstract, dream-like imagery, creating a sense of ambiguity that invites interpretation.

                        The autotuned vocals, a signature element of Bladee's style, contribute to the otherworldly atmosphere of the album. Bladee's delivery is melodic yet detached, adding an emotional layer to the digital soundscape. The recurring themes of isolation and introspection resonate through tracks like "Swan Lake" and "Wings in Motion," creating an emotional depth beneath the glossy surface.
                        
                        '333' is not just an auditory experience; it's a visual and conceptual journey. Bladee's collaboration with artists and animators for music videos enhances the album's immersive quality, creating a synergy between the sonic and visual elements that amplifies the overall impact.</p>
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
            let imgArray = ['../img/bladee1.jpg','../img/bladee2.jpg','../img/bladee3.jpg'];
    
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
