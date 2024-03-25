<?php
$data_json = json_encode($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->Html->css(['fonts', 'getBirthday']) ?>
    <title>Document</title>
</head>


<header>
    <div class="text">
        <h1>CITATION ET ANNIVERSAIRES</h1>
        <h1>MERCREDI 08 MARS 2023</h1>
    </div>
</header>


<main>

    <div class="main-container">

        <div class="show-name">
        <img src="<?= $this->Url->webroot('img/circle.svg'); ?>" alt="Image"


            <?php
            if (!empty($data)) :

                foreach ($data['students_birthday'] as $record) : ?>
                    <ul>
                        <li id="names-list"></li>
                    </ul>
                <?php endforeach; ?>
            <?php else : ?>
                <p>NOOOOOOOOOOOOOOOOOOOOOOOOON</p>
            <?php endif; ?>


        

        </div>

        <div class="information">
            <div class="citation">
            I've missed more than 9,000 shots in my career. I've lost almost 300 games. Twenty-six times I've been trusted to take the game-winning shot and missed. I've failed over and over and over again in my life. And that is why I succeed.
            </div>

            <div class="container-img">
               
            <img src="<?= $this->Url->webroot('img/character_1.svg'); ?>" alt="Image"
                
            </div>


        </div>
    </div>
</main>

<script>
    console.log();
</script>

<body>
</body>

<script>
    let data = <?php echo $data_json; ?>;
    
    let currentNameElement = document.getElementById('names-list');
    
    let currentIndex = 0;
    
    function showNextName() {
        let currentName = data.students_birthday[currentIndex];
        
        currentNameElement.textContent = currentName.firstname + ' ' + currentName.lastname;
        
        currentIndex++;
        
        if (currentIndex >= data.students_birthday.length) {
            currentIndex = 0;
        }
    }
    
    
    setInterval(showNextName, 1000); 
    
    showNextName();
</script>

</html>