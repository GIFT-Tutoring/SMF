// <script>
require = {
    "baseUrl": "http://35.165.66.205/cache/1520459017/default/",
    "paths": [],
    "shim": {
        "jquery.ui.autocomplete.html": {
            "deps": [
                "jquery-ui"
            ]
        },
        "ckeditor": {
            "deps": [
                "elgg/ckeditor/set-basepath"
            ],
            "exports": "CKEDITOR"
        },
        "jquery.ckeditor": {
            "deps": [
                "jquery",
                "ckeditor"
            ],
            "exports": "jQuery.fn.ckeditor"
        }
    },
    "waitSeconds": 20
};

