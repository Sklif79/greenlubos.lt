<input id="tv{$tv->id}" name="tv{$tv->id}" type="hidden" value="{$tv->get('default_text')|escape}" />

<script type="text/javascript">
// <![CDATA[
{literal}
MODx.on('ready',function() {
    var fld = MODx.load({
    {/literal}
        xtype: 'hidden'
        ,applyTo: 'tv{$tv->id}'
        ,value: '{$tv->get('default_text')|escape:'javascript'}'
    {literal}
    });
    var p = Ext.getCmp('modx-panel-resource');
    if (p) {
        p.add(fld);
        p.doLayout();
    }
});
{/literal}
// ]]>
</script>
