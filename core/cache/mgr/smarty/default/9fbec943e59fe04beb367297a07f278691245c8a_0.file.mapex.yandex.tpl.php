<?php
/* Smarty version 3.1.33, created on 2019-02-20 14:02:14
  from '/home/greebpot/Greenlubos.lt/core/components/mapex/tv/input/tpl/mapex.yandex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6d33b64186c4_16173391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fbec943e59fe04beb367297a07f278691245c8a' => 
    array (
      0 => '/home/greebpot/Greenlubos.lt/core/components/mapex/tv/input/tpl/mapex.yandex.tpl',
      1 => 1522315178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6d33b64186c4_16173391 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mapex-map-wrapper">
  <div id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
Map" class="mapex-map"></div>
  <div class="mapex-marker"></div>
</div>

<input type="text" id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
" class="textfield"  />

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function(){
   var fld = MODx.load({

    xtype: 'textfield'
    ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
    ,width: '99%'
    ,id: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
    ,enableKeyEvents: true
    ,allowBlank: true
    ,value: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
'

    ,listeners: { 'change': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
    MODx.makeDroppable(fld);
});

// ]]>
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">

if(Mapex == undefined){
  var Mapex = {};
}
 
Ext.onReady(function(){
  ymaps.ready(function() {
    // Initialize layouts
    Mapex.initLayouts();
    
    // Create new map
    
    var map = new Mapex.MapexMap('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
Map', 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
', '<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
');
    
    map.enableControls();
    // Enable plugins
    map.enableTools();
  });
});

<?php echo '</script'; ?>
><?php }
}
