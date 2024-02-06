

// Function to apply the input-group-sm class to all elements with class "input-group" based on screen width
function updateInputGroupClass() {
    var inputGroups = document.querySelectorAll('.input-group');
    
    inputGroups.forEach(function(inputGroup) {
    if (isMobile()) {
        inputGroup.classList.add('input-group-sm');
    } else {
        inputGroup.classList.remove('input-group-sm');
    }
    });
}

// Initial check on page load
updateInputGroupClass();
// Update the class when the window is resized
window.addEventListener('resize', updateInputGroupClass);

// end apply input-group-sm for mobile screen;


// check data-live-search attribute exist in select element

$('form select').each(
    function(index, element){  

        let attr = $(this).attr('data-live-search');

        let formIndex = $(this).closest('form').index();
        
       

        if (typeof attr !== 'undefined' && attr !== false) {
            //$('input[type="search"]').attr('id', 'search_box_id_' + formIndex + '_' + index);
            // let formIndex = $(this).closest('form').index();
            // $('input[type="search"]').attr('id', 'search_box_id_' + formIndex + '_' + index);
            //console.log(formIndex);
            // let search_id = element.id;
            // $('input[type="search"]').attr('id','search_box_id_'+index);
            // $('input[type="search"]').attr('id','search_box_id_'+indexid).removeAttr("id");
             //$('input[type="search"]').attr('name','search_box_id'+indexid);
           
        }
    }
);

function loadTabContent(tabId, contentUrl) {
    $.ajax({
      url: contentUrl,
      type: 'GET',
      success: function(response) {
        // Replace the content of the div with the fetched content
        $('#main_area').html(response);
      },
      error: function(error) {
        console.error('Error loading tab content:', error);
      }
    });
  }