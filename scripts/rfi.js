// <![CDATA[
    $( document ).ready(function() {
        $('#81474532365257 select[name="country"]').change(function() {
            if ($('#81474532365257 select[name="country"] option:selected').val() == 'Algeria') {
                alert
            }
            else {
                $('#last_name').show();
            }
        });
    });
// ]]>