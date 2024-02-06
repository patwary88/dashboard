    // Function to check if the screen width is below a certain threshold (e.g., 576 pixels)
function isMobile() {
    return window.innerWidth < 660;
}

$(document).ready(function () {

    //Toggle button for open full screen.
     $('#sidebarCollapse').on('click', function () {
         $('#sidebar').toggleClass('active');
     });

    // load content page for target div in index page
    $('#sidebar .nav-link').click(function(e){
        e.preventDefault();
        
        if(this.getAttribute('href')!="#"){
            $('#main_area').load(this.getAttribute('href'));

            // $(this).attr('href',this.getAttribute('href'));
            // $(this).attr('target', '_blank');

        }
       
    });

    // $('#sidebar .nav-link').on('contextmenu', function(e) {
    //             e.preventDefault();
                
    //     var selectedText = window.getSelection().toString().trim();
    //     //if (selectedText !== '') {
    //         var newLink = $('<a>', {
    //             href: 'pages/library.php?selectedText=' + encodeURIComponent(selectedText),
    //             target: '_blank',
    //             text: 'Open Link: ' + selectedText,
    //             css: {
    //                 color: 'blue'
    //             }
    //         });
    //         console.log(this.getAttribute('href'));
    //         console.log(newLink);
    //         $('#main_area').append(newLink);

    //          newLink[0].click();  // Simulate a click on the hidden link
    //          newLink.remove();
    //     //}
    // });

    // $('#sidebar .nav-link').on('click contextmenu', "a", function(event) {
    //     //console.log($(this));
    //       //$(this).attr('href','my_new_url');
    //       this.getAttribute('href')
    //       $(this).attr('target', '_blank');
    // })

    // document.addEventListener('contextmenu', function (e) {
    //     // Prevent the default context menu
    //     e.preventDefault();

    //     // Open the current page in a new tab
    //     window.open(window.location.href, '_blank');
    // });

    // Add a contextmenu event listener to all anchor elements inside the navbar
    // $('nav .nav-item a').on('contextmenu', function (e) {
    //     // Prevent the default context menu
    //     e.preventDefault();

    //     // Open the link in a new tab
    //     window.open($(this).attr('href'), '_blank');
    // });

    // $('nav .nav-item a').on('contextmenu', function (e) {
    //     // Prevent the default context menu
    //     e.preventDefault();

    //     // Open the link in a new tab
    //     let pageUrl = $(this).attr('href');

    //     // Perform an AJAX GET request to fetch the content of the page
    //     $.ajax({
    //         url: pageUrl,
    //         type: 'GET',
    //         success: function (response) {
    //             // Replace the content of the entire page with the fetched content
    //             $('#main_area').html(response);
    //         },
    //         error: function (error) {
    //             console.error('Error loading page content:', error);
    //         }
    //     });
    // });

//     $('nav .nav-item a').on('contextmenu', function (e) {
//     // Prevent the default context menu
//     e.preventDefault();

//     // Get the URL of the clicked link
//     let clickedPageUrl = window.location.href;

//     //alert(window.location.href);return;
//     // Get the URL of the 'pages/library.php' link
//     let libraryPageUrl = $(this).attr('href');

//     // Open a new tab with a dynamically created HTML page
//     let newTab = window.open(window.location.href, '_blank');

//     // Fetch the content of the home page
//     $.ajax({
//         url: window.location.href,
//         type: 'GET',
//         success: function (homePageContent) {
//             // Fetch the content of 'pages/library.php'
//             $.ajax({
//                 url: libraryPageUrl,
//                 type: 'GET',
//                 success: function (libraryPageContent) {
//                     // Combine the content of both pages
//                     let combinedContent = homePageContent + libraryPageContent;

//                     // Dynamically create an HTML page with the combined content
//                     let newPageContent = `
//                         <html>
//                         <head>
//                             <base href="${clickedPageUrl}">

//                             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
//                             <link rel="stylesheet" href="../../../../assets/bootstrap-select/css/bootstrap-select.css">
//                             <link rel="stylesheet" href="../../../../assets/css/core/layout.css">
//                         </head>
//                         <body>
//                             ${combinedContent}
//                         </body>
//                         </html>
//                     `;

//                     // Set the content of the new tab to the dynamically created HTML page
//                     newTab.document.write(newPageContent);

//                     // Optionally, you can update the title of the new tab
//                     newTab.document.title = 'Combined Pages';
//                 },
//                 error: function (error) {
//                     console.error('Error loading library page content:', error);
//                 }
//             });
//         },
//         error: function (error) {
//             console.error('Error loading home page content:', error);
//         }
//     });
// });

$(document).ready(function () {
    // Function to fetch the content of the current page
    function getCurrentPageContent() {
        return $.ajax({
            url: window.location.href,
            type: 'GET',
            dataType: 'html'
        });
    }

    // Function to open a new tab with the same content
    function openNewTabWithContent(content) {
        
        let newTab = window.open('', '_blank');

        console.log(newTab);

        newTab.document.write(content);
        newTab.document.title = 'Copy of ' + document.title;
    }

    // Context menu event handler for the navigation links
    $('nav .nav-item a').on('contextmenu', function (e) {
        // Prevent the default context menu
        e.preventDefault();

        // Fetch the content of the current page (if needed)
    let currentPageContent = document.documentElement.outerHTML;

    // Open a new tab with the content of the current page
    openNewTabWithContent(currentPageContent);
        // Fetch the content of the current page
        // getCurrentPageContent().done(function (currentPageContent) {
        //     // Open a new tab with the same content
        //     //alert($(this).attr('href'));
        //     openNewTabWithContent(currentPageContent);
        // }).fail(function (error) {
        //     console.error('Error fetching current page content:', error);
        // });
    });
});



    // Add a click event handler to anchor elements inside the navbar
    $('nav .nav-item').click(function (e) {

        e.preventDefault();
        // Remove the 'active' class from all anchor elements
        $('nav .nav-item').removeClass('active');
        // Add the 'active' class to the clicked anchor element
        $(this).addClass('active');

    });

    $('#sidebar [id]').each(function () {
        // Get the id attribute of each element
        var elementId = $(this).attr('id');

        // Log the id to the console (you can perform other actions as needed)
       // console.log("Element ID: " + elementId);

       $('#'+elementId+ ' .nav-item').click(function (e) {
            e.stopPropagation(); // Prevent the click event from propagating to the parent li
            // Remove the 'active' class from all dynamic dropdown anchor elements
            $('#'+elementId+ ' .nav-item').removeClass('active');

            // Add the 'active' class to the clicked anchor element in the dynamic dropdown
            $(this).addClass('active');
        });

    });

    // set top navigation background color when click link

    $('#navbarSupportedContent .nav-link').click(function (e) {
        e.preventDefault(); // Prevent the default link behavior
        
        // Remove active class from all links
        $('.nav-link').removeClass('active');

        // Add active class to the clicked link
        $(this).addClass('active');
    });

    // $('#sidebar .nav-item.dropdown').hover(

    //     function() {
    //         $(this).find('.collapse').addClass('show');
    //     },
    //     function() {
    //         $(this).find('.collapse').removeClass('show');
    //     }

    // );
    
    // // Enable Bootstrap dropdown on hover
    // $('#sidebar .nav-item.dropdown').hover(

    //     function() {
    //         $(this).find('.collapse').addClass('show');
    //     },
    //     function() {
    //         $(this).find('.collapse').removeClass('show');
    //     }

    // );  


    // for mobile device on ready function effect
    if (isMobile()) {
        //mobile device sidebar menu close
        $("#sidebar .nav-link").on("click", function () {
            
            $('#sidebar').toggleClass('active');
            
        });
        
        //mobile device top navigation menu close
        $('#top_nav a').on('click', function () {
    
                $('#navbarSupportedContent').collapse('hide');
    
        });
        
    }



 });