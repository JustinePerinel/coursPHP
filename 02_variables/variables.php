<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <title>Cours PHP7 - Variables</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body class="bg-dark">
    <div class="jumbotron bg-dark text-white text-center">
        <h1 class="display-3">Cours PHP7 - Variables</h1>
        <p class="lead">Une variable est le conteneur d'une valeur d'un des types utilisés par PHP (entiers, flottants, chaînes de caractères, tableaux, booléens, objets, ressource ou NULL).</p>
    </div>

    <div class="row">

           <?php
            require('../inc/sidenav.inc.php')
           ?>

        <!-- ============================================================== -->
        <!-- Contenu principal -->
        <!-- ============================================================== -->
        <div class="col-sm-8">
            <main class="container-fluid">
            <button type="button" id="sidebarCollapse" class="navbar-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
              <div class="row">
                <hr>
                <h2 class="col-sm-12 text-center" id="definition">1 - Définition</h2>
                <div class="col-sm-12 col-lg-4">
                 <p>Chaque variable possède un identifiant particulier, qui comment toujours pas la caractère dollar ($) suivi du nom de la variable. Les règles de création des noms de variable sont les suivants :</p>
                 <ul>
                     <li>Le nom commence par un caractère alphabétique, pris dans les ensembles [a-z], [A-Z] ou par le tiret bas (_).</li>
                     <li>Les caractères suivants peuvent être les mêmes plus des chiffres. </li>
                     <li> Les fonctions n'ont pas les mêmes attentes, par exemple : <code> __FILE__ </code>, qui permet d'afficher le chemin complet : 
                        <?php
                            echo "Nom du fichier inclus : ". __FILE__;
                        ?>
                     </li>
                     <li>La longueur du nom n'est pas limitée mais il convient d'être raisonnable sous peine de confusion dans la saisie du code. Il est conseillé de créer des noms de variable le plus "parlant" possible. En réalisant le code contenant la variable <code>$nomCLient</code>, par exemple, vous comprenez davantage ce que vous manipulez que si vous avez écrit <code>$x</code> ou <code>$y</code>.</li>
                 </ul>
                </div>
                <div class="col-sm-12 col-lg-4">
                  <ul>
                      <li>La déclaration des variables n'est pas obligatoire en début de script. C'est là une différence notable avec les langages fortement typés comme Java ou C. Vous pouvez créer des variables n'importe où, à condition bien sûr de les créer avant de les utiliser, même s'il reste possible d'appeler une variable qui n'existe pas sans provoquer d'erreur.</li>
                      <li>L'initialisation des variables n'est pas non plus obligatoire et une variable non initialisée n'a pas de type précis.</li>
                      <li>Les noms des variables sont sensibles à la casse (majuscules et minuscules). $mavar et $MaVar ne désignent donc pas la même variable.</li>
                  </ul>
                </div>
                <div class="col-sm-12 col-lg-4">
                  <ul>
                  <h5>a . Les noms de variables suivants sont corrects</h5>
                    <ul>
                        <li>$mavar</li>
                        <li>$_mavar</li>
                        <li>$mavar2</li>
                        <li>$M1</li>
                        <li>$_123</li>
                    </ul>
                    <h5>b . Les noms de variables suivants sont illégaux</h5>
                    <ul>
                        <li>$*mavar</li>
                        <li>$5_mavar</li>
                        <li>$mavar2+</li>
                    </ul>
                  </ul>
                </div>
              </div><!-- fin de la rangée -->
            <hr>
              <div class="row">
                  <div class="col-sm-12">
                      <h2 class="text-center" id="affectation">2 - Affectation de variables</h2>
                  </div>
                  <div class="col-sm-12">
                      <p>L'affectation consister à donner une valeur à une variable. Lors de la création d'une variabke, vous ne déclarez pas son type. C'est la valuer que vous lui affectez qui détermine ce type. Dans PHP, vous pouvez affecter une variable par valeur ou pas référence. </p>
                      <ul>
                        <li>$mavar=75;</li>
                        <li>$mavar="Paris";</li>
                        <li>$mavar=7*3+2/5-91%7; //PHP évalue l'expression puis affecte le résultat </li>
                        <li>$mavar=mysql_connect($a,$b,$c); //la fonction retourne une ressource </li>
                        <li>$mavar=isset($var&&($var==9)); //la fonction retourne une valeur booléenne</li>
                      </ul>
                  </div>
              </div>

              <hr>

              <div class="row">
                  <div class="col-sm-12">
                      <h2 class="text-center" id="variablesPredefinies">3 - Les variables prédéfinies</h2>
                  </div>
                  <div class="col-sm-12">
                      <p>Le PHP dispose d'un grand nombre de variables prédéfinies qui contiennent des informations à la fois sur le serveur et sur toutes les données qui peuvent transiter entre le poste client et le serveur, comme les valeurs saisies dans un formulaire, les cookies ou les sessions. </p>
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th scope="col">Variable</th>
                                  <th scope="col">Utilisation</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th scope="row">$GLOBALS</th>
                                  <td>Contient le nom et la valeur de toutes les variables globales du script. Les noms des variables sont les clés de ce tableau. <code>$GLOBALS["mavar"]</code> récupère la valeur de la variable $mavar en dehors de sa zone de visibilité (dans les fonctions par exemple).</td>
                              </tr>
                              <tr>
                                  <th scope="row">$_COOKIE</th>
                                  <td>Contient le nom et la valeur des cookies enregistrés sur le poste client. Les noms des cookies sont les clés de ce tableau.</td>
                              </tr>
                              <tr>
                                  <th scope="row">$_ENV</th>
                                  <td>Contient le nom et la valeur des variables d'environnement qui sont changeantes selon les serveurs. </td>
                              </tr>
                              <tr>
                                  <th scope="row">$_FILES</th>
                                  <td>Contient le nom des fichiers téléchargés à partir du poste client. </td>
                              </tr>
                              <tr>
                                  <th scope="row">$_GET</th>
                                  <td>Contient le nom et la valeur des données issues d'un formulaire envoyé par la méthode GET. Les noms des champs du formulaire sont les clés de ce tableau.</td>
                              </tr>
                              <tr>
                                  <th scope="row">$_POST</th>
                                  <td>Contient le nom et la valeur des données issues d'un formulaire envoyé par la méthode POST. Les noms des champs du formulaire sont les clés de ce tableau.</td>
                              </tr>
                              <tr>
                                  <th scope="row">$_REQUEST</th>
                                  <td>Contient l'ensemble des variables superglobales : $_GET, $_POST, $_COOKIE et $_FLIES</td>
                              </tr>
                              <tr>
                                <th scope="row">$_SERVER</th>
                                <td>Contient les informations liées au serveur web, tel le contenu des en-têtes HTTP ou le nom du script en cours d'exécution. Retenons les variables suivantes :
                                <ul>
                                  <li>
                                    <code>$_SERVER["HTTP_ACCEPT_LANGUAGE"]</code>, qui contient le code de langue du
                                    navigateur client.
                                  </li>
                                  <li>
                                    <code>$_SERVER["HTTP_COOKIE"]</code>, qui contient le nom et la valeur des cookies lus sur
                                    le poste client.
                                  </li>
                                  <li><code>$_SERVER["HTTP_HOST"]</code>, qui donne le nom de domaine.</li>
                                  <li><code>$_SERVER["SERVER_ADDR"]</code>, qui indique l'adresse IP du serveur.</li>
                                  <li>
                                    <code>$_SERVER["PHP_SELF"]</code>, qui contient le nom du script en cours. Nous l'utiliserons souvent dans les formulaires.
                                  </li>
                                  <li>
                                    <code>$_SERVER["QUERY_STRING"]</code>, qui contient la chaîne de la requête utilisée pour accéder au script.
                                  </li>
                                </ul>
                                </td>
                              </tr>
                              <tr>
                                  <th scope="row">$_SESSION</th>
                                  <td>Contient l'ensemble des nom des variables de session et leurs valeurs. </td>
                              </tr>
                          </tbody>
                      </table>
                  </div> <!-- fin de la colonne -->
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12 px-4">
                      <h2 class="text-center">4 - Les opérateurs d'affectation combinés</h2>
                      <p>En plus de l'opérateur classique d'affectation =, il existe pluesieurs opérateur d'affectation combinés. Ces opérateur réalient à la fois une opération entre deux opérandess et l'affectation du résultat à l'opérande de gauche. </p>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                          <th scope="col">Opérateur</th>
                          <th scope="col">Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">+=</th>
                            <td>Addition puis affectation :<br>
                              $x += $y équivaut à $x = $x + $y<br>
                              $y peut être une expression complexe dont la valeur est un nombre.</td>
                          </tr>
                          <tr>
                            <th scope="row">-=</th>
                            <td>Soustraction puis affectation :<br>
                              $x -= $y équivaut à $x = $x - $y<br>
                              $y peut être une expression complexe dont la valeur est un nombre.</td>
                          </tr>
                          <tr>
                            <th scope="row">*=</th>
                            <td>Multiplication puis affectation :<br>
                            $x *= $y équivaut à $x = $x * $y<br>
                            $y peut être une expression complexe dont la valeur est un nombre.</td>
                          </tr>
                          <tr>
                            <th scope="row">**=</th>
                            <td>Puissance puis affectation<br>
                            $x**=2 équivaut à $x=($x)²</td>
                          </tr>
                          <tr>
                            <th scope="row">/=</th>
                            <td>Division puis affectation :<br>
                            $x /= $y équivaut à $x = $x / $y<br>
                            $y peut être une expression complexe dont la valeur est un nombre différent de 0.</td>
                          </tr>
                          <tr>
                            <th scope="row">%=</th>
                            <td>Modulo puis affectation :<br>
                              $x %= $y équivaut à $x = $x % $y $y<br>
                              $y peut être une expression complexe dont la valeur est un nombre.</td>
                          </tr>
                          <tr>
                            <th scope="row">.=</th>
                            <td>Concaténation puis affectation :<br>
                              $x .= $y équivaut à $x = $x . $y<br>
                              $y peut être une expression littérale dont la valeur est une chaîne de caractères.</td>
                          </tr>
                        </tbody>
                      </table>
                    </div> <!-- fin de la colonne -->
                  </div> <!-- fin de la rangée -->
                  <hr>
                  <div class="row">
                    <div class="col-sm-12 px-4">
                    <h2 class="text-center">5 - Les constantes</h2>
                      <p>Vous serez parfois amené à utiliser de manière répétitive des informations devant rester constantes dans toutes les pages d'un même site. Il peut s'agir de texte ou de nombres qui reviennent souvent. Pour ne pas risquer l'écrasement accidentel de ces valeurs, qui pourrait se produire si elles étaient contenues dans des variables, vous avez tout intérêt à les enregistrer sous forme de constantes personnalisées.</p>
                      <p>On peut définir ses constantes soi-même cf. ; Pour définir des constantes personnalisées, utilisez la fonction define(), dont la syntaxe est la suivante : <strong>boolean define(string nom_cte, divers valeur_cte, boolean casse)</strong> Voir la page <a href="../00_pages/03-page.php" target="_blank">suivante</a></p>
                    </div> <!-- fin de la colonne -->
                    <div class="col-sm-12 col-md-6 px-4">
                      <h3 class="text-center">A. Les constantes prédéfinies</h3>
                      <p>Il existe dans PHP un grand nombre de constantes prédéfinies, que vous pouvez notamment utiliser dans les fonctions comme paramètres permettant de définir des options. Nous ne pouvons les citer toutes tant elles sont nombreuses, mais nous les définirons au fur et à mesure de nos besoins. Voir la page <a href="../00_pages/04-page.php" target="_blank">avec un exemple</a></p>
                    </div><!-- fin de la colonne -->
                    <div class="col-sm-12 col-md-6">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Constantes</th>
                          <th scope="col">Résultat</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">PHP_VERSION</th>
                          <td>Version de PHP installé sur le serveur  :
                            <?php
                              echo PHP_VERSION
                            ?></td>
                        </tr>
                        <tr>
                          <th scope="row">PHP_OS</th>
                          <td>Nom du système d'exploitation du serveur :
                            <?php
                              echo PHP_OS
                            ?></td>
                        </tr>
                        <tr>
                          <th scope="row">DEFAULT_INCLUDE_PATH</th>
                          <td>Chemin d'accès aux fichiers par défaut :
                            <?php
                              echo DEFAULT_INCLUDE_PATH
                            ?></td>
                        </tr>
                        <tr>
                          <th scope="row">__FILE__</th>
                          <td>Nom du fichier en cours d'exécution :
                            <?php
                              echo __FILE__
                            ?></td>
                        </tr>
                        <tr>
                          <th scope="row">__LINE__</th>
                          <td>Numéro de la ligne en cours d'exécution : 
                            <?php
                              echo __LINE__
                            ?>
                          </td>   
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div> <!-- fin de la rangée -->
                  <hr>
                  <div class="row">
                      <div class="col-sm-12 px-4">
                        <h2 class="text-center">6- Les types de données</h2>
                        <p>Dans PHP, il n'existe pas de déclaration explicite du type d'une variable lors de sa création. Même PHP 7 reste un langage pauvrement typé comparé à Java ou au C. </p>
                      </div>
                      <div class="col-sm-12">
                        <ul>
                          <li>Les types de base :</li>
                            <ul>
                              <li>Entiers, avec le type integer, qui permet de représenter les nombres entiers dans les bases 10, 8 et 16.</li>
                              <li>Flottants, avec le type double ou float, au choix, qui représentent les nombres réels, ou plutôt décimaux au sens mathématique. </li>
                              <li>Chaînes de caractères, avec le type string.</li>
                              <li>Booléens, avec le type boolean, qui contient les valeurs de vérité TRUE ou FALSE (soit les valeurs 1 ou 0 si on veut les afficher).</li>
                            </ul>
                          <li>Les types composés :</li>
                            <ul>
                              <li>Tableaux, avec le type array, qui peut contenir plusieurs valeurs.</li>
                              <li>Objets, avec le type object.</li>
                            </ul>
                            <li>Les types spéciaux</li>
                            <ul>
                              <li>Objets, avec le type object.</li>
                              <li>Type null.</li>
                            </ul>
                        </ul>
                      </div>
                  </div><!-- fin de la rangée -->

                    <div class="row">
                      <div class="col-sm-12 col-md-9">
                        <h3 class="text-center">A. Les opérateurs numériques</h3>
                        <table class="table table-striped">
                          <thead>
                              <tr>
                              <th scope="col">Opérateur</th>
                              <th scope="col">Description</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th scope="row">+</th>
                                  <td>Addition</td>
                              </tr>
                              <tr>
                                  <th scope="row">-</th>
                                  <td>Soustraction</td>
                              </tr>
                              <tr>
                                  <th scope="row">*</th>
                                  <td>Multiplication</td>
                              </tr>
                              <tr>
                                  <th scope="row">**</th>
                                  <td>Puissance (associatif à droite)<br>
                                      $a=3;<br>
                                      echo $a**2; //Affiche 9<br>
                                      echo $a**2**4; //Affiche 43046721 soit 3**(2**4) ou 316</td>
                              </tr>
                              <tr>
                                  <th scope="row">/</th>
                                  <td>Division</td>
                              </tr>
                              <tr>
                                  <th scope="row">%</th>
                                  <td>Modulo : reste de la division du premier opérande par le deuxième. Fonctionne aussi avec des opérandes décimaux. Dans ce cas, PHP ne tient compte que des parties entières de chacun des opérandes.
                                  <?php
                                    $var = 159;
                                    echo "<br>";
                                    echo "<div class=\" alert alert-success w-50\">La variable \$var contient " . $var . "<br>";
                                    echo "le résultat du modulo de $var%7 = ".$var%7;
                                    echo "</div>"
                                  ?></td>
                                  
                              </tr>
                              <tr>
                                  <th scope="row">--</th>
                                  <td>Décrémentation : soustrait une unité à la variable. Il existe deux possibilités, la prédécrémentation, qui soustrait avant d'utiliser la variable, et la postdécrémentation, qui soustrait après avoir utilisé la variable.<br>
                                  $var=56;<br>
                                  echo $var--; //affiche 56 puis décrémente $var.<br>
                                  echo $var; //affiche 55.<br>
                                  echo --$var; //décrémente $var puis affiche 54.</td>
                              </tr>
                              <tr>
                                  <th scope="row">++</th>
                                  <td>Incrémentation : ajoute une unité à la variable. Il existe deux possibilités, la préincrémentation, qui ajoute 1 avant d'utiliser la variable, et la postincrémentation, qui ajoute 1 après avoir utilisé la variable.
                                  <?php
                                  $var=56;
                                  echo "<br><div class=\" alert alert-success w-50\">". $var++ ." et, avec post-incrémentation = ". $var . "<br> Avec la pré-incrémentation = ". ++$var ."</div>";
                                  ?>
                                  </td>
                              </tr>                            
                          </tbody>
                        </table>
                        </div>
                        <div class="col-sm-12 col-md-3">
                          <h3>B. Le type booléen</h3>
                          <p>Le type booléen ne peut contenir que deux valeurs différentes FALSE (0) ou TRUE (1), c'est un système binaire. </p>
                          <?php
                            $a = 89;
                            $b = ($a<100);
                            echo "<p class=\"alert alert-success\">La variable \$a qui vaut $a est-elle inférieure à 100 ? La réponse est " . $b ."</p>";
                          ?>
                          <p>Ici la variable $b nous renvoie le booléen 1 qui signifie vrai. Dans le cas où la variable doit renvoyé un booléen faux, il y aura une chaîne vide à la place de 0.</p>
                        </div>
                        <div class="col-sm-12">
                          <h3 class="text-center">C. Les opérateurs booléens</h3>
                          <p>Quand ils sont associés, les opérateurs booléens servent à écrire des expressions simples ou complexes, qui sont évaluées par une valeur booléenne TRUE ou FALSE. Ils seront utilisés dans les instructions conditionnelles.</p>
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">Opérateur</th>
                                <th scope="col">Description</th>
                              </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <th scope="row">==</th>
                              <td>
                              Teste l'égalité de deux valeurs. L'expression $a == $b vaut TRUE si la valeur de $a est égale à celle de $b et
                              FALSE dans le cas contraire :<br>
                              $a = 345;<br>
                              $b = "345";<br>
                              $c = ($a==$b);<br>
                              $c est un booléen qui vaut TRUE car dans un contexte de comparaison numérique, la chaîne "345" est évaluée comme le nombre 345. Si $b="345
                              éléphants" nous obtenons le même résultat.
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">!= ou &lt;></th>
                              <td>
                              Teste l'inégalité de deux valeurs.<br>
                              L'expression $a != $b vaut TRUE si la valeur de $a est différente de celle de $b et FALSE dans le cas contraire.
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">===</th>
                              <td>
                              Teste l'identité des valeurs et des types de deux expressions.<br>
                              L'expression $a === $b vaut TRUE si la valeur de $a est égale à celle de $b et que $a et $b sont du même type. Elle vaut FALSE dans le cas contraire :<br>
                              $a = 345;<br>
                              $b = "345";<br>
                              $c = ($a===$b);<br>
                              $c est un booléen qui vaut FALSE car si les valeurs sont égales, les types sont différents (integer et string).
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">!==</th>
                              <td>
                              Teste la non-identité de deux expressions.<br>
                              L'expression $a !== $b vaut TRUE si la valeur de $a est différente de celle de $b ou si $a et $b sont d'un type différent. Dans le cas contraire, elle vaut FALSE :<br>
                              $a = 345;<br>
                              $b = "345";<br>
                              $c = ($a!==$b);<br>
                              $c est un booléen qui vaut TRUE car si les valeurs sont égales, les types sont différents (integer et string).
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">&lt;</th>
                              <td>
                              Teste si le premier opérande est strictement inférieur au second.
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">&lt;=</th>
                              <td>
                              Teste si le premier opérande est inférieur ou égal au second.
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">></th>
                              <td>
                              Teste si le premier opérande est strictement supérieur au second.
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">>=</th>
                              <td>
                              Teste si le premier opérande est supérieur ou égal au second.
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">&lt;=></th>
                              <td>
                              Avec $a=>$b, retourne -1, 0 ou 1 respectivement si $a<$b, $a=$b ou $a>$b ($a et $b peuvent être des chaînes).
                              </td>
                            </tr>
                            </tbody>
                          </table>
                          </div>

                          <div class="col-sm-12">
                          <h3 class="text-center">D. Les opérateurs logiques</h3>

                          <table class="table table-striped">
                          <thead>
                            <tr>
                            <th scope="col">Opérateurs</th>
                            <th scope="col">Description</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                            <th scope="row">OR</th>
                            <td>Teste si l'un au moins des opérandes a la valeur TRUE :<br>
                              $a = true;<br>
                              $b = false;<br>
                              $c = false;<br>
                              $d = ($a OR $b);//$d vaut TRUE.<br>
                              $e = ($b OR $c); //$e vaut FALSE.</td>
                            </tr>
                            <tr>
                              <th scope="row">||</th>
                              <td>Équivaut à l'opérateur OR mais n'a pas la même priorité.</td>
                            </tr>
                            <tr>
                              <th scope="row">XOR</th>
                              <td>Teste si un et un seul des opérandes a la valeur TRUE :<br>
                                $a = true;<br>
                                $b = true;<br>
                                $c = false;<br>
                                $d = ($a XOR $b); //$d vaut FALSE.<br>
                                $e = ($b XOR $c); //$e vaut TRUE.</td>
                            </tr>
                            <tr>
                              <th scope="row">AND</th>
                              <td>Teste si les deux opérandes valent TRUE en même temps :<br>
                                $a = true;<br>
                                $b = true;<br>
                                $c = false;<br>
                                $d = ($a AND $b); //$d vaut TRUE.<br>
                                $e = ($b AND $c); //$e vaut FALSE.</td>
                            </tr>
                            <tr>
                              <th scope="row">&&</th>
                              <td>Équivaut à l'opérateur AND mais n'a pas la même priorité.</td>
                            </tr>
                            <tr>
                              <th scope="row">!</th>
                              <td>Opérateur unaire de négation, qui inverse la valeur de l'opérande :
                                $a = TRUE;<br>
                                $b = FALSE;<br>
                                $d = !$a; //$d vaut FALSE.<br>
                                $e = !$b; //$e vaut TRUE.</td>
                            </tr>
                          </tbody>
                          </table>
                          <p>Attention, une erreur classique dans l'écriture des expressions conditionnelles consiste à confondre l'opérateur de comparaison == avec l'opérateur d'affectation =. L'usage des parenthèses dans la rédaction des expressions booléennes est souvent indispensable et toujours recommandé pour éviter les problèmes liés à l'ordre d'évaluation des opérateurs.</p>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <h3 class="text-center">E. Les chaînes de caractères</h3>
                          <p>Les chaînes de caractères sont avec les nombres les types de données les plus manipulés sur un site web. De surcroît, dans les échanges entre le client et le serveur au moyen de formulaires, toutes les données sont transmises sous forme de chaînes, d'où leur importance.</p>
                          <p>Une chaîne de caractères est une suite de caractères alphanumériques contenus entre des guillements simples (apostrophes) ou doubles. Si une chaine contient une variable, celle-ci est évaluée et sa valeur incorporée à la chaîne uniquement si vous utilisez des guillement et non des apostrophes. <br></p>
                          <?php
                            $vartest = "coucou";
                            echo "<p class=\"alert alert-success w-50 text-center mx-auto\">Je dis $vartest !</p>";
                          ?>
                          <ul>
                            <li>$a = 'PHP';</li>
                            <li>$b = 'MySQL';</li>
                            <li>$c = "PHP et $b";//affiche : PHP et MySQL</li>
                            <li>$d = 'PHP et $b'; //affiche PHP et $b car $ et b sont considérés comme des caractères sans signification particulière</li>
                          </ul>
                          <?php
                            $devise = "La devise de la République Française est : \"Liberté, Égalité, Fraternité\"";
                            echo "<p class=\"alert alert-success w-50 text-center mx-auto\">".$devise."!</p>"
                          ?>
                        <h4 class="text-center">a) Les caractères d'échappement</h4>
                        <table class="table table-striped">
                        <thead>
                            <tr>
                              <th scope="col">Séquence</th>
                              <th scope="col">Signification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">\'</th>
                                <td>Affiche une apostrophe.</td>
                            </tr>
                            <tr>
                                <th scope="row">\"</th>
                                <td>Affiche des guillemets.</td>
                            </tr>
                            <tr>
                                <th scope="row">\$</th>
                                <td>Affiche le signe $.</td>
                            </tr>
                            <tr>
                                <th scope="row">\\</th>
                                <td>Affiche un antislash.</td>
                            </tr>
                            <tr>
                                <th scope="row">\n</th>
                                <td>Nouvelle ligne (code ASCII 0x0A).</td>
                            </tr>
                            <tr>
                                <th scope="row">\r</th>
                                <td>Retour chariot (code ASCII 0x0D).</td>
                            </tr>
                            <tr>
                                <th scope="row">\t</th>
                                <td>Tabulation horizontale (code ASCII 0x09).</td>
                            </tr>
                            <tr>
                              <th scope="row">\[0-7] {1,3}</th>
                              <td>Séquence de caractères désignant un nombre octal (de 1 à 3 caractères 0 à 7) et affichant le caractère correspondant :
                              echo "\115\171\123\121\114"; //Affiche MySQL.</td>
                        </tr>
                        <tr>
                            <th scope="row">\x[0-9 A-F a-f] {1,2}</th>
                            <td>Séquence de caractères désignant un nombre hexadécimal (de 1 à 2 caractères 0 à 9 et A à F ou a à f) et affichant le caractère correspondant :<br>
                            echo "\x4D\x79\x53\x51\x4C"; // Affiche MySQL</td>
                        </tr>
                        </tbody>
                        </table>

                        <h4 class="text-center">b) Concaténer des chaînes de caractères</h4>
                        <p>L'opérateur PHP de concaténation est le point(.), qui fusionne deux chaînes littérales ou contenues dans des variables en une seule chaîne.</p>
                        <p class="alert alert-success w-50 mx-auto">
                          <?php
                            $langage1 = "PHP";
                            $langage2 = "MySQL";
                            $phrase = "Utilisez ". $langage1 ." et ". $langage2 . " pour construire un site dynamique. <br>";
                            echo $phrase;
                            echo "Utilisez $langage1 et $langage2 pour construire un site dynamique. <br>";
                            echo "<strong>ON CONCATENE AVEC UN POINT .</strong>"
                          ?>
                        </p>
                        </div> <!-- fin de la colonne -->
                      </div><!-- fin de la rangée -->
                      <div class="row">
                        <div class="col-sm-12">
                          <h2 class="text-center">7 - Les tableaux</h2>
                          <p>Les tableaux représentent un type composé car ils permettent de stocker sous un même nom de variable plusieurs valeurs indépendantes d'un des types de base que vous venez de voir. C'est comme un tiroir divisé en compartiments. Chaque compartiment, que nous nommerons un élément du tableau, est repéré par un indice numérique (le premier ayant par défaut la valeur 0 et non 1). D'où l'expression de tableau indicé.</p>
                          <blockquote>
                            <?php
                              $tab[0] = 2004; // la variable $tab est un tableua par le simple fait que son nom est suivi de crochets
                              $tab[1] = 31.14E7;
                              $tab[2] = "PHP 7";
                              $tab[35] = $tab[2]." et MySQL"; // les élements indicés entre 2 et 35 n'existent pas
                              $tab[] = TRUE; // son indice sera 36 , il prend automatiquement la suite du dernier indice utilisé 

                              echo "<p class=\"alert alert-success w-50 mx-auto\">Nombre d'élements du tableau : ". COUNT($tab). ".<br>Le langage préféré de l'open source est $tab[2]. <br> Utilisez $tab[35].</p>";
                            ?>
                          </blockquote>
                        </div>
                      </div>
            <br><br>

            </main>
        </div> <!-- fin de la partie principale, col-8 -->
        
        <div class="col-sm-2 aside">
          <ul>
            <li><a href="#definition">Définition</a></li>
            <li><a href="#affectation">Affectation de variables</a></li>
            <li><a href="#variablesPredefinies">Les variables prédéfinies</a></li>
            <li></li>
          </ul>
        </div>
    </div>

    <?php
      require("../inc/footer.inc.php")
    ?>
    <!-- Optional JavaScript -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script src="../inc/sidenav.js"></script>
   
  </body>
</html>