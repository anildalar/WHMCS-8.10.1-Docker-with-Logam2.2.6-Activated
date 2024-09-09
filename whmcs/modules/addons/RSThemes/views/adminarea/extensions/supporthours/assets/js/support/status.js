function setSupportStatus(){
    dayjs.extend(window.dayjs_plugin_utc)
    dayjs.extend(window.dayjs_plugin_timezone)
    dayjs.extend(window.dayjs_plugin_isoWeek)
    dayjs.extend(window.dayjs_plugin_isBetween)
    dayjs.extend(window.dayjs_plugin_relativeTime)
    dayjs.extend(window.dayjs_plugin_duration)
    dayjs.extend(window.preciseDiff);

    let timezone = $('[data-timezone]').attr('data-timezone');
    dayjs.tz.setDefault(timezone);

    let weekdays = ["","Mon","Tue","Wed","Thu","Fri","Sat","Sun"];

    let startingDay =  $('[data-starting-day]').attr('data-starting-day');
    let endingDay =  $('[data-ending-day]').attr('data-ending-day');
    $('[data-starting-day]').text(weekdays[startingDay]);
    $('[data-ending-day]').text(weekdays[endingDay]);
    let startingDayInt = parseInt(startingDay);
    let endingDayInt = parseInt(endingDay);
    
    let startingTime = $('.operating-hour-val').find('.starting-hour').attr('data-starting-hour').split(':');
    startingTime[0] = startingTime[0].replace(/^0+/, ''); 
    let endingTime = $('.operating-hour-val').find('.ending-hour').attr('data-ending-hour').split(':');
    endingTime[0] = endingTime[0].replace(/^0+/, ''); 

    let currentDate = new Date()  
    let now = dayjs(currentDate).tz()
    let startTime = dayjs(now).hour(startingTime[0]).minute(startingTime[1]);
    let endTime = dayjs(now).hour(endingTime[0]).minute(endingTime[1]) ;
    
    let statusOnline = document.querySelector('.status-online');
    let statusOffline = document.querySelector('.status-offline');
 
    
    if(checkWorkTime() && checkIsWeekday() ){         
        setStatusOnline()
    }else{
        setStatusOffline() 
    }
    function checkWorkTime(){
        return dayjs(now).isBetween(startTime, endTime)
    }
    function checkIsWeekday(){
        if (startingDayInt > endingDayInt){
            let range_one = dayjs(now).isBetween(dayjs(startTime).isoWeekday(0), dayjs(endTime).isoWeekday(endingDayInt));
            let range_two = dayjs(now).isBetween(dayjs(startTime).isoWeekday(startingDayInt), dayjs(endTime).isoWeekday(7));
            if (range_one || range_two){
                return true; 
            }
        }
        else{
            return dayjs(now).isBetween(dayjs(startTime).isoWeekday(startingDayInt), dayjs(endTime).isoWeekday(endingDayInt))
        }
 
    }
    function getTimeOnlineLeft(){
        return Math.round(endTime.diff(now, 'hour', true));
    }
    function getTimeOnlineLeftMinutes(){
        return Math.round(endTime.diff(now, 'minute', true))
    }
    function getTimeToOnline(){        
        if(startingDayInt > endingDayInt){
            var diffDays = startingDayInt - dayjs(now).isoWeekday();
        }else{
            if(dayjs(now).isoWeekday() < endingDayInt){
                var diffDays = startingDayInt - dayjs(now).isoWeekday();
            }else{
                var diffDays = (7 - dayjs(now).isoWeekday() + startingDayInt);
            }
        }   
        return dayjs.preciseDiff(now, startTime.add(diffDays, 'day'));
    }
    function setStatusOnline(){
        // if(statusOnline.classList.contains('hidden')){
        //     statusOnline.classList.remove('hidden')
        //     statusOffline.classList.add('hidden')
        // }
        let onlineHoursLeft = getTimeOnlineLeft()
        let onlineMinuteLeft = getTimeOnlineLeftMinutes ()
        let onlineStatusContent;
        if(onlineHoursLeft === 0){
            onlineStatusContent = ` <span class="label label-success">Online</span> Support is available for next <b>${onlineMinuteLeft} minute(s)</b>`
        } else {
            onlineStatusContent = ` <span class="label label-success">Online</span> Support is available for next <b>${onlineHoursLeft} hour(s)</b>`
        }
        // statusOnline.innerHTML = onlineStatusContent;
    }
    
    function setStatusOffline(){
        // if(statusOffline.classList.contains('hidden')){
        //     statusOffline.classList.remove('hidden')
        //     statusOnline.classList.add('hidden')
        // }
        let time; 
        time = getTimeToOnline()
        let offlineStatusContent = ` Support will be available in <b>${time}</b><span class="label label-danger">Offline</span> `;
        // statusOffline.innerHTML = offlineStatusContent;
    }
}

document.addEventListener("DOMContentLoaded", function(event) {
    setSupportStatus()
}) 
