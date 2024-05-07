@extends('admin/layouts/page')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30 pt-4">
            <div class="white_card_body">
                <div class="QA_section">
                    <div class="white_box_tittle list_header">
                        <h4>Module Setting</h4>
                        <div class="box_right d-flex lms_block">
                            <div class="serach_field_2">
                                <div class="search_inner">
                                    <form Active="#">
                                        <div class="search_field">
                                            <input type="text"
                                                placeholder="Search content here...">
                                        </div>
                                        <button type="submit"> <i class="ti-search"></i> </button>
                                    </form>
                                </div>
                            </div>
                            <div class="add_button ms-2">
                                <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#addcategory" class="btn_1">search</a>
                            </div>
                        </div>
                    </div>
                    <div class="QA_table mb_30">

                        <table class="table lms_table_active ">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Module Name</th>
                                    <th scope="col">Controller Name</th>
                                    <th scope="col">icon</th>
                                    <th scope="col">Operations</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"> <a href="#" class="question_content"> 1
                                        </a></th>
                                    <td>Backup & Export</td>
                                    <td>Export</td>
                                    <td>fa-database</td>
                                    <td>access</td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i
                                                    class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i
                                                    class="fas fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="#" class="question_content"> 2
                                        </a></th>
                                    <td>Backup & Export</td>
                                    <td>Export</td>
                                    <td>fa-database</td>
                                    <td>access</td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i
                                                    class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i
                                                    class="fas fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="#" class="question_content"> 3
                                        </a></th>
                                    <td>Backup & Export</td>
                                    <td>Export</td>
                                    <td>fa-language</td>
                                    <td>access</td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i
                                                    class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i
                                                    class="fas fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="#" class="question_content"> 4
                                        </a></th>
                                    <td>Backup & Export</td>
                                    <td>Export</td>
                                    <td>fa-external-link-square</td>
                                    <td>access</td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i
                                                    class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i
                                                    class="fas fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="#" class="question_content"> 5
                                        </a></th>
                                    <td>Backup & Export</td>
                                    <td>Export</td>
                                    <td>fa-eye</td>
                                    <td>access</td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i
                                                    class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i
                                                    class="fas fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"> <a href="#" class="question_content"> 6
                                        </a></th>
                                    <td>Backup & Export</td>
                                    <td>Export</td>
                                    <td>fa-line-chart</td>
                                    <td>access</td>
                                    <td>
                                        <div class="action_btns d-flex">
                                            <a href="#" class="action_btn mr_10"> <i
                                                    class="far fa-edit"></i> </a>
                                            <a href="#" class="action_btn"> <i
                                                    class="fas fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection