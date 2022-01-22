<?php /* Smarty version 2.6.19, created on 2011-08-14 11:58:39
         compiled from adminusers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'adminusers.tpl', 108, false),array('function', 'paginate_prev', 'adminusers.tpl', 146, false),array('function', 'paginate_middle', 'adminusers.tpl', 146, false),array('function', 'paginate_next', 'adminusers.tpl', 146, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-admin.tpl", 'smarty_include_vars' => array('usertab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content-left">
<div id="content-left-in">
<div class="user">

	<div class="infowin_left" style = "display:none;" id = "systemmsg">
		<?php if ($this->_tpl_vars['mode'] == 'deleted'): ?>
		<span class="info_in_red"><img src="templates/standard/images/symbols/userlist.png" alt=""/><?php echo $this->_config[0]['vars']['userwasdeleted']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'added'): ?>
		<span class="info_in_green"><img src="templates/standard/images/symbols/userlist.png" alt=""/><?php echo $this->_config[0]['vars']['userwasadded']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'roleadded'): ?>
		<span class="info_in_green"><img src="templates/standard/images/symbols/userlist.png" alt=""/><?php echo $this->_config[0]['vars']['roleadded']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'roleedited'): ?>
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/userlist.png" alt=""/><?php echo $this->_config[0]['vars']['roleedited']; ?>
</span>
		<?php elseif ($this->_tpl_vars['mode'] == 'edited'): ?>
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/userlist.png" alt=""/><?php echo $this->_config[0]['vars']['userwasedited']; ?>
</span>
        <?php elseif ($this->_tpl_vars['mode'] == "de-assigned"): ?>
		<span class="info_in_yellow"><img src="templates/standard/images/symbols/userlist.png" alt=""/><?php echo $this->_config[0]['vars']['permissionswereedited']; ?>
</span>
		<?php endif; ?>
	</div>
	<?php echo '
	<script type = "text/javascript">
	systemMsg(\'systemmsg\');
	 </script>
	'; ?>


<h1><?php echo $this->_config[0]['vars']['administration']; ?>
<span>/ <?php echo $this->_config[0]['vars']['useradministration']; ?>
</span></h1>

	<div class="headline">
				<a href="javascript:void(0);" id="block_files_toggle" class="win_block" onclick = "toggleBlock('block_files');"></a>

				<div class="wintools">
					<?php if ($this->_tpl_vars['userpermissions']['admin']['add']): ?>
					<a class="add" href="javascript:blindtoggle('form_member');" id="addmember" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_member','butn_link_active','butn_link');toggleClass('sm_member','smooth','nosmooth');"><span><?php echo $this->_config[0]['vars']['adduser']; ?>
</span></a>
					<?php endif; ?>
				</div>

				<h2>
					<img src="./templates/standard/images/symbols/userlist.png" alt="" /><?php echo $this->_config[0]['vars']['useradministration']; ?>

				</h2>

			</div>

			<div id="block_files" class="blockwrapper">
								<?php if ($this->_tpl_vars['userpermissions']['admin']['add']): ?>
					<div id = "form_member" class="addmenue" style = "display:none;">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "adduserform.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</div>
				<?php endif; ?>

				<div class="nosmooth" id="sm_member">
					<div class="contenttitle">
						<div class="contenttitle_menue">
													</div>
						<div class="contenttitle_in">
													</div>
					</div>
					<div class="content_in_wrapper">
					<div class="content_in_wrapper_in">


						<div class="inwrapper">
							<ul>
							<?php unset($this->_sections['user']);
$this->_sections['user']['name'] = 'user';
$this->_sections['user']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['user']['show'] = true;
$this->_sections['user']['max'] = $this->_sections['user']['loop'];
$this->_sections['user']['step'] = 1;
$this->_sections['user']['start'] = $this->_sections['user']['step'] > 0 ? 0 : $this->_sections['user']['loop']-1;
if ($this->_sections['user']['show']) {
    $this->_sections['user']['total'] = $this->_sections['user']['loop'];
    if ($this->_sections['user']['total'] == 0)
        $this->_sections['user']['show'] = false;
} else
    $this->_sections['user']['total'] = 0;
if ($this->_sections['user']['show']):

            for ($this->_sections['user']['index'] = $this->_sections['user']['start'], $this->_sections['user']['iteration'] = 1;
                 $this->_sections['user']['iteration'] <= $this->_sections['user']['total'];
                 $this->_sections['user']['index'] += $this->_sections['user']['step'], $this->_sections['user']['iteration']++):
$this->_sections['user']['rownum'] = $this->_sections['user']['iteration'];
$this->_sections['user']['index_prev'] = $this->_sections['user']['index'] - $this->_sections['user']['step'];
$this->_sections['user']['index_next'] = $this->_sections['user']['index'] + $this->_sections['user']['step'];
$this->_sections['user']['first']      = ($this->_sections['user']['iteration'] == 1);
$this->_sections['user']['last']       = ($this->_sections['user']['iteration'] == $this->_sections['user']['total']);
?>
								<li>
									<div class="itemwrapper" id="iw_<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
">

											<table cellpadding="0" cellspacing="0" border="0">
												<tr>
													<td class="leftmen" valign="top">
														<div class="inmenue">
															<?php if ($this->_tpl_vars['users'][$this->_sections['user']['index']]['avatar'] != ""): ?>
																<a class="more" href="javascript:fadeToggle('info_<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
');"></a>
															<?php endif; ?>
														</div>
													</td>
													<td class="thumb">
														<a href="manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
" title="<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['name']; ?>
">
															<?php if ($this->_tpl_vars['users'][$this->_sections['user']['index']]['gender'] == 'f'): ?>
																<img src = "./templates/standard/images/symbols/user-icon-female.png" alt="" />
															<?php else: ?>
																<img src = "./templates/standard/images/symbols/user-icon-male.png" alt="" />
															<?php endif; ?>
														</a>
													</td>
													<td class="rightmen" valign="top">
														<div class="inmenue">

														<?php if ($this->_tpl_vars['users'][$this->_sections['user']['index']]['ID'] != $this->_tpl_vars['userid']): ?>
															<a class="edit" href="admin.php?action=editform&amp;id=<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
															<a class="del" href="javascript:confirmit('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','admin.php?action=deleteuserform&amp;id=<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
');" title="<?php echo $this->_config[0]['vars']['delete']; ?>
"></a>
														<?php else: ?>
															<a class="edit" href="admin.php?action=editform&amp;id=<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
														<?php endif; ?>
														</div>
													</td>
												</tr>
												<tr>
													<td colspan="3">
														<span class="name">
															<a href = "manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
" title="<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['name']; ?>
">
																<?php if ($this->_tpl_vars['users'][$this->_sections['user']['index']]['name'] != ""): ?>
																	<?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['user']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 13, "...", true) : smarty_modifier_truncate($_tmp, 13, "...", true)); ?>

																<?php else: ?>
																	<?php echo $this->_config[0]['vars']['user']; ?>

																<?php endif; ?>
															</a>
														</span>
													</td>
												</tr>
											</table>

											<?php if ($this->_tpl_vars['users'][$this->_sections['user']['index']]['avatar'] != ""): ?>
											<div class="moreinfo-wrapper">
												<div class="moreinfo" id="info_<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
" style="display:none">
													<img src = "thumb.php?pic=files/<?php echo $this->_tpl_vars['cl_config']; ?>
/avatar/<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['avatar']; ?>
&amp;width=82" alt="" onclick="fadeToggle('info_<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
');" />
													<span class="name"><a href="manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['user']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...", true) : smarty_modifier_truncate($_tmp, 15, "...", true)); ?>
</a></span>
												</div>
											</div>
											<?php endif; ?>

									</div> 								</li>
							<?php endfor; endif; ?> 
							</ul>
						</div> 


			</div> 
			</div> 

			<div class="staterow">
				<div class="staterowin">
					
				</div>
					<div class="staterowin_right"> <span ><?php echo $this->_tpl_vars['langfile']['page']; ?>
 <?php echo smarty_function_paginate_prev(array(), $this);?>
 <?php echo smarty_function_paginate_middle(array(), $this);?>
 <?php echo smarty_function_paginate_next(array(), $this);?>
</span></div>
			</div>


			</div> 			<div class="tablemenue">
					<div class="tablemenue-in">
						<?php if ($this->_tpl_vars['userpermissions']['admin']['add']): ?>
						<a class="butn_link" href="javascript:blindtoggle('form_member');" id="add_butn_member" onclick="toggleClass(this,'butn_link_active','butn_link');toggleClass('addmember','add-active','add');toggleClass('sm_member','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['adduser']; ?>
</a>
						<?php endif; ?>
					</div>
			</div>
			</div> 
	<div class="content-spacer"></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rolesadmin.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

				<div class="tablemenue">
					<div class="tablemenue-in">
						<?php if ($this->_tpl_vars['userpermissions']['admin']['add']): ?>
						<a class="butn_link" href="javascript:blindtoggle('form_addmyroles');" id="add_butn_myprojects" onclick="toggleClass('addrolelink','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['addrole']; ?>
</a>
						<?php endif; ?>


					</div>
				</div>

		</div> 
<?php echo '
	<script type = "text/javascript">
		var accord_roles = new accordion(\'acc-roles\');
	</script>
	'; ?>


<div class="content-spacer"></div>

</div> </div> 
</div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar-a.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>