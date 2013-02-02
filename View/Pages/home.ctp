<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<ul>
	<li>
		<?php echo $this->Html->link(__('Show All Users'), array('controller' => 'users', 'action'=>'index')); ?>
	</li>
	<li>
		<?php echo $this->Html->link(__('Show All Books'), array('controller' => 'books', 'action'=>'index')); ?>
	</li>
	<li>
		<?php echo $this->Html->link(__('Show All Catagories'), array('controller' => 'categories', 'action'=>'index')); ?>		
	</li>
	<li>
		<?php echo $this->Html->link(__('Show All Loans'), array('controller' => 'loans', 'action'=>'index')); ?>
	</li>
</ul>