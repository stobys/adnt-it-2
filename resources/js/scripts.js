function clearInputGroupField(item, event) {
    $(item).closest('.input-group').find(':input')
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .removeAttr('checked')
        .removeAttr('selected');
}

function submitFilterForm(item, event)
{
    $(item).closest('form').find('button:submit').click();
}

function clearFilterForm(item, event)
{
    $(item).closest('form').find(':input')
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .removeAttr('checked')
        .removeAttr('selected');

    $(item).closest('form').submit();
}

function clearForm( form ) {
    $(form).find(':input')
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .removeAttr('checked')
        .removeAttr('selected');
}

function showLoader()
{
    $('#loading-wrapper').slideDown(500);
}

function hideLoader()
{
    $('#loading-wrapper').slideUp(500);
}

function toggleLoader()
{
    $('#loading-wrapper').slideToggle(300);
}

function collapseAllBoxes()
{
	$('[data-widget="collapse"]').closest('.box').boxWidget('collapse');
}

function expandAllBoxes()
{
	$('[data-widget="collapse"]').closest('.box').boxWidget('expand');
}

function toggleAllBoxes()
{
	$('[data-widget="collapse"]').closest('.box').boxWidget('toggle');
}

function addAnswerRow(item, event)
{
	return $.post( $(item).data('target'), {quiz_id: $('#quiz_id').val()}, function(data) {
        if ( data.errno ) {
            //showMsgBox(data.errmsg, 'error');
            alert(data.errno);
        }
        else {
    		try {
				$('#answers-list').append(data.html);

	            //callback.call(data.callback, data);
	            //$('#dialog-box').dialog('close');
	            //showMsgBox(data.errmsg, 'success');
			}
			catch(error) {
				console.log(error)
				myAPP.hideLoader();
			}
        }
    }, 'json')
    .always(function(){
    	myAPP.hideLoader();
    }) && false;
}

function deleteAnswerRow(item, event)
{
	var row = $(item).closest('tr');
	var inputText = row.find(':input[type=text]');

	if ( inputText.val() == "" )
	{
		row.remove();
	}
	else if ( confirm('Czy na pewno usunąć odpowiedź?') )
	{
			row.remove();
	}
}

function updateResultsCalculationSelectTip(item, event)
{
	console.log( $(item).find(':selected').data('hint') );

	var inputGroup = $(item).closest('.input-group');

	// -- reinit tooltips
	initTooltips();
}

function showResultsCalculatorExplonationBox(item, event) {
	console.log( $(item).data('hint') );
}

function showQuestionsImportModal(item, event)
{
    $('#qas-import-modal').modal({
        keyboard: false
    });

}

function clearFileInput(item, event)
{
    $(item).closest('div').find(':file[data-toggle=filestyle]').filestyle('clear');
}

function changeAnswerTagOnQuiz(item, event)
{
    console.log('changeAnswerTagOnQuiz');
    console.log( $('#answers-list').find(':radio, :checkbox').length );

    $('#answers-list').find(':radio, :checkbox').attr('type', $(item).find(':selected').data('tag'));
    initIChecks();
}
