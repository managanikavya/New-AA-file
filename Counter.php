<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<p style="color:red">Note: Before Use Reload to check this Counter</p>

<div class="counter">
    <div class="row mt-5 ml-2">
        
        <div class="col-md-4 text-center">
            <h3 class="counter-count" style="color: blue">1000000</h3>
            <p> <strong>Manuscripts Edited</strong></p>
        </div></div>
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="employees">
                    <p class="counter-count">879</p>
                    <p class="employee-p">Employee</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="customer">
                    <p class="counter-count">954</p>
                    <p class="customer-p">Customer</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="design">
                    <p class="counter-count">1050</p>
                    <p class="design-p">Design</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="order">
                    <p class="counter-count">652</p>
                    <p class="order-p">Orders</p>
                </div>
            </div>
        </div>
    </div> -->
</div>
<style>
    .counter
{
    background-color: #eaecf0;
    text-align: center;
}
.employees,.customer,.design,.order
{
    margin-top: 70px;
    margin-bottom: 70px;
}
.counter-count
{
    font-size: 18px;
    background-color: #00b3e7;
    border-radius: 50%;
    position: relative;
    color: #ffffff;
    text-align: center;
    line-height: 92px;
    width: 92px;
    height: 92px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    display: inline-block;
}

.employee-p,.customer-p,.order-p,.design-p
{
    font-size: 24px;
    color: #000000;
    line-height: 34px;
}
</style>

<script>
    $('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>