<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <link rel="stylesheet" href="library/css/foundation.css">
    <link rel="stylesheet" href="library/css/app.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}"/> 
    <link type="text/css" rel="stylesheet" href="library/css/themes/dark.css"/> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Ramabhadra" rel="stylesheet">
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="library/js/parallax.min.js"></script>
{{--     <script type="text/javascript" src="library/js/script.js"></script>
    <script type="text/javascript" src="library/js/tour.js"></script>
    <script type="text/javascript" src="load.js"></script> --}}
    
    <script src="http://localhost:8888/space/public/js/jquery.ajaxpost.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>

      
<title>Space Alpha</title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />


</head>

<body class="closed_nav">
<div id="page" class="">
    <div class="tourcover"></div>


    @include('nav')

    @include('sidebar')



    <a href="{{ url('/') }}/profile/jamie" class="ajax_link" data-view="profile" data-id="jamie">@jamie</a>




{{-- <script type="text/javascript">

$(document).ready(function(){
    $(".ajax_link").click(function(){

        // prevent regular click action
        event.preventDefault();

        // collect link metadata and set vars
        var view = $(this).attr('data-view');
        var uuid = $(this).attr('data-id');
        var token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            type: "POST",
            url: "{{ url('/') }}/load",
            data: {'_token': token, view: view, uuid: uuid},
            success: function(data){
            if (data)
                {
                    alert(data);
                }
            },
            error: function(data) {
                alert("Error loading view: " + view + ", with UUID: " + uuid + ".");
            }
        });

    });



});



</script> --}}











<script type="text/javascript">
$(document).ready(function(){



// Things the ajaxSend(); needs to know

// 1. Address of submit destination eg: "newTransaction" will send a POST to [siteurl]/newTransaction

// 2. Array of data to send eg. 'transactionDate'



// FOR FORMS

// FOR LOADING





// $("#newTransaction").submit().preventDefault().ajaxSend(); 
  

//   // get the id of the ajax action
//   var ajaxID = "transactionForm";
//   // Prevent default click action
//   event.preventDefault();

//   ajaxID.forEach(function(element) {
//     console.log(element);
//   });

//   // Get CSRF token from header
//   var token = $('meta[name="csrf-token"]').attr('content');

//   var transactionDate = document.getElementById("transactionDate").value;
//   var transactionName = document.getElementById("transactionName").value;
//   var transactionCategory = document.getElementById("transactionCategory").value;
//   var transactionAccount = document.getElementById("transactionAccount").value;
//   var transactionType = document.getElementById("transactionType").value;
//   var transactionAmount = document.getElementById("transactionAmount").value;

//           $.ajax({
//             type: "POST",
//             url: "{{ url('/') }}/newTransaction",
//             data: {
//                     '_token': token, 
//                     transactionDate: transactionDate,
//                     transactionName: transactionName,
//                     transactionCategory: transactionCategory,
//                     transactionAccount: transactionAccount,
//                     transactionType: transactionType,
//                     transactionAmount: transactionAmount
//                   },
//             success: function(data){
//             if (data)
//                 {
//                   alert("Huh, it worked. Sucessfully added to database!" + data);
//                 }
//             },
//             error: function(data) {
//                 alert("Error");
//             }
//         });


// });

</script>






    <!-- <script src="library/js/vendor/jquery.js"></script> -->
    <script src="library/js/vendor/what-input.js"></script>
    <script src="library/js/vendor/foundation.js"></script>
    <script src="library/js/app.js"></script>


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">
<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.js"></script>

</div> <!-- #content_align -->
</div> <!-- #content_container -->
</div> <!-- #page -->
</body>
</html>  