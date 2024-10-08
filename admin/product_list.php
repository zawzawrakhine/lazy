<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/admin_style.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

        <style>
    td{
        text-transform: none !important;
    }

    
    td p{
        text-transform: none;
        max-height: 50px;
        overflow: auto;
        line-height: 1.5rem;
    }
    .user-btn{
        border:none;
        outline: none;
        padding:.5rem 1rem;
        font-size: 1rem;
        color:#ffffff;
        font-weight: bold;
    }
    .actions a{
        color:#ffffff;
        font-size: 1.5rem;
        border-radius: 50%;
        padding:.5rem;
    }
</style>

</head>

<body>
<?php include('connection.php'); ?>
    
    <?php include('sidebar.php'); ?>
    <div class="main-content">

        <div class="page-header">
            <h1>Products List</h1>
        </div>

        <div class="page-content">

            <div class="records table-responsive">
                <div class="record-header">
                    <div class="add">
                        <a href="add_product.php">Add Product <i class="las la-plus"></i></a>
                    </div>
                </div>
                <div>
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><span class="las la-sort"></span> NAME</th>
                                <th><span class="las la-sort"></span> PRICE</th>
                                <th><span class="las la-sort"></span> DESCRIPTION</th>
                                <th><span class="las la-sort"></span> CREATED_AT</th>
                                <th><span class="las la-sort"></span> UPDATED_AT</th>
                                <th><span class="las la-sort"></span> ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td>    </td>
                                <td>
                                    <div class="client">
                                        <div class="client-img bg-img" style="background-image: url({{u.profile.url}});background-size:contain !important;"></div>
                                        <div class="client-info">
                                            <h4>Menu - 1</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    10000
                                </td>
                                <td>
                                    <p style="padding:0 5px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quaerat saepe deleniti accusantium impedit, sint dignissimos! Odit accusantium ea nostrum adipisci enim impedit quaerat veritatis numquam sint, eos eligendi sed?</p>
                                </td>
                                <td>2020-01-01</td>
                                <td>2020-01-01</td>
                                <td>
                                    <div class="actions">
                                        <a href="/myadmin/edit_user/{{u.id}}/" class="las la-edit" style="background-color: green;"></a>
                                        <a href="#" class="las la-trash"  style="background-color: red;"></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        
    </div>

</body>

</html>