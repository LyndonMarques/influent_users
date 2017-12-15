
<?= include "header.php"?>

<div id="container">
    <div id="sidebar" class="sidebar-fixed">
        <div id="sidebar-content">
            
            <!--=== Navigation ===-->
            <ul id="nav">
                <li class="current">
                    <a href="<?= base_url("/index.php/interactions");?>">
                        <i class="icon-dashboard"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?= base_url("/index.php/users");?>">
                        <i class="icon-user"></i>
                        Usuários
                    </a>
                </li>
                <li>
                    <a href="<?= base_url("/index.php/brands");?>">
                        <i class="icon-bookmark"></i>
                        Marcas
                    </a>
                </li>
            
            </ul>

            <!-- /Navigation -->

        </div>
        <div id="divider" class="resizeable"></div>
    </div>
    <!-- /Sidebar -->

    <div id="content">
        <div class="container">
            <!-- Breadcrumbs line -->
            <div class="crumbs">
                <ul id="breadcrumbs" class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="">Dashboard</a>
                    </li>
                    <li class="current">
                        <a title="">Usuários</a>
                    </li>
                </ul>

                <ul class="crumb-buttons">
                    <li><a title=""><i class="icon-signal"></i><span>Statistics</span></a></li>
                
                </ul>
            </div>
            <!-- /Breadcrumbs line -->

            <!--=== Page Header ===-->
            <div class="page-header">
                <div class="page-title">
                    <h3>Usuários cadastrados</h3>
                </div>

                <!-- Page Stats -->
                <ul class="page-stats">
                    <li>
                        <div id="sparkline-bar2" class="graph sparkline hidden-xs">5,15,20,30,35,40,50,55,60,70,80,90,100,105</div>
                    </li>
                </ul>
                <!-- /Page Stats -->
            </div>
            <!-- /Page Header -->
            
            <!--=== Normal ===-->
            <div class="row">
                <div class="col-md-12">
                    <div class="widget box">
                        <div class="widget-header">
                            <h4><i class="icon-reorder"></i> Listagem</h4>
                            <div class="toolbar no-padding">
                                <div class="btn-group">
                                    <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content">
                            <table id="interactios" class="table table-striped table-bordered table-hover table-checkable">
                                <thead>
                                <tr>
                                    <th class="searchable">First Name</th>
                                    <th>Last Name</th>
                                    <th class="hidden-xs">Username</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Joey</td>
                                    <td>Greyson</td>
                                    <td class="hidden-xs">joey123</td>
                                    <td><span class="label label-success">Approved</span></td>
                                </tr>
                              
                                <tr>
                                    <td>Andrea</td>
                                    <td>Brenden</td>
                                    <td class="hidden-xs">andry</td>
                                    <td><span class="label label-danger">Blocked</span></td>
                                </tr>
                                <tr>
                                    <td>Joey</td>
                                    <td>Greyson</td>
                                    <td class="hidden-xs">joey123</td>
                                    <td><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr>
                                    <td>Wolf</td>
                                    <td>Bud</td>
                                    <td class="hidden-xs">wolfy</td>
                                    <td><span class="label label-info">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>Darin</td>
                                    <td>Alec</td>
                                    <td class="hidden-xs">alec82</td>
                                    <td><span class="label label-warning">Suspended</span></td>
                                </tr>
                                <tr>
                                    
                                    <td>Andrea</td>
                                    <td>Brenden</td>
                                    <td class="hidden-xs">andry</td>
                                    <td><span class="label label-danger">Blocked</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Normal -->
            
        </div>
        <!-- /.container -->

    </div>
</div>

<?= include "footer.php"?>