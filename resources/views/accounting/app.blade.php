<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <meta name="csrf-token" content="{!! csrf_token() !!}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/css/accounting.css" rel="stylesheet">

    <title>Accounts</title>

  <body>


    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Accounts</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a ajax-enable class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>



    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link ajax_link" href="{{ url('/') }}/accounts/dashboard" data-view="dashboard">
                  <span data-feather="home"></span>
                  Dashboard 
                </a>
              </li>
              <li class="nav-item">




                <a id="showTransactions" ajax-enable ajax-success="load" ajax-action="/space/public/showTransactions" class="nav-link ajax_link" href="{{ url('/') }}/accounting/transactions">
                  <span data-feather="file"></span>
                  Transactions <span class="sr-only">(current)</span>






                </a>
              </li>
              <li class="nav-item">
               <a class="nav-link ajax_link" href="{{ url('/') }}/accounts/income" data-view="income">
                  <span data-feather="shopping-cart"></span>
                  Income
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link ajax_link" href="{{ url('/') }}/accounts/debt" data-view="debt">
                  <span data-feather="users"></span>
                  Debt
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link ajax_link" href="{{ url('/') }}/accounts/expenses" data-view="expenses">
                  <span data-feather="bar-chart-2"></span>
                  Bills / Expenses
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Categories
                </a>
              </li>
               <li class="nav-item">
                <a ajax-enable class="nav-link" href="#" id="MYNAMEJEFF">
                  <span data-feather="layers"></span>
                  Tax Return
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current Tax Year
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last Tax Year 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  All-Time
                </a>
              </li>
            </ul>
          </div>
        </nav>

<main ajax-container-default id="main" role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"></main>


<form ajax-enable ajax-action="well jeff" id="newTransaction" accept-charset="utf-8">

<div class="row">
  

    <div class="col-sm">
      <p>Date</p>
      <input type="date" class="form-control" id="transactionDate" aria-describedby="transactionDate" placeholder="dd/mm/yyyy">
    </div>
    <div class="col-sm">
      <p>Transaction Name</p>
      <input class="form-control" id="transactionName" aria-describedby="transactionName">
    </div>
    <div class="col-sm">
      <p>Category</p>
      <select id="transactionCategory" class="form-control">
        <option>Travel</option>
        <option>Food</option>
        <option>Asset Purchase</option>
        <option>Cash Withdrawal</option>
        <option>Utilities</option>
        <option>Clothing</option>
        <option>Entertainment</option>
        <option>Communication</option>
        <option>Business Admin</option>
        <option>Medical</option>
        <option>Auto</option>
        <option>Savings</option>
        <option>Other</option>
        <option>Debt</option>
        <option>Power</option>
        <option>Business Travel</option>
        <option>Business Services</option>
      </select>
    </div>
    <div class="col-sm">
      <p>Account</p>
      <select id="transactionAccount" class="form-control">
        <option>Barclaycard</option>
        <option>PayPal Credit</option>
        <option>Debit</option>
      </select>
    </div>
    <div class="col-sm">
      <p>Type</p>
      <select id="transactionType" class="form-control">
        <option>Repayment</option>
        <option>Personal Transaction</option>
        <option>Business Transaction</option>
        <option>Intrest</option>
        <option>Loan</option>
      </select>
    </div>
    <div class="col-sm">
      <p>Amount</p>
      <input class="form-control" id="transactionAmount" aria-describedby="transactionAmount">
    </div>

    <div class="col-sm">
      <p>Send</p>
       <button id="transactionSubmit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  
</div>
</form>




<script type="text/javascript">
// $(document).ready(function(){

//     $(".ajax_link").click(function(){

//         // prevent regular click action
//         event.preventDefault();

//         // collect link metadata and set vars
//         var view = $(this).attr('data-view');
//         var token = $('meta[name="csrf-token"]').attr('content');
//         var tokenArray = {};

//         $.ajax({
//             type: "POST",
//             url: "{{ url('/') }}/" + view,
//             data: {'_token': token},
//             success: function(data){
//             if (data)
//                 {
//                     // window.history.pushState("object or string", "Title", "accounting/"+ view +"");
//                             $('main').hide().fadeOut();
//                             $('main').empty().append(data);
//                             $('main').fadeIn();
//                             $(this).addClass("active");

//                             // console.log("Loaded " + view + " successfully.");
//                 }
//             },
//             error: function(data) {
//                 alert("Error loading view: " + view);
//             }
//         });

//     });

// });




</script>


    <script src="{{ url('/') }}/js/jquery.ajaxpost.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}




    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      // var ctx = document.getElementById("myChart");
      // var myChart = new Chart(ctx, {
      //   type: 'line',
      //   data: {
      //     labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      //     datasets: [{
      //       data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
      //       lineTension: 0,
      //       backgroundColor: 'transparent',
      //       borderColor: '#007bff',
      //       borderWidth: 4,
      //       pointBackgroundColor: '#007bff'
      //     }]
      //   },
      //   options: {
      //     scales: {
      //       yAxes: [{
      //         ticks: {
      //           beginAtZero: false
      //         }
      //       }]
      //     },
      //     legend: {
      //       display: false,
      //     }
      //   }
      // });
    </script>




  </body>
</html>