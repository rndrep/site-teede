<?php

use assets\src\admin\widgets\Alert;

?>
<div class="content-wrapper">

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>

<footer class="main-footer">
    
  <!--   <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
    </div> -->

    <div class="footer-text">
	    <strong>Copyright &copy; <?= date('Y') ?> <a href="http://tpu.ru">Tomsk Polytechnic University</a></strong>
	    All rights reserved.</br>
	    Разработка и поддержка: Центр «Электронный университет»
	</div>

	<!-- <div class="version">
        <b>Version</b> 2.0
    </div> -->

</footer>

