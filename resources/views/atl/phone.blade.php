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
                    <div class="header">
                        <h2>Basic Table <small>Basic example without any additional modification classes</small></h2>
                        {{-- <ul class="header-dropdown dropdown">

                            <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul> --}}
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom bg-green">
                                <thead>
                                    <tr>
                                        <th><strong>Фамилия Имя</strong></th>
                                        <th>Должность</th>
                                        <th>Отдел</th>
                                        <th>Вн Тел</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Гаврилко Сергей</td>
                                        <td>Директор</td>
                                        <td>Администрация</td>
                                        <td>25150</td>
                                    </tr>
                                    <tr>
                                        <td>Крепская Александра</td>
                                        <td>Финансовый менеджер</td>
                                        <td>Финансовый отдел</td>
                                        <td>25157</td>
                                    </tr>
                                    <tr>
                                        <td>Засеко Елена</td>
                                        <td>Главный бухгалтер</td>
                                        <td>Бухгалтерия</td>
                                        <td>25156</td>
                                    </tr>
                                    <tr>
                                        <td>Минец Юлия</td>
                                        <td>Руководитель отдела маркетинга</td>
                                        <td>Отдел маркеринга</td>
                                        <td>25153</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="sidebar-scroll">
                                                <div class="dropdown">

                                                    <a href="javascript:void(0);" class="dropdown-toggle user-name"
                                                        data-toggle="dropdown"><strong>Крек Сергей</strong></a>
                                                    <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                                                        <li><i class="icon-call-end" style="margin: 10px;"></i>25100</li>
                                                        <li><i class="icon-call-end" style="margin: 10px;"></i>26100</li>
                                                        <li><i class="icon-call-end" style="margin: 10px;"></i>+375-29-837-12-97</li>
                                                        <li><i class="icon-call-end" style="margin: 10px;"></i>+375-29-620-75-37</li>
                                                        <li class="divider"></li>
                                                        <li><i class="icon-envelope" style="margin: 10px;"></i>sergey_krek@atlantm.com</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Руководитель отдела продаж автомобилей</td>
                                        <td>Отдел продаж автомобилейя</td>
                                        <td>25100</td>
                                    </tr>
                                    <tr>
                                        <td>Таубалдина Жанна</td>
                                        <td>Руководитель отдела по работе с клиентами</td>
                                        <td>Отдел по работе с клиентами</td>
                                        <td>25140</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Table Tools<small>Basic example without any additional modification classes</small></h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-striped {{-- table-hover--}} dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th><strong>Фамилия Имя</strong></th>
                                        <th>Должность</th>
                                        <th>Отдел</th>
                                        <th>Вн Тел</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Гаврилко Сергей</td>
                                        <td>Директор</td>
                                        <td>Администрация</td>
                                        <td>25150</td>
                                    </tr>
                                    <tr>
                                        <td>Крепская Александра</td>
                                        <td>Финансовый менеджер</td>
                                        <td>Финансовый отдел</td>
                                        <td>25157</td>
                                    </tr>
                                    <tr>
                                        <td>Засеко Елена</td>
                                        <td>Главный бухгалтер</td>
                                        <td>Бухгалтерия</td>
                                        <td>25156</td>
                                    </tr>
                                    <tr>
                                        <td>Минец Юлия</td>
                                        <td>Руководитель отдела маркетинга</td>
                                        <td>Отдел маркеринга</td>
                                        <td>25153</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="sidebar-scroll">
                                                <div class="dropdown">

                                                    <a href="javascript:void(0);" class="dropdown-toggle user-name"
                                                        data-toggle="dropdown"><strong>Крек Сергей</strong></a>
                                                    <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                                                        <li><i class="icon-call-end" style="margin: 10px;"></i>25100</li>
                                                        <li><i class="icon-call-end" style="margin: 10px;"></i>26100</li>
                                                        <li><i class="icon-call-end" style="margin: 10px;"></i>+375-29-837-12-97</li>
                                                        <li><i class="icon-call-end" style="margin: 10px;"></i>+375-29-620-75-37</li>
                                                        <li class="divider"></li>
                                                        <li><i class="icon-envelope" style="margin: 10px;"></i>sergey_krek@atlantm.com</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Руководитель отдела продаж автомобилей</td>
                                        <td>Отдел продаж автомобилейя</td>
                                        <td>25100</td>
                                    </tr>
                                    <tr>
                                        <td>Таубалдина Жанна</td>
                                        <td>Руководитель отдела по работе с клиентами</td>
                                        <td>Отдел по работе с клиентами</td>
                                        <td>25140</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
