<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Телефонный справочник</h2>
                </div>
            </div>

        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover text-light table-bordered dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th><strong>Фамилия Имя</strong></th>
                                        <th>Вн Тел</th>
                                        <th>Должность</th>
                                        <th>Отдел</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <tr>
                                        <td>Засеко Елена</td>
                                        <td>25156</td>
                                        <td>Главный бухгалтер</td>
                                        <td>Бухгалтерия</td>

                                    </tr> --}}
                                    @foreach ($users as $usr)
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="sidebar-scroll">
                                                <div class="dropdown">

                                                    <a href="javascript:void(0);" class="dropdown-toggle user-name"
                                                        data-toggle="dropdown">{{ $usr->name}}</a>
                                                    <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                                                        @foreach($usr->phone as $ph)
                                                        <li><i class="icon-call-end" style="margin: 10px;"></i>{{ $ph->num}}</li>
                                                        @endforeach
                                                        <li><i class="icon-envelope" style="margin: 10px;"></i>{{ $usr->email }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td>25150</td>
                                        <td>{{ $usr->posit->name }}</td>
                                        <td>{{ $usr->posit->dept->name }}</td>

                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
