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
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">

                            <div class="x_content">
                                <form class="" action="newCustomerAdd" method="post" novalidate>
                                    @csrf
                                    <span class="section">Personal Info</span>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Customer Count<span class="required">*</span></label>
                                        <div class="col-md-3 col-sm-3">
                                        <select class="form-control" name="customerCount" id="customerCount">
                                            <option selected>1</option>
                                            <option>2</option>
                                        </select>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <label class="col-form-label col-md-6 col-sm-6  label-align">Room Number<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <select class="form-control" name="roomNumber">
                                                @foreach ($rooms as $room)
                                                    <option> {{ $room}} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">1.Identity(T.C)<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="number" id="tc1" name="tc1" required="required" />
                                        </div>
                                    </div>

                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">1.Name<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" data-validate-length-range="6" data-validate-words="1" id="name1" name="name1" required="required" />
                                        </div>
                                    </div>

                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">1.Surname<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" data-validate-length-range="6" data-validate-words="1" id="surname1" name="surname1" required="required" />
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">1.Telephone<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" type="tel" class='tel' name="phone1" id="phone1" required='required' data-validate-length-range="8,20" /></div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">2.Identity</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="tc2" class="form-control" type="number" id="tc2" name="tc2" readonly/>
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">2.Name</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="name2" class="form-control" data-validate-length-range="6" data-validate-words="1"  id="name2" name="name2" readonly/>
                                        </div>
                                    </div>

                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">2.Surname</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="surname2" class="form-control" data-validate-length-range="6" data-validate-words="1" id="surname2" name="surname2" readonly />
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">2.Telephone</label>
                                        <div class="col-md-6 col-sm-6">
                                            <input id="telephone2" class="form-control" type="tel" class='tel' name="phone2"  readonly data-validate-length-range="8,20" /></div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Entry Date<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" class='date' type="date" name="dateEntry"  id="dateEntry" required='required'></div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Exit Date<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" class='date' type="date" name="dateExit" id="dateExit" required='required'></div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Amount<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control" class='date' type="number"  id="amount" name="amount" required='required'></div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-12 d-flex justify-content-center " >
                                            <div class="alert alert-danger col-md-6"  id="warning" role="alert" style="display: none">
                                                <h4 class="alert-heading">Warning!</h4>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="ln_solid">
                                        <div class="form-group">
                                            <div class="col-md-6 offset-md-3">
                                                <button type='button' id="ok" class="btn btn-primary">Submit</button>
                                                <button type='reset' class="btn btn-success">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
        var control = true;
        $( "#warning" ).empty()
        $("#warning").css("display", "none");
        var entryDatee = "";
        var cc = $( "[name=\"customerCount\"] option:selected" ).text();
       if($("#tc1").val()==""){
           control = false;
           $( "#warning" ).append( "<p id='waningp'><i class=\"fa fa-square\" aria-hidden=\"true\"></i> First customer credential is required field (TC)</p>" );
       }
        if($("#name1").val()==""){
            control = false;
            $( "#warning" ).append( "<p  id=''><i class=\"fa fa-square\" aria-hidden=\"true\"></i> First customer name information is required field</p>" );
        }
        if($("#surname1").val()==""){
            control = false;
            $( "#warning" ).append( "<p  id=''><i class=\"fa fa-square\" aria-hidden=\"true\"></i> First customer surname information is required field</p>" );
        }
        if($("#phone1").val()==""){
            control = false;
            $( "#warning" ).append( "<p><i class=\"fa fa-square\" aria-hidden=\"true\"></i> First customer telephone information is required field</p>" );
        }
        if($("#amount").val()==""){
            control = false;
            $( "#warning" ).append( "<p><i class=\"fa fa-square\" aria-hidden=\"true\"></i> Amount information cannot be blank</p>" );
        }
        if(cc==2){
            if($("#tc2").val()=="") {
                control = false;
                $("#warning").append("<p><i class=\"fa fa-square\" aria-hidden=\"true\"></i> Second customer credential is required field (TC)</p>");
            }
            if($("#name2").val()==""){
                control = false;
                $( "#warning" ).append( "<p><i class=\"fa fa-square\" aria-hidden=\"true\"></i> Second customer name information is required field</p>" );
            }
            if($("#surname2").val()==""){
                control = false;
                $( "#warning" ).append( "<p><i class=\"fa fa-square\" aria-hidden=\"true\"></i> Second customer surname information is required field</p>" );
            }
            if($("#phone2").val()==""){
                control = false;
                $( "#warning" ).append( "<p><i class=\"fa fa-square\" aria-hidden=\"true\"></i> Second customer telephone information is required field</p>" );
            }

        }
        if($("#dateEntry").val()==""){
            control = false;
            $( "#warning" ).append( "<p><i class=\"fa fa-square\" aria-hidden=\"true\"></i> Check-in date cannot be left blank</p>" );
        }
        if($("#dateExit").val()==""){

            $( "#warning" ).append( "<p><i class=\"fa fa-square\" aria-hidden=\"true\"></i> Check-out date cannot be left blank</p>" );
        }
        if($("#dateEntry").val()!=""){
            var nowDate = new Date();
            var dateEntry = $("#dateEntry").val();
            debugger;
            var year  = dateEntry.substring(0,4);
            var month  = dateEntry.substring(5,7);
            var day  = dateEntry.substring(8,10);

            var dateEntryNewString = day + "/" + month + "/" + year;
            var dateEntryNowString = nowDate.getDate() + "/" + (nowDate.getMonth()+1) + "/" + nowDate.getFullYear();
            debugger;

            var dateEntryNew = Date.parse(dateEntryNewString);
            var dateEntryNow = Date.parse(dateEntryNowString);

            if(dateEntryNew<dateEntryNow){
                control = false;
                $( "#warning" ).append( "<p><i class=\"fa fa-square\" aria-hidden=\"true\"></i>Entry date cannot be past date</p>" );
            }else{
                entryDatee = dateEntryNew;
            }

        }
        if($("#dateExit").val()!=""){

            var dateExit = $("#dateExit").val();
            debugger;
            var year  = dateExit.substring(0,4);
            var month  = dateExit.substring(5,7);
            var day  = dateExit.substring(8,10);

            var dateExitNewString = day + "/" + month + "/" + year;


            var dateExitNew = Date.parse(dateExitNewString);

            if(dateExitNew<entryDatee){
                control = false;
                $( "#warning" ).append( "<p><i class=\"fa fa-square\" aria-hidden=\"true\"></i>The check-out date cannot be less than the check-in date</p>" );
            }

        }
        if(control==false){
            $("#warning").css("display", "block");
        }else{
           var person = [
               {
                   "tc":$( "#tc1").val(),
                   "name" : $( "#name1" ).val(),
                   "surname" : $( "#surname1" ).val(),
                   "phone" : $( "#phone1" ).val()
               }
           ]
            if($( "[name=\"customerCount\"] option:selected" ).text()==2){
                debugger;
                var newPerson =  {
                        "tc" : $( "#tc2").val(),
                        "name" :  $( "#name2" ).val(),
                        "surname" : $( "#surname2" ).val(),
                        "phone" : $( "#telephone2" ).val()
                    }

                person.push(newPerson)
            }
            debugger;
            $.ajax({
                method: "POST",
                url: "newCustomerAdd",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "data" : person,
                    "customerCount":$( "[name=\"customerCount\"] option:selected" ).text(),
                    "roomNumber" :$( "[name=\"roomNumber\"] option:selected" ).text(),
                    "entryDate": $( "#dateEntry" ).val(),
                    "exitDate": $( "#dateExit" ).val(),
                    "amount": $( "#amount" ).val(),
                }
            }).done(function( msg ) {
                if(msg.error == "ok"){
                    debugger
                    swal({
                        title: 'Error',
                        text: 'Username or Password is wrong',
                        icon: "error",
                        buttons: true,
                        dangerMode: true,
                    }).then(function() {
                       alert("deneme")
                    });


                }else{

                }
            });
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
