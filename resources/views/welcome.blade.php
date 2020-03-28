<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e54caa3a0d7d80012338dfa&product=inline-share-buttons' async='async'></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div id="wrapper">

            <div id="content-wrapper" class="d-flex flex-column">

                <div id="content">

                    <div class="container-fluid">

                        <div class="bg-info text-white shadow">

                            <div class="card-body">

                                <marquee behavior="" direction="left">Data Covid-19 Indonesia per tanggal {{ Carbon\Carbon::now() }}</marquee>
                 
                            </div>
              
                        </div>
            
                        <div class="row" style="margin-top: 20px">    
           
                            @foreach ($datacorona as $c)   

                            <div class="col-xl-4 col-md-6 mb-4">

                                <div class="card border-left-primary shadow h-100 py-2">

                                    <div class="card-body">

                                        <div class="row no-gutters align-items-center">

                                            <div class="col mr-2">

                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Positif</div>

                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $c['positif'] }}</div>

                                            </div>

                                            <div class="col-auto">

                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xl-4 col-md-6 mb-4">

                                <div class="card border-left-success shadow h-100 py-2">

                                    <div class="card-body">

                                        <div class="row no-gutters align-items-center">

                                            <div class="col mr-2">

                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sembuh</div>

                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $c['sembuh'] }} </div>

                                            </div>

                                            <div class="col-auto">

                                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xl-4 col-md-6 mb-4">

                                <div class="card border-left-warning shadow h-100 py-2">

                                    <div class="card-body">

                                        <div class="row no-gutters align-items-center">

                                            <div class="col mr-2">

                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Meninggal</div>

                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $c['meninggal'] }} </div>

                                            </div>

                                            <div class="col-auto">

                                                <i class="fas fa-comments fa-2x text-gray-300"></i>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            @endforeach

                        </div>

                        <table class="table">

                            <thead class="bg-info text-white shadow">

                                <tr>

                                    <th scope="col">No</th>

                                    <th scope="col">Provinsi</th>

                                    <th scope="col">Positif</th>

                                    <th scope="col">Sembuh</th>

                                    <th scope="col">Meninggal</th>

                                </tr>

                            </thead>

                            <tbody>

                            @php
                                $no = 0;
                            @endphp
                    
                            @foreach ($data as $datas)   
                     
                            <tr>
                     
                                <th scope="row">{{++$no}}</th>
                     
                                <td>{{ $datas['attributes']['Provinsi'] }}</td>
                     
                                <td>{{ $datas['attributes']['Kasus_Posi'] }}</td>
                     
                                <td>{{ $datas['attributes']['Kasus_Semb'] }}</td>
                     
                                <td>{{ $datas['attributes']['Kasus_Meni'] }}</td>
                     
                            </tr>
                    
                            @endforeach 
                    
                        </tbody>
                  
                    </table>     
    
                </div>   
                
                <br>

                {{-- {!! $chart->container() !!}

                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
                {!! $chart->script() !!} --}}

                <div class="sharethis-inline-reaction-buttons"></div>

            </div>

        </div>

    </div>

</body>

</html>
