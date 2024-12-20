<?php
    require_once PROJECT_ROOT . '/config/config.php';
?>

<?php if (isset($error)) : ?>
    <div class="alert alert-danger">
        <?= htmlspecialchars($error) ?>
    </div>
<?php endif; ?>

<form class="container mt-4" id="registro_protectora" action="<?php echo BASE_URL; ?>router.php?action=register" method="POST" autocomplete="on">
 
<!-- Nombre de la protectora -->
    <div class="row mb-3 align-items-center">
        <label for="nombre_protectora" class="col-4 col-form-label">Nombre de la Protectora <span class="text-danger">*</span></label>
        <div class="col-8">
        <input type="text" class="form-control" id="nombre_protectora" name="nombre_protectora" autocomplete="organization" required>
        </div>
    </div>

    <!-- Email -->
    <div class="row mb-3 align-items-center">
        <label for="email" class="col-4 col-form-label">Email <span class="text-danger">*</span></label>
        <div class="col-7">
            <input type="email" class="form-control" id="email" name="email" autocomplete="email" required>
        </div>
        <div class="col-1 d-flex justify-content-center align-items-center">
            <div class="col-1 d-flex flex-column justify-content-center align-items-center">
                <label class="form-check-label" for="email_visible">Visible</label>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="email_visible" name="email_visible" checked>
                </div>
            </div>
        </div>
    </div>

    <!-- Teléfono -->
    <div class="row mb-3 align-items-center">
        <label for="telefono" class="col-4 col-form-label">Teléfono</label>
        <div class="col-8">
            <input type="tel" class="form-control" id="telefono" name="telefono" autocomplete="tel">
        </div>
    </div>

    <!-- Dirección -->
    <div class="row mb-3 align-items-center">
        <label for="direccion" class="col-4 col-form-label">Dirección</label>
        <div class="col-8">
            <input type="text" class="form-control" id="direccion" name="direccion" autocomplete="street-address">
        </div>
    </div>

    <!-- Provincia (condicional) -->
    <div class="row mb-3 align-items-center">
        <label for="provincias" class="col-4 col-form-label">Provincia<span class="text-danger">*</span></label>
        <div class="col-8">
            <select class="form-select" id="provincias" name="provincias" autocomplete="off" required>
                <option value="">Selecciona una Provincia</option>
                <?php foreach ($provincias as $rowProvincia): ?>
                    <option value="<?= $rowProvincia['id_provincia'] ?>"><?= $rowProvincia['nombre_provincia'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <!-- Población -->
    <div class="row mb-3 align-items-center">
        <label for="poblacion" class="col-4 col-form-label">Población<span class="text-danger">*</span></label>
        <div class="col-8">
            <input type="text" class="form-control" id="poblacion" name="poblacion" autocomplete="address-level2" required>
        </div>
    </div>

    <!-- Sitio web -->
    <div class="row mb-3 align-items-center">
        <label for="web" class="col-4 col-form-label">Sitio Web</label>
        <div class="col-8">
            <input type="url" class="form-control" id="web" name="web" placeholder="https://" autocomplete="url">
        </div>
    </div>

    <!-- Logo 
    <div class="row mb-3 align-items-center">
        <label for="logo" class="col-4 col-form-label">Logo</label>
        <div class="col-8">
            <input type="file" class="form-control" id="logo" name="logo" accept="image/*" autocomplete="off">
        </div>
    </div>
    -->

    <div class="row mb-3 align-items-center">
        <label for="password" class="col-4 col-form-label">Contraseña</label>
        <div class="col-8">
            <input type="password" class="form-control" id="password" name="password" placeholder="Introduce tu contraseña" autocomplete="new-password">
        </div>
    </div>

    <div class="row mb-3 align-items-center">
        <label for="confirm_password" class="col-4 col-form-label">Verifica Contraseña</label>
        <div class="col-8">
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Repite tu contraseña" autocomplete="new-password">
        </div>
    </div>
    
    <!-- Botón de Enviar -->
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary">Registrar Protectora</button>
    </div>

</form>
<script src="<?php echo BASE_URL; ?>assets/js/registroScript.js"></script>