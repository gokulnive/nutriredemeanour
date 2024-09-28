<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrire Demeanour</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 56px;
        }
        .jumbotron {
            background-image: url('images/Website-Landscape.png'); /* Example background image */
            background-size: cover;
            background-position: center;
            color: white;
            text-shadow: 2px 2px 4px #000000;
            width: 80%;
            margin:auto;
        }
        .chat-message {
            color:"red"
        }
        .display-3 {
            background-image: url('https://images.unsplash.com/photo-1580326271780-9d0988f6d3ee?crop=entropy&cs=tinysrgb&fit=max&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDJ8fG5pdHJpdGlvbnxlbnwwfHx8fDE2NDEwMTA3NTg&ixlib=rb-1.2.1&q=80&w=1600'); /* Example background image */
            background-size: cover;
            background-position: left;
            color: black;
            border-radius: 10px;
            text-shadow: 2px 2px 7px #000000;
            display: inline-block;
            font-size: 30px;
            margin-bottom:15px;
        }
        .card {
            margin-bottom: 2rem;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .cta-section {
            background-color: #f8f9fa;
            padding: 2rem;
            text-align: center;
            margin: 2rem 0;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }

        /* Chat bot styles */
        .chat-bot {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 350px;
            height: 400px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background: #fff;
            display: none;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            z-index: 1000;
            display: flex;
            flex-direction: column;
        }
        .chat-bot-header {
            background: #343a40;
            color: white;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .chat-bot-body {
            flex: 1;
            padding: 10px;
            overflow-y: auto;
        }
        .chat-bot-input {
            border-top: 1px solid #ccc;
            padding: 10px;
            display: flex;
        }
        .chat-bot-input input {
            flex: 1;
            padding: 5px;
            border: none;
            outline: none;
        }
        .chat-bot-input button {
            padding: 5px 10px;
            border: none;
            background: #343a40;
            color: white;
            cursor: pointer;
        }
        .chat-message {
            margin: 5px 0;
        }
        .chat-message.user {
            text-align: right;
            color:red;
            margin-bottom: 15px;
        }
        .chat-message.bot {
            text-align: left;
            color:green;
            margin-bottom: 15px;
        }
        .chat-bot-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #343a40;
            color: white;
            border: none;
            border-radius: 13%;
            width: 130px;
            height: 50px;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1000;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <div class="display-3">
            Welcome to Nutrire Demeanour!
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="images/home.jpg" alt="Nutrition Image 1">
                    <div class="card-body">
                        <h2 class="card-title">About Nutrition</h2>
                        <p class="card-text">Nutrition is the study of how food and drink affects our bodies with special regard to the essential nutrients necessary to support human health. Proper nutrition is crucial for maintaining a healthy lifestyle and preventing various diseases.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="images/home2.jpg" alt="Nutrition Image 2">
                    <div class="card-body">
                        <h2 class="card-title">Project Content</h2>
                        <p class="card-text">This project covers a wide range of topics related to nutrition, including macronutrients, micronutrients, dietary guidelines, and much more. You will have access to comprehensive videos and downloadable notes to support your learning journey.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="images/exercise-nutrition.jpg" alt="Nutrition Image 3">
                    <div class="card-body">
                        <h2 class="card-title">Why Nutrition?</h2>
                        <p class="card-text">Understanding nutrition helps individuals make informed choices about their diet and health. It is essential for promoting overall well-being, supporting growth and development, and reducing the risk of chronic diseases.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="cta-section">
            <h2>Ready to start your journey?</h2>
            <p>Join our community of learners and take your knowledge of nutrition to the next level.</p>
            <a href="courses.php" class="btn btn-success btn-lg">Explore Courses</a>
        </div>
    </div>

    <!-- Chat Bot -->
    <div class="chat-bot" id="chatBot" style="display:none">
        <div class="chat-bot-header">
            Chat Bot
            <button class="chat-bot-close" id="chatBotClose">&times;</button>
        </div>
        <div class="chat-bot-body" id="chatBotBody">
            <!-- Chat bot content goes here -->
            <p>Welcome to Nutrire Demeanour! How can I assist you today?</p>
        </div>
        <div class="chat-bot-input">
            <input type="text" id="chatBotInput" placeholder="Type a message...">
            <button id="chatBotSend">Send</button>
        </div>
    </div>
    <button class="chat-bot-toggle" id="chatBotToggle">Chat with us</button>

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

    <!-- Chat Bot JavaScript -->
    <script>
        document.getElementById('chatBotToggle').addEventListener('click', function() {
            var chatBot = document.getElementById('chatBot');
            var chatBotToggle = document.getElementById('chatBotToggle');
            if (chatBot.style.display === 'none' || chatBot.style.display === '') {
                chatBot.style.display = 'flex';
                chatBotToggle.style.display = 'none';
            }
        });

        document.getElementById('chatBotClose').addEventListener('click', function() {
            var chatBot = document.getElementById('chatBot');
            var chatBotToggle = document.getElementById('chatBotToggle');
            chatBot.style.display = 'none';
            chatBotToggle.style.display = 'block';
        });

        document.getElementById('chatBotSend').addEventListener('click', function() {
            var inputField = document.getElementById('chatBotInput');
            var userMessage = inputField.value.trim();
            if (userMessage) {
                appendMessage('user', userMessage);
                getBotResponse(userMessage);
                inputField.value = '';
            }
        });

        function appendMessage(type, message) {
            var chatBotBody = document.getElementById('chatBotBody');
            var messageElement = document.createElement('div');
            messageElement.className = 'chat-message ' + type;
            messageElement.textContent = message;
            chatBotBody.appendChild(messageElement);
            chatBotBody.scrollTop = chatBotBody.scrollHeight;
        }

        function getBotResponse(userMessage) {
            var response = "";
            switch (userMessage.toLowerCase()) {
                case 'hello':
                case "hi":
                    response = "Thank you for contacting us ! how may i help you today ?";
                    break;
                case 'find doctors near me':
                    response = "Could you please specify your location or the area you are interested in? For example, 'Coimbatore District.'";
                    break;
                case 'are there any nutritionists in coimbatore':
                    response = "Yes, there are several nutritionists in Coimbatore. I recommend checking local directories or websites like Justdial or Practo for more details.";
                    break;
                case 'what diet should i follow if i\'m overweight':
                    response = "For managing weight, it's important to follow a balanced diet with a focus on whole foods. Consider including vegetables, lean proteins, and whole grains while reducing your intake of refined sugars and fats. For a personalized plan, you should consult a dietitian.";
                    break;
                case 'what are some high-nutrition foods i should include in my diet':
                    response = "High-nutrition foods include: Leafy Greens (Spinach, kale), Berries (Blueberries, strawberries), Nuts (Almonds, walnuts), Lean Proteins (Chicken breast, fish), Whole Grains (Quinoa, brown rice), Legumes (Lentils, chickpeas).";
                    break;
                case 'what fruits are good for weight loss':
                    response = "Fruits that can aid in weight loss include: Apples (High in fiber), Berries (Low in calories, rich in antioxidants), Grapefruit (Known to support metabolism), Watermelon (Hydrating and low in calories), Pears (High in fiber and helps with satiety).";
                    break;
                case 'can you suggest some local exercise centers':
                    response = "Please specify your location for better recommendations. For example, 'Coimbatore District.'";
                    break;
                case 'can you provide some healthy recipes':
                    response = "Sure! Here are a few: Quinoa Salad (Quinoa, mixed vegetables, olive oil, lemon juice), Grilled Chicken (Chicken breast marinated with herbs and spices), Smoothie (Spinach, banana, almond milk, and chia seeds), Vegetable Stir-fry (Assorted vegetables stir-fried with tofu and soy sauce).";
                    break;
                case 'how can i determine my daily caloric intake':
                    response = "To determine your daily caloric intake, you can use a calorie calculator based on your age, weight, height, and activity level. It's also beneficial to consult a nutritionist for a personalized plan.";
                    break;
                case 'what are some tips for staying hydrated':
                    response = "Here are some tips: Drink Water Regularly (Aim for at least 8 glasses a day), Eat Water-Rich Foods (Include fruits and vegetables like cucumbers and oranges), Avoid Excessive Caffeine (It can lead to dehydration), Carry a Water Bottle (Keep it handy to remind yourself to drink).";
                    break;
                case 'what foods are good for healthy skin':
                    response = "Foods that promote healthy skin include: Avocados (Rich in healthy fats), Nuts (Packed with Vitamin E), Sweet Potatoes (High in beta-carotene), Tomatoes (Rich in antioxidants like lycopene), Fatty Fish (Such as salmon, which provides omega-3 fatty acids).";
                    break;
                default:
                    response = "I'm not sure how to respond to that. Can you please ask something else?";
                    break;
            }
            appendMessage('bot', response);
        }
    </script>
</body>
</html>
