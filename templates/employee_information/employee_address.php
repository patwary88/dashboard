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
<div id="#address">
    Address
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
    
    //   $('#myTabs a').removeClass('active');
      
    //   // Add "active" class to the clicked tab
    //   $(this).addClass('active');

      var tabId = $(this).attr('id');
      var contentUrl = $(this).attr('href');

      // Load the tab content
      loadTabContent(tabId, contentUrl);
    });
    
  });
</script>