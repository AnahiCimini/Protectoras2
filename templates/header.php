<!-- header.php -->
<header class="container">
    <div class="row">
        
        <div class="col-2">
            <img alt="logoHeader" class="header-image img-left" src="../public_html/assets/img/perroYgato2.png">
        </div>

        <!-- Contenedor central -->
        <div class="col-8 header_central">

            <div class="container">

                <!-- Menú registros -->
                 <div class="row" id="registro_login">
                    <div class="registerButtons">

                            <?php 
                            // Depurar la sesión para verificar si está disponible
                            var_dump($_SESSION); 
                            ?>

                        <?php if (isset($_SESSION['protectora_id'])): ?>
                            <!-- Si está logueado, mostrar el botón de Logout -->
                            <a href="index.php?page=logout" class="btn btn-dark">Logout</a>
                        <?php else: ?>
                            <!-- Si no está logueado, mostrar los botones de Regístrate y Login -->
                            <a href="index.php?page=registro" class="btn btn-dark">Regístrate</a>
                            <a href="index.php?page=login" class="btn btn-dark">Login</a>
                        <?php endif; ?>
                    </div>
                 </div>

                <!-- Menú principal -->
                <div class="row align-items-center" id="menu_principal">

                    <div class="col-4">
                        <a href="index.php?page=nosotros" class="menu-link">
                            <div id="menu_nosotros" class="menu_lateral">NOSOTROS</div>
                        </a>
                    </div>
                    
                    <div class="col-4" id="menu_home">
                        <a href="index.php?page=home">
                            <img class="img_menu_home" src="../public_html/assets/img/homeImage.png">
                        </a>
                    </div>
                
                    <div class="col-4">
                        <a href="index.php?page=protectora" class="menu-link">
                        <div id="menu_protectoras" class="menu_lateral">PROTECTORAS</div>    
                        </a>
                    </div> 

                </div>
            </div>
        </div>

        <div class="col-2">         
            <img alt="logoHeader" class="header-image img-right" src="../public_html/assets/img/perroYgato2.png">
        </div>
    </div>
</header>