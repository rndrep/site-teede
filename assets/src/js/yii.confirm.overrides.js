/**
 * Override the default yii confirm dialog. This function is
 * called by yii when a confirmation is requested.
 *
 * @param string message the message to display
 * @param string ok callback triggered when confirmation is true
 * @param string cancelCallback callback triggered when cancelled
 */
yii.confirm = function (message, okw, cancel) {
    bootbox.confirm(message, function(result) {
        if (result) { !okw || okw(); } else { !cancel || cancel(); }
    });
};