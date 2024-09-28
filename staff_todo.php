<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff To-Do List & Diet Plan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html, body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .container {
            max-width: 90%;
            margin: auto;
            padding-top: 2px;
            flex: 1;
        }
        .row{
            width: 80%;
            margin-left: 10%;

        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 1rem 0;
            text-align: center;
            margin-top: 24px;
        }
        .todo-list, .diet-plan {
            margin-top: 20px;
        }
        .fixed-top {
            position: unset !important;
        }
        .todo-item, .diet-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .todo-item input[type="text"], .diet-item input[type="text"], .diet-item input[type="number"] {
            flex: 1;
            margin-right: 10px;
        }
        .cta-section {
            background-color: #ced9e4;
            padding: 2rem;
            text-align: center;
            margin: 2rem 0;
        }
        .form-control {
            margin-bottom: 10px;
        }
        .template-image {
            max-width: 100px;
            height: auto;
        }
        .template-button {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
    <div class="cta-section">
        <h2>Stay Organized and Plan Your Diet</h2>
        <p>Use this tool to manage your to-dos and diet plans efficiently and ensure nothing is missed.</p>
        <div class="container" style="max-width:60%">
        <div class="todo-list" id="todoList">
            <!-- To-Do Items will be appended here -->
            <div class="todo-item">
                <input type="text" class="form-control" placeholder="Enter to-do">
                <button class="btn btn-danger btn-sm">Delete</button>
            </div>
        </div>
        <div class="text-center mt-3">
            <button class="btn btn-primary" id="addTodo">Add To-Do</button>
        </div>
    </div>
    </div>
    
    <!-- Diet Plan Content -->
    <div class="container" style="max-width:60%;text-align:center">
        <h3>Diet Plan</h3>
    </div><br></br>
    <div class="row">
        <div class="diet-item col">
            <label for="earlyMorning" class="col-form-label">6:00 - 6:30 am : Early Morning</label>
            <textarea class="form-control" id="earlyMorning" rows="2"></textarea>
        </div>
        <div class="diet-item col">
            <label for="breakfast" class="col-form-label">8:00 - 8:30 am : Breakfast</label>
            <textarea class="form-control" id="breakfast" rows="2"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="diet-item col">
            <label for="midMorning" class="col-form-label">11:00 - 11:30 am : Mid Morning</label>
            <textarea class="form-control" id="midMorning" rows="2"></textarea>
        </div>
        <div class="diet-item col">
            <label for="lunch" class="col-form-label">1:00 - 1:30 pm : Lunch</label>
            <textarea class="form-control" id="lunch" rows="2"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="diet-item col">
            <label for="teaTime" class="col-form-label">4:00 - 4:30 pm : Tea Time&emsp;</label>
            <textarea class="form-control" id="teaTime" rows="2"></textarea>
        </div>
        <div class="diet-item col">
            <label for="dinner" class="col-form-label">8:00 - 8:30 pm : Dinner</label>
            <textarea class="form-control" id="dinner" rows="2"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="diet-item col">
            <label for="bedTime" class="col-form-label">9:00 - 9:30 pm : Bed Time&emsp;&emsp;&emsp;</label>
            <textarea class="form-control" id="bedTime" rows="2"></textarea>
        </div>
        <div class="diet-item col">
            <label for="notes" class="col-form-label">Notes   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </label>
            <textarea class="form-control" id="notes" rows="2"></textarea>
        </div>
    </div>
        <h3 style="text-align:center"class="mt-4">Download with Template</h3>
        <br>
        <div class="d-flex justify-content-around">
            <div class="template-button">
                <img src="images/floral-image1.jpg" style="height: 100px"  alt="Template 1" class="template-image">
                <button class="btn btn-success mt-2" id="downloadPdfTemplate1">Download Template 1</button>
            </div>
            <div class="template-button">
                <img src="images/floral-image2.jpg" alt="Template 2" class="template-image">
                <button class="btn btn-success mt-2" id="downloadPdfTemplate2">Download Template 2</button>
            </div>
            <div class="template-button">
                <img src="images/floral-image3.jpg" style="height: 100px" alt="Template 3" class="template-image">
                <button class="btn btn-success mt-2" id="downloadPdfTemplate3">Download Template 3</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.14/jspdf.plugin.autotable.min.js"></script>

    <script>
        let todoCount = 1;
        const maxTodos = 10;

        document.getElementById('addTodo').addEventListener('click', function() {
            if (todoCount < maxTodos) {
                const todoList = document.getElementById('todoList');
                const todoItem = document.createElement('div');
                todoItem.className = 'todo-item';
                todoItem.innerHTML = `
                    <input type="text" class="form-control" placeholder="Enter to-do">
                    <button class="btn btn-danger btn-sm">Delete</button>
                `;
                todoList.appendChild(todoItem);
                todoCount++;
            } else {
                alert('You can only add up to 10 to-dos.');
            }
        });

        document.getElementById('todoList').addEventListener('click', function(event) {
            if (event.target.tagName === 'BUTTON') {
                const todoItem = event.target.parentNode;
                todoItem.remove();
                todoCount--;
            }
        });

        function generatePDF(template) {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            const todoItems = document.querySelectorAll('.todo-item input[type="text"]');
            const earlyMorning = document.getElementById('earlyMorning').value.trim();
            const breakfast = document.getElementById('breakfast').value.trim();
            const midMorning = document.getElementById('midMorning').value.trim();
            const lunch = document.getElementById('lunch').value.trim();
            const teaTime = document.getElementById('teaTime').value.trim();
            const dinner = document.getElementById('dinner').value.trim();
            const bedTime = document.getElementById('bedTime').value.trim();
            const notes = document.getElementById('notes').value.trim();
            const today = new Date();
            const dateString = today.toLocaleDateString();

            let floralImage;

            if (template === 1) {
                floralImage = 'images/floral-image1.jpg'; // Add your image path for template 1
            } else if (template === 2) {
                floralImage = 'images/floral-image2.jpg'; // Add your image path for template 2
            } else if (template === 3) {
                floralImage = 'images/floral-image3.jpg'; // Add your image path for template 3
            }

            // Load the image
            const img = new Image();
            img.src = floralImage;
            img.onload = function () {
                doc.addImage(img, 'JPEG', 0, 0, 210, 297); // A4 size

                // Add Title and Date
                doc.setFontSize(16);
                
                doc.text('Diet Plan and To-Do List', 105, 20, null, null, 'center');
                doc.text(`Date: ${dateString}`, 105, 30, null, null, 'center');
                
                // Add Diet Plan Table
                doc.setFontSize(12);
                doc.text('Diet Plan', 105, 50, null, null, 'center');
                
                const tableData = [
                    ['Time', 'Menu'],
                    ['6 - 6.30 am : Early Morning', earlyMorning || 'N/A'],
                    ['8 - 8.30 am : Breakfast', breakfast || 'N/A'],
                    ['11 - 11.30 am : Mid Morning', midMorning || 'N/A'],
                    ['1 - 1.30 pm : Lunch', lunch || 'N/A'],
                    ['4 - 4.30 pm : Tea Time', teaTime || 'N/A'],
                    ['8 - 8.30 pm : Dinner', dinner || 'N/A'],
                    ['9 - 9.30 pm : Bed Time', bedTime || 'N/A'],
                    ['Notes', notes || 'N/A']
                ];

                doc.autoTable({
                    head: [tableData[0]],
                    body: tableData.slice(1),
                    startY: 60,
                    theme: 'striped',
                    margin: { left: 20, right: 20 },
                });

                // Add To-Do List
                doc.setFontSize(12);
                doc.text('To-Do List', 105, doc.autoTable.previous.finalY + 20, null, null, 'center');

                const todoData = Array.from(todoItems).map(item => [item.value || '']);
                doc.autoTable({
                    head: [['To-Do Item']],
                    body: todoData,
                    startY: doc.autoTable.previous.finalY + 30,
                    theme: 'striped',
                    margin: { left: 20, right: 20 },
                });

                doc.save(`Diet_Plan_ToDo_List_Template${template}.pdf`);
            };
        }

        document.getElementById('downloadPdfTemplate1').addEventListener('click', function() {
            generatePDF(1);
        });

        document.getElementById('downloadPdfTemplate2').addEventListener('click', function() {
            generatePDF(2);
        });

        document.getElementById('downloadPdfTemplate3').addEventListener('click', function() {
            generatePDF(3);
        });
    </script>
</body>
</html>
