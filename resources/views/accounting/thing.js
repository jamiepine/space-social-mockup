  {{-- 

    JQUERY AJAX PLUGIN by Jamie Pine

    attributes:

    1. ajax-enable
    2. ajax-action    @params: the POST url
    3. ajax-success   @params: ()
    4. csrf-token     @params:

   --}}

     // Function: crsfToken();
  //================================
  // function prependAjaxElements(key, val) {
  //     var x = {};                                   // Create _token object
  //     x['key'] = key;                               // Set key to _token
  //     x['val'] = val;                               // Set value to csrfToken var
  //     ajaxData.ajaxElements.push(x);                // Prepend token to begining of object
  // }



/*
|--------------------------------------------------------------------------
| Prepare LINKS for AJAX
|------------------------------------------------------------------------*/
$(document).on('click','[ajax-enable]',function(e){

  if ($(this)[0].tagName != 'FORM') {

    e.preventDefault();

    console.log("This is an AJAX enabled hyperlink");

    // Initilize the AJAX 
    var linkID = '#' + $(this).attr('id');;
    var formID = false;

    prepareAjaxObject(linkID, formID);  
  }
});
/*
|--------------------------------------------------------------------------
| Prepare FORMS for AJAX
|------------------------------------------------------------------------*/
$(document).on('submit','form',function(e){

  if ($(this).is("[ajax-enable]")) {

    e.preventDefault();

    console.log("This is an AJAX enabled form submission");

    // Initilize the AJAX 
    var formID = '#' + $(this).attr('id');
    var linkID = false;

    prepareAjaxObject(linkID, formID); 

  }
});
/*
|--------------------------------------------------------------------------
| Prepare data for AJAX submission
|------------------------------------------------------------------------*/
function prepareAjaxObject(linkID, formID) {

  // Define the data object
  //================================
  var ajaxData = {}


  // If it's a form.
  //================================
  if (formID !== false) {

    ajaxData['formElements'] = [];

    // Loop through elements and append to object "formElements" within the "formData" object.
    $(formID).find('input, select').each(function () {

      // Save form element ID & Value to their respective
      var elementId = $(formID).attr('id');
      var elementVal = $(formID).val();

      var elementObject = {};

      elementObject['key'] = elementId;
      elementObject['val'] = elementVal;

      ajaxData.formElements.push(elementObject);

    });


    var ajaxElementID = formID;
  } 
  
  // If it's a link.
  //================================
  if (linkID !== false) {

    var ajaxElementID = linkID;
  } 

  
  // Global Attribute Variables
  //================================

  // @param ajax-action
  //------------------
  if ($(ajaxElementID).is("[ajax-action]")) { 
    var ajaxAction = $(ajaxElementID).attr('ajax-action'); // retrieve the ajax-action value

    ajaxData['ajaxAction'] = ajaxAction;

  // __REQUIRED__
  } else {
    console.log("Error: ajax-action required"); // change back to alert()
  }

  // @param ajax-success
  //------------------
  if ($(ajaxElementID).is("[ajax-success]")) { 
    var ajaxSucsessAction = $(ajaxElementID).attr('ajax-success'); // retrieve the ajax-action value

    ajaxData['ajaxSucsessAction'] = ajaxSucsessAction;
  } 

  // @param csrf-token
  //------------------
  if ($(ajaxElementID).is("[csrf-token]")) {                        // if the element has attribute csrfToken

    var csrfToken = $(ajaxElementID).attr('csrf-token');          // Grab token attribute from parent
    // prependAjaxElements("_token", csrfToken);
    ajaxData['_token'] = csrfToken;

  } else if (document.querySelectorAll('meta[name="csrf-token"]').length > 0) {


    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    // prependAjaxElements("_token", csrfToken);
    console.log("Using header CSRF token: " + csrfToken);
    ajaxData['_token'] = csrfToken;
  }

    console.log(ajaxData);

  ajaxSend(ajaxData);

} //function: prepareAjaxObject
/*
|--------------------------------------------------------------------------
| Submit Via Ajax
|------------------------------------------------------------------------*/

function ajaxSend(ajaxData) {

  $.ajax({
      type: "POST",
      url: ajaxData["ajaxAction"],
      data: ajaxData,
      success: function(response){
      if (response)
        {
          alert("Huh, it worked. Sucessfully added to database! " + response);
        }
      },
      error: function(response) 
        {
            console.log("ERROR");
            console.log("Server Response: " + response);
        }
  });

};





}); //javascript init