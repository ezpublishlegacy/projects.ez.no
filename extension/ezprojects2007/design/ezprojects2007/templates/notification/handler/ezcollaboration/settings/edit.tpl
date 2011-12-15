{* DO NOT EDIT THIS FILE! Use an override template instead. *}
{let handlers=$handler.collaboration_handlers
     selection=$handler.collaboration_selections}

<div class="block">
<fieldset>
    <legend>{"Collaboration notification"|i18n("design/admin/notification/collaboration")}</legend>

<p>{"Choose which collaboration items you wish to get notifications for."|i18n("design/admin/notification/collaboration")}</p>

<input type="hidden" name="CollaborationHandlerSelection" value="1" />

{section name=Handlers loop=$handlers}
    {let types=$:item.notification_types}
        {section show=or($:types,$:types|gt(0))}
            {section show=is_array($:types)}
                        <h3>{$:item.info.type-name|wash}</h3>
                {section name=Types loop=$:types}
                <label><input type="checkbox" name="CollaborationHandlerSelection_{$handler.id_string}[]"
                                                     value="{$Handlers:item.info.type-identifier}_{$:item.value}"
                                                     {section show=$selection|contains(concat($Handlers:item.info.type-identifier,'_',$:item.value))}checked="checked"{/section} />
{$:item.name|wash}</label>
                {/section}
            {section-else}
               <label><input type="checkbox" name="CollaborationHandlerSelection_{$handler.id_string}[]"
                                                 value="{$Handlers:item.info.type-identifier}"
                                                 {section show=$selection|contains($Handlers:item.info.type-identifier)}checked="checked"{/section} />
{$:item.info.type-name|wash}</label>

            {/section}

        {section-else}

        {/section}
    {/let}
{/section}
</fieldset>
</div>
{/let}