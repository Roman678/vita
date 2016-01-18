<?php


 if($_GET['lang']) {
	switch($_GET['lang']) {
		/*================================================================ENGLISH=========================================================*/
		case"en":
	     $html = str_replace("[lang_home]","home",$html);
		 $html = str_replace("[lang_about us]","about us",$html);
		 $html = str_replace("[lang_features]","features",$html);
		 $html = str_replace("[lang_contact us]","contact us",$html);
		 $html = str_replace("[lang_gallery]","gallery",$html);
		 $html = str_replace("[lang_whats new]","whats new",$html);  
		 $html = str_replace("[lang_language]","language",$html);  
		 $html = str_replace("[lang_gallery_title]","Gallery",$html);
		 $box2info ="<div class='box2_info'>
                       <h3 class='time1 animated'><span class='colorblack'>ESKIVO</span>
					    - the <span class='colorblack'>NEW</span> ultimate </h3>
                       <h4 class='time2 animated'><span class='colorblack'>FREE</span> retro 
					   arcade <span class='colorblack'>GAME</span></h4>
                       <span class='time3 animated'><p> 
                        for Iphone and Android. Avoid obstacles, reach goals 
                        and unlock new features & levels. Enjoy the game in 
                        many different interactive levels. Accomplish the 
                        best results! Become an Eskivo Champion and Win 
                        and Awesome Prize! Compare your results and 
                        achievements with your friends! 
                      </p></span>
                      <div class='dots animated time4'>
                       <div class='dot1'></div>
                       <div class='dot2'></div>
                       <div class='dot3'></div>
                       <div class='clr'></div>
                     </div>
                      </div>";
		 $html = str_replace("[lang_box2_info]",$box2info,$html);  
		 
		 $html = str_replace("[lang_see whats new]","See whats New ?",$html);
		 
		 $script1 = "<div class='script_text1 script_text'>
                      <center><h3 class='trans'>Play in 9 Different Sport<br/> Types</h3></center>
					  <p class='trans'>Golf, Dodgeball, Basketball,  
					  Bowling, Football, Billiard, 
					  Tennis, Handball, Volleyball </p>
					  </div>";
		 $script2 = "<div class='script_text2 script_text'>
                     <center><h3 class='trans'>Play in 4 Levels of Difficulty</h3></center>
                     <p class='trans'>Easy, Medium, Hard, Extreme </p>
                     </div>";
		 $script3 = "<div class='script_text3 script_text'>
                     <center><h3 class='trans'>High score / Leaderboard </h3></center>
                     <p class='trans'>Achieve the highest score on the leaderboard and 
                     win Prizes! </p>
                    </div>";
		 $script4 = "<div class='script_text4 script_text'>
                     <center><h3 class='trans'>Statistics</h3></center>
                     <p class='trans'>Keep track of your statistics 
                     on each discipline </p>
                     </div>";
		 $script5 = "<div class='script_text5 script_text'>
                     <center><h3 class='trans'>In app Purchases</h3></center>
                     <p class='trans'>Tired of playing ? Unlock any Sport in the In App purchases Cart. 
					 Hey ! Even unlock all pitches and courts instantly for a reduced price !</p>
                    </div>";
		 $script6 = "<div class='script_text6 script_text' >
                     <center><h3 class='trans'>Prizes</h3></center>
                    <p class='trans'>Each individual player, which 
                    defeats the reigning champion 
                    in any discipline, will win a Prize 
                    relative to that sport! Simply 
                    submit your score and 
                     Share your screenshot of the 
                    leaderboard on our 
                    Facebook wall ! </p>
                    </div>"; 
					$html = str_replace("[lang_script1]",$script1,$html);
					$html = str_replace("[lang_script2]",$script2,$html);
					$html = str_replace("[lang_script3]",$script3,$html);
					$html = str_replace("[lang_script4]",$script4,$html);
					$html = str_replace("[lang_script5]",$script5,$html);
					$html = str_replace("[lang_script6]",$script6,$html);
					
		$html = str_replace("[lang_Terms & Conditions]","Terms & Conditions",$html); 
		$html = str_replace("[lang_Credentials]","Credentials",$html); 
		$html = str_replace("[lang_Contact]","Contact",$html);   
		$html = str_replace("[lang_Lets be Social:]","Lets be Social",$html);
		break;
		
		/*================================================================FRANCE=========================================================*/
		
		case"fr":
	     $html = str_replace("[lang_home]","Accueil",$html);
		 $html = str_replace("[lang_about us]","Qui sommes nous",$html);
		 $html = str_replace("[lang_features]","caractéristiques",$html);
		 $html = str_replace("[lang_contact us]","contacts",$html);
		 $html = str_replace("[lang_gallery]","Galerie",$html);
		 $html = str_replace("[lang_whats new]","Quoi de neuf",$html);
		 $html = str_replace("[lang_language]","langue",$html);
		 $html = str_replace("[lang_gallery_title]","Galerie",$html);
		 
		 $box2info ="<div class='box2_info' style='margin-top:80px;'>
                       <h3 class='time1 animated'><span class='colorblack'>ESKIVO</span> -  
					   le <span class='colorblack'>NOUVEAU</span> summum </h3>
                       <h4 class='time2 animated'><span class='colorblack'>ARCADE</span> 
					   rétro gratuit <span class='colorblack'>JEU</span></h4>
                       <span class='time3 animated'><p> 
                        pour Iphone et Android. Éviter les obstacles, atteindre les buts et 
						débloquer de nouvelles fonctionnalités & niveaux. Apprécier le jeu dans 
						beaucoup de différents niveaux interactifs. Accomplir les meilleurs 
						résultats ! Devenez un Champion de Eskivo et la victoire et le prix génial ! 
						Comparez vos résultats et vos réalisations avec vos amis ! 
                      </p></span>
                      <div class='dots animated time4'>
                       <div class='dot1'></div>
                       <div class='dot2'></div>
                       <div class='dot3'></div>
                       <div class='clr'></div>
                     </div>
                      </div>";
		 $html = str_replace("[lang_box2_info]",$box2info,$html);
		 
		 $html = str_replace("[lang_see whats new]","Voir quoi de nouveau ?",$html);
		 
		 $script1 = "<div class='script_text1 script_text'>
                      <center><h3 class='trans'>Jouer dans 9 Sport <br/>Types de</h3></center>
					  <p class='trans'>Golf, Dodgeball, Basketball, Bowling, billard, Tennis, Handball, Football, volley-ball </p>
					  </div>";
		 $script2 = "<div class='script_text2 script_text'>
                     <center><h3 class='trans'>Jouer en 4 niveaux de Difficulté</h3></center>
                     <p class='trans'>Facile, moyen, dur, extrême </p>
                     </div>";
		 $script3 = "<div class='script_text3 script_text'>
                     <center><h3 class='trans'>Un score élevé / classement </h3></center>
                     <p class='trans'>Obtenir le meilleur score dans le classement et 
                     gagner des prix ! </p>
                    </div>";
		 $script4 = "<div class='script_text4 script_text'>
                     <center><h3 class='trans'>Statistiques</h3></center>
                     <p class='trans'>Garder une trace de vos statistiques 
                     sur chaque discipline </p>
                     </div>";
		 $script5 = "<div class='script_text5 script_text'>
                     <center><h3 class='trans'>Les achats app</h3></center>
                     <p class='trans'>Fatigué de jouer ? Débloquer tous les sports dans les achats In App Cart. 
      Hé ! Même débloquer tous les emplacements et les tribunaux instantanément pour un prix réduit</p>
                    </div>";
		 $script6 = "<div class='script_text6 script_text' >
                     <center><h3 class='trans'>Prix</h3></center>
                    <p class='trans'>Chaque joueur individuel, qui 
                    bat le champion en titre 
                    dans n'importe quelle discipline, gagnera un prix 
                    par rapport à ce sport ! Tout simplement 
                    soumettre votre score et 
                     Partagez votre capture d'écran de la 
                    classement sur notre 
                    Mur Facebook ! </p>
                    </div>"; 
					$html = str_replace("[lang_script1]",$script1,$html);
					$html = str_replace("[lang_script2]",$script2,$html);
					$html = str_replace("[lang_script3]",$script3,$html);
					$html = str_replace("[lang_script4]",$script4,$html);
					$html = str_replace("[lang_script5]",$script5,$html);
					$html = str_replace("[lang_script6]",$script6,$html); 
					
		$html = str_replace("[lang_Terms & Conditions]","Termes et Conditions",$html); 
		$html = str_replace("[lang_Credentials]","Informations d'identification",$html); 
		$html = str_replace("[lang_Contact]","Contact",$html); 
		$html = str_replace("[lang_Lets be Social:]","Permet d'être Social",$html);  
		break;
		
		/*================================================================ARABIAN=========================================================*/
		
		case"ar":
	     $html = str_replace("[lang_home]","<font style='font-size:24px;'>الصفحة الرئيسية</font>",$html);
		 $html = str_replace("[lang_about us]","<font style='font-size:24px;'>من نحن</font>",$html);
		 $html = str_replace("[lang_features]","<font style='font-size:24px;'>ميزات</font>",$html);
		 $html = str_replace("[lang_contact us]","<font style='font-size:24px;'>اتصل بنا</font>",$html);
		 $html = str_replace("[lang_gallery]","<font style='font-size:24px;'>معرض الصور</font>",$html);
		 $html = str_replace("[lang_whats new]","<font style='font-size:24px;'>ما الجديد</font>",$html);
		 $html = str_replace("[lang_language]","<font style='font-size:24px;'>اللغة</font>",$html);
		 
		 $html = str_replace("[lang_gallery_title]","معرض الصور",$html);
		 $box2info ="<div class='box2_info'>
                       <h3 class='time1 animated'><span class='colorblack'>سكيفو--نهاية  </span>  المطاف <span class='colorblack'>الجديد</span> 
					   </h3> اممر الرجعية مجاناً لعبة
                       <h4 class='time2 animated'><span class='colorblack'>ممر </span>
					    الرجعية<span class='colorblack'> مجاناً لعبة</span></h4> 
                       <span class='time3 animated'><p> 
                        فون والروبوت. تجنب العقبات والتوصل إلى الأهداف وإطلاق العنان للميزات الجديدة & مستويات. تتمتع اللعبة 
						بالعديد من مستويات تفاعلية مختلفة. تحقيق أفضل النتائج! أصبح بطل اسكيفو وين وجائزة رهيبة! مقارنة النتائج
						 والإنجازات مع أصدقائك الخاصة بك!  
                      </p></span>
                      <div class='dots animated time4'>
                       <div class='dot1'></div>
                       <div class='dot2'></div>
                       <div class='dot3'></div>
                       <div class='clr'></div>
                     </div>
                      </div>";
		 $html = str_replace("[lang_box2_info]",$box2info,$html);
		 
		 $html = str_replace("[lang_see whats new]","انظر ما الجديد؟",$html);
		 
		 $script1 = "<div class='script_text1 script_text'>
                      <center><h3 class='trans'>اللعب في الألعاب الرياضية المختلفة 9 أنواع</h3></center>
					  <p class='trans'>ملعب، دودجبل، كرة السلة،  
                      البولينج، كرة القدم، البلياردو، 
                        التنس، كرة اليد، الكرة الطائرة </p>
					  </div>";
		 $script2 = "<div class='script_text2 script_text'>
                     <center><h3 class='trans'>اللعب في 4 مستويات من الصعوبة</h3></center>
                     <p class='trans'>سهلة، متوسطة، صعبة، المتطرفة</p>
                     </div>";
		 $script3 = "<div class='script_text3 script_text'>
                     <center><h3 class='trans'>نقاط عالية/المتصدرين </h3></center>
                     <p class='trans'>تحقيق أعلى الدرجات على اليافطة و 
                     الفوز بجوائز قيمة! </p>
                    </div>";
		 $script4 = "<div class='script_text4 script_text'>
                     <center><h3 class='trans'>إحصائيات</h3></center>
                     <p class='trans'>الاحتفاظ بتعقب من الإحصاءات الخاصة بك 
                     في كل تخصص </p>
                     </div>";
		 $script5 = "<div class='script_text5 script_text'>
                     <center><h3 class='trans'>في شراء التطبيق</h3></center>
                     <p class='trans'>تعبت من اللعب؟ إلغاء تأمين أي رياضة في سلة المشتريات في التطبيق. 
      يا! حتى إطلاق جميع الملاعب والمحاكم على الفور للحصول على سعر مخفض!</p>
                    </div>";
		 $script6 = "<div class='script_text6 script_text' >
                     <center><h3 class='trans'>الجوائز</h3></center>
                    <p class='trans'>كل لاعب الفردية، التي 
                    الهزائم في حامل لقب بطل 
                    في أي تخصص، سوف يفوز بجائزة 
                    بالنسبة إلى أن الرياضة! ببساطة 
                    يقدم درجة الخاصة بك و 
                     مشاركة لقطة للشاشة الخاصة بك 
                    المتصدرين في موقعنا 
                    جدار فيسبوك! </p>
                    </div>"; 
					$html = str_replace("[lang_script1]",$script1,$html);
					$html = str_replace("[lang_script2]",$script2,$html);
					$html = str_replace("[lang_script3]",$script3,$html);
					$html = str_replace("[lang_script4]",$script4,$html);
					$html = str_replace("[lang_script5]",$script5,$html);
					$html = str_replace("[lang_script6]",$script6,$html);
					
		$html = str_replace("[lang_Terms & Conditions]","شروط آند",$html); 
		$html = str_replace("[lang_Credentials]","وثائق التفويض",$html); 
		$html = str_replace("[lang_Contact]","جهة الاتصال",$html);
		
		$html = str_replace("[lang_Lets be Social:]","دعونا نكون الاجتماعية",$html);  
		break;
		
		/*================================================================DEUTCH=========================================================*/
		case"de":
	     $html = str_replace("[lang_home]","Startseite",$html);
		 $html = str_replace("[lang_about us]","Über uns",$html);
		 $html = str_replace("[lang_features]","Funktionen",$html);
		 $html = str_replace("[lang_contact us]","Kontaktieren  uns",$html);
		 $html = str_replace("[lang_gallery]","Galerie",$html);
		 $html = str_replace("[lang_whats new]","Was ist neu",$html);  
		 $html = str_replace("[lang_language]","Sprache",$html);  
		 $html = str_replace("[lang_gallery_title]","Galerie",$html);
		 $box2info ="<div class='box2_info' style='margin-top:70px;'>
                       <h3 class='time1 animated'><span class='colorblack'>ESKIVO</span>
					    - die <span class='colorblack'>NEUE</span> ultimative </h3>
                       <h4 class='time2 animated'><span class='colorblack'>KOSTENLOSE</span> retro     
					   arcade <span class='colorblack'>SPIEL</span></h4>
                       <span class='time3 animated'><p> 
                        für Iphone und Android. Vermeiden Sie Hindernisse, erreichen Ziele 
                        und neuen Features & Ebenen zu entsperren. Genießen Sie das Spiel in 
                        vielen verschiedenen interaktiven Ebenen. Erreichen der 
                        optimale Ergebnisse zu erzielen! Werden Sie ein Eskivo-Champion und gewinnen 
                        und genial-Preis! Vergleichen Sie Ihre Ergebnisse und 
                        Leistungen mit Ihren Freunden! 
                      </p></span>
                      <div class='dots animated time4'>
                       <div class='dot1'></div>
                       <div class='dot2'></div>
                       <div class='dot3'></div>
                       <div class='clr'></div>
                     </div>
                      </div>";
		 $html = str_replace("[lang_box2_info]",$box2info,$html);  
		 
		 $html = str_replace("[lang_see whats new]","Siehe Was ist neu?",$html);
		 
		 $script1 = "<div class='script_text1 script_text'>
                      <center><h3 class='trans'>In 9 verschiedenen Sport spielen <br/> Typen</h3></center>
					  <p class='trans'>Golf, Dodgeball, Basketball,  
					   Bowling, Fußball, Billard, 
					   Tennis, Handball, Volleyball </p>
					  </div>";
		 $script2 = "<div class='script_text2 script_text'>
                     <center><h3 class='trans'>In 4 Schwierigkeitsgraden spielen</h3></center>
                     <p class='trans'>Leicht, Mittel, schwer, Extreme </p>
                     </div>";
		 $script3 = "<div class='script_text3 script_text'>
                     <center><h3 class='trans'>Highscore / Rangliste </h3></center>
                     <p class='trans'>Erreichen die höchste Punktzahl in der Rangliste und 
                     Preise zu gewinnen! </p>
                    </div>";
		 $script4 = "<div class='script_text4 script_text'>
                     <center><h3 class='trans'>Statistiken</h3></center>
                     <p class='trans'>Halten Sie den Überblick über Ihre Statistiken 
                     in jeder Disziplin </p>
                     </div>";
		 $script5 = "<div class='script_text5 script_text'>
                     <center><h3 class='trans'>In app Käufe</h3></center>
                     <p class='trans'>Leid zu spielen? Entsperren Sie jede Sportart in der In-App-Käufen Cart. 
      Hallöchen! Selbst entsperren Sie alle Tonhöhen und Gerichte sofort zum reduzierten Preis!</p>
                    </div>";
		 $script6 = "<div class='script_text6 script_text' >
                     <center><h3 class='trans'>Preise</h3></center>
                    <p class='trans'>Jeder einzelne Spieler, die 
                    besiegt den amtierenden champion 
                    in jeder Disziplin gewinnen einen Preis 
                    relativ zu diesem Sport! Einfach 
                    übermitteln Sie Ihre Gäste und 
                     Teilen Sie Ihre Bildschirmfotos von der 
                    Leaderboard auf unserer 
                    Facebook-Wand! </p>
                    </div>"; 
					$html = str_replace("[lang_script1]",$script1,$html);
					$html = str_replace("[lang_script2]",$script2,$html);
					$html = str_replace("[lang_script3]",$script3,$html);
					$html = str_replace("[lang_script4]",$script4,$html);
					$html = str_replace("[lang_script5]",$script5,$html);
					$html = str_replace("[lang_script6]",$script6,$html);
					
		$html = str_replace("[lang_Terms & Conditions]","Allgemeine Geschäftsbedingungen",$html); 
		$html = str_replace("[lang_Credentials]","Anmeldeinformationen",$html); 
		$html = str_replace("[lang_Contact]","Kontakt",$html);   
		$html = str_replace("[lang_Lets be Social:]","Sozial sein können",$html);
		break;
		
		
		
		/*================================================================ESPANIOLES=========================================================*/  
		case"es":
	     $html = str_replace("[lang_home]","Inicio",$html);
		 $html = str_replace("[lang_about us]","Sobre nosotros",$html);
		 $html = str_replace("[lang_features]","características",$html);
		 $html = str_replace("[lang_contact us]","contactos",$html);
		 $html = str_replace("[lang_gallery]","Galería",$html);
		 $html = str_replace("[lang_whats new]","Cuál es nuevo",$html);  
		 $html = str_replace("[lang_language]","lidioma",$html);  
		 $html = str_replace("[lang_gallery_title]","Galería",$html);
		 $box2info ="<div class='box2_info' style='margin-top:80px;'>
                       <h3 class='time1 animated'><span class='colorblack'>ESKIVO</span>              
					    - la <span class='colorblack'>NUEVA</span> ultimate </h3>
                       <h4 class='time2 animated'><span class='colorblack'>FREE</span> retro gratis <span class='colorblack'>JUENGO</span></h4>
                       <span class='time3 animated'><p> 
					   
                        para Iphone y Android. Evitar obstáculos, alcanzar metas 
                        y desbloquear nuevas características y niveles. Disfrutar del juego en 
                        muchos diferentes niveles interactivos. Cumplir con la 
                        mejores resultados! Convertirse en un campeón de Eskivo y gana 
                        y el premio impresionante! Comparar sus resultados y 
                        logros con tus amigos! 
						
                      </p></span>
                      <div class='dots animated time4'>
                       <div class='dot1'></div>
                       <div class='dot2'></div>
                       <div class='dot3'></div>
                       <div class='clr'></div>
                     </div>
                      </div>";
		 $html = str_replace("[lang_box2_info]",$box2info,$html);  
		 
		 $html = str_replace("[lang_see whats new]","See whats New ?",$html);
		 
		 $script1 = "<div class='script_text1 script_text'>
                      <center><h3 class='trans'>Jugar en 9 diferentes deporte <br/> Tipos</h3></center>
					  <p class='trans'>Golf, balón prisionero, baloncesto,  
					   Bowling, fútbol, billar, 
					   Tenis, Balonmano, voleibol </p>
					  </div>";
		 $script2 = "<div class='script_text2 script_text'>
                     <center><h3 class='trans'>Jugar en 4 niveles de dificultad</h3></center>
                     <p class='trans'>Fácil, medio, duro, extrema </p>
                     </div>";
		 $script3 = "<div class='script_text3 script_text'>
                     <center><h3 class='trans'>Alta puntuación / clasificación </h3></center>
                     <p class='trans'>Lograr la mayor puntuación en la clasificación y 
                     ¡ gana premios! </p>
                    </div>";
		 $script4 = "<div class='script_text4 script_text'>
                     <center><h3 class='trans'>Estadísticas</h3></center>
                     <p class='trans'>Hacer un seguimiento de tus estadísticas 
                     en cada disciplina </p>
                     </div>";
		 $script5 = "<div class='script_text5 script_text' style='margin-bottom:20px;'>
                     <center><h3 class='trans'>En las compras de la app</h3></center>
                     <p class='trans'>Cansado de jugar? Desbloquear cualquier deporte en las compras In App carro. 
      ¡ Hey! Incluso desbloquear todos los campos y cortes al instante para un precio reducido!</p>
                    </div>";
		 $script6 = "<div class='script_text6 script_text'>
                     <center><h3 class='trans'>Premios</h3></center>
                    <p class='trans'>Cada jugador individual, que 
                    derrota a la campeona 
                    en cualquier disciplina, ganará un premio 
                    con respecto a ese deporte! Simplemente 
                    presentar su puntuación y 
                     Compartir tu captura de pantalla de la 
                    tabla de posiciones en nuestro 
                    Muro de Facebook! </p>
                    </div>"; 
					$html = str_replace("[lang_script1]",$script1,$html);
					$html = str_replace("[lang_script2]",$script2,$html);
					$html = str_replace("[lang_script3]",$script3,$html);
					$html = str_replace("[lang_script4]",$script4,$html);
					$html = str_replace("[lang_script5]",$script5,$html);
					$html = str_replace("[lang_script6]",$script6,$html);
					
		$html = str_replace("[lang_Terms & Conditions]","Términos y condiciones",$html); 
		$html = str_replace("[lang_Credentials]","Credenciales",$html); 
		$html = str_replace("[lang_Contact]","Contacto",$html);   
		$html = str_replace("[lang_Lets be Social:]","Permite ser Social",$html);
		break;



/*================================================================PORTUGALES=========================================================*/ 
		case"pt":
	     $html = str_replace("[lang_home]","casa",$html);
		 $html = str_replace("[lang_about us]","quem somos",$html);
		 $html = str_replace("[lang_features]","características",$html);
		 $html = str_replace("[lang_contact us]","contate nos",$html);
		 $html = str_replace("[lang_gallery]","galeria",$html);
		 $html = str_replace("[lang_whats new]","que é novo",$html);  
		 $html = str_replace("[lang_language]","língua",$html);  
		 $html = str_replace("[lang_gallery_title]","Galeria",$html);
		 $box2info ="<div class='box2_info' style='margin-top:90px;'>
                       <h3 class='time1 animated'><span class='colorblack'>ESKIVO</span>
					    - o <span class='colorblack'>NOVO </span>máximo</h3>
                       <h4 class='time2 animated'><span class='colorblack'>FREE</span> arcade retro <span class='colorblack'>JOGO</span></h4>
                       <span class='time3 animated'><p> 
                        para Iphone e Android. Evite obstáculos, alcançar as metas 
                        e desbloquear novas funcionalidades e níveis. Desfrutar do jogo em 
                        muitos níveis diferentes e interativos. Realizar o 
                        melhores resultados! Tornar-se um campeão de Eskivo e vitória 
                        e o prêmio incrível! Comparar seus resultados e 
                        realizações com seus amigos! 
                      </p></span>
                      <div class='dots animated time4'>
                       <div class='dot1'></div>
                       <div class='dot2'></div>
                       <div class='dot3'></div>
                       <div class='clr'></div>
                     </div>
                      </div>";
		 $html = str_replace("[lang_box2_info]",$box2info,$html);  
		 
		 $html = str_replace("[lang_see whats new]","Veja o que é novo?",$html);
		 
		 $script1 = "<div class='script_text1 script_text'>
                      <center><h3 class='trans'>Jogar em 9 diferentes esporte <br/> tipos</h3></center>
					  <p class='trans'>Golfe, queimada, basquete,  
					   Boliche, futebol, bilhar, 
					   Ténis, andebol, voleibol </p>
					  </div>";
		 $script2 = "<div class='script_text2 script_text'>
                     <center><h3 class='trans'>Jogar em 4 níveis de dificuldade</h3></center>
                     <p class='trans'>Fácil, médio, difícil, extrema </p>
                     </div>";
		 $script3 = "<div class='script_text3 script_text'>
                     <center><h3 class='trans'>Alta pontuação / classificação </h3></center>
                     <p class='trans'>Alcançar a maior pontuação na tabela de classificação e 
                     Ganhe prêmios! </p>
                    </div>";
		 $script4 = "<div class='script_text4 script_text'>
                     <center><h3 class='trans'>Estatísticas</h3></center>
                     <p class='trans'>Manter o controle de suas estatísticas 
                     em cada disciplina </p>
                     </div>";
		 $script5 = "<div class='script_text5 script_text'>
                     <center><h3 class='trans'>Em app compras</h3></center>
                     <p class='trans'>Cansado de jogar? Desbloquear qualquer esporte nas compras In App Cart. 
      Ei! Até mesmo desbloquear todos os arremessos e tribunais instantaneamente por um preço reduzido!</p>
                    </div>";
		 $script6 = "<div class='script_text6 script_text' >
                     <center><h3 class='trans'>Prêmios</h3></center>
                    <p class='trans'>Cada jogador, que 
                    derrota o campeão 
                    em qualquer disciplina, vai ganhar um prêmio 
                    em relação a esse esporte! Simplesmente 
                    apresentar a sua pontuação e 
                     Compartilhar seu screenshot do 
                    tabela de classificação na nossa 
                    Parede do Facebook! </p>
                    </div>"; 
					$html = str_replace("[lang_script1]",$script1,$html);

					$html = str_replace("[lang_script2]",$script2,$html);
					$html = str_replace("[lang_script3]",$script3,$html);
					$html = str_replace("[lang_script4]",$script4,$html);
					$html = str_replace("[lang_script5]",$script5,$html);
					$html = str_replace("[lang_script6]",$script6,$html);
					
		$html = str_replace("[lang_Terms & Conditions]","Termos e condições",$html); 
		$html = str_replace("[lang_Credentials]","Credenciais",$html); 
		$html = str_replace("[lang_Contact]","Contato",$html);   
		$html = str_replace("[lang_Lets be Social:]","Deixa de ser Social",$html);
		break;
		
/*================================================================ITALIAN=========================================================*/
		case"it":
	     $html = str_replace("[lang_home]","Home",$html);
		 $html = str_replace("[lang_about us]","Chi Siamo",$html);
		 $html = str_replace("[lang_features]","Caratteristiche",$html);
		 $html = str_replace("[lang_contact us]","Contattaci",$html);
		 $html = str_replace("[lang_gallery]","Galleria",$html);
		 $html = str_replace("[lang_whats new]","Che cosa è nuovo",$html);  
		 $html = str_replace("[lang_language]","lingua",$html);  
		 $html = str_replace("[lang_gallery_title]","Galleria",$html);
		 $box2info ="<div class='box2_info' style='margin-top:120px'>
                       <h3 class='time1 animated'><span class='colorblack'>ESKIVO</span>
					    - il <span class='colorblack'>NUOVO</span> massimo </h3>
                       <h4 class='time2 animated'><span class='colorblack'>FREE</span> arcade retrò  <span class='colorblack'>GGIOCO</span></h4>
                       <span class='time3 animated'><p> 
                        per Iphone e Android. Evitare gli ostacoli, raggiungere obiettivi 
                        e sbloccare nuove funzionalità & livelli. Godere il gioco in 
                        diversi livelli interattivi. Realizzare il 
                        migliori risultati! Diventare un campione di Eskivo e Vinci 
                        e fantastico premio! Confronta i tuoi risultati e 
                        realizzazioni con i tuoi amici!
                      </p></span>
                      <div class='dots animated time4'>
                       <div class='dot1'></div>
                       <div class='dot2'></div>
                       <div class='dot3'></div>
                       <div class='clr'></div>
                     </div>
                      </div>";
		 $html = str_replace("[lang_box2_info]",$box2info,$html);  
		 
		 $html = str_replace("[lang_see whats new]","See whats New ?",$html);
		 
		 $script1 = "<div class='script_text1 script_text'>
                      <center><h3 class='trans'>Gioca in 9 differenti di Sport <br/> tipi</h3></center>
					  <p class='trans'>Golf, Dodgeball, basket,  
					   Bowling, calcio, biliardo, 
					   Campo da tennis, pallamano, pallavolo </p>
					  </div>";
		 $script2 = "<div class='script_text2 script_text'>
                     <center><h3 class='trans'>Giocare in 4 livelli di difficoltà</h3></center>
                     <p class='trans'>Facile, medio, difficile, estremo </p>
                     </div>";
		 $script3 = "<div class='script_text3 script_text'>
                     <center><h3 class='trans'>Punteggio più alto / Leaderboard </h3></center>
                     <p class='trans'>Ottenere il punteggio più alto in classifica e 
                     vincere premi! </p>
                    </div>";
		 $script4 = "<div class='script_text4 script_text'>
                     <center><h3 class='trans'>Statistiche</h3></center>
                     <p class='trans'>Tenere traccia delle tue statistiche 
                     su ogni disciplina </p>
                     </div>";
		 $script5 = "<div class='script_text5 script_text'>
                     <center><h3 class='trans'>Acquisti in-app</h3></center>
                     <p class='trans'>Stanco di giocare? Sbloccare qualsiasi Sport negli acquisti In App carrello. 
      Ehi! Anche sbloccare tutte le piazzole e tribunali istantaneamente ad un prezzo ridotto!</p>
                    </div>";
		 $script6 = "<div class='script_text6 script_text' >
                     <center><h3 class='trans'>Premi</h3></center>
                    <p class='trans'>Ogni singolo giocatore, che 
                    sconfigge il campione in carica 
                    in qualsiasi disciplina, si aggiudicherà un premio 
                    relativo a questo sport! Semplicemente 
                    inviare il tuo punteggio e 
                     Condividi il tuo screenshot della 
                    classifica il nostro 
                    Bacheca di Facebook! </p>
                    </div>"; 
					$html = str_replace("[lang_script1]",$script1,$html);

					$html = str_replace("[lang_script2]",$script2,$html);
					$html = str_replace("[lang_script3]",$script3,$html);
					$html = str_replace("[lang_script4]",$script4,$html);
					$html = str_replace("[lang_script5]",$script5,$html);
					$html = str_replace("[lang_script6]",$script6,$html);
					
		$html = str_replace("[lang_Terms & Conditions]","Termini & condizioni",$html); 
		$html = str_replace("[lang_Credentials]","Credenziali",$html); 
		$html = str_replace("[lang_Contact]","Contatto",$html);   
		$html = str_replace("[lang_Lets be Social:]","Consente di essere sociale",$html);
		break;
		
		
		
/*================================================================GRECK=========================================================*/
		case"gr":
	     $html = str_replace("[lang_home]","<font style='font-size:16px;'>Αρχική σελίδα</font>",$html);
		 $html = str_replace("[lang_about us]","<font style='font-size:16px;'>Σχετικά με εμάς</font>",$html);
		 $html = str_replace("[lang_features]","<font style='font-size:16px;'>χαρακτηριστικά</font>",$html);
		 $html = str_replace("[lang_contact us]","<font style='font-size:16px;'>Επικοινωνήστε μαζί μας</font>",$html);
		 $html = str_replace("[lang_gallery]","<font style='font-size:16px;'>Γκαλερί</font>",$html);
		 $html = str_replace("[lang_whats new]","<font style='font-size:16px;'>Τι νέο</font>",$html);  
		 $html = str_replace("[lang_language]","<font style='font-size:16px;'>Yλώσσα</font>",$html);  
		 $html = str_replace("[lang_gallery_title]","<font style='font-size:16px;'>Γκαλερί</font>",$html);
		 $box2info ="<div class='box2_info' style='margin-top:120px;'>
                       <h3 class='time1 animated'><span class='colorblack'>ESKIVO</span>
					    - το <span class='colorblack' style='text-transform:uppercase;'>νέο</span>  απόλυτο </h3>
                       <h4 class='time2 animated'><span class='colorblack'>ΔΩΡΕΆΝ</span> ρετρό
					   <span class='colorblack' style='text-transform:uppercase;'>παιχνίδι</span></h4>
                       <span class='time3 animated'><p> 
                        για Iphone και Android. Αποφύγετε εμπόδια, να επιτύχετε τους στόχους 
                        και να ξεκλειδώσετε νέα χαρακτηριστικά & επίπεδα. Απολαύστε το παιχνίδι στην 
                        πολλά διαφορετικά διαδραστικά επίπεδα. Ολοκληρώσει την 
                        καλύτερα αποτελέσματα! Γίνει ένα Eskivo πρωταθλητής και νίκη 
                        και τρομερό βραβείο! Συγκρίνετε τα αποτελέσματα σας και 
                        επιτεύγματα με τους φίλους σας! 
                      </p></span>
                      <div class='dots animated time4'>
                       <div class='dot1'></div>
                       <div class='dot2'></div>
                       <div class='dot3'></div>
                       <div class='clr'></div>
                     </div>
                      </div>";
		 $html = str_replace("[lang_box2_info]",$box2info,$html);  
		 
		 $html = str_replace("[lang_see whats new]","Δείτε τι νέο ?",$html);
		 
		 $script1 = "<div class='script_text1 script_text'>
                      <center><h3 class='trans'>Παίξτε σε 9 διαφορετικές άθλημα <br/> είδη</h3></center>
					  <p class='trans'>γκολφ, μπάσκετ,  
					   Μπόουλινγκ, ποδοσφαίρου, μπιλιάρδου, 
					   Τένις, χάντμπολ, βόλεϊ </p>
					  </div>";
		 $script2 = "<div class='script_text2 script_text'>
                     <center><h3 class='trans'>Παίξτε 4 επίπεδα δυσκολίας</h3></center>
                     <p class='trans'>Εύκολο, μεσαία, σκληρά, ακραία </p>
                     </div>";
		 $script3 = "<div class='script_text3 script_text'>
                     <center><h3 class='trans'>Υψηλή βαθμολογία  </h3></center>
                     <p class='trans'>Επιτύχετε το μεγαλύτερο σκορ στον πίνακα κορυφαίων και 
                     κερδίσετε βραβεία! </p>
                    </div>";
		 $script4 = "<div class='script_text4 script_text'>
                     <center><h3 class='trans'>Sστατιστικών</h3></center>
                     <p class='trans'>Ακολουθώ τα ίχνη του στατιστικά στοιχεία σας 
                     για κάθε πειθαρχία </p>
                     </div>";
		 $script5 = "<div class='script_text5 script_text'>
                     <center><h3 class='trans'>Στο app αγορές</h3></center>
                     <p class='trans'>Βαρεθήκατε να παίζετε; Ξεκλειδώσετε οποιοδήποτε άθλημα στο καλάθι αγορών σε App. 
      Γεια! Ακόμη και να ξεκλειδώσετε όλα τα γήπεδα και τα δικαστήρια αμέσως για μειωμένη τιμή!</p>
                    </div>";
		 $script6 = "<div class='script_text6 script_text' >
                     <center><h3 class='trans'>Βραβεία</h3></center>
                    <p class='trans'>Κάθε παίκτη, που 
                    νικά ο βασιλεύοντας πρωτοπόρος 
                    σε κάθε πειθαρχία, θα κερδίσει ένα βραβείο 
                    σε σχέση με αυτό το άθλημα! Απλά 
                    υποβάλουν το σκορ σου και 
                     Μοιραστείτε το στιγμιότυπο οθόνης του τα 
                    leaderboard για μας 
                    Facebook τοίχος! </p>
                    </div>"; 
					$html = str_replace("[lang_script1]",$script1,$html);

					$html = str_replace("[lang_script2]",$script2,$html);
					$html = str_replace("[lang_script3]",$script3,$html);
					$html = str_replace("[lang_script4]",$script4,$html);
					$html = str_replace("[lang_script5]",$script5,$html);
					$html = str_replace("[lang_script6]",$script6,$html);
					
		$html = str_replace("[lang_Terms & Conditions]","Όροι και προϋποθέσεις",$html); 
		$html = str_replace("[lang_Credentials]","Πιστοποιήσεις",$html); 
		$html = str_replace("[lang_Contact]","Επικοινωνία",$html);   
		$html = str_replace("[lang_Lets be Social:]","Σας επιτρέπει να κοινωνικής",$html);
		break;
		
				/*================================================================ENGLISH=========================================================*/ 
		case"lt":
	     $html = str_replace("[lang_home]","<font style='font-size:18px;'>mājas</font>",$html);
		 $html = str_replace("[lang_about us]","<font style='font-size:18px;'>par mums</font>",$html);
		 $html = str_replace("[lang_features]","<font style='font-size:18px;'>funkcijas</font>",$html);
		 $html = str_replace("[lang_contact us]","<font style='font-size:18px;'>sazinieties ar mums</font>",$html);
		 $html = str_replace("[lang_gallery]","<font style='font-size:18px;'>galerija</font>",$html);
		 $html = str_replace("[lang_whats new]","<font style='font-size:18px;'>Kas jauns</font>",$html);  
		 $html = str_replace("[lang_language]","valodas",$html);  
		 $html = str_replace("[lang_gallery_title]","Galerija",$html);
		 $box2info ="<div class='box2_info' style='margin-top:100px;'>
                       <h3 class='time1 animated'><span class='colorblack'>ESKIVO</span>
					    - Tas ir <span class='colorblack'>JAUNS</span> unikāls </h3>
                       <h4 class='time2 animated'><span class='colorblack'>BEZMAKSAS</span> retro 
					   arcade <span class='colorblack'>GAME</span></h4>
                       <span class='time3 animated'><p> 
                        Iphone un Android. Novērstu šķēršļus, sasniegt mērķus 
                        un atbloķēt jauno funkcijām un līmeņiem. Izbaudiet spēli 
                        daudz interaktīvo stāviem. Paveikt 
                        labākos rezultātus! Kļūt par Eskivo čempions un Win 
                        un Awesome balvu! Salīdzināt savu rezultātu un 
                        sasniegumiem, ar saviem draugiem! 
                      </p></span>
                      <div class='dots animated time4'>
                       <div class='dot1'></div>
                       <div class='dot2'></div>
                       <div class='dot3'></div>
                       <div class='clr'></div>
                     </div>
                      </div>";
		 $html = str_replace("[lang_box2_info]",$box2info,$html);  
		 
		 $html = str_replace("[lang_see whats new]","Redzēt whats New?",$html);
		 
		 $script1 = "<div class='script_text1 script_text'>
                      <center><h3 class='trans'>9 dažādas sporta spēlē <br/> tipi</h3></center>
					  <p class='trans'>Golf, Dodgeball, Basketbols,  
       Boulings, futbols, biljarda, 
       Teniss, Handbols, volejbols </p>
					  </div>";
		 $script2 = "<div class='script_text2 script_text'>
                     <center><h3 class='trans'>Spēlēt 4 grūtības līmeņi</h3></center>
                     <p class='trans'>Viegli, vidēji, grūti, galējā </p>
                     </div>";
		 $script3 = "<div class='script_text3 script_text'>
                     <center><h3 class='trans'>Augsts rādītājs </h3></center>
                     <p class='trans'>Sasniegt augstāko punktu skaitu par leaderboard un 
                     iegūsti balvas! </p>
                    </div>";
		 $script4 = "<div class='script_text4 script_text'>
                     <center><h3 class='trans'>Statistika</h3></center>
                     <p class='trans'>Uzturētu informāciju par savu statistikas 
                     katras disciplīnas </p>
                     </div>";
		 $script5 = "<div class='script_text5 script_text'>
                     <center><h3 class='trans'>Šajā app iepirkumu</h3></center>
                     <p class='trans'>Noguris, spēlējot? Atslēgt jebkurā sporta, App iepirkumu grozam. 
      čau! Pat atslēgt visu piķi un tiesā uzreiz pazeminātu cenu!</p>
                    </div>";
		 $script6 = "<div class='script_text6 script_text' >
                     <center><h3 class='trans'>Balvas</h3></center>
                    <p class='trans'>Katru atsevišķu atskaņotājs, kas 
                    sakauj valdošo čempions 
                    jebkurā disciplīnā, iegūs balvu 
                    salīdzinot ar šo sporta veidu! Vienkārši 
                    iesniegt savu rezultātu un 
                     Dalīties ar jūsu screenshot 
                    megabanneris, par mūsu 
                    Facebook sienas! </p>
                    </div>"; 
					$html = str_replace("[lang_script1]",$script1,$html);

					$html = str_replace("[lang_script2]",$script2,$html);
					$html = str_replace("[lang_script3]",$script3,$html);
					$html = str_replace("[lang_script4]",$script4,$html);
					$html = str_replace("[lang_script5]",$script5,$html);
					$html = str_replace("[lang_script6]",$script6,$html);
					
		$html = str_replace("[lang_Terms & Conditions]","Noteikumi un nosacījumi",$html); 
		$html = str_replace("[lang_Credentials]","Akreditācijas dati",$html); 
		$html = str_replace("[lang_Contact]","Kontaktpersona",$html);   
		$html = str_replace("[lang_Lets be Social:]","Let's be sociālās",$html);
		break;
		} 
		

	 }





                      








?>