<!DOCTYPE html>
<html>
    <head>
        <title>Sports</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
         <div class="container col-md-12">
                                        <div class="jumbotron">
                                            <h1>{{session('header')}}</h1>
                                            <p>other Contents in the header</p>
                                        </div>
                                    </div>


                                    <div class ="container col-md-4">
                                        <h2>Hot Gist <span class="label label-info">New</span></h2>
                                        <h4>{{session('sidebar')}}</h4>
                                    </div>
                                    <div>
                                        <div class="container col-md-8">
                                            <div class="panel panel-info">
                                                <div class="panel-heading">
                                                    <h1 class="panel-title">Main Content</h1>
                                                </div>
                                            <div class="panel-body">
                                                <h4>{{session('main_content')}}</h4>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="container col-md-2"></div>

                                    <div class="container col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3>The Footer</h3>
                                            </div>
                                            <div class="panel-body">
                                                <h5>{{session('footer')}}</h5>
                                            </div>
                                        </div>
                                    </div>
    </body>
</html>
