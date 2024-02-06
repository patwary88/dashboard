<script type="text/javascript">
  function func_emp_basic() {

    let cbo_bloodgroup_id = $('#cbo_bloodgroup_id').val();

  }

      // function func_emp_modal_info(object){
      //     //console.log(object.id);
      //    // $('#'+object.id).attr('data-bs-toggle', 'modal');
      //    // $('#'+object.id).attr('data-bs-target', '#exampleModal');
      //       let fname = 'Main';
      //       let lname = 'Uddin';
      //       let dataset = 'fname='+fname+'&lname='+lname+'&id='+object.id;
      //       $.ajax({

      //       type: "POST",
      //       url: "pages/employee_modal_data.php",
      //       data: dataset,
      //       success: function (response) {
      //         console.log(response)
      //         $('#exampleModal').modal('hide')
      //         //alert("data saved");

      //          //$('#'+object.id).attr('data-bs-toggle', 'modal');
      //         // $('#'+object.id).attr('data-bs-target', '#exampleModal');
      //       },
      //       error: function(error) {
      //         //console.log(error)
      //         //alert("Data not saved");
      //       }
      //   });


      // }

  // function func_emp_modal_info(object){

  //     $.ajax({
  //        url: 'pages/employee_modal_data.php',
  //        method: 'POST',
  //        data: {
  //           number: '123',
  //           data: 'pankaj' 
  //          },
  //        success: function(data) {
  //          //console.log(data);
  //          $("#page_details").html(data);
  //         }
  //      });
  // }

  //  function func_emp_modal_info(object){

  //     let popurl = 'pages/employee_modal_data.php';
  //     var winpops=window.open(popurl,"","width=730,height=720")
  //   }

  // $('#txt_emp_code').on('click', function(e){
  //     e.preventDefault();
  //       //$('#txt_emp_code').attr('data-bs-toggle', 'modal');
  //       //$('#txt_emp_code').attr('data-bs-target', '#exampleModal');
  //     let popurl = 'pages/employee_modal_data.php';
  //     $('#txt_emp_code').modal('show').load(popurl);
  //   });

  $('#txt_emp_code').on('click', function(e){
      e.preventDefault();
      let popurl = 'pages/employee_modal_data.php';
      //$('#exampleModal').modal('show').find('.modal-content').load(popurl);
      $('#exampleModal').modal('show').find('.modal-dialog').load(popurl);
      
    });

    $('#exampleModal').on('hidden.bs.modal', function () {
      $('#txt_emp_code').val($('#abc').val());
     // alert('hello');
    })
</script>


<div id="exampleModal" class="modal fade text-center">
    <div class="modal-dialog modal-fullscreen">
    </div>
</div>

<h2>Employee Profile Information</h2>

<ul class="nav nav-tabs mb-2" id="employeeTabs">

  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="pages/home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="address" data-toggle="tab" href="pages/employee_address.php">Address</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="experiance" data-toggle="tab" href="pages/employee_experiance.php">Experiance</a>
  </li>

</ul>
<div id="#home-tab">
  <!-- Multiple inputs -->
  <form id="emp_basic" autocomplete="off">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-sm">Emp Code</span>
        <input type="text" id="txt_emp_code" name="txt_emp_code" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Card No</span>
        <input type="text" id="txt_id_card_no" name="txt_id_card_no" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Punch No</span>
        <input type="text" id="txt_punch_card_no" name="txt_punch_card_no" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-sm">First Name</span>
        <input type="text" id="txt_first_name" name="txt_first_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Middle Name</span>
        <input type="text" id="txt_middle_name" name="txt_middle_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
        <input type="text" id="txt_last_name" name="txt_last_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-sm">Name ( Local ) </span>
        <input type="text" id="txt_full_name_local" name="txt_full_name_local" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Father Name</span>
        <input type="text" id="txt_father_name" name="txt_father_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Father Name ( Local )</span>
        <input type="text" id="txt_father_name_local" name="txt_father_name_local" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-sm">Mother Name </span>
        <input type="text" id="txt_mother_name" name="txt_mother_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Mother Name ( Local )</span>
        <input type="text" id="txt_mother_name_local" name="txt_mother_name_local" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Date Of Birth</span>
        <input type="date" id="txt_date_of_birth" name="txt_date_of_birth" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <label class="input-group-text" for="cbo_bloodgroup_id">Blood Group</label>
        <select id="cbo_bloodgroup_id" name="cbo_bloodgroup_id" data-live-search="true" data-actions-box="true" class="form-control" multiple>
          <option selected>Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Nationality</span>
        <input type="text" id="cbo_nationality_id" name="cbo_nationality_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Religion</span>
        <input type="text" id="cbo_religion_id" name="cbo_religion_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-sm">National ID</span>
        <input type="text" id="txt_national_id" name="txt_national_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Birth Registration</span>
        <input type="text" id="txt_birth_registration" name="txt_birth_registration" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Passport No</span>
        <input type="text" id="txt_passport_no" name="txt_passport_no" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <label class="input-group-text" for="cbo_marital_status">Marital Status</label>
        <select id="cbo_marital_status" name="cbo_marital_status" data-live-search="true" class="form-control">
          <option selected>Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Spouse's Name</span>
        <input type="text" id="txt_spouse_name" name="txt_spouse_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <span class="input-group-text" id="inputGroup-sizing-default">Spouse's Name( Local )</span>
        <input type="text" id="txt_spouse_name_local" name="txt_spouse_name_local" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <label class="input-group-text" for="cbo_category_id">Category</label>
        <select id="cbo_category_id" name="cbo_category_id" data-live-search="true" class="form-control">
          <option selected>Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <label class="input-group-text" for="cbo_company_id">Company</label>
        <select id="cbo_company_id" name="cbo_company_id" data-live-search="true" class="form-control">
          <option selected>Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <label class="input-group-text" for="cbo_location_id">Location</label>
        <select id="cbo_location_id" name="cbo_location_id" data-live-search="true" class="form-control">
          <option selected>Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <label class="input-group-text" for="cbo_division_id">Division</label>
        <select id="cbo_division_id" name="cbo_division_id" data-live-search="true" class="form-control">
          <option selected>Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <label class="input-group-text" for="cbo_department_id">Department</label>
        <select id="cbo_department_id" name="cbo_department_id" data-live-search="true" class="form-control">
          <option selected>Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <label class="input-group-text" for="cbo_section_id">Section</label>
        <select id="cbo_section_id" name="cbo_section_id" data-live-search="true" class="form-control">
          <option selected>Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <label class="input-group-text" for="cbo_subsection_id">Subsection</label>
        <select id="cbo_subsection_id" name="cbo_subsection_id" data-live-search="true" class="form-control">
          <option selected>Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <label class="input-group-text" for="cbo_designation_level_id">Designation Level</label>
        <select id="cbo_designation_level_id" name="cbo_designation_level_id" data-live-search="true" class="form-control">
          <option selected>Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-sm-12 col-md-6 col-lg input-group mb-2">
        <label class="input-group-text" for="cbo_designation_id">Designation</label>
        <select id="cbo_designation_id" name="cbo_designation_id" data-live-search="true" class="form-control">
          <option selected>Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>

    <div class="row">
      <input class="btn btn-outline-secondary" type="button" value="Save" onclick="func_emp_basic();">
    </div>
  </form>
</div>

<script>
  var url = "./assets/js/core/form_design.js";
  $.getScript(url);
</script>

<script>
  $(document).ready(function() {

    // Click event handler for tabs
    $('#employeeTabs a').on('click', function (e) {
      e.preventDefault();

      $('#employeeTabs a').removeClass('active');
      
      // Add "active" class to the clicked tab
      $(this).addClass('active');

      var tabId = $(this).attr('id');
      var contentUrl = $(this).attr('href');

      // Load the tab content
      loadTabContent(tabId, contentUrl);
    });
  });


   $('#cbo_bloodgroup_id').selectpicker();
    $('#cbo_marital_status').selectpicker();
    $('#cbo_category_id').selectpicker();
    $('#cbo_company_id').selectpicker();
    $('#cbo_location_id').selectpicker();
    $('#cbo_division_id').selectpicker();
    $('#cbo_department_id').selectpicker();
    $('#cbo_section_id').selectpicker();
    $('#cbo_subsection_id').selectpicker();
    $('#cbo_designation_level_id').selectpicker();
    $('#cbo_designation_id').selectpicker();

</script>