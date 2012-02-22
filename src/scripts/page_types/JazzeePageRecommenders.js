/**
 * The JazzeePageRecommenders type
  @extends JazzeePage
 */
function JazzeePageRecommenders(){}
JazzeePageRecommenders.prototype = new JazzeePage();
JazzeePageRecommenders.prototype.constructor = JazzeePageRecommenders;

/**
 * Create a new RecommendersPage with good default values
 * @param {String} id the id to use
 * @returns {RecommendersPage}
 */
JazzeePageRecommenders.prototype.newPage = function(id,title,typeId,typeName,typeClass,status,pageBuilder){
  var page = JazzeePage.prototype.newPage.call(this, id,title,typeId,typeName,typeClass,status,pageBuilder);
  page.setVariable('lorDeadline', '');
  page.setVariable('lorDeadlineEnforced', 0);
  page.setVariable('recommenderEmailText', "Dear %RECOMMENDER_FIRST_NAME% %RECOMMENDER_LAST_NAME%,\n"
      + "%APPLICANT_NAME% has requested a letter of recommendation from you in support of their application for admission to our program. \n"
      + "We use an online system to collect letters of recommendation.  You have been assigned a unique URL for accessing this system.  Please save this email so that you can return to your letter at a later date. \n"
      + "Click the following link to access the online system; or, you may need to copy and paste this link into your browser. \n"
      + "%LINK% \n");
  return page;
};

JazzeePageRecommenders.prototype.workspace = function(){
  JazzeePage.prototype.workspace.call(this);
  var pageClass = this;
  $('#pageToolbar').append(this.pagePropertiesButton());

  $('#workspace').append(this.editLorPage());
};

/**
 * Create the page properties dropdown
*/
JazzeePageRecommenders.prototype.pageProperties = function(){
  var pageClass = this;
  
  var div = $('<div>');
  div.append(this.isRequiredButton());
  div.append(this.showAnswerStatusButton());
  
  var slider = $('<div>');
  slider.slider({
    value: this.min,
    min: 0,
    max: 20,
    step: 1,
    slide: function( event, ui ) {
      pageClass.setProperty('min', ui.value);
      $('#minValue').html(pageClass.min == 0?'No Minimum':pageClass.min);
    }
  });
  div.append($('<p>').html('Minimum Recommendations Required ').append($('<span>').attr('id', 'minValue').html(this.min == 0?'No Minimum':this.min)));
  div.append(slider);
  
  
  var slider = $('<div>');
  slider.slider({
    value: this.max,
    min: 0,
    max: 20,
    step: 1,
    slide: function( event, ui ) {
      pageClass.setProperty('max', ui.value);
      $('#maxValue').html(pageClass.max == 0?'No Maximum':pageClass.max);
    }
  });
  div.append($('<p>').html('Maximum Recommendations Allowed ').append($('<span>').attr('id', 'maxValue').html(this.max == 0?'No Maximum':this.max)));
  div.append(slider);
  
  if(!this.isGlobal || this.pageBuilder.editGlobal) div.append(this.editLOREmailButton());
  if(!this.isGlobal || this.pageBuilder.editGlobal) div.append(this.deadlineEnforcedButton());
  if(!this.isGlobal || this.pageBuilder.editGlobal) div.append(this.deadlineButton());
  return div;
};

/**
 * Edit the recommender email
 * @return {jQuery}
 */
JazzeePageRecommenders.prototype.editLOREmailButton = function(){
  var pageClass = this;
  var obj = new FormObject();
  var field = obj.newField({name: 'legend', value: 'Edit Email to Recommenders'});
  var replace = [
    {title: 'Applicant Name', replacement: '%APPLICANT_NAME%'},
    {title: 'Recommendation Dealine', replacement:'%DEADLINE%'},
    {title: 'Link to the Recommendation', replacement:'%LINK%'},
    {title: 'Recommender First Name', replacement:'%RECOMMENDER_FIRST_NAME%'},
    {title: 'Recommender Last Name', replacement:'%RECOMMENDER_LAST_NAME%'},
    {title: 'Recommender Institution', replacement:'%RECOMMENDER_INSTITUTION%'},
    {title: 'Recommender Phone', replacement:'%RECOMMENDER_EMAIL%'},
    {title: 'Recommender Email', replacement:'%RECOMMENDER_PHONE%'}
  ];
  field.instructions = 'The following will be replaced with the applicant input for this recommender: ';
  for(var i in replace){
    field.instructions += '<br />' + replace[i].replacement + ': ' + replace[i].title;
  }
  
  var element = field.newElement('Textarea', 'recommenderEmailText');
  element.label = 'Email Text';
  element.required = true;
  element.value = this.getVariable('recommenderEmailText');
  
  var dialog = this.displayForm(obj);
  $('form', dialog).bind('submit',function(e){
    pageClass.setVariable('recommenderEmailText', $('textarea[name="recommenderEmailText"]', this).val());
    pageClass.workspace();
    dialog.dialog("destroy").remove();
    return false;
  });//end submit
  var button = $('<button>').html('Edit Email to Recommenders').bind('click',function(){
    $('.qtip').qtip('api').hide();
    dialog.dialog('open');
  }).button({
    icons: {
      primary: 'ui-icon-pencil'
    }
  });
  return button;
};

/**
 * Button for choosing to enforce teh deadline
 * @return {jQuery}
 */
JazzeePageRecommenders.prototype.deadlineEnforcedButton = function(){
  var pageClass = this;
  var span = $('<span>');
  span.append($('<input>').attr('type', 'radio').attr('name', 'lorDeadlineEnforced').attr('id', 'enforced').attr('value', '1').attr('checked', this.getVariable('lorDeadlineEnforced')==1)).append($('<label>').html('Enforced').attr('for', 'enforced'));
  span.append($('<input>').attr('type', 'radio').attr('name', 'lorDeadlineEnforced').attr('id', 'notenforced').attr('value', '0').attr('checked', this.getVariable('lorDeadlineEnforced')==0)).append($('<label>').html('Not Enforced').attr('for', 'notenforced'));
  span.buttonset();
  
  $('input', span).bind('change', function(e){
    $('.qtip').qtip('api').hide();
    pageClass.setVariable('lorDeadlineEnforced', $(e.target).val());
  });
  return $('<p>').html('Deadline: ').append(span);
};

/**
 * Edit the recommender deadline
 * @return {jQuery}
 */
JazzeePageRecommenders.prototype.deadlineButton = function(){
  var pageClass = this;
  var button = $('<button>').html('Set Recommendation Deadline').bind('click',function(){
    $('.qtip').qtip('api').hide();
    var dialog = pageClass.createDialog();
    dialog.append($('<div>').attr('id', 'lorDeadlineForm').addClass('yui-g'));
    pageClass.deadlineForm(pageClass.getVariable('lorDeadline')!='');
    var button = $('<button>').html('Save').bind('click',function(){
      if($('#lorDeadlineForm input[name="hasDeadline"]:checked').val() == 1){
        pageClass.setVariable('lorDeadline', $('#lorDeadlineForm input[name="deadline"]').val());
      } else {
        pageClass.setVariable('lorDeadline', '');
      }
      pageClass.workspace();
      dialog.dialog("destroy").remove();
      return false;
    }).button({
      icons: {
        primary: 'ui-icon-disk'
      }
    });
    dialog.append(button);
    dialog.dialog('open');
  }).button({
    icons: {
      primary: 'ui-icon-pencil'
    }
  });
  return button;
};

/**
 * lorDeadline dialog content
 * @param Boolean picker
 * @return {jQuery}
 */
JazzeePageRecommenders.prototype.deadlineForm = function(picker){
  var pageClass = this;
  $('#lorDeadlineForm').empty();
  if(picker){
    var input = $('<input>').attr('type', 'text').attr('name', 'deadline').attr('id', 'deadline').attr('value', pageClass.getVariable('lorDeadline'));
    $('#lorDeadlineForm').append($('<div>').addClass('yui-u first').append(input));
    input.AnyTime_noPicker().AnyTime_picker({
      labelTitle: 'Choose Deadline',
      hideInput: true,
      placement: 'inline'
    });
  }
  
  var span = $('<span>');
  span.append($('<input>').attr('type', 'radio').attr('name', 'hasDeadline').attr('id', 'seperate').attr('value', '1').attr('checked', picker)).append($('<label>').html('Seperate Deadline').attr('for', 'seperate'));
  span.append($('<input>').attr('type', 'radio').attr('name', 'hasDeadline').attr('id', 'same').attr('value', '0').attr('checked', !picker)).append($('<label>').html('Same As Application').attr('for', 'same'));
  span.buttonset();

  $('input', span).bind('change', function(e){
    pageClass.deadlineForm($(e.target).val() == 1);
  });
  $('#lorDeadlineForm').append($('<div>').addClass('yui-u').append(span));
};

/**
 * Get the recommendation page (it is the first child)
 * @returns {JazzeePage} | false
 */
JazzeePageRecommenders.prototype.getRecommendationPage = function(){
  if($.isEmptyObject(this.children)) return false;
  for (var firstId in this.children) break;
  return this.children[firstId];
};

/**
 * Edit the LOR page
 */
JazzeePageRecommenders.prototype.editLorPage = function(){
  var pageClass = this;
  var div = $('<div>');
  
  var lorPage = this.getRecommendationPage();
  if(!lorPage){
    var dropdown = $('<ul>');
    for(var i = 0; i < this.pageBuilder.pageTypes.length; i++){
      var item = $('<a>').html(this.pageBuilder.pageTypes[i].typeName).attr('href', '#').data('pageType', this.pageBuilder.pageTypes[i]);
      item.bind('click', function(e){
        var pageType = $(e.target).data('pageType');
        var child = new window[pageType.typeClass].prototype.newPage('newchildpage' + pageClass.pageBuilder.getUniqueId(),'Recommendation',pageType.id,pageType.typeName,pageType.typeClass,'new',pageClass.pageBuilder);
        pageClass.addChild(child);
        pageClass.markModified();
        div.replaceWith(pageClass.editLorPage());
        return false;
      });
      //for now only allow the standard page
      if(this.pageBuilder.pageTypes[i].typeClass=='JazzeePageStandard')dropdown.append($('<li>').append(item));
    }
    var button = $('<button>').html('Select Recommendation Page Type').button();
    button.qtip({
      position: {
        my: 'bottom-left',
        at: 'bottom-right'
      },
      show: {
        event: 'click'
      },
      hide: {
        event: 'unfocus click',
        fixed: true
      },
      content: {
        text: dropdown,
        title: {
          text: 'Choose a page type',
          button: true
        }
      }
    });
    div.append(button)
  } else {
    var button = $('<button>').html('Edit Recommendation Page').data('page', lorPage).bind('click',function(){
      var page = $(this).data('page');
      page.workspace();
      //empty the toolbar becuase the delete/copy are going to be wrong
      $('#pageToolbar .copy').remove();
      $('#pageToolbar .delete').remove();
      $('#pageToolbar .properties').remove();
      var button = $('<button>').html('Back to '+pageClass.title).bind('click', function(){
        pageClass.workspace();
      });
      button.button({
        icons: {
          primary: 'ui-icon-arrowreturnthick-1-s'
        }
      });
      $('#pageToolbar').prepend(button);
      
      var button = $('<button>').html('Delete').data('page', page).bind('click', function(e){
        $('#editPage').effect('explode',500);
        pageClass.deleteChild($(e.target).parent().data('page'));
      });
      button.button({
        icons: {
          primary: 'ui-icon-trash'
        }
      });
      $('#pageToolbar').append(button);
    }).button({
      icons: {
        primary: 'ui-icon-pencil'
      }
    });
    div.append(button);
  }
  return div;
};