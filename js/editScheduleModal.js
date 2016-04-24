$(document).on('click', '.list-close', function () {
  $(this).parents('div.card').fadeOut();
});
function clearScheduleInput(){
  $('#new-schedule-name').val('');
  $('#new-schedule-link').val('');
}
function addScheduleData(name,link,push){
  if (!(name in scheduleListData)){
    var tempDict = {};
    tempDict['name'] = name;
    tempDict['link'] = link;
    scheduleListData[name] = tempDict;
    console.log(scheduleListData);
  }
  if (push === true){
    addScheduleItem(name,link);
    clearScheduleInput();
  }
}
function addScheduleItem(name,link){
  $('#new-schedule-list').append('<div class="card"><div class="row"><div class="col-sm-4" style="text-align:center;"><h5>' + name + '</h5></div><div class="col-sm-5" style="text-align:center;"><h5><a href="'+ link + '/">'+ link +'</a></h5></div><div class="col-sm-2" style="color:white;text-align:right;"><button class="btn btn-danger btn-lg list-close" onclick="removeScheduleData(\'' + name + '\')"><span class="fa fa-remove"></span></button></div></div></div>');
}
function removeScheduleData(name,force){
  if (name in scheduleListData){
    delete scheduleListData[name];
  }
}
function revertScheduleData(){
  scheduleListData = scheduleListDataOld;
  clearScheduleInput();
}

function submitSchedule(){
  $.ajax({
    method: "POST",
    url: "admin.php?editSchedule",
    data: { "data": scheduleListData }
  })
  /*.done(function() {
    alert( "Success");
  })*/;
}

var scheduleData = JSON.parse(httpGet("api/schedule_data.json"));
console.log(scheduleData);

var scheduleListData = {};

for (var key in scheduleData["data"]){
  addScheduleData(scheduleData["data"][key]["name"],scheduleData["data"][key]["link"], true);
}

var scheduleListDataOld = scheduleListData;
