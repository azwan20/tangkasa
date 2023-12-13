<style>
    body {
        font-family: 'Arial', sans-serif;
        text-align: center;
    }

    input {
        width: 200px;
        padding: 10px;
        margin: 5px;
        font-size: 16px;
    }

    button {
        width: 50px;
        padding: 10px;
        margin: 5px;
        font-size: 16px;
        cursor: pointer;
    }
</style>

<h2>Calculator</h2>

<input type="text" id="display" readonly>

<br>

<button onclick="clearDisplay()">C</button>
<button onclick="appendToDisplay('7')">7</button>
<button onclick="appendToDisplay('8')">8</button>
<button onclick="appendToDisplay('9')">9</button>
<button onclick="appendToDisplay('/')">/</button>

<br>

<button onclick="appendToDisplay('4')">4</button>
<button onclick="appendToDisplay('5')">5</button>
<button onclick="appendToDisplay('6')">6</button>
<button onclick="appendToDisplay('*')">*</button>

<br>

<button onclick="appendToDisplay('1')">1</button>
<button onclick="appendToDisplay('2')">2</button>
<button onclick="appendToDisplay('3')">3</button>
<button onclick="appendToDisplay('-')">-</button>

<br>

<button onclick="appendToDisplay('0')">0</button>
<button onclick="appendToDisplay('.')">.</button>
<button onclick="calculateResult()">=</button>
<button onclick="appendToDisplay('+')">+</button>

<script>
    function setActiveLink(element) {
        var allLinks = document.querySelectorAll('.link');
        allLinks.forEach(link => {
            link.classList.remove('active');
        });

        element.classList.add('active');
    }

    function appendToDisplay(value) {
        document.getElementById('display').value += value;
    }

    function clearDisplay() {
        document.getElementById('display').value = '';
    }

    function calculateResult() {
        try {
            const result = eval(document.getElementById('display').value);
            document.getElementById('display').value = result;
        } catch (error) {
            document.getElementById('display').value = 'Error';
        }
    }
</script>