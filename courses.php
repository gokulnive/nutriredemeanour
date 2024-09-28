<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrition Courses</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 56px;
        }
        .card {
            margin-bottom: 2rem;
        }
        .card-body .video {
            margin-bottom: 1rem;
        }
        .scrollable-row {
            max-height: 30vh;
            overflow-y: auto;
        }
        .video-content {
            display: flex;
            flex-direction: row;
        }
        .video-content .video {
            width: 200px;
            height:150px
        }
        .video-content .content {
            flex: 1;
            margin-left: 1rem;
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

    <!-- Page Content -->
    <div class="container" style="max-width:100%">
        <h2 class="my-4">Nutrition Courses</h2>

        <div class="">
            <?php
            $videos = [
                [
                    "title" => "Macronutrition: Carbohydrates, Proteins, and Fats",
                    "url" => "https://www.youtube.com/embed/your_video_id",
                    "description" => "
                    <h5>Carbohydrates</h5>
                    <p>Carbohydrates are one of the main types of nutrients and the most important source of energy for your body. They are found in a wide array of both healthy and unhealthy foods—bread, beans, milk, popcorn, potatoes, cookies, spaghetti, soft drinks, corn, and cherry pie. They also come in a variety of forms. The most common and abundant forms are sugars, fibers, and starches.</p>
                    <p>Carbohydrates are broken down into glucose before being absorbed into the bloodstream. Glucose (or blood sugar) is used by the body's cells for energy, and fuels your body's activities. Your brain needs glucose for energy and without it, it will not work properly.</p>
                    
                    <h5>Proteins</h5>
                    <p>Proteins are made up of smaller building blocks called amino acids, which are linked together in chains. There are 20 different amino acids that can be combined to make a protein. The sequence of amino acids determines each protein’s unique structure and its specific function in the body.</p>
                    <p>Protein is a macronutrient that is essential to building muscle mass. It is commonly found in animal products, though is also present in other sources, such as nuts and legumes. There are three macronutrients: protein, fat, and carbohydrates. Protein makes up about 15% of a person's body weight.</p>
                    
                    <h5>Fats</h5>
                    <p>Fats are essential nutrients that provide energy, support cell growth, protect your organs and keep your body warm. They help your body absorb some nutrients and produce important hormones, too. Your body definitely needs fat.</p>
                    <p>Fat is a macronutrient that provides energy, insulation, and protection for the body. There are four main types of fats: saturated fats, trans fats, monounsaturated fats, and polyunsaturated fats. Each type of fat has different effects on your body, and consuming healthy fats in moderation is crucial for maintaining good health.</p>
                    ",
                    "notes" => "macronutrition_notes.pdf"
                ],
                [
                    "title" => "Macronutrition: Carbohydrates, Proteins, and Fats",
                    "url" => "https://www.youtube.com/embed/your_video_id",
                    "description" => "
                    <h5>Carbohydrates</h5>
                    <p>Carbohydrates are one of the main types of nutrients and the most important source of energy for your body. They are found in a wide array of both healthy and unhealthy foods—bread, beans, milk, popcorn, potatoes, cookies, spaghetti, soft drinks, corn, and cherry pie. They also come in a variety of forms. The most common and abundant forms are sugars, fibers, and starches.</p>
                    <p>Carbohydrates are broken down into glucose before being absorbed into the bloodstream. Glucose (or blood sugar) is used by the body's cells for energy, and fuels your body's activities. Your brain needs glucose for energy and without it, it will not work properly.</p>
                    
                    <h5>Proteins</h5>
                    <p>Proteins are made up of smaller building blocks called amino acids, which are linked together in chains. There are 20 different amino acids that can be combined to make a protein. The sequence of amino acids determines each protein’s unique structure and its specific function in the body.</p>
                    <p>Protein is a macronutrient that is essential to building muscle mass. It is commonly found in animal products, though is also present in other sources, such as nuts and legumes. There are three macronutrients: protein, fat, and carbohydrates. Protein makes up about 15% of a person's body weight.</p>
                    
                    <h5>Fats</h5>
                    <p>Fats are essential nutrients that provide energy, support cell growth, protect your organs and keep your body warm. They help your body absorb some nutrients and produce important hormones, too. Your body definitely needs fat.</p>
                    <p>Fat is a macronutrient that provides energy, insulation, and protection for the body. There are four main types of fats: saturated fats, trans fats, monounsaturated fats, and polyunsaturated fats. Each type of fat has different effects on your body, and consuming healthy fats in moderation is crucial for maintaining good health.</p>
                    ",
                    "notes" => "macronutrition_notes.pdf"
                ],
                // Add more videos as needed
            ];
                echo '<div class="row">';
            foreach ($videos as $video) {
                echo '<div class="card col-md-6">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$video['title'].'</h5>';
                echo '<div class="video-content">';
                echo '<div class="embed-responsive embed-responsive-16by9 video">';
                echo '<iframe class="embed-responsive-item" src="'.$video['url'].'" allowfullscreen></iframe>';
                echo '</div>';
                echo '<div class="content">';
                echo '<div class="card-text scrollable-row">'.$video['description'].'</div>';
                echo '<a href="notes/'.$video['notes'].'" class="btn btn-primary mt-3">Download Notes</a>';
                
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

    </div>

    <!-- Footer -->
    <!-- <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">© 2024 Nutrire Demeanour. All Rights Reserved.</p>
        </div>
    </footer> -->

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
