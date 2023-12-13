<style>
    body {
        font-family: 'Arial', sans-serif;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        height: 100px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    td {
        cursor: pointer;
    }

    .today {
        background-color: #4CAF50;
        color: white;
    }

    td.blue-bg {
        background-color: #3498db;
        color: white;
    }

    td.red-bg {
        background-color: #e74c3c;
        color: white;
    }
</style>
<div>
    <h4>Calendar</h4>
    <table>
        <thead>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
        </thead>
        <tbody id="calendar-body">
        </tbody>
    </table>
</div>
<div class="colors d-flex">
    Ket :
    <span>
        <div style="background-color: red;"></div>
        <div style="background-color: green;"></div>
    </span>
    <span>
        <p>Tamalanrea</p>
        <p>Antang</p>
    </span>
    <span style="margin-left: 50px;">
        <div style="background-color: green;"></div>
        <div style="background-color: purple;"></div>
    </span>
    <span>
        <p>Antang</p>
        <p>A.P. Pettarani</p>
    </span>
</div>
<script>
    var isEditMode = false;
    var selectedColor;

    document.addEventListener('DOMContentLoaded', function() {
        renderCalendar();
    });

    function renderCalendar() {
        const today = new Date();
        const currentMonth = today.getMonth();
        const currentYear = today.getFullYear();

        const calendarBody = document.getElementById('calendar-body');
        calendarBody.innerHTML = '';

        const firstDayOfMonth = new Date(currentYear, currentMonth, 1);
        const lastDayOfMonth = new Date(currentYear, currentMonth + 1, 0);
        const daysInMonth = lastDayOfMonth.getDate();

        let dateCounter = 1;
        let isCurrentMonth = false;

        for (let i = 0; i < 6; i++) {
            const row = document.createElement('tr');

            for (let j = 0; j < 7; j++) {
                const cell = document.createElement('td');

                if (i === 0 && j < firstDayOfMonth.getDay()) {
                    cell.innerHTML = '';
                } else if (dateCounter > daysInMonth) {
                    cell.innerHTML = '';
                } else {
                    cell.innerHTML = dateCounter;
                    isCurrentMonth =
                        dateCounter === today.getDate() && currentMonth === today.getMonth() && currentYear === today.getFullYear();
                    cell.classList.add(isCurrentMonth ? 'today' : 'other-month');
                    cell.addEventListener('click', onDateCellClick);
                    dateCounter++;
                }

                row.appendChild(cell);
            }
            calendarBody.appendChild(row);
        }
    }

    function onDateCellClick(event) {
        if (isEditMode) {
            selectedColor = prompt('Choose a color:');
            if (selectedColor) {
                event.target.style.backgroundColor = selectedColor;
            }
        }
    }

    function editCalendar() {
        isEditMode = true;
        alert("Silakan klik tanggal dan input warna: | red | green | purple")

    }
    var colorPicker = document.getElementById('colorPicker');
    colorPicker.addEventListener('input', function(event) {
        var selectedColor = event.target.value;
        localStorage.setItem('selectedColor', selectedColor);
    });
    var savedColor = localStorage.getItem('selectedColor');
    if (savedColor) {
        colorPicker.value = savedColor;
    }
</script>