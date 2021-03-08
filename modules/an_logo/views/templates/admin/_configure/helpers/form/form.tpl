{*
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2018 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{extends file="helpers/form/form.tpl"}
{block name="field"}
    {if $input.type == 'file_image'}
        <div class="col-lg-9">
            <div class="form-group">
                <div class="col-lg-6">
                    <input id="{$input.name}" type="file" name="{$input.name}" class="hide" />
                    <div class="dummyfile input-group">
                        <span class="input-group-addon"><i class="icon-file"></i></span>
                        <input id="{$input.name}-name" type="text" class="disabled" name="filename" readonly />
                        <span class="input-group-btn">
                        <button id="{$input.name}-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
                            <i class="icon-folder-open"></i> {l s='Choose a file' d='Modules.Banner.Shop'}
                        </button>
                        <button id="{$input.name}-deletebutton" type="button" onclick="" name="submitDeleteAttachments" class="btn btn-danger">
                            <i class="icon-remove-sign"></i> Delete
                        </button>
                    </span>
                    </div>
                    <p class="help-block">
                        Allowed formats are: .gif, .jpg, .png
                    </p>
                </div>
            </div>
            <div class="form-group">
                {if isset($fields_value[$input.name]) && $fields_value[$input.name] != ''}
                    <div id="{$input.name}-images-thumbnails" class="col-lg-12">
                        <img src="{$uri}img/{$fields_value[$input.name]}" class="img-thumbnail" style="height: 150px; width: 150px;"/>
                    </div>
                {/if}
            </div>
            {if isset($input.desc) && !empty($input.desc)}
                <p class="help-block">
                    {$input.desc}
                </p>
            {/if}
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#{$input.name}-deletebutton').click(function(e) {
                    $('#{$input.name}-name').val('delete');
                    this.form.submit();
                });
                $('#{$input.name}-selectbutton').click(function(e) {
                    $('#{$input.name}').trigger('click');
                });

                $('#{$input.name}-name').click(function(e) {
                    $('#{$input.name}').trigger('click');
                });

                $('#{$input.name}-name').on('dragenter', function(e) {
                    e.stopPropagation();
                    e.preventDefault();
                });

                $('#{$input.name}-name').on('dragover', function(e) {
                    e.stopPropagation();
                    e.preventDefault();
                });

                $('#{$input.name}-name').on('drop', function(e) {
                    e.preventDefault();
                    var files = e.originalEvent.dataTransfer.files;
                    $('#{$input.name}')[0].files = files;
                    $(this).val(files[0].name);
                });

                $('#{$input.name}').change(function(e) {
                    if ($(this)[0].files !== undefined)
                    {
                        var files = $(this)[0].files;
                        var name  = '';

                        $.each(files, function(index, value) {
                            name += value.name+', ';
                        });

                        $('#{$input.name}-name').val(name.slice(0, -2));
                    }
                    else // Internet Explorer 9 Compatibility
                    {
                        var name = $(this).val().split(/[\\/]/);
                        $('#{$input.name}-name').val(name[name.length-1]);
                    }
                });

                if (typeof {$input.name}_max_files !== 'undefined')
                {
                    $('#{$input.name}').closest('form').on('submit', function(e) {
                        if ($('#{$input.name}')[0].files.length > {$input.name}_max_files) {
                            e.preventDefault();
                        }
                    });
                }
            });
        </script>
    {else}
        {$smarty.block.parent}
    {/if}
{/block}
