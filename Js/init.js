function init_tinymce(selector, language)
{
    if (selector === undefined)
    {
        selector = '.editor';
    }
    
    if (language === undefined)
    {
        language = 'en';
    }

    tinymce.init({
        selector: selector,
        language: language,
        toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code',
        plugins: 'code',
        br_in_pre: false
    });
}