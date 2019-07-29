<!--라이브러리추가할때

1. autoload.php
$autoload['libraries'] = array('database');
$autoload['helper'] = array('url');

-->

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">내정보</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.
    </p>

    <div class="row">

        <!-- Grow In Utility -->
        <div class="col-lg-6">

            <div class="card position-relative">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Grow In Animation Utilty</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <code>.animated--grow-in</code>
                    </div>
                    <div class="small mb-1">Navbar Dropdown Example:</div>
                    <nav class="navbar navbar-expand navbar-light bg-light mb-4">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <p class="mb-0 small">Note: This utility animates the CSS transform property, meaning it will override any existing transforms on an element being animated! In this theme, the grow in animation is only being used on dropdowns within the navbar.</p>
                </div>
            </div>

        </div>


        <!-- 1. 캘린더 : 주요업무 보여주기 -->
        <div class="col-lg-6">

            <div class="card position-relative">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">일정</h6>
                </div>
                <div class="card-body">
                    <div class="mb-12">
                        <?php
                            echo $calender;
                        ?>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<style type="text/css">
    table{
        border: 15px solid #4e73df;
        border-collapse:collapse;
        /*margin-top: 50px;*/
        /*margin-left: 250px;*/
    }
    td{
        width: 50px;
        height: 50px;
        text-align: center;
        border: 1px solid #e2e0e0;
        font-size: 12px;
    }
    th, th a{
        height: 50px;
        text-align: center;
        padding-bottom: 8px;
        background:#4e73df;
        color:#FFFFFF;
        font-size: 15px;
    }
    .prev_sign a, .next_sign a{
        color:#FFFFFF;
        text-decoration: none;
    }
    tr.week_name{
        font-size: 16px;
        font-weight:400;
        color:red;
        width: 10px;
        background-color: #efe8e8;
    }
    .highlight{
        background-color:#5bc0de;
        color:white;
        /*height: 27px;*/
        /*padding-top: 13px;*/
        /*padding-bottom: 7px;*/
    }
    .calender .days td
    {
        /*width: 80px;*/
        /*height: 80px;*/
    }
    .calender .hightlight
    {
        font-weight: 600px;
    }
    .calender .days td:hover
    {
        background-color: #DEF;
    }
</style>