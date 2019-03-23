<?php
/* Smarty version 3.1.33, created on 2019-02-10 22:24:28
  from '/home/greebpot/Greenlubos.lt/manager/templates/default/element/tv/renders/input/richtext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c607a6c73ffc4_33676359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '706b2a3548b2e5e8b9e05acd9de8f2e4062c5683' => 
    array (
      0 => '/home/greebpot/Greenlubos.lt/manager/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1546722325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c607a6c73ffc4_33676359 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
