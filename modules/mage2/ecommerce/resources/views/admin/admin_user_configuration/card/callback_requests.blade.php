<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body">
                <div class="box-body">
                    <div class="table-overflow">
                        <table class="table table-hover options_table js-data_grid_table resizable-table widget-init" cellpadding="0" cellspacing="0" style="background-color: white">
                            <thead>
                            <tr>

                                <th class="js_field id" data-name="id">
                                    <!-- class="ui-widget-content" -->
                                    <!-- <div id="id_/admin/company"> -->
                                    № Заявки
                                    <!-- </div> -->
                                </th>
                                <th class="js_field name" data-name="name">
                                    <!-- class="ui-widget-content" -->
                                    <!-- <div id="first_name_/admin/company"> -->
                                    Имя
                                    <!-- </div> -->
                                </th>
                                <th class="js_field" data-name="phone">
                                    <!-- class="ui-widget-content" -->
                                    <!-- <div id="email_/admin/company"> -->
                                    Телефон
                                    <!-- </div> -->
                                </th>
                                <th class="js_field" data-name="note">
                                    Примечание
                                </th>
                                <th class="js_field" data-name="status">
                                    Статус
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($callback_requests as $request)
                            <tr>
                                <td>{!! $request->id !!}</td>
                                <td>{!! $request->name !!}</td>
                                <td>{!! $request->phone !!}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
                {{--<div class="form-group">--}}
                    {{--<div class="form-label">ИНН компании</div>--}}
                    {{--{!! Form::text('crm_company_inn' , $settings->crm_company_inn->name, [--}}
                        {{--'class' => 'form-control',--}}
                        {{--'id' => 'js_company_inn'--}}
                    {{--]) !!}--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>