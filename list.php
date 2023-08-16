<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="./assets/img/logo.jpg">
        <!-- css-->
        <link rel="stylesheet" type="text/css" href="./assets/bootstrap/bootstrap5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <!-- script-->
        <script type="text/javascript" src="./assets/js/jquery.js"></script>
        <script type="text/javascript" src="./assets/js/index.js"></script>
        <script type="text/javascript" src="./assets/bootstrap/bootstrap5/js/bootstrap.min.js"></script>
        <!-- bootstrap icons files-->
        <link rel="stylesheet" type="text/css" href="./assets/bootstrap/bootstrap-icons/bootstrap-icons.css">
        
        <link rel="icon" href="./assets/img/icon.png">
        <title>Madagasikara</title>
    </head>
<body>
    <!-- Menu fixed-left-->
    <div class="wrapper d-flex ">
		<div class="sidebar bg-dark">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                <div class="container-md">
                  <a class="navbar-brand text-light">Madagasikara</a>
                </div>
            </nav>
	    </div>
    </div>
    
    <div class="container" id="content-list">
        <div class="col-12">  <!-- conteneur an'izy rehetra mitambatra titre-barre de recherche-tableau-->
                <div class="row">
                    <a href="index.html"><i class="bi bi-arrow-left"> Miverina </i></a>
                </div>
                    <!-- Titre-->
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-xs-12  text-center">
                        <h5>Lisitr'ireo fokontany rehetra mandrafitra an'i Madagasikara</h5>
                    </div>
                </div>

                    <!-- Barre de recherche-->
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-xs-6 offset-lg-4 offset-md-3 offset-xs-3 ">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2"  placeholder="Fokontany / Distrika/Faritra/Faritany" type="search">
                        <button class="btn btn-outline-dark" type="submit"><span class="bi bi-search"></span></button>
                      </form>
                </div>
            </div>

                 <!-- Tableau-->
            <div class="row">
                <div class="col-lg-10 offset-lg-2 col-md-10 offset-md-1">
                    <table class="table table-hover table-bordered " id="tableau">
                
                        <thead class="bg-dark text-light">
                          <tr>
                            <th ></th>
                            <th >
                                <label for="fokontany" class="form-label">Fokontany</label>
                                    <select class="form-select" id="fokontany">
                                        <option  diseabled value=""></option>
                                        <option>Nanisana</option>
                                        <option>Ampasampito</option>
                                        <option>Andraisoro</option>
                                    </select>
                            </th>
                            <th >
                                <label for="distrika" class="form-label">Distrika</label>
                                    <select class="form-select" id="distrika">
                                        <option  diseabled value=""></option>
                                        <option>Antananarivo renivohitra</option>
                                        <option>Avaradrano</option>
                                        <option>Ambohidratrimo</option>
                                    </select>
                            </th>
                            <th >
                                <label for="faritra" class="form-label">Faritra</label>
                                    <select class="form-select" id="faritra">
                                        <option  diseabled value=""></option>
                                        <option>Analamanga</option>
                                        <option>Itasy</option>
                                        <option>Bongolava</option>
                                    </select>
                            </th>
                            <th >
                                <label for="faritany" class="form-label">Faritany</label>
                                    <select class="form-select" id="faritany">
                                        <option  diseabled value=""></option>
                                        <option>Antananarivo</option>
                                        <option>Mahajanga</option>
                                        <option>Antsiranana</option>
                                    </select>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Nanisana</td>
                            <td>Antananarivo renivohitra</td>
                            <td>Analamanga</td>
                            <td>Antananarivo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Nanisana</td>
                            <td>Antananarivo renivohitra</td>
                            <td>Analamanga</td>
                            <td>Antananarivo</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Nanisana</td>
                            <td>Antananarivo renivohitra</td>
                            <td>Analamanga</td>
                            <td>Antananarivo</td>
                          </tr>
    
                        </tbody>
                      </table>
                </div>
            </div>
        </div>


        
        

    </div>
    
</body>
</html>