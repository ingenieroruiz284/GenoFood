<ul class="rst-main-menu">
        <li class="current-menu-item"><a href="<?php echo url('/') ?>/index.html">Inicio</a></li>
        <li class="menu-item-has-children">
            <a href="<?php echo url('/') ?>/#">Secciones</a>
            <ul class="sub-menu">
                <li><a href="<?php echo url('/') ?>/about.html">Acerca de</a></li>
                <li><a href="<?php echo url('/') ?>/products_list.html">Tienda</a></li>
            </ul>
        </li>
        <li><a href="<?php echo url('/') ?>/comensal/list">Comensales</a></li>
        <li><a href="<?php echo url('/') ?>/cocinero/list">Cocineros</a></li>
        <li><a href="<?php echo url('/') ?>/contact.html">Contacto</a></li>
        <li class="menu-item-has-children">
            <a href="<?php echo url('/') ?>/#">Iniciar sesion</a>
            <div class="sub-menu rst-form-login">
                <form action="/">
                    <div class="input-group">
                        <span class="input-group-addon"><img src="<?php echo url('/') ?>/img/mail.png" alt="" /></span>
                        <input class="form-control" type="email" placeholder="Tu Email" />
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><img src="<?php echo url('/') ?>/img/unlock.png" alt="" /></span>
                        <input class="form-control" type="password" name="password" placeholder="Contraseña" />
                    </div>
                    <input type="submit" class="btn btn-success" value="LOg in" />
                </form>
            </div>
        </li>
    </ul>