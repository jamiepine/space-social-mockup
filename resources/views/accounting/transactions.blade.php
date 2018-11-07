

    
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">New Transaction</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button ajax-enable class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

          {{-- <canvas class="my-4" id="myChart" width="900" height="380"></canvas> --}}

<div class="container">
  
<form ajax-enable ajax-action="newTransaction" ajax-success="msg" id="newTransaction" method="post" accept-charset="utf-8">
  {{-- {{ csrf_field() }} --}}
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
$(document).ready(function(){













// if (('body').find('ajax-enable')) {

//     $(this).submit(function (e) {

//       e.preventDefault();

//       ajaxBegin(ajaxType);

//     });
// }





    // Iterate through an array and output result to console





// $("#newTransaction").submit(function(event) {
   

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
});

</script>


</div>

<br /><br /><br />

          <h2 ajax-enable>Transactions</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Transaction Name</th>
                  <th>Category</th>
                  <th>Account</th>
                  <th>Type</th>
                  <th>Amount</th>
                </tr>
              </thead>
              <tbody>
                
                  @foreach($transactions as $t)
                  <tr>
                      <th>{{$t->date}}</th>
                      <th>{{$t->name}}</th>
                      <th>{{$t->category}}</th>
                      <th>{{$t->account}}</th>
                      <th>{{$t->type}}</th>
                      <th>{{$t->amount}}</th>
                  </tr>
                  @endforeach
{{--                   <td>02/02/2017</td>
                  <td>Co-Op</td>
                  <td>Food</td>
                  <td>Debit</td>
                  <td>Personal Transaction</td>
                  <td>Amount</td> --}}
                
              </tbody>
            </table>
          </div>


