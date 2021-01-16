(function () {
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

//datepicker
$(function () {
  $("#datepicker").datepicker();
});

//route to login page
document.getElementById("loginBtn").onclick = function () {
  console.log("login clicked");
  // window.location = "index.php";
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

add_profession = function (e, profession_name) {
  if (e) {
    e.preventDefault();
  }
  if (profession_count < max_fields) {
    profession_count++;
    $(wrapper_profession).append(`
          <div>
            <input type="text" name="professions_array[]" value="profession_name" placeholder="profession name" />
              <a href="#" class="delete">
                <b><i style="color:red "class="material-icons">close</i></b>
              </a>
          </div>
        `); //add input box
  } else {
    alert('You Reached the limits')
  }
}

add_product = function (e) {
  if (e) {
    e.preventDefault();
  }
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

add_resume = function (e) {
  if (e) {
    e.preventDefault();
  }
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

add_service = function (e) {
  if (e) {
    e.preventDefault();
  }
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

add_skill = function (e) {
  if (e) {
    e.preventDefault();
  }
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


$(wrapper_profession).on("click", ".delete", function (e) {
  e.preventDefault();
  $(this).parent('div').remove();
  profession_count--;
})
$(wrapper_product).on("click", ".delete", function (e) {
  e.preventDefault();
  $(this).parent('div').remove();
  product_count--;
})
$(wrapper_resume).on("click", ".delete", function (e) {
  e.preventDefault();
  $(this).parent('div').remove();
  resume_count--;
})
$(wrapper_service).on("click", ".delete", function (e) {
  e.preventDefault();
  $(this).parent('div').remove();
  service_count--;
})
$(wrapper_skill).on("click", ".delete", function (e) {
  e.preventDefault();
  $(this).parent('div').remove();
  skill_count--;
})


init_ui = function (professions_array, projects_array, services_array, skills_array_local, resume_array) {
  //professions list
  var name_fields = document.getElementsByName("professions_array[]");
  for (var i = 0; i < professions_array.length; i++) {
    add_profession();
    name_fields[i].value = professions_array[i]['type'];
  }

  //projects list
  var project_name_array = document.getElementsByName("project_name_array[]");
  var project_image_url_array = document.getElementsByName("project_image_url_array[]");
  var project_link_array = document.getElementsByName("project_link_array[]");

  for (var i = 0; i < projects_array.length; i++) {

    add_product();
    project_name_array[i].value = projects_array[i]['name'];
    project_image_url_array[i].value = projects_array[i]['image_url'];
    project_link_array[i].value = projects_array[i]['link'];
  }

  //services list
  var services_array_fields = document.getElementsByName("services_array[]");
  var services_description_array = document.getElementsByName("services_description_array[]");

  for (var i = 0; i < services_array.length; i++) {
    add_service();
    services_array_fields[i].value = services_array[i]['service'];
    services_description_array[i].value = services_array[i]['description'];

  }

  //skills list
  var skills_array = document.getElementsByName("skills_array[]");
  var skill_score_array = document.getElementsByName("skill_score_array[]");
  console.log(skills_array_local);
  for (var i = 0; i < skills_array_local.length; i++) {
    add_skill();
    skills_array[i].value = skills_array_local[i]['skill'];
    skill_score_array[i].value = skills_array_local[i]['percentage'];

  }

  //resume list

  var resume_title_array = document.getElementsByName("resume_title_array[]");
  var resume_start_date_array = document.getElementsByName("resume_start_date_array[]");
  var resume_end_date_array = document.getElementsByName("resume_end_date_array[]");
  var resume_place_array = document.getElementsByName("resume_place_array[]");
  var resume_description_array = document.getElementsByName("resume_description_array[]");

  console.log(skills_array_local);
  for (var i = 0; i < resume_array.length; i++) {
    add_resume();
    resume_title_array[i].value = resume_array[i]['title'];
    resume_start_date_array[i].value = resume_array[i]['start_year'];
    resume_end_date_array[i].value = resume_array[i]['end_year'];
    resume_place_array[i].value = resume_array[i]['place'];
    resume_description_array[i].value = resume_array[i]['description'];
  }

}