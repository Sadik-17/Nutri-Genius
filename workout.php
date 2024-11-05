<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Page</title>
    <!-- <link rel="stylesheet" href="format.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box; 
        }
        nav {
    background-color: #e0f7f9;
    display: flex;
    justify-content: space-evenly;
    margin-top: 10px;
    padding: 10px 0;
  }
  
  nav a {
    margin: 0 15px;
    padding: 10px 20px;
    background-color: white;
    border-radius: 8px;
    text-decoration: none;
    color: #000;
    font-weight: bold;
    transition: background-color 0.3s;
  }
  
  nav a:hover {
    background-color: #d3e2e3;
  }
  
  .favorite {
    display: flex;
    align-items: center;
    margin-left: 15px;
    padding: 10px 20px;
    background-color: red;
    border-radius: 8px;
    color: #000;
    font-weight: bold;
    cursor: pointer;
  }

        .header, .footer {
            background-color: #2f4f6f;
            color: white;
            text-align: center;
            padding: 15px;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 60px;
            background-color: #243b54;
            color: white;
            height: 100vh;
            overflow-y: auto;
            transition: width 0.3s;
        }

        .sidebar.show {
            width: 250px;
        }

        .sidebar-content {
            padding: 10px;
            display: none;
        }

        .sidebar.show .sidebar-content {
            display: block;
        }

        .sidebar h3 {
            margin-top: 15px;
        }

        .sidebar ul {
            list-style: none;
            margin-top: 5px;
        }

        .sidebar ul li {
            padding: 5px;
            cursor: pointer;
        }

        .sidebar ul li:hover {
            background-color: #3d5068;
        }

        .burger {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            padding: 10px;
            width: 100%;
            text-align: left;
            cursor: pointer;
        }

        .sidebar.show .burger::after {
            content: " Categories";
            font-size: 18px;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #f2f2f2;
            display: flex;
            overflow-x: auto;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .exercise-card {
            width: 30%;
            margin: 15px;
            border-radius: 8px;
            overflow: hidden;
            background-color: transparent;
            text-align: center;
            padding: 10px;
        }

        .exercise-card img, .exercise-card video {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .exercise-card {
                width: 45%;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Workout Module</h1>
    </div>
    <nav>
                    <a href="home.php">Home</a>
                    <a href="recipe.php">Recipes</a>
                    <a href="workout.php">Workout</a>
                    <a href="yoga.php">Yoga</a>
                    <div class="favorite">
                        <i class="fas fa-heart"></i>
                        <span>Favorite</span>
                    </div>
                </nav>

    <div class="container">
        <div class="sidebar" id="sidebar">
            <button class="burger" id="burger">&#9776;</button>
            <div class="sidebar-content">
                <h3>Upper Body</h3>
                <ul>
                    <li class="exercise-module" data-category="upper-body">Exercises</li>
                </ul>
                <h3>Lower Body</h3>
                <ul>
                    <li class="exercise-module" data-category="lower-body">Exercises</li>
                </ul>
                <h3>Cross Fit</h3>
                <ul>
                    <li class="exercise-module" data-category="crossfit">Exercises</li>
                </ul>
            </div>
        </div>
        <div class="main-content" id="exerciseGrid">
            <h2>Select a category to see workouts</h2>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Workout Module. All rights reserved.</p>
    </div>
       <!--  <script src="script.js"></script> -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const burger = document.getElementById("burger");
            const sidebar = document.getElementById("sidebar");
            const exerciseModules = document.querySelectorAll(".exercise-module");
            const exerciseGrid = document.getElementById("exerciseGrid");

            burger.addEventListener("click", function() {
                sidebar.classList.toggle("show");
            });

            const workouts = {
                'upper-body': [
                    { name: 'Push Up', url: 'https://example.com/pushup.jpg', type: 'video' },
                    { name: 'Pull Up', url: 'https://example.com/pullup.mp4', type: 'video' },
                    { name: 'Shoulder Press', url: 'https://example.com/shoulderpress.jpg', type: 'video' }
                ],
                'lower-body': [
                    { name: 'Squat', url: 'https://example.com/squat.jpg', type: 'video' },
                    { name: 'Lunges', url: 'https://example.com/lunges.mp4', type: 'video' },
                    { name: 'Deadlift', url: 'https://example.com/deadlift.jpg', type: 'video' }
                ],
                'crossfit': [
                    { name: 'Burpees', url: 'https://example.com/burpees.jpg', type: 'video' },
                    { name: 'Kettlebell Swing', url: 'https://example.com/kettlebell.mp4', type: 'video' },
                    { name: 'Mountain Climbing', url: 'https://example.com/mountainclimbing.jpg', type: 'video' }
                ]
            };

            function displayWorkouts(category) {
                exerciseGrid.innerHTML = '';
                workouts[category].forEach(workout => {
                    const card = document.createElement("div");
                    card.classList.add("exercise-card");

                    let content = '';
                    if (workout.type === 'image') {
                        content = `<img src="${workout.url}" alt="${workout.name}">`;
                    } else if (workout.type === 'video') {
                        content = `<video src="${workout.url}" controls></video>`;
                    }

                    card.innerHTML = `
                        ${content}
                        <h3>${workout.name}</h3>
                    `;
                    exerciseGrid.appendChild(card);
                });
            }

            exerciseModules.forEach(module => {
                module.addEventListener("click", function() {
                    const category = module.getAttribute("data-category");
                    displayWorkouts(category);
                });
            });
        });
    </script>
</body>
</html>
