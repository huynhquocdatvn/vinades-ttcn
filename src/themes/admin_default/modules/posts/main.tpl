<!-- BEGIN: empty -->
<a href="#" class="btn btn-success">{LANG.create}</a>
<div class="alert alert-info">{LANG.empty}</div>
<!-- END: empty -->

<!-- BEGIN: main -->
<a href="#" class="btn btn-success">{LANG.create}</a>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Trang thái</th>
                <th>Cập nhật gần nhất</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <!-- BEGIN: loop -->
            <tr>
                <td>{ROW.id}</td>
                <td>{ROW.title}</td>
                <td>{ROW.status}</td>
                <td>{ROW.updated_at}</td>
                <td>
                    <a href="{ROW.edit_url}" class="btn btn-xs btn-warning">Sửa</a>
                    <a href="{ROW.delete_url}" class="btn btn-xs btn-danger">Xóa</a>
                </td>
            </tr>
            <!-- END: loop -->
        </tbody>
    </table>
</div>
<!-- END: main -->