document.getElementById("flipToLogin").addEventListener("click", function() {
    document.querySelector(".card").classList.add("flipped");
});

document.getElementById("flipToSignup").addEventListener("click", function() {
    document.querySelector(".card").classList.remove("flipped");
});


/* Workout module */


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