<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Редактирование справочника</h2>
                </div>
            </div>

        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered text-light dataTable js-exportable-admin">
                                <thead>
                                    <tr>
                                        <th><strong>Фамилия Имя</strong></th>
                                        <th><strong>Должность</strong></th>
                                        <th><strong>Отдел</strong></th>
                                        <th><strong>Действия</strong></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $usr)
                                    <tr>
                                        <td>{{ $usr->name}}</td>
                                        <td>{{ $usr->posit->name }}</td>
                                        <td>{{ $usr->posit->dept->name }}</td>
                                        <td>
                                            <a class="btn btn-info" href="#">Телефоны</a>
                                            <a class="btn btn-warning" href="#">Изменить</a>
                                            <a class="btn btn-danger" href="#">Удалить</a>
                                        </td>
                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>


                    </div>
                    <br>
                    <a class="btn btn-info" href="/admin">Назад</a>
                    <a class="btn btn-info" href="/admin/add">Назад</a>
                </div>
            </div>
        </div>
    </div>
</div>
