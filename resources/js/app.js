import './bootstrap';

$('a[href$="#Modal"]').on( "click", function() {
    $('#Modal').modal('show');
});


// Auto-Grow-TextArea script.
// Script copyright (C) 2011 www.cryer.co.uk.
// Script is free to use provided this copyright header is included.
function AutoGrowTextArea(textField)
{
    if (textField.clientHeight < textField.scrollHeight)
{
    textField.style.height = textField.scrollHeight + "px";
    if (textField.clientHeight < textField.scrollHeight)
{
    textField.style.height =
    (textField.scrollHeight * 2 - textField.clientHeight) + "px";
}
}
}




