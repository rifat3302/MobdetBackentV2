@include('header')
@include('navigation')
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Add New Customer</h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-6"></div>

                </div>

            </div>
        </div>
        <!-- /page content -->

       @include('footer')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="{{ asset('js/multifield.js') }}"></script>
<script src="{{ asset('js/validator.js') }}"></script>

<script>
    $( "#ok" ).click(function() {
       if($("#tc1").val()==""){
           alert("tc girmediniz")
       }

    });

    $('[name="customerCount"]').on('change', function(e) {

       var val = $( "[name=\"customerCount\"] option:selected" ).text();
       if(val==2){
           $('#name2').removeAttr('readonly')
           $('#name2').prop("required","required")
           $('#surname2').removeAttr('readonly')
           $('#surname2').prop("required","required")
           $('#tc2').removeAttr('readonly')
           $('#tc2').prop("required","required")
           $('#telephone2').removeAttr('readonly')
           $('#telephone2').prop("required","required")
       }else{

           $('#name2').prop('readonly', true);
           $('#name2').removeAttr('required')
           $('#surname2').prop('readonly', true);
           $('#surname2').removeAttr('required')
           $('#telephone2').prop('readonly', true);
           $('#telephone2').removeAttr('required')
           $('#tc2').prop('readonly', true);
           $('#tc2').removeAttr('required')
       }
    });
</script>
<!-- Javascript functions	-->
<script>
    function hideshow(){
        var password = document.getElementById("password1");
        var slash = document.getElementById("slash");
        var eye = document.getElementById("eye");

        if(password.type === 'password'){
            password.type = "text";
            slash.style.display = "block";
            eye.style.display = "none";
        }
        else{
            password.type = "password";
            slash.style.display = "none";
            eye.style.display = "block";
        }

    }
</script>

<script>
    // initialize a validator instance from the "FormValidator" constructor.
    // A "<form>" element is optionally passed as an argument, but is not a must
    var validator = new FormValidator({
        "events": ['blur', 'input', 'change']
    }, document.forms[0]);
    // on form "submit" event
    document.forms[0].onsubmit = function(e) {
        var submit = true,
            validatorResult = validator.checkAll(this);
        console.log(validatorResult);
        return !!validatorResult.valid;
    };
    // on form "reset" event
    document.forms[0].onreset = function(e) {
        validator.reset();
    };
    // stuff related ONLY for this demo page:
    $('.toggleValidationTooltips').change(function() {
        validator.settings.alerts = !this.checked;
        if (this.checked)
            $('form .alert').remove();
    }).prop('checked', false);

</script>

<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('js/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('js/nprogress.js') }}"></script>
<!-- validator -->
<!-- <script src="../vendors/validator/validator.js"></script> -->
<!-- Custom Theme Scripts -->
<script src="{{ asset('js/custom.js') }}"></script>


</body>

</html>
