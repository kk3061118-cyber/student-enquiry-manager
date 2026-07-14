// Task Manager JavaScript

document.addEventListener("DOMContentLoaded", function(){

    console.log("Task Manager Loaded");


    // Form validation
    const form = document.querySelector("form");


    if(form){

        form.addEventListener("submit", function(e){

            let title = document.querySelector(
                "input[name='title']"
            ).value.trim();


            if(title === ""){

                alert("Please enter task title");

                e.preventDefault();

            }

        });

    }



    // Confirm delete
    let deleteButtons = document.querySelectorAll(
        "a[href*='delete_task.php']"
    );


    deleteButtons.forEach(function(button){


        button.addEventListener("click",function(e){


            let confirmDelete = confirm(
                "Are you sure you want to delete this task?"
            );


            if(!confirmDelete){

                e.preventDefault();

            }


        });


    });


});