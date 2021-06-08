function doGet(request) {
  const name = request.parameter.name;
  const spreadsheet = SpreadsheetApp.openById('1tYCziig9hmANi0z_TAZYVL7dbd5rgF58lTuP_XkFa7s');
  const sheet = spreadsheet.getSheetByName('Characters');
  const data = sheet.getDataRange().getValues();
  const headers = data[0];
  for(var i = 1; i < data.length; i++) {
    const row = data[i];
    const row_name = row[0];
    const row_data = mapArrayToHeaders(row,headers);
    if(name == row_data.page_name){
      return ContentService.createTextOutput(JSON.stringify({characterData: row_data})).setMimeType(ContentService.MimeType.JSON);
    }
  }
  return ContentService.createTextOutput(JSON.stringify(request))
    .setMimeType(ContentService.MimeType.JSON);
}

function test_doGet() {
  const request = {
    parameter: {
      name: "Mae"
    }
  };
  const output = doGet(request);
  Logger.log(output);
}