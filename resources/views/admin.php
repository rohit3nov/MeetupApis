<html>
    <head>
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> -->
        <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.jqueryui.min.css">

        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.jqueryui.min.js"></script>

        <style>

            .ui-toolbar{
                width:80%;
                margin:0 auto;
            }
        </style>
    </head>
    <body>
        <center><h1>Participant Listing</h1></center>
        <table id="example" class="display" style="width:80%;text-align: right;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Date of Birth</th>
                    <th>Profession</th>
                    <th>Locality</th>
                    <th>Guests</th>
                    <th>Address</th>
                </tr>
            </thead>
        </table>
    <script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "ajax": "http://localhost:8000/api/v1/participants",
            "columns": [
                { "data": "name" },
                { "data": "age" },
                { "data": "dob" },
                { "data": "profession" },
                { "data": "locality" },
                { "data": "guests" },
                { "data": "address" }
            ]
        });
    });
    </script>
    </body>
</html>