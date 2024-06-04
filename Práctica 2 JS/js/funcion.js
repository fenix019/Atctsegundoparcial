 function calcular() {
            const valor1 = parseFloat(document.getElementById('valor1').value);
            const valor2 = parseFloat(document.getElementById('valor2').value);
            const operador = document.getElementById('operador').value;
            let resultado;

            switch (operador) {
                case '+':
                    resultado = valor1 + valor2;
                    break;
                case '-':
                    resultado = valor1 - valor2;
                    break;
                case '*':
                    resultado = valor1 * valor2;
                    break;
                case '/':
                    if (valor2 !== 0) {
                        resultado = valor1 / valor2;
                    } else {
                        resultado = "Error: División por cero";
                    }
                    break;
                default:
                    resultado = "Operador no válido";
            }

            document.getElementById('resultado').innerText = "Resultado: " + resultado;
        }