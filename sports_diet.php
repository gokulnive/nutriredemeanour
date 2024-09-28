<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Person Diet Plan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://www.example.com/background.jpg');
            background-size: cover;
            background-attachment: fixed;
            color: #fff;
        }

        .containerr {
            max-width: 80%;
            margin-left:10%;
            margin-top: 8%;
            /* background-color: rgba(0, 0, 0, 0.7); */
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            margin-bottom:5%
        }

        h2, h3 {
            color: #f8f9fa;
        }

        .card {
            background-color: #343a40;
            color: white;
            border: none;
            margin-bottom: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .form-control {
            background-color: #495057;
            border: none;
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 0.5rem 2rem;
            font-size: 1.2rem;
            border-radius: 25px;
        }

        .footer {
            background-color: #212529;
            color: white;
            padding: 1rem 0;
            text-align: center;
            
            bottom: 0;
            width: 100%;
        }

        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="containerr">
        <h2 class="text-center" style="color:black">Sports Person Diet Plan</h2>
        
        <!-- Image Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/sports1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/sports.jpg" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
        <div class="card mt-5">
            <div class="card-body">
                <form id="sportsForm">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="sport">Sport:</label>
                        <select class="form-control" id="sport" required>
                            <option>Football</option>
                            <option>Basketball</option>
                            <option>Swimming</option>
                            <option>Running</option>
                            <option>Cycling</option>
                            <option>Cricket</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="disability">Any Personal Disability:</label>
                        <select class="form-control" id="disability" required>
                            <option>None</option>
                            <option>Visual</option>
                            <option>Hearing</option>
                            <option>Mobility</option>
                            <option>Cognitive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="height">Height (in cm):</label>
                        <input type="number" class="form-control" id="height" required>
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight (in kg):</label>
                        <input type="number" class="form-control" id="weight" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="number" class="form-control" id="age" required>
                    </div>
                    <div class="form-group">
                        <label for="dietPreference">Diet Preference:</label>
                        <select class="form-control" id="dietPreference" required>
                            <option>Veg</option>
                            <option>Non-Veg</option>
                            <option>Vegan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="trainingType">Training Type:</label>
                        <select class="form-control" id="trainingType" required>
                            <option>Professional Trainer</option>
                            <option>Own Training</option>
                            <option>Online Training</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary" id="submitForm">Submit</button>
                </form>
            </div>
        </div>

        <div id="dietPlan" class="card" style="display:none;">
            <div class="card-body">
                <h3>Diet Plan</h3>
                <div id="bmiResult"></div>
                <div id="dietContent"></div>
                <button class="btn btn-success" id="downloadDietPlan">Download Diet Plan as PDF</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="m-0">© 2024 Nutrire Demeanour. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jsPDF Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
</body>
</html>

    <!-- Custom Script -->
    <script>
        document.getElementById('submitForm').addEventListener('click', function() {
            const name = document.getElementById('name').value;
            const sport = document.getElementById('sport').value;
            const disability = document.getElementById('disability').value;
            const height = document.getElementById('height').value;
            const weight = document.getElementById('weight').value;
            const age = document.getElementById('age').value;
            const dietPreference = document.getElementById('dietPreference').value;
            const trainingType = document.getElementById('trainingType').value;

            if (name && sport && disability && height && weight && age && dietPreference && trainingType) {
                const bmi = (weight / ((height / 100) ** 2)).toFixed(2);
                document.getElementById('bmiResult').innerHTML = `<p>BMI: ${bmi}</p>`;

                let dietPlan = getDietPlan(bmi, sport, disability, dietPreference, trainingType);
                document.getElementById('dietContent').innerHTML = dietPlan;

                document.getElementById('dietPlan').style.display = 'block';
            } else {
                alert('Please fill out all fields.');
            }
        });

        function getDietPlan(bmi, sport, disability, dietPreference, trainingType) {
            let dietPlan = '';

            if (bmi < 18.5) {
                dietPlan = `
                    <h4>Underweight Diet Plan</h4>
                    ${getDailyDiet('Underweight', dietPreference)}
                `;
            } else if (bmi >= 18.5 && bmi < 24.9) {
                dietPlan = `
                    <h4>Normal Weight Diet Plan</h4>
                    ${getDailyDiet('Normal', dietPreference)}
                `;
            } else if (bmi >= 25) {
                dietPlan = `
                    <h4>Overweight Diet Plan</h4>
                    ${getDailyDiet('Overweight', dietPreference)}
                `;
            }

            dietPlan += getAdditionalNutrition(sport, disability, trainingType);

            return dietPlan;
        }

        function getDailyDiet(weightCategory, dietPreference) {
            const diet = {
                'Underweight': {
                    'Veg': `
                        <p>Day 1: <br> 
                            Breakfast: Oatmeal with fruits and nuts (300 kcal) <br> 
                            Lunch: Grilled tofu with quinoa and vegetables (600 kcal) <br> 
                            Dinner: Lentil soup with whole grain bread (500 kcal)
                        </p>
                        <p>Day 2: <br> 
                            Breakfast: Smoothie with banana and protein powder (350 kcal) <br> 
                            Lunch: Chickpea salad with olive oil dressing (600 kcal) <br> 
                            Dinner: Veggie stir-fry with brown rice (550 kcal)
                        </p>
                        <p>Day 3: <br> 
                            Breakfast: Greek yogurt with honey (250 kcal) <br> 
                            Lunch: Grilled cheese sandwich and tomato soup (550 kcal) <br> 
                            Dinner: Vegetable curry with rice (600 kcal)
                        </p>
                        <p>Day 4: <br> 
                            Breakfast: Pancakes with syrup and berries (400 kcal) <br> 
                            Lunch: Veggie burger with sweet potato fries (600 kcal) <br> 
                            Dinner: Pasta with marinara sauce and garlic bread (650 kcal)
                        </p>
                        <p>Day 5: <br> 
                            Breakfast: Peanut butter toast with banana slices (300 kcal) <br> 
                            Lunch: Caprese salad with balsamic reduction (500 kcal) <br> 
                            Dinner: Black bean tacos with guacamole (600 kcal)
                        </p>
                        <p>Day 6: <br> 
                            Breakfast: Scrambled eggs with spinach and toast (350 kcal) <br> 
                            Lunch: Veggie pizza with side salad (700 kcal) <br> 
                            Dinner: Bean chili with cornbread (650 kcal)
                        </p>
                        <p>Day 7: <br> 
                            Breakfast: Avocado toast with poached eggs (400 kcal) <br> 
                            Lunch: Hummus and veggie wrap (550 kcal) <br> 
                            Dinner: Stuffed bell peppers with quinoa (600 kcal)
                        </p>
                    `,
                    'Non-Veg': `
                        <p>Day 1: <br> 
                            Breakfast: Scrambled eggs with avocado (350 kcal) <br> 
                            Lunch: Grilled chicken salad with vinaigrette (600 kcal) <br> 
                            Dinner: Salmon with quinoa and asparagus (700 kcal)
                        </p>
                        <p>Day 2: <br> 
                            Breakfast: Greek yogurt with granola and berries (300 kcal) <br> 
                            Lunch: Turkey sandwich on whole grain bread (600 kcal) <br> 
                            Dinner: Beef stir-fry with vegetables and rice (650 kcal)
                        </p>
                        <p>Day 3: <br> 
                            Breakfast: Smoothie with protein powder (350 kcal) <br> 
                            Lunch: Chicken Caesar salad (550 kcal) <br> 
                            Dinner: Pork chops with sweet potatoes (700 kcal)
                        </p>
                        <p>Day 4: <br> 
                            Breakfast: Pancakes with bacon and syrup (450 kcal) <br> 
                            Lunch: Tuna salad wrap (600 kcal) <br> 
                            Dinner: Spaghetti Bolognese (700 kcal)
                        </p>
                        <p>Day 5: <br> 
                            Breakfast: Bagel with cream cheese and smoked salmon (400 kcal) <br> 
                            Lunch: BLT sandwich with side salad (600 kcal) <br> 
                            Dinner: Chicken curry with rice (700 kcal)
                        </p>
                        <p>Day 6: <br> 
                            Breakfast: Omelette with cheese and veggies (350 kcal) <br> 
                            Lunch: Shrimp stir-fry with noodles (650 kcal) <br> 
                            Dinner: Steak with mashed potatoes and broccoli (750 kcal)
                        </p>
                        <p>Day 7: <br> 
                            Breakfast: French toast with berries (400 kcal) <br> 
                            Lunch: Ham and cheese sandwich (600 kcal) <br> 
                            Dinner: BBQ chicken with corn on the cob (700 kcal)
                        </p>
                    `,
                    'Vegan': `
                        <p>Day 1: <br> 
                            Breakfast: Smoothie with spinach, banana, and almond milk (300 kcal) <br> 
                            Lunch: Quinoa salad with chickpeas and vegetables (600 kcal) <br> 
                            Dinner: Lentil stew with brown rice (650 kcal)
                        </p>
                        <p>Day 2: <br> 
                            Breakfast: Chia pudding with berries (300 kcal) <br> 
                            Lunch: Vegan burrito with black beans and rice (600 kcal) <br> 
                            Dinner: Tofu stir-fry with vegetables (600 kcal)
                        </p>
                        <p>Day 3: <br> 
                            Breakfast: Oatmeal with nuts and dried fruits (350 kcal) <br> 
                            Lunch: Veggie burger with sweet potato fries (650 kcal) <br> 
                            Dinner: Vegan pasta with tomato sauce (650 kcal)
                        </p>
                        <p>Day 4: <br> 
                            Breakfast: Avocado toast (350 kcal) <br> 
                            Lunch: Hummus and veggie wrap (600 kcal) <br> 
                            Dinner: Stuffed bell peppers with quinoa (650 kcal)
                        </p>
                        <p>Day 5: <br> 
                            Breakfast: Smoothie bowl with granola (350 kcal) <br> 
                            Lunch: Vegan sushi with tofu (600 kcal) <br> 
                            Dinner: Chickpea curry with rice (650 kcal)
                        </p>
                        <p>Day 6: <br> 
                            Breakfast: Vegan pancakes with syrup (400 kcal) <br> 
                            Lunch: Falafel wrap with tahini sauce (600 kcal) <br> 
                            Dinner: Grilled portobello mushrooms with quinoa (650 kcal)
                        </p>
                        <p>Day 7: <br> 
                            Breakfast: Tofu scramble with veggies (350 kcal) <br> 
                            Lunch: Vegan pizza with side salad (700 kcal) <br> 
                            Dinner: Black bean chili with cornbread (650 kcal)
                        </p>
                    `
                },
                'Normal': {
                    'Veg': `
                        <p>Day 1: <br> 
                            Breakfast: Oatmeal with fruits and nuts (250 kcal) <br> 
                            Lunch: Grilled tofu with quinoa and vegetables (500 kcal) <br> 
                            Dinner: Lentil soup with whole grain bread (450 kcal)
                        </p>
                        <p>Day 2: <br> 
                            Breakfast: Smoothie with banana and protein powder (300 kcal) <br> 
                            Lunch: Chickpea salad with olive oil dressing (500 kcal) <br> 
                            Dinner: Veggie stir-fry with brown rice (500 kcal)
                        </p>
                        <p>Day 3: <br> 
                            Breakfast: Greek yogurt with honey (200 kcal) <br> 
                            Lunch: Grilled cheese sandwich and tomato soup (450 kcal) <br> 
                            Dinner: Vegetable curry with rice (500 kcal)
                        </p>
                        <p>Day 4: <br> 
                            Breakfast: Pancakes with syrup and berries (350 kcal) <br> 
                            Lunch: Veggie burger with sweet potato fries (500 kcal) <br> 
                            Dinner: Pasta with marinara sauce and garlic bread (600 kcal)
                        </p>
                        <p>Day 5: <br> 
                            Breakfast: Peanut butter toast with banana slices (250 kcal) <br> 
                            Lunch: Caprese salad with balsamic reduction (450 kcal) <br> 
                            Dinner: Black bean tacos with guacamole (500 kcal)
                        </p>
                        <p>Day 6: <br> 
                            Breakfast: Scrambled eggs with spinach and toast (300 kcal) <br> 
                            Lunch: Veggie pizza with side salad (600 kcal) <br> 
                            Dinner: Bean chili with cornbread (600 kcal)
                        </p>
                        <p>Day 7: <br> 
                            Breakfast: Avocado toast with poached eggs (350 kcal) <br> 
                            Lunch: Hummus and veggie wrap (500 kcal) <br> 
                            Dinner: Stuffed bell peppers with quinoa (550 kcal)
                        </p>
                    `,
                    'Non-Veg': `
                        <p>Day 1: <br> 
                            Breakfast: Scrambled eggs with avocado (300 kcal) <br> 
                            Lunch: Grilled chicken salad with vinaigrette (500 kcal) <br> 
                            Dinner: Salmon with quinoa and asparagus (600 kcal)
                        </p>
                        <p>Day 2: <br> 
                            Breakfast: Greek yogurt with granola and berries (250 kcal) <br> 
                            Lunch: Turkey sandwich on whole grain bread (500 kcal) <br> 
                            Dinner: Beef stir-fry with vegetables and rice (600 kcal)
                        </p>
                        <p>Day 3: <br> 
                            Breakfast: Smoothie with protein powder (300 kcal) <br> 
                            Lunch: Chicken Caesar salad (450 kcal) <br> 
                            Dinner: Pork chops with sweet potatoes (600 kcal)
                        </p>
                        <p>Day 4: <br> 
                            Breakfast: Pancakes with bacon and syrup (400 kcal) <br> 
                            Lunch: Tuna salad wrap (500 kcal) <br> 
                            Dinner: Spaghetti Bolognese (600 kcal)
                        </p>
                        <p>Day 5: <br> 
                            Breakfast: Bagel with cream cheese and smoked salmon (350 kcal) <br> 
                            Lunch: BLT sandwich with side salad (500 kcal) <br> 
                            Dinner: Chicken curry with rice (600 kcal)
                        </p>
                        <p>Day 6: <br> 
                            Breakfast: Omelette with cheese and veggies (300 kcal) <br> 
                            Lunch: Shrimp stir-fry with noodles (550 kcal) <br> 
                            Dinner: Steak with mashed potatoes and broccoli (650 kcal)
                        </p>
                        <p>Day 7: <br> 
                            Breakfast: French toast with berries (350 kcal) <br> 
                            Lunch: Ham and cheese sandwich (500 kcal) <br> 
                            Dinner: BBQ chicken with corn on the cob (600 kcal)
                        </p>
                    `,
                    'Vegan': `
                        <p>Day 1: <br> 
                            Breakfast: Smoothie with spinach, banana, and almond milk (250 kcal) <br> 
                            Lunch: Quinoa salad with chickpeas and vegetables (500 kcal) <br> 
                            Dinner: Lentil stew with brown rice (600 kcal)
                        </p>
                        <p>Day 2: <br> 
                            Breakfast: Chia pudding with berries (250 kcal) <br> 
                            Lunch: Vegan burrito with black beans and rice (500 kcal) <br> 
                            Dinner: Tofu stir-fry with vegetables (500 kcal)
                        </p>
                        <p>Day 3: <br> 
                            Breakfast: Oatmeal with nuts and dried fruits (300 kcal) <br> 
                            Lunch: Veggie burger with sweet potato fries (550 kcal) <br> 
                            Dinner: Vegan pasta with tomato sauce (550 kcal)
                        </p>
                        <p>Day 4: <br> 
                            Breakfast: Avocado toast (300 kcal) <br> 
                            Lunch: Hummus and veggie wrap (500 kcal) <br> 
                            Dinner: Stuffed bell peppers with quinoa (550 kcal)
                        </p>
                        <p>Day 5: <br> 
                            Breakfast: Smoothie bowl with granola (300 kcal) <br> 
                            Lunch: Vegan sushi with tofu (500 kcal) <br> 
                            Dinner: Chickpea curry with rice (550 kcal)
                        </p>
                        <p>Day 6: <br> 
                            Breakfast: Vegan pancakes with syrup (350 kcal) <br> 
                            Lunch: Falafel wrap with tahini sauce (500 kcal) <br> 
                            Dinner: Grilled portobello mushrooms with quinoa (550 kcal)
                        </p>
                        <p>Day 7: <br> 
                            Breakfast: Tofu scramble with veggies (300 kcal) <br> 
                            Lunch: Vegan pizza with side salad (600 kcal) <br> 
                            Dinner: Black bean chili with cornbread (550 kcal)
                        </p>
                    `
                },
                'Overweight': {
                    'Veg': `
                        <p>Day 1: <br> 
                            Breakfast: Oatmeal with fruits and nuts (200 kcal) <br> 
                            Lunch: Grilled tofu with quinoa and vegetables (400 kcal) <br> 
                            Dinner: Lentil soup with whole grain bread (350 kcal)
                        </p>
                        <p>Day 2: <br> 
                            Breakfast: Smoothie with banana and protein powder (250 kcal) <br> 
                            Lunch: Chickpea salad with olive oil dressing (400 kcal) <br> 
                            Dinner: Veggie stir-fry with brown rice (400 kcal)
                        </p>
                        <p>Day 3: <br> 
                            Breakfast: Greek yogurt with honey (150 kcal) <br> 
                            Lunch: Grilled cheese sandwich and tomato soup (350 kcal) <br> 
                            Dinner: Vegetable curry with rice (400 kcal)
                        </p>
                        <p>Day 4: <br> 
                            Breakfast: Pancakes with syrup and berries (300 kcal) <br> 
                            Lunch: Veggie burger with sweet potato fries (400 kcal) <br> 
                            Dinner: Pasta with marinara sauce and garlic bread (500 kcal)
                        </p>
                        <p>Day 5: <br> 
                            Breakfast: Peanut butter toast with banana slices (200 kcal) <br> 
                            Lunch: Caprese salad with balsamic reduction (350 kcal) <br> 
                            Dinner: Black bean tacos with guacamole (400 kcal)
                        </p>
                        <p>Day 6: <br> 
                            Breakfast: Scrambled eggs with spinach and toast (250 kcal) <br> 
                            Lunch: Veggie pizza with side salad (500 kcal) <br> 
                            Dinner: Bean chili with cornbread (500 kcal)
                        </p>
                        <p>Day 7: <br> 
                            Breakfast: Avocado toast with poached eggs (300 kcal) <br> 
                            Lunch: Hummus and veggie wrap (400 kcal) <br> 
                            Dinner: Stuffed bell peppers with quinoa (450 kcal)
                        </p>
                    `,
                    'Non-Veg': `
                        <p>Day 1: <br> 
                            Breakfast: Scrambled eggs with avocado (250 kcal) <br> 
                            Lunch: Grilled chicken salad with vinaigrette (400 kcal) <br> 
                            Dinner: Salmon with quinoa and asparagus (500 kcal)
                        </p>
                        <p>Day 2: <br> 
                            Breakfast: Greek yogurt with granola and berries (200 kcal) <br> 
                            Lunch: Turkey sandwich on whole grain bread (400 kcal) <br> 
                            Dinner: Beef stir-fry with vegetables and rice (500 kcal)
                        </p>
                        <p>Day 3: <br> 
                            Breakfast: Smoothie with protein powder (250 kcal) <br> 
                            Lunch: Chicken Caesar salad (350 kcal) <br> 
                            Dinner: Pork chops with sweet potatoes (500 kcal)
                        </p>
                        <p>Day 4: <br> 
                            Breakfast: Pancakes with bacon and syrup (350 kcal) <br> 
                            Lunch: Tuna salad wrap (400 kcal) <br> 
                            Dinner: Spaghetti Bolognese (500 kcal)
                        </p>
                        <p>Day 5: <br> 
                            Breakfast: Bagel with cream cheese and smoked salmon (300 kcal) <br> 
                            Lunch: BLT sandwich with side salad (400 kcal) <br> 
                            Dinner: Chicken curry with rice (500 kcal)
                        </p>
                        <p>Day 6: <br> 
                            Breakfast: Omelette with cheese and veggies (250 kcal) <br> 
                            Lunch: Shrimp stir-fry with noodles (450 kcal) <br> 
                            Dinner: Steak with mashed potatoes and broccoli (550 kcal)
                        </p>
                        <p>Day 7: <br> 
                            Breakfast: French toast with berries (300 kcal) <br> 
                            Lunch: Ham and cheese sandwich (400 kcal) <br> 
                            Dinner: BBQ chicken with corn on the cob (500 kcal)
                        </p>
                    `,
                    'Vegan': `
                        <p>Day 1: <br> 
                            Breakfast: Smoothie with spinach, banana, and almond milk (200 kcal) <br> 
                            Lunch: Quinoa salad with chickpeas and vegetables (400 kcal) <br> 
                            Dinner: Lentil stew with brown rice (500 kcal)
                        </p>
                        <p>Day 2: <br> 
                            Breakfast: Chia pudding with berries (200 kcal) <br> 
                            Lunch: Vegan burrito with black beans and rice (400 kcal) <br> 
                            Dinner: Tofu stir-fry with vegetables (400 kcal)
                        </p>
                        <p>Day 3: <br> 
                            Breakfast: Oatmeal with nuts and dried fruits (250 kcal) <br> 
                            Lunch: Veggie burger with sweet potato fries (450 kcal) <br> 
                            Dinner: Vegan pasta with tomato sauce (450 kcal)
                        </p>
                        <p>Day 4: <br> 
                            Breakfast: Avocado toast (250 kcal) <br> 
                            Lunch: Hummus and veggie wrap (400 kcal) <br> 
                            Dinner: Stuffed bell peppers with quinoa (450 kcal)
                        </p>
                        <p>Day 5: <br> 
                            Breakfast: Smoothie bowl with granola (250 kcal) <br> 
                            Lunch: Vegan sushi with tofu (400 kcal) <br> 
                            Dinner: Chickpea curry with rice (450 kcal)
                        </p>
                        <p>Day 6: <br> 
                            Breakfast: Vegan pancakes with syrup (300 kcal) <br> 
                            Lunch: Falafel wrap with tahini sauce (400 kcal) <br> 
                            Dinner: Grilled portobello mushrooms with quinoa (450 kcal)
                        </p>
                        <p>Day 7: <br> 
                            Breakfast: Tofu scramble with veggies (250 kcal) <br> 
                            Lunch: Vegan pizza with side salad (500 kcal) <br> 
                            Dinner: Black bean chili with cornbread (450 kcal)
                        </p>
                    `
                }
            };

            return diet[weightCategory][dietPreference];
        }

        function getAdditionalNutrition(sport, disability, trainingType) {
            return `
                <h4>Additional Nutrition and Supplements</h4>
                <p>Sport: ${sport}</p>
                <p>Disability: ${disability}</p>
                <p>Training Type: ${trainingType}</p>
                <p>Ensure to include a variety of fruits, vegetables, whole grains, lean proteins, and healthy fats.</p>
                <p>Consult with a dietitian for personalized supplements and nutrition plans.</p>
            `;
        }

        document.getElementById('downloadDietPlan').addEventListener('click', function() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            const dietContent = document.getElementById('dietPlan').innerHTML;
            doc.text(dietContent, 10, 10);
            doc.save('diet_plan.pdf');
        });
    </script>
</body>
</html>
