 <!-- Jquery Core Js -->
    <script src="lib/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="lib/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="lib/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="lib/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="lib/plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="lib/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="lib/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="lib/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="lib/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="lib/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="lib/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="lib/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="lib/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="lib/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="lib/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="lib/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="lib/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="lib/js/admin.js"></script>
    <script src="lib/js/pages/forms/basic-form-elements.js"></script>
    <script src="lib/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="lib/js/demo.js"></script>
</body>

</html>

<!-- <script>

window.URL = window.URL || window.webkitURL || window.mozURL;
document.getElementById('file').onchange = function() {
    var url = URL.createObjectURL(this.files[0]);
    console.log(url);
    document.getElementById('preview').src = url;
};

$(document).ready(function(){

    $("#user_con_password").keyup(function(event) {
        
        if ($("#user_con_password").val() != $("#user_password").val())
            $("#user_con_password_msg").text("Password and Confirm Password are not same.");
    });

    $("#user_con_password").focusout(function(){

        if ($("#user_con_password").val() == $("#user_password").val())
            $("#user_con_password_msg").text("");
    });

    $("#user_con_no").keydown(function(event) {

        k = event.which;
        if ((k >= 96 && k <= 105) || k == 8) {
            if ($(this).val().length == 10) {
                if (k == 8) {
                    return true;
                } else {
                    event.preventDefault();
                    return false;
                }
            }
        } else {
            event.preventDefault();
            return false;
    }});

    $("#user_con_no").focusout(function(){
        if ($(this).val().length < 10) {
            $(this).val("");
            $("#user_con_msg").text("Please ! Enter upto 10 digit");
        }
        else
            $("#user_con_msg").text("");
    });
});

function view_user_profile(user_id) {

    $("#modal_user_name").text("User Name : "+$("#user_name"+user_id).text());
    $("#modal_email").text("Email : "+$("#email"+user_id).text());
    $("#modal_con_no").text("Contact No : "+$("#con_no"+user_id).text());
    $("#modal_addr").text("Address : "+$("#address"+user_id).text());
    $("#modal_join_dt").text("Joining Date : "+$("#join_add_dt"+user_id).text());
    $("#modal_last_lg_dt").text("Last login date : "+$("#lst_lg_dt"+user_id).text());
    $("#modal_lg_os").text("Login OS : "+$("#os"+user_id).text());
    $("#modal_lg_browser").text("Login Browser : "+$("#browser"+user_id).text());
    $("#modal_ip").text("IP Address: "+$("#ip_address"+user_id).text());
}

function view_user_query(user_id) {

    $("#modal_user_name").text("User Name : "+$("#user_name"+user_id).text());
    $("#modal_email").text("Email : "+$("#email"+user_id).text());
    $("#modal_con_no").text("Contact No : "+$("#con_no"+user_id).text());
    $("#modal_addr").text("Address : "+$("#addr"+user_id).text());
    $("#modal_source").text("Source : "+$("#source"+user_id).text());
    $("#modal_destination").text("Destination : "+$("#destination"+user_id).text());
    $("#modal_item_cate").text("Item Category : "+$("#item_category"+user_id).text());
    $("#modal_other_item_cate").text("Other Item Category : "+$("#other_item_category"+user_id).text());
    $("#modal_en_date").text("Enquiry Date : "+$("#date"+user_id).text());
    $("#modal_who_registered").text("Who Registered: "+$("#who_register"+user_id).text());
}

</script> -->