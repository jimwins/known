<li <?php if ($_SERVER['REQUEST_URI'] == '/admin/styles/') echo 'class="active"'; ?>><a href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL()?>admin/styles/"><?php echo \Idno\Core\Idno::site()->language()->_('Custom CSS'); ?></a></li>