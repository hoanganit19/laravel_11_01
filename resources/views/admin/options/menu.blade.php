@extends('layouts.admin')

@section('title', $pageTitle)

@section('content')

@if ($errors->any())
<div class="alert alert-danger">Vui lòng kiểm tra lại dữ liệu</div>
@endif

@if (session('msg'))
<div class="alert alert-success">{{session('msg')}}</div>
@endif

<div class="row">
    <div class="col-6">
        <ul id="menuEditor" class="sortableLists list-group"></ul>
    </div>
    <div class="col-6">
        <div class="card border-primary mb-3">
            <div class="card-header bg-primary text-white">Cập nhật menu</div>
            <div class="card-body">
                <form id="frmEdit" class="form-horizontal">
                    <div class="form-group">
                        <label for="text">Tiêu đề</label>
                        <div class="input-group">
                            <input type="text" class="form-control item-menu" name="text" id="text" placeholder="Tiêu đề...">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="href">Link</label>
                        <input type="text" class="form-control item-menu" id="href" name="href" placeholder="Link...">
                    </div>
                    <div class="form-group">
                        <label for="target">Mục tiêu</label>
                        <select name="target" id="target" class="form-control item-menu">
                            <option value="_self">Hiện tại</option>
                            <option value="_blank">Tab mới</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Tooltip</label>
                        <input type="text" name="title" class="form-control item-menu" id="title" placeholder="Tooltip">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button type="button" id="btnUpdate" class="btn btn-primary" disabled><i class="fas fa-sync-alt"></i> Cập nhật</button>
                <button type="button" id="btnAdd" class="btn btn-success"><i class="fas fa-plus"></i> Thêm</button>
            </div>
        </div>
    </div>
</div>

<form class="save-menu" action="" method="post">
    <input name="menu_content" type="hidden"/>
    <button type="submit" class="btn btn-primary">Lưu menu</button>
    @csrf
</form>
<hr>

@endsection

@section('js')
<script type="text/javascript">


    // icon picker options
    var iconPickerOptions = {searchText: "Buscar...", labelHeader: "{0}/{1}"};
    // sortable list options
    var sortableListOptions = {
        placeholderCss: {'background-color': "#cccccc"}
    };

    var editor = new MenuEditor('menuEditor',
        {
            listOptions: sortableListOptions,
            iconPicker: iconPickerOptions,
            maxLevel: 2 // (Optional) Default is -1 (no level limit)
            // Valid levels are from [0, 1, 2, 3,...N]
        });

    var arrayJson = {!!getOption('primary_menu')??'[]'!!};

    if (arrayJson.length==0){

        setTimeout(function(){
            $('#menuEditor').html(`<div class="alert alert-danger msg-no-menu">Chưa thiết lập menu</div>`);
        }, 500);
    }

    editor.setData(arrayJson);

    editor.setForm($('#frmEdit'));
    editor.setUpdateButton($('#btnUpdate'));
    //Calling the update method
    $("#btnUpdate").click(function(){
        if ($('.msg-no-menu').length>0){
            $('.msg-no-menu').remove();
        }

        editor.update();
    });
    // Calling the add method
    $('#btnAdd').click(function(){
        if ($('.msg-no-menu').length>0){
            $('.msg-no-menu').remove();
        }
        editor.add();
    });

    $('.save-menu').on('submit', function(){

        var menuContent = editor.getString();
        $('[name="menu_content"]').val(menuContent);

    });
    //var str = editor.getString();
    //$("#myTextarea").text(str);
</script>
@endsection