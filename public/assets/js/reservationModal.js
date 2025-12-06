// State variables
    let checkInDay = null;
    let checkOutDay = null;
    const currentYear = 2025;
    const currentMonth = 12;

    // Room Selection
    function selectRoom(el) {
        document.querySelectorAll('.room-card').forEach(card => card.classList.remove('selected'));
        el.classList.add('selected');
        el.querySelector('input').checked = true;
    }

    // Date Logic
    function handleDateClick(day) {
        // Case 1: Start new selection (if both full or nothing selected)
        if ((checkInDay && checkOutDay) || !checkInDay) {
            checkInDay = day;
            checkOutDay = null;
        } 
        // Case 2: User clicks date BEFORE current check-in (reset start)
        else if (day < checkInDay) {
            checkInDay = day;
            checkOutDay = null;
        } 
        // Case 3: User clicks date AFTER check-in (set end)
        else if (day > checkInDay) {
            checkOutDay = day;
        }
        // Case 4: User clicks same date (deselect)
        else if (day === checkInDay) {
            checkInDay = null;
            checkOutDay = null;
        }

        updateInputs();
        renderCalendar();
    }

    function updateInputs() {
        // Helper to format 2025-12-05
        const format = (d) => d ? `${currentYear}-${currentMonth}-${d < 10 ? '0'+d : d}` : '';
        
        document.getElementById('inputCheckIn').value = format(checkInDay);
        document.getElementById('inputCheckOut').value = format(checkOutDay);
    }

    function renderCalendar() {
        const days = document.querySelectorAll('.calendar-day[data-day]');
        
        days.forEach(el => {
            const dayNum = parseInt(el.getAttribute('data-day'));
            
            // Reset classes
            el.className = 'calendar-day';

            // Logic
            if (dayNum === checkInDay) {
                el.classList.add('start-date');
            } 
            else if (dayNum === checkOutDay) {
                el.classList.add('end-date');
            } 
            else if (checkInDay && checkOutDay && dayNum > checkInDay && dayNum < checkOutDay) {
                el.classList.add('in-range');
            }
        });
    }