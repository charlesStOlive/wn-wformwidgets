<div
    id="<?= $this->getId() ?>"
    class="field-wakaupload style-file-multi is-sortable is-multi <?= count($fileList) ? 'is-populated' : '' ?> <?= $this->previewMode ? 'is-preview' : '' ?>"
    data-control="wakaupload"
    data-upload-handler="<?= $this->getEventHandler('onUpload') ?>"
    data-template="#<?= $this->getId('template') ?>"
    data-error-template="#<?= $this->getId('errorTemplate') ?>"
    data-sort-handler="<?= $this->getEventHandler('onSortAttachments') ?>"
    data-max-filesize="<?= $maxFilesize ?>"
    <?php if ($useCaption): ?>
        data-config-handler="<?= $this->getEventHandler('onLoadAttachmentConfig') ?>"
    <?php endif ?>
    <?php if ($acceptedFileTypes): ?>
        data-file-types="<?= $acceptedFileTypes ?>"
    <?php endif ?>
    <?= $this->formField->getAttributes() ?>
>

    <!-- Upload Button -->
    <button type="button" class="btn btn-sm btn-secondary wn-icon-upload upload-button">
        <?= $prompt ?>
    </button>

    <!-- Existing files -->
    <div class="upload-files-container">
        <?php foreach ($fileList as $file): ?>
            <div class="upload-object is-success" data-id="<?= $file->id ?>" data-path="<?= $file->pathUrl ?>">
                <div class="icon-container">
                    <i class="icon-file"></i>
                </div>
                <div class="info">
                    <h4 class="filename">
                        <span data-dz-name><?= e($file->title ?: $file->file_name) ?></span>
                        <a
                            href="javascript:;"
                            class="upload-remove-button"
                            data-request="<?= $this->getEventHandler('onRemoveAttachment') ?>"
                            data-request-confirm="<?= e(trans('waka.wformwidgets::lang.wakaupload.remove_confirm')) ?>"
                            data-request-data="file_id: <?= $file->id ?>"
                            ><i class="icon-times"></i></a>
                    </h4>
                    <p class="size"><?= e($file->sizeToString()) ?></p>
                </div>
                <div class="meta">
                    <a href="javascript:;" class="drag-handle"><i class="icon-bars"></i></a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<!-- Template for new files -->
<script type="text/template" id="<?= $this->getId('template') ?>">
    <div class="upload-object dz-preview dz-file-preview">
        <div class="icon-container">
            <i class="icon-file"></i>
            <img data-dz-thumbnail alt="" />
        </div>
        <div class="info">
            <h4 class="filename">
                <span data-dz-name></span>
                <a
                    href="javascript:;"
                    class="upload-remove-button"
                    data-request="<?= $this->getEventHandler('onRemoveAttachment') ?>"
                    data-request-confirm="<?= e(trans('waka.wformwidgets::lang.wakaupload.remove_confirm')) ?>"
                    ><i class="icon-times"></i></a>
            </h4>
            <p class="size" data-dz-size></p>
        </div>
        <div class="meta">
            <a href="javascript:;" class="drag-handle"><i class="icon-bars"></i></a>
            <div class="progress-bar"><span class="upload-progress" data-dz-uploadprogress></span></div>
            <div class="error-message"><span data-dz-errormessage></span></div>
        </div>
    </div>
</script>
