<div class="titrePage">
    <h2>{'ec_page_title'|@translate}</h2>
</div>
<div style="margin: 10px 0 20px 0; text-align: right;">
    <form method="post" action="{$EC_ACTION}" style="display:inline-block;">
        <input type="submit" name="download_config" value="{'ec_download_btn'|@translate}" 
               style="cursor: pointer; padding: 6px 12px;">
    </form>

    <form method="post" action="{$EC_ACTION}" style="display:inline-block; margin-left: 10px;" 
          onsubmit="return confirm('{'ec_delete_confirm'|@translate|escape:'javascript'}');">
        <input type="submit" name="delete_all_config" value="{'ec_delete_btn'|@translate}" 
               style="cursor: pointer; padding: 6px 12px; background-color: #d9534f; color: white; border: 1px solid #d43f3a;">
    </form>
</div>
<form method="post" action="{$EC_ACTION}" class="properties" style="padding-bottom:100px">
<div style="padding: 15px;">
    <p style="text-align: left">
        {'ec_intro'|@translate}<br>
        {'ec_save_path'|@translate}<br>
        {'ec_input_hint'|@translate}<br>
        {'ec_note'|@translate}
    </p>
</div>

{foreach from=$parsed_items item=item}
    <fieldset style="margin-bottom: 20px; border: 1px solid #eee; padding: 10px;">
        <legend style="font-weight:bold; font-size: 1.2em; color: #d54e21;">$conf['{$item.key}']</legend>
        
        <div style="color: #666; margin-bottom: 10px; line-height: 1.5em; font-style: italic;">
            {$item.description|default:"No description available."}
        </div>

        <div class="menuLi" style=" padding: 10px;">
            <label>
                <strong>{'ec_value_label'|@translate}</strong>
                <br>
                <input type="text" 
                       name="conf[{$item.key}]" 
                       value="{$item.current_value|escape:'html'}" 
                       style="width: 100%; padding: 5px; font-family: monospace;"
                       placeholder="Default: {$item.default_raw|escape:'html'}">
            </label>
            
            <div style="margin-top: 5px; font-size: 0.9em; color: #888;">
                {'ec_default_ref'|@translate} <code>{$item.default_raw|escape:'html'}</code>
            </div>
            
            {if $item.is_customized}
            <div style="margin-top: 5px; color: green;">
                <label>
                    <input type="checkbox" name="use_default[{$item.key}]" value="1"> 
                    {'ec_revert_label'|@translate}
                </label>
            </div>
            {/if}
        </div>
    </fieldset>
{/foreach}
<div class="savebar-footer">
    <div style="margin-left: auto;">
        <input class="submit" type="submit" name="save_config" value="{'ec_save_btn'|@translate}">
    </div>
</div>
</form>