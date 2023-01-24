<?php require_once "composant/menu.php";?>
<?php
$sql = "SELECT * FROM article ORDER BY  importance DESC";
$pre = $pdo->prepare($sql);
$pre->execute();
$article = $pre->fetchAll(PDO::FETCH_ASSOC);?>
<body>
        <div class="row">
            <div class="col s12 l6 offset-s1 offset-l1">
                <h2>Actualités</h2>            
            </div>
            <div class="col s12">

                <div class="col s12 l4 offset-s1 offset-l1">
                    <img src="<?php if($article[0]['importance']==4){
                        echo $article[0]['img1'];}
                        ?>">
                </div>
                <div class="col s12 l6 offset-l1 ">
                    <p>
                    <?php if($article[0]['importance']==4){
                        echo $article[0]['P1'];}
                        ?>
                    </p>
                </div>
            </div>

            <div class="col s12" id="actu_fil">
                <div class="col s11 offset-s1">
                    <h2>Dernières actualités</h2>
                </div>
                <div class="col s12 l3 offset-s1 offset-l1 ">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQraO77B-wORp7xBbqj6MPrpZw60xyWVYP4JQ&usqp=CAU">
                    <p>
                        Ubisoft nous pond encore un truc inutile. French Touch !
                    </p>
                </div>
                <div class="col s12 l3 offset-s1 offset-l1 ">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoQ7i4qP6UM8srWdPT80ihdrHEDA1L_fNHyA&usqp=CAU">
                    <p>
                        Ankama sort Waven... pour refermer le jeu. Intérêt ?
                    </p>
                </div>
                <div class="col s12 l3 offset-s1 offset-l1 ">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOSNVJnRLB1sVNXvWR1qvx6VgnHZFs57HQdA&usqp=CAU" >
                    <p>
                       Call of Duty : Soda Saga, prochainement ?
                    </p>
                </div>
            </div> 

            
            <div class="col s12 l12" id="actu_campus">
                <div class="col s11 l11 offset-s1 offset-l1">
                    <h2>Infos du campus</h2>
                </div>
                <div class="col s12 l3 offset-s1 offset-l1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQraO77B-wORp7xBbqj6MPrpZw60xyWVYP4JQ&usqp=CAU">
                    <p>
                        Un distributeur cassé : l'enquête se poursuit...
                    </p>
                </div>
                <div class="col s12 l3 offset-s1 offset-l1">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoQ7i4qP6UM8srWdPT80ihdrHEDA1L_fNHyA&usqp=CAU">
                    <p>
                        AaaAaaAaaAaa une mouette !
                    </p>
                </div>
                <div class="col s12 l3 offset-s1 offset-l1">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOSNVJnRLB1sVNXvWR1qvx6VgnHZFs57HQdA&usqp=CAU" >
                    <p>
                       Pourquoi Maître Gims ?
                    </p>
                </div>
            </div>
            
            
            <div class="col s12 l12" id="actu_asso">
                <div class="col s11 l11 offset-s1 offset-l1">
                    <h2>Vie Associative</h2>
                </div>
                <div class="col s12 l3 offset-s1 offset-l1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQraO77B-wORp7xBbqj6MPrpZw60xyWVYP4JQ&usqp=CAU">
                    <p>
                        Soirée crêpes de l'ADE
                    </p>
                </div>
                <div class="col s12 l3 offset-s1 offset-l1">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoQ7i4qP6UM8srWdPT80ihdrHEDA1L_fNHyA&usqp=CAU">
                    <p>
                        Katochi nous présente les coulisses
                    </p>
                </div>
                <div class="col s12 l3 offset-s1 offset-l1">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOSNVJnRLB1sVNXvWR1qvx6VgnHZFs57HQdA&usqp=CAU" >
                    <p>
                       Oui. 
                    </p>
                </div>
            </div> 
        </div>   
    <?php require_once "composant/footer.php";?>
