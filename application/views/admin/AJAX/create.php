<script type="text/javascript">
    $(document).ready(function(e) {


        $('.btn-save').click(function(e) {
            e.preventDefault();
            if ($("#nma_survey").val() == "") {
                alert("Inputan nama survey tidak boleh kosong");
                $('#nma_survey').focus();
                return false;
            }
            //tujuan_survey

            if ($(".tgl_awal").val() == "") {
                alert("Tanggal awal tidak boleh kosong");
                $('.tgl_awal').focus();
                return false;
            }

            if ($(".tgl_akhir").val() == "") {
                alert("Tanggal akhir tidak boleh kosong");
                $('.tgl_akhir').focus();
                return false;
            }

            var public = document.getElementsByName('public');
            var publicValue = false;

            for (var i = 0; i < public.length; i++) {
                if (public[i].checked == true) {
                    publicValue = true;
                }
            }
            if (!publicValue) {
                alert("Please Choose the gender");
                return false;
            }


            if ($("#dibuat_oleh").val() == "") {
                alert("Inputan dibuat oleh tidak boleh kosong");
                $('#dibuat_oleh').focus();
                return false;
            }
            //live_result

            var update = confirm("Apakah kamu yakin ?");
            if (!update) {
                alert("Anda membatalkanya");
                return false;
            }
            var title = $('#form_filter').serialize();
            // e.preventDefault();
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: '<?= site_url('Survey_kkb/save_survey/') ?>',
                data: $('#form_filter').serialize(),
                dataType: 'json',
                beforeSend: function() {
                    $('#ajax-loader').show();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#ajax-loader').hide();
                    alert('<?= $this->config->item('ajax_error_message') ?>');
                },
                success: function(data) {
                    // alert(data.status);
                    // die;
                    $('#ajax-loader').hide();
                    if (data.status == 01) {
                        loadSurveyContentPage(data.id_survey);
                        // $.ajax({
                        //     url: '<?= base_url('Survey_kkb/content') ?>',
                        //     type: 'get',
                        //     beforeSend: function() {
                        //         $('#ajax-loader').show();
                        //     },
                        //     success: function(data) {
                        //         $('#ajax-loader').hide();
                        //         $('.filter_seputar_brispot').hide();
                        //         $('.sub-content').show("slow");

                        //         $('.sub-content').html(data);
                        //     }
                        // });
                    } else {
                        $('#alert').html(data.result_message);
                        $('#alert').show();
                    }
                    // $('#mod-content-pertanyaan-survey').html(data);
                    // $('.modal-main-pertanyaan-survey').modal("show");
                }
            });
            // return false;
        });

        function loadSurveyContentPage(id_survey) {
            $.ajax({
                type: 'POST',
                url: '<?php echo site_url('Survey_kkb/content'); ?>',
                data: 'id_survey=' + id_survey,
                dataType: 'HTML',
                beforeSend: function() {
                    $('#ajax-loader').show();
                },
                error: function() {
                    $('#ajax-loader').hide();
                    alert('Error\nGagal request data');
                },
                success: function(data) {
                    // alert(data);
                    // return false;
                    $('#ajax-loader').hide();
                    $('#filter_seputar_brispot').hide();
                    $('.sub-content').html(data);
                    $('.sub-content').show("slow");
                    // $('#mod-content-pertanyaan-survey').html(data);
                    // $('.modal-main-pertanyaan-survey').modal("show");
                }
            });
        }

        // function untuk keyup inputan nama survey
        $(function() {
            $("#nma_survey").keyup(function(event) {
                $("#count-nma_survey").text($(this).val().length);
                var x = $(this).val().length;
                if (x >= 50) {
                    $(this).css("border", '1px solid red');
                    $(".pesan-nma_survey").show();
                } else {
                    $(".pesan-nma_survey").hide();
                    $(this).css("border", '');
                }
            });

        });
        // tutup function untuk keyup inputan nama survey

        // function untuk keyup inputan tujuan survey
        $(function() {
            $("#dibuat_oleh").keyup(function(event) {
                $("#count-dibuat_oleh").text($(this).val().length);
                var x = $(this).val().length;
                if (x >= 50) {
                    $(this).css("border", '1px solid red');
                    $(".pesan-dibuat_oleh").show();
                } else {
                    $(".pesan-dibuat_oleh").hide();
                    $(this).css("border", '');
                }
            });

        });
        // tutup function untuk keyup inputan tujuan survey

    });
</script>