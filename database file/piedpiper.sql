-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 03:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piedpiper`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title_role` varchar(255) DEFAULT NULL,
  `introduction` text DEFAULT NULL,
  `background` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `sets_apart` text DEFAULT NULL,
  `passions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `title_role`, `introduction`, `background`, `mission`, `sets_apart`, `passions`) VALUES
(1, 'Bardha Kryeziu', 'Student', 'I\'m Bardha, a student at UBT. With a knack for Computer Science, I am committed to making it in the industry.', 'Originally from Prizren, I bring 1 year of experience in this field. My journey in Front End began in 2020 with a certification as a Front-End Developer from Digital School of Kosova.', 'With Pied Piper, our mission was to make a simple website that meets the criteria and is also fun. I strongly believe in work with excitement, and it shapes my every endeavor.', 'What makes us unique is our care free, yet planned approach. We take pride in our ability to research and figuring things out.', 'Beyond tech, my heart beats for binge watching. In my downtime, you\'ll catch me watching sitcoms.');

-- --------------------------------------------------------

--
-- Table structure for table `album_reviews`
--

CREATE TABLE `album_reviews` (
  `id` int(11) NOT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `album_title` varchar(255) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `brief_review` text DEFAULT NULL,
  `detailed_review` text DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `date_reviewed` date DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `albumimage` text DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `edited_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album_reviews`
--

INSERT INTO `album_reviews` (`id`, `artist`, `album_title`, `rating`, `brief_review`, `detailed_review`, `genre`, `date_reviewed`, `label`, `albumimage`, `added_by`, `edited_by`) VALUES
(1, 'Yung Lean', 'Starz', 4.5, 'Yung Lean\'s \"Starz\": A Glimpse into Maturation and Artistic Evolution...', 'On “Violence”, the fourth song on Yung Lean’s seventh full-length Starz,\r\n the rapper paraphrases a mob boss from The Departed, played by Jack Nicholson:\r\n                         “You’re a product of your environment, my environment’s a product of me.”\r\n                          It’s less of a flex than a statement of fact: Lean is a foundational figure in the pantheon of white,\r\n                           middle-class kids making divisive internet rap. But Jonatan Leandoer Håstad,\r\n                            now rebranded as a vulnerable creative polymath, seeks something deeper than a Yung Lean coronation on his\r\n                             new album: instead of sampling the quote in all its iconic gravitas, Lean mutters\r\n                              his version through a sonic fog, the words ash-choked and made into his own. On Starz, \r\n                              Yung Lean turns inward without losing his rare ear for speaker-shaking rap, and creates\r\n                               some of the most compelling music of his hip-hop career.\r\n                    \r\nOn Starz, Lean builds on the melodic excellence of those songs and continues wrestling with his demons. As on Stranger, Lean on Starz\r\n                         sounds like an undead creature of the night who spends his time counting his treasure, reading poetry, and searching out rap on YouTube.\r\n                          But a special Lean song has a text or subtext of romance: the album’s sublime title track, which features Ariel Pink, recounts\r\n                           transcendent puppy love over an ice storm of synth pads: “When I met you that summer I thought it would never end /\r\n                            It would never end / You never end.” He stretches the concept to an absurd, wonderful place on “Butterfly Paralyzed,” a\r\n                             gamble on colliding Darude with 808s & Heartbreak that pays off. Some of Lean’s older songs can aspire to a rote rap ruthlessness\r\n                              as every day as a Jason mask; he can achieve it, and serve the song better, when he embraces the ineffable. \r\n                              On lead single “Boylife in EU,” a swooning reimagination of witch house with a strident sincerity, Lean creates the resonant \r\n                        scene of a corrupted haven: “Pretend this dream will never end,” he intones over a funereal synth. “Some things can\'t be unsaid.”', 'Cloud Rap', '2023-12-12', 'YEAR0001', 'starz.png', 'bardhakryeziu', NULL),
(2, 'Kanye West', '808s & Heartbreak', 5, 'A Pioneering Journey into Emotional Landscapes - \"808s & Heartbreak\"...', 'Kanye West\'s \"808s & Heartbreak,\" released in 2008, stands as a groundbreaking and emotionally charged exploration of\r\n                         heartache and vulnerability. Departing from his earlier rap-centric style, \r\n                         Kanye delves into the realms of auto-tuned melodies, minimalist production,\r\n                         and poignant lyricism to create an album that transcends genre boundaries.\r\n                         The album\'s title itself, \"808s & Heartbreak,\" alludes to the heavy reliance on the Roland TR-808 drum machine,\r\n                          a symbol of the raw and emotive soundscapes that Kanye aspires to convey. From the haunting opening track \"Say You Will,\"\r\n                          the listener is immediately immersed in a sonic landscape marked by melancholy and solitude.\r\n                    \"808s & Heartbreak\" has left an indelible mark on the music industry, influencing a generation of artists who would go on\r\n                         to embrace vulnerability and emotion in their work. The album\'s impact extends beyond its initial release, as its innovative\r\n                          use of auto-tune and its exploration of personal pain continue to resonate in contemporary music. \r\n                        The emotional depth of \"808s & Heartbreak\" is further amplified by tracks like \"Love Lockdown\" and \"Coldest Winter.\" \r\n                        Kanye\'s vulnerability shines through as he navigates themes of heartbreak, isolation, and introspection. \r\n                        The album\'s sonic palette, characterized by stripped-down arrangements and haunting melodies,\r\n                         adds a layer of authenticity to the emotional journey it embarks upon.\r\n                         In conclusion, \"808s & Heartbreak\" stands as a pivotal moment in Kanye West\'s artistic evolution, marking a departure from \r\n                         conventional hip-hop and embracing a more experimental and emotionally charged sound.\r\n                          Its influence reverberates through the years, cementing its place as a timeless and essential piece in the mosaic of modern music.<', 'Experimental Emo Rap', '2023-12-12', 'Roc-A-Fella Records', '808s_&_Heartbreak.png', 'bardhakryeziu', NULL),
(3, 'Kid Cudi', 'Man on the Moon II: The Legend of Mr. Rager', 5, 'Cosmic Chronicles: Kid Cudi\'s Sonic Odyssey in \'Man on the Moon II: The Legend of Mr. Rager', 'Man on the Moon II: The Legend of Mr. Rager\" is a captivating musical journey that delves deep into the psyche of its creator, Scott Mescudi, better known as Kid Cudi. Released in 2010 as a sequel to the acclaimed \"Man on the Moon: The End of Day,\" this album stands as a testament to Cudi\'s unique approach to hip-hop and his ability to blend introspective lyrics with innovative production.\r\n\r\n                        The album opens with the ethereal \"Scott Mescudi vs. The World,\" setting the tone for a sonic exploration of self-discovery, inner turmoil, and the pursuit of happiness. The production throughout the album is atmospheric and immersive, featuring a fusion of hip-hop, rock, and electronic elements. Kid Cudi\'s signature moody hums and introspective verses create an otherworldly atmosphere, drawing listeners into his personal narrative.\r\n                    One of the standout tracks, \"Erase Me\" featuring Kanye West, showcases the album\'s versatility with its infectious melody and rock-infused production. Cudi\'s candid lyrics about relationships, fame, and the struggles of staying true to oneself resonate deeply, providing listeners with a relatable and emotionally charged experience.\r\n\r\n                        \"Mr. Rager\" stands out as a poignant exploration of Cudi\'s internal battles and the pursuit of escapism. The haunting production, coupled with Cudi\'s evocative storytelling, paints a vivid picture of the complex emotions he grapples with. The album\'s narrative unfolds like a surreal dreamscape, blurring the lines between reality and fantasy\r\n                        Man on the Moon II\" is more than just a collection of songs; it\'s a sonic odyssey that invites listeners to explore the recesses of Kid Cudi\'s mind. The album\'s cohesive storytelling, combined with its innovative production, solidifies it as a landmark project in the realm of alternative hip-hop. Kid Cudi\'s willingness to lay bare his struggles and triumphs creates a connection with the audience, making \"Man on the Moon II\" a timeless and deeply resonant musical experience.', 'Hip-Hop/Rap', '2023-12-12', 'Universal Motown Records', 'manonthemoon2.jpg', 'bardhakryeziu', NULL),
(4, 'Aphex Twin', 'Selected Ambient Works 85-92', 5, 'Lost in Sonic Serenity: A Journey Through Aphex Twin\'s \'Selected Ambient Works 85-92', 'Aphex Twin\'s groundbreaking album, \'Selected Ambient Works 85-92,\' is not just a collection of tracks; it\'s an immersive expedition into ambient realms. With its ethereal sounds and minimalistic beats, each track becomes a sonic landscape, inviting listeners to explore the uncharted territories of electronic music. From the hypnotic repetitions of \'Xtal\' to the introspective melancholy of \'Tha,\' the album weaves a tapestry of ambient textures that transcends time.\r\n\r\nReleased in 1992, this seminal work by Richard D. James, under the Aphex Twin moniker, has left an indelible mark on the electronic music scene. Its influence is far-reaching, shaping the ambient and IDM genres for years to come. The absence of traditional structures allows the listener to lose themselves in the subtle nuances, creating a meditative experience that goes beyond the confines of ordinary music.\r\n\r\nThe album\'s title itself suggests a curated journey through a specific period in Aphex Twin\'s creative evolution, and it serves as a testament to the enduring power of these compositions. \'Selected Ambient Works 85-92\' is not merely an album; it\'s a time capsule, capturing the essence of an era while remaining timeless in its appeal.\r\n\r\n                        As each track unfolds, it\'s as if the listener is floating through a sonic cosmos, encountering celestial melodies and otherworldly rhythms. The meticulous production and sonic experimentation showcase Aphex Twin\'s mastery of his craft, pushing the boundaries of what electronic music can achieve.\r\n                        \r\n                        In essence, \'Selected Ambient Works 85-92\' is a sonic meditation—a pilgrimage through ambient soundscapes that transcends the conventional boundaries of music. Whether you\'re a seasoned electronic music enthusiast or a newcomer to the genre, this album invites you to immerse yourself in its timeless brilliance.\r\n', 'Electronic', '2023-12-12', 'R&S Records', 'Selected_Ambient_Works_85-92.png', 'bardhakryeziu', NULL),
(5, 'Nina Simone', 'Pastel Blues', 5, 'Pastel Blues\" by Nina Simone: A Soul-Stirring Journey through Emotional Landscapes', ' Nina Simone\'s \"Pastel Blues\" is a timeless masterpiece that transcends the boundaries of genre, offering a soul-stirring journey through a spectrum of emotions. Released in 1965, this album stands as a testament to Simone\'s unparalleled ability to infuse each note with raw, unfiltered passion and storytelling prowess.\r\n\r\nThe title itself, \"Pastel Blues,\" hints at the album\'s exploration of complex emotions painted with a delicate yet profound brush. Simone\'s distinctive voice, marked by its deep timbre and emotive range, becomes the guiding force through this musical odyssey. From the hauntingly poignant \"Strange Fruit\" to the defiant strength of \"Sinnerman,\" the album weaves a tapestry of blues, jazz, and folk influences, showcasing Simone\'s versatility as an artist.\r\n                    \r\n\"Strange Fruit,\" a chilling commentary on racial injustice, remains one of the standout tracks. Simone\'s interpretation of this iconic song brings an additional layer of intensity, making it a visceral experience that resonates with the listener long after the last note fades. The song becomes a poignant social commentary, capturing the struggles and realities of the time.\r\n\r\n                        Throughout \"Pastel Blues,\" Simone\'s piano skills shine, providing the perfect accompaniment to her vocals. The arrangements are intricate, and the dynamics of each track ebb and flow with an organic fluidity. The emotional weight of Simone\'s performance is further emphasized by the minimalistic yet powerful musical backdrop.\r\n                        \r\n                        The album\'s ability to seamlessly transition between sorrow, hope, and resilience is a testament to Nina Simone\'s unmatched artistry. Tracks like \"Tell Me More and More and Then Some\" and \"Do I Move You\" showcase Simone\'s ability to explore the complexities of love and desire with unmatched authenticity.\r\n                        \r\n                        \"Pastel Blues\" is not merely a collection of songs; it\'s a sonic journey that invites listeners to delve into the depths of the human experience. Nina Simone\'s masterful storytelling, combined with her evocative delivery, cements this album as a cornerstone in the realms of blues and jazz, leaving an indelible mark on the landscape of music history.     ', 'Soul/Blues', '2023-12-12', 'Nina', 'Ninasimonepastelblues.jpg', 'bardhakryeziu', 'bardhakryeziu'),
(6, 'Bladee', '333', 4.5, 'Bladee\'s \'333\': A Hyper-Digital Dive into Ethereal Realms yay', 'Bladee\'s \'333\' takes listeners on a journey through a hyper-digital landscape, crafting an ethereal realm where the boundaries between reality and the virtual blur. As a pioneer in the genre of hyper-pop and experimental rap, Bladee continues to push the envelope with \'333,\' delivering an album that defies traditional genre classifications.\r\n\r\n                        The title itself, \'333,\' suggests a sense of mysticism and repetition, a theme that resonates throughout the album. From the glitchy album art to the fragmented and distorted beats, Bladee immerses the listener in a world that feels both futuristic and nostalgic.\r\n                        \r\n                        The production on \'333\' is a sonic kaleidoscope, with Bladee collaborating with avant-garde producers to create a soundscape that is both disorienting and hypnotic. Tracks like \"Dont Worry\" and \"Reality Surf\" showcase the album\'s experimental nature, incorporating unconventional beats, pitch-shifted vocals, and electronic glitches that defy conventional musical norms.\r\n                    Bladee\'s lyrical themes on \'333\' often delve into the intersection of technology, identity, and the human experience. In an era dominated by digital connectivity, the album reflects on the impact of technology on our perceptions of self and reality. The lyrics oscillate between introspective moments and abstract, dream-like imagery, creating a sense of ambiguity that invites interpretation.\r\n\r\n                        The autotuned vocals, a signature element of Bladee\'s style, contribute to the otherworldly atmosphere of the album. Bladee\'s delivery is melodic yet detached, adding an emotional layer to the digital soundscape. The recurring themes of isolation and introspection resonate through tracks like \"Swan Lake\" and \"Wings in Motion,\" creating an emotional depth beneath the glossy surface.\r\n                        \r\n                        \'333\' is not just an auditory experience; it\'s a visual and conceptual journey. Bladee\'s collaboration with artists and animators for music videos enhances the album\'s immersive quality, creating a synergy between the sonic and visual elements that amplifies the overall impact.\r\n                ', 'Alternative Rap/R&B', '2023-12-12', 'Bladee', 'Bladee_333_album_art.jpeg', 'bardhakryeziu', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `artist_image` varchar(255) DEFAULT NULL,
  `review_date` date DEFAULT NULL,
  `review_content` text DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `edited_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `artist_name`, `genre`, `artist_image`, `review_date`, `review_content`, `label`, `added_by`, `edited_by`) VALUES
(1, 'Mitski', 'Alternative/Indie', 'image-1.jpeg', '2024-03-25', 'Mitski Miyawaki (born Mitsuki Laycock; September 27, 1990) is an American singer and songwriter. She self-released her first two albums, Lush (2012), and Retired from Sad, New Career in Business (2013), while studying studio composition at Purchase College\'s Conservatory of Music. The albums were originally made as her senior project. Her third studio album, Bury Me at Makeout Creek, was released in 2014 on the label Double Double Whammy.\r\n\r\n                        Mitski signed with Dead Oceans in 2015 and released Puberty 2 (2016), Be the Cowboy (2018), and Laurel Hell (2022), the last of which made the top ten in several countries. In 2022, The Guardian dubbed her the \"best young songwriter\" in the United States. That same year, she co-wrote \"This Is a Life\" for the film Everything Everywhere All at Once, which earned her an Academy Award nomination for Best Original Song. Her seventh studio album, The Land Is Inhospitable and So Are We, was released in 2023. The album\'s third single, \"My Love Mine All Mine\", became Mitski\'s first song to chart on the Billboard Hot 100.\r\n                    E. Alex Jung described her as \"an artist whose music feels like being ushered into a private opera house of melodrama\" with lyrics full of \"roiling fury, destructive impulses, humiliation, longing, heartache, and hunger\". Angie Martoccio of Rolling Stone described her earlier albums as a \"wry running commentary on twentysomething angst, raw desire, and often unrequited love\". Lucy Dacus, a singer-songwriter who has at times opened for Mitski, described her music as \"really visceral ... She\'s connected to a part in herself that wants to scream. Maybe you don\'t live in a space where you can scream, or maybe you don\'t have the words for what has happened to you. Mitski provides a space for that.\"\r\n\r\n                        Similarly, Mitski has described her music as a place where people \"can put all of their feelings, their ugliness, that doesn\'t have a place in their own lives.\"\r\n                ', 'Dead Oceans', 'bardhakryeziu', 'bardhakryeziu'),
(2, 'Kanye West', 'Hip-Hop/Rap', 'image-4.jpg', '2023-12-12', '\n                        Ye (born Kanye Omari West on June 8, 1977) is an American rapper, singer, songwriter, record producer, and fashion designer. He is one of the world\'s best-selling music artists with 160 million records sold. West has won 24 Grammy Awards, which is the joint tenth-most of all time and the most awarded for any hip-hop artist, tied with Jay-Z. His other accolades include a Billboard Artist Achievement Award, a joint-record three Brit Awards for Best International Male Solo Artist, and the Michael Jackson Video Vanguard Award\n\n                        West\'s first six solo albums—The College Dropout (2004), Late Registration (2005), Graduation (2007), 808s & Heartbreak (2008), My Beautiful Dark Twisted Fantasy (2010), and Yeezus (2013)—were included on Rolling Stone\'s 2020 500 Greatest Albums of All Time list. The same publication named him one of the 100 Greatest Songwriters of All Time. In addition to his solo work, he released collaborative albums such as Watch the Throne (2011) with Jay-Z and Kids See Ghosts (2018) with Kid Cudi.\n\n                        \n                        West holds the joint record (with Bob Dylan) for the most albums (4) topping the annual Pazz & Jop critic poll. Time named him one of the 100 most influential people in the world in 2005 and 2015. As a fashion designer, he has collaborated with Nike, Inc., Louis Vuitton, Gap Inc., and A.P.C. on clothing and footwear. He also led the Yeezy collaboration with Adidas.\n                        West is widely regarded as one of the most critically acclaimed popular music artists of the 21st century, receiving praise from music critics, industry peers, and cultural figures. In 2014, NME named him the third most influential artist in music. Billboard senior editor Alex Gale declared West as \"absolutely one of the best, and you could make the argument for the best artist of the 21st century.\" Sharing similar sentiments, Dave Bry of Complex Magazine called West the twenty-first century\'s \"most important artist of any art form, of any genre.', 'Ye', 'bardhakryeziu', NULL),
(4, 'Yung Lean', 'Cloud Rap', 'image-2.jpeg', '2023-12-12', 'Jonatan Aron Leandoer Håstad, born on 18 July 1996, is a Swedish rapper, singer, and songwriter known professionally as Yung Lean. He is widely recognized as one of the most influential figures in the early cloud rap era. Yung Lean gained prominence in 2013 with his viral YouTube hit, \"Ginseng Strip 2002.\"\r\n\r\nIn the same year, he released his debut mixtape, \"Unknown Death 2002,\" followed by his debut studio album, \"Unknown Memory,\" in the subsequent year. Yung Lean continued to evolve his sound, releasing his second mixtape, \"Frost God,\" and his second studio album, \"Warlord,\" in 2016. In 2017, he released his third studio album, \"Stranger,\" and his third mixtape, \"Poison Ivy,\" in 2018. His fourth studio album, \"Starz,\" was released in 2020.\r\n                    \r\n Yung Lean has also explored different musical genres and pseudonyms. Under the name Jonatan Leandoer96, he released albums such as \"Nectar\" in 2019, \"Blodhundar & Lullabies\" in 2020, and \"Sugar World\" in 2023. These projects deviate from his hip-hop roots, incorporating elements of indie rock and neofolk into his musical repertoire. Yung Lean\'s versatility and innovative approach to music have contributed to his enduring influence in the music industry.\r\n\r\nYung Lean\'s versatility extends beyond hip-hop; he serves as the vocalist for the post-punk band Död Mark, alongside fellow Sad Boys member Gud. The duo released their debut album, \"Drabbad av Sjukdom,\" in 2016 through the Stockholm label YEAR0001. This diversification highlights Yung Lean\'s ability to navigate and contribute to various musical genres.', 'YEAR0001', 'bardhakryeziu', NULL),
(10, 'The Cranberries', 'Alternative rocks', 'cranb.jpg', '2024-02-02', 'The Cranberries were an Irish rock band formed in Limerick, Ireland. Originally named the Cranberry Saw Us, the band was established in 1989 by lead singer Niall Quinn, guitarist Noel Hogan, bassist Mike Hogan, and drummer Fergal Lawler. Quinn was later replaced as the lead singer by Dolores O\'Riordan in 1990, prompting the group to change their name to the Cranberries. They classified themselves as an alternative rock group but incorporated elements of indie rock, jangle pop, dream pop, folk rock, post-punk, and pop rock into their sound.\r\n                  \r\n                        The Cranberries achieved international fame in the 1990s with their debut album, \"Everybody Else Is Doing It, So Why Can\'t We?,\" which became a commercial success. Some of their notable hit singles include \"Dreams\" (1992), \"Linger\" (1993), \"Zombie\" (1994), \"Salvation\" (1996), and \"When You\'re Gone\" (1997). Five of their albums reached the Top 20 on the Billboard 200 chart, and eight of their singles reached the Top 20 on the Modern Rock Tracks chart.\r\n\r\nAfter a six-year hiatus, the Cranberries reunited in early 2009 and embarked on a North American tour followed by shows in Latin America and Europe. They released their sixth studio album, \"Roses,\" in February 2012, and the seventh, \"Something Else,\" followed in April 2017.', 'Island Records', 'bardhakryeziu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sender_name` varchar(255) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `message_text` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `sender_name`, `sender_email`, `message_text`, `timestamp`) VALUES
(1, 1, 'Bardha', 'bardha@bardha.com', 'bardha ma e mira', '2024-02-04 00:48:13'),
(2, 1, 'Bardha', 'bardha@bardha.com', 'bardha ma e mira', '2024-02-04 00:48:22'),
(3, 1, 'Bujar', 'user@user.com', 'ghetto geasy numer 1', '2024-02-04 00:49:43'),
(4, 1, 'Bujar', 'user@user.com', 'bardhabardhamaemiratestestest', '2024-02-04 03:05:50'),
(5, 1, 'bardha', 'bardha@bardha.com', 'hjfdhjfj', '2024-02-04 18:41:10'),
(6, 1, 'bardha', 'bardha@bardha.com', 'watesyrudtiyolukjythgref', '2024-03-15 21:31:20'),
(7, 1, 'bardha', 'user@user.com', 'na', '2024-03-23 15:48:20'),
(8, 1, 'bardha', 'user@user.com', 'qsdwefw', '2024-03-24 22:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `options` text NOT NULL,
  `correct_option` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `options`, `correct_option`) VALUES
(1, 'What preceded Babastars?', '{\"a\": \"TDS\", \"b\": \"Tingulli 3nt\", \"c\": \"Skillzat\"}', 'b'),
(2, 'Who was the first to betray the group?', '{\"a\": \"Ledri Vula\", \"b\": \"Agon Amiga\", \"c\": \"Majk\", \"d\": \"Cozman\"}', 'a'),
(3, 'How many songs are there in the \'High\' series?', '{\"a\": \"1\", \"b\": \"2\", \"c\": \"3\", \"d\": \"4\", \"e\": \"5\"}', 'd'),
(4, 'Which member accused their affair partner for ruining his marriage?', '{\"a\": \"Skivi\", \"b\": \"Majk\", \"c\": \"Onat\", \"d\": \"Agon Amiga\"}', 'd'),
(5, '\'Krejt cka behet ne Prishtine?\'', '{\"a\": \"Degjohet ne Gjilan.\", \"b\": \"Mbetet ne Prishtine.\", \"c\": \"Kthehet ne Prizren.\"}', 'b'),
(6, 'Which member had a notorious relationship, similar to that of Teuta & Blero?', '{\"a\": \"Ghetto Geasy\", \"b\": \"Cozman\", \"c\": \"Majk\", \"d\": \"Skivi\"}', 'b'),
(7, 'Who changed his rapper name when they joined Babastars?', '{\"a\": \"Ghetto Geasy\", \"b\": \"Onat\", \"c\": \"Majk\", \"d\": \"Skivi\", \"e\": \"Ledri Vula\"}', 'c'),
(8, 'What is Skivi\'s real name?', '{\"a\": \"Ledri Vula\", \"b\": \"Getoar Shala\", \"c\": \"Skender Tahiri\", \"d\": \"Visar Shala\"}', 'd'),
(9, 'Kalle ___?', '{\"a\": \"Mbreme\", \"b\": \"Sonte\", \"c\": \"Neser\", \"d\": \"Sot\"}', 'b'),
(10, 'Which duo has a tendency to repeat words?', '{\"a\": \"Majk and Onat\", \"b\": \"Agon Amiga and Cozman\", \"c\": \"Skivi and Ghetto Geasy\", \"d\": \"Ghetto Geasy and Cozman\", \"e\": \"Agon Amiga and Onat\"}', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `grouptype` int(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `grouptype`, `username`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '12345678', 0, 'bardhakryeziu'),
(2, 'admin2', 'admin2', 'admin2@admin2.com', '1', 0, 'admin2'),
(25, 'user', 'user', 'user@user.com', '1', 1, 'user'),
(26, '1', '1', '1234@gmail.com', '1', 1, 'usertest'),
(27, '1', '1', 'bardhakryeziu11@gmail.com', '2', 1, 'f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album_reviews`
--
ALTER TABLE `album_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `album_reviews`
--
ALTER TABLE `album_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
