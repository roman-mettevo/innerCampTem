function convertToUserTimezone(date) {
  const amsterdamTime = new Date(date).toLocaleString('en-US', { timeZone: 'Europe/Amsterdam' }); // получить время в часовом поясе Europe/Amsterdam
  const localTime = new Date(amsterdamTime); // сконвертировать время в объект Date
  const utcTime = new Date(localTime.getTime() + localTime.getTimezoneOffset() * 60 * 1000).toUTCString(); // добавить смещение часового пояса и сконвертировать в UTC
//  console.log(`Время в часовом поясе Europe/Amsterdam: ${amsterdamTime}`);
//  console.log(`Время в локальном часовом поясе: ${localTime}`);
  // return localTime.getHours() + ':' + localTime.getMinutes();
  const outputDate = new Date(localTime).getTime();
  const tzOffset = new Date().getTimezoneOffset() * 60 * 1000;
  const utcDate = new Date(outputDate - tzOffset);
  const hours = ('0' + utcDate.getUTCHours()).slice(-2);
  const minutes = ('0' + utcDate.getUTCMinutes()).slice(-2);
  return `${hours}:${minutes}`
  // return userFormattedDatetime;
}

convertToUserTimezone('2023-02-19T10:30:00')

function convertDateToFormat(date) {
  const inputDate = new Date(date);
  const year = inputDate.getFullYear();
  const month = ('0' + (inputDate.getMonth() + 1)).slice(-2);
  const day = ('0' + inputDate.getDate()).slice(-2);
  const hours = ('0' + inputDate.getHours()).slice(-2);
  const minutes = ('0' + inputDate.getMinutes()).slice(-2);
  const seconds = ('0' + inputDate.getSeconds()).slice(-2);
  const outputDate = `${year}-${month}-${day}T${hours}:${minutes}:${seconds}`;
  return outputDate;
}

document.querySelectorAll('.get-time_js').forEach(function (item, idx) {
  item.addEventListener('click', function () {
    let startTime = item.getAttribute('data-start')
    let endTime = item.getAttribute('data-end')
    let startTimeUser = convertToUserTimezone(convertDateToFormat(startTime));
    let endTimeUser = convertToUserTimezone(convertDateToFormat(endTime));
//    console.log('start-new' + startTimeUser)
//    console.log('end-new' + endTimeUser)
    item.innerHTML = startTimeUser + ' - ' + endTimeUser
  });
});
