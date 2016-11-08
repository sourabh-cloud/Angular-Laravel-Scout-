<html ng-app="scoutapp">
    <head>
        <link href="<?php echo asset('bs335/css/bootstrap.css'); ?>" type="text/css" rel="stylesheet"/>
        <script  src="<?php echo asset('bs335/angular.min.js'); ?>" type="text/javascript"></script>
        <script  src="<?php echo asset('bs335/app.js'); ?>" ></script>

    </head>
    <body style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 ">
                    <div class="well">
                        <div ng-controller="ScoutController">
                            
                            <form class="form-inline">
                                <label>Keyword</label>
                                <input type="text" ng-model="kw" class="form-control"/>
                                <span ng-if="loading">
                                <img src="<?php echo asset('ajax-loader.gif'); ?>"/>
                                </span>
                            </form>
                            <div class="alert alert-danger" ng-if="response.data.length == 0">
                                No record found
                            </div>
                            <table class="table table-striped" ng-if="response.data.length > 0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tr ng-repeat="model in response.data">
                                    <td class="text-success">{{model.id}}</td>
                                    <td>{{model.name}}</td>
                                    <td>{{model.email}}</td>                                    
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
