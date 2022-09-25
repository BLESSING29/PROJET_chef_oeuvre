# PROJET_chef_oeuvre
mon projet en cours n'est pas encore terminer et pour un projet de debut j'ai eu a utiliser les outils comme suit
_En premier je fais la rédaction de mon projet pouvant me permettre de voir les étapes à suivre du début jusqu'à la fin de mon projet et savoir également les applications logiciels langages et framework dont j'aurai besoin tout au long de la conception de mon projet chef d'œuvre (E-learning),
_Ensuite je crée un dépôt sur Github au fur et à mesure que le travail se fera afin de suivre certaines étapes spécifiques me permettant de pouvoir terminer à temps mon projet avec la méthode agile
_Et pour la suite je procède par la conception de ma maquette qui consiste à utiliser des logiciels de travail en domaines du développement web et web mobile qui sont multiples mais moi je fais le choix de ce logiciel de conception dans lequel je me sens bien ou celui avec lequel j'ai appris à faire les maquettes au cours de ces 7 mois de formation qui est le Figma : est un outil de design graphique collaboratif basé sur le Cloud. Qui fonctionne sur les MacOS, mais également sur les PC exécutant Windows ou Linux dont moi j'ai opté pour le windows. C’est un outil qui vous propose un plan gratuit où vous pouvez créer et stocker 3 projets actifs à la fois
En effet, Figma est une application web d’édition graphique qui permet le partage en temps réel sur le même fichier, ce qui signifie que toutes les parties prenantes du projet peuvent interagir ensemble et travailler en collaboration sur un projet qui prend en compte chaque mise à jour et les modifications. C’est évidemment un gain de temps et un facteur d’efficacité,
_Après je procède au code proprement dites en utilisant les langages et outils adéquats tels que Vscode pour écrire mon code avec les langages comme HTML,CSS,JAVAscript  php et un serveur XXAMP pour la création de ma base de donnée tout ce qui me permet de faire la mise en place du projet(site E-learning) surtout fonctionnel 

Analyse et conception : 
Pour la création d'un site web fonctionnel et facile à utiliser par les apprenantes j'ai jugé bon de mettre en place une Base de données fonctionnelle, connecter à notre site ; prêt à être utiliser dans le cadre de renseignement et inscription de nos apprenantes afin de pouvoir se connecter à notre page de cours et se déconnecter si l'apprenant veux bien se déconnecter de notre page :
Dans notre cas actuel l'utilisateur est l'étudiant ou l'apprenant et dans notre cadre d'activité nous avons les cas d'utilisations comme les suivantes :
                          Captures des uses cases

 


_Un ou plusieurs apprenants peuvent se s'inscrire sur notre site web
_un ou plusieurs apprenants peuvent se connecter à notre page de cours 
_un apprenant ne peut avoir qu'un seul mot de passe
_un apprenant ne peut avoir qu'un seul adresse mail
_un apprenant peut changer son mot de passe en cas de mot de passe oublié
Pardessus ce qui vient d'être   expliqué en haut concernant les uses cases la conception du système doit expliquer comment les interactions sont fait et comment elles fonctionnent sur notre base de données... en ce qui le concerne je vais juste expliquer comme suit :
_Tant que l'apprenant ne serait pas inscrit sur note page de cours ou ne sera pas enregistré dans notre base de données l'apprenant n'auras pas accès à nos cours de même que quand l'apprenant se déconnecte de notre page c'est à dire tant que le nom de l'apprenant ne sera pas dans notre base de données et que ses informations lui concernant ne seront pas dans la base de donner il ne pourra pas se connecter à notre page et du coup n'auras pas accès à nos cous. 
Au niveau de la mise en place de la solution, j’ai eu a créé deux tables :
_la première pour recueillir les informations des étudiants sur la base de données 
_la seconde table est créée pour permettre à l’étudiant de récupérer ou de créer un autre mot de passe en cas d’oublie 


Capture de mon diagramme :
  
Explication :
Ici si l’étudiant désir changer de mot de passe nous passons à la vérification du token tout en lui demandant d’entrer son Email afin le de prendre son mot de passe et le vérifier et le remplacer par le nouveau qu’il désir utiliser. Ce qui met en évidence la comparaison entre l’ancien token et le nouveau token qui ont tous permis a haché les mots de passes (l’anciens comme le nouveau mot de passe)

                       Mise en place de la solution :
Pour la mise en place de la solution et comme je l’ai dit au début ma solution est de dispenser des cours gratuites si bien qu’il en as des sites mais pas à titre gratuit et nos cours offrirons cette chance de comprendre la langue française ou anglaise pour une bonne compréhension de la langue en question
