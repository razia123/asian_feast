FilePond.registerPlugin(FilePondPluginImagePreview);

function filepondImage(imageId) {
    FilePond.create(imageId, {
        labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
        imagePreviewHeight: 270,
        imageCropAspectRatio: "1:1",
        imageResizeTargetWidth: 200,
        imageResizeTargetHeight: 200,
        styleLoadIndicatorPosition: "center bottom",
        styleProgressIndicatorPosition: "right bottom",
        styleButtonRemoveItemPosition: "center bottom",
        styleButtonProcessItemPosition: "right bottom",
        storeAsFile: true,
        allowReorder: true,
    });
}