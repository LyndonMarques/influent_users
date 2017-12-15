
<script>

    $(function(){

        $('#interactios, #users').DataTable({

            "bLengthChange": false,
            oLanguage: {
                oPaginate: {
                    "sNext": '<i class="fa fa-chevron-right" ></i>',
                    "sPrevious": '<i class="fa fa-chevron-left" ></i>'
                }
            },
            "bInfo" : false,
            "columnDefs": [
                { "targets": [1], "searchable": false }
            ]
        });
    })
</script>

</body>
</html>