USE `buydo`;
DELETE FROM `transactions` WHERE 1;
DELETE FROM `bid_items` WHERE 1 ;
DELETE FROM `sale_items` WHERE 1 ;
DELETE FROM `admins` WHERE 1 ;
DELETE FROM `bid` WHERE 1;
DELETE FROM `buy` WHERE 1;
DELETE FROM `items` WHERE 1 ;
DELETE FROM `sellers` WHERE 1 ;
DELETE FROM `buyers` WHERE 1 ;
DELETE FROM `users` WHERE 1;

ALTER TABLE `bid` AUTO_INCREMENT=1;
ALTER TABLE `buy` AUTO_INCREMENT=1;
ALTER TABLE `users` AUTO_INCREMENT=1;
ALTER TABLE `items` AUTO_INCREMENT=1;
ALTER TABLE `transactions` AUTO_INCREMENT=1;


INSERT INTO `users`(`name`, `surname`, `email`, `creditcard`, `birthday`, `country`, `sent_address`, `address`, `username`, `password`, `phone_no`, `start_banned`, `banned_duration`, `banned_reason`, `penalty_count`) VALUES 
("Schmitt","Carine","schmitt.carine@buydo.com","7652742759043510","1993-12-6","Thailand","54, rue Royale","54, rue Royale","schmitt","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66818615957","1993-4-12","-1","none","0"),
("King","Jean","king.jean@buydo.com","5615905535727840","1989-12-21","Thailand","8489 Strong St.","8489 Strong St.","king","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66845348227","1993-4-12","-1","none","0"),
("Ferguson","Peter","ferguson.peter@buydo.com","1747155734945730","1989-8-4","Thailand","636 St Kilda Road","636 St Kilda Road","ferguson","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66882571105","1993-4-12","-1","none","0"),
("Labrune","Janine","labrune.janine@buydo.com","3850575202794400","1989-11-2","Thailand","67, rue des Cinquante Otages","67, rue des Cinquante Otages","labrune","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66840580305","1993-4-12","-1","none","0"),
("Bergulfsen","Jonas","bergulfsen.jonas@buydo.com","9702978659090900","1987-5-25","Thailand","Erling Skakkes gate 78","Erling Skakkes gate 78","bergulfsen","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66821028345","1993-4-12","-1","none","0"),
("Nelson","Susan","nelson.susan@buydo.com","7713261770114000","1993-12-5","Thailand","5677 Strong St.","5677 Strong St.","nelson","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66804792499","1993-4-12","-1","none","0"),
("Piestrzeniewicz","Zbyszek","piestrzeniewicz.zbyszek@buydo.com","6794565573703060","1981-3-22","Thailand","ul. Filtrowa 68","ul. Filtrowa 68","zbyszek","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66863176948","1993-4-12","-1","none","0"),
("Keitel","Roland","keitel.roland@buydo.com","4969286491850730","1989-8-9","Thailand","Lyonerstr. 34","Lyonerstr. 34","keitel","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66879646810","1993-4-12","-1","none","0"),
("Murphy","Julie","murphy.julie@buydo.com","5984687652277140","1981-3-19","Thailand","5557 North Pendale Street","5557 North Pendale Street","murphy","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66844144649","1993-4-12","-1","none","0"),
("Lee","Kwai","lee.kwai@buydo.com","7785068133728380","1988-4-28","Thailand","897 Long Airport Avenue","897 Long Airport Avenue","lee","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66882027797","1993-4-12","-1","none","0"),
("Freyre","Diego","freyre.diego@buydo.com","4910549315182370","1985-5-18","Thailand","C/ Moralzarzal, 86","C/ Moralzarzal, 86","freyre","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66843946177","1993-4-12","-1","none","0"),
("Berglund","Christina","berglund.christina@buydo.com","3237442690231870","1988-2-19","Thailand","Berguvsvägen  8","Berguvsvägen  8","berglund","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66861934799","1993-4-12","-1","none","0"),
("Petersen","Jytte","petersen.jytte@buydo.com","2640653488677410","1991-10-9","Thailand","Vinbæltet 34","Vinbæltet 34","petersen","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66812058708","1993-4-12","-1","none","0"),
("Saveley","Mary","saveley.mary@buydo.com","8646343620871700","1981-9-17","Thailand","2, rue du Commerce","2, rue du Commerce","saveley","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66870630407","1993-4-12","-1","none","0"),
("Natividad","Eric","natividad.eric@buydo.com","2346296046771980","1990-1-10","Thailand","Bronz Sok.","Bronz Sok.","natividad","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66843731215","1993-4-12","-1","none","0"),
("Young","Jeff","young.jeff@buydo.com","2020900276511710","1985-3-3","Thailand","4092 Furth Circle","4092 Furth Circle","young","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66810315678","1993-4-12","-1","none","0"),
("Leong","Kelvin","leong.kelvin@buydo.com","9453809314191110","1988-4-27","Thailand","7586 Pompton St.","7586 Pompton St.","leong","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66899826839","1993-4-12","-1","none","0"),
("Hashimoto","Juri","hashimoto.juri@buydo.com","2156396668121710","1993-9-23","Thailand","9408 Furth Circle","9408 Furth Circle","hashimoto","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66868935091","1993-4-12","-1","none","0"),
("Victorino","Wendy","victorino.wendy@buydo.com","3949841198957510","1983-6-20","Thailand","106 Linden Road Sandown","106 Linden Road Sandown","victorino","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66857607994","1993-4-12","-1","none","0"),
("Oeztan","Veysel","oeztan.veysel@buydo.com","4114456658675530","1993-6-8","Thailand","Brehmen St. 121","Brehmen St. 121","oeztan","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66802944165","1993-4-12","-1","none","0"),
("Franco","Keith","franco.keith@buydo.com","1807648902323120","1993-4-18","Thailand","149 Spinnaker Dr.","149 Spinnaker Dr.","franco","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66801438208","1993-4-12","-1","none","0"),
("de Castro","Isabel","de castro.isabel@buydo.com","3233485190065830","1987-9-15","Thailand","Estrada da saúde n. 58","Estrada da saúde n. 58","de castro","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66848151400","1993-4-12","-1","none","0"),
("Rancé","Martine","rancé.martine@buydo.com","2636398692805050","1986-3-17","Thailand","184, chaussée de Tournai","184, chaussée de Tournai","rancé","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66847902072","1993-4-12","-1","none","0"),
("Bertrand","Marie","bertrand.marie@buydo.com","1509896869957940","1987-4-25","Thailand","265, boulevard Charonne","265, boulevard Charonne","bertrand","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66897598985","1993-4-12","-1","none","0"),
("Tseng","Jerry","tseng.jerry@buydo.com","1337351939350450","1991-2-20","Thailand","4658 Baden Av.","4658 Baden Av.","tseng","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66818571788","1993-4-12","-1","none","0"),
("Kentary","Mory","kentary.mory@buydo.com","6700250919602200","1987-2-26","Thailand","1-6-20 Dojima","1-6-20 Dojima","kentary","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66894751658","1993-4-12","-1","none","0"),
("Frick","Michael","frick.michael@buydo.com","6581435385876620","1989-1-1","Thailand","2678 Kingston Rd.","2678 Kingston Rd.","frick","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66847068963","1993-4-12","-1","none","0"),
("Karttunen","Matti","karttunen.matti@buydo.com","7411410255239960","1981-7-9","Thailand","Keskuskatu 45","Keskuskatu 45","karttunen","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66813377351","1993-4-12","-1","none","0"),
("Ashworth","Rachel","ashworth.rachel@buydo.com","9749653882021780","1986-3-13","Thailand","Fauntleroy Circus","Fauntleroy Circus","ashworth","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66802853351","1993-4-12","-1","none","0"),
("Cassidy","Dean","cassidy.dean@buydo.com","9708496902650680","1987-6-4","Thailand","25 Maiden Lane","25 Maiden Lane","cassidy","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66899709128","1993-4-12","-1","none","0"),
("Taylor","Leslie","taylor.leslie@buydo.com","6914315363147300","1983-5-10","Thailand","16780 Pompton St.","16780 Pompton St.","taylor","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66893959667","1993-4-12","-1","none","0"),
("Devon","Elizabeth","devon.elizabeth@buydo.com","3128680442935610","1987-5-13","Thailand","12, Berkeley Gardens Blvd","12, Berkeley Gardens Blvd","devon","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66816149242","1993-4-12","-1","none","0"),
("Tamuri","Yoshi","tamuri.yoshi@buydo.com","3484860117004430","1991-11-16","Thailand","1900 Oak St.","1900 Oak St.","tamuri","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66850797816","1993-4-12","-1","none","0"),
("Barajas","Miguel","barajas.miguel@buydo.com","6438348269510470","1987-9-5","Thailand","7635 Spinnaker Dr.","7635 Spinnaker Dr.","barajas","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66874352081","1993-4-12","-1","none","0"),
("Walker","Brydey","walker.brydey@buydo.com","1715454440456250","1984-3-25","Thailand","Suntec Tower Three","Suntec Tower Three","walker","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66834213864","1993-4-12","-1","none","0"),
("Citeaux","Frédérique","citeaux.frédérique@buydo.com","7273099085908910","1991-4-25","Thailand","24, place Kléber","24, place Kléber","citeaux","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66805593848","1993-4-12","-1","none","0"),
("Gao","Mike","gao.mike@buydo.com","7949306566829050","1981-2-7","Thailand","Bank of China Tower","Bank of China Tower","gao","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66878115553","1993-4-12","-1","none","0"),
("Saavedra","Eduardo","saavedra.eduardo@buydo.com","7688637587502040","1984-3-5","Thailand","Rambla de Cataluña, 23","Rambla de Cataluña, 23","saavedra","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66826686405","1993-4-12","-1","none","0"),
("Kloss","Horst","kloss.horst@buydo.com","7141820988486880","1991-8-13","Thailand","Taucherstraße 10","Taucherstraße 10","kloss","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66855246140","1993-4-12","-1","none","0"),
("Ibsen","Palle","ibsen.palle@buydo.com","7081223675887140","1991-3-17","Thailand","Smagsloget 45","Smagsloget 45","ibsen","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66838184409","1993-4-12","-1","none","0"),
("Fresnière","Jean","fresnière.jean@buydo.com","6467459003281360","1984-5-22","Thailand","43 rue St. Laurent","43 rue St. Laurent","fresnière","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66800002238","1993-4-12","-1","none","0"),
("Camino","Alejandra","camino.alejandra@buydo.com","4704755714044680","1988-4-3","Thailand","Gran Vía, 1","Gran Vía, 1","camino","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66888011551","1993-4-12","-1","none","0"),
("Thompson","Valarie","thompson.valarie@buydo.com","7880995342816660","1986-8-11","Thailand","361 Furth Circle","361 Furth Circle","thompson","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66874776552","1993-4-12","-1","none","0"),
("Bennett","Helen","bennett.helen@buydo.com","3750759086718060","1986-9-17","Thailand","Garden House","Garden House","bennett","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66852482229","1993-4-12","-1","none","0"),
("Roulet","Annette","roulet.annette@buydo.com","5738162193917930","1987-9-16","Thailand","1 rue Alsace-Lorraine","1 rue Alsace-Lorraine","roulet","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66824307201","1993-4-12","-1","none","0"),
("Messner","Renate","messner.renate@buydo.com","7387833630028780","1986-2-8","Thailand","Magazinweg 7","Magazinweg 7","messner","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66869721450","1993-4-12","-1","none","0"),
("Accorti","Paolo","accorti.paolo@buydo.com","2080561319214480","1983-1-12","Thailand","Via Monte Bianco 34","Via Monte Bianco 34","accorti","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66823291979","1993-4-12","-1","none","0"),
("Da Silva","Daniel","da silva.daniel@buydo.com","3479269351097880","1985-6-3","Thailand","27 rue du Colonel Pierre Avia","27 rue du Colonel Pierre Avia","da silva","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66855894060","1993-4-12","-1","none","0"),
("Tonini","Daniel","tonini.daniel@buydo.com","6905289801602470","1984-12-17","Thailand","67, avenue de l'Europe","67, avenue de l'Europe","tonini","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66899290140","1993-4-12","-1","none","0"),
("Pfalzheim","Henriette","pfalzheim.henriette@buydo.com","9369518837958170","1984-11-13","Thailand","Mehrheimerstr. 369","Mehrheimerstr. 369","pfalzheim","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66888031584","1993-4-12","-1","none","0"),
("Lincoln","Elizabeth","lincoln.elizabeth@buydo.com","2350996641636800","1985-10-6","Thailand","23 Tsawassen Blvd.","23 Tsawassen Blvd.","lincoln","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66849375509","1993-4-12","-1","none","0"),
("Franken","Peter","franken.peter@buydo.com","9711476988486280","1992-4-1","Thailand","Berliner Platz 43","Berliner Platz 43","franken","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66878020778","1993-4-12","-1","none","0"),
("O'Hara","Anna","o'hara.anna@buydo.com","9895734730095100","1986-4-26","Thailand","201 Miller Street","201 Miller Street","o'hara","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66815373753","1993-4-12","-1","none","0"),
("Rovelli","Giovanni","rovelli.giovanni@buydo.com","1930510728082580","1988-2-14","Thailand","Via Ludovico il Moro 22","Via Ludovico il Moro 22","rovelli","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66813617149","1993-4-12","-1","none","0"),
("Huxley","Adrian","huxley.adrian@buydo.com","6180605368843460","1989-1-2","Thailand","Monitor Money Building","Monitor Money Building","huxley","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66855563611","1993-4-12","-1","none","0"),
("Hernandez","Marta","hernandez.marta@buydo.com","3083931008693340","1987-2-15","Thailand","39323 Spinnaker Dr.","39323 Spinnaker Dr.","hernandez","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66873686456","1993-4-12","-1","none","0"),
("Harrison","Ed","harrison.ed@buydo.com","4362828023313100","1993-11-23","Thailand","Rte des Arsenaux 41 ","Rte des Arsenaux 41 ","harrison","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66843110587","1993-4-12","-1","none","0"),
("Holz","Mihael","holz.mihael@buydo.com","6909235303085860","1993-6-18","Thailand","Grenzacherweg 237","Grenzacherweg 237","holz","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66814170437","1993-4-12","-1","none","0"),
("Klaeboe","Jan","klaeboe.jan@buydo.com","7237402812983460","1989-4-21","Thailand","Drammensveien 126A","Drammensveien 126A","klaeboe","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66881746110","1993-4-12","-1","none","0"),
("Schuyler","Bradley","schuyler.bradley@buydo.com","1227239226512880","1991-8-2","Thailand","Kingsfordweg 151","Kingsfordweg 151","schuyler","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66844301218","1993-4-12","-1","none","0"),
("Andersen","Mel","andersen.mel@buydo.com","9717309526530240","1981-1-8","Thailand","Obere Str. 57","Obere Str. 57","andersen","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66830309624","1993-4-12","-1","none","0"),
("Koskitalo","Pirkko","koskitalo.pirkko@buydo.com","5282169985666310","1988-11-12","Thailand","Torikatu 38","Torikatu 38","koskitalo","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66843271511","1993-4-12","-1","none","0"),
("Dewey","Catherine","dewey.catherine@buydo.com","3676018516130800","1982-12-25","Thailand","Rue Joseph-Bens 532","Rue Joseph-Bens 532","dewey","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66889364378","1993-4-12","-1","none","0"),
("Huang","Wing","huang.wing@buydo.com","4925655754515660","1982-7-25","Thailand","4575 Hillside Dr.","4575 Hillside Dr.","huang","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66801033503","1993-4-12","-1","none","0"),
("Brown","Julie","brown.julie@buydo.com","5278710964619490","1985-8-18","Thailand","7734 Strong St.","7734 Strong St.","brown","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66850162878","1993-4-12","-1","none","0"),
("Graham","Mike","graham.mike@buydo.com","9402426062546010","1985-3-5","Thailand","162-164 Grafton Road","162-164 Grafton Road","graham","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66862625252","1993-4-12","-1","none","0"),
("Calaghan","Ben","calaghan.ben@buydo.com","9538754994225720","1982-4-4","Thailand","31 Duncan St. West End","31 Duncan St. West End","calaghan","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66816072911","1993-4-12","-1","none","0"),
("Suominen","Kalle","suominen.kalle@buydo.com","3886810413704570","1989-6-22","Thailand","Software Engineering Center","Software Engineering Center","suominen","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66831818685","1993-4-12","-1","none","0"),
("Cramer","Philip","cramer.philip@buydo.com","7681322283973190","1993-8-1","Thailand","Maubelstr. 90","Maubelstr. 90","cramer","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66800634308","1993-4-12","-1","none","0"),
("Cervantes","Francisca","cervantes.francisca@buydo.com","1100527437490700","1980-1-6","Thailand","782 First Street","782 First Street","cervantes","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66831741325","1993-4-12","-1","none","0"),
("Fernandez","Jesus","fernandez.jesus@buydo.com","4526879442476930","1992-3-7","Thailand","Merchants House","Merchants House","fernandez","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66865165722","1993-4-12","-1","none","0"),
("Chandler","Brian","chandler.brian@buydo.com","1742324460457570","1989-12-11","Thailand","6047 Douglas Av.","6047 Douglas Av.","chandler","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66894015059","1993-4-12","-1","none","0"),
("McKenna","Patricia","mckenna.patricia@buydo.com","8673082207691390","1993-12-12","Thailand","8 Johnstown Road","8 Johnstown Road","mckenna","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66823529726","1993-4-12","-1","none","0"),
("Lebihan","Laurence","lebihan.laurence@buydo.com","7729772005934200","1980-12-8","Thailand","12, rue des Bouchers","12, rue des Bouchers","lebihan","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66867872064","1993-4-12","-1","none","0"),
("Henriot","Paul","henriot.paul@buydo.com","3033833877739050","1992-11-9","Thailand","59 rue de l'Abbaye","59 rue de l'Abbaye","henriot","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66844415631","1993-4-12","-1","none","0"),
("Kuger","Armand","kuger.armand@buydo.com","1116334090169460","1982-11-4","Thailand","1250 Pretorius Street","1250 Pretorius Street","kuger","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66857376238","1993-4-12","-1","none","0"),
("MacKinlay","Wales","mackinlay.wales@buydo.com","6732264499826780","1980-12-15","Thailand","199 Great North Road","199 Great North Road","mackinlay","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66894063563","1993-4-12","-1","none","0"),
("Josephs","Karin","josephs.karin@buydo.com","5429689384840000","1992-10-17","Thailand","Luisenstr. 48","Luisenstr. 48","josephs","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66842282631","1993-4-12","-1","none","0"),
("Yoshido","Juri","yoshido.juri@buydo.com","9788284321850490","1993-10-22","Thailand","8616 Spinnaker Dr.","8616 Spinnaker Dr.","yoshido","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66812116160","1993-4-12","-1","none","0"),
("Rodriguez","Lino","rodriguez.lino@buydo.com","8539398704134580","1991-6-20","Thailand","Jardim das rosas n. 32","Jardim das rosas n. 32","rodriguez","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66874602376","1993-4-12","-1","none","0"),
("Urs","Braun","urs.braun@buydo.com","3834560280484820","1982-8-20","Thailand","Hauptstr. 29","Hauptstr. 29","urs","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66869640747","1993-4-12","-1","none","0"),
("Cartrain","Pascale","cartrain.pascale@buydo.com","8228362202511040","1991-6-27","Thailand","Boulevard Tirou, 255","Boulevard Tirou, 255","cartrain","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66860302356","1993-4-12","-1","none","0"),
("Pipps","Georg","pipps.georg@buydo.com","5060057421705550","1993-7-25","Thailand","Geislweg 14","Geislweg 14","pipps","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66869044440","1993-4-12","-1","none","0"),
("Cruz","Arnold","cruz.arnold@buydo.com","7701279674216900","1990-5-2","Thailand","15 McCallum Street","15 McCallum Street","cruz","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66865606745","1993-4-12","-1","none","0"),
("Moroni","Maurizio","moroni.maurizio@buydo.com","6669650093287980","1987-10-22","Thailand","Strada Provinciale 124","Strada Provinciale 124","moroni","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66835509433","1993-4-12","-1","none","0"),
("Shimamura","Akiko","shimamura.akiko@buydo.com","6719058580201080","1984-2-1","Thailand","2-2-8 Roppongi","2-2-8 Roppongi","shimamura","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66850322549","1993-4-12","-1","none","0"),
("Perrier","Dominique","perrier.dominique@buydo.com","5431107242467720","1986-11-24","Thailand","25, rue Lauriston","25, rue Lauriston","perrier","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66853884727","1993-4-12","-1","none","0"),
("Müller","Rita","müller.rita@buydo.com","1855489902863680","1984-6-1","Thailand","Adenauerallee 900","Adenauerallee 900","müller","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66804215441","1993-4-12","-1","none","0"),
("McRoy","Sarah","mcroy.sarah@buydo.com","7696812755830230","1985-11-15","Thailand","101 Lambton Quay","101 Lambton Quay","mcroy","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66851693017","1993-4-12","-1","none","0"),
("Donnermeyer","Michael","donnermeyer.michael@buydo.com","8141466539948330","1980-11-14","Thailand","Hansastr. 15","Hansastr. 15","donnermeyer","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66818776812","1993-4-12","-1","none","0"),
("Feuer","Alexander","feuer.alexander@buydo.com","1218344545570340","1988-11-9","Thailand","Heerstr. 22","Heerstr. 22","feuer","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66851257179","1993-4-12","-1","none","0"),
("Lewis","Dan","lewis.dan@buydo.com","9669073455537300","1988-3-17","Thailand","2440 Pompton St.","2440 Pompton St.","lewis","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66842603631","1993-4-12","-1","none","0"),
("Larsson","Martha","larsson.martha@buydo.com","1010451305183730","1980-4-9","Thailand","Åkergatan 24","Åkergatan 24","larsson","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66851735754","1993-4-12","-1","none","0"),
("Mendel","Roland","mendel.roland@buydo.com","6869127672438490","1983-9-25","Thailand","Kirchgasse 6","Kirchgasse 6","mendel","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66836558034","1993-4-12","-1","none","0"),
("Choi","Yu","choi.yu@buydo.com","9163690535159390","1984-1-18","Thailand","5290 North Pendale Street","5290 North Pendale Street","choi","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66836713471","1993-4-12","-1","none","0"),
("Sommer","Martín","sommer.martín@buydo.com","8648553530534070","1990-3-9","Thailand","C/ Araquil, 67","C/ Araquil, 67","sommer","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66897424833","1993-4-12","-1","none","0"),
("Ottlieb","Sven","ottlieb.sven@buydo.com","9581918511877820","1990-6-6","Thailand","Walserweg 21","Walserweg 21","ottlieb","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66817921830","1993-4-12","-1","none","0"),
("Benitez","Violeta","benitez.violeta@buydo.com","1565897877694650","1988-8-18","Thailand","1785 First Street","1785 First Street","benitez","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66862727285","1993-4-12","-1","none","0"),
("Anton","Carmen","anton.carmen@buydo.com","8700187356743400","1982-1-8","Thailand","c/ Gobelas, 19-1 Urb. La Florida","c/ Gobelas, 19-1 Urb. La Florida","anton","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66831836614","1993-4-12","-1","none","0"),
("Clenahan","Sean","clenahan.sean@buydo.com","6924381444569700","1987-10-28","Thailand","7 Allen Street","7 Allen Street","clenahan","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66813273685","1993-4-12","-1","none","0"),
("Ricotti","Franco","ricotti.franco@buydo.com","6061851552814970","1982-5-24","Thailand","20093 Cologno Monzese","20093 Cologno Monzese","ricotti","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66835500519","1993-4-12","-1","none","0"),
("Moos","Hanna","moos.hanna@buydo.com","3127410586593170","1982-1-25","Thailand","Forsterstr. 57","Forsterstr. 57","moos","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66814004025","1993-4-12","-1","none","0"),
("Semenov","Alexander","semenov.alexander@buydo.com","5582551994697630","1987-11-11","Thailand","2 Pobedy Square","2 Pobedy Square","semenov","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66814055233","1993-4-12","-1","none","0"),
("AltagarM","Raanan","altagarm.raanan@buydo.com","8986417194159200","1985-9-14","Thailand","3 Hagalim Blv.","3 Hagalim Blv.","altagarm","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66885458143","1993-4-12","-1","none","0"),
("Roel","José Pedro","roel.josé pedro@buydo.com","1265271101199650","1987-5-26","Thailand","C/ Romero, 33","C/ Romero, 33","roel","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66839343470","1993-4-12","-1","none","0"),
("Salazar","Rosa","salazar.rosa@buydo.com","2603264330631060","1986-10-11","Thailand","11328 Douglas Av.","11328 Douglas Av.","salazar","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66886610839","1993-4-12","-1","none","0"),
("Smith","Thomas","smith.thomas@buydo.com","4674398102763410","1992-5-25","Thailand","120 Hanover Sq.","120 Hanover Sq.","smith","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66837196277","1993-4-12","-1","none","0"),
("Snowden","Tony","snowden.tony@buydo.com","5786277171710990","1991-10-2","Thailand","Arenales 1938 3'A'","Arenales 1938 3'A'","snowden","5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8","+66851332845","1993-4-12","-1","none","0");

INSERT INTO `buyers` (`user_id`) VALUES
(101),(102),(103),(104),(105),(106),(107),(108),(1),(2),(3),(4),(5),(11),(12),(13),(14),(15),(21),(22),(23),(24),(25),(31),(32),(33),(34),(35),(41),(42),(43),(44),(45),(51),(52),(53),(54),(55),(61),(62),(63),(64),(65),(71),(72),(73),(74),(75),(81),(82),(83),(84),(85),(91),(92),(93),(94),(95);

INSERT INTO `sellers` (`user_id`) VALUES
(6),(7),(8),(9),(16),(17),(18),(19),(26),(27),(28),(29),(36),(37),(38),(39),(46),(47),(48),(49),(56),(57),(58),(59),(66),(67),(68),(69),(76),(77),(78),(79),(86),(87),(88),(89),(96),(97),(98),(99);

INSERT INTO `admins` (`user_id`) VALUES
(10),(20),(30),(40),(50),(60),(70),(80),(90),(100);

INSERT INTO `items`(`item_name`, `posted_date`, `agreement`, `status`, `spec`, `owner_id`, `picture`) VALUES 
("Nami doll","1993-4-12","not return after received","in_stock","high 15 cm.","6","https://dl.dropboxusercontent.com/u/3631217/1.jpg"),
("Collection snake doll","1993-4-12","not return after received and sell as a set only","in_stock","3 doll in the set high 3-5 inc","17","https://dl.dropboxusercontent.com/u/3631217/2.jpg"),
("Mizaka doll","1993-7-6","not return after received","bidding_closed","high 15 cm.","17","https://dl.dropboxusercontent.com/u/3631217/3.jpg"),
("Rin jung doll","1993-4-12","not return after received","bidding_closed","high 15 cm.","6","https://dl.dropboxusercontent.com/u/3631217/4.jpg"),
("Night fury doll","1993-4-12","not return after received","in_stock","high 2 foot","17","https://dl.dropboxusercontent.com/u/3631217/5.jpg"),
("Pikaju doll","1993-4-12","not return after received","in_stock","high 1 foot","29","https://dl.dropboxusercontent.com/u/3631217/6.jpg"),
("steak pladook","1993-4-12","not return after received","in_stock","freeze steak 250 g","38","https://dl.dropboxusercontent.com/u/3631217/7.jpg"),
("pencil HB","1993-4-12","not return after received","in_stock","HB pencil 12 cm. 5 pencil/box","47","https://dl.dropboxusercontent.com/u/3631217/8.jpg"),
("Motorcycle BLACK","1993-4-12","not return after received","in_stock","BLACK Motorcycle 900cc","96","https://dl.dropboxusercontent.com/u/3631217/9.jpg"),
("Nikon box","1999-9-12","not return after received","in_stock","Nikon 2nd hand่ can't Auto focus","87","https://dl.dropboxusercontent.com/u/3631217/10.jpg"),
("Nikon box","2014-4-12","not return after received","bidding","Nikon 2nd hand่ can't Auto focus","87","https://dl.dropboxusercontent.com/u/3631217/10.jpg");

INSERT INTO `bid_items`(`item_id`, `current_winner_id`, `initial_price`, `current_price`, `current_max_bid`, `end_date`) VALUES 
(3,15,100,900,1500,"1993-7-6 02:59:00"),
(4,14,200,200,1600,"1993-7-6 02:59:00"),
(11,NULL,100,100,NULL,"2015-7-6 02:59:00");


INSERT INTO `sale_items`(`item_id`, `price`, `quantity_in_stock`) VALUES 
(1,500,1),
(2,1900,3),
(5,450,1),
(6,500,2),
(7,300,109),
(8,15,100),
(9,500000,1),
(10,10000,1);

INSERT INTO `bid`(`item_id`, `buyer_id`, `current_bid`, `max_bid`, `bid_date`) VALUES 
(3,13,110,110,"1993-7-6 01:00:00"),(3,11,105,105,"1993-7-6 01:00:01"),(3,13,110,110,"1993-7-6 01:00:01"),(3,11,115,115,"1993-7-6 01:00:01"),(3,13,120,120,"1993-7-6 01:00:01"),(3,11,125,125,"1993-7-6 01:00:01"),(3,13,130,130,"1993-7-6 01:00:01"),(3,11,135,135,"1993-7-6 01:00:01"),(3,13,140,140,"1993-7-6 01:00:01"),(3,11,145,145,"1993-7-6 01:00:01"),(3,13,150,150,"1993-7-6 01:00:01"),(3,11,155,155,"1993-7-6 01:00:01"),(3,13,160,160,"1993-7-6 01:00:01"),(3,11,165,165,"1993-7-6 01:00:01"),(3,13,170,170,"1993-7-6 01:00:01"),(3,11,175,175,"1993-7-6 01:00:01"),(3,13,180,180,"1993-7-6 01:00:01"),(3,11,185,185,"1993-7-6 01:00:01"),(3,13,190,190,"1993-7-6 01:00:01"),(3,11,195,195,"1993-7-6 01:00:01"),(3,13,200,200,"1993-7-6 01:00:01"),(3,11,205,205,"1993-7-6 01:00:01"),(3,13,210,210,"1993-7-6 01:00:01"),(3,11,215,215,"1993-7-6 01:00:01"),(3,13,220,220,"1993-7-6 01:00:01"),(3,11,225,225,"1993-7-6 01:00:01"),(3,13,230,230,"1993-7-6 01:00:01"),(3,11,235,235,"1993-7-6 01:00:01"),(3,13,240,240,"1993-7-6 01:00:01"),(3,11,245,245,"1993-7-6 01:00:01"),(3,13,250,250,"1993-7-6 01:00:01"),(3,11,255,255,"1993-7-6 01:00:01"),(3,13,260,260,"1993-7-6 01:00:01"),(3,11,265,265,"1993-7-6 01:00:01"),(3,13,270,270,"1993-7-6 01:00:01"),(3,11,275,275,"1993-7-6 01:00:01"),(3,13,280,280,"1993-7-6 01:00:01"),(3,11,285,285,"1993-7-6 01:00:01"),(3,13,290,290,"1993-7-6 01:00:01"),(3,11,295,295,"1993-7-6 01:00:01"),(3,13,300,300,"1993-7-6 01:00:01"),(3,11,305,305,"1993-7-6 01:00:01"),(3,13,310,310,"1993-7-6 01:00:01"),(3,11,315,315,"1993-7-6 01:00:01"),(3,13,320,320,"1993-7-6 01:00:01"),(3,11,325,325,"1993-7-6 01:00:01"),(3,13,330,330,"1993-7-6 01:00:01"),(3,11,335,335,"1993-7-6 01:00:01"),(3,13,340,340,"1993-7-6 01:00:01"),(3,11,345,345,"1993-7-6 01:00:01"),(3,13,350,350,"1993-7-6 01:00:01"),(3,11,355,355,"1993-7-6 01:00:01"),(3,13,360,360,"1993-7-6 01:00:01"),(3,11,365,365,"1993-7-6 01:00:01"),(3,13,370,370,"1993-7-6 01:00:01"),(3,11,375,375,"1993-7-6 01:00:01"),(3,13,380,380,"1993-7-6 01:00:01"),(3,11,385,385,"1993-7-6 01:00:01"),(3,13,390,390,"1993-7-6 01:00:01"),(3,11,395,395,"1993-7-6 01:00:01"),(3,13,400,400,"1993-7-6 01:00:01"),(3,11,405,405,"1993-7-6 01:00:01"),(3,13,410,410,"1993-7-6 01:00:01"),(3,11,415,415,"1993-7-6 01:00:01"),(3,13,420,420,"1993-7-6 01:00:01"),(3,11,425,425,"1993-7-6 01:00:01"),(3,13,430,430,"1993-7-6 01:00:01"),(3,11,435,435,"1993-7-6 01:00:01"),(3,13,440,440,"1993-7-6 01:00:01"),(3,11,445,445,"1993-7-6 01:00:01"),(3,13,450,450,"1993-7-6 01:00:01"),(3,11,455,455,"1993-7-6 01:00:01"),(3,13,460,460,"1993-7-6 01:00:01"),(3,11,465,465,"1993-7-6 01:00:01"),(3,13,470,470,"1993-7-6 01:00:01"),(3,11,475,475,"1993-7-6 01:00:01"),(3,13,480,480,"1993-7-6 01:00:01"),(3,11,485,485,"1993-7-6 01:00:01"),(3,13,490,490,"1993-7-6 01:00:01"),(3,11,495,495,"1993-7-6 01:00:01"),(3,13,500,500,"1993-7-6 01:00:01"),(3,11,505,505,"1993-7-6 01:00:01"),(3,13,510,510,"1993-7-6 01:00:01"),(3,11,515,515,"1993-7-6 01:00:01"),(3,13,520,520,"1993-7-6 01:00:01"),
(3,11,525,525,"1993-7-6 01:00:01"),(3,13,530,530,"1993-7-6 01:00:01"),(3,11,535,535,"1993-7-6 01:00:01"),(3,13,540,540,"1993-7-6 01:00:01"),(3,11,545,545,"1993-7-6 01:00:01"),(3,13,550,550,"1993-7-6 01:00:01"),(3,11,555,555,"1993-7-6 01:00:01"),(3,13,560,560,"1993-7-6 01:00:01"),(3,11,565,565,"1993-7-6 01:00:01"),(3,13,570,570,"1993-7-6 01:00:01"),(3,11,575,575,"1993-7-6 01:00:01"),(3,13,580,580,"1993-7-6 01:00:01"),(3,11,585,585,"1993-7-6 01:00:01"),(3,13,590,590,"1993-7-6 01:00:01"),(3,11,595,595,"1993-7-6 01:00:01"),(3,13,600,600,"1993-7-6 01:00:01"),(3,15,605,900,"1993-7-6 01:00:01"),(3,11,610,610,"1993-7-6 01:00:01"),(3,11,615,615,"1993-7-6 01:00:01"),(3,11,620,620,"1993-7-6 01:00:01"),(3,11,625,625,"1993-7-6 01:00:01"),(3,11,630,630,"1993-7-6 01:00:01"),(3,11,635,635,"1993-7-6 01:00:01"),(3,11,640,640,"1993-7-6 01:00:01"),(3,11,645,645,"1993-7-6 01:00:01"),(3,11,650,650,"1993-7-6 01:00:01"),(3,11,655,655,"1993-7-6 01:00:01"),(3,11,660,660,"1993-7-6 01:00:01"),(3,11,665,665,"1993-7-6 01:00:01"),(3,11,670,670,"1993-7-6 01:00:01"),(3,11,675,675,"1993-7-6 01:00:01"),(3,11,680,680,"1993-7-6 01:00:01"),(3,11,685,685,"1993-7-6 01:00:01"),(3,11,690,690,"1993-7-6 01:00:01"),(3,11,695,695,"1993-7-6 01:00:01"),(3,11,700,700,"1993-7-6 01:00:01"),(3,11,705,705,"1993-7-6 01:00:01"),(3,11,710,710,"1993-7-6 01:00:01"),(3,11,715,715,"1993-7-6 01:00:01"),(3,11,720,720,"1993-7-6 01:00:01"),(3,11,725,725,"1993-7-6 01:00:01"),(3,11,730,730,"1993-7-6 01:00:01"),(3,11,735,735,"1993-7-6 01:00:01"),(3,11,740,740,"1993-7-6 01:00:01"),(3,11,745,745,"1993-7-6 01:00:01"),(3,11,750,750,"1993-7-6 01:00:01"),(3,11,755,755,"1993-7-6 01:00:01"),(3,11,760,760,"1993-7-6 01:00:01"),(3,11,765,765,"1993-7-6 01:00:01"),(3,11,770,770,"1993-7-6 01:00:01"),(3,11,775,775,"1993-7-6 01:00:01"),(3,11,780,780,"1993-7-6 01:00:01"),(3,11,785,785,"1993-7-6 01:00:01"),(3,11,790,790,"1993-7-6 01:00:01"),(3,11,795,795,"1993-7-6 01:00:01"),(3,11,800,800,"1993-7-6 01:00:01"),(3,11,805,805,"1993-7-6 01:00:01"),(3,11,810,810,"1993-7-6 01:00:01"),(3,11,815,815,"1993-7-6 01:00:01"),(3,11,820,820,"1993-7-6 01:00:01"),(3,11,825,825,"1993-7-6 01:00:01"),(3,11,830,830,"1993-7-6 01:00:01"),(3,11,835,835,"1993-7-6 01:00:01"),(3,11,840,840,"1993-7-6 01:00:01"),(3,11,845,845,"1993-7-6 01:00:01"),(3,11,850,850,"1993-7-6 01:00:01"),(3,11,855,855,"1993-7-6 01:00:01"),(3,11,860,860,"1993-7-6 01:00:01"),(3,11,865,865,"1993-7-6 01:00:01"),(3,11,870,870,"1993-7-6 01:00:01"),(3,11,875,875,"1993-7-6 01:00:01"),(3,11,880,880,"1993-7-6 01:00:01"),(3,11,885,885,"1993-7-6 01:00:01"),(3,11,890,890,"1993-7-6 01:00:01"),(3,11,895,895,"1993-7-6 01:00:01"),(4,14,200,200, "1993-7-6 02:58:00");

INSERT INTO `transactions`(`buyer_id`, `item_id`, `placement_date`, `quantity`, `transaction_status`) VALUES 
(15,3,"1993-7-6 01:05:00",1,"wait"),
(1,2,"1993-7-6 01:05:00",1,"received"),
(1,7,"1993-7-6 01:05:00",10,"wait"),
(1,8,"1993-7-6 01:05:00",3,"complete"),
(1,9,"1993-7-6 01:05:00",1,"wait"),
(1,10,"1993-7-6 01:05:00",1,"complete"),
(14,4,"1993-7-6 01:04:00",1,"received");
