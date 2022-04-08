<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - Unicode Academy</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admins/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('admins/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admins/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('admins/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admins/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('admins/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('admins/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('admins/plugins/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <script type="text/javascript" src="{{asset('admins/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('admins/ckfinder/ckfinder.js')}}"></script>

    <link rel="stylesheet" href="{{asset('admins/dist/css/custom.css')}}">
    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    @include('layouts.admin.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layouts.admin.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('layouts.admin.breadcrumbs')

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('layouts.admin.footer')

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admins/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admins/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admins/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('admins/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admins/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('admins/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admins/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admins/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admins/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admins/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admins/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admins/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admins/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admins/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admins/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admins/dist/js/demo.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.editor').each(function (index){
            $(this).attr('id', 'editor_'+(index+1));

            CKEDITOR.replace($(this).attr('id'));
        }) ;

        //Xử lý chọn ckfinder
        $('body form').on('click', '.choose', function () {

            let currentBtn = $(this);

            CKFinder.popup( {
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        let fileUrl = evt.data.files.first().getUrl();
//Xử lý chèn link ảnh vào input
                        currentBtn.parents('.ckfinder-group').find('.render-url').val(fileUrl);

                        currentBtn.parents('.ckfinder-group').find('.preview').attr('src', fileUrl);
                        currentBtn.parents('.ckfinder-group').find('.preview').show();
                    } );
                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        let fileUrl = evt.data.resizedUrl;
//Xử lý chèn link ảnh vào input
                        currentBtn.parents('.ckfinder-group').find('.render-url').val(fileUrl);
                        currentBtn.parents('.ckfinder-group').find('.preview').attr('src', fileUrl);
                        currentBtn.parents('.ckfinder-group').find('.preview').show();
                    } );
                }
            } );
        });

        //Xử lý thêm nhiều ảnh (gallery)
        let galleryItem = `<div class="gallery-item">
                    <div class="row ckfinder-group">
                        <div class="col-10">
                            <input type="text" class="form-control render-url" name="gallery[]" placeholder="Đường dẫn ảnh..." value=""/>
                            <p><img class="preview thumbnail" style="display: none; width: 200px; margin-top: 5px;" src="" alt=""></p>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-success choose">Chọn</button>
                            <button type="button" class="btn btn-danger remove">&times;</button>
                        </div>
                    </div>
                </div><!--End .gallery-item-->`;
        $('.add-image').on('click', function(){
            $('.gallery-lists').append(galleryItem);
        });

        $('.gallery-lists').on('click', '.remove', function(){
            if (confirm('Bạn có chắc chắn muốn xoá?')){
                $(this).parents('.gallery-item').remove();
            }
        });

        if ($('.add-attr-values').length>0){
            $('.add-attr-values').on('click', function(){

                let currentBtn = $(this);

                let value = prompt('Nhập giá trị');

                if (value!==null && value.trim()!==''){
                    let attributeId = $(this).parents('.attributes-wrap').data('attribute');

                    if (attributeId>0){
                        $.ajax({
                            url: '{{route("admin.attribute.values.post-data")}}',
                            type: 'POST',
                            data: {
                                value: value,
                                attribute_id: attributeId,
                                _token: "{{csrf_token()}}"
                            },
                            dataType: 'json',

                            success: function(response){
                                if (response.status=='ok'){
                                    let valueData = response.data;
                                    let valueItem = `<div class="col-2">
            <label for="attribute_${valueData.attribute_id}_${valueData.id}"><input type="checkbox" name="attribute[${valueData.attribute_id}][]" id="attribute_${valueData.attribute_id}_${valueData.id}" value="${valueData.id}"/> ${valueData.value}</label>
            </div>`;
                                    currentBtn.parents('.attributes-wrap').prepend(valueItem);
                                }
                            },
                            error: function(error){

                            }
                        });
                    }
                }
            });
        }
    });
</script>

@yield('js')
</body>
</html>
