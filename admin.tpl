<style>
.easyconfig_input {
    padding: 4px;
}

.easyconfig_input_text,
.easyconfig_input_textarea {
    width: 100%;
    box-sizing: border-box;
}

.easyconfig_code {
    word-break: break-all;
}
</style>

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
        {'ec_intro'|@translate} {'ec_save_path'|@translate}<br>
        {'ec_note'|@translate}
    </p>
</div>

{foreach from=$parsed_items item=item}
    <fieldset style="margin-bottom: 20px; border: 1px solid #eee; padding: 10px;">
        <legend style="font-weight:bold; font-size: 1.2em; color: #d54e21;">
            $conf['{$item.key}'] 
            <span style="font-size:0.6em; color:#999; font-weight:normal;">({$item.type})</span>
        </legend>
        
        <div style="color: #666; margin-bottom: 10px; line-height: 1.5em; font-style: italic;">
            {$item.description|default:"No description available."}
        </div>

        <div class="menuLi" style="padding: 10px;">
            <input type="hidden" name="conf_type[{$item.key}]" value="{$item.type}">
            
            <strong>{'ec_value_label'|@translate}</strong><br>

            {if $item.type == 'bool'}
                <div style="margin: 5px 0;">
                    <label style="margin-right: 15px;">
                        <input type="radio" name="conf[{$item.key}]" value="true" {if $item.current_value == 'true'}checked{/if}> TRUE
                    </label>
                    <label>
                        <input type="radio" name="conf[{$item.key}]" value="false" {if $item.current_value == 'false'}checked{/if}> FALSE
                    </label>
                </div>

            {elseif $item.type == 'number'}
                <input class="easyconfig_input easyconfig_input_number"
                       type="text" name="conf[{$item.key}]" 
                       value="{$item.current_value|escape:'html'}" 
                       placeholder="Default: {$item.default_raw|escape:'html'}">

            {elseif $item.type == 'php'}
                <textarea class="easyconfig_input easyconfig_input_textarea"
                          name="conf[{$item.key}]" rows="4" 
                          placeholder="Default: {$item.default_raw|escape:'html'}"
                >{$item.current_value|escape:'html'}</textarea>

            {else}
                <input class="easyconfig_input easyconfig_input_text"
                       type="text" name="conf[{$item.key}]" 
                       value="{$item.current_value|escape:'html'}" 
                       placeholder="Default: {$item.default_raw|escape:'html'}">
            {/if}
            
            <div style="margin-top: 5px; font-size: 0.9em; color: #888;">
                {'ec_default_ref'|@translate} <code class="easyconfig_code">{$item.default_raw|escape:'html'}</code>
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