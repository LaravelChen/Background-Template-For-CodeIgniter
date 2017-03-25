<script src="<?= base_url().'resource/editormd/js/editormd.js' ?>"></script>
<script src="<?= base_url().'resource/editormd/lib/marked.min.js' ?>"></script>
<script src="<?= base_url().'resource/editormd/lib/prettify.min.js' ?>"></script>
<script src="<?= base_url().'resource/editormd/lib/raphael.min.js' ?>"></script>
<script src="<?= base_url().'resource/editormd/lib/underscore.min.js' ?>"></script>
<script src="<?= base_url().'resource/editormd/lib/sequence-diagram.min.js' ?>"></script>
<script src="<?= base_url().'resource/editormd/lib/flowchart.min.js' ?>"></script>
<script src="<?= base_url().'resource/editormd/lib/jquery.flowchart.min.js' ?>"></script>
<script>
    var testEditor;
    $(function () {
        editormd.emoji = {
            path: "//staticfile.qnssl.com/emoji-cheat-sheet/1.0.0/",
            ext: ".png"
        };
        testEditor = editormd({
            id: "editormd_id",
            width: '100%',
            height: 700,
            theme: 'default',
            editorTheme: 'default',
            previewTheme: 'default',
            path: "<?= base_url().'resource/editormd/lib/'?>",
            codeFold: true,
            saveHTMLToTextarea: true,
            searchReplace: true,
            emoji: true,
            taskList: true,
            tocm: true,
            tex: true,
            flowChart: true,
            sequenceDiagram: true,
            imageUpload: true,
            imageFormats: ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
            imageUploadURL: "<?= base_url().'resource/uploads/images/'?>",
        });
    })
</script>