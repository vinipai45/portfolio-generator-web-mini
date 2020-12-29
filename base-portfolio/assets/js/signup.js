(function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()

//datepicker
$(function() {
    $("#datepicker").datepicker();
});

//route to login page
document.getElementById("loginBtn").onclick = function() {
    console.log("login clicked");
    window.location = "index.php";
};

//add dynamic fields
var max_fields = 10;

var wrapper_profession = $(".add_profession");
var wrapper_product = $(".add_product");
var wrapper_resume = $(".add_resume");
var wrapper_service = $(".add_service");
var wrapper_skill = $(".add_skill");

var add_profession_button = $(".add_profession_button");
var add_product_button = $(".add_product_button");
var add_resume_button = $(".add_resume_button");
var add_service_button = $(".add_service_button");
var add_skill_button = $(".add_skill_button");

var profession_count = 1;
var product_count = 1;
var resume_count = 1;
var service_count = 1;
var skill_count = 1;

add_profession = function(e) {
    e.preventDefault();
    if (profession_count < max_fields) {
        profession_count++;
        $(wrapper_profession).append(`
          <div>
            <input type="text" name="professions_array[]" placeholder="add profession" />
              <a href="#" class="delete">
                <b><i style="color:red "class="material-icons">close</i></b>
              </a>
          </div>
        `); //add input box
    } else {
        alert('You Reached the limits')
    }
}

add_product = function(e) {
    e.preventDefault();
    if (product_count < max_fields) {
        product_count++;
        $(wrapper_product).append(`
          <div>
            <input type="text" name="project_name_array[]" placeholder="project name"/>
            <input type="text" name="project_image_url_array[]" placeholder="image url here"/>
            <input type="text" name="project_link_array[]" placeholder="project url"/>
            <a href="#" class="delete">
              <b><i style="color:red "class="material-icons">close</i></b>
            </a>
          </div>
        `); //add input box
    } else {
        alert('You Reached the limits')
    }
}

add_resume = function(e) {
    e.preventDefault();
    if (resume_count < max_fields) {
        resume_count++;
        $(wrapper_resume).append(`
          <div>
            <input type="text" name="resume_title_array[]" placeholder="title"/>
            <input type="text" name="resume_start_date_array[]" placeholder="start year"/>
            <input type="text" name="resume_end_date_array[]" placeholder="end year"/>
            <input type="text" name="resume_place_array[]" placeholder="place"/>
            <input type="text" name="resume_description_array[]" placeholder="description"/>
            <a href="#" class="delete">
              <b><i style="color:red "class="material-icons">close</i></b>
            </a>
          </div>
        `); //add input box
    } else {
        alert('You Reached the limits')
    }
}

add_service = function(e) {
    e.preventDefault();
    if (service_count < max_fields) {
        service_count++;
        $(wrapper_service).append(`
          <div>
            <input type="text" name="services_array[]" placeholder="title"/>
            <input type="text" name="services_description_array[]" placeholder="description"/>
            <a href="#" class="delete">
              <b><i style="color:red "class="material-icons">close</i></b>
            </a>
          </div>
        `); //add input box
    } else {
        alert('You Reached the limits')
    }
}

add_skill = function(e) {
    e.preventDefault();
    if (skill_count < max_fields) {
        skill_count++;
        $(wrapper_skill).append(`
          <div>
            <input type="text" name="skills_array[]" placeholder="skill title"/>
            <input type="numuber" name="skill_score_array[]" placeholder="percentage"/>
            <a href="#" class="delete">
              <b><i style="color:red "class="material-icons">close</i></b>
            </a>
          </div>
        `); //add input box
    } else {
        alert('You Reached the limits')
    }
}

$(add_profession_button).click(add_profession);
$(add_product_button).click(add_product);
$(add_resume_button).click(add_resume);
$(add_service_button).click(add_service);
$(add_skill_button).click(add_skill);


$(wrapper_profession).on("click", ".delete", function(e) {
    e.preventDefault();
    $(this).parent('div').remove();
    profession_count--;
})
$(wrapper_product).on("click", ".delete", function(e) {
    e.preventDefault();
    $(this).parent('div').remove();
    product_count--;
})
$(wrapper_resume).on("click", ".delete", function(e) {
    e.preventDefault();
    $(this).parent('div').remove();
    resume_count--;
})
$(wrapper_service).on("click", ".delete", function(e) {
    e.preventDefault();
    $(this).parent('div').remove();
    service_count--;
})
$(wrapper_skill).on("click", ".delete", function(e) {
    e.preventDefault();
    $(this).parent('div').remove();
    skill_count--;
})