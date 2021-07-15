-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 11, 2021 at 02:47 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `project4`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `published_date` date NOT NULL,
  `number` int(11) NOT NULL,
  `image` text,
  `draft` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`id`, `title`, `body`, `published_date`, `number`, `image`, `draft`) VALUES
(1, 'WITH PASCIN AT THE DOME', '<p>It was a lovely evening and I had worked hard all day and left the flat over the sawmill and walked out through the courtyard with the stacked lumber, closed the door, crossed the street and went into the back door of the bakery that fronted on the Boulevard. Montparnasse and out through the good bread smells of the ovens and the shop to the street. The lights were on in the bakery and outside it was the end of the day and I walked in the early dusk up the street and stopped outside the terrace of the temps de Toulouse restaurant where our red and white checkered napkins were in the wooden napkin rings in the napkin rack waiting for us to come to dinner. I read the menu mimeographed in purple ink and saw that the plat du jour was cassoulet. It made me hungry to read the name. Mr. Lavigne, the proprietor, asked me how my work had gone and I said it had gone very well. He said he had seen me working on the terrace of the Closerie des Lilas early in the morning but he had not spoken to me because I was so occupied. &ldquo;You had the air of a man alone in the jungle,&rdquo; he said. &ldquo;I am like a blind pig when I work.&rdquo; &ldquo;But were you not in the jungle, Monsieur?&rdquo; &ldquo;In the bush,&rdquo; I said. I went on up the street looking in the windows and happy with the spring evening and the people coming past. In the three principal caf&eacute;s I saw people that I knew by sight and others that I knew to speak to. But there were always much nicer-looking people that I did not know that, in the evening with the lights just coming on, were hurrying to some place to drink together, to eat together and then to make love. The people in the principal caf&eacute;s might do the same thing or they might just sit and drink and talk and love to be seen by others. The people that I liked and had not met went to the big caf&eacute;s because they were lost in them and no one noticed them and they could be alone in them and be together. The big caf&eacute;s were cheap then too, and all had good beer and the ap&eacute;ritifs cost reasonable prices that were clearly marked on the saucers that were served with them.</p>', '2021-01-17', 1, 'AlaskaPlaneCh1.jpeg', 0),
(3, 'SETTLING IN', '<p class=\"noindent\" style=\"text-align: justify;\">It was easy to get into the habit of stopping in at 27 rue de Fleurus late in the afternoon for the warmth and the great pictures and the conversation. Often Miss Stein would have no guests and she was always very friendly and for a long time she was affectionate. When I had come back from trips that I had made to the different political conferences or to the Near East or Germany for the Canadian paper and the news services that I worked for she wanted me to tell her about all the amusing details. There were funny parts always and she liked them and also what the Germans call gallows-humor stories. She wanted to know the gay part of how the world was going; never the real, never the bad.</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">I was young and not gloomy and there were always strange and comic things that happened in the worst time and Miss Stein liked to hear these. The other things I did not talk of and wrote by myself.</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">When I had not come back from any trips and would stop in at the rue de Fleurus after working I would try sometimes to get Miss Stein to talk about books. When I was writing, it was necessary for me to read after I had written. If you kept thinking about it, you would lose the thing that you were writing before you could go on with it the next day. It was necessary to get exercise, to be tired in the body, and it was very good to make love with whom you loved. That was better than anything. But afterwards, when you were empty,&nbsp;<span id=\"Page_26\" class=\"pageno\" title=\"26\"></span>it was necessary to read in order not to think or worry about your work until you could do it again. I had learned already never to empty the well of my writing, but always to stop when there was still something there in the deep part of the well, and let it refill at night from the springs that fed it.</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">To keep my mind off writing sometimes after I had worked I would read writers who were writing then, such as Aldous Huxley, D. H. Lawrence or any who had books published that I could get from Sylvia Beach&rsquo;s library or find along the quais.</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">&ldquo;Huxley is a dead man,&rdquo; Miss Stein said. &ldquo;Why do you want to read a dead man? Can&rsquo;t you see he is dead?&rdquo;</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">I could not see, then, that he was a dead man and I said that his books amused me and kept me from thinking.</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">&ldquo;You should only read what is truly good or what is frankly bad.&rdquo;</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">&ldquo;I&rsquo;ve been reading truly good books all winter and all last winter and I&rsquo;ll read them next winter, and I don&rsquo;t like frankly bad books.&rdquo;</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">&ldquo;Why do you read this trash? It is inflated trash, Hemingway. By a dead man.&rdquo;</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">&ldquo;I like to see what they are writing,&rdquo; I said. &ldquo;And it keeps my mind off me doing it.&rdquo;</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">&ldquo;Who else do you read now?&rdquo;</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">&ldquo;D. H. Lawrence,&rdquo; I said. &ldquo;He wrote some very good short stories, one called &lsquo;The Prussian Officer.&rsquo;&thinsp;&rdquo;</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">&ldquo;I tried to read his novels. He&rsquo;s impossible. He&rsquo;s pathetic and preposterous. He writes like a sick man.&rdquo;</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">&ldquo;I liked&nbsp;<span class=\"it\">Sons and Lovers</span>&nbsp;and&nbsp;<span class=\"it\">The White Peacock</span>,&rdquo; I said. &ldquo;Maybe that not so well. I couldn&rsquo;t read&nbsp;<span class=\"it\">Women in Love</span>.&rdquo;<span id=\"Page_27\" class=\"pageno\" title=\"27\"></span></p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">&ldquo;If you don&rsquo;t want to read what is bad, and want to read something that will hold your interest and is marvelous in its own way, you should read Marie Belloc Lowndes.&rdquo;</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">&nbsp;</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">Ernest Hemmingway- A moveable Feast.</p>', '2021-01-17', 2, 'bedinthefield.JPG', 0),
(8, 'A GOOD CAFE', '<p style=\"text-align: justify;\">It was a pleasant caf&eacute;, warm and clean and friendly, and I hung up my old waterproof on the coat rack to dry and put my worn and weathered felt hat on the rack above the bench and ordered a <span class=\"it\">caf&eacute; au lait</span>. The waiter brought it and I took out a notebook from the pocket of the coat and a pencil and started to write. I was writing about up in Michigan and since it was a wild, cold, blowing day it was that sort of day in the story. I had already seen the end of fall come through boyhood, youth, and young manhood, and in one place you could write about it better than in another. That was called transplanting yourself, I thought, and it could be as necessary with people as with other sorts of growing things. But in the story, the boys were drinking and this made me thirsty and I ordered a rum St. James. This tasted wonderful on a cold day and I kept on writing, feeling very well and feeling the good Martinique rum warm me all through my body and my spirit.</p>', '2021-02-21', 3, 'Alaskacafe.jpeg', 0),
(9, 'A FALSE SPRING IN ALASKA', '<p class=\"noindent\">When spring came, even the false spring, there were no problems except where to be happiest. The only thing that could spoil a day was people and if you could keep from making engagements, each day had no limits. People were always the limiters of happiness except for the very few that were as good as spring itself.</p>\r\n<p class=\"pindent\">In the spring mornings, I would work early while my wife still slept. The windows were open wide and the cobbles of the street were drying after the rain. The sun was drying the wet faces of the houses that faced the window. The shops were still shuttered. The goatherd came up the street blowing his pipes and a woman who lived on the floor above us came out onto the sidewalk with a big pot. The goatherd chose one of the heavy-bagged, black milk-goats and milked her into the pot while his dog pushed the others onto the sidewalk. The goats looked around, turning their necks like sight-seers. The goatherd took the money from the woman and thanked her and went on up the street piping and the dog herded the goats on ahead, their horns bobbing. I went back to writing and the woman came up the stairs with the goat milk. She wore her felt-soled cleaning shoes and I only heard her breathing as she stopped on the stairs outside our door and then the shutting of her door. She was the only customer for goat milk in our building.</p>', '2021-02-21', 4, 'AlaskaSpring.jpeg', 0),
(10, 'GOOD DISCIPLINE', '<p class=\"pindent\">You got very hungry when you did not eat enough in Paris because all the bakery shops had such good things in the windows and people ate outside at tables on the sidewalk so that you saw and smelled the food. When you had given up journalism and were writing nothing that anyone in America would buy, explaining at home that you were lunching out with someone, the best place to go was the Luxembourg gardens where you saw and smelled nothing to eat all the way from the Place de l&rsquo;Observatoire to the rue de Vaugirard. There you could always go into the Luxembourg museum and all the paintings were sharpened and clearer and more beautiful if you were belly-empty, hollow-hungry. I learned to understand C&eacute;zanne much better and to see truly how he made landscapes when I was hungry. I used to wonder if he were hungry too when he painted; but I thought possibly it was only that he had forgotten to eat. It was one of those unsound but illuminating thoughts you have when you have been sleepless or hungry. Later I thought C&eacute;zanne was probably hungry in a different way.</p>\r\n<p class=\"pindent\">&nbsp;</p>\r\n<p class=\"pindent\">Ernest Hemmingway - A Moveable Feast.</p>', '2021-02-21', 5, 'Alaskatent.jpeg', 0),
(12, 'MADOX FORD', '<p class=\"noindent\" style=\"text-align: justify;\">The Closerie des Lilas was the nearest good caf&eacute; when we lived in the flat over the sawmill at 113 rue Notre-Dame-des-Champs, and it was one of the best caf&eacute;s in Paris. It was warm inside in the winter and in the spring and fall it was very fine outside with the tables under the shade of the trees on the side where the statue of Marshal Ney was, and the square, regular tables under the big awnings along the boulevard. Two of the waiters were our good friends. People from the D&ocirc;me and the Rotonde never came to the Lilas. There was no one there they knew, and no one would have stared at them if they came. In those days many people went to the caf&eacute;s at the corner of the Boulevard Montparnasse and the Boulevard Raspail to be seen publicly and in a way such places anticipated the columnists as the daily substitutes for immortality.</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">The Closerie des Lilas had once been a caf&eacute; where poets met more or less regularly and the last principal poet had been Paul Fort whom I had never read. But the only poet I ever saw there was Blaise Cendrars, with his broken boxer&rsquo;s face and his pinned-up empty sleeve, rolling a cigarette with his one good hand. He was a good companion until he drank too much and, at that time, when he was lying, he was more interesting than many men telling a story truly. But he was the only poet who came to the Lilas then and I only saw him there once. Most of the clients were elderly bearded men in well worn clothes who came with their wives or their mistresses&nbsp;<span id=\"Page_82\" class=\"pageno\" title=\"82\"></span>and wore or did not wear thin red Legion of Honor ribbons in their lapels. We thought of them all hopefully as scientists or&nbsp;<span class=\"it\">savants</span>&nbsp;and they sat almost as long over an ap&eacute;ritif as the men in shabbier clothes who sat with their wives or mistresses over a&nbsp;<span class=\"it\">caf&eacute; cr&egrave;me</span>&nbsp;and wore the purple ribbon of the Palms of the Academy, which had nothing to do with the French Academy, and meant, we thought, that they were professors or instructors.</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">These people made it a comfortable caf&eacute; since they were all interested in each other and in their drinks or coffees, or infusions, and in the papers and periodicals which were fastened to rods, and no one was on exhibition.</p>\r\n<p class=\"pindent\" style=\"text-align: justify;\">Ernest Hemmingway - A Moveable Feast</p>', '2021-02-22', 6, 'Alaskabench.jpeg', 0),
(13, 'HAWKS DO NOT SHARE', '<p>While we were living in the Vorarlberg and I was finishing rewriting the novel, Scott and his wife and child had left Paris for a watering place in the lower Pyr&eacute;n&eacute;es. Zelda had been ill with that familiar intestinal complaint that too much champagne produces and which was then diagnosed as colitis. Scott was not drinking, and starting to work and he wanted us to come to Juan-les-Pins in June. They would find an inexpensive villa for us and this time he would not drink and it would be like the old good days and we would swim and be healthy and brown and have one ap&eacute;ritif before lunch and one before dinner. Zelda was well again and they were both fine and his novel was going wonderfully. He had money coming in from a dramatization of The Great Gatsby which was running well and it would sell to the movies and he had no worries. Zelda was really fine and everything was going to be disciplined.</p>', '2021-02-22', 7, 'Alaskadoor.jpeg', 0),
(14, 'A MATTER OF MEASUREMENTS', '<p class=\"noindent\">Much later, in the time after Zelda had what was then called her first nervous breakdown and we happened to be in Paris at the same time, Scott asked me to have lunch with him at Michaud&rsquo;s restaurant on the corner of the rue Jacob and the rue des Saints-P&egrave;res. He said he had something very important to ask me that meant more than anything in the world to him and that I must answer absolutely truly. I said that I would do the best that I could. When he would ask me to tell him something absolutely truly, which is very difficult to do, and I would try it, what I said would make him angry, often not when I said it but afterwards, and sometimes long afterwards when he had brooded on it. My words would become something that would have to be destroyed and sometimes, if possible, me with them.</p>\r\n<p class=\"pindent\">He drank wine at the lunch but it did not affect him and he had not prepared for the lunch by drinking before it. We talked about our work and about people and he asked me about people that we had not seen lately. I knew that he was writing something good and that he was having great trouble with it for many reasons but that was not what he wanted to talk about. I kept waiting for it to come, the thing that I had to tell the absolute truth about; but he would not bring it up until the end of the meal, as though we were having a business lunch.</p>\r\n<p class=\"pindent\">Ernest Hemmingway - A Moveable Feast</p>', '2021-02-22', 8, 'Alaskahourglass.jpeg', 0),
(16, 'THERE IS NEVER ANY END IN ALASKA', '<p class=\"noindent\">When there were the three of us instead of just the two, it was the cold and the weather that finally drove us out of Paris in the winter time. Alone there was no problem when you got used to it. I could always go to a caf&eacute; to write and could work all morning over a&nbsp;<span class=\"it\">caf&eacute; cr&egrave;me</span>&nbsp;while the waiters cleaned and swept out the caf&eacute; and it gradually grew warmer. My wife could go to work at the piano in a cold place and with enough sweaters keep warm playing and come home to nurse Bumby. It was wrong to take a baby to a caf&eacute; in the winter though; even a baby that never cried and watched everything that happened and was never bored. There were no baby-sitters then and Bumby would stay happy in his tall cage bed with his big, loving cat named F. Puss. There were people who said that it was dangerous to leave a cat with a baby. The most ignorant and prejudiced said that a cat would suck a baby&rsquo;s breath and kill him. Others said that a cat would lie on a baby and the cat&rsquo;s weight would smother him. F. Puss lay beside Bumby in the tall cage bed and watched the door with his big yellow eyes, and would let no one come near him when we were out and Marie, the&nbsp;<span class=\"it\">femme de m&eacute;nage</span>, had to be away. There was no need for baby-sitters. F. Puss was the baby-sitter.</p>\r\n<p class=\"pindent\">But when you are poor, and we were really poor when I had given up all journalism when we came back from Canada, and could sell no stories at all, it was too rough with a baby in Paris in the winter. At three months Mr. Bumby had crossed&nbsp;<span id=\"Page_198\" class=\"pageno\" title=\"198\"></span>the North Atlantic on a twelve-day small Cunarder that sailed from New York via Halifax in January. He never cried on the trip and laughed happily when he would be barricaded in a bunk so he could not fall out when we were in heavy weather. But our Paris was too cold for him.</p>\r\n<p class=\"pindent\">When I saw my wife again standing by the tracks as the train came in by the piled logs at the station, I wished I had died before I ever loved anyone but her. She was smiling, the sun on her lovely face tanned by the snow and sun, beautifully built, her hair red gold in the sun, grown out all winter awkwardly and beautifully, and Mr. Bumby standing with her, blond and chunky and with winter cheeks looking like a good Vorarlberg boy.</p>\r\n<p class=\"pindent\">&ldquo;Oh Tatie,&rdquo; she said, when I was holding her in my arms, &ldquo;you&rsquo;re back and you made such a fine successful trip. I love you and we&rsquo;ve missed you so.&rdquo;</p>\r\n<p class=\"pindent\">I loved her and I loved no one else and we had a lovely magic&nbsp;<span id=\"Page_211\" class=\"pageno\" title=\"211\"></span>time while we were alone. I worked well and we made great trips, and I thought we were invulnerable again, and it wasn&rsquo;t until we were out of the mountains in late spring, and back in Paris that the other thing started again.</p>\r\n<p class=\"pindent\">That was the end of the first part of Paris. Paris was never to be the same again although it was always Paris and you changed as it changed. We never went back to the Vorarlberg and neither did the rich.</p>\r\n<p class=\"pindent\">There is never any ending to Alaska and the memory of each person who has lived in it differs from that of any other. We always returned to it no matter who we were or how it was changed or with what difficulties, or ease, it could be reached. Paris was always worth it and you received return for whatever you brought to it. But this is how Paris was in the early days when we were very poor and very happy.</p>\r\n<p class=\"pindent\">&nbsp;</p>\r\n<p class=\"pindent\">Ernest Hemmingway - A Moveable Feast</p>', '2021-02-22', 10, 'Alaskasunset.jpeg', 0),
(19, 'THE END OF AN AVOCATION', '<p>We went racing together many more times that year and other years after I had worked in the early mornings, and Hadley enjoyed it and sometimes she loved it. But it was not the climbs in the high mountain meadows above the last forest, nor nights coming home to the chalet, nor was it climbing with Chink, our best friend, over a high pass into new country. It was not really racing either. It was gambling on horses. But we called it racing. Racing never came between us, only people could do that; but for a long time it stayed close to us like a demanding friend. That was a generous way to think of it. I, the one who was so righteous about people and their destructiveness, tolerated this friend that was the falsest, most beautiful, most exciting, vicious, and demanding because she could be profitable. To make it profitable was more than a full-time job and I had no time for that. But I justified it to myself because I wrote it, even though in the end, when everything I had written was lost, there was only one racing story that survived, because it was out in the mails. I was going to races alone more now and I was involved in them and getting too mixed up with them. I worked two tracks in their season when I could, Auteuil and Enghien. It took full-time work to try to handicap intelligently and you could make no money that way. That was just how it worked out on paper. You could buy a newspaper that gave you that. You had to watch a jumping race from the top of the stands at Auteuil and it was a fast climb up to see what each horse did and see the horse that might have won and did not, and see why or maybe how he did not do what he could have done. You watched the prices and all the shifts of odds each time a horse you were following would start, and you had to know how he was working and finally get to know when the stable would try with him. He always might be beaten when he tried; but you should know by then what his chances were. It was hard work but at Auteuil it was beautiful to watch each day they raced when you could be there and see the honest races with the great horses, and you got to know the course as well as any place you had ever known. You knew many people finally, jockeys and trainers and owners and too many horses and too many things. In principle I only bet when I had a horse to bet on but I sometimes found horses that nobody believed in except the men who trained and rode them that won race after race with me betting on them. I stopped finally because it took too much time, I was getting too involved and I knew too much about what went on at Enghien and at the flat racing tracks too.</p>\r\n<p>&nbsp;</p>\r\n<p>Ernest Hemmingway - A Moveable Feast</p>', '2021-02-27', 11, 'Alaskacarrace.jpeg', 0),
(26, 'Scott Fitzgerald', '<p style=\"text-align: justify;\">His talent was as natural as the pattern that was made by the dust on a butterfly&rsquo;s wings. At one time he understood it no more than the butterfly did and he did not know when it was brushed or marred. Later he became conscious of his damaged wings and of their construction and he learned to think and could not fly any more because the love of flight was gone and he could only remember when it had been effortless.</p>\r\n<p class=\"noindent\" style=\"text-align: justify;\">The first time I ever met Scott Fitzgerald a very strange thing happened. Many strange things happened with Scott but this one I was never able to forget. He had come into the Dingo bar in the rue Delambre where I was sitting with some completely worthless characters, had introduced himself and introduced a tall, pleasant man who was with him as Dunc Chaplin, the famous pitcher. I had not followed Princeton baseball and had never heard of Dunc Chaplin but he was extraordinarily nice, unworried, relaxed and friendly and I much preferred him to Scott.</p>\r\n<p class=\"noindent\">&nbsp;</p>\r\n<p class=\"noindent\">Ernest Hemmingway - A Moveable Feast</p>', '2021-04-19', 13, 'contactUs.jpeg', 0),
(37, 'PEOPLE OF THE SEINE', '<p class=\"noindent\">There were many ways of walking down to the river from the top of the rue Cardinal Lemoine. The shortest one was straight down the street but it was steep and it brought you out, after you hit the flat part and crossed the busy traffic of the beginning of the Boulevard St.-Germain, onto a dull part where there was a bleak, windy stretch of river bank with the Halle aux Vins on your right. This was not like any other Paris market but was a sort of bonded warehouse where wine was stored against the payment of taxes and was as cheerless from the outside as a military depot or a prison camp.</p>\r\n<p class=\"pindent\">Across the branch of the Seine was the &Icirc;le St.-Louis with the narrow streets and the old, tall, beautiful houses, and you could go over there or you could turn left and walk along the quais with the length of the &Icirc;le St.-Louis and then Notre-Dame and &Icirc;le de la Cit&eacute; opposite as you walked.</p>\r\n<p class=\"pindent\">In the bookstalls along the quais you could sometimes find American books that had just been published for sale very cheap. The Tour D&rsquo;Argent restaurant had a few rooms above the restaurant that they rented in those days, giving the people who lived there a discount in the restaurant, and if the people who lived there left any books behind there was a bookstall not far along the quai where the&nbsp;<span class=\"it\">valet de chambre</span>&nbsp;sold them and you could buy them from the proprietress for a very few francs. She had no confidence in books written in English, paid almost nothing for them, and sold them for a small and quick profit.<span id=\"Page_42\" class=\"pageno\" title=\"42\"></span></p>\r\n<p class=\"pindent\">&ldquo;Are they any good?&rdquo; she asked me after we had become friends.</p>\r\n<p class=\"pindent\">&nbsp;</p>\r\n<p class=\"pindent\">Ernest Hemmingway - A Moveable Feast</p>\r\n<p class=\"pindent\">&nbsp;</p>', '2021-05-09', 14, ' outfit.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `chapter_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `author` text NOT NULL,
  `to_validate` tinyint(1) NOT NULL DEFAULT '1',
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  `validated` tinyint(1) NOT NULL DEFAULT '1',
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `parent_id`, `chapter_id`, `comment`, `comment_date`, `author`, `to_validate`, `flag`, `validated`, `email`) VALUES
(11, NULL, 3, 'nice', '2021-03-13 19:03:19', 'john', 0, 1, 0, 'smith@yahoo.com'),
(12, NULL, 10, 'Great chapter! thank you', '2021-03-13 19:09:48', 'Anthony', 1, 0, 1, 'anthony@gmail.com'),
(13, NULL, 3, 'Merci', '2021-03-15 17:09:13', 'Steph', 0, 0, 0, 'steph@yahoo.com'),
(29, NULL, 3, 'Love it', '2021-04-14 15:12:07', 'sandy', 1, 0, 1, 'sandy@yahoo.com'),
(30, NULL, 1, 'Great Chapter!', '2021-04-15 09:52:13', 'Tony', 1, 0, 1, 'tony@gmail.com'),
(31, NULL, 12, 'A-M-A-Z-I-N-G', '2021-04-15 09:53:00', 'Claire', 1, 1, 1, 'Claire@gmail.com'),
(32, NULL, 26, 'Amazing chapter, However, we would love to know what happened to Mr.Scott\r\nThank you', '2021-05-10 15:41:28', 'Tina', 1, 0, 1, 'tina@yahoo.com'),
(33, NULL, 8, 'Love a Good cafe!', '2021-05-10 15:44:00', 'Tania ', 1, 0, 1, 'taniagal@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`) VALUES
(1, 'Dollar', 'Asap', 'sf@sf.fr', 'New Chapter', 'Cant wait to read the new chapter'),
(2, 'Kevin', 'Smart', 'kevin@yahoo.com', 'Meet Up', 'Hi, will you be hosting a book signing meet up regardless this pandemic'),
(4, 'Frank', 'Enstein', 'frankenstein@yahoo.com', 'Mind Blown', 'Fantastic!'),
(5, 'Michael', 'Jourdaym', 'michael@outlook.fr', 'Thanks', 'Great Chapter! Can\'t wait to read more!'),
(6, 'sandy', 'money', 'samdym@yahoo.com', 'chapter3', 'Love it!'),
(7, 'Jane', 'Cooke', 'janecooke@yahoo.com', 'Alaska', 'This book was amazing to read. Hope to see more soon. Thank you'),
(8, 'June', 'Metalic', 'metalicjune@yahoo.com', 'Appreciation', 'Thank you so much  ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'jo', '$2y$10$QbMxxQZfZ9oAOOQlpbiUoO9bNgyB5XQ6.F6BmeoepF87tlKieI7PC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `number` (`number`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chapter_id` (`chapter_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`chapter_id`) REFERENCES `chapter` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`parent_id`) REFERENCES `comment` (`id`);
