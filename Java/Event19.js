
        let textoriginal = document.getElementById("texto").innerText;
        let campoTexto = document.getElementById("campoTexto"); // Corrigido o id
        let resultado = document.getElementById("resultado");
        let contador = document.getElementById("contador");
        let reiniciarButton = document.getElementById("reiniciar");

        let tempoIniciado = false;
        let tempo = 0;
        let intervalid;

        function iniciarTempo() {
            tempoIniciado = true;
            intervalid = setInterval(function() {
                tempo++;
                contador.textContent = tempo;
            }, 1000);
        }

        function reiniciar() {
            clearInterval(intervalid);
            tempo = 0;
            contador.textContent = tempo;
            campoTexto.value = "";
            campoTexto.disabled = false;
            resultado.textContent = "";
            tempoIniciado = false;
        }

        campoTexto.addEventListener("input", function () {
            if (!tempoIniciado) {
                iniciarTempo();
            }

            if (campoTexto.value === textoriginal) {
                clearInterval(intervalid);
                resultado.textContent = "Parabéns! Você digitou corretamente.";
                campoTexto.disabled = true;
            }
        });

        reiniciarButton.addEventListener("click", reiniciar);
    </script>