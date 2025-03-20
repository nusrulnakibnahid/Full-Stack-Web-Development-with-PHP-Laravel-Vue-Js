@extends('layouts.app')

@section('title','Dashboard')
@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Summary Report</h3>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                  <span class="info-box-icon text-bg-primary shadow-sm">
                    <i class="bi bi-gear-fill"></i>
                  </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Books</span>
                            <span class="info-box-number" id="total_books"
                            >Loading...</span
                            >
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                  <span class="info-box-icon text-bg-danger shadow-sm">
                    <i class="bi bi-hand-thumbs-up-fill"></i>
                  </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Customers</span>
                            <span class="info-box-number" id="total_customers"
                            >Loading...</span
                            >
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                  <span class="info-box-icon text-bg-success shadow-sm">
                    <i class="bi bi-cart-fill"></i>
                  </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Orders</span>
                            <span class="info-box-number" id="total_orders"
                            >Loading...</span
                            >
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                  <span class="info-box-icon text-bg-warning shadow-sm">
                    <i class="bi bi-people-fill"></i>
                  </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Order Value</span>
                            <span class="info-box-number" id="total_order_value"
                            >Loading...</span
                            >
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                  <span class="info-box-icon text-bg-warning shadow-sm">
                    <i class="bi bi-people-fill"></i>
                  </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Today's Orders</span>
                            <span class="info-box-number" id="todays_orders"
                            >Loading...</span
                            >
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                  <span class="info-box-icon text-bg-warning shadow-sm">
                    <i class="bi bi-people-fill"></i>
                  </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Today's Order Value</span>
                            <span class="info-box-number" id="todays_order_value"
                            >Loading...</span
                            >
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                  <span class="info-box-icon text-bg-warning shadow-sm">
                    <i class="bi bi-people-fill"></i>
                  </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Monthly Orders</span>
                            <span class="info-box-number" id="monthly_orders"
                            >Loading...</span
                            >
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                  <span class="info-box-icon text-bg-warning shadow-sm">
                    <i class="bi bi-people-fill"></i>
                  </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Monthly Order Value</span>
                            <span class="info-box-number" id="monthly_order_value"
                            >Loading...</span
                            >
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection

@section('script')
    <script>
        async function getSummaryReport() {
            const URL = "https://bs-api.sobuj.net/view/reports/summaryReport.php";

            try {
                // Fetch Data from API
                let response = await axios.get(URL);
                let data = response.data;

                // Update the data in the template
                document.getElementById("total_books").innerHTML = data.total_books;
                document.getElementById("total_customers").innerHTML =
                    data.total_customers;
                document.getElementById("total_orders").innerHTML = data.total_orders;
                document.getElementById("total_order_value").innerHTML =
                    data.total_order_value;
                document.getElementById("todays_orders").innerHTML =
                    data.todays_orders;
                document.getElementById("todays_order_value").innerHTML =
                    data.todays_order_value;
                document.getElementById("monthly_orders").innerHTML =
                    data.monthly_orders;
                document.getElementById("monthly_order_value").innerHTML =
                    data.monthly_order_value;
            } catch (e) {
                console.log("Error in fetching data:", e);
            } finally {
                console.log("Summary Report fetched");
            }
        }
        // Call the function to get summary report
        getSummaryReport();
    </script>
@endsection

